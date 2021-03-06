<?php

namespace App\Http\Controllers\Api;

use App\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountsController extends Controller
{
    //
    use \App\Http\Controllers\ApiControllerTrait;
    protected $model;
    protected $relationships = ['bank'];

    public function __construct(Account $model)
    {
        $this->model = $model;
    }


}
