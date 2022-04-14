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
                    <th class="column-title">Name</th>
                    <th class="column-title">Sắp xếp</th>
                    <th class="column-title">Trạng thái</th>
                    <th class="column-title">Hiện thị Home</th>
                    <th class="column-title">Tạo mới</th>
                    <th class="column-title">Chỉnh sửa</th>
                    <th class="column-title">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @if (count($items) > 0)
                    <ol class="dd-list">
                        @foreach ($items as $key => $val)
                            @php
                                $id = $val['id'];
                                $name   = Hightlight::show($val['name'], $params['search'], 'name');
                                $status = Template::showItemStatus($controllerName, $id, $val['status']);
                                $isHome = Template::showItemIsHome($controllerName, $id, $val['is_home']);
                                $createdHistory  = Template::showItemHistory($val['created_by'], $val['created']);
                                $modifiedHistory = Template::showItemHistory($val['modified_by'], $val['modified']);
                                $listBtnAction = Template::showButtonAction($controllerName, $id);
                            @endphp

                            <tr class="pointer">
                                <td>{{ $id }}</td>
                                <td width="25%">
                                    {!! str_repeat('/-----', $val->depth) . $name !!}
                                </td>
                                <td>ordering</td>
                                {{-- <td>@include('admin.pages.category_product.order',['id' => $id])</td> --}}
                                <td>{!! $status !!}</td>
                                <td>{!! $isHome !!}</td>
                                
                                <td>{!! $createdHistory !!}</td>
                                <td>{!! $modifiedHistory !!}</td>
                                <td class="last">{!! $listBtnAction !!}</td>
                            </tr>
                        @endforeach
                    </ol>
                @else
                    @include('admin.templates.list_empty', ['colspan' => 6])
                @endif
            </tbody>
        </table>
    </div>
</div>

{{-- <div class="x_content">
    <div class="dd" id="category_nestable" data-url="{{ route('category/updateTree') }}">
        <ol class="dd-list">
            @foreach ($items as $item)
                @include('admin.pages.category.list_items',['item' => $item])
            @endforeach
        </ol>
        <textarea class="form-control" name="outputNestable" id="outputNestable"></textarea>
    </div>
</div> --}}

<div class="x_content">
    <div class="dd" id="category_nestable" data-url="{{ route('category/updateTree') }}">
        <ol class="dd-list">
            <li class="dd-item dd3-item" data-id="13">
                <div class="dd-handle dd3-handle">Drag</div>
                <div class="dd3-content">Item 13</div>
            </li>
            <li class="dd-item dd3-item" data-id="14">
                <div class="dd-handle dd3-handle">Drag</div>
                <div class="dd3-content">Item 14</div>
            </li>
            <li class="dd-item dd3-item" data-id="15"><button class="dd-collapse" data-action="collapse"
                    type="button">Collapse</button><button class="dd-expand" data-action="expand"
                    type="button">Expand</button>
                <div class="dd-handle dd3-handle">Drag</div>
                <div class="dd3-content">Item 15</div>
                <ol class="dd-list">
                    <li class="dd-item dd3-item" data-id="16">
                        <div class="dd-handle dd3-handle">Drag</div>
                        <div class="dd3-content">Item 16</div>
                    </li>
                    <li class="dd-item dd3-item" data-id="17">
                        <div class="dd-handle dd3-handle">Drag</div>
                        <div class="dd3-content">Item 17</div>
                    </li>
                    <li class="dd-item dd3-item" data-id="18">
                        <div class="dd-handle dd3-handle">Drag</div>
                        <div class="dd3-content">Item 18</div>
                    </li>
                </ol>
            </li>
        </ol>
    </div>
</div>
