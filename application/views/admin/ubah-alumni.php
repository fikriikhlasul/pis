<div class="content-wrapper">
          <div class="content">							
          <div class="row">
								<div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Ubah Data Alumni : <?=$alumni['name']?></h2>
										</div>
										<div class="card-body">
										<form action="" method="post">
                                            <div class="form-row">

													<div class="col-md-4 mb-3">
                                                    <label class="text-dark font-weight-medium">Nama Lengkap</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="mdi mdi-account"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" name="name" value="<?=$alumni['name']?>" placeholder="Nama Lengkap" required>
                                                    </div>
                                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
													<div class="col-md-4 mb-3">
                                                    <label class="text-dark font-weight-medium">Tanggal Tamat</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="mdi mdi-calendar-range"></i>
                                                            </span>
                                                        </div>
                                                        <input type="date" class="form-control" name="tanggal_tamat" value="<?=$alumni['tanggal_tamat']?>" required>
                                                    </div>
                                                    <?= form_error('tanggal_tamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>

                                                    <div class="col-md-4 mb-6">
                                                    <label class="text-dark font-weight-medium">Username</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                            @
                                                            </span>
                                                        </div>
                                                        <input  readonly type="text" class="form-control" name="username" value="<?=$alumni['username']?>" placeholder="Username" required>
                                                    </div>
                                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
                                                   

                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Pekerjaan Pertama</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-book-open"></i>
                                                            </span>
                                                        </div>
                                                        <input  type="text" class="form-control" name="pekerjaan_pertama" value="<?=$alumni['pekerjaan_pertama']?>" required>
                                                    </div>
                                                    <?= form_error('pekerjaan_pertama', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
                                                    <div class="col-md-4 mb-3 w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Tanggal Mulai Kerja Pertama</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="mdi mdi-calendar-range"></i>
                                                            </span>
                                                        </div>
                                                        <input type="date" class="form-control" name="tanggal_mulai_kerja_pertama" value="<?=$alumni['tanggal_mulai_kerja_pertama']?>" required>
                                                    </div>
                                                    <?= form_error('tanggal_mulai_kerja_pertama', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
													
													
													

                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Masa Tunggu</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-book-open"></i>
                                                            </span>
                                                        </div>
                                                        <input  type="text" class="form-control" name="masa_tunggu" value="<?=$alumni['masa_tunggu']?>" required>
                                                        <div class="input-group-append">
															<span class="input-group-text " id="inputGroupAppend">Bulan</span>
														</div>
                                                    </div>
                                                    
                                                    <?= form_error('masa_tunggu', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
													
													
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Pekerjaan Saat Ini</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-cellphone-android"></i>
                                                            </span>
                                                        </div>
                                                        <input  type="text" class="form-control" name="pekerjaan_saat_ini" value="<?=$alumni['pekerjaan_saat_ini']?>"  required>
                                                    </div>
                                                    <?= form_error('pekerjaan_saat_ini', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
													
										
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Jabatan</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-numeric"></i>
                                                            </span>
                                                        </div>
                                                        <input  type="text" class="form-control" name="jabatan" value="<?=$alumni['jabatan']?>"  required>
                                                    </div>
                                                    <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
													
													
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Tempat Bekerja</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-book-open"></i>
                                                            </span>
                                                        </div>
                                                        <input  type="text" class="form-control" name="tempat_bekerja" value="<?=$alumni['tempat_bekerja']?>" required>
                                                    </div>
                                                    <?= form_error('tempat_bekerja', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
													
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Alamat Kantor</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-book-open"></i>
                                                            </span>
                                                        </div>
                                                        <input  type="text" class="form-control" name="alamat_kerja" value="<?=$alumni['alamat_kerja']?>"  required>
                                                    </div>
                                                    <?= form_error('alamat_kerja', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    

                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Mulai Kerja</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-book-open"></i>
                                                            </span>
                                                        </div>
                                                        <input  type="date" class="form-control" name="mulai_kerja" value="<?=$alumni['mulai_kerja']?>" required>
                                                    </div>
                                                    <?= form_error('mulai_kerja', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Penghasilan Saat Ini</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-book-open"></i>
                                                            </span>
                                                        </div>
                                                        <input  type="text" class="form-control" name="penghasilan_saat_ini" value="<?=$alumni['penghasilan_saat_ini']?>" required>
                                                    </div>
                                                    <?= form_error('penghasilan_saat_ini', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
											</form>
										</div>
									</div>

									
								</div>
							</div>
    </div>
</div>
