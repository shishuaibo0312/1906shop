<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    //测试redis
    	function redis1(){
    		
    		$val='yaoyao';
            $key=123;
    		Redis::set($key,$val);
    		echo "换存成功";
    	}

    	function redis2(){
            $key=123;
    		$data=Redis::get($key);
    		echo $data;
    	}
}
