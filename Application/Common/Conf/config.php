<?php
return array(
	//'配置项'=>'配置值'
	'db_type'    =>   'mysql',
	'db_host'    =>   '127.0.0.1',
	'db_user'    =>   'sa',
	'db_pwd'     =>   'sa',
	'db_port'    =>    3306,
	'db_name'    =>    'xpcserver_db',
	'db_charset' =>    'utf8',
	'DEFAULT_MODULE' => 'Home',
	//'URL_PATHINFO_DEPR'=>'-',
	'MODULE_ALLOW_LIST' => array('Home','Admin','User'),
	'URL_ROUTER_ON'   => true,
);
