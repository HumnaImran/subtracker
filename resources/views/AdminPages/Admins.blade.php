@extends('layouts.AdminMaster')
@section('content')
<div class="main-wrapper">
    <div class="header">
      <a href="javascript:void(0);" id="toggle_btn">
        <!-- <i class="fas fa-align-left"></i> -->
      </a>
      <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
        <i class="fas fa-align-left"></i>
      </a>
      <div class="header-left m-0">
        <h1>Admins</h1>
      </div>
      <ul class="nav user-menu">
        <li class="nav-item dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle user-link nav-link" data-bs-toggle="dropdown">
            <span class="user-img">
              <img class="rounded-circle" src="assets/img/figma/header/Ellipse 88.png" width="40" alt="Admin" />
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-end">
            <a class="dropdown-item" href="{{route('user.signIn')}}">Sign In</a>
            <a class="dropdown-item" href="{{route('user.createAccount')}}">Sign Up</a>
          </div>
        </li>
      </ul>
    </div>

    <div class="page-wrapper">
      <div class="content container-fluid">
        <div class="page-header">
          <div class="row">
            <div class="admin-data col-lg-12 d-flex justify-content-between mt-3">
              <p class="user-para">Total Admins: 440</p>

              <form class="d-flex flex-wrap" role="search">
                <div class="position-relative me-2 sm-mt-3 sm-w-100  " style="display: flex; justify-content: center; align-items: center; ">
                    <span class="icon-search ps-2"><i class=" fa-2x fa-solid fa-magnifying-glass text-secondary fs-5" style="color:#00000040 !important; font-size: 1.5rem !important;;"></i></span>
                    <input class="form-control ps-5 rounded-pill " type="search" placeholder="Search"
                      aria-label="Search" style="color:#00000040 !important; font-size: 17px;"  />
                  </div>

                <div class="">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn user-btn mt-lg-0 mt-md-0 mt-3" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <span><i class="fa-solid fa-plus pe-2"></i></span>New
                    Admin
                  </button>

                  <!-- Modal -->
                  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered ">
                      <div class="modal-content modal-user">
                        <div class="modal-header border-0">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body mb-5">
                          <div class="container">
                            <div class="row">
                              <div class="col-10 mx-auto">
                                <h4 class="text-center">Add Admin</h4>
                                <form action="">
                                  <div class="mb-3">
                                    <label for="email-admin" class="form-label">Email*</label>
                                    <input type="email" class="form-control" id="email-admin"
                                      placeholder="Enter Email" />
                                  </div>

                                  <div class="text-center">
                                    <button class="btn modal-btn px-5">
                                      Send Link
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-lg-12">
            <div class="table-responsive border rounded">
              <table class="table usertable">
                <thead>
                  <tr class="rounded-top " style="background-color: #f1f3ff;">
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th>Phone Number</th>
                    <th scope="col">SIGNUP</th>
                    <th scope="col">LAST LOGIN</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>+93 238283902</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>+93 238283902</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>+93 238283902</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>+93 238283902</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>+93 238283902</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>+93 238283902</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>+93 238283902</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>+93 238283902</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>+93 238283902</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>+93 238283902</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                  </tr>
                  <tr>
                    <td colspan="5">
                      <nav aria-label="Page navigation example">
                        <ul class="pagination d-flex justify-content-between align-items-center">
                          <li class="page-item">
                            <a class="page-link text-secondary" href="#">
                              <span><i class="fa-solid fa-arrow-left pe-2"></i></span>Previous</a>
                          </li>
                          <div class="d-flex gap-1">
                            <li class="page-item">
                              <a class="page-link border-0 rounded-circle px-1" href="#">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link border-0 rounded-circle px-1" href="#">2</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link border-0 rounded-circle px-1" href="#">3</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link border-0 rounded-circle px-1" href="#">4</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link border-0 rounded-circle px-1" href="#">.</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link border-0 rounded-circle px-1" href="#">.</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link border-0 rounded-circle px-1" href="#">.</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link border-0 rounded-circle px-1" href="#">.</a>
                            </li>
                            <!-- <li class="page-item">
                               <a class="page-link border-0 rounded-circle" href="#">9</a>
                            </li>
                            <li class="page-item">
                               <a class="page-link border-0 rounded-circle" href="#">10</a>
                            </li> -->
                            <li class="page-item">
                              <a class="page-link border-0 rounded-circle px-1" href="#">11</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link border-0 rounded-circle px-1" href="#">12</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link border-0 rounded-circle px-1" href="#">13</a>
                            </li>
                          </div>

                          <li class="page-item">
                            <a class="page-link text-secondary" href="#">Next
                              <span><i class="fa-solid fa-arrow-right ps-2"></i></span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
