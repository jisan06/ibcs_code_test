@forelse($orders as $key=> $order)
   <tr>
      <td class="center">{{$order->order_id}}</td>
      <td class="center order_status" >{{$order->order_status}}</td>
      <td class="center">{{$order->address}}</td>
      <td class="center">{{ $order->client_name }}</td>
      <td class="center">
         <span>{{ $order->client_phone }}</span>
         <strong>{{ $order->client_email }}</strong>
      </td>
      <td class="bolder">{{ number_format($order->total_price) }}</td>
      <td>{{ $order->created_at }}</td>

      <td class="center">
          <a class="btn btn-info2 btn-xs click_me" title="Show Details"
             href="{{ route('order.show',$order->order_id) }}">
              <i class="ace-icon fa fa-eye bigger-120"></i>
          </a>
          @can('order-delete')
              <a class="btn btn-sm btn-danger delete_me" title="Delete" data-id="{{ $order->order_id }}">
                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
              </a>
          @endcan

      </td>
   </tr>
@empty
   <tr class="center">
      <td colspan="12">No Data</td>
   </tr>
@endforelse
