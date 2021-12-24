@extends('layout.admin.index' )
@section('title')
   Order List
@stop
@section('extra_css')
@stop
@section('content')


   <form method="post" action="{{ route('admin.search') }}" id="form-search"
   onsubmit="event.preventDefault()">
      @csrf
      <input type="hidden" value="orders" name="search_kind">
      <span class="input-icon">
         <input type="number" placeholder="Search ..." class="nav-search-input"
                autocomplete="off" name="search"/>
         <i class="ace-icon fa fa-search nav-search-icon"></i>
         <button type="submit" class="btn btn-sm">
            <span class="fa fa-search"></span>
         </button>
      </span>
      <span><i>search by <b>Order Id</b></i></span>
   </form>
   <div class="">
      <table id="simple-table" class="table table-bordered table-hover table-responsive">
         <thead>
         <tr class="info">
            <th class="center">
               Order ID
            </th>
            <th class="center">Order Status</th>
            <th class="center">Address</th>
            <th class="center">Client Name</th>
            <th class="center">Client Phone, Email</th>
            <th class="center">Total Price</th>
            <th class="center">Date</th>
            <th class="center">Operations</th>
         </tr>
         </thead>
         <tbody class="table_data">
            @include('admin.orders._data')
         </tbody>
      </table>
   </div>


   {{ $orders->links() }}

@endsection
@section('extra_js')
   <script>
       $(document).ready(function () {
          @can('order-delete')
           deleteAjax("/admin/orders/", "delete_me", "Order");
          @endcan
       });
   </script>
@stop
