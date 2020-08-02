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
                                                        <?php foreach($jurusan as $j) : ?>
                                                        <?php if ($j['jurusan']==$anggota['jurusan']):?>
                                                        <option value="<?=$j['jurusan'];?>" selected><?=$j['jurusan'];?></option>
                                                        <?php else :?>
                                                        <option value="<?=$j['jurusan'];?>" ><?=$j['jurusan'];?></option>
                                                        <?php endif;?>
                                                        <?php endforeach;?>
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
                                                        <?php foreach($angkatan as $an) : ?>
                                                        <?php if ($an['angkatan_univ']==$anggota['tahun_masuk_univ']):?>
                                                        <option value="<?=$an['angkatan_univ'];?>" selected><?=$an['angkatan_univ'];?></option>
                                                        <?php else :?>
                                                        <option value="<?=$an['angkatan_univ'];?>" ><?=$an['angkatan_univ'];?></option>
                                                        <?php endif;?>
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
														<?php foreach($puzzle as $pz) : ?>
                                                        <?php if ($pz['angkatan_puzzle']==$anggota['puzzle']):?>
                                                        <option value="<?=$pz['angkatan_puzzle'];?>" selected><?=$pz['angkatan_puzzle'];?></option>
                                                        <?php else :?>
                                                        <option value="<?=$pz['angkatan_puzzle'];?>" ><?=$pz['angkatan_puzzle'];?></option>
                                                        <?php endif;?>
                                                        <?php endforeach;?>
													</select>
													</div>
                                                    <?= form_error('puzzle', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
													
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Status</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-office-building"></i>
                                                            </span>
                                                        </div>
													<select class="form-control" name="status">
														<?php foreach($status as $s) : ?>
                                                        <?php if ($s['status']==$anggota['status']):?>
                                                        <option value="<?=$s['status'];?>" selected><?=$s['status'];?></option>
                                                        <?php else :?>
                                                        <option value="<?=$s['status'];?>" ><?=$s['status'];?></option>
                                                        <?php endif;?>
                                                        <?php endforeach;?>
													</select>
													</div>
                                                    <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>

                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">Jabatan Organisasi</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-office-building"></i>
                                                            </span>
                                                        </div>
													<select class="form-control" name="jabatan">
														<?php foreach($jabatan as $j) : ?>
                                                        <?php if ($j['jabatan']==$anggota['jabatan']):?>
                                                        <option value="<?=$j['jabatan'];?>" selected><?=$j['jabatan'];?></option>
                                                        <?php else :?>
                                                        <option value="<?=$j['jabatan'];?>" ><?=$j['jabatan'];?></option>
                                                        <?php endif;?>
                                                        <?php endforeach;?>
													</select>
													</div>
                                                    <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
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
														<?php foreach($bidang_riset as $br) : ?>
                                                        <?php if ($br['bidang_riset']==$anggota['bidang_riset']):?>
                                                        <option value="<?=$br['bidang_riset'];?>" selected><?=$br['bidang_riset'];?></option>
                                                        <?php else :?>
                                                        <option value="<?=$br['bidang_riset'];?>" ><?=$br['bidang_riset'];?></option>
                                                        <?php endif;?>
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
														<?php if($anggota['jenis_kelamin']=='Laki-laki') :?>
														<option value="Laki-laki" selected >Laki-laki</option>
														<option value="Perempuan" >Perempuan</option>
                                                        <?php else :?>
                                                        <option value="Laki-laki"  >Laki-laki</option>
														<option value="Perempuan" selected >Perempuan</option>
                                                        <?php endif;?>
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
														<?php foreach($agama as $ag) : ?>
                                                        <?php if($ag['agama']==$anggota['agama']) :?>
                                                            <option value="<?= $ag['agama']?>" selected><?= $ag['agama']?></option>
                                                        <?php else : ?>
                                                            <option value="<?= $ag['agama']?>" ><?= $ag['agama']?></option>
                                                        <?php endif;?>
                                                        <?php endforeach;?>
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
