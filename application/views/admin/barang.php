<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Data Barang</h1>
						</div>
					</div>
				</div>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="row mb-2">
								<div class="col-12 d-flex">
									<button type="button" class="btn btn-primary" data-toggle="modal" id="insertdata"
										data-target="#tambahdata" href="<?= base_url('barang/add');?>"><i
											class="fa fa-plus"></i> Tambah Data</button>
								</div>

								<!-- <?php if ($this->session->flashdata('message')) :
                    				echo $this->session->flashdata('message');
                				endif; ?> -->
							</div>
							<div class="card">
								<div class="card-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>ID Barang</th>
												<th>Nama Supplier</th>
												<th>Nama Barang</th>
												<th>Stok</th>
												<th>Satuan</th>
												<th>Harga Beli</th>
												<th>Harga Jual</th>
												<th>Tanggal Input</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($data_barang as $row) : ?>
											<tr>
												<td><?= $row->kode_barang ?></td>
												<td><?= $row->nama_supplier ?></td>
												<td><?= $row->nama_barang ?></td>
												<td><?= $row->stok ?></td>
												<td><?= $row->satuan ?></td>
												<td><?= $row->harga_beli ?></td>
												<td><?= $row->harga_jual ?></td>
												<td><?= $row->tgl_input ?></td>
												<td>
													<a class="btn btn-sm btn-warning" data-target="#editdata"
														href="<?= site_url('barang/update/' . $row->kode_barang) ?>"><i
															class="fa fa-edit"></i></a>
													<a class="btn btn-sm btn-danger" data-toggle="modal"
														data-target="#konfirmasihapus" href="#!"
														onclick="deleteConfirm('<?= site_url('barang/delete/'.$row->kode_barang) ?>')"><i
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
							<h4 class="modal-title">Tambah Barang</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<?= form_open_multipart('barang/add'); ?>
							<form action="" method="post">
								<div class="row form-group">
									<div class="col col-md-3"><label for="kodebarang" class="form-control-label">ID
											Barang</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="kodebarang" name="kodebarang" class="form-control"
											required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="namasupplier" class="form-control-label">Nama
											Supplier</label></div>
									<div class="col-12 col-md-9">
										<select class="form-control" id="namasupplier" name="namasupplier">
											<?php 
												foreach($groups as $row)
												{ 
												echo '<option value="'.$row->nama_supplier.'">'.$row->nama_supplier.'</option>';
												}
											?>
										</select>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="namabarang" class="form-control-label">
											Nama Barang</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="namabarang" name="namabarang" class="form-control"
											required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="stok" class="form-control-label">
											Stok</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="stok" name="stok" class="form-control" required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="satuan" class="form-control-label">
											Satuan</label></div>
									<div class="col-12 col-md-9">
										<select class="form-control" id="satuan" name="satuan">
											<option value="pilih" selected disabled>Pilih</option>
											<option value="Pcs" <?php if (set_value('satuan') == "Pcs") : echo "selected";
                                                        endif; ?>>Pcs</option>
											<option value="Dus" <?php if (set_value('satuan') == "Dus") : echo "selected";
                                                            endif; ?>>Dus</option>
											<option value="Pak" <?php if (set_value('satuan') == "Pak") : echo "selected";
                                                        endif; ?>>Pak</option>
										</select>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="hargabeli" class="form-control-label">
											Harga Beli</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="hargabeli" name="hargabeli" class="form-control"
											required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="hargajual" class="form-control-label">
											Harga Jual</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="hargajual" name="hargajual" class="form-control"
											required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="tglinput" class="form-control-label">
											Tanggal Input</label></div>
									<div class="col-12 col-md-9">
										<input type="date" id="tglinput" name="tglinput" class="form-control" required>
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

			<!-- modal edit -->
			<div class="modal fade" id="editdata">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Edit Barang</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<?= form_open_multipart('barang/edit'); ?>
							<form action="" method="post">
								<div class="row form-group">
									<div class="col col-md-3"><label for="kodebarang" class="form-control-label">ID
											Barang</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="kodebarang" name="kodebarang" class="form-control"
											value=" <?= $data->kode_barang; ?>" required>
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
									<div class="col col-md-3"><label for="namabarang" class="form-control-label">
											Nama Barang</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="namabarang" name="namabarang" class="form-control"
											required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="stok" class="form-control-label">
											Stok</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="stok" name="stok" class="form-control" required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="satuan" class="form-control-label">
											Satuan</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="satuan" name="satuan" class="form-control" required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="hargabeli" class="form-control-label">
											Harga Beli</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="hargabeli" name="hargabeli" class="form-control"
											required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="hargajual" class="form-control-label">
											Harga Jual</label></div>
									<div class="col-12 col-md-9">
										<input type="text" id="hargajual" name="hargajual" class="form-control"
											required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="tglinput" class="form-control-label">
											Tanggal Input</label></div>
									<div class="col-12 col-md-9">
										<input type="date" id="tglinput" name="tglinput" class="form-control" required>
									</div>
								</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Edit</button>
						</div>
						<?= form_close(); ?>
					</div>
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