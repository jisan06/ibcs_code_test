@extends('layout.admin.index' )
@section('title')
   Order Details
@stop
@section('extra_css')
@stop
@section('content')

   <div class="col-sm-10 col-sm-offset-1 col-xs-12">
      <div class="widget-box transparent">
         <div class="widget-header widget-header-large">
            <h3 class="widget-title grey lighter">
               <i class="ace-icon fa fa-leaf green"></i>
               Customer Invoice .
            </h3>
            <span>
               @if($order->user_id)
                  User :<a href="{{ route('user.show',$order->users->user_id)}}">{{ $order->users->name}}</a>
               @else
                  <span class="label label-default">GUEST</span>
               @endif
            </span>

            <div class="widget-toolbar no-border invoice-info">
               <span class="invoice-info-label">Order ID:</span>
               <span class="red bolder">#{{ $order->order_id }}</span>

               <br/>
               <span class="invoice-info-label">Date:</span>
               <span class="blue">{{ $order->created_at }}</span>

               <br/>
               <span class="invoice-info-label">Order Status</span>
               <span class="blue">{{ $order->order_status }}</span>
            </div>
         </div>

         <div class="widget-body">
            <div class="widget-main padding-24">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="row">
                        <div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
                           <b>Invoice Info</b>
                        </div>
                     </div>

                     <div>
                        <ul class="list-unstyled spaced">
                           <li>
                              <i class="ace-icon fa fa-caret-right blue"></i>Name:
                              <span> {{ $order->client_name }}</span>
                           </li>

                           <li>
                              <i class="ace-icon fa fa-caret-right blue"></i>
                              Phone:
                              <b class="red">{{ $order->client_phone }}</b>
                           </li>
                           <li>
                              <i class="ace-icon fa fa-caret-right blue"></i>
                              Email:
                              <b class="red">{{ $order->client_email }}</b>
                           </li>
                           <li>
                              <i class="ace-icon fa fa-caret-right blue"></i>
                              Address:
                              <b class="red">{{ $order->address }}</b>
                           </li>

                           <li class="divider"></li>

                           <li>

                           </li>
                        </ul>
                     </div>
                  </div>
               </div><!-- /.row -->

               <div>
                  <table id="simple-table" class="table table-bordered table-hover table-responsive">
                     <thead>
                     <tr class="info">
                        <th class="center">
                           #
                        </th>
                        <th class="center">Product Name</th>
                        <th class="center">Price</th>
                        <th class="center">Quantity</th>
                        <th class="center">Create Date</th>
                     </tr>
                     </thead>
                     <tbody>
                     @forelse($order->detailsOrder as $key=> $d_order)
                        <tr>
                           <td class="center">{{$key++}}</td>
                           <td class="center">
                              <a class="click_me" href="{{ route('product.show',$d_order->product_id) }}">
                                 {{$d_order->products ? ($d_order->products->product_name) :'-'}}</a>
                           </td>
                           <td class="center">{{$d_order->product_price}}</td>
                           <td class="center">{{$d_order->quantity}}</td>
                           <td class="center">{{$d_order->created_at}}</td>
                        </tr>
                     @empty
                        <tr>
                           <td colspan="11">No Data</td>
                        </tr>
                     @endforelse
                     </tbody>
                  </table>
               </div>

               <div class="hr hr8 hr-double hr-dotted"></div>

               <div class="row">
                  <div class="col-sm-5 pull-right">
                     <h4 class="pull-right">
                        Total amount :
                        <span class="red">{{ $order->total_price }}</span>
                     </h4>
                  </div>
                  <div class="col-sm-7 pull-left"><b>Extra Information:</b>
                     <p class="">
                        {{ $order->details }}
                     </p>
                  </div>
               </div>
                <br>
                <form action="{{route('order.update_status', $order->order_id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Order Status</label>
                            <select name="order_status" class="form-control" required>
                                <option value="">Select Order Status</option>
                                @foreach(\App\Models\Order::statuses as $status)
                                    @php
                                        if($status == $order->order_status){
                                            $selected = 'selected';
                                        }else{
                                             $selected = '';
                                        }
                                    @endphp
                                    <option value="{{$status}}" {{$selected}}>{{$status}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <br>
                            <button class="btn btn-info btn-sm" style="margin-top: 5px">Update Status</button>
                        </div>
                    </div>
                </form>

            </div>
         </div>
      </div>
   </div>
@endsection
