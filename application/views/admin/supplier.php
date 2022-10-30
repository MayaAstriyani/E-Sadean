<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Data Supplier</h1>
						</div>
					</div>
				</div>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<!-- <?php if ($this->session->flashdata('error_msg')) :
                    			echo $this->session->flashdata('success_msg');
                			endif; ?> -->
							<div class="row mb-2">
								<div class="col-12 d-flex">
									<button type="button" class="btn btn-primary" data-toggle="modal"
										data-target="#tambahdata"><i class="fa fa-plus"></i> Tambah Data</button>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>ID Supplier</th>
												<th>Nama Supplier</th>
												<th>No. Telp</th>
												<th>Alamat</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($supplier as $data): ?>
											<tr>
												<td><?= $data->kode_supplier; ?></td>
												<td><?= $data->nama_supplier; ?></td>
												<td><?= $data->no_telp; ?></td>
												<td><?= $data->alamat; ?></td>
												<td>
													<a class="btn btn-sm btn-warning"
														href="<?= site_url('supplier/update/'.$data->kode_supplier) ?>"><i
															class="fa fa-edit"></i></a>
													<a class="btn btn-sm btn-danger" data-toggle="modal"
														data-target="#konfirmasihapus" href="#!"
														onclick="deleteConfirm('<?= site_url('supplier/delete/'.$data->kode_supplier) ?>')"><i
															class="fa fa-trash"></i></a>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- modal tambah -->
			<div class="modal fade" id="tambahdata">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Tambah Supplier</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<?= form_open_multipart('supplier/insert'); ?>
							<form action="" method="post">
								<div class="row form-group">
									<div class="col col-md-3"><label for="kodesupplier" class="form-control-label">ID
											Supplier</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="kodesupplier" name="kodesupplier" class="form-control"
											required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="namasupplier" class="form-control-label">Nama
											Supplier</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="namasupplier" name="namasupplier" class="form-control"
											required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="notelp" class="form-control-label">No
											Telp</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="notelp" name="notelp" class="form-control" required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="alamat"
											class=" form-control-label">Alamat</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="alamat" name="alamat" class="form-control" required>
									</div>
								</div>
						</div>
						<div class="modal-footer">
							<button type="reset" class="btn btn-danger">Reset</button>
							<button type="submit" class="btn btn-primary">Tambah</button>
						</div>
						<?= form_close(); ?>
					</div>
				</div>
			</div>

			<!-- modal hapus-->
			<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Yakin ingin menghapus data ?</h5>
							<button class="close" type="button" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
						<div class="modal-footer">
							<button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
							<a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
						</div>
					</div>
				</div>
			</div>
</body>
<script>
	function deleteConfirm(url) {
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
</script>