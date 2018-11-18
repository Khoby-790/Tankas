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
                  <th>Location</th>
                  <th>Photo</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Kobby Nash</td>
                  <td>Ashongmang</td>
                  <td> <img src="{{asset('images/sanitation (1).jpg')}}" height="80" width="100" alt=""> </td>
                  <td>Dirty as Hell</td>
                  <td> <button type="button" name="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">view</button> </td>
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
            <div class="container">
              <div class="modal-body">
                  <img src="{{asset('images/sanitation (1).jpg')}}" height="300" width="100%" alt="attachment" class="mb-3">
                  <form class="" action="" method="post">
                      <div class="row form-group mb-2">
                          <label for="Full Name" class="form-label">Full Name</label>
                          <input type="text" name="full_name" class="form-control" value="">
                      </div>
                      <div class="row form-group mb-2">
                          <label for="Contact" class="form-label">Contact</label>
                          <input type="contact" name="contact" class="form-control" value="">
                      </div>
                      <div class="row form-group mb-2">
                          <label for="Email" class="form-label">Email</label>
                          <input type="email" name="email" class="form-control" value="">
                      </div>
                      <div class="row form-group mb-2">
                          <label for="Location" class="form-label">Location</label>
                          <input type="text" name="" class="form-control" value="">
                      </div>
                      <div class="row form-group mb-2">
                          <label for="Description" class="form-label">Description</label>
                          <textarea name="description" class="form-control" rows="5" cols="50"></textarea>
                      </div>
                      <div class="form-group row d-flex flex-row justify-content-end mr-3">
                        <button type="submit" name="button" class="btn btn-success mr-2">Submit</button>
                        <button type="submit" name="button" class="btn btn-success">Edit</button>
                      </div>
                    </form>
              </div>
            </div>

          </div>
        </div>
      </div>


    </main>

  </div>



@endsection
