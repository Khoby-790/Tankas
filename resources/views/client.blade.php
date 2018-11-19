@extends('layout.app')
@section('content')


<div class="container-fluid">

    <main role="main" class="main-content ml-sm-auto px-4">

      <div class="container">
        <div class="card">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Contact</th>
                  <th>Email</th>
                  <th>Location</th>
                  <th>Photo</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Kobby Nash</td>
                  <td>0571254567</td>
                  <td>khoby-790@gmail.com</td>
                  <td>Ashongmang</td>
                  <td> <img src="{{asset('images/avatars/employee-2.png')}}" class="rounded-circle" height="40" width="40" alt=""> </td>
                  <td>Dirty as Hell</td>
                  <td> <button type="button" name="button" class="btn btn-success"data-toggle="modal" data-target="#myModal">view</button> </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Modal -->

      <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="text-primary">VIEW</h4>
              <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <img src="{{asset('images/avatars/employee-2.png')}}" class="rounded-circle" height="200" width="200" alt="profile photo">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <form class="" action="" method="post">
                    <div class="row form-group mr-3 mb-2">
                        <label for="Full Name" class="form-label">Full Name</label>
                        <input type="text" name="full_name" class="form-control" value="" readonly>
                    </div>
                    <div class="row form-group mr-3 mb-2">
                        <label for="Contact" class="form-label">Contact</label>
                        <input type="contact" name="contact" class="form-control" value="" readonly>
                    </div>
                    <div class="row form-group mr-3 mb-2">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="" readonly>
                    </div>
                    <div class="row form-group mr-3 mb-2">
                        <label for="" class="form-label">Location</label>
                        <input type="text" name="location" class="form-control" value="" readonly>
                    </div>
                    <div class="row form-group mr-3 mb-2">
                        <label for="Description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="5" cols="50" readonly></textarea>
                    </div>
                    <div class="form-group row d-flex flex-row justify-content-end mr-3">
                      <button type="submit" name="button" class="btn btn-success mr-2">Message</button>
                      <!-- <button type="submit" name="button" class="btn btn-success">Edit</button> -->
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>

  </div>

@endsection
