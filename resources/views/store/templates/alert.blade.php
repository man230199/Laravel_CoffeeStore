@if (session('store_notify'))
    <div class="alert alert-danger " role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>{{ session('store_notify') }}</strong>
    </div>
@endif