						<!--app header-->
						<div class="app-header header">
							<div class="container-fluid">
								<div class="d-flex">
									<a class="header-brand" href="{{url('/' . $page='index')}}">
										<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Admintro logo">
										<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Admintro logo">
										<img src="{{URL::asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Admintro logo">
										<img src="{{URL::asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Admintro logo">
									</a>
									<div class="app-sidebar__toggle" data-toggle="sidebar">
										<a class="open-toggle" href="{{url('/' . $page='#')}}">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left header-icon mt-1"><line x1="17" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="17" y1="18" x2="3" y2="18"></line></svg>
										</a>
									</div>
									<div class="mt-1 d-none">
										<form class="form-inline">
											<div class="search-element">
												<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
												<button class="btn btn-primary-color" type="submit">
													<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
														<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
													</svg>
												</button>
											</div>
										</form>
									</div><!-- SEARCH -->
									<div class="d-flex order-lg-2 ml-auto">
										<a href="{{url('/' . $page='#')}}" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch">
											<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
												<path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
											</svg>
										</a>
										<div class="dropdown   header-fullscreen" >
											<a  class="nav-link icon full-screen-link p-0"  id="fullscreen-button">
												<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 4L8 4 8 8 4 8 4 10 10 10zM8 20L10 20 10 14 4 14 4 16 8 16zM20 14L14 14 14 20 16 20 16 16 20 16zM20 8L16 8 16 4 14 4 14 10 20 10z"/></svg>
											</a>
										</div>
										<div class="dropdown header-message d-none">
											<a class="nav-link icon" data-toggle="dropdown">
												<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20,2H4C2.897,2,2,2.897,2,4v12c0,1.103,0.897,2,2,2h3v3.767L13.277,18H20c1.103,0,2-0.897,2-2V4C22,2.897,21.103,2,20,2z M20,16h-7.277L9,18.233V16H4V4h16V16z"/><path d="M7 7H17V9H7zM7 11H14V13H7z"/></svg>
												<span class="badge badge-success side-badge">3</span>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated">
												<div class="dropdown-header">
													<h6 class="mb-0">Messages</h6>
													<span class="badge badge-pill badge-primary ml-auto">View all</span>
												</div>
												<div class="header-dropdown-list message-menu" id="message-menu">
													<a class="dropdown-item border-bottom" href="{{url('/' . $page='#')}}">
														<div class="d-flex align-items-center">
															<div class="">
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
															</div>
															<div class="d-flex">
																<div class="pl-3">
																	<h6 class="mb-1">Jack Wright</h6>
																	<p class="fs-13 mb-1">All the best your template awesome</p>
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item border-bottom">
														<div class="d-flex align-items-center">
															<div class="">
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/2.jpg')}}"></span>
															</div>
															<div class="d-flex">
																<div class="pl-3">
																	<h6 class="mb-1">Lisa Rutherford</h6>
																	<p class="fs-13 mb-1">Hey! there I'm available</p>
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item border-bottom">
														<div class="d-flex align-items-center">
															<div class="">
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/3.jpg')}}"></span>
															</div>
															<div class="d-flex">
																<div class="pl-3">
																	<h6 class="mb-1">Blake Walker</h6>
																	<p class="fs-13 mb-1">Just created a new blog post</p>
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item border-bottom">
														<div class="d-flex align-items-center">
															<div class="">
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}"></span>
															</div>
															<div class="d-flex">
																<div class="pl-3">
																	<h6 class="mb-1">Fiona Morrison</h6>
																	<p class="fs-13 mb-1">Added new comment on your photo</p>
																	<div class="small text-muted">
																		2 days ago
																	</div>
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item border-bottom">
														<div class="d-flex align-items-center">
															<div class="">
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{URL::asset('assets/images/avatars/atendente2.png')}}"></span>
															</div>
															<div class="d-flex">
																<div class="pl-3">
																	<h6 class="mb-1">Stewart Bond</h6>
																	<p class="fs-13 mb-1">Your payment invoice is generated</p>
																	<div class="small text-muted">
																		3 days ago
																	</div>
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item border-bottom">
														<div class="d-flex align-items-center">
															<div class="">
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{URL::asset('assets/images/avatars/atendente2.png')}}"></span>
															</div>
															<div class="d-flex">
																<div class="pl-3">
																	<h6 class="mb-1">Faith Dickens</h6>
																	<p class="fs-13 mb-1">Please check your mail....</p>
																	<div class="small text-muted">
																		4 days ago
																	</div>
																</div>
															</div>
														</div>
													</a>
												</div>
												<div class=" text-center p-2 border-top">
													<a href="{{url('/' . $page='#')}}" class="">See All Messages</a>
												</div>
											</div>
										</div>
										<div class="dropdown header-notify d-none">
											<a class="nav-link icon" data-toggle="dropdown">
												<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707C3.105 15.48 3 15.734 3 16v2c0 .553.447 1 1 1h16c.553 0 1-.447 1-1v-2c0-.266-.105-.52-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707C6.895 14.52 7 14.266 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zM12 22c1.311 0 2.407-.834 2.818-2H9.182C9.593 21.166 10.689 22 12 22z"/></svg>
												<span class="pulse "></span>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated">
												<div class="dropdown-header">
													<h6 class="mb-0">Notifications</h6>
													<span class="badge badge-pill badge-primary ml-auto">View all</span>
												</div>
												<div class="notify-menu">
													<a href="{{url('/' . $page='#')}}" class="dropdown-item border-bottom d-flex pl-4">
														<div class="notifyimg bg-info-transparent text-info"> <i class="ti-comment-alt"></i> </div>
														<div>
															<div class="font-weight-normal1">Message Sent.</div>
															<div class="small text-muted">3 hours ago</div>
														</div>
													</a>
													<a href="{{url('/' . $page='#')}}" class="dropdown-item border-bottom d-flex pl-4">
														<div class="notifyimg bg-primary-transparent text-primary"> <i class="ti-shopping-cart-full"></i> </div>
														<div>
															<div class="font-weight-normal1"> Order Placed</div>
															<div class="small text-muted">5  hour ago</div>
														</div>
													</a>
													<a href="{{url('/' . $page='#')}}" class="dropdown-item border-bottom d-flex pl-4">
														<div class="notifyimg bg-warning-transparent text-warning"> <i class="ti-calendar"></i> </div>
														<div>
															<div class="font-weight-normal1"> Event Started</div>
															<div class="small text-muted">45 mintues ago</div>
														</div>
													</a>
													<a href="{{url('/' . $page='#')}}" class="dropdown-item border-bottom d-flex pl-4">
														<div class="notifyimg bg-success-transparent text-success"> <i class="ti-desktop"></i> </div>
														<div>
															<div class="font-weight-normal1">Your Admin lanuched</div>
															<div class="small text-muted">1 daya ago</div>
														</div>
													</a>
												</div>
												<div class=" text-center p-2 border-top">
													<a href="{{url('/' . $page='#')}}" class="">View All Notifications</a>
												</div>
											</div>
										</div>
										<div class="dropdown profile-dropdown">
											<a href="{{url('/' . $page='#')}}" class="nav-link pr-0 leading-none" data-toggle="dropdown">
												<span>
													<img src="{{URL::asset('assets/images/avatars/atendente2.png')}}" alt="img" class="avatar avatar-md brround">
												</span>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
												<div class="text-center">
													<a href="{{url('/' . $page='#')}}" class="dropdown-item text-center user pb-0 font-weight-bold">{{Auth::user()->name}}</a>													
													<span class="text-center user-semi-title">xxxx</span>
													<div class="dropdown-divider"></div>
												</div>																								
												<form method="POST" class="dropdown-item d-flex" action="{{ route('logout') }}" >
													
													@csrf
								
													<x-jet-responsive-nav-link href="{{ route('logout') }}"
																   onclick="event.preventDefault();
																	this.closest('form').submit();">
														<svg class="header-icon mr-3 text-danger"  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/></g></svg>
														{{ __('Sair') }}
													</x-jet-responsive-nav-link>
												</form>
												<a class="dropdown-item d-flex" href="#">
													
													<!--<div class="">Sign Out</div>-->
													
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/app header-->