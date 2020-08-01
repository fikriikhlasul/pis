<div class="content-wrapper">
          <div class="content">							
          <div class="row">
								<div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Ubah Data Anggota Aktif : <?=$anggota['name']?></h2>
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
                                                        <input type="text" class="form-control" name="name" value="<?=$anggota['name']?>" placeholder="Nama Lengkap" required>
                                                    </div>
                                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
													<div class="col-md-4 mb-3">
                                                    <label class="text-dark font-weight-medium">Tanggal Lahir</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="mdi mdi-calendar-range"></i>
                                                            </span>
                                                        </div>
                                                        <input type="date" class="form-control" name="tanggal_lahir" value="<?=$anggota['tanggal_lahir']?>" required>
                                                    </div>
                                                    <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>

                                                    <div class="col-md-4 mb-6">
                                                    <label class="text-dark font-weight-medium">Username</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                            @
                                                            </span>
                                                        </div>
                                                        <input readonly type="text" class="form-control" name="username" value="<?=$anggota['username']?>" placeholder="Username" required>
                                                    </div>
                                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Email</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-email"></i>
                                                            </span>
                                                        </div>
                                                        <input  readonly type="text" class="form-control" name="email" value="<?=$anggota['email']?>" placeholder="email" required>
                                                    </div>
                                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>

                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">NIM</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-book-open"></i>
                                                            </span>
                                                        </div>
                                                        <input  type="text" class="form-control" name="nim" value="<?=$anggota['nim']?>" placeholder="nim" required>
                                                    </div>
                                                    <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Jurusan</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-school"></i>
                                                            </span>
                                                        </div>
                                                        <select class="form-control" name="jurusan">
														<option value="<?=$anggota['jurusan']?>" >--<?=$anggota['jurusan']?>--</option>
														<option value="Sistem Informasi" >Sistem Informasi</option>
														<option value="Teknik Informatika" >Teknik Informatika</option>
														<option value="Matematika" >Matematika</option>
														<option value="Teknik Industri" >Teknik Industri</option>
														<option value="Teknik Elektro" >Teknik Elektro</option>
													</select>
                                                </div>
                                                <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
													
													
													

                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Angkatan</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-calendar-blank"></i>
                                                            </span>
                                                        </div>
														<select class="form-control" name="tahun_masuk_univ">
														<option value="<?=$anggota['tahun_masuk_univ']?>" >--<?=$anggota['tahun_masuk_univ']?>--</option>
														<?php foreach ($angkatan as $an) :?>
														<option value="<?=$an['angkatan_univ']?>" ><?=$an['angkatan_univ']?></option>
														<?php endforeach;?>
													</select>
													</div>
                                                    <?= form_error('tahun_masuk_univ', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
													
													
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Nomor Handphone</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-cellphone-android"></i>
                                                            </span>
                                                        </div>
                                                        <input  type="text" class="form-control" name="no_hp" value="<?=$anggota['no_hp']?>"  required>
                                                    </div>
                                                    <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
													
										
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Nomor Kenggotaan</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-numeric"></i>
                                                            </span>
                                                        </div>
                                                        <input  type="text" class="form-control" name="no_anggota" value="<?=$anggota['no_anggota']?>"  required>
                                                    </div>
                                                    <?= form_error('no_anggota', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
													
													
													<div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Puzzle</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-puzzle"></i>
                                                            </span>
                                                        </div>
														<select class="form-control" name="puzzle">
														<option value="<?=$anggota['puzzle']?>" >--<?=$anggota['puzzle']?>--</option>
														<?php foreach ($puzzle as $pz) :?>
														<option value="<?=$pz['angkatan_puzzle']?>" ><?=$pz['angkatan_puzzle']?></option>
														<?php endforeach;?>
													</select>
													</div>
                                                    <?= form_error('puzzle', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
													
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Jabatan Organisasi</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-office-building"></i>
                                                            </span>
                                                        </div>
														<select class="form-control" name="status">
														<option value="<?=$anggota['status']?>" >--<?=$anggota['status']?>--</option>
														<option value="Anggota Aktif" >Anggota Aktif</option>
														<option value="Alumni" >Alumni</option>
														<option value="Dosen" >Dosen</option>
													</select>
													</div>
                                                    <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>

													<div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Bidang Riset</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-owl"></i>
                                                            </span>
                                                        </div>
														<select class="form-control" name="bidang_riset">
														<option value="<?=$anggota['bidang_riset']?>" >--<?=$anggota['bidang_riset']?>--</option>
														<?php foreach ($bidang_riset as $br) :?>
														<option value="<?=$br['bidang_riset']?>" ><?=$br['bidang_riset']?></option>
														<?php endforeach;?>
													</select>
													</div>
                                                    <?= form_error('bidang_riset', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Jenis Kelamin</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-human-male-female"></i>
                                                            </span>
                                                        </div>
														<select class="form-control" name="jenis_kelamin">
														<option value="<?=$anggota['jenis_kelamin']?>" >--<?=$anggota['jenis_kelamin']?>--</option>
														<option value="Laki-laki" >Laki-laki</option>
														<option value="Perempuan" >Perempuan</option>
													</select>
													</div>
                                                    <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Agama</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-brightness-4"></i>
                                                            </span>
                                                        </div>
														<select class="form-control" name="agama">
														<option value="<?=$anggota['agama']?>" >--<?=$anggota['agama']?>--</option>
														<option value="Islam" >Islam</option>
														<option value="Kristen" >Kristen</option>
														<option value="Hindu" >Hindu</option>
														<option value="Budha" >Koordinator</option>
													</select>
													</div>
                                                    <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
                                                    
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Domisili</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-account-location"></i>
                                                            </span>
                                                        </div>
                                                        <input  type="text" class="form-control" name="domisili" value="<?=$anggota['domisili']?>"  required>
                                                    </div>
                                                    <?= form_error('domisili', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
													
													<div class="col-md-4 mb-3 border-top w-100">
                                                    <div class="form-group">
													<label class="text-dark font-weight-medium mt-3">Alamat</label>
													<textarea name="alamat"class="form-control" rows="3"><?=$anggota['alamat']?></textarea>
													</div>
                                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
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
