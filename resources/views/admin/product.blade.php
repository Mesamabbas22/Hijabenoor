@include('admin/head')
@include('admin/sidenav')
<meta name="csrf-token" content="{{ csrf_token() }}">

@include('admin/modal')
@include('admin/footer')