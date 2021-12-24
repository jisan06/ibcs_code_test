@extends('layout.admin.index' )
@section('title')
   Create new Product
@stop
@section('content')
   <form method="post" action="{{ route('product.store') }}" id="product_form" enctype="multipart/form-data">
        <div class="row">
            @csrf
            <div class="form-group col-md-6 col-lg-6 col-xs-12">
              <label class="control-label no-padding-right" for="product_name"> Product Name </label>
              <div class="clearfix">
                  <input placeholder="Product Name" name="product_name" value="{{ old('product_name') }}"
                         id="product_name" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group col-xs-6 col-md-6 col-lg-3">
              <label class=" control-label no-padding-right" for="price"> Sell Price </label>
              <div class="clearfix">
                  <input placeholder="Sell Price" name="price" value="{{ old('price') }}" id="price"
                         class="form-control" min="0" type="number">
              </div>
            </div>
            <div class="form-group col-xs-6 col-md-6 col-lg-3">
              <label class=" control-label no-padding-right" for="quantity">Quantity</label>
              <div class="clearfix">
                  <input placeholder="Quantity" type="number" value="{{ old("quantity") }}" min="0" name="quantity"
                         class="form-control" id="quantity">
              </div>
            </div>
            <div class="col-xs-12 form-group col-md-12 col-lg-12">
                <label for="description">Description</label>
                <div class="clearfix">
                    <textarea id="description" rows="6" class="form-control"
                    name="description">{{ old('description') }}</textarea>
                </div>
            </div>

            <div class="center col-xs-6 col-sm-6 col-lg-6 col-md-6">
                <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                   <label class="bolder bigger-110 " for="brand_image">Image</label>

                   <input type="file" name="photo" class="form-control" id="photo">

                   <span class="text-danger">{{ $errors->first('photo') }}</span>
                </div>
                <img id="show_image" src="" alt="" width="200" height="100" class="img-responsive img-thumbnail">
            </div>
         <hr>
         <div class="form-group">
            <div class="btn-group btn-group-justified">
               <div class="btn-group">
                  <input type="submit" class="btn btn-info " value="SAVE">
               </div>
               <div class="btn-group">
                  <a class="btn btn-danger" onclick="history.back()">BACK</a>
               </div>
            </div>
         </div>
      </div>
   </form>
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
