<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;

class TestController extends Controller
{
    //

    /**
     * TestController constructor.
     */
    public function __construct()
    {
        $this->middleware('oauth',['except' => []]);
    }

    public function test(){
        $user=User::find(Authorizer::getResourceOwnerId());
        return Response::json(['data'=>$user]);
    }
}
