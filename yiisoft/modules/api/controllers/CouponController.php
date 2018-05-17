<?php
namespace api\controllers;
use app\models\ModelFactory;
use Exception;

/**
 * Created by PhpStorm.
 * User: Red
 * Date: 2018/2/13
 * Time: 23:25
 */
class CouponController extends ShoppingBaseController {

    function actionGetcoupon(){
        $request=\Yii::$app->request;
        $user_info = $request->bodyParams;
        if(!array_key_exists('user_id',$user_info))return json_encode([]);
        if($this->checkUserCouponExisted($user_info["user_id"])) {
            //得到该用户所有可使用的优惠券
            $coupon_valid = $this->_getvalidCoupons($user_info);
            return json_encode($coupon_valid);
        }
        return json_encode([]);
    }


    /**
     * 对应每个用户，如果这个用户领了这张优惠券，那么在bitmap里设置优惠券id这一位为1
     * 比如券id为1，那就setbit coupon_1的1号位设置为1。
     * 但是setbit是从左往右设置，而且从0开始，所以最后的bit结果是"01000......", 而转换字节的话是8个bit为一个byte，
     * 设置setbit返回值是该位置上上一次的值
     *
     * 所以是0x"0100 0000"=>dec"64"
     *
     * 存入数据库的办法：以字节的方式存储，8个bit变成一个byte。
     * 比如id为1和id为21的优惠券有效，最后存入的结果就是：64，0， 8
     *
     * select 认领bit from 用户优惠券认领表 where 用户id = '1'
     */
/*    function actionTestcoupon(){
        $request=\Yii::$app->request;
        //包含coupon_id, auth_id
        $coupon_info = $request->bodyParams;
        $vpro_auth=ModelFactory::loadModel("vpro_auth");
        $user_ids=$vpro_auth::find()->select('auth_id')->orderBy('auth_id')->asArray()->all();

        var_export($this->_getCouponIds($this->_convertAsciiStr2DecStr($this->redis->get('coupon_1'))));
        exit();
        foreach($user_ids as $v){
            $this->redis->setBit('coupon_'.$v['auth_id'], 1, 1);
            $this->redis->setBit('coupon_isexisted_'.$v['auth_id'], 1, 1);
            $vpro_user_coupon=ModelFactory::loadModel('vpro_user_coupon');
            if(!$vpro_user_coupon::findOne(['user_coupon_auth_id'=>$v['auth_id']])){
                $vpro_user_coupon->user_coupon_auth_id=$v['auth_id'];
                $vpro_user_coupon->user_coupon_bit=$this->_convertAsciiStr2DecStr($this->redis->get('coupon_'.$v['auth_id']));
                $vpro_user_coupon->user_coupon_isexisted_bit=$this->_convertAsciiStr2DecStr($this->redis->get('coupon_isexisted_'.$v['auth_id']));
                $vpro_user_coupon->insert();
            }
        }
    }*/

}