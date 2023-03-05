<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="{{ url('/admin/dashboard') }}" class="simple-text logo-normal">
            Ah-Shop
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item  {{ Request::is('admin/dashboard') ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/categories') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ url('/admin/categories') }}">
                    <i class="material-icons">category</i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/add-categories') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ url('/admin/add-categories') }}">
                    <i class="material-icons">add</i>
                    <p>Add Categories</p>
                </a>
            </li>
            <li class="nav-item  {{ Request::is('admin/products') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/admin/products') }}">
                    <i class="material-icons">library_books</i>
                    <p>products</p>
                </a>
            </li>
            <li class="nav-item  {{ Request::is('admin/add-products') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/admin/add-products') }}">
                    <i class="material-icons">add</i>
                    <p>Add products</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/users') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin/users') }}">
                    <i class="material-icons">person</i>
                    <p>All Users</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/add-users') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin/add-users') }}">
                    <i class="material-icons">add</i>
                    <p>Add User</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
                <a class="nav-link" href="./tables.html">
                    <i class="material-icons">content_paste</i>
                    <p>Table List</p>
                </a>
            </li>

        </ul>
    </div>
</div>
