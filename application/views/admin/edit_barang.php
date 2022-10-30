<?php $this->load->view('template/header'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<a href="#" class="brand-link text-center">
				<span class="brand-text font-weight-bold">E-Sadean</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
				</nav>
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="wrapper">
			<div class="content-wrapper">
				<section class="content">
					<div class="container-fluid">
						<div class="mt-2 row">
							<div class="col-10">
								<div class="card card-primary">
									<!-- <?php if ($this->session->flashdata('success_msg')): ?>
									<div class="alert alert-success" role="alert">
										<?php echo $this->session->flashdata('success_msg'); ?>
									</div>
								<?php endif; ?> -->
									<div class="card-header">
										<h3 class="card-title">Edit Data Barang</h3>
									</div>
									<form action="<?php base_url("barang/update") ?>" method="post"
										enctype="multipart/form-data">
										<div class="card-body">
											<div class="form-group row">
												<label for="kodebarang" class="col-sm-2 col-form-label">ID
													Barang</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="kodebarang"
														value="<?= $data_barang->kode_barang ?>">
												</div>
											</div>
											<div class="form-group row">
												<label for="namasupplier" class="col-sm-2 col-form-label">Nama
													Supplier</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="namasupplier"
														value="<?= $data_barang->nama_supplier ?>">
												</div>
											</div>
											<div class="form-group row">
												<label for="namabarang" class="col-sm-2 col-form-label">Nama
													Barang</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="namabarang"
														value="<?= $data_barang->nama_barang ?>">
												</div>
											</div>
											<div class="form-group row">
												<label for="stok" class="col-sm-2 col-form-label">Stok</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="stok"
														value="<?= $data_barang->stok ?>">
												</div>
											</div>
											<div class="form-group row">
												<label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
												<div class="col-sm-10">
													<select class="form-control" id="satuan" name="satuan">
														<option value="" selected disabled><?= $data_barang->satuan ?></option>
														<option value="Pcs" <?php if ($data_barang->satuan == "Pcs") : echo "selected";
                                                        endif; ?>>Pcs</option>
														<option value="Dus" <?php if ($data_barang->satuan == "Dus") : echo "selected";
                                                            endif; ?>>Dus</option>
														<option value="Pak" <?php if ($data_barang->satuan == "Pak") : echo "selected";
                                                        endif; ?>>Pak</option>
													</select>
												</div>
											</div>
                                            <div class="form-group row">
												<label for="harga_beli" class="col-sm-2 col-form-label">Stok</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="harga_beli"
														value="<?= $data_barang->harga_beli ?>">
												</div>
											</div>
                                            <div class="form-group row">
												<label for="harga_jual" class="col-sm-2 col-form-label">Stok</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="harga_jual"
														value="<?= $data_barang->harga_jual ?>">
												</div>
											</div>
                                            <div class="form-group row">
												<label for="tglinput" class="col-sm-2 col-form-label">Stok</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="tglinput"
														value="<?= $data_barang->tgl_input ?>">
												</div>
											</div>
										</div>
										<div class="card-footer">
											<a class="btn btn-secondary" href="<?= site_url('barang')?>"
												style="margin-right:10px"><i class="fa fa-backward"></i></a>
											<button type="submit" class="btn btn-primary">Ubah</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

	<!-- footer-->
	<?php $this->load->view('template/footer'); ?>
</body>

</html>