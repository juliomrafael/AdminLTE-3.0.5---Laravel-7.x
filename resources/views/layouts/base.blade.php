@include('layouts.headerMain')
<!-- Navbar -->
@include('layouts.topBar')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @yield('content')
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

@include('layouts.footer')

@include('dialogs.logout')

@include('layouts.footerMainScripts')
