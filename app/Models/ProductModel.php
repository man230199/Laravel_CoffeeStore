<?php

namespace App\Models;

use App\Models\AdminModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Kalnoy\Nestedset\NodeTrait;


class ProductModel extends AdminModel
{
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
    use NodeTrait;
    public function __construct()
    {
        $this->table               = 'product';
        $this->folderUpload        = 'product';
        $this->fieldSearchAccepted = ['name', 'short_description', 'description', 'price', 'thumb', 'status'];
        $this->crudNotAccepted     = ['_token', 'thumb_current', 'form'];
    }

    /* public function getNameWithDepthAttribute()
    {
        return str_repeat('/-----', $this->depth) . $this->name;
    }

    public function categories()
    {
        return $this->hasMany(CategoryModel::class, 'parent_id', 'id')->with('categories');
    }

    public function categoriesActive()
    {
        return $this->hasMany(CategoryModel::class, 'parent_id', 'id')->where('status', 'active')->with('categoriesActive');
    } */


    public function listItems($params = null, $options = null)
    {

        $result = null;
        if ($options['task'] == "admin-list-items") {
            $query = $this->select('id', 'name', 'short_description', 'description', 'thumb', 'price', 'status', 'is_home', 'created', 'created_by', 'category_product_id', 'modified', 'modified_by');

            if ($params['filter']['status'] !== "all") {
                $query->where('status', '=', $params['filter']['status']);
            }

            if ($params['search']['value'] !== "") {
                if ($params['search']['field'] == "all") {
                    $query->where(function ($query) use ($params) {
                        foreach ($this->fieldSearchAccepted as $column) {
                            $query->orWhere($column, 'LIKE',  "%{$params['search']['value']}%");
                        }
                    });
                } else if (in_array($params['search']['field'], $this->fieldSearchAccepted)) {
                    $query->where($params['search']['field'], 'LIKE',  "%{$params['search']['value']}%");
                }
            }

            if (isset($params['category_product_id'])) {
                $query->where('category_product_id',  $params['category_product_id']);
            }

            $result =  $query->orderBy('id', 'desc')->paginate($params['pagination']['totalItemsPerPage']);
        }

        if ($options['task'] == 'store-list-items') {
            $result = $this->select('id', 'name', 'thumb', 'short_description', 'price', 'category_product_id')
                ->where('status', 'active')->paginate($params["pagination"]["totalItemsPerPage"]);
           
        }

        if ($options['task'] == 'store-best-seller-items') {
            $query = $this->select('id', 'name', 'thumb', 'short_description', 'price')
                ->where('status', 'active')
                ->limit(4);
            $result = $query->get()->toArray();
        }

        if ($options['task'] == 'store-list-items-by-category') {
            $cateID = [2, 3, 4];
            $this->table = 'product as p';
            $query = $this->select('id', 'name', 'thumb', 'short_description', 'price', 'category_product_id')
                ->where('status', 'active')
                ->whereIn('category_product_id', $cateID);
            $result = $query->get()->toArray();
        }

        if ($options['task'] == 'store-list-items-in-category') {
            $query = $this->select('id', 'name', 'thumb', 'short_description', 'price', 'category_product_id')
                ->where('status', 'active')
                ->where('category_product_id', $params['category_product_id']);
            $result = $query->get()->toArray();
        }

        if ($options['task'] == "admin-list-items-in-selectbox") {
            $query = $this->select('id', 'name')
                ->orderBy('name', 'asc')
                ->where('status', '=', 'active');

            $result = $query->pluck('name', 'id')->toArray();
        }
        return $result;
    }

    public function countItems($params = null, $options  = null)
    {

        $result = null;

        if ($options['task'] == 'admin-count-items-group-by-status') {

            $query = $this::groupBy('status')
                ->select(DB::raw('status , COUNT(id) as count'));

            if ($params['search']['value'] !== "") {
                if ($params['search']['field'] == "all") {
                    $query->where(function ($query) use ($params) {
                        foreach ($this->fieldSearchAccepted as $column) {
                            $query->orWhere($column, 'LIKE',  "%{$params['search']['value']}%");
                        }
                    });
                } else if (in_array($params['search']['field'], $this->fieldSearchAccepted)) {
                    $query->where($params['search']['field'], 'LIKE',  "%{$params['search']['value']}%");
                }
            }

            $result = $query->get()->toArray();
        }

        return $result;
    }

    public function getItem($params = null, $options = null)
    {
        $result = null;

        if ($options['task'] == 'get-item') {
            $result = self::select('id', 'name', 'status', 'price', 'short_description', 'description', 'thumb', 'category_product_id')->where('id', $params['id'])->first();
        }

        if ($options['task'] == 'store-get-item') {
            $result = self::select('id', 'name', 'thumb', 'description', 'price', 'category_product_id')->where('id', $params['product_id'])->first();

            if ($result) $result = $result->toArray();
        }

        return $result;
    }

    public function saveItem($params = null, $options = null)
    {
        if ($options['task'] == 'change-status') {
            $status = ($params['currentStatus'] == "active") ? "inactive" : "active";
            self::where('id', $params['id'])->update(['status' => $status]);
        }

        if ($options['task'] == 'change-is-home') {
            $isHome = ($params['currentIsHome'] == "yes") ? "no" : "yes";
            self::where('id', $params['id'])->update(['is_home' => $isHome]);
        }
        if ($options['task'] == 'change-category') {
            $category = $params['currentCategory'];
            self::where('id', $params['id'])->update(['category_product_id' => $category]);
        }

        if ($options['task'] == 'add-item') {
            $params['created_by'] = "hailan";
            $params['created']    = date('Y-m-d');
            $params['thumb']      = $this->uploadThumb($params['thumb']);
            self::insert($this->prepareParams($params));
        }

        if ($options['task'] == 'edit-item') {
            if (!empty($params['thumb'])) {
                // Xóa hình cũ
                $this->deleteThumb($params['thumb_current']);

                // Up hình mới
                $params['thumb']      = $this->uploadThumb($params['thumb']);
            }

            $params['modified_by']   = "hailan";
            $params['modified']      = date('Y-m-d');

            self::where(['id' => $params['id']])->update($this->prepareParams($params));
        }

        if ($options['task'] == 'add-item-image') {
            $params['modified_by']   = "hailan";
            $params['modified']      = date('Y-m-d');
            foreach ($params['images'] as $image) {
                $params['images']      = $this->uploadThumb($image);
            }

            self::where(['id' => $params['id']])->update($this->prepareParams($params));
        }
    }

    public function deleteItem($params = null, $options = null)
    {
        if ($options['task'] == 'delete-item') {
            $currentNode = self::find($params['id']);
            $currentNode->delete();
        }
    }
}
