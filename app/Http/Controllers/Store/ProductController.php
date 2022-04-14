<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\AttributeModel;
use App\Models\CategoryModel;
use App\Models\ProductModel as MainModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $pathViewController = 'store.pages.product.';  // slider
    private $controllerName     = 'product';
    private $params             = [];
    private $model              = '';

    public function __construct()
    {
        $this->params["pagination"]["totalItemsPerPage"] = 8;
        $this->model = new MainModel();
        view()->share('controllerName', $this->controllerName);
    }
    public function index(Request $request)
    {
        $attributeModel = new AttributeModel();
        $attributeItems = $attributeModel->listItems(null, ['task' => 'store-list-items']);
        $productDetail = $this->model->getItem(['product_id' => $request->product_id], ['task' => 'store-get-item']);
        $breadcrumbs = CategoryModel::withDepth()->having('depth','>','0')->defaultOrder()->ancestorsAndSelf($productDetail['category_product_id'])->pluck('name','id');
       
        return view(
            $this->pathViewController . 'index',
            [
                'productDetail' => $productDetail,
                'attributeItems' => $attributeItems,
                'breadcrumbs'   => $breadcrumbs
            ]
        );
    }

    public function list(Request $request)
    {

        $items = $this->model->listItems($this->params, ['task' => 'store-list-items']);
        if (empty($items))  return redirect()->route('home');
        // $breadcrumbs = CategoryModel::withDepth()->having('depth','>','0')->defaultOrder()->ancestorsAndSelf($request->category_id)->pluck('name','id');

        return view($this->pathViewController .  'list', [
            'params'        => $this->params,
            'items'          => $items,
            // 'breadcrumbs'   => $breadcrumbs
        ]);
    }
}
