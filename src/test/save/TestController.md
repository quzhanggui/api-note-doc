

## 这是接口的描述

### 接口地址 
:192.168.0.1:80/doc/test

### 请求方式
:post

### 接口说明
:这是接口的说明

### 请求参数
| 字段     | 是否必填   |   类型     | 说明                       |
|:---------|:----|:-----------|:-----------------------------|
|id|true|integer|User id|
|sort|false|enum[asc,desc]|User data|


###  返回字段说明
| 字段               | 类型  | 说明                  |
|:----------|:-------|:-----------------------|
|id|integer|User id|
|sort|enum[asc,desc]|sort data|
|page|integer|data of page|
|count|integer|data of page|


### 返回结果 
{
    firstname : lxw,
	lastname : lxlxw,
	lastLogin : 2016-11-11,
	
}