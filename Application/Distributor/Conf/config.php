<?php
/**
 * Created by PhpStorm.
 * User: hebidu
 * Date: 15/7/4
 * Time: 16:49
 */

return array(
    //'配置项'=>'配置值',
    'TMPL_PARSE_STRING'  =>array(
      	'__UPLOAD__' => __ROOT__.'/Public/Upload', // 更改默认的/Public 替换规则
        '__CDN__' => ITBOYE_CDN, // 更改默认的/Public 替换规则
        '__JS__'     => __ROOT__.'/Public/'.MODULE_NAME.'/js', // 增加新的JS类库路径替换规则
        '__CSS__'     => __ROOT__.'/Public/'.MODULE_NAME.'/css', // 增加新的JS类库路径替换规则
        '__IMG__'     => __ROOT__.'/Public/'.MODULE_NAME.'/imgs', // 增加新的JS类库路径替换规则

    ),

    'DEFAULT_THEME'=>'default',

    'SHOW_PAGE_TRACE'=>false,
    
	'REFERRER_NUM'=>3, //可获得佣金层次
);