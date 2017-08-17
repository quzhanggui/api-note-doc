<?php
//示例这里是直接include 如果是用composer安装可以用composer自动加载
require '../apidoc.php';

$obj = new ApiDoc\ApiDoc();

//直接生成文档，采用程序默认配置
//$obj->build();

//根据配置的参数生成文档
$config = [
            'build_path' => __DIR__."/build/",
            'vender_path' => __DIR__."/save/",
            'template' => 'default',
            'template_ext' => '.md'
          ];
$obj->set($config)->build();
echo 'success';exit;