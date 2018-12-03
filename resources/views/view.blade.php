<html>
<head>
    <title>View Table</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('vendor/Datatables/datatables.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendor/Datatables/DataTables-1.10.18/css/dataTables.bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendor/Datatables/Responsive-2.2.2/css/responsive.bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendor/Datatables/Responsive-2.2.2/css/responsive.dataTables.min.css') }}">
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/css" src="{{ url('js/app.js') }}"></script>
    <script src="{{ asset('vendor/Datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('vendor/Datatables/DataTables-1.10.18/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/Datatables/Responsive-2.2.2/js/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/Datatables/Responsive-2.2.2/js/dataTables.responsive.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>


</head>
<body>
<div class="table-responsive">
    <table class="table table-striped table-bordered" id="myTable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Lecturer Name</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Nationality</th>
            <th>DOB</th>
            <th>Faculty</th>
            <th>Modules</th>
        </tr>
        </thead>
        <tbody>
        @if(count($view) > 0)
            @foreach($view as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{$item->nationality }}</td>
                    <td>{{ $item->DOB }}</td>
                    <td>{{ $item->faculty }}</td>
                    <td>{{$item->modules }}</td>
                </tr>
            @endforeach
        @else
            <div class="alert alert-info">No any disprove propety detail for now</div>
        @endif
        </tbody>
    </table>
</div><!--/. table-responsive-->
<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        })
    } );
</script>

</body>




</html>
