<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layout.admin._header')
<body class="no-skin">
<!-- navBar -->
@include('layout.admin._navbar')
<!-- /navbar -->
<div class="main-container ace-save-state " id="main-container">
   <script type="text/javascript">
       try {
           ace.settings.loadState('main-container')
       } catch (e) {
       }
   </script>

   <!-- MENU -->
@include('layout.admin._sidebar')
<!-- /MENU -->

   <div class="main-content">
      <div class="main-content-inner">
         <div class="page-content">
            <div class="row">
               <div id="content-load"  class="col-sm-12 col-lg-12 col-xs-12 col-xl-12">
                  <!-- PAGE CONTENT BEGINS -->
               @yield('content')
               <!-- PAGE CONTENT ENDS -->
               </div><!-- /.col -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.page-content -->
      </div>
   </div>
   <!-- /.main-content -->
</div>


<div class="footer">
   <div class="footer-inner">
      <div class="footer-content">
            <span class="bigger-120">
               <span class="blue bolder">{{ env('APP_NAME') }}</span>
              <a href="http://findhossein.ir/">developed by Jesan Ahmed</a> ; 2021
            </span>
      </div>
   </div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
   <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>

<!-- /.main-container -->

<!-- basic scripts -->
<script src="{{ asset('admin-assets/js/admin-app.js')}}"></script>
<!-- LOAD MY JS CODES  -->
<script src="{{ asset('admin-assets/js/myCodes.js')}}"></script>


<!-- ace scripts -->
@if (env('APP_AJAX'))
   <!-- LOAD PJAX -->
<script src="{{ asset('js/pjax/pjax.min.js') }}"></script>
   <!-- script for load page on AJAX-->
   <script>
       var pjax = new Pjax({
           elements: ".click_me",
           selectors: ["title", "#extra_css", "#content-load", "#extra_js",],
           cacheBust : false,
           timeout: false ,
       });
   </script>
@endif
<!-- END script for load page on ajax-->

<!-- SEARCH SCRIPT -->
<script type="text/javascript">
    jQuery(document).on('submit', '#form-search', function (e) {
        e.preventDefault();
        var form_data = new FormData(this);
        $.ajax({
            url: "{{ route('admin.search') }}",
            method: "POST",
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $(".preview").show();
            }, success: function (data) {
                if (data.html == " ") {
                    $('.preview').html("No more records found");
                    return;
                }
                $(".table_data").empty().append(data.html);
                $('.preview').hide();
            }, error: function () {
                alert('error');
                $('.preview').hide();
            }
        })
    });

</script>
<!-- /SEARCH SCRIPT -->

<!-- BEGIN EXTRA JS-->
<div id="extra_js">
   @yield('extra_js')
</div>
<!-- END EXTRA JS-->

</body>
</html>

