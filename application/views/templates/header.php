<!DOCTYPE html>
<html>
<head>
		<title><?=$judul;?></title>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
		<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
		<script type="text/javascript">
		 	$(document).ready(function() {
			    $('#example').DataTable();
			} );
		</script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header" style="padding: 0.5%">
            <a href="#" class="navbar-brand">[IF430] Web Programming</a>
        </div>
        <ul class="nav navbar-nav navbar-right" style="padding: 0.5%">
            <li class="active"><a href="#">Product</a></li>
        </ul>
    </div>
</nav>