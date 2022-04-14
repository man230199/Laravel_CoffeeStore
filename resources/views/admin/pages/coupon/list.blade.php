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
                    <th class="column-title">Code</th>
                    <th class="column-title">Giá trị %</th>
                    <th class="column-title">Giá trị thật</th>
                    <th class="column-title">Ngày bắt đầu</th>
                    <th class="column-title">Ngày kết thức</th>
                    <th class="column-title">Tổng nhỏ nhất</th>
                    <th class="column-title">Tổng lớn nhất</th>
                    <th class="column-title">Số lần dùng</th>
                    <th class="column-title">Trạng thái</th>
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
                            $code            = $val['code'];
                            $value_percent              = $val['value_percent'];
                            $value_price                = $val['value_price'];
                            $start_date                 = $val['start_date'];
                            $end_date                   = $val['end_date']; 
                            $min_total                  = $val['min_total']; 
                            $max_total                  = $val['max_total']; 
                            $total_uses                 = $val['total_uses']; 
                            $status                     = Template::showItemStatus($controllerName, $id, $val['status']);
                           
                           /*  $createdHistory  = Template::showItemHistory($val['created_by'], $val['created']);
                            $modifiedHistory = Template::showItemHistory($val['modified_by'], $val['modified']); */
                            $listBtnAction   = Template::showButtonAction($controllerName, $id);
                        @endphp

                        <tr class="{{ $class }} pointer">
                            <td >{{ $index }}</td>
                            <td width="10%">{!! $code !!}</td>
                            <td>{!! $value_percent !!}</td>
                            <td>{!! $value_price !!}</td>
                            <td>{!! $start_date !!}</td>
                            <td>{!! $end_date !!}</td>
                            <td>{!! $min_total !!}</td>
                            <td>{!! $max_total !!}</td>
                            <td>{!! $total_uses !!}</td>
                            <td>{!! $status !!}</td>
                            
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
           