<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $titre ?? 'J.I.R.A.M.A' }}</title>
  {{-- style --}}
  @include('admin.layout.dashboard_style')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
         @include('sweetalert::alert')
        {{-- Navbar --}}
        @include('admin.layout.dashboard_nav')

        <!-- Main Sidebar Container -->
        @include('admin.layout.dashboard_aside')

        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>

        {{-- Footer --}}
        @include('admin.layout.dashboard_footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
             <!-- Control sidebar content goes here -->
        </aside>
    </div>
    @include('admin.layout.dashboard_script')
</body>
</html>
