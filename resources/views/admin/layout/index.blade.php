<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blog cua Hoai vs Huong">
    <meta name="author" content="">
    <title>Admin blogHH</title>
    <base href="{{asset('')}}">

    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
</head>

<body>

<div id="wrapper">

@include('admin.layout.header');
    @yield('content');
    <!-- Page Content -->
    {{--<div id="page-wrapper">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-12">--}}
                    {{--<h1 class="page-header">Post--}}
                        {{--<small>List</small>--}}
                    {{--</h1>--}}
                {{--</div>--}}
                {{--<!-- /.col-lg-12 -->--}}
                {{--<table class="table table-striped table-bordered table-hover" id="dataTables-example">--}}
                    {{--<thead>--}}
                    {{--<tr align="center">--}}
                        {{--<th>ID</th>--}}
                        {{--<th>Name</th>--}}
                        {{--<th>Date</th>--}}
                        {{--<th>Status</th>--}}
                        {{--<th>Delete</th>--}}
                        {{--<th>Edit</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--<tr class="odd gradeX" align="center">--}}
                        {{--<td></td>--}}
                        {{--<td></td>--}}
                        {{--<td></td>--}}
                        {{--<td></td>--}}
                        {{--<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>--}}
                        {{--<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>--}}
                    {{--</tr>--}}
                    {{--<tr class="even gradeC" align="center">--}}
                        {{--<td></td>--}}
                        {{--<td></td>--}}
                        {{--<td></td>--}}
                        {{--<td></td>--}}
                        {{--<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>--}}
                        {{--<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>--}}
                    {{--</tr>--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            {{--</div>--}}
            {{--<!-- /.row -->--}}
        {{--</div>--}}
        {{--<!-- /.container-fluid -->--}}
    {{--</div>--}}
    {{--<!-- /#page-wrapper -->--}}

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="admin_asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="admin_asset/dist/js/sb-admin-2.js"></script>

<!-- DataTables JavaScript -->
<script src="admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
</body>

</html>
