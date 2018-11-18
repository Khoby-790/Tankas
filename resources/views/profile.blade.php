@extends('layout.app')
@section('content')


<nav class="page-navs margin-free">
    <div class="nav-scroller">
        <div class="nav nav-center nav-tabs">
            <a class="nav-link active" href="#">Profile</a>
            <a class="nav-link" href="Tasks.html">Tasks</a>
            <a class="nav-link" href="Projects.html">Projects</a>
            <a class="nav-link" href="Activities.html">
                Activities
                <span class="badge badge-pill badge-secondary">16</span>
            </a>
        </div>
    </div>
</nav>
<div class="row mt-4 mb-4">
    <div class="col-md-4">
        <div class="card card-fluid">
            <div class="card-body text-center">
                <h5 class="card-title text-truncate">
                    <a href="#">John Heart</a>
                </h5>
                <a href="#" class="profile-avatar profile-avatar-xxl my-3">
                    <img src="../images/avatars/employee-3.png" alt="User Avatar">
                </a>
                <p class="card-subtitle text-muted mb-3 mt-3"> HR Specialist - Manager Level </p>
                <p class="skills">
                    <a href="#" class="badge badge-pill badge-info mt-1">hr</a>
                    <a href="#" class="badge badge-pill badge-info mt-1">payroll</a>
                    <a href="#" class="badge badge-pill badge-info mt-1">recruitment</a>
                    <a href="#" class="badge badge-pill badge-info mt-1">appraisal</a>
                    <a href="#" class="badge badge-pill badge-warning mt-1">3+</a>
                </p>
                <table class="table table-condensed text-left">
                    <thead>
                        <tr class="bg-light">
                            <th colspan="2" class="text-center">Contact Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Url:</td>
                            <td><a href="#">www.example.com</a></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><a href="#">john.heart@example.com</a></td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td>(937)-321-98765</td>
                        </tr>
                        <tr>
                            <td>Skype:</td>
                            <td><a href="#">jheart83</a></td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr class="bg-light">
                            <th colspan="2" class="text-center">General information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Position:</td>
                            <td>
                                HR Specialist - Manager Level
                            </td>
                        </tr>
                        <tr>
                            <td>Supervisor:</td>
                            <td>
                                <a href="#">Davolio Nancy</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td>
                                <span class="badge badge-pill badge-success">Active</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <a href="#">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="text-center">
                                <i class="fas fa-project-diagram display-5 text-success"></i>
                                <div class="mt-2">
                                    <div class="text-muted small">Projects</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="#">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="text-center">
                                <span class="badge badge-pill badge-top badge-warning"> 5 </span>
                                <i class="far fa-envelope display-5 text-info"></i>
                                <div class="mt-2">
                                    <div class="text-muted small">Messages</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="#">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="text-center">
                                <i class="far fa-calendar-alt display-5 text-danger"></i>
                                <div class="mt-2">
                                    <div class="text-muted small">Calander</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="#">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="text-center">
                                <span class="badge badge-pill badge-top badge-danger"> 16 </span>
                                <i class="far fa-flag display-5 text-warning"></i>
                                <div class="mt-2">
                                    <div class="text-muted small">Notifications</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6 mb-4">
                                <h6 class="card-title">Recent Activities</h6>
                                <ul class="timeline-xs">
                                    <li class="timeline-item success">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                2 minutes ago
                                            </div>
                                            <p>
                                                <a class="text-info" href="#">
                                                    Steven
                                                </a>
                                                has completed his account creation.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                1 hour ago
                                            </div>
                                            <p>
                                                Staff Meeting
                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-item danger">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                4 days ago
                                            </div>
                                            <p>
                                                Completed MIS Report.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-item info">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                Wed, 17 Oct 18
                                            </div>
                                            <p>
                                                Contacted
                                                <a class="text-info" href="#">
                                                    RECRUITO
                                                </a>
                                                for new hire.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                Mon, 17 Sep 18
                                            </div>
                                            <p>
                                                Started sending payment information
                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                Sun, 16 Sep 18
                                            </div>
                                            <p>
                                                Lunch with
                                                <a class="text-info" href="#">
                                                    Nicole
                                                </a>
                                                .
                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-item warning">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                Sun, 16 Sep 18
                                            </div>
                                            <p>
                                                Leave application for MD.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="margin-left-15">
                                            <div class="text-muted text-small">
                                                Sat, 15 Sep 18
                                            </div>
                                            <p>
                                                New user creation in HR Self Service protal
                                                <a class="text-info" href="#">
                                                    more details
                                                </a>
                                                .
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <h6 class="card-title">Upcoming Tasks</h6>
                                <table class="table" id="projects">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Recruitment Drive
                                                <div class="text-muted small">18-Nov-2018 18:11:14</div>
                                            </td>
                                            <td class="text-center hidden-xs"><span class="badge badge-danger">Critical</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Onboarding Mr. Calvin Mores
                                                <div class="text-muted small">19-Nov-2018 18:11:14</div>
                                            </td>
                                            <td class="text-center hidden-xs"><span class="badge badge-warning">High</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Induction training for new joinees
                                                <div class="text-muted small">20-Nov-2018 18:11:14</div>
                                            </td>
                                            <td class="text-center hidden-xs"><span class="badge badge-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Prepare duty roster
                                                <div class="text-muted small">21-Nov-2018 18:11:14</div>
                                            </td>
                                            <td class="text-center hidden-xs"><span class="badge badge-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Attend meeting with global office
                                                <div class="text-muted small">21-Nov-2018 18:11:14</div>
                                            </td>
                                            <td class="text-center hidden-xs"><span class="badge badge-danger">Critical</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                MIS reports
                                                <div class="text-muted small">21-Nov-2018 18:11:14</div>
                                            </td>
                                            <td class="text-center hidden-xs"><span class="badge badge-warning">High</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
