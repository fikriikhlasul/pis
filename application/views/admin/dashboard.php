<div class="content-wrapper">
          <div class="content">							<!-- First Row  -->
							<div class="row">
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="media widget-media p-4 bg-white border">
										<div class="icon rounded-circle mr-4 bg-primary">
											<i class="mdi mdi-account-group text-white "></i>
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
											<i class="mdi mdi-account-multiple text-white "></i>
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
											<i class="mdi mdi-account text-white "></i>
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
											<i class="mdi mdi-teach text-white"></i>
										</div>
										<div class="media-body align-self-center">
											<h4 class="text-primary mb-2"><?= $total_dosen?> Orang</h4>
											<p>Dosen</p>
										</div>
									</div>
                                </div>
                                <div class="col-xl-6 col-md-12">
                  <!-- Doughnut Chart -->
                  <div class="card card-default">
                    <div class="card-header justify-content-center">
                      <h2>Jenis Kelamin</h2>
                    </div>
                    <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                      <canvas id="donatChart" width="716" height="210" class="chartjs-render-monitor" style="display: block; width: 716px; height: 210px;"></canvas>
                    </div>
                  </div>
</div>
                            </div>
                            
</div>
</div>
