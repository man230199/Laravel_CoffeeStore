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
                    <th class="column-title">Link</th>
                    <th class="column-title">Ordering</th>
                    <th class="column-title">Trạng thái</th>
                    <th class="column-title">Type</th>
                    <th class="column-title">Type Open</th>
                    
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
                            $link            = Hightlight::show($val['link'], $params['search'], 'link');
                            $ordering        = Hightlight::show($val['ordering'], $params['search'], 'ordering');
                            $status          = Template::showItemStatus($controllerName, $id, $val['status']);
                            $type            = Template::showItemSelect($controllerName, $id, $val['type'], 'type_menu');
                            $typeOpen        = Template::showItemSelect($controllerName, $id, $val['type_open'], 'type_open');
                           /*  $createdHistory  = Template::showItemHistory($val['created_by'], $val['created']);
                            $modifiedHistory = Template::showItemHistory($val['modified_by'], $val['modified']); */
                            $listBtnAction   = Template::showButtonAction($controllerName, $id);
                        @endphp

                        <tr class="{{ $class }} pointer">
                            <td >{{ $index }}</td>
                            <td width="25%">{!! $name !!}</td>
                            <td>{!! $link !!}</td>
                            <td>{!! $ordering !!}</td>
                            <td>{!! $status !!}</td>
                            
                            <td>{!! $type  !!}</td>
                            <td>{!! $typeOpen !!}</td>
                            
                           {{--  <td>{!! $createdHistory !!}</td>
                            <td>{!! $modifiedHistory !!}</td> --}}
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
           