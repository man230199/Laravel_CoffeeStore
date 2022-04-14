@php
    use App\Models\CategoryModel;
    $node = CategoryModel::find($id);

@endphp

<span style="width:50px" class="d-inline-block">
    @if ($node->getPrevSibling())
        <a href="{{route('category/move', ['id' => $id,'type' => 'up'])}}" class="btn btn-primary">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </a>        
    @endif
</span>

<span style="width:50px" class="d-inline-block">
    @if ($node->getNextSibling())
        <a href="{{route('category/move', ['id' => $id,'type' => 'down'])}}" class="btn btn-danger">
            <i class="fa fa-arrow-down" aria-hidden="true"></i>
        </a>        
    @endif
</span>