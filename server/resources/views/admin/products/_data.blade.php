@forelse($products as $key => $product)
    <tr>
        <td class="center"><label class="pos-rel">{{$key+ 1}}</label></td>
        <td>{{ $product->product_name }}</td>
        <td>{{ $product->sku }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ Str::limit($product->description,50,'...')  }}</td>
        <td>
         <img src="{{ asset($product->image) }}" alt="cover photo" width="80" height="100">
        </td>
        <td class="smaller-80">{{ $product->created_at }}</td>
      <td>
         <div class="hidden-sm hidden-xs btn-group">
            <form>
               @can('product-delete')
                  <button class="btn btn-xs btn-danger delete_me" data-id="{{ $product->product_id }}">
                     <i class="ace-icon fa fa-trash-o bigger-120"></i>
                  </button>
               @endcan
               @can('product-edit')
                   <a class="btn btn-warning btn-xs" title="Edit"
                      href="{{route('product.edit',$product->product_id)}}" data-id="{{ $product->product_id }}">
                       <i class="ace-icon fa fa-pencil bigger-120"></i></a>
               @endcan
            </form>
         </div>
      </td>
   </tr>
@empty
   <tr>
      <td colspan="16" class="text-capitalize">There are no date</td>
   </tr>
@endforelse
