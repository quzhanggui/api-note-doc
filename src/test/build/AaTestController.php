<?php 
/**
 * @author lxw
 * @group(name="测试控制器", description="测试控制器描述",project="project")
 */

class AaTestController {
    
    function __construct() {
        parent::__construct();
    }

    /**
     * @ApiDescription(这是接口test1的描述)
     * @ApiMethod(post)
     * @ApiUrl(/hhhh/test1)
     * @ApiNotice(这是接口的说明)
     * @ApiSuccess(value="{'firstname' : 'lxw', 'lastname'  : 'lxlxw', 'lastLogin' : '2016-11-11'}")
     * @ApiExample(value="{'username':'lxw','password':'123456'}")
     * @ApiParams(name="id", type="integer", is_selected=true, description="User id")
     * @ApiParams(name="sort", type="enum[asc,desc]", description="User data")
     * @ApiReturn(name="id", type="integer", description="User id")
     * @ApiReturn(name="sort", type="enum[asc,desc]", description="sort data")
     * @ApiReturn(name="page", type="integer", description="data of page")
     * @ApiReturn(name="count", type="integer", description="data of page")
     */
    function test1(){
        echo 'hello';
    }
}