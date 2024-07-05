

@extends('layouts.master')
@section('content')


<div class="main-wrapper">
    <div class="header">
      <a href="javascript:void(0);" id="toggle_btn">
        <i class="fa-solid fa-circle-chevron-left texxt"></i>
      </a>
      <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
        <i class="fas fa-align-left"></i>
      </a>
      <div class="header-left">
        <h1>Subscriptions </h1>
      </div>
      <ul class="nav user-menu">
        <li class="nav-item dropdown noti-dropdown me-2">
          <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
            <!-- <i class="far fa-bell"></i> -->
            <img src="assets/img/notification-bing.png"><span class="badge badge-pill"></span>
          </a>
          <div class="dropdown-menu notifications">
            <div class="topnav-dropdown-header">
              <span class="notification-title">Notifications</span>
              <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
            </div>
            <div class="noti-content">
              <ul class="notification-list">
                <li class="notification-message">
                  <a href="admin-notification.html">
                    <div class="media d-flex">
                      <span class="avatar avatar-sm flex-shrink-0">
                        <img class="avatar-img rounded-circle" alt="" src="assets/img/figma/header/Ellipse 88.png" />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title">Alex have been subscribed</span>
                        </p>
                        <p class="noti-time">
                          <span class="notification-time">10 May 2024 10:20 PM</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="admin-notification.html">
                    <div class="media d-flex">
                      <span class="avatar avatar-sm flex-shrink-0">
                        <img class="avatar-img rounded-circle" alt="" src="assets/img/figma/header/Ellipse 88.png" />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title">Matthew have been subscribed</span>
                        </p>
                        <p class="noti-time">
                          <span class="notification-time">11 May 2024 03:56 AM</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="admin-notification.html">
                    <div class="media d-flex">
                      <span class="avatar avatar-sm flex-shrink-0">
                        <img class="avatar-img rounded-circle" alt="" src="assets/img/figma/header/Ellipse 88.png" />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title">Potter have been subscribed</span>
                        </p>
                        <p class="noti-time">
                          <span class="notification-time">11 May 2024 03:56 AM</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="admin-notification.html">
                    <div class="media d-flex">
                      <span class="avatar avatar-sm flex-shrink-0">
                        <img class="avatar-img rounded-circle" alt="User Image"
                          src="assets/img/figma/header/Ellipse 88.png" />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title">Ali have been subscribed</span>
                        </p>
                        <p class="noti-time">
                          <span class="notification-time">09 May 2024 04:56 AM</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="admin-notification.html">
                    <div class="media d-flex">
                      <span class="avatar avatar-sm flex-shrink-0">
                        <img class="avatar-img rounded-circle" alt="User Image"
                          src="assets/img/figma/header/Ellipse 88.png" />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title">Maritza have been subscribed</span>
                        </p>
                        <p class="noti-time">
                          <span class="notification-time">10 May 2024 08:42 AM</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="admin-notification.html">
                    <div class="media d-flex">
                      <span class="avatar avatar-sm flex-shrink-0">
                        <img class="avatar-img rounded-circle" alt="User Image"
                          src="assets/img/figma/header/Ellipse 88.png" />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title">Marya have been subscribed</span>
                        </p>
                        <p class="noti-time">
                          <span class="notification-time">06 May 2024 11:01 AM</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="admin-notification.html">
                    <div class="media d-flex">
                      <span class="avatar avatar-sm flex-shrink-0">
                        <img class="avatar-img rounded-circle" alt="User Image"
                          src="assets/img/figma/header/Ellipse 88.png" />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title">Richard have been subscribed</span>
                        </p>
                        <p class="noti-time">
                          <span class="notification-time">05 May 2024 06:23 AM</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="topnav-dropdown-fofoter">
              <a href="admin-notification.html">View all Notifications</a>
            </div>
          </div>
        </li>
        <p class="user-name" style="color: rgba(0, 0, 0, 1); font-family: poppins; font-size: 15px;">
            @if(auth()->check())
        {{ auth()->user()->name }}
    @else
        Guest
    @endif
        </p>
        <li class="nav-item dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle user-link nav-link" data-bs-toggle="dropdown">
            <span class="user-img">
              <img class="rounded-circle" src="assets/img/figma/header/Ellipse 88.png" width="40" alt="Admin" />
            </span>
            <i class="fa-solid fa-angle-down "></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end">
            <div class="p-2">
              <button type="button" class="btn bg-white d-flex" data-bs-toggle="modal" data-bs-target="#setting-modal"
                style="display: flex; justify-content: center; align-items: center;">
                <span><i class="fa-solid fa-gear me-2 text-secondary fs-4"
                    style="color:rgba(145, 145, 145, 1);"></i></span>
                <p style="margin-bottom: 0rem;  color:rgba(145, 145, 145, 1); font-size: 15px; font-weight: 400; font-family:
  Poppins;
  "> Account Setting</p>
              </button>
            </div>
            <div class="p-2">
              <div style="display: flex; justify-content: center; align-items: center;padding: .375rem .75rem; ">
                <img src="assets/img/logout.png">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="dropdown-item" href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                            style="font-size: 17px; font-weight: 400; font-family:
