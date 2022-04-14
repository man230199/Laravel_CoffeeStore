<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\AttributeModel;
use App\Models\CategoryModel;
use App\Models\CartModel as MainModel;
use App\Models\CouponModel;
use App\Models\ProductModel;
use App\Models\ShippingModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    private $pathViewController = 'store.pages.cart.';  // slider
    private $controllerName     = 'cart';
    private $params             = [];
    private $model              = '';

    public function __construct()
    {
        $this->model = new MainModel();
        view()->share('controllerName', $this->controllerName);
    }
    public function order(Request $request)
    {

        $params['product_id'] = $request->product_id;
        $productModel = new ProductModel();
        $productItem = $productModel->getItem($params, ['task' => 'store-get-item']);

        $cart = $request->session()->get('cart');
        $id = $request->product_id;
        $size = $request->size;
        $price = $productItem['price'];
        $quantity = $request->quantity;

        $items[] = $productItem;
        if (empty($cart)) {
            $cart['quantity'][$id]      = $quantity;
            $cart['size'][$id]          = $size;
            $cart['price'][$id]         = $price * $cart['quantity'][$id];
        } else {
            if (key_exists($id, $cart['quantity'])) {
                // dd($quantity);
                $cart['quantity'][$id]    += $quantity;
                $cart['size'][$id]          = $size;
                $cart['price'][$id]         = $price * $cart['quantity'][$id];
            } else {
                $cart['quantity'][$id]      = $quantity;
                $cart['size'][$id]          = $size;
                $cart['price'][$id]         = $price * $cart['quantity'][$id];
            }
        }
        $cart = $request->session()->put('cart', $cart);
        $cart = $request->session()->get('cart');
        $link = route($this->controllerName . '/order', ['product_id' => $id, 'price' => $price, 'size' => $size, 'quantity' => $quantity]);
        return response()->json([
            'cart' => $cart,
            'link' => $link,
        ]);
    }
    public function show(Request $request)
    {
        $cart = $request->session()->get('cart');
        $cartItems = $this->model->listItems($cart, ['task' => 'store-list-items-in-cart']);
        $couponModel = new CouponModel();
        $coupons = $couponModel->listItems(null, ['task' => 'store-list-items']);
        echo '<pre style="color:white">';
        print_r($coupons);
        echo '</pre>';
        return view(
            $this->pathViewController . 'index',
            [
                'cartItems' => $cartItems,
                'coupons'   => $coupons,
            ]
        );
    }
    public function coupon(Request $request) {
        $params = $request->all();
        
    }
    public function checkout(Request $request)
    {
        
        $shippingModel = new ShippingModel();
        $shippings = $shippingModel->listItems(null, ['task' => 'store-list-items']);
        $cart = $request->session()->get('cart');
        
        if (!empty($cart)) {
            $cartItems = $this->model->listItems($cart, ['task' => 'store-list-items-in-cart']);
            return view(
                $this->pathViewController . 'checkout',
                [
                    'cartItems' => $cartItems,
                    'shippings' => $shippings,
                ]
            );
        } else {
            return view('store.pages.home.index');
        }
    }

    public function buy(Request $request)
    {
        $params = $request->all();

        $this->model->saveItem($params, ['task' => 'submit-cart']);
        Session::pull('cart');
        Session::put('checkout_message', 'Bạn đã đặt hàng thành công. Đơn hàng đang chờ được xử lý');
        return view($this->pathViewController . 'checkout_success');
    }

    public function pull(Request $request)
    {
        $request->session()->pull('cart');
    }
}
