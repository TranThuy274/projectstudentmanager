<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield("title")</title>
    @include('sbadmins.subviews.head')

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('sbadmins.subviews.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            @include('sbadmins.subviews.header')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            @yield("content")
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
    @include('sbadmins.subviews.footer')
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

@include('sbadmins.subviews.js')
</body>

</html>

