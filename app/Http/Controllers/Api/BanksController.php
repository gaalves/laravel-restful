<?php

namespace App\Http\Controllers\Api;

use App\Bank;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BanksController extends Controller

{
    use \App\Http\Controllers\ApiControllerTrait;
    protected $model;


    public function __construct(Bank $model)
    {
        $this->model = $model;
    }
}
