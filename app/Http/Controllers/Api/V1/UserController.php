<?php
/**
 * Created by PhpStorm.
 * User: joseef
 * Date: 19-5-19
 * Time: 下午7:18
 */
namespace App\Http\Controllers\Api\V1;
//namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Http\Services\UserInfo;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {


    public function info(UserInfo $userService){
        $log = app()->make('log');
        $log->info("user_info",['user'=>'test']);
        echo $userService->getUserInfo();
        echo 'welcome';
    }
}