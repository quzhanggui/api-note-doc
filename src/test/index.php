<?php
//示例这里是直接include 如果是用composer安装可以用composer自动加载
require '../apidoc.php';

$obj = new ApiDoc\ApiDoc();

//直接生成文档，采用程序默认配置
//$obj->build();

//根据配置的参数生成文档
$content = PHP_EOL.'##附录'.PHP_EOL;
$content .= PHP_EOL.'####搜索规则'.PHP_EOL;
$content .= '*搜索条件组合方式，例如 search_key@like=keyword 表示搜索search_key这一关键字段包含关键字keyword的项';
$content .= '*其中@是分割关键字段搜索方式的分隔符,一下分割符都是有效的';
$content .= "*'='等于, '<>'不等于, '>'大于, '>='大于等于, '<'小于, '<='小于等于, 'LIKE'模糊搜索, 'IN'在指定枚举数据中,'NIN'或者'NOT IN'或者'NOTIN'排除指定枚举数据（枚举数据可以英文逗号（,）分隔或者是数组）,默认为=".PHP_EOL;
$content .= '*示例：{"name":"张三"｝等价于{"name@=":"张三"｝表示查询 name为张三的数据'.PHP_EOL;
$content .= '*示例：{"cid@>=":10｝表示查询 cid大于等于10的数据'.PHP_EOL;
$content .= '*示例：{"name@like":"张三"｝表示查询 name中有关键子 张三的数据'.PHP_EOL;
$content .= '*示例：{"cid@not in":{[1,2]}]｝等价于{"cid@nin":"1,2"｝等价于{"cid@notin":"1,2"｝ 表示查询 cid不为 1或者2 的数据'.PHP_EOL;
$content .= '*示例：{"cid@in":{[1,2]}]｝等价于{"cid@in":"1,2"｝表示查询 cid为1或者2 的数据'.PHP_EOL;
$content .= PHP_EOL.'####排序规则'.PHP_EOL;
$content .= "*排序条件组合方式:例如 orderby=id@desc,name@asc";
$content .= "*排序字段只能放在orderby查询中，id表示排序字段，以@分割排序方式，desc表示倒序，默认asc正序";

$config = [
            'build_path' => __DIR__."/build/",
            'vender_path' => __DIR__."/save/",
            'template' => 'default',
            'template_ext' => '.md',
            'api_file_name' => 'api',
            'api_header' => PHP_EOL.'------------'.PHP_EOL.'[toc]'.PHP_EOL.PHP_EOL.'-----------------',
            'api_footer' => $content,
          ];
$obj->set($config)->build();
echo 'success';exit;