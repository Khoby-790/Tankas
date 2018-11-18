@extends('layout.app')
@section('content')


<div class="container-fluid">

    <main role="main" class="main-content ml-sm-auto px-4">

        <div class="col-lg-12 mb-2">
          <div class="cover-profile">
            <div class="profile-bg-img ">
              <img class="profile-bg-img img-fluid card-image" src="{{ asset('images/bg-img1.jpg') }}" alt="bg-img">
              <div class="card-block user-info card-img-overlay">
                <div class="media mt-4 ml-3">
                  <div class="">
                    <a href="#" class="profile-image">
                      <img class="user-img img-radius d-flex mr-3 align-self-center rounded-circle" src="{{ asset('images/user-profile.png') }}" alt="user-img">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="col-lg-12">
                      <div class="text-white user-title">
                          <h4>John Heart</h4>
                          <span class="text-white">Customer Service</span>
                        </div>
                      <span class="btn btn-warning mt-1">Change profile</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



	<div class="card">
		<div class="card-header">
			<h3>User Profile</h3>
		</div>
		<div class="card-body">
				<div class="row">
						<div class="col-md-6 form-group">
							<label for="">Name :</label>
							<input type="text" name="" class="form-control" value="" readonly>
						</div>
						<div class="col-md-6 form-group">
							<label for="">Contact :</label>
							<input type="text" name="" class="form-control" value="" readonly>
						</div>
						<div class="col-md-6 form-group">
							<label for="">Email :</label>
							<input type="text" name="" class="form-control" value="" readonly>
						</div>
				</div>
		</div>
		<div class="card-footer">
			<button type="button" class="btn btn-success" name="button">Change password</button>
			<button type="button" class="btn btn-info" name="button">Edit</button>
		</div>
	</div>
    </main>
</div>

@endsection
