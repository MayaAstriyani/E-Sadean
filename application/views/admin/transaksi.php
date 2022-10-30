<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<div class="content-wrapper">
			<section class="content">
				<div class="container-fluid">
					<div class="mt-3 row">
						<div class="col-md-4">
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title"><i class="fa fa-search"></i> Cari Barang</h3>
								</div>
								<div class="card-body">
									<div class="form-group">
										<input type="text" id="namabarang" name="namabarang" class="form-control"
											placeholder="Masukkan nama barang [Enter]" required>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-md-8">
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title"><i class="fa fa-list"></i> Hasil Pencarian</h3>
								</div>
								<div class="card-body">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

            <section class="content">
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
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td>
													<a class="btn btn-sm btn-warning"
														href=""><i
															class="fa fa-edit"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
			</section>
		</div>
	</div>
</body>