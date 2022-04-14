<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;

use App\Models\CategoryModel;

class HomeController extends Controller
{
    private $pathViewController = 'store.pages.home.';  // slider
    private $controllerName     = 'home';
    private $params             = [];

    public function __construct()
    {
        view()->share('controllerName', $this->controllerName);
    }
    public function index()
    {
        return view(
            $this->pathViewController . 'index',
        );
    }
}
