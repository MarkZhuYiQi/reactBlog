<?php

return [
    // 前后端非对称加密通信
    'private_key'                               =>          '-----BEGIN RSA PRIVATE KEY-----
MIICXAIBAAKBgQDwYV4IPkfNau3aUVojBYAlTH0ZK+4qGxYpmUMvbVy/cPBl++LN
Zjxa18IDvrbmeBUIJK3KwbTq8STA6bEPWQUtCU7Z+gGPuzmOJDFUttRrkHNcgA1R
nBwfdSg0x4wVN0vwnNYn1Wzni9urTC3weDEYTLpF/DBPATaN1lnCFzwciwIDAQAB
AoGAIWN02zJDaO30UcHBAmJONWAVdDyc3S5b+rU2Fs1a96BpU9ET5LHRqlCTu09v
Oj3tte7aUPJs/cE2+LC9DkOwKxdXIqadj4sFgGdOmH68Q2S+PHV5i2GYwoRUNxdJ
J8At9BNt4Cy+1GXHHCNX5C1wbnS0CeWiKMxuAgvlsG+31OkCQQD7vemziM/wn4fo
1MtqMvLLS8O/g1RQ01IVy/xii35wL3GhZpsMFZlRRNtCXNi9RjAWdIwtDNkNrhV0
SdMCtAc1AkEA9HJBz0g7thlZ/IHqtOqH1/qmrlDDlSFfBFW9g0iNvbLVDf9+Fsph
FQDH7SGCOJvF5g2FHdoiC4bwMB+6u4tMvwJARv5N09W3XpJ+z4iDPRXVJsPdFjtB
IfIWahM2v8u7AoQ+tVesTgIhVKvocZShgu8yTILdrS68X4FCh6LyIQcIKQJAUat6
4U445PZDYmHlkNxq1nYgCk1hiwnDPSeIUbyD3sVI+YxLDEJBfUrtgQSZBWDGFb6e
owKmLUPAK9PuB4ra8QJBALH0XzyJb5cdOCgiTKZTjevMft62Sysy0mCBCt9pjmwU
rnNmJz3ShQiEBFOdE1r73GB6KS+RXJG1LzD2naniyVk=
-----END RSA PRIVATE KEY-----',
    'public_key'                                =>          '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDwYV4IPkfNau3aUVojBYAlTH0Z
K+4qGxYpmUMvbVy/cPBl++LNZjxa18IDvrbmeBUIJK3KwbTq8STA6bEPWQUtCU7Z
+gGPuzmOJDFUttRrkHNcgA1RnBwfdSg0x4wVN0vwnNYn1Wzni9urTC3weDEYTLpF
/DBPATaN1lnCFzwciwIDAQAB
-----END PUBLIC KEY-----',

    // 用户登录相关
    'USER_TOKEN_EXISTS'                         =>          50012,
    'USER_TOKEN_ILLEGAL'                        =>          50008,
    'USER_TOKEN_NOT_FOUND'                      =>          50018,
    'USER_TOKEN_EXPIRED'                        =>          50014,
    'USER_PARAMS_NULL'                          =>          50016,

    'securityKey'=>'MarkZhu',
    'expireTime'                                =>          3600,
    'aliconfig' =>[
        'use_sandbox'                           =>          true,
        'app_id'                                =>          '2016082000290082',
        'partner'                               =>          '2088102172130805',
        'sign_type'                             =>          'RSA2',
        'ali_public_key'                        =>          'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA55OtHoprliJ1yerpF5SW3UkUATs5SP8Tgp3a88zwYxvdxtNA/smGLMBC79AgIYAKxK5FR4PfCaTbQKCjuO1DZJucJYxFjqrGmA59qW38LPJ2xhTyfXlcBR6xaooGnKMLhbqz4QyxpwggMZkwvHprYEx9lD1TMQWjpyRgr2SKuA+AbhD3BuM6AmdmDHzXEGTnqJJaggM+C4YX0jqADLgOHF5K2Vk+pOnC/6AFmDNYsVkO4eZPeENQ4YrWIxOEB5dkJFNgMX/8zLl9oUPGoSYfBpO/MzKZlKHM7tFlBD3urwMuAHsKkH5/I1l7FI2AqwQYesflGBaCqmyETh5tOztEKQIDAQAB',
        'rsa_private_key'=>'MIIEpQIBAAKCAQEA55OtHoprliJ1yerpF5SW3UkUATs5SP8Tgp3a88zwYxvdxtNA/smGLMBC79AgIYAKxK5FR4PfCaTbQKCjuO1DZJucJYxFjqrGmA59qW38LPJ2xhTyfXlcBR6xaooGnKMLhbqz4QyxpwggMZkwvHprYEx9lD1TMQWjpyRgr2SKuA+AbhD3BuM6AmdmDHzXEGTnqJJaggM+C4YX0jqADLgOHF5K2Vk+pOnC/6AFmDNYsVkO4eZPeENQ4YrWIxOEB5dkJFNgMX/8zLl9oUPGoSYfBpO/MzKZlKHM7tFlBD3urwMuAHsKkH5/I1l7FI2AqwQYesflGBaCqmyETh5tOztEKQIDAQABAoIBAQCNzO2a3+OVITDDHWbxm3jts0venScsvZRyzLo/w2QHLA8XKlCIM1pHmMrkEas7GC5/1L5zVhqCy0G+Rx85o3864dYxX71P6N6GSYlE8CYUV7vG+xipIGDqearls/LsgyIRFwwCaEV4JA+ij006fDO32d6joRGJ2Qwm0q2peIVAwoLz9nyr2zfIio+vX3VAXahcXkCPPOHV1b6zPL4tU0lnBuCdO6q6QU1yMRKAG/GVHT8ldekMqkzAGSoygE2c34Gp27emUvoRfESnCisnOwkimMaXnBs4WEhtaDULOy4CwFCkH8oeMb1MyyVEv0pHqXmLifWXKoJEpbD/G7Rs5rGpAoGBAPo2vyv3M4uf5j22YZ4JGzkx++Xv+V5E1Ni95FMmbLAuTelCYq/p+k92I78OC2AWjpVIvvbPdZ4Fe8SQukBJB6LxfluBC2q/XOq4+Ky1u+1miPxjE6RITrVMt4r1zkVJjEArJZW8WDikb0Wf8IB614F6vp+NdQ0VS9AbXXyt/rofAoGBAOzumXQvrDAJ3miDH7j44KyTJnE33WQaZBraCJ630YfxGUa07l3nX4YxeUkfQyYVAywZMQ1ko4kSpzZYCft8PEw09DdQm/dj6dKdfB5Jbmbeboz4MOd3CxdKa5fEQbKR9tmYcoTNcH64Hw3kWVXupd1h7EBkhTPoL6I3ZK+HxMi3AoGAOdZf2Fza+GJsyUUYSXyXY2AvdxZCkUzd2oACgEn4g70gW1PyFfHC341Sc/5eGMb+DHn1Un3gFTf1RRmjQ+rdrgeeiq5IolM7ujIpoVqc5yJ1dcm9J5NjRjtGjgOFu7RljAutM3CHAAjag8CVyk0a9Z4W5DDBptWOYbuBn6lkoUcCgYEAgWWNyTaAA3xgSxPRr2O80INM62hnMNR493E8Y/JgLK4v773AsOg78z3xz02TjqjLIrpfX8EmzyWwzK0oRoCDLdt9xPfxNhsLCEuaDbBs6yFvnu2tR7xsAjxSpoA4oR22gwAPCxhn580GqL+dSqEbVNy1+jTryn10BlPaWUL85eECgYEA3vS5CtLmR1ZhpXq96DkeFL472ZiZvOdueI7Zth3f1IoB4VnbkNYosfpHqXgIyDUmr1TVpuwt83EI9GEZMVRMZfNA9I0dAh06LmhDXvq0qcL+6EJBmdrtQPxccgDADMCn+6/n5sHgkMx7eFmN9vA38fHyhXDZkN0yI/zfrg4lafY=',
        'limit_pay'                             =>          ['credit_group'],
        'notify_url'                            =>          'http://223.112.88.211:9696/index.php/api/pay/paycallback',
        'return_url'                            =>          'http://223.112.88.211:9696/index.php/api/pay/paycallback',
        'return_raw'                            =>          false,
        'charset'                               =>          'utf-8',
        'Appname'                               =>          'shopping',
    ],
    'RETURN_SUCCESS'                            =>          20000,
    'REDIS_CONNECT_ERROR'                       =>          29997,
    'REDIS_OPERATE_ERROR'                       =>          29998,
    'PARAMS_ERROR'                              =>          29999,
    'QUERY_FAILURE'                             =>          29996,
    'COMMENTS_COUNT'                            =>          10,

    // 下单相关：
    'COURSES_NOT_FOUND'                         =>          70001,

    // 优惠券：
    'COUPON_ACCOUNT_CREATE_FAILED'              =>          71001,

    //购物车
    'CART_COURSES_DELETE_LOST'                  =>          73001,
    'CART_ADD_PRODUCT_ERROR'                    =>          73002,
    'CART_ITEM_SAVE_ERROR'                      =>          73003,
    'CART_CREATE_ERROR'                         =>          73004,
    'CART_ITEM_DELETE_FAILURE'                  =>          73005,
    'CART_IS_NULL'                              =>          73006,


    // 订单相关
    'COURSE_FRONT_END_MISMATCH'                 =>          72021,
    'COUPON_ENTRY_NOTEXIST_CREATD_FAILURE'      =>          72022,
    'COUPON_NOTEXIST_USED'                      =>          72023,
    'COUPON_DATE_MISMATCH'                      =>          72024,
    'COUPON_LIMIT_MISMATCH'                     =>          72025,
    'ORDER_PRICE_MINUS'                         =>          72026,
    'ORDER_PRICE_MISMATCH_FRONT_END'            =>          72027,
    'SUB_ORDER_INSERT_ERROR'                    =>          72028,
    'ORDER_PAGINATION_LIMIT'                    =>          10,

    'CREATE_ORDER'                              =>          79000,
    'DEL_CART_ITEM'                             =>          79019,

    // 支付相关
    'PAY_SUCCESS'                               =>          79020,
    'ORDER_NOT_EXIST'                           =>          79021,
    'PAY_ACCOUNT_INFO_MISMATCH'                 =>          79022,

    // 缓存相关
    'DB_MISS'                                   =>          2,  // 恶意积分
    'REDIS_MISS'                                =>          1,
    'SCORE_EXPIRE'                              =>          20,   // 恶意积分缓存时间
    'MISS_THRESHOLD'                            =>          30,
    'IP_FORBIDDEN'                              =>          10666   // ip禁止访问代码
];