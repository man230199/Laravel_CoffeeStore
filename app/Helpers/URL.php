<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class URL
{
    public static function linkCategory($id, $name)
    {
        return route('category/index', [
            'category_product_id'   => $id,
            'category_name' => Str::slug($name)
        ]);
    }

    public static function linkProduct($id, $name)
    {
        return route('product/index', [
            'product_id'   => $id,
            'product_name' => Str::slug($name)
        ]);
    }

    public static function linkArticle($id, $name)
    {
        return route('article/index', [
            'article_id'   => $id,
            'article_name' => Str::slug($name)
        ]);
    }
    public static function linkCategoryArticle($id, $name)
    {
        return route('categoryArticle/index', [
            'category_article_id'   => $id,
            'category_article_name' => Str::slug($name)
        ]);
    }

    public static function linkCart($id, $price, $size, $quantity)
    {
        return route('cart/order', [
            'product_id'   => $id,
            'price' => $price,
            'size'  => $size,
            'quantity' => $quantity
        ]);
    }
}
