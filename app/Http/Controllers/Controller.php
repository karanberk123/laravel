<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function showView($viewName, $params = [])
    {
        $is_login = session()->has('userID')? true : false;

        $defaultParams = [
            'is_login' =>  $is_login,
        ];
        $params = array_merge($params, $defaultParams);
        return view($viewName,$params);
    }
}
