<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel as MainModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $pathViewController = 'store.pages.category.';  // slider
    private $controllerName     = 'category';
    private $params             = [];
    private $model              = '';

    public function __construct()
    {
        $this->model = new MainModel();
        view()->share('controllerName', $this->controllerName);
    }
    public function index(Request $request)
    {   
        $params["category_product_id"]  = $request->category_product_id;
        $productModel  = new ProductModel();
        $categoryModel = new CategoryModel();

        $itemCategory = $categoryModel->getItem($params, ['task' => 'store-get-item']);
        if(empty($itemCategory))  return redirect()->route('home');

        $itemCategory['products'] = $productModel->listItems(['category_product_id' => $itemCategory['id']], ['task' => 'store-list-items-in-category']);
      
        $breadcrumbs = CategoryModel::withDepth()->having('depth','>','0')->defaultOrder()->ancestorsAndSelf($request->category_product_id)->pluck('name','id');
        
        return view($this->pathViewController .  'index', [
            'params'        => $this->params,
            'itemCategory'  => $itemCategory,
            'breadcrumbs'   => $breadcrumbs
        ]);
    }
}
