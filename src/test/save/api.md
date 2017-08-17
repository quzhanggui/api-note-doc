
------------
[toc]

-----------------

##1.测试控制器


----------
### 1.1 这是接口test1的描述（/hhhh/test1）

| url        | 请求方式   | 
| --------   | -----:  | 
| /hhhh/test1     | post |  

入参
| 字段     | 是否必填   |   类型     | 说明                       |
|:---------|:----|:-----------|:-----------------------------|
|id|true|integer|User id|
|sort|false|enum[asc,desc]|User data|


入参实例：{'username':'lxw','password':'123456'}

出参
| 字段               | 类型  | 说明                  |
|:----------|:-------|:-----------------------|
|id|integer|User id|
|sort|enum[asc,desc]|sort data|
|page|integer|data of page|
|count|integer|data of page|


出参实例：{'firstname' : 'lxw', 'lastname'  : 'lxlxw', 'lastLogin' : '2016-11-11'}
##2.test另一个测试控制器


----------
### 2.1 这是接口test2的描述（/doc/test2）

| url        | 请求方式   | 
| --------   | -----:  | 
| /doc/test2     | post |  

入参
| 字段     | 是否必填   |   类型     | 说明                       |
|:---------|:----|:-----------|:-----------------------------|
|id|true|integer|User id|
|sort|false|enum[asc,desc]|User data|


入参实例：{'username':'lxw','password':'123456'}

出参
| 字段               | 类型  | 说明                  |
|:----------|:-------|:-----------------------|
|id|integer|User id|
|sort|enum[asc,desc]|sort data|
|page|integer|data of page|
|count|integer|data of page|


出参实例：{'firstname' : 'lxw', 'lastname'  : 'lxlxw', 'lastLogin' : '2016-11-11'}

----------
### 2.2 这是接口test3的描述（/doc/test3）

| url        | 请求方式   | 
| --------   | -----:  | 
| /doc/test3     | post |  

入参
| 字段     | 是否必填   |   类型     | 说明                       |
|:---------|:----|:-----------|:-----------------------------|
|id|true|integer|User id|
|sort|false|enum[asc,desc]|User data|


入参实例：{'username':'lxw','password':'123456'}

出参
| 字段               | 类型  | 说明                  |
|:----------|:-------|:-----------------------|
|id|integer|User id|
|sort|enum[asc,desc]|sort data|
|page|integer|data of page|
|count|integer|data of page|


出参实例：{'firstname' : 'lxw', 'lastname'  : 'lxlxw', 'lastLogin' : '2016-11-11'}

##附录

####搜索规则
*搜索条件组合方式，例如 search_key@like=keyword 表示搜索search_key这一关键字段包含关键字keyword的项*其中@是分割关键字段搜索方式的分隔符,一下分割符都是有效的*'='等于, '<>'不等于, '>'大于, '>='大于等于, '<'小于, '<='小于等于, 'LIKE'模糊搜索, 'IN'在指定枚举数据中,'NIN'或者'NOT IN'或者'NOTIN'排除指定枚举数据（枚举数据可以英文逗号（,）分隔或者是数组）,默认为=
*示例：{"name":"张三"｝等价于{"name@=":"张三"｝表示查询 name为张三的数据
*示例：{"cid@>=":10｝表示查询 cid大于等于10的数据
*示例：{"name@like":"张三"｝表示查询 name中有关键子 张三的数据
*示例：{"cid@not in":{[1,2]}]｝等价于{"cid@nin":"1,2"｝等价于{"cid@notin":"1,2"｝ 表示查询 cid不为 1或者2 的数据
*示例：{"cid@in":{[1,2]}]｝等价于{"cid@in":"1,2"｝表示查询 cid为1或者2 的数据

####排序规则
*排序条件组合方式:例如 orderby=id@desc,name@asc*排序字段只能放在orderby查询中，id表示排序字段，以@分割排序方式，desc表示倒序，默认asc正序