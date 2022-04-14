@php
    use App\Helpers\Template as Template;
    use App\Helpers\Hightlight as Hightlight;
@endphp
<div class="x_content">
    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th class="column-title">#</th>
                    <th class="column-title">Thông tin sản phẩm</th>
                    <th class="column-title">Hình ảnh</th>
                    <th class="column-title">Danh mục sản phẩm</th>
                    <th class="column-title">Trạng thái</th>
                    <th class="column-title">Thêm mới</th>
                    <th class="column-title">Chỉnh sửa</th>
                    <th class="column-title">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @if (count($items) > 0)
                    @foreach ($items as $key => $val)
                        @php
                            $index           = $key + 1;
                            $class           = ($index % 2 == 0) ? "even" : "odd";
                            $id              = $val['id'];
                            $name            = Hightlight::show($val['name'], $params['search'], 'name');
                            $shortDescription         = Hightlight::show($val['short_description'], $params['search'], 'short_description');
                            $description         = Hightlight::show($val['description'], $params['search'], 'description');
                            $thumb           = Template::showItemThumb($controllerName, $val['thumb'], $val['name']);
                            $price           = $val['price'];
                           // $categoryName    = $val['category_name'];
                            $categoryName    = Template::showCustomItemSelect($controllerName, $id, $val['category_product_id'],'category',$categories);
                            $status          = Template::showItemStatus($controllerName, $id, $val['status']); 
                           
                            $createdHistory  = Template::showItemHistory($val['created_by'], $val['created']);
                            $modifiedHistory = Template::showItemHistory($val['modified_by'], $val['modified']);
                            $listBtnAction   = Template::showButtonAction($controllerName, $id);
                        @endphp

                        <tr class="{{ $class }} pointer">
                            <td >{{ $index }}</td>
                            <td width="20%">
                                <p><strong>Name:</strong> {!! $name !!}</p>
                                <p><strong>Miêu tả ngắn:</strong> {!! $shortDescription !!}</p>
                                <p><strong>Price:</strong> {!! $price !!}</p>
                            </td>
                            <td width="14%">
                                <p>{!! $thumb !!}</p>
                            </td>
                            <td>{!! $categoryName !!}</td>
                            <td>{!! $status !!}</td>
                            <td>{!! $createdHistory !!}</td>
                            <td>{!! $modifiedHistory !!}</td>
                            <td class="last">{!! $listBtnAction !!}</td>
                        </tr>
                    @endforeach
                @else
                    @include('admin.templates.list_empty', ['colspan' => 6])
                @endif
            </tbody>
        </table>
    </div>
</div>
           