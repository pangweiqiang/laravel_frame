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
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
    public function info($id){
        echo 'this is user info '.$id;
        DB::select(',',[]);
    }
}