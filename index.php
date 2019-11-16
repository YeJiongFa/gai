<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
if (!version_compare(PHP_VERSION,'5.4.0','ge')) {
    exit( '您当前使用的PHP版本为：' . PHP_VERSION . '系统最低要求PHP5.4 版本！' );
}


// 定义应用目录
define('APP_PATH', __DIR__ . '/app/');
define('APP_NAME','admin');
define('HSYCMS_NAME', 'Hsycms'); //系统名称
define('HSYCMS_VERSION', 'v3.0'); //版本号


// 加载框架引导文件
require __DIR__ . '/libs/start.php';
