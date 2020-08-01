<div class="content-wrapper">
          <div class="content">							<!-- First Row  -->
							<div class="row">
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="media widget-media p-4 bg-white border">
										<div class="icon rounded-circle mr-4 bg-primary">
											<i class="mdi mdi-account-outline text-white "></i>
										</div>
										<div class="media-body align-self-center">
											<h4 class="text-primary mb-2"><?= $total_anggota?> Orang</h4>
											<p>Total Anggota</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="media widget-media p-4 bg-white border">
										<div class="icon rounded-circle bg-warning mr-4">
											<i class="mdi mdi-account-outline text-white "></i>
										</div>
										<div class="media-body align-self-center">
											<h4 class="text-primary mb-2"><?= $total_anggota_aktif?> Orang</h4>
											<p>Anggota Aktif</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="media widget-media p-4 bg-white border">
										<div class="icon rounded-circle mr-4 bg-danger">
											<i class="mdi mdi-account-outline text-white "></i>
										</div>
										<div class="media-body align-self-center">
											<h4 class="text-primary mb-2"><?= $total_alumni?> Orang</h4>
											<p>Alumni</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="media widget-media p-4 bg-white border">
										<div class="icon bg-success rounded-circle mr-4">
											<i class="mdi mdi-account-outline text-white"></i>
										</div>
										<div class="media-body align-self-center">
											<h4 class="text-primary mb-2"><?= $total_dosen?> Orang</h4>
											<p>Dosen</p>
										</div>
									</div>
                                </div>
                                <div class="col-12">
									<div class="card card-default">
                                    <div class="card-header card-header-border-bottom d-flex justify-content-between">
											<h2>Data Dosen</h2>

											<a href="tambah-dosen" target="_blank" class="btn btn-outline-primary btn-sm text-uppercase">
												<i class=" mdi mdi-account-plus mr-1"></i> Tambah
											</a>
                                    </div>
                                    <div class="card-body">
											<div class="basic-data-table">
                                            <table id="responsive-data-table" class="table dt-responsive nowrap" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>email</th>
                                            <th>NIP</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;?>
                                            <?php foreach ($data_dosen as $dd) : ?>     
                                            <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $dd['name']; ?></td>
                                            <td><?= $dd['username']; ?></td>
                                            <td><?= $dd['email']; ?></td>
                                            <td><?= $dd['nip']; ?></td>
                                            <td>
                                            <a href="<?= base_url('admin/detail-dosen/') . $dd['username']; ?>" class="badge badge-info">detail</a>
                                            <a href="<?= base_url('admin/ubah-dosen/') . $dd['username']; ?>" class="badge badge-success">edit</a>
                                            <a href="<?= base_url('admin/hapus-dosen/') . $dd['username']; ?>" class="badge badge-danger tombol-hapusdosen">delete</a>                    
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        <?php endforeach; ?>
                                        </tbody>
                                        </table>

</div>
</div>
</div>
</div>
                                
</div>                 
</div>
</div>
