<?php
/**
 * 使用非主从式数据库池的配置示例
 */
return array (
	'Santa_Db_Pdo' => array (
		'test' => array (
			'host' => '10.10.209.61', 
			'port' => 3306, 
			'database' => 'test', 
			'user' => 'sms', 
			'password' => 'sms', 
			'charset' => 'UTF8', 
			'persistent' => false, 
			'options' => array () 
		)
	) 
);
/**
 * 使用主从式数据库池的配置示例
 * master/slave
 */
/* return array (
	'Santa_Db_Pdo' => array (
		'test' => array (
			'master' => array (
				'host' => 'localhost', 
				'port' => 3306, 
				'database' => 'test', 
				'user' => 'root', 
				'password' => '', 
				'charset' => 'UTF8', 
				'persistent' => true, 
				'options' => array () 
			), 
			'slaves' => array (
				array (
					'host' => 'localhost', 
					'port' => 3306, 
					'database' => 'test', 
					'user' => 'root', 
					'password' => '', 
					'charset' => 'UTF8', 
					'persistent' => true, 
					'options' => array () 
				), 
				array (
					'host' => 'localhost', 
					'port' => 3306, 
					'database' => 'test', 
					'user' => 'root', 
					'password' => '', 
					'charset' => 'UTF8', 
					'persistent' => true, 
					'options' => array () 
				) 
			) 
		), 
		'test1' => array (
			'master' => array (
				'host' => 'localhost', 
				'port' => 3306, 
				'database' => 'test', 
				'user' => 'root', 
				'password' => '', 
				'charset' => 'UTF8', 
				'persistent' => true, 
				'options' => array () 
			) 
		) 
	) 
); */