<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/4/12
 * Time: 16:29
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Auth;

class CMSController extends Controller{
    public function index(){
        if(Auth::check()){
            return view('/cms/index');
        }
        else{
            return view('/cms/login');
        }
    }

    public function login(){

    }
}