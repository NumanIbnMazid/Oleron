<head>
    <!-- Starts Laravel Default
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Oléron Law & Co.</title>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Ends Laravel Default
    ================================================== -->
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Laravel CSS Files
    ================================================== -->
    <link rel="stylesheet" href="/css/app.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="/admin/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="/admin/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/admin/css/custom.css"> 
    <!-- Favicon-->
    <link rel="shortcut icon" href="/admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <script src="/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/admin/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admin/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="/admin/vendor/chart.js/Chart.min.js"></script>
    <script src="/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/admin/js/charts-home.js"></script>
    <!-- Main File-->
    <script src="/admin/js/front.js"></script>
    {{-- CKEDITOR --}}
    {{-- <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script> --}}   
    <!-- JQUERY DATATABLE-->
    <link rel="stylesheet" href="/admin/css/datatables.min.css">
    <script src="/admin/js/jquery-3.3.1.js"></script>
    <script src="/admin/js/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var t = $('#example').DataTable( {
                "columnDefs": [ {
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                } ],
                "order": [[ 1, 'asc' ]]
            } );         
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>
    {{-- /JQuery DataTable --}}

    {{-- AJAX SETUP Global--}}
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    {{-- /AJAX SETUP Global--}}
</head>