<div id="sidebar" class="sidebar responsive ace-save-state">
   <script type="text/javascript">
       try {
           ace.settings.loadState('sidebar')
       } catch (e) {
       }
   </script>

   <ul class="nav nav-list">
      <li class="">
         <a class="click_me" data-path="/admin/dashboard" href="{{ route('admin.dashboard') }}">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
         </a>

         <b class="arrow"></b>
      </li>
       <li class="">
           <a class="click_me" data-pjax href="{{ route('order.index') }}" data-title="Orders">
               <i class="menu-icon fa fa-pencil-square-o"></i>
               Orders
           </a>
           <b class="arrow"></b>
       </li>

      @include('layout.admin._menu',
     ['menu_name' => 'Users', 'number' => 'users'  ,'gate' => '-', 'icon' => 'fa-user',
     'subMenu' => 'All Users','secondSubMenu' => 'Add User',
     'route_create' => 'user.index' ,'route_list' => 'user.create'])

      @can('role-list')
         @include('layout.admin._menu',
        ['menu_name' => 'Roles', 'numbe0r' => '' ,'gate' => 'role','icon' => 'fa-check-square-o',
        'subMenu' => 'Role List','secondSubMenu' => 'Add Role',
        'route_create' => 'roles.index' ,'route_list' => 'roles.create'])
      @endcan
      @can('product-list')

         @include('layout.admin._menu',
         ['menu_name' => 'Products', 'number' => 'products' ,'gate' => 'product','icon' => 'fa-globe', 'route_create' => 'product.create' ,'route_list' => 'product.index'])
      @endcan

      @can('role-list')
         <li class="">
            <a class="click_me" href="{{ route('settings.index') }}">
               <i class="menu-icon fa fa-cogs"></i>
               <span class="menu-text"> Settings </span>
            </a>

            <b class="arrow"></b>
         </li>
      @endcan

   </ul>
   <!-- /.nav-list -->

   <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
      <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
         data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
   </div>
</div>


