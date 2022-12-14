		
@extends('layouts.dashboard.admin')
@section('content')

		<!-- page content -->
		<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>USERS</h3>
						</div>

					
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Create<small>User</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
							
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>


								<div class="x_content">
									<br />
									<form class="form" action="{{route('admin.users.store')}}" method="POST"
									enctype="multipart/form-data">
									@csrf


									<div class="form-group">
									    <label>Pictur of Agent, Max 4MB</label>
										<label class="form-label"  id="projectinput">
											<input type="file"  id="photo" name="photo">
										</label>

										@error("photo")
												<span class="text-danger">{{$message}}</span>
										@enderror
									</div>


										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="name"
											class="form-control"
											placeholder="  "
											value="{{old('name')}}"
											name="name">
												@error("name")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<!-- Position -->
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">position <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="position"
											class="form-control"
											placeholder="  "
											value="{{old('position')}}"
											name="position">
												@error("position")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<!-- Email -->										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="email" id="email"
											class="form-control"
											placeholder="  "
											value="{{old('email')}}"
											name="email">
												@error("email")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<!-- WhatsApp -->										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="whatsapp">whatsapp <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="whatsapp"
											class="form-control"
											placeholder="  "
											value="{{old('whatsapp')}}"
											name="whatsapp">
												@error("whatsapp")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="facebook">Facebook <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="facebook"
											class="form-control"
											placeholder="  "
											value="{{old('facebook')}}"
											name="facebook">
												@error("facebook")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="twitter">Twitter <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="twitter" id="twitter"
											class="form-control"
											placeholder="  "
											value="{{old('twitter')}}"
											name="twitter">
												@error("twitter")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="instagram">Instagram <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="instagram"
											class="form-control"
											placeholder="  "
											value="{{old('instagram')}}"
											name="instagram">
												@error("instagram")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				
					
				</div>
			</div>
			<!-- /page content -->

@stop
