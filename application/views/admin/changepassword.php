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
                                               <button type="button" class="btn-sm" data-toggle="modal" data-target="#exampleModalTooltip">
											Change Picture
										</button>
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
													<a class="nav-link " id="profile-tab"  href="profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
												</li>
												<li class="nav-item">
													<a class="nav-link active" id="settings-tab"  href="changepassword" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
												</li>
                                            </ul>
                                            <div class="tab-content px-3 px-xl-5" id="myTabContent">
												<div class="tab-pane fade fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                                <form method='post' action='<?=base_url();?>admin/changepassword'>
                                                <div class="form-group">
                                                    <label for="exampleFormControlPassword">Password lama</label>
													<input type="password" class="form-control" name="current_password" placeholder="Password lama">
                                                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="form-group">
													<label for="exampleFormControlPassword">Password baru</label>
													<input type="password" class="form-control" name="new_password1" placeholder="Password baru">
                                                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="form-group">
													<label for="exampleFormControlPassword">Ketik ulang password baru</label>
													<input type="password" class="form-control" name="new_password2" placeholder="ketik ulang password baru">
                                                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
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
                   