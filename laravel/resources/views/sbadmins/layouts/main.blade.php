<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield("title")</title>
    @include('sbadmins.partials.head')

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul>

        @include('sbadmins.partials.sidebar')
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

        @include('sbadmins.partials.header')


        <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div>

                @yield("content")
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
    @include('sbadmins.partials.footer')
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

@include('sbadmins.partials.js')
</body>

</html>

