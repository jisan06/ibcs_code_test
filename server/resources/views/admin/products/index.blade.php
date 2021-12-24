@extends('layout.admin.index' )
@section('title')
   @lang('models/products.plural') @lang('ext.list')
@stop
@section('extra_css')
@stop
@section('content')
  <div class="pull-right">
     <form method="post" action="{{ route('admin.search') }}" id="form-search"
           onsubmit="event.preventDefault()">
        @csrf
        <span><i>@lang('ext.search') : <b>@lang('models/products.fields.product_name')</b> @lang('ext.and') <b>@lang('models/products.fields.sku')</b></i></span>
        <input type="hidden" value="products" name="search_kind">
        <span class="input-icon">
           <input type="text" placeholder="Search ..." class="nav-search-input"
                  autocomplete="off" name="search"/>
           <i class="ace-icon fa fa-search nav-search-icon"></i>
           <button type="submit" class="btn btn-sm">
              <span class="fa fa-search"></span>
           </button>
        </span>
     </form>
  </div>
   <div class="col-sm-12 col-lg-12 col-xs-12">
      <table id="simple-table" class="table table-bordered table-hover table-responsive">
         <thead>
         <tr>
            <th>#</th>
            <th>@lang('models/products.fields.product_name')</th>
            <th class="center">@lang('models/products.fields.sku')</th>
            <th>@lang('models/products.fields.price')</th>
            <th class="smaller-80">@lang('models/products.fields.description')</th>
            <th>@lang('models/products.fields.image')</th>
            <th class="smaller-80">@lang('models/products.fields.created_at')</th>
            <th>@lang('crud.action')</th>
         </tr>
         </thead>
         <tbody id="table_body" class="table_data">
         @include('admin.products._data')
         </tbody>
      </table>
   </div>
   <div class="">
      {{ $products->links() }}
   </div>

@endsection()
@section('extra_js')
   @can('product-delete')
      <script>
          $(document).ready(function () {
              deleteAjax("/admin/product/", "delete_me", "product");
              $(".restore_me").click(function (e) {
                  e.preventDefault();
                  var obj = $(this); // first store $(this) in obj
                  var id = $(this).data("id");
                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                      }
                  });
                  $.ajax({
                      url: id,
                      method: "GET",
                      dataType: "Json",
                      // data: {"id": id},
                      success: function ($results) {
                          if ($results.success === true){
                              alert($results.message);
                              $(obj).closest("tr").remove(); //delete row
                          }
                      },
                      error: function (xhr) {
                          alert(xhr.responseText.message);
                          console.log(xhr.responseText);
                      }
                  });
              });
          });
      </script>
   @endcan
@stop
