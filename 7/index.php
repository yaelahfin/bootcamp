<!DOCTYPE html>
<html>
	<head>
		<title>arkademy</title>
		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
	</head>
	<body>
		<nav class="navbar navbar-light bg-light">
			<a class="navbar-brand"><img src="logo.png"></a>
			<h1>Arkademy Bootcamp</h1>
		</nav>
		<!-- tambah orang container -->
		<div class="modal fade" id="adduser-container" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">ADD DATA</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<input type="text" id="n_name" name="name" class="form-control" placeholder="Name ....">
						<input type="text" id="n_work" name="work" class="form-control" placeholder="Work ....">
						<input type="text" id="n_kategori" name="kategori" class="form-control" placeholder="Kategori ...">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning" id="tomboladd">add</button>
						
					</div>
					
				</div>
			</div>
		</div>
		<!-- pesan sukses tambah orang -->
		<div class="modal fade" id="sukses" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<center>
						<img src="https://img.icons8.com/color/96/000000/ok.png">
						<b> data telah di tambahkan </b>
						</center>
					</div>
				</div>
				
			</div>
		</div>
		<!-- modal sukses delete -->
		<div class="modal fade" id="delete" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<center>
						<img src="https://img.icons8.com/color/96/000000/ok.png">
						<b> user berhasil di hapus </b>
						</center>
					</div>
				</div>
				
			</div>
		</div>
		<!-- modal edit container -->
		<div class="modal fade" id="editmodal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">edit</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<input type="text" id="e_name" name="e_name" class="form-control" placeholder="Name ....">
						<input type="text" id="e_work" name="e_work" class="form-control" placeholder="Work ....">
						<input type="text" id="e_kategori" name="e_kategori" class="form-control" placeholder="Kategori ...">
					</div>
					<div class="modal-footer">
						<button class="btn btn-warning" id="e_save">save</button>
					</div>
				</div>	
			</div>
		</div>
		<!-- sukses edit user alert -->
		<div class="modal fade" id="suksesedit" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<center>
						<img src="https://img.icons8.com/color/96/000000/ok.png">
						<b> user telah di update </b>
						</center>
					</div>
				</div>
				
			</div>
		</div>
		<!-- end edit modal container -->
		<div class="container">
			<div class="row">
				<button class="btn btn-warning text-white" data-toggle="modal" data-target="#adduser-container" id="add">ADD</button>
			</div>
			<div class="row" id="content">
				<table class="table">
					<tr>
						<th> name </th>
						<th> work </th>
						<th> kategori </th>
						<th> action</th>
					</tr>
				</table>
				
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
	<script src="application.js"></script>
</html>