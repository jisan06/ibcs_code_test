@extends('layout.admin.index' )
@section('title')
   Edit Products
@stop

@section('content')
   <div class="row" style="">
      <form method="post" action="{{ route('product.update',$product->product_id) }}" enctype="multipart/form-data" id="Uproduct_form">
            @csrf
            @method("PUT")
            <div class="form-group col-xs-6">
              <label class="control-label no-padding-right" for="product_name"> Product Name </label>
              <input placeholder="Product Name" name="product_name" value="{{ old('product_name',$product->product_name) }}" id="product_name" class="form-control" type="text">
            </div>
            <div class="col-xs-3">
              <label class=" control-label no-padding-right" for="price">Price </label>
              <input placeholder="Sale Price" name="price" value="{{ old('price',$product->price) }}"
                     id="price" class="form-control" min="0" type="number">
            </div>
            <div class="col-xs-3">
              <label for="quantity">Quantity</label>
              <input placeholder="Quantity" type="number" value="{{ old("quantity",$product->quantity) }}" min="0" name="quantity" class="form-control" id="quantity">
            </div>
         <div class="col-xs-12 form-group">
            <label for="description">Description</label>
            <textarea id="description" rows="6" class="form-control"
                      name="description">{{ old('description',$product->description) }}</textarea>
         </div>
          <div class="center col-xs-6 col-sm-6 col-lg-6 col-md-6">
              <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                  <label class="bolder bigger-110 " for="brand_image">Image</label>
                  <input type="file" name="photo" class="form-control" id="photo">

                  <span class="text-danger">{{ $errors->first('photo') }}</span>
              </div>
              <img src="{{asset($product->image)}}" id="show_image" src="" alt="" width="200" height="100" class="img-responsive img-thumbnail">
          </div>
         <div class="col-xs-12">
            <div class="col-xs-6">
               <input type="submit" class="btn btn-success btn-block" id="submit" value="SAVE">
            </div>
            <div class="col-xs-6">
               <a class="btn btn-danger btn-block" onclick="history.back()">Cancel</a>
            </div>
         </div>
      </form>
   </div>

@endsection()
@section('extra_js')
    <!-- load photo image -->
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#show_image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#photo").change(function () {
            readURL(this);
        });
    </script>
@stop
