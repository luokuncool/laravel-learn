<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function indexAction()
    {
        return Response::create('hello');
    }
}