<?php
// .-----------------------------------------------------------------------------------
// | WE TRY THE BEST WAY
// |-----------------------------------------------------------------------------------
// | Author: 贝贝 <hebiduhebi@163.com>
// | Copyright (c) 2013-2015, http://www.gooraye.net. All Rights Reserved.
// |-----------------------------------------------------------------------------------

define('BOYE_SYS_NAME',true);
define("PROJECT_NAME","myHoney");
define("ITBOYE_CDN","http://cdn.itboye.com");

// 必须定义
define('UC_AUTH_KEY', 'FUS,=c->^wd3LY6}s0GgfKnb{po%1Ir+TRP`i8j"'); //加密KEY
define('UC_APP_ID', 1); //应用ID
define('UC_API_TYPE', 'Model'); //可选值 Model / Service
define('UC_DB_DSN', 'mysql://root:root@127.0.0.1:3306/boye_ceshi'); // 数据库连接，使用Model方式调用API必须配置此项
define('UC_TABLE_PREFIX', 'itboye_'); // 数据表前缀，使用Model方式调用API必须配置此项