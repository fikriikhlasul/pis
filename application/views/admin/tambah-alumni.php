<div class="content-wrapper">
          <div class="content">							
          <div class="row">
								<div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Tambah Data Dosen </h2>
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
                                                        <input type="text" class="form-control" name="name"  placeholder="Nama Lengkap" required>
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
                                                        <input type="date" class="form-control" name="tanggal_lahir" required>
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
                                                        <input  type="text" class="form-control" name="username" placeholder="Username" required>
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
                                                        <input   type="text" class="form-control" name="email"  placeholder="email" required>
                                                    </div>
                                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
                                                    <div class="col-md-4 mb-3 border-top w-100">
                                                    <label class="text-dark font-weight-medium mt-3">NIP</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-book-open"></i>
                                                            </span>
                                                        </div>
                                                        <input  type="text" class="form-control" name="nip"  placeholder="NIP" required>
                                                    </div>
                                                    <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                                        
                                                        <option value="<?=$j['jabatan'];?>" ><?=$j['jabatan'];?></option>
                                                        <?php endforeach;?>
													</select>
													</div>
                                                    <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
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
														
                                                        <option value="Laki-laki">Laki-laki</option>
														<option value="Perempuan">Perempuan</option>
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
                                                            <option value="<?= $ag['agama']?>" ><?= $ag['agama']?></option>
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
                                                        <input  type="text" class="form-control" name="domisili"  required>
                                                    </div>
                                                    <?= form_error('domisili', '<small class="text-danger pl-3">', '</small>'); ?>
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
