<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layout.head')
</head>

<body>
    @include('admin.layout.loader')
    {{-- <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends--> --}}


    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('admin.layout.header')
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            @include('admin.layout.sidebar')
            <!-- Page Content Start-->
            <div class="page-body">
                @yield('content')
            </div>
            <!-- Page Content End-->
            @include('admin.layout.footer')
        </div>
        <!-- Page Body End-->
    </div>
    <!-- page-wrapper End-->
    @include('admin.layout.scripts')
</body>

</html>
