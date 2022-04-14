<?php
$prefixAdmin = config('coffee.url.prefix_admin');


Route::group(['prefix' => $prefixAdmin, 'namespace' => 'Admin', 'middleware' => ['permission.admin']], function () {
// Route::group(['prefix' => $prefixAdmin, 'namespace' => 'Admin'], function () {

    // ============================== CATEGORY PRODUCT ==============================
    $prefix         = 'categoryArticle';
    $controllerName = 'categoryArticle';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                                 ['as' => $controllerName,                  'uses' => $controller . 'index']);
        Route::get('form/{id?}',                        ['as' => $controllerName . '/form',        'uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save',                             ['as' => $controllerName . '/save',        'uses' => $controller . 'save']);
        Route::get('delete/{id}',                       ['as' => $controllerName . '/delete',      'uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}',       ['as' => $controllerName . '/status',      'uses' => $controller . 'status']);
       /*  Route::get('change-ordering-{ordering}/{id}',      ['as' => $controllerName . '/isHome',      'uses' => $controller . 'isHome'])->where('id', '[0-9]+'); */
        Route::get('change-category-{category}/{id}',           ['as' => $controllerName . '/category',        'uses' => $controller . 'category']);
        Route::get('move/{id}/{type}',     ['as' => $controllerName . '/move',     'uses' => $controller . 'move']);
    });

    // ============================== PRODUCT ==============================
    $prefix         = 'product';
    $controllerName = 'product';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                                 ['as' => $controllerName,                  'uses' => $controller . 'index']);
        Route::get('form/{id?}',                        ['as' => $controllerName . '/form',        'uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save',                             ['as' => $controllerName . '/save',        'uses' => $controller . 'save']);
        Route::get('delete/{id}',                       ['as' => $controllerName . '/delete',      'uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}',       ['as' => $controllerName . '/status',      'uses' => $controller . 'status']);
        Route::get('change-category-{category}/{id}',           ['as' => $controllerName . '/category',        'uses' => $controller . 'category']);
    });

    // ============================== ATTRIBUTE ==============================
    $prefix         = 'attribute';
    $controllerName = 'attribute';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                                 ['as' => $controllerName,                  'uses' => $controller . 'index']);
        Route::get('form/{id?}',                        ['as' => $controllerName . '/form',        'uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save',                             ['as' => $controllerName . '/save',        'uses' => $controller . 'save']);
        Route::get('delete/{id}',                       ['as' => $controllerName . '/delete',      'uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}',       ['as' => $controllerName . '/status',      'uses' => $controller . 'status']);
      
    });

    // ============================== DASHBOARD ==============================
    $prefix         = 'dashboard';
    $controllerName = 'dashboard';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                             ['as' => $controllerName,                  'uses' => $controller . 'index']);
    });

    // ============================== FILE MANAGER ==============================
    $prefix         = 'filemanager';
    $controllerName = 'fileManager';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                             ['as' => $controllerName,                  'uses' => $controller . 'index']);
    });
    

    // ============================== SLIDER ==============================
    $prefix         = 'slider';
    $controllerName = 'slider';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                             ['as' => $controllerName,                  'uses' => $controller . 'index']);
        Route::get('form/{id?}',                    ['as' => $controllerName . '/form',        'uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save',                         ['as' => $controllerName . '/save',        'uses' => $controller . 'save']);
        Route::get('delete/{id}',                   ['as' => $controllerName . '/delete',      'uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}',   ['as' => $controllerName . '/status',      'uses' => $controller . 'status'])->where('id', '[0-9]+');
    });

    // ============================== COUPON ==============================
    $prefix         = 'coupon';
    $controllerName = 'coupon';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                             ['as' => $controllerName,                  'uses' => $controller . 'index']);
        Route::get('form/{id?}',                    ['as' => $controllerName . '/form',        'uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save',                         ['as' => $controllerName . '/save',        'uses' => $controller . 'save']);
        Route::get('delete/{id}',                   ['as' => $controllerName . '/delete',      'uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}',   ['as' => $controllerName . '/status',      'uses' => $controller . 'status'])->where('id', '[0-9]+');
        Route::get('show-city-{city}/{id}-{shipping}',   ['as' => $controllerName . '/show-shipping',      'uses' => $controller . 'showShipping'])->where('id', '[0-9]+');
    });

    // ============================== SHIPPING ==============================
    $prefix         = 'shipping';
    $controllerName = 'shipping';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                             ['as' => $controllerName,                  'uses' => $controller . 'index']);
        Route::get('form/{id?}',                    ['as' => $controllerName . '/form',        'uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save',                         ['as' => $controllerName . '/save',        'uses' => $controller . 'save']);
        Route::get('delete/{id}',                   ['as' => $controllerName . '/delete',      'uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}',   ['as' => $controllerName . '/status',      'uses' => $controller . 'status'])->where('id', '[0-9]+');
    });

    // ============================== MENU ==============================
    $prefix         = 'menu';
    $controllerName = 'menu';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                             ['as' => $controllerName,                  'uses' => $controller . 'index']);
        Route::get('form/{id?}',                    ['as' => $controllerName . '/form',        'uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save',                         ['as' => $controllerName . '/save',        'uses' => $controller . 'save']);
        Route::get('delete/{id}',                   ['as' => $controllerName . '/delete',      'uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}',   ['as' => $controllerName . '/status',      'uses' => $controller . 'status'])->where('id', '[0-9]+');
        Route::get('change-type-menu-{type_menu}/{id}',   ['as' => $controllerName . '/type_menu',      'uses' => $controller . 'typeMenu'])->where('id', '[0-9]+');
        Route::get('change-type-open-{type_open}/{id}',   ['as' => $controllerName . '/type_open',      'uses' => $controller . 'typeOpen'])->where('id', '[0-9]+');
    });

    // ============================== CATEGORY ==============================
    $prefix         = 'category';
    $controllerName = 'category';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                                 ['as' => $controllerName,                  'uses' => $controller . 'index']);
        Route::post('update-tree',                                 ['as' => $controllerName . '/updateTree',                  'uses' => $controller . 'updateTree']);
        Route::get('form/{id?}',                        ['as' => $controllerName . '/form',        'uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save',                             ['as' => $controllerName . '/save',        'uses' => $controller . 'save']);
        Route::get('delete/{id}',                       ['as' => $controllerName . '/delete',      'uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}',       ['as' => $controllerName . '/status',      'uses' => $controller . 'status'])->where('id', '[0-9]+');
        Route::get('change-is-home-{is_home}/{id}',      ['as' => $controllerName . '/isHome',      'uses' => $controller . 'isHome'])->where('id', '[0-9]+');
        Route::get('change-display-{display}/{id}',     ['as' => $controllerName . '/display',     'uses' => $controller . 'display']);
        Route::get('move/{id}/{type}',     ['as' => $controllerName . '/move',     'uses' => $controller . 'move']);
    });

    // ============================== ARTICLE ==============================
    $prefix         = 'article';
    $controllerName = 'article';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                                 ['as' => $controllerName,                  'uses' => $controller . 'index']);
        Route::get('form/{id?}',                        ['as' => $controllerName . '/form',        'uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save',                             ['as' => $controllerName . '/save',        'uses' => $controller . 'save']);
        Route::get('delete/{id}',                       ['as' => $controllerName . '/delete',      'uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}',       ['as' => $controllerName . '/status',      'uses' => $controller . 'status']);
        Route::get('change-type-{type}/{id}',           ['as' => $controllerName . '/type',        'uses' => $controller . 'type']);
        Route::get('change-category-{category}/{id}',           ['as' => $controllerName . '/category',        'uses' => $controller . 'category']);
    });

    // ============================== USER ==============================
    $prefix         = 'user';
    $controllerName = 'user';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                                 ['as' => $controllerName,                  'uses' => $controller . 'index']);
        Route::get('form/{id?}',                        ['as' => $controllerName . '/form',        'uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save',                             ['as' => $controllerName . '/save',        'uses' => $controller . 'save']);
        Route::post('change-password',                  ['as' => $controllerName . '/change-password',        'uses' => $controller . 'changePassword']);
        Route::post('change-level',                     ['as' => $controllerName . '/change-level',        'uses' => $controller . 'changeLevel']);
        Route::get('delete/{id}',                       ['as' => $controllerName . '/delete',      'uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}',       ['as' => $controllerName . '/status',      'uses' => $controller . 'status']);
        Route::get('change-level-{level}/{id}',         ['as' => $controllerName . '/level',      'uses' => $controller . 'level']);
    });

    // ============================== RSS ==============================
    $prefix         = 'rss';
    $controllerName = 'rss';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                             ['as' => $controllerName,                  'uses' => $controller . 'index']);
        Route::get('form/{id?}',                    ['as' => $controllerName . '/form',        'uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::post('save',                         ['as' => $controllerName . '/save',        'uses' => $controller . 'save']);
        Route::get('delete/{id}',                   ['as' => $controllerName . '/delete',      'uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}',   ['as' => $controllerName . '/status',      'uses' => $controller . 'status'])->where('id', '[0-9]+');
    });

    // ============================== SETTING ==============================
    $prefix         = 'setting';
    $controllerName = 'setting';
    Route::group(['prefix' =>  $prefix], function () use ($controllerName) {
        $controller = ucfirst($controllerName)  . 'Controller@';
        Route::get('/',                             ['as' => $controllerName,                  'uses' => $controller . 'index']);
        Route::post('save',                         ['as' => $controllerName . '/save',        'uses' => $controller . 'save']);
    });
});
