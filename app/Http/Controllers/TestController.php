<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    //测试redis
    	function redis1(){
    		
    		$val='yaoyao';
    		Redis::set($key,$val);
    		echo "换存成功";
    	}

    	function redis2(){
            $key=time();
    		$data=Redis::get($key);
    		echo $data;
    	}
}
