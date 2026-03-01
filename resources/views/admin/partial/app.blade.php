<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>AdminLTE v4 | Dashboard</title>
  <!--begin::Accessibility Meta Tags-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
  <meta name="color-scheme" content="light dark" />
  <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
  <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
  <!--end::Accessibility Meta Tags-->

  <meta name="supported-color-schemes" content="light dark" />
  <link rel="preload" href="{{ asset('css/adminlte.css') }} ">
  <!--end::Accessibility Features-->
  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
    integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" media="print"
    onload="this.media='all'" />
  <!--end::Fonts-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
    crossorigin="anonymous" />
  <!--end::Third Party Plugin(OverlayScrollbars)-->
  <!--begin::Third Party Plugin(Bootstrap Icons)-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    crossorigin="anonymous" />
  <!--end::Third Party Plugin(Bootstrap Icons)-->
  <!--begin::Required Plugin(AdminLTE)-->
  <!--end::Required Plugin(AdminLTE)-->




  <!-- apexcharts -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
    integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous" />
  <!-- jsvectormap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
    integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous" />
  <!-- datatable -->
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- font Awesome -->
  <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- Ionicons -->
  <link href="{{ asset('css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- DATA TABLES -->
  <link href="{{ asset('css/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="{{ asset('css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />
  <!-- datatable -->



  <!-- jQuery (Required for DataTables) -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <!-- DataTables -->
  <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">

  <!-- Buttons Extension -->
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>

  <!-- Export Dependencies -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

  <!-- Export Buttons -->
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

  



  {{-- @vite(['resources/css/admin.css', 'resources/css/adminlte.css', 'resources/js/admin.js',
  'resources/js/adminlte.js']) --}}
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
  <link rel="stylesheet" href="{{ asset('js/adminlte.js') }}">
  {{-- @vite(['resources/css/admin.css', 'resources/js/admin.js']) --}}
  @vite(['resources/css/admin.css', 'resources/css/adminlte.css', 'resources/js/admin.js', 'resources/js/adminlte.js'])


  <!-- Toastr -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css')}}">


</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
  <!--begin::App Wrapper-->
  <div class="app-wrapper">




    @auth
      <!--begin::Header-->
      @include('admin.partial.topbar')
      <!--end::Header-->

      <!--begin::Sidebar-->
      @include('admin.partial.sidebar')
      <!--end::Sidebar-->
    @endauth


    @yield('content')


    <!--begin::App Main-->
    {{-- @include('admin.admin_home') --}}

    <!--end::App Content-->
    <!--end::App Main-->


    <!--begin::Footer-->
    @include('admin.partial.footer')
    <!--end::Footer-->
  </div>
  <!--end::App Wrapper-->




  <!--begin::Script-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>




  {{-- <!-- jQuery 2.0.2 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
  <!-- DATA TABES SCRIPT -->
  <script src="{{ asset('js/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
  <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('js/AdminLTE/app.js')}}" type="text/javascript"></script>

  <!-- page script -->
  <script type="text/javascript">
    $(function () {
      $("#example1").dataTable();
      $('#example2').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "bSort": true,
        "bInfo": true,
        "bAutoWidth": false
      });
    });
  </script> --}}


  @stack('scripts')



  <!-- jQuery (only if not already loaded) -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- Toastr -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    @if(session('success'))
      toastr.success("{{ session('success') }}");
    @endif

    @if(session('error'))
      toastr.error("{{ session('error') }}");
    @endif

    @if(session('warning'))
      toastr.warning("{{ session('warning') }}");
    @endif

    @if(session('info'))
      toastr.info("{{ session('info') }}");
    @endif
  </script>

  <!-- Summernote -->
  <script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>


  <script>
    $(document).on('click', '.delete-btn', function () {

      let id = $(this).data('id');

      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById('delete-form-' + id).submit();
        }
      });

    });
  </script>

  <script>
    $(function () {
      // Summernote
      $('.summernote').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>



  @yield('scripts')


</body>
<!--end::Body-->

</html>