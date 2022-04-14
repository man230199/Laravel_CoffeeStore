<li class="dd-item dd3-item" data-id="{{ $item->id }}" >
    <div class="dd-handle dd3-handle">{{ $item->name }}</div>
    @if (count($item->children) > 0)
        <ol class="dd-list">
            @foreach ($item->children as $childItem)
                @include('admin.pages.category.list_items',['item' => $childItem])
            @endforeach
        </ol>
    @endif
</li>

<li class="dd-item dd3-item" data-id="13">
    <div class="dd-handle dd3-handle">Drag</div>
    <div class="dd3-content">Item 13</div>
</li>
