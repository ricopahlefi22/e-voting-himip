<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{url('public')}}/assets-admin/img/favicon.png">

  <title> Administrator Electronic Voting HIMIP</title>

  <link rel="stylesheet" href="{{url('public')}}/assets-admin/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{url('public')}}/assets-admin/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{url('public')}}/assets-admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/assets-admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <link rel="stylesheet" href="{{url('public')}}/assets-admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/assets-admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/assets-admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{url('public')}}/assets-admin/plugins/ekko-lightbox/ekko-lightbox.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('administrator.template.section.header')

  @include('administrator.template.section.sidebar')

  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          @include('administrator.utils.notif')
        </div>
      </div>
    </div>
    @yield('content')
  </div>

  @include('administrator.template.section.footer')
</div>

<script src="{{url('public')}}/assets-admin/plugins/jquery/jquery.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('public')}}/assets-admin/dist/js/adminlte.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/chart.js/Chart.min.js"></script>
<script src="{{url('public')}}/assets-admin/dist/js/demo.js"></script>
<script src="{{url('public')}}/assets-admin/dist/js/pages/dashboard3.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="{{url('public')}}/assets-admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/jszip/jszip.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{url('public')}}/assets-admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
@stack('script')
</body>
</html>
