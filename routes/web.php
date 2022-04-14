<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$prefixStore  = config('coffee.url.prefix_store');


Route::group(['prefix' => $prefixStore, 'namespace' => 'Store'], function () {
    Route::group(['prefix' => 'laravel-filemanager', 'middleware'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

    // ============================== HOMEPAGE ==============================
    $prefix         = '';
    $controllerName = 'home';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                             ['as' => $controllerName,                  'uses' => $controller . 'index']);
        Route::get('/not-found',                    ['as' => $controllerName . '/not-found',   'uses' => $controller . 'notfound']);
    });

    // ============================== CATEGORY ==============================
    $prefix         = 'danh-muc-san-pham';
    $controllerName = 'category';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/{category_name}-{category_product_id}.html',  ['as' => $controllerName . '/index', 'uses' => $controller . 'index'])
            ->where('category_name', '[0-9a-zA-Z_-]+')
            ->where('category_product_id', '[0-9]+');
    });

    // ============================== PRODUCT ==============================
    $prefix         = 'san-pham';
    $controllerName = 'product';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/{product_name}-{product_id}.html',  ['as' => $controllerName . '/index', 'uses' => $controller . 'index'])
            ->where('product_name', '[0-9a-zA-Z_-]+')
            ->where('product_id', '[0-9]+');
        Route::get('/danh-muc-san-pham.html',                             ['as' => $controllerName . '/list',                  'uses' => $controller . 'list']);
    });

    // ====================== ARTICLE ========================
    $prefix         = 'bai-viet';
    $controllerName = 'article';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';

        Route::get('/',                             ['as' => $controllerName,                  'uses' => $controller . 'index']);

        Route::get('/{article_name}-{article_id}.html',  ['as' => $controllerName . '/index', 'uses' => $controller . 'index'])
            ->where('article_name', '[0-9a-zA-Z_-]+')
            ->where('article_id', '[0-9]+');
    });

    // ====================== CATEGORY ARTICLE ========================
    $prefix         = 'danh-sach-bai-viet';
    $controllerName = 'categoryArticle';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';

        Route::get('/',                             ['as' => $controllerName,                  'uses' => $controller . 'index']);

        Route::get('/{category_article_name}-{category_article_id}.html',  ['as' => $controllerName . '/index', 'uses' => $controller . 'index'])
            ->where('category_article_name', '[0-9a-zA-Z_-]+')
            ->where('category_article_id', '[0-9]+');
    });

    // ====================== GALLERY ========================
    $prefix         = 'gallery';
    $controllerName = 'gallery';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/thu-muc-hinh-anh.html',  ['as' => $controllerName . '/index', 'uses' => $controller . 'index']);
    });

    // ====================== CONTACT ========================
    $prefix         = 'lien-he';
    $controllerName = 'contact';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/thong-tin-lien-he.html',  ['as' => $controllerName . '/index', 'uses' => $controller . 'index']);
        Route::post('/sendContact',             ['as' => $controllerName . '/sendContact',  'uses' => $controller . 'sendContact']);
    });

    // ====================== ABOUT ========================
    $prefix         = 'gioi-thieu.html';
    $controllerName = 'about';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',  ['as' => $controllerName, 'uses' => $controller . 'index']);
    });

    // ============================== NOTIFY ==============================
    $prefix         = '';
    $controllerName = 'notify';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/no-permission',                             ['as' => $controllerName . '/noPermission',                  'uses' => $controller . 'noPermission']);
    });

    // ====================== LOGIN ========================
    // news69/login
    $prefix         = '';
    $controllerName = 'auth';

    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/login',        ['as' => $controllerName . '/login',      'uses' => $controller . 'login'])->middleware('check.login');
        Route::post('/postLogin',   ['as' => $controllerName . '/postLogin',  'uses' => $controller . 'postLogin']);

        // ====================== LOGOUT ========================
        Route::get('/logout',       ['as' => $controllerName . '/logout',     'uses' => $controller . 'logout']);
    });

    // ====================== RSS ========================
    $prefix         = '';
    $controllerName = 'rss';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/tin-tuc-tong-hop',                             ['as' => "$controllerName/index",                  'uses' => $controller . 'index']);
        Route::get('/get-gold',                             ['as' => "$controllerName/get-gold",                  'uses' => $controller . 'getGold']);
        Route::get('/get-coin',                             ['as' => "$controllerName/get-coin",                  'uses' => $controller . 'getCoin']);
    });

    // ====================== CART ========================
    $prefix         = 'gio-hang.html';
    $controllerName = 'cart';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/order/{product_id}-{price}-{size}-{quantity}',                             ['as' => "$controllerName/order",                  'uses' => $controller . 'order']);
        Route::get('/',                             ['as' => "$controllerName/show",                  'uses' => $controller . 'show']);
        Route::get('/coupon',                             ['as' => "$controllerName/coupon",                  'uses' => $controller . 'coupon']);
        Route::post('/buy',             ['as' => $controllerName . '/buy',  'uses' => $controller . 'buy']);
        Route::get('/pull',                             ['as' => "$controllerName/pull",                  'uses' => $controller . 'pull']);
    });
    $prefix         = 'checkout.html';
    $controllerName = 'cart';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                             ['as' => "$controllerName/checkout",                  'uses' => $controller . 'checkout']);
    });
});
