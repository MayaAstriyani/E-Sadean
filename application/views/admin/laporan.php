<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<div class="content-wrapper">

			<section class="mt-3 content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">Laporan per Bulan</h3>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<select class="custom-select form-control-border" id="exampleSelectBorder">
												<option>Pilih Bulan</option>
												<option>Value 2</option>
												<option>Value 3</option>
											</select>
										</div>
										<div class="col-3">
											<select class="custom-select form-control-border" id="exampleSelectBorder">
												<option>Pilih Tahun</option>
												<option>Value 2</option>
												<option>Value 3</option>
											</select>
										</div>
										<div class="col-3">
											<button type="submit" class="btn btn-success"><i class="fa fa-eye"></i>
												Tampil</button>
											<button type="submit" class="btn btn-success"><i
													class="fa fa-sync-alt"></i></a> Refresh</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="mt-3 content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">Laporan per Hari</h3>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<input type="date" id="idsupplier" name="idsupplier" class="form-control"
												required>
										</div>
										<div class="col-3">
											<button type="submit" class="btn btn-success"><i class="fa fa-eye"></i>
												Tampil</button>
											<button type="submit" class="btn btn-success"><i
													class="fa fa-sync-alt"></i></a> Refresh</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Tanggal Input</th>
												<th>ID Barang</th>
												<th>Nama Barang</th>
												<th>Jumlah</th>
												<th>Modal</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</body>