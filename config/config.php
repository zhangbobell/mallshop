<?php
return array(
	'logs'=>array(
		'path'=>'logs/log',
		'type'=>'file'
	),
	'DB'=>array(
		'type'=>'mysqli',
        'tablePre'=>'es_',
		'read'=>array(
			array('host'=>'hdm10011171.my3w.com','user'=>'hdm10011171','passwd'=>'aliyun123456','name'=>'hdm10011171_db'),
		),

		'write'=>array(
			'host'=>'hdm10011171.my3w.com','user'=>'hdm10011171','passwd'=>'aliyun123456','name'=>'hdm10011171_db',
		),
	),
	'interceptor' => array('themeroute@onCreateController','layoutroute@onCreateView'),
	'langPath' => 'language',
	'viewPath' => 'views',
	'skinPath' => 'skin',
    'classes' => 'classes.*',
    'rewriteRule' =>'url',
	'theme' => array('pc' => 'default','mobile' => 'mobile'),
	'skin' => array('pc' => 'default','mobile' => 'default'),
	'timezone'	=> 'Etc/GMT-8',
	'upload' => 'upload',
	'dbbackup' => 'backup/database',
	'safe' => 'cookie',
	'safeLevel' => 'none',
	'lang' => 'zh_sc',
	'debug'=> false,
	'configExt'=> array('site_config'=>'config/site_config.php'),
	'encryptKey'=>'94d7265c2c9e4e679a909cc697f875cf',
	'tb_appid'=>'1021786881',
	'tb_appkey'=>'sandboxb7688b3367451ddc8ea81d44b',
	'tb_callback_url'=>'http://mallshop.zhangbobell.cn/index.php?controller=publish&action=tb_oauth_cb'
);
?>