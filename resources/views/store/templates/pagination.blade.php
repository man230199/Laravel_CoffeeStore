<div class="x_content">
    <div class="row mt-5">
        {{-- <div class="col-md-6">
            <p class="m-b-0">
                <span class="label label-info label-pagination">{{ $items->perPage() }} sản phẩm/trang</span>  
                <span class="label label-success label-pagination">{{ $items->total() }} sản phẩm</span> 
                <span class="label label-danger label-pagination">{{ $items->lastPage() }} trang</span>
            </p>
        </div> --}}

        {!! $items->appends(request()->input())->links('store.pagination.pagination_frontend') !!}

    </div>
</div>
