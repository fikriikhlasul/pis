<div class="content-wrapper">
          <div class="content">							
            <div class="bg-white border rounded">
				<div class="row no-gutters">
                <div class="col-lg-4 col-xl-3">
										<div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
											<div class="card text-center widget-profile px-0 border-0">
												<div class="card-img mx-auto rounded-circle">
													<img style='height:100px;width:100px' src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="user image">
                                                </div>
                                               <button type="button" title="Ganti foto" class="btn-sm" data-toggle="modal" data-target="#exampleModalTooltip">
											Change Picture
                                        </button>
                                        <form method="post" action="removepicture">
                                        <input type="hidden" name="image" class="form-control" value="default.jpg">
                                        <button class="mdi mdi-image-off" title="Hapus foto"></button>
                                        </form>
                                                <div class="card-body">
                                                    <h4 class="py-2 text-dark"><?= $user['name']?></h4>
                                                    <!-- <hr class="w-100">
													<span><b><?//=$user['email']?></b></span> -->
												</div>
                                            </div>
											<div class="contact-info pt-4">
                                                <h5 class="text-dark mb-1">Short Information</h5>
                                                <hr class="w-100">
												<p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
												<p><?=$user['email']?></p>
												<p class="text-dark font-weight-medium pt-4 mb-2">Nomor Handphone</p>
												<p><?=$user['no_hp']?></p>
                                                <p class="text-dark font-weight-medium pt-4 mb-2">Bergabung Sejak</p>
                                                <?php $date_created_first = $user['date_created'];
                                                      $date_created_second = date("D, d M Y", $date_created_first);
                                                      $array1=['Mon','Tue','Wed','Thu','Fri','Sat','Sun','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
                                                      $array2=['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']; 
                                                      $date_created = str_replace($array1,$array2,$date_created_second);
                                                ?>
												<p><?=$date_created; ?></p>
												<!-- <p class="text-dark font-weight-medium pt-4 mb-2">Social Profile</p>
												<p class="pb-3 social-button">
													<a href="#" class="mb-1 btn btn-outline btn-instagram rounded-circle">
														<i class="mdi mdi-instagram"></i>
													</a>
												</p> -->
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-8 col-xl-9">
										<div class="profile-content-right py-5">
											<ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
												<li class="nav-item">
													<a class="nav-link " id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="true">Recent Activities</a>
												</li>
												<li class="nav-item">
													<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="settings-tab" href="changepassword" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
												</li>
                                            </ul>
                                            <div class="tab-content px-3 px-xl-5" id="myTabContent">
												<div class="tab-pane fade " id="recent" role="tabpanel" aria-labelledby="recent-tab">
													<div class="media mt-5 profile-recent-media">
														<div class="align-self-start overflow-hidden mr-3" style='border-radius:8px'>
															<img  src="https://yt3.ggpht.com/a/AATXAJxGFj5FjzsskCF0PeN1BOP0ysKz3Sl38_eo_CiZ=s100-c-k-c0xffffffff-no-rj-mo" alt="thumbnail video">
														</div>
														<div class="media-body">
															<h6 class="mt-0 text-dark">Nama Channel</h6>
															<span class="float-right">5 mins ago</span>
															<p>Title Youtube</p>
														</div>
													</div>
                                                    </div>
                                                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
										    <div class="card-body">
                                            <?= form_open_multipart('admin/profile'); ?>
                                            <div class="form-row">

													<div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium">Nama Lengkap</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="mdi mdi-account"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" name="name" value="<?=$user['name']?>" placeholder="Nama Lengkap" required>
                                                    </div>
                                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
													<div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium">Tanggal Lahir</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="mdi mdi-calendar-range"></i>
                                                            </span>
                                                        </div>
                                                        <input type="date" class="form-control" name="tanggal_lahir" value="<?=$user['tanggal_lahir']?>" required>
                                                    </div>
                                                    <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium">Username</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                            @
                                                            </span>
                                                        </div>
                                                        <input readonly type="text" class="form-control" name="username" value="<?=$user['username']?>" placeholder="Username" required>
                                                    </div>
                                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
                                                    <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium">Email</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-email"></i>
                                                            </span>
                                                        </div>
                                                        <input readonly type="text" class="form-control" name="email" value="<?=$user['email']?>" placeholder="email" required>
                                                    </div>
                                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium">NIM</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-book-open"></i>
                                                            </span>
                                                        </div>
                                                        <input readonly type="text" class="form-control" name="nim" value="<?=$user['nim']?>" placeholder="nim" required>
                                                    </div>
                                                    <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    
                                                    <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium">Jurusan</label>
														<div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                           <i class="mdi mdi-school"></i>
                                                            </span>
                                                        </div>
                                                        <input readonly type="text" class="form-control" name="jurusan" value="<?=$user['jurusan']?>" placeholder="jurusan" required>
                                                    </select>
                                                </div>
                                                <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                   
<!-- 
                                                     <div class="col-md-12">
                                                    <label class="text-dark font-weight-medium">Jurusan</label>
														<div class="input-group">
                                                        
                                                    <input type="file" id="image" name="image" class="custom-file-input" id="customFile" onchange="sampul()">
                                                    <label class="custom-file-label" for="customFile">Pilih gambar..</label>
                                                    <?//= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    </div> -->
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
											</form>
										</div>
                                    </div>  
                                    
												
                                                
                                    
                                   
</div>
</div>
</div>
</div>
</div>
</div>
                    <!-- Tooltip Modal -->
                    <form method='post' action='<?=base_url();?>admin/profile' enctype='multipart/form-data'>
                    <div class="modal fade" id="exampleModalTooltip" tabindex="-1" role="dialog" aria-labelledby="exampleModalTooltip" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
                            
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle2">Modal Title</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
                                    <div class="custom-file">
                                    <input type="text" style="display:none" class="form-control" name="name" value="<?=$user['name']?>" required>
                                    <input type="text" style="display:none" class="form-control" name="tanggal_lahir" value="<?=$user['tanggal_lahir']?>" required>
                                    <input type="text" style="display:none" class="form-control" name="username" value="<?=$user['username']?>" required>
                                    <input type="text" style="display:none" class="form-control" name="email" value="<?=$user['email']?>" required>
                                    <input type="text" style="display:none" class="form-control" name="nim" value="<?=$user['nim']?>" required>
                                    <input type="text" style="display:none" class="form-control" name="jurusan" value="<?=$user['jurusan']?>" required>
                                    <input type="file" id="image" name="image" class="custom-file-input" id="customFile" onchange="sampul()">
                                    <label class="custom-file-label" for="customFile">Pilih gambar..</label>
                                    <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
										</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary btn-pill">Simpan</button>
                                    </div>
                                    </form>
                                </div>
                                
							</div>
                        </div> 
