<?php
namespace app\controllers;
use app\common\Common;
use common\RedisInstance;
use Yii;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

class CombaseController extends Controller
{
    protected $redis;
    protected $params;
    protected $request;
    function init()
    {
        if (common::forbiddenAccess())
        {
            return json_encode($this->returnInfo('forbidden', $this->params['IP_FORBIDDEN']));
        }
        require "./../Qiniu/functions.php";
        parent::init(); // TODO: Change the autogenerated stub
        Yii::$app->user->enableSession=false;
        $this->enableCsrfValidation=false;
//        $this->redis = Yii::$app->get('redis');
        $this->redis = RedisInstance::getRedis();
        $this->params = \Yii::$app->params;
        $this->request = \Yii::$app->request;



//        header("Access-Control-Allow-Origin:http://127.0.0.1:8080");
//        header("Access-Control-Allow-Methods:GET,POST,PUT,DELETE,HEAD,OPTIONS");
//        header("Access-Control-Allow-Headers:Origin,X-Requested-With,Access-Control-Allow-Origin,Content-Type,If-Modified-Since");
    }
    function beforeAction($action)
    {
        $action = parent::beforeAction($action); // TODO: Change the autogenerated stub
        if (common::forbiddenAccess())
        {
            echo json_encode($this->returnInfo('forbidden', $this->params['IP_FORBIDDEN']));
            return false;
        }
        return $action;
    }

    function behaviors()
    {
        $behaviors = parent::behaviors(); // TODO: Change the autogenerated stub
        $behaviors=ArrayHelper::merge($behaviors,[
            [
                'class'=>Cors::className(),
                'cors'=>[
//                    'Origin' => ['http://localhost:8080','http://127.0.0.1:8080'],//定义允许来源的数组
                    'Origin' => ['http://localhost:9528','http://127.0.0.1:9528','http://localhost:8080','http://127.0.0.1:8080', 'http://223.112.88.211:9988', 'http://markzhu.imwork.net:10718'],//定义允许来源的数组
                    'Access-Control-Request-Method' => ['GET','POST','PUT','DELETE', 'HEAD', 'OPTIONS'],//允许动作的数组
                    'Access-Control-Request-Headers' => ['x-requested-with','content-type','if-modified-since', 'X-Token','Authorization'],
                    // Allow only headers 'X-Wsse'
//                    'Access-Control-Allow-Credentials' => true,
                    // Allow OPTIONS caching
//                    'Access-Control-Max-Age' => 3600,
                    // Allow the X-Pagination-Current-Page header to be exposed to the browser.
//                    'Access-Control-Expose-Headers' => ['X-Pagination-Current-Page'],
                ]
            ]
        ]);
        return $behaviors;
    }
    function returnInfo($data, $return_status='RETURN_SUCCESS') {
        $code = is_numeric($return_status) ? $return_status : $this->params[$return_status];
        return [
            'code' => $code,
            'data' => $data
        ];
    }
    function checkParams($keys, $method) {
        $body = [];
        foreach($keys as $k) {
            $body[$k] = $this->request->$method($k, false);
            if ($body[$k] === false) {
                return false;
            }
        }
        return $body;
    }
    protected $_errorHandlerModelName;
    /**
     * @property $code | Int, http 错误码
     * @property $message | String, 错误的具体信息
     * @property $file | string, 发生错误的文件
     * @property $line | Int, 发生错误所在文件的代码行
     * @property $created_at | Int, 发生错误的执行时间戳
     * @property $ip | string, 访问人的ip
     * @property $name | string, 错误的名字
     * @property $trace_string | string, 错误的追踪信息
     * @return 返回错误存储到mongodb的id，作为前端显示的错误编码
     * 该函数从errorHandler得到错误信息，然后保存到mongodb中。
     */
    public function saveByErrorHandler(
        $code, $message, $file, $line, $created_at,
        $ip, $name, $trace_string, $url, $req_info=[]
    ){
        $category = \Yii::$app->params['AppName'];
        $model = new $this->_errorHandlerModelName();
        $model->category     = $category;
        $model->code         = $code;
        $model->message      = $message;
        $model->file         = $file;
        $model->line         = $line;
        $model->created_at   = $created_at;
        $model->ip           = $ip;
        $model->name         = $name;
        $model->url          = $url;
        $model->request_info = $req_info;
        $model->trace_string = $trace_string;
        $model->save();
        return (string)$model[$this->getPrimaryKey()];

    }
    public function getPrimaryKey(){
        return '123';
    }

}