Poppins; color: rgba(164, 29, 48, 1);">Logout</a>

                    </form>
                </form>
              </div>
            </div>


          </div>
        </li>
      </ul>
    </div>

    <div class="page-wrapper" style="margin-right: 0rem;">
      <div class="content container-fluid" style="margin-left: 0rem;">
        <div class="page-header">
          <div class="row">
            <div class="user-data col-lg-12 ">
              <p class="subtrack1-para">Here you can view and manage all your subscriptions</p>
              <div class="d-flex justify-content-lg-end justify-content-center mt-1 flex-wrap">
                <button type="button" class="btn  btn-category  mx-2 mb-3" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <span><i class="fa-solid fa-plus pe-2"></i></span>Add Category
                </button>
                <a href="{{route('user.newSubscription')}}"> <button type="button" class="btn subscription-btn mt-sm-0 mt-2 mb-3">
                    <span><i class="fa-solid fa-plus pe-2"></i></span>Add Subscription
                  </button>
                </a>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content rounded">
                      <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body mb-5">
                        <div class="container">
                          <div class="row">
                            <div class="col-12 mx-auto">
                              <h4 class="text-center">Add Category</h4>
                              <form action="">
                                <div class="mb-3">
                                  <label for="" class="n-namee">Name</label>
                                  <select class="form-select text-secondary" aria-label="Default select example">
                                    <option selected>Select Name</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                </div>
                                <div class="mb-3 mt-4">
                                  <label for="date" class="form-label n-namee">Total Budget</label>
                                  <input type="" class="form-control" id="date" placeholder="Enter Budget" />
                                </div>
                                <div class="text-center mt-5">
                                  <button class="btn add-btn-catogary modal-btn px-5">
                                    Add
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

            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-lg-12">
            <div class="table-responsive border rounded">
              <table class="table usertable tablebg">
                <thead>
                  <tr class="rounded-top bg-primary-light text-center">
                    <th scope="col" style="font-size: 1rem;">SUBSCRIPTIONS</th>
                    <th scope="col" style="font-size: 1rem;">START DATE</th>
                    <th scope="col" style="font-size: 1rem;">RENEWAL DATE</th>
                    <th scope="col" style="font-size: 1rem;">PRICE</th>
                    <th scope="col" style="font-size: 1rem;">OPTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center">
                    <td>
                      <img src="./assets/img/subtrackr-images/signTrack.png" class="img-fluid" width="15" alt="">
                      <span class="ps-2">SignNTrack</span>
                    </td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td>$5.56</td>
                    <td>
                      <div class="dropdown">
                        <a class="btn p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">Action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <td>
                      <img src="./assets/img/subtrackr-images/signTrack.png" class="img-fluid" width="15" alt="">
                      <span class="ps-2">SignNTrack</span>
                    </td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td>$5.56</td>
                    <td>
                      <div class="dropdown">
                        <a class="btn p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">Action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <td>
                      <img src="./assets/img/subtrackr-images/signTrack.png" class="img-fluid" width="15" alt="">
                      <span class="ps-2">SignNTrack</span>
                    </td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td>$5.56</td>
                    <td>
                      <div class="dropdown">
                        <a class="btn p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">Action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <td>
                      <img src="./assets/img/subtrackr-images/signTrack.png" class="img-fluid" width="15" alt="">
                      <span class="ps-2">SignNTrack</span>
                    </td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td>$5.56</td>
                    <td>
                      <div class="dropdown">
                        <a class="btn p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">Action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <td>
                      <img src="./assets/img/subtrackr-images/signTrack.png" class="img-fluid" width="15" alt="">
                      <span class="ps-2">SignNTrack</span>
                    </td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td>$5.56</td>
                    <td>
                      <div class="dropdown">
                        <a class="btn p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">Action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <td>
                      <img src="./assets/img/subtrackr-images/signTrack.png" class="img-fluid" width="15" alt="">
                      <span class="ps-2">SignNTrack</span>
                    </td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td>$5.56</td>
                    <td>
                      <div class="dropdown">
                        <a class="btn p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">Action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-lg-12 mt-4">
            <h4>Categories </h4>
            <div class="table-responsive  border mb-5 rounded">
              <table class="table usertable">
                <thead class="table-header">
                  <tr class="rounded-top  text-center">
                    <th scope="col">Name</th>
                    <th scope="col"> CREATION DATE</th>
                    <th scope="col">ACTIVE SUBSCRIPTIONS</th>
                    <th scope="col">TOTAL BUDGET</th>
                    <th scope="col">SPENDINGS</th>
                    <th scope="col">OPTIONS</th>
                  </tr>
                </thead>
                <tbody class="tablebg">
                  <tr class="text-center">
                    <td>Entertainment </td>
                    <td>12/11/2024 07:23</td>
                    <td>20</td>
                    <td>$556.66</td>
                    <td>$556.66</td>
                    <td>
                      <div class="dropdown">
                        <a class="btn p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">Action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <td>Entertainment </td>
                    <td>12/11/2024 07:23</td>
                    <td>20</td>
                    <td>$556.66</td>
                    <td>$556.66</td>
                    <td>
                      <div class="dropdown">
                        <a class="btn p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">Action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="setting-modal" tabindex="-1" aria-labelledby="settingModalLabel" aria-hidden="true">
      <div class="modal-dialog modalcust">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="settingModalLabel">Account Setting</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-4">
            <div class="text-center mb-3">
              <img src="assets/img/figma/header/Ellipse 88.png" class="img-fluid" width="80" alt="">
              <h5 class="mt-3">John Smith</h5>
            </div>
            <!-- personal data button -->
            <div class="mx-2 modal-box mb-2 rounded">
              <div class="d-flex justify-content-between align-items-center gap-3 px-2">
                <p class="pt-3">
                  <span><i class="fa-regular fa-user me-2"></i></span>
                  Personal Data
                </p>
                <button type="button" class="border-0 bg-white py-0" data-bs-toggle="modal" data-bs-target="#info"><i
                    class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
              </div>
            </div>
            <!-- Language button -->
            <div class="mx-2 modal-box mb-2 rounded">
              <div class="d-flex justify-content-between align-items-center gap-3 px-2">
                <p class="pt-3">
                  <span><img src="assets/img/mdi_language.png"></i></span>
                  Language
                </p>
                <button type="button" class="border-0 bg-white py-0" data-bs-toggle="modal"
                  data-bs-target="#language"><i class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
              </div>
            </div>
            <!--Currency  button  -->
            <div class="mx-2 modal-box mb-2 rounded">
              <div class="d-flex justify-content-between align-items-center gap-3 px-2">
                <p class="pt-3">
                  <span><img src="assets/img/ic_round-currency-yen.png"></i></span>
                  Currency

                </p>

                <button type="button" class="border-0 bg-white py-0" data-bs-toggle="modal"
                  data-bs-target="#currency"><i class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
              </div>
            </div>
            <!-- Change password button -->

            <div class="mx-2 modal-box mb-2 rounded">
              <div class="d-flex justify-content-between align-items-center gap-3 px-2">
                <p class="pt-3">
                  <span><img src="assets/img/carbon_password.png"></span>
                  Change Password
                </p>
                <button type="button" class="border-0 bg-white py-0" data-bs-toggle="modal"
                  data-bs-target="#changePs"><i class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
              </div>
            </div>

            <form action="">
              <div class="mx-2 modal-box rounded">
                <div
                  class="pt-3 form-check form-switch form-check-reverse d-flex justify-content-between mx-2 py-2 mb-2 ps-0">
                  <label class="form-check-label" for="flexSwitchCheckReverse">
                    <span><img src="assets/img/images/images/auth.png" class="img-fluid me-2" width="20" alt=""></span>
                    Biometric Auth input</label>
                  <input class="form-check-input  text-white " type="checkbox" id="flexSwitchCheckReverse">
                </div>
              </div>
              <div class="mx-2 modal-box rounded">
                <div
                  class="pt-3 form-check form-switch form-check-reverse d-flex justify-content-between mx-2 py-2 mb-2 ps-0">
                  <label class="form-check-label" for="flexSwitchCheckReverse2">
                    <span><img src="assets/img/images/images/Vector-removebg-preview.png" class="img-fluid me-1"
                        width="22" alt=""></span>
                    Two Factor Auth.</label>

                  <input class="form-check-input  text-white " type="checkbox" id="flexSwitchCheckReverse3">

                </div>
              </div>
              <div class="mx-2 modal-box mb-2 rounded">
                <div
                  class="pt-3 form-check form-switch form-check-reverse d-flex justify-content-between mx-2 py-2 ps-0">
                  <label class="form-check-label" for="flexSwitchCheckReverse3">
                    <span><i class="fa-regular fa-envelope fs-5 me-2"></i></span> Email Notification</label>
                  <input class="form-check-input  text-white " type="checkbox" id="flexSwitchCheckReverse3">
                </div>
              </div>
              <div class="py-2 mx-2 modal-box mb-1 rounded">
                <button type="button" class="btn w-100 text-start text-danger">
                  <span><i class="fa-solid fa-trash-can fs-5 me-2"></i></span>
                  Delete Account</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Personal data modal -->
    <div class="modal  fade " id="info" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
      <div class="modal-dialog modalcust mt-0">
        <div class="modal-content ">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="infoModalLabel">Personal Data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <img src="assets/img/figma/header/Ellipse 88.png" class="img-fluid" width="80" alt="">
              <h4>John Smith</h4>
              <a href="#">
                <p>Change</p>
              </a>

            </div>
            <form action="" class="mx-2">
              <div class="mb-2 personal-data position-relative">
                <label for="emailInput" class="form-label">E-mail address</label>
                <input type="email" class="form-control " id="emailInput" placeholder="Email">
                <span class="position-absolute"><i class="fa-solid fa-envelope text-secondary"></i></span>
              </div>
              <div class="mb-2 personal-data position-relative">
                <label for="nameInput" class="form-label">Name</label>
                <input type="text" class="form-control " id="nameInput" placeholder="Name">
                <span class="position-absolute"><i class="fa-regular fa-user me-2 text-secondary"></i></span>
              </div>
              <div class="mb-2 personal-data position-relative">
                <label for="emailInput" class="form-label">Phone Number</label>
                <input type="tel" class="form-control " id="emailInput" placeholder="Phone Number">
                <span class="position-absolute"><i class="fa-solid fa-phone text-secondary"></i></span>
              </div>
              <button class="btn btn-save w-100 rounded-5 mt-5">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--language modal  -->
    <div class="modal  fade " id="language" tabindex="-1" aria-labelledby="languageModalLabel" aria-hidden="true">
      <div class="modal-dialog modalcust mt-0">
        <div class="modal-content h-100">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="languageModalLabel">Language</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <ul class=" w-100" style="padding-left: 0rem !important;">
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-2">
                    <img src="assets/img/images/images/PK.png" class="img-fluid me-3" width="20" alt="">
                    Pakistan
                  </p>
                  <p class="text-secondary pt-2">(اردو)</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-2">
                    <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3" width="20" alt="">
                    Iran
                  </p>
                  <p class="text-secondary pt-2">(فارسی)</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-2">
                    <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20" alt="">
                    English (UK)
                  </p>
                  <p class="text-secondary pt-2">(English)</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-2">
                    <img src="assets/img/images/images/PK.png" class="img-fluid me-3" width="20" alt="">
                    Pakistan
                  </p>
                  <p class="text-secondary pt-2">(اردو)</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-2">
                    <img src="assets/img/images/images/PK.png" class="img-fluid me-3" width="20" alt="">
                    Pakistan
                  </p>
                  <p class="text-secondary pt-2">(اردو)</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-2">
                    <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20" alt="">
                    English (UK)
                  </p>
                  <p class="text-secondary pt-2">(English)</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-2">
                    <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20" alt="">
                    English (UK)
                  </p>
                  <p class="text-secondary pt-2">(English)</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-2">
                    <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20" alt="">
                    Iran
                  </p>
                  <p class="text-secondary pt-2">(فارسی)</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-2">
                    <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3" width="20" alt="">
                    Iran
                  </p>
                  <p class="text-secondary pt-2">(فارسی)</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-2">
                    <img src="assets/img/images/images/PS.png" class="img-fluid me-3" width="20" alt="">
                    English (UK)
                  </p>
                  <p class="text-secondary pt-2">(English)</p>
                </a>
              </li>
            </ul>
            <button class="btn btn-save w-100 rounded-5 mt-5">Save</button>
          </div>

        </div>
      </div>
    </div>

    <!-- Currency modal -->
    <div class="modal  fade " id="currency" tabindex="-1" aria-labelledby="currencyModalLabel" aria-hidden="true">
      <div class="modal-dialog modalcust mt-0">
        <div class="modal-content h-100">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="currencyModalLabel">Currency</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <ul class=" w-100" style="padding-left: 0rem !important;">
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-3">
                    <img src="assets/img/images/images/PK.png" class="img-fluid me-3" width="20" alt="">
                    Pakistan
                  </p>
                  <p class="text-secondary pt-2">PKR</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-3">
                    <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3" width="20" alt="">
                    Iran
                  </p>
                  <p class="text-secondary pt-2">Rial</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-3">
                    <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20" alt="">
                    English (UK)
                  </p>
                  <p class="text-secondary pt-2">GBP</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-3">
                    <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3" width="20" alt="">
                    Iran
                  </p>
                  <p class="text-secondary pt-2">Rial</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-3">
                    <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3" width="20" alt="">
                    Iran
                  </p>
                  <p class="text-secondary pt-2">Rial</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-3">
                    <img src="assets/img/images/images/PS.png" class="img-fluid me-3" width="20" alt="">
                    Palestine
                  </p>
                  <p class="text-secondary pt-2">JOD</p>
                </a>
              </li>
              <li style="list-style: none;">
                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                  href="#">
                  <p class="pt-3">
                    <img src="assets/img/images/images/PS.png" class="img-fluid me-3" width="20" alt="">
                    Palestine
                  </p>
                  <p class="text-secondary pt-2">JOD</p>
                </a>
              </li style="list-style: none;">
              <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                href="#">
                <p class="pt-2">
                  <img src="assets/img/images/images/PS.png" class="img-fluid me-3" width="20" alt="">
                  English (UK)
                </p>
                <p class="text-secondary pt-2">GBP</p>
              </a>
              </li>
            </ul>
            <button class="btn btn-save w-100 rounded-5 mt-5">Save</button>
          </div>

        </div>
      </div>
    </div>
    <!-- Change password Modal -->
    <div class="modal  fade " id="changePs" tabindex="-1" aria-labelledby="changePsModalLabel" aria-hidden="true">
      <div class="modal-dialog modalcust mt-0">
        <div class="modal-content h-100">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="changePsModalLabel">Change Password</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-flex flex-column justify-content-between">
            <form action="" class="mx-2">
              <div class="mb-2 personal-data position-relative">
                <label for="passwordInput" class="form-label">Password</label>
                <input type="password" class="form-control " id="passwordInput" placeholder="Enter Password">
                <span class="position-absolute"><i class="fa-solid fa-lock text-secondary"></i></span>
              </div>
              <div class="mb-2 personal-data position-relative">
                <label for="passwordInput" class="form-label">New Password</label>
                <input type="password" class="form-control " id="passwordInput" placeholder="Enter Password">
                <span class="position-absolute"><i class="fa-solid fa-lock me-2 text-secondary"></i></span>
              </div>
              <div class="mb-2 personal-data position-relative">
                <label for="epasswordInput" class="form-label">Confirm Password</label>
                <input type="password" class="form-control " id="passwordInput" placeholder="Enter Password">
                <span class="position-absolute"><i class="fa-solid fa-lock text-secondary"></i></span>
              </div>

            </form>
            <div class="text-center">
              <button class="btn btn-save w-75 rounded-5 ">Save</button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
