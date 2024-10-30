@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

<div class="content-wrapper">
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Today's Money</p>
                <h4 class="mb-0">$53k</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                <h4 class="mb-0">2,300</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">New Clients</p>
                <h4 class="mb-0">3,462</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Sales</p>
                <h4 class="mb-0">$103,430</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
       
      </div>
      <div class="row mb-4">
      </div>
      <!-- table example -->
      <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Contoh table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text text-uppercase  text-xxs font-weight-bolder opacity-7">action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="btn btn-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        <a href="javascript:;" class="btn btn-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                         Delete
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle">
                      <a href="javascript:;" class="btn btn-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        <a href="javascript:;" class="btn btn-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                         Delete
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                            <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Executive</p>
                        <p class="text-xs text-secondary mb-0">Projects</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Michael Levi</h6>
                            <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user5">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Richard Gran</h6>
                            <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Executive</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Miriam Eric</h6>
                            <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!-- end of table -->

          <!-- form example -->
         <div class="container-fluid">
         <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Contoh form</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="container">
                <form action="#" method="post">
                <div class="row">

                    <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control">
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                    <label class="form-label">Gender</label>
                        <div class="input-group input-group-outline mb-3">
                        <select name="" id="" class="form-control">
                            <option value="" disabled>Choose your gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Avatar</label>
                        <div class="input-group input-group-outline mb-3">
                        <input type="file" class="form-control">
                        </div>
                    </div>
                    
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
               
                </form>

              </div>
            </div>
          </div>
        </div>
         </div>
          <!-- end of form -->

      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
</div>
@endsection