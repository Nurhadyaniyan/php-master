<!DOCTYPE html>
<html>
<head>
	<title>Basic data tables</title>
	<link rel="stylesheet" type="text/css" href="../vendor/datatables/datatables/media/css/jquery.dataTables.css">
	<script type="text/javascript" language="javascript" src="../vendor/datatables/datatables/media/js/jquery.js">
	</script>
	<script type="text/javascript" language="javascript" src="../vendor/datatables/datatables/media/js/jquery.dataTables.js">
	</script>
	<script type="text/javascript" language="javascript" class="init">
	

$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "data.php"
    } );
} );


	</script>
</head>
<body>




<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JURUSAN</th>
                <th></th>
            </tr>
        </thead>

    </table>

</body>
</html>