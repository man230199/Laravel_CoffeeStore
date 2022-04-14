@php
use App\Helpers\Template as Template;
use App\Helpers\Hightlight as Hightlight;

$id = $val['id'];
$name = Hightlight::show($val['name'], $params['search'], 'name');
$status = Template::showItemStatus($controllerName, $id, $val['status']);
$isHome = Template::showItemIsHome($controllerName, $id, $val['is_home']);
$display = Template::showItemSelect($controllerName, $id, $val['display'], 'display');
$createdHistory = Template::showItemHistory($val['created_by'], $val['created']);
$modifiedHistory = Template::showItemHistory($val['modified_by'], $val['modified']);
$listBtnAction = Template::showButtonAction($controllerName, $id);

@endphp

<tr class="pointer">
    <td>{{ $id }}</td>
    <td width="25%">{!! str_repeat('/-----', $val->depth) . $name !!}</td>
    <td>{!! $status !!}</td>
    <td>{!! $isHome !!}</td>
    <td>{!! $display !!}</td>
    <td>{!! $createdHistory !!}</td>
    <td>{!! $modifiedHistory !!}</td>
    <td class="last">{!! $listBtnAction !!}</td>
</tr>

{{-- @if ($val->categories)
    @foreach ($val->categories as $childCategory)
        @include('admin.pages.category.child_category', ['val' => $childCategory])
    @endforeach
@endif --}}
