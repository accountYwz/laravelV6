<?php


namespace App\Http\Controllers;


use Swoole\Coroutine;

class UserController extends Controller
{
    public function index()
    {
        echo 'nihao';
        Coroutine::create(function (){
            echo '--------------------';
        });
        echo '哈哈h哈哈哈';
    }
}

