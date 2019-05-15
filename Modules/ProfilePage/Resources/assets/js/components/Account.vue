<template>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card noborder">
								<div class="card-body bg-indigo-400 text-center card-img-top" style="background-image: url(global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
									<div class="card-img-actions d-inline-block mb-3">
										<img class="img-fluid rounded-circle" src="http://demo.interface.club/limitless/demo/bs4/Template/global_assets/images/demo/users/face11.jpg" width="170" height="170" alt="">
										<div class="card-img-actions-overlay rounded-circle">
											<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
												<i class="icon-plus3"></i>
											</a>
											<a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
												<i class="icon-link"></i>
											</a>
										</div>
									</div>

						    		<h6 class="font-weight-semibold mb-0">Victoria Davidson</h6>
						    		<span class="d-block opacity-75">Head of UX</span>

					    			<div class="list-icons list-icons-extended mt-3">
				                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Google Drive"><i class="icon-google-drive"></i></a>
				                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Twitter"><i class="icon-twitter"></i></a>
				                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Github"><i class="icon-github"></i></a>
			                    	</div>
						    	</div>

								<div class="card-body p-0">
									<ul class="nav nav-sidebar mb-2" data-nav-type="collapsible">
										<li class="nav-item-header">Navigation</li>
										<li class="nav-item">
											<a href="#profile" class="nav-link active" data-toggle="tab">
												<i class="icon-user"></i>
												 Akun
											</a>
										</li>

                    <li class="nav-item nav-item-submenu">
                      <a href="#" class="nav-link"><i class="icon-stack2"></i> With children</a>

                      <ul class="nav nav-group-sub" style="display: none;">
                        <li class="nav-item"><a href="#" class="nav-link">Second level link</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Second level link</a></li>
                      </ul>
                    </li>

                    <li class="nav-item">
                      <a href="#orders" class="nav-link" data-toggle="tab">
                        <i class="icon-cart2"></i>
                        Pesanan
                        <span class="badge bg-success badge-pill ml-auto">16</span>
                      </a>
                    </li>
									
										<li class="nav-item">
											<a href="#inbox" class="nav-link" data-toggle="tab">
												<i class="icon-envelop2"></i>
												Notifikasi
												<span class="badge bg-danger badge-pill ml-auto">29</span>
											</a>
										</li>
									
										<li class="nav-item-divider"></li>
										<li class="nav-item">
											<a href="login_advanced.html" class="nav-link" data-toggle="tab">
												<i class="icon-switch2"></i>
												Logout
											</a>
										</li>
									</ul>
								</div>
							</div>
      </div>
      <div class="col-md-9">
        <div class="card noborder">
								<div class="card-header header-elements-inline">
									<h5 class="card-title">Account settings</h5>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<label>Username</label>
													<input type="text" value="Kopyov" readonly="readonly" class="form-control">
												</div>

												<div class="col-md-6">
													<label>Current password</label>
													<input type="password" value="password" readonly="readonly" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<label>New password</label>
													<input type="password" placeholder="Enter new password" class="form-control">
												</div>

												<div class="col-md-6">
													<label>Repeat password</label>
													<input type="password" placeholder="Repeat new password" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<label>Profile visibility</label>

													<div class="form-check">
														<label class="form-check-label">
															<div class="uniform-choice"><span class="checked"><input type="radio" name="visibility" class="form-input-styled" checked="" data-fouc=""></span></div>
															Visible to everyone
														</label>
													</div>

													<div class="form-check">
														<label class="form-check-label">
															<div class="uniform-choice"><span><input type="radio" name="visibility" class="form-input-styled" data-fouc=""></span></div>
															Visible to friends only
														</label>
													</div>

													<div class="form-check">
														<label class="form-check-label">
															<div class="uniform-choice"><span><input type="radio" name="visibility" class="form-input-styled" data-fouc=""></span></div>
															Visible to my connections only
														</label>
													</div>

													<div class="form-check">
														<label class="form-check-label">
															<div class="uniform-choice"><span><input type="radio" name="visibility" class="form-input-styled" data-fouc=""></span></div>
															Visible to my colleagues only
														</label>
													</div>
												</div>

												<div class="col-md-6">
													<label>Notifications</label>

													<div class="form-check">
														<label class="form-check-label">
															<div class="uniform-checker"><span class="checked"><input type="checkbox" class="form-input-styled" checked="" data-fouc=""></span></div>
															Password expiration notification
														</label>
													</div>

													<div class="form-check">
														<label class="form-check-label">
															<div class="uniform-checker"><span class="checked"><input type="checkbox" class="form-input-styled" checked="" data-fouc=""></span></div>
															New message notification
														</label>
													</div>

													<div class="form-check">
														<label class="form-check-label">
															<div class="uniform-checker"><span class="checked"><input type="checkbox" class="form-input-styled" checked="" data-fouc=""></span></div>
															New task notification
														</label>
													</div>

													<div class="form-check">
														<label class="form-check-label">
															<div class="uniform-checker"><span><input type="checkbox" class="form-input-styled"></span></div>
															New contact request notification
														</label>
													</div>
												</div>
											</div>
										</div>

				                        <div class="text-right">
				                        	<button type="submit" class="btn btn-primary">Save changes</button>
				                        </div>
			                        </form>
								</div>
							</div>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  mounted(){
    console.log('main mounted');
  }
}
</script>