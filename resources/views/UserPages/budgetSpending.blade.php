@extends('layouts.master')
@section('content')
<div class="main-wrapper">
    <div class="header">
      <a href="javascript:void(0);" id="toggle_btn">
        <i class="fa-solid fa-circle-chevron-left text-primary"></i>
      </a>
      <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
        <i class="fas fa-align-left"></i>
      </a>
      <div class="header-left">
        <h1>Budget & Spending </h1>
      </div>
      <ul class="nav user-menu">
        <li class="nav-item dropdown noti-dropdown me-2">
          <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
            <img src="assets/img/notification-bing.png">
            <!-- <i class="far fa-bell"></i> -->
            <span class="badge badge-pill"></span>
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
            <div class="topnav-dropdown-footer">
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

                    <a class="dropdown-item" href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                        style="font-size: 17px; font-weight: 400; font-family:
Poppins; color: rgba(164, 29, 48, 1);">Logout</a>

                </form>
              </div>
            </div>


          </div>
        </li>
      </ul>
    </div>

    <div class="page-wrapper">
      <div class="content container-fluid" style="margin-left: 2rem;">
        <div class="page-header" style="margin-right: 2rem;">
          <div class="row">
            <div class="user-data col-lg-12 ">
              <p class="subtrack1-para"> Take control of your budget with clear insights into your spending habits.</p>
              <div class="d-flex justify-content-between mt-1 flex-wrap">

                <div class="">
                  <button class="btn  text-start py-3 pe-5 budget-btn"><span><i
                        class="fa-regular fa-circle-check text-success "></i></span> Your budgets are on track</button>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn  py-1 px-5" style="background-color: #758AFF; color: white;"
                  data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.5"
                        d="M4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" />
                      <path d="M12 14V4M12 4L15 7M12 4L9 7" stroke="white" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </span>
                  Export Report
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header border-0">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body mb-5">
                        <div class="container">
                          <div class="row">
                            <div class="col-10 mx-auto">
                              <h4 class="text-center">Add Category</h4>
                              <form action="">
                                <div class="mb-3">
                                  <label for="">Name</label>
                                  <select class="form-select text-secondary" aria-label="Default select example"
                                    style="border-radius: 8px;">
                                    <option selected>Select Name</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                </div>
                                <div class="mb-3">
                                  <label for="date" class="form-label">Total Budget</label>
                                  <input type="" class="form-control" id="date" placeholder="Enter Budget"
                                    style="border-radius: 8px;" />
                                </div>
                                <div class="text-center mt-5">
                                  <button class="btn modal-btn px-5" style="background-color: #758AFF !important;">
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
              <div class="row mt-3">
                <div class="col-xl-5 col-md-12 col-sm-12 col-12">
                  <div class="semi-donut">
                    <div class="">
                      <svg class="svg-semicircle" width="80%" height="100%" viewBox="0 0 317 323" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M32.0972 174C30.1252 174 28.5222 172.401 28.5691 170.43C29.462 132.922 44.3967 97.1447 70.3585 70.5509C97.1431 43.1145 133.471 27.7009 171.35 27.7009C209.229 27.7009 245.556 43.1145 272.341 70.5509C298.303 97.1446 313.237 132.922 314.13 170.43C314.177 172.401 312.574 174 310.602 174C308.63 174 307.036 172.401 306.987 170.43C306.096 134.863 291.914 100.945 267.291 75.7234C241.846 49.6588 207.335 35.0159 171.35 35.0159C135.365 35.0159 100.853 49.6588 75.4081 75.7234C50.7855 100.945 36.6038 134.863 35.7125 170.43C35.6631 172.401 34.0692 174 32.0972 174Z"
                          fill="#4E4E61" />
                        <g filter="url(#filter0_dii_183_11111)">
                          <path
                            d="M32.2954 174C28.2663 174 24.9817 170.732 25.1749 166.707C25.8456 152.73 28.4414 138.918 32.8855 125.68C34.1846 121.81 38.5127 119.966 42.292 121.509C45.9949 123.02 47.7779 127.219 46.5198 131.016C42.6991 142.546 40.4333 154.554 39.7852 166.708C39.5706 170.731 36.3246 174 32.2954 174Z"
                            fill="#03E4E7" />
                        </g>
                        <g filter="url(#filter1_d_183_11111)">
                          <mask id="path-3-inside-1_183_11111" fill="white">
                            <path
                              d="M127.336 39.5275C126.081 35.6561 128.168 31.4754 132.085 30.3712C157.812 23.1192 185.045 23.2001 210.806 30.6785C236.634 38.1762 259.889 52.7922 278.053 72.859C280.741 75.8279 280.325 80.401 277.282 83.0041C274.148 85.6843 269.439 85.252 266.649 82.2165C250.404 64.5454 229.735 51.664 206.816 45.0107C183.927 38.3659 159.746 38.2103 136.854 44.4877C132.859 45.5831 128.612 43.468 127.336 39.5275Z" />
                          </mask>
                          <path
                            d="M127.336 39.5275C126.081 35.6561 128.168 31.4754 132.085 30.3712C157.812 23.1192 185.045 23.2001 210.806 30.6785C236.634 38.1762 259.889 52.7922 278.053 72.859C280.741 75.8279 280.325 80.401 277.282 83.0041C274.148 85.6843 269.439 85.252 266.649 82.2165C250.404 64.5454 229.735 51.664 206.816 45.0107C183.927 38.3659 159.746 38.2103 136.854 44.4877C132.859 45.5831 128.612 43.468 127.336 39.5275Z"
                            fill="#DC23FF" />
                          <path
                            d="M127.336 39.5275C126.081 35.6561 128.168 31.4754 132.085 30.3712C157.812 23.1192 185.045 23.2001 210.806 30.6785C236.634 38.1762 259.889 52.7922 278.053 72.859C280.741 75.8279 280.325 80.401 277.282 83.0041C274.148 85.6843 269.439 85.252 266.649 82.2165C250.404 64.5454 229.735 51.664 206.816 45.0107C183.927 38.3659 159.746 38.2103 136.854 44.4877C132.859 45.5831 128.612 43.468 127.336 39.5275Z"
                            stroke="url(#paint0_linear_183_11111)" stroke-opacity="0.25" stroke-width="2"
                            mask="url(#path-3-inside-1_183_11111)" />
                        </g>
                        <g filter="url(#filter2_d_183_11111)">
                          <mask id="path-4-inside-2_183_11111" fill="white">
                            <path
                              d="M44.436 115.783C40.804 114.111 39.1687 109.824 40.9565 106.248C56.2625 75.6302 81.4746 51.3557 112.295 37.5509C116.077 35.8569 120.427 37.8305 121.867 41.7159C123.28 45.5259 121.359 49.744 117.657 51.4206C90.4308 63.7536 68.1112 85.1831 54.3801 112.174C52.5264 115.818 48.1497 117.492 44.436 115.783Z" />
                          </mask>
                          <path
                            d="M44.436 115.783C40.804 114.111 39.1687 109.824 40.9565 106.248C56.2625 75.6302 81.4746 51.3557 112.295 37.5509C116.077 35.8569 120.427 37.8305 121.867 41.7159C123.28 45.5259 121.359 49.744 117.657 51.4206C90.4308 63.7536 68.1112 85.1831 54.3801 112.174C52.5264 115.818 48.1497 117.492 44.436 115.783Z"
                            fill="#758AFF" />
                          <path
                            d="M44.436 115.783C40.804 114.111 39.1687 109.824 40.9565 106.248C56.2625 75.6302 81.4746 51.3557 112.295 37.5509C116.077 35.8569 120.427 37.8305 121.867 41.7159C123.28 45.5259 121.359 49.744 117.657 51.4206C90.4308 63.7536 68.1112 85.1831 54.3801 112.174C52.5264 115.818 48.1497 117.492 44.436 115.783Z"
                            stroke="url(#paint1_linear_183_11111)" stroke-opacity="0.5" stroke-width="2"
                            mask="url(#path-4-inside-2_183_11111)" />
                        </g>
                        <defs>
                          <filter id="filter0_dii_183_11111" x="0.166748" y="103.965" width="71.7539" height="103.035"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                              values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="8" />
                            <feGaussianBlur stdDeviation="12.5" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                              values="0 0 0 0 0 0 0 0 0 0.980392 0 0 0 0 0.85098 0 0 0 0.5 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_183_11111" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_183_11111"
                              result="shape" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                              values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="-3" />
                            <feGaussianBlur stdDeviation="1.5" />
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" />
                            <feBlend mode="normal" in2="shape" result="effect2_innerShadow_183_11111" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                              values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="3" />
                            <feGaussianBlur stdDeviation="1" />
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                            <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                            <feBlend mode="normal" in2="effect2_innerShadow_183_11111"
                              result="effect3_innerShadow_183_11111" />
                          </filter>
                          <filter id="filter1_d_183_11111" x="101.972" y="0" width="202.868" height="109.778"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                              values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset />
                            <feGaussianBlur stdDeviation="12.5" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                              values="0 0 0 0 0.678431 0 0 0 0 0.482353 0 0 0 0 1 0 0 0 0.5 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_183_11111" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_183_11111"
                              result="shape" />
                          </filter>
                          <filter id="filter2_d_183_11111" x="15.2285" y="11.9404" width="132.104" height="129.515"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                              values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset />
                            <feGaussianBlur stdDeviation="12.5" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                              values="0 0 0 0 0.309804 0 0 0 0 0.388235 0 0 0 0 0.745098 0 0 0 0.5 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_183_11111" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_183_11111"
                              result="shape" />
                          </filter>
                          <linearGradient id="paint0_linear_183_11111" x1="25" y1="25" x2="175.865" y2="320.47"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" />
                            <stop offset="1" stop-color="white" stop-opacity="0" />
                          </linearGradient>
                          <linearGradient id="paint1_linear_183_11111" x1="25" y1="25" x2="175.865" y2="320.47"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#CFCFFC" />
                            <stop offset="1" stop-color="#CFCFFC" stop-opacity="0" />
                          </linearGradient>
                        </defs>
                      </svg>
                      <div class="svg-content">
                        <h2>$820.97</h2>
                        <p>of $2,000 amount paid</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-7 col-md-12 col-sm-12 col-12">
                  <div class="container-data">
                    <div class="graph-container">
                      <canvas id="lineChart"></canvas>
                    </div>
                    <div class="labels">
                      <div class="label">1000</div>
                      <div class="label">800</div>
                      <div class="label">600</div>
                      <div class="label">400</div>
                      <div class="label">200</div>
                      <div class="label">0</div>
                    </div>
                    <!-- <div class="x-labels">
      <div class="x-label">Months</div>
    </div> -->
                  </div>

                  <!-- <canvas id="myChart"> </canvas> -->
                </div>
              </div>
              <div class="row py-3">
                <h2>Categories</h2>
                <div class="col-lg-3 col-md-6 mb-4">
                  <div class="card py-4 category-card border-0 h-100">
                    <div class="card-body text-center">
                      <a href="">
                        <svg width="90" height="110" viewBox="0 0 100 100" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_183_14637)">
                            <path
                              d="M50 0C40.111 0 30.444 2.93245 22.2215 8.42652C13.9991 13.9206 7.59043 21.7295 3.80605 30.8658C0.0216643 40.0021 -0.968503 50.0555 0.960758 59.7545C2.89002 69.4536 7.65206 78.3627 14.6447 85.3553C21.6373 92.348 30.5465 97.11 40.2455 99.0393C49.9446 100.969 59.9979 99.9784 69.1342 96.194C78.2705 92.4096 86.0794 86.001 91.5735 77.7785C97.0676 69.5561 100 59.8891 100 50C99.9857 36.7436 94.7132 24.0342 85.3395 14.6605C75.9658 5.28678 63.2564 0.0143378 50 0V0ZM50 91.6667C41.7591 91.6667 33.7033 89.223 26.8513 84.6446C19.9992 80.0662 14.6587 73.5587 11.505 65.9452C8.35139 58.3316 7.52625 49.9538 9.13397 41.8712C10.7417 33.7887 14.7101 26.3644 20.5372 20.5372C26.3644 14.71 33.7887 10.7417 41.8713 9.13395C49.9538 7.52623 58.3316 8.35137 65.9452 11.505C73.5588 14.6587 80.0662 19.9992 84.6446 26.8512C89.223 33.7033 91.6667 41.7591 91.6667 50C91.6546 61.047 87.2608 71.638 79.4494 79.4494C71.638 87.2608 61.047 91.6545 50 91.6667ZM70.8334 50C70.8334 51.1051 70.3944 52.1649 69.613 52.9463C68.8316 53.7277 67.7718 54.1667 66.6667 54.1667H54.1667V66.6667C54.1667 67.7717 53.7277 68.8316 52.9463 69.613C52.1649 70.3944 51.1051 70.8333 50 70.8333C48.895 70.8333 47.8351 70.3944 47.0537 69.613C46.2723 68.8316 45.8334 67.7717 45.8334 66.6667V54.1667H33.3334C32.2283 54.1667 31.1685 53.7277 30.3871 52.9463C29.6057 52.1649 29.1667 51.1051 29.1667 50C29.1667 48.8949 29.6057 47.8351 30.3871 47.0537C31.1685 46.2723 32.2283 45.8333 33.3334 45.8333H45.8334V33.3333C45.8334 32.2283 46.2723 31.1685 47.0537 30.3871C47.8351 29.6057 48.895 29.1667 50 29.1667C51.1051 29.1667 52.1649 29.6057 52.9463 30.3871C53.7277 31.1685 54.1667 32.2283 54.1667 33.3333V45.8333H66.6667C67.7718 45.8333 68.8316 46.2723 69.613 47.0537C70.3944 47.8351 70.8334 48.8949 70.8334 50Z"
                              fill="#A2A2B5" />
                          </g>
                          <defs>
                            <clipPath id="clip0_183_14637">
                              <rect width="100" height="100" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </a>
                      <p class="pt-2 category-text">Add new category</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                  <div class="card  category-card border-1">
                    <div class="card-body text-center">
                      <svg width="70" height="70" viewBox="0 0 78 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M70.1666 11.1608C68.9926 7.89231 66.8606 5.06931 64.0588 3.07332C61.257 1.07732 57.9204 0.00455772 54.5 0H26.5C23.0796 0.00455772 19.743 1.07732 16.9412 3.07332C14.1394 5.06931 12.0074 7.89231 10.8333 11.1608L1.83335 36.348C0.94818 38.8287 0.496918 41.4479 0.500016 44.087V47.4783C0.505964 50.099 1.11146 52.6824 2.26857 55.024C3.42567 57.3655 5.10263 59.4008 7.16668 60.9689C7.16668 60.996 7.16668 61.0163 7.16668 61.0435V67.8261C7.16668 70.5244 8.22025 73.1122 10.0956 75.0201C11.971 76.9281 14.5145 78 17.1667 78C19.8188 78 22.3624 76.9281 24.2377 75.0201C26.1131 73.1122 27.1667 70.5244 27.1667 67.8261V64.4348H53.8333V67.8261C53.8333 70.5244 54.8869 73.1122 56.7623 75.0201C58.6376 76.9281 61.1812 78 63.8333 78C66.4855 78 69.029 76.9281 70.9044 75.0201C72.7798 73.1122 73.8333 70.5244 73.8333 67.8261V61.0435C73.8333 61.0163 73.8333 60.996 73.8333 60.9689C75.8974 59.4008 77.5743 57.3655 78.7314 55.024C79.8885 52.6824 80.494 50.099 80.5 47.4783V44.087C80.5034 41.449 80.0521 38.8308 79.1666 36.3514L70.1666 11.1608ZM17.1067 13.4804C17.8115 11.5208 19.0898 9.82816 20.7694 8.63056C22.4489 7.43295 24.449 6.78799 26.5 6.78261H54.5C56.5521 6.78661 58.5537 7.43092 60.2346 8.62862C61.9155 9.82631 63.1948 11.5197 63.9 13.4804L71.1933 33.913H9.80335L17.1067 13.4804ZM20.5 67.8261C20.5 68.7255 20.1488 69.5881 19.5237 70.2241C18.8986 70.8601 18.0507 71.2174 17.1667 71.2174C16.2826 71.2174 15.4348 70.8601 14.8097 70.2241C14.1845 69.5881 13.8333 68.7255 13.8333 67.8261V64.0956C14.9304 64.3223 16.0472 64.4359 17.1667 64.4348H20.5V67.8261ZM67.1667 67.8261C67.1667 68.7255 66.8155 69.5881 66.1903 70.2241C65.5652 70.8601 64.7174 71.2174 63.8333 71.2174C62.9493 71.2174 62.1014 70.8601 61.4763 70.2241C60.8512 69.5881 60.5 68.7255 60.5 67.8261V64.4348H63.8333C64.9528 64.4359 66.0696 64.3223 67.1667 64.0956V67.8261ZM73.8333 47.4783C73.8333 50.1765 72.7798 52.7643 70.9044 54.6723C69.029 56.5803 66.4855 57.6522 63.8333 57.6522H17.1667C14.5145 57.6522 11.971 56.5803 10.0956 54.6723C8.22025 52.7643 7.16668 50.1765 7.16668 47.4783V44.087C7.18026 42.945 7.3155 41.8079 7.57001 40.6957H13.8333V44.087C13.8333 44.9864 14.1845 45.849 14.8097 46.485C15.4348 47.121 16.2826 47.4783 17.1667 47.4783C18.0507 47.4783 18.8986 47.121 19.5237 46.485C20.1488 45.849 20.5 44.9864 20.5 44.087V40.6957H60.5V44.087C60.5 44.9864 60.8512 45.849 61.4763 46.485C62.1014 47.121 62.9493 47.4783 63.8333 47.4783C64.7174 47.4783 65.5652 47.121 66.1903 46.485C66.8155 45.849 67.1667 44.9864 67.1667 44.087V40.6957H73.43C73.6847 41.8079 73.8199 42.945 73.8333 44.087V47.4783Z"
                          fill="#A2A2B5" />
                      </svg>
                      <h4 class="pt-2">Auto & Transport</h4>
                      <p class=" category-text">$375 left to spend</p>
                      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar p-bar1"></div>
                      </div>
                      <p class="small-text pt-3">$25.99 <span>of $400</span></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                  <div class="card  category-card border-1">
                    <div class="card-body text-center">
                      <svg width="70" height="70" viewBox="0 0 77 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M16.3334 44.3334C18.0823 44.3334 19.5001 42.9156 19.5001 41.1667C19.5001 39.4178 18.0823 38 16.3334 38C14.5845 38 13.1667 39.4178 13.1667 41.1667C13.1667 42.9156 14.5845 44.3334 16.3334 44.3334Z"
                          fill="#A2A2B5" />
                        <path
                          d="M3.66667 31.6666C5.41557 31.6666 6.83334 30.2488 6.83334 28.4999C6.83334 26.751 5.41557 25.3333 3.66667 25.3333C1.91777 25.3333 0.5 26.751 0.5 28.4999C0.5 30.2488 1.91777 31.6666 3.66667 31.6666Z"
                          fill="#A2A2B5" />
                        <path
                          d="M16.3334 18.9993C18.0823 18.9993 19.5001 17.5816 19.5001 15.8327C19.5001 14.0838 18.0823 12.666 16.3334 12.666C14.5845 12.666 13.1667 14.0838 13.1667 15.8327C13.1667 17.5816 14.5845 18.9993 16.3334 18.9993Z"
                          fill="#A2A2B5" />
                        <path
                          d="M3.66667 6.33334C5.41557 6.33334 6.83334 4.91557 6.83334 3.16667C6.83334 1.41777 5.41557 0 3.66667 0C1.91777 0 0.5 1.41777 0.5 3.16667C0.5 4.91557 1.91777 6.33334 3.66667 6.33334Z"
                          fill="#A2A2B5" />
                        <path
                          d="M73.3334 44.3334C75.0823 44.3334 76.5 42.9156 76.5 41.1667C76.5 39.4178 75.0823 38 73.3334 38C71.5845 38 70.1667 39.4178 70.1667 41.1667C70.1667 42.9156 71.5845 44.3334 73.3334 44.3334Z"
                          fill="#A2A2B5" />
                        <path
                          d="M60.6667 31.6666C62.4156 31.6666 63.8334 30.2488 63.8334 28.4999C63.8334 26.751 62.4156 25.3333 60.6667 25.3333C58.9178 25.3333 57.5 26.751 57.5 28.4999C57.5 30.2488 58.9178 31.6666 60.6667 31.6666Z"
                          fill="#A2A2B5" />
                        <path
                          d="M73.3334 18.9993C75.0823 18.9993 76.5 17.5816 76.5 15.8327C76.5 14.0838 75.0823 12.666 73.3334 12.666C71.5845 12.666 70.1667 14.0838 70.1667 15.8327C70.1667 17.5816 71.5845 18.9993 73.3334 18.9993Z"
                          fill="#A2A2B5" />
                        <path
                          d="M60.6667 6.33334C62.4156 6.33334 63.8334 4.91557 63.8334 3.16667C63.8334 1.41777 62.4156 0 60.6667 0C58.9178 0 57.5 1.41777 57.5 3.16667C57.5 4.91557 58.9178 6.33334 60.6667 6.33334Z"
                          fill="#A2A2B5" />
                        <path
                          d="M44.8334 76C46.5823 76 48.0001 74.5823 48.0001 72.8334C48.0001 71.0845 46.5823 69.6667 44.8334 69.6667C43.0845 69.6667 41.6667 71.0845 41.6667 72.8334C41.6667 74.5823 43.0845 76 44.8334 76Z"
                          fill="#A2A2B5" />
                        <path
                          d="M32.1667 63.3334C33.9156 63.3334 35.3333 61.9156 35.3333 60.1667C35.3333 58.4178 33.9156 57 32.1667 57C30.4178 57 29 58.4178 29 60.1667C29 61.9156 30.4178 63.3334 32.1667 63.3334Z"
                          fill="#A2A2B5" />
                        <path
                          d="M44.8334 50.6666C46.5823 50.6666 48.0001 49.2489 48.0001 47.4999C48.0001 45.751 46.5823 44.3333 44.8334 44.3333C43.0845 44.3333 41.6667 45.751 41.6667 47.4999C41.6667 49.2489 43.0845 50.6666 44.8334 50.6666Z"
                          fill="#A2A2B5" />
                        <path
                          d="M32.1667 37.9994C33.9156 37.9994 35.3333 36.5816 35.3333 34.8327C35.3333 33.0838 33.9156 31.666 32.1667 31.666C30.4178 31.666 29 33.0838 29 34.8327C29 36.5816 30.4178 37.9994 32.1667 37.9994Z"
                          fill="#A2A2B5" />
                        <path
                          d="M47.9999 9.50001C46.3202 9.50001 44.7093 8.83275 43.5216 7.64501C42.3338 6.45728 41.6666 4.84637 41.6666 3.16667C41.6666 2.32682 41.3329 1.52136 40.7391 0.927496C40.1452 0.33363 39.3398 0 38.4999 0C37.6601 0 36.8546 0.33363 36.2607 0.927496C35.6669 1.52136 35.3332 2.32682 35.3332 3.16667C35.3332 4.84637 34.666 6.45728 33.4783 7.64501C32.2905 8.83275 30.6796 9.50001 28.9999 9.50001C28.1601 9.50001 27.3546 9.83364 26.7607 10.4275C26.1669 11.0214 25.8333 11.8268 25.8333 12.6667C25.8333 13.5065 26.1669 14.312 26.7607 14.9058C27.3546 15.4997 28.1601 15.8333 28.9999 15.8333C30.6796 15.8333 32.2905 16.5006 33.4783 17.6883C34.666 18.8761 35.3332 20.487 35.3332 22.1667C35.3332 23.0065 35.6669 23.812 36.2607 24.4059C36.8546 24.9997 37.6601 25.3333 38.4999 25.3333C39.3398 25.3333 40.1452 24.9997 40.7391 24.4059C41.3329 23.812 41.6666 23.0065 41.6666 22.1667C41.6666 20.487 42.3338 18.8761 43.5216 17.6883C44.7093 16.5006 46.3202 15.8333 47.9999 15.8333C48.8397 15.8333 49.6452 15.4997 50.2391 14.9058C50.8329 14.312 51.1666 13.5065 51.1666 12.6667C51.1666 11.8268 50.8329 11.0214 50.2391 10.4275C49.6452 9.83364 48.8397 9.50001 47.9999 9.50001Z"
                          fill="#A2A2B5" />
                        <path
                          d="M22.6667 60.1667C20.987 60.1667 19.3761 59.4995 18.1883 58.3117C17.0006 57.124 16.3333 55.5131 16.3333 53.8334C16.3333 52.9936 15.9997 52.1881 15.4058 51.5942C14.812 51.0004 14.0065 50.6667 13.1667 50.6667C12.3268 50.6667 11.5214 51.0004 10.9275 51.5942C10.3336 52.1881 10 52.9936 10 53.8334C10 55.5131 9.33275 57.124 8.14501 58.3117C6.95728 59.4995 5.34637 60.1667 3.66667 60.1667C2.82682 60.1667 2.02136 60.5004 1.4275 61.0942C0.83363 61.6881 0.5 62.4935 0.5 63.3334C0.5 64.1732 0.83363 64.9787 1.4275 65.5726C2.02136 66.1664 2.82682 66.5001 3.66667 66.5001C5.34637 66.5001 6.95728 67.1673 8.14501 68.355C9.33275 69.5428 10 71.1537 10 72.8334C10 73.6732 10.3336 74.4787 10.9275 75.0726C11.5214 75.6664 12.3268 76 13.1667 76C14.0065 76 14.812 75.6664 15.4058 75.0726C15.9997 74.4787 16.3333 73.6732 16.3333 72.8334C16.3333 71.1537 17.0006 69.5428 18.1883 68.355C19.3761 67.1673 20.987 66.5001 22.6667 66.5001C23.5065 66.5001 24.312 66.1664 24.9059 65.5726C25.4997 64.9787 25.8333 64.1732 25.8333 63.3334C25.8333 62.4935 25.4997 61.6881 24.9059 61.0942C24.312 60.5004 23.5065 60.1667 22.6667 60.1667Z"
                          fill="#A2A2B5" />
                        <path
                          d="M73.3334 60.1667C71.6537 60.1667 70.0428 59.4995 68.855 58.3117C67.6673 57.124 67.0001 55.5131 67.0001 53.8334C67.0001 52.9936 66.6664 52.1881 66.0726 51.5942C65.4787 51.0004 64.6732 50.6667 63.8334 50.6667C62.9935 50.6667 62.1881 51.0004 61.5942 51.5942C61.0004 52.1881 60.6667 52.9936 60.6667 53.8334C60.6667 55.5131 59.9995 57.124 58.8117 58.3117C57.624 59.4995 56.0131 60.1667 54.3334 60.1667C53.4936 60.1667 52.6881 60.5004 52.0942 61.0942C51.5004 61.6881 51.1667 62.4935 51.1667 63.3334C51.1667 64.1732 51.5004 64.9787 52.0942 65.5726C52.6881 66.1664 53.4936 66.5001 54.3334 66.5001C56.0131 66.5001 57.624 67.1673 58.8117 68.355C59.9995 69.5428 60.6667 71.1537 60.6667 72.8334C60.6667 73.6732 61.0004 74.4787 61.5942 75.0726C62.1881 75.6664 62.9935 76 63.8334 76C64.6732 76 65.4787 75.6664 66.0726 75.0726C66.6664 74.4787 67.0001 73.6732 67.0001 72.8334C67.0001 71.1537 67.6673 69.5428 68.855 68.355C70.0428 67.1673 71.6537 66.5001 73.3334 66.5001C74.1732 66.5001 74.9787 66.1664 75.5726 65.5726C76.1664 64.9787 76.5 64.1732 76.5 63.3334C76.5 62.4935 76.1664 61.6881 75.5726 61.0942C74.9787 60.5004 74.1732 60.1667 73.3334 60.1667Z"
                          fill="#A2A2B5" />
                      </svg>

                      <h4 class="pt-2">Entertainment</h4>
                      <p class=" category-text">$375 left to spend</p>
                      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar p-bar2"></div>
                      </div>
                      <p class="small-text pt-3">$50.99 <span> of $600</span></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="card  category-card border-1">
                    <div class="card-body text-center">
                      <svg width="70" height="70" viewBox="0 0 75 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M19.4622 72.4214C18.7498 72.4211 18.0572 72.1882 17.4902 71.7581C16.9232 71.328 16.5132 70.7246 16.3228 70.0401C16.1325 69.3556 16.1722 68.6277 16.4361 67.9679C16.7 67.308 17.1733 66.7526 17.7838 66.3865C29.3301 59.471 29.3301 44.6196 29.3301 35.7477C29.3301 33.162 30.3602 30.6822 32.1937 28.8539C34.0271 27.0255 36.5139 25.9984 39.1068 25.9984C41.6998 25.9984 44.1865 27.0255 46.02 28.8539C47.8535 30.6822 48.8835 33.162 48.8835 35.7477C48.8835 36.6096 48.5402 37.4362 47.929 38.0456C47.3179 38.6551 46.4889 38.9974 45.6246 38.9974C44.7603 38.9974 43.9314 38.6551 43.3202 38.0456C42.7091 37.4362 42.3657 36.6096 42.3657 35.7477C42.3657 34.8858 42.0224 34.0592 41.4112 33.4497C40.8001 32.8403 39.9711 32.4979 39.1068 32.4979C38.2425 32.4979 37.4136 32.8403 36.8024 33.4497C36.1913 34.0592 35.8479 34.8858 35.8479 35.7477C35.8479 45.3248 35.8479 63.1563 21.1372 71.9599C20.6311 72.2621 20.0521 72.4216 19.4622 72.4214ZM35.6361 77.0393C43.0729 69.5648 47.417 59.055 48.5446 45.7732C48.5826 45.3472 48.5359 44.9178 48.4072 44.5098C48.2784 44.1018 48.0702 43.7231 47.7943 43.3955C47.5185 43.0679 47.1806 42.7979 46.7998 42.6008C46.4191 42.4038 46.0031 42.2836 45.5758 42.2472C45.1481 42.2035 44.716 42.246 44.3052 42.3723C43.8944 42.4986 43.5133 42.7061 43.1846 42.9823C42.8558 43.2586 42.5862 43.598 42.3918 43.9803C42.1974 44.3626 42.0821 44.7801 42.0529 45.2078C41.0394 57.0922 37.4285 66.0063 31.0117 72.4441C30.4024 73.0556 30.0616 73.8835 30.0643 74.7455C30.0671 75.6076 30.4132 76.4333 31.0264 77.0409C31.6396 77.6486 32.4698 77.9884 33.3343 77.9856C34.1988 77.9829 35.0268 77.6378 35.6361 77.0263V77.0393ZM52.5824 76.4348C54.5592 73.1595 56.2054 69.6967 57.4968 66.0973C57.7668 65.2923 57.7102 64.4139 57.3391 63.65C56.9681 62.886 56.312 62.2972 55.5112 62.0094C54.7104 61.7215 53.8285 61.7576 53.054 62.1097C52.2795 62.4619 51.674 63.1023 51.3668 63.894C50.2194 67.0854 48.7588 70.1562 47.0064 73.0616C46.7843 73.4267 46.6365 73.8318 46.5714 74.2539C46.5063 74.676 46.5252 75.1067 46.627 75.5215C46.7288 75.9362 46.9116 76.327 47.1649 76.6713C47.4181 77.0157 47.7369 77.3069 48.103 77.5284C48.8425 77.9757 49.7298 78.1118 50.5698 77.9067C50.9858 77.8052 51.3776 77.6229 51.7229 77.3704C52.0682 77.1178 52.3603 76.7999 52.5824 76.4348ZM60.2897 55.867C61.4971 49.2306 62.0429 42.4913 61.9191 35.7477C61.9161 31.1437 60.5122 26.649 57.893 22.8576C55.2738 19.0662 51.5626 16.1566 47.2499 14.5131C42.9372 12.8697 38.2259 12.5699 33.7386 13.6533C29.2514 14.7367 25.1994 17.1523 22.1182 20.581C21.8181 20.8962 21.5845 21.2683 21.4311 21.6751C21.2778 22.082 21.2079 22.5154 21.2255 22.9497C21.2431 23.384 21.3479 23.8104 21.5337 24.2036C21.7195 24.5967 21.9825 24.9488 22.3072 25.2388C22.6318 25.5288 23.0115 25.751 23.4237 25.8921C23.836 26.0332 24.2725 26.0904 24.7073 26.0603C25.1421 26.0302 25.5665 25.9135 25.9552 25.717C26.344 25.5204 26.6893 25.2481 26.9707 24.9162C29.1713 22.4668 32.0656 20.7409 35.2708 19.9667C38.476 19.1924 41.8414 19.4063 44.9222 20.58C48.0029 21.7537 50.654 23.832 52.5251 26.5402C54.3961 29.2484 55.3991 32.459 55.4013 35.7477C55.5215 42.0743 55.0172 48.3974 53.8957 54.6256C53.7312 55.4711 53.9099 56.3471 54.3926 57.0612C54.8753 57.7754 55.6226 58.2693 56.4703 58.4343C56.6773 58.4756 56.888 58.4963 57.0992 58.4961C57.8541 58.4941 58.5848 58.2309 59.1667 57.7514C59.7486 57.272 60.1455 56.6059 60.2897 55.867ZM22.8123 35.7477C22.8114 34.8406 22.8866 33.9351 23.0372 33.0406C23.1345 32.61 23.1428 32.1641 23.0616 31.7302C22.9804 31.2962 22.8114 30.8833 22.5649 30.5167C22.3184 30.15 21.9996 29.8373 21.6279 29.5975C21.2562 29.3578 20.8394 29.1961 20.403 29.1222C19.9666 29.0484 19.5196 29.064 19.0895 29.1681C18.6593 29.2722 18.2549 29.4626 17.9009 29.7277C17.547 29.9928 17.2509 30.327 17.0307 30.71C16.8106 31.093 16.6709 31.5166 16.6204 31.9552C16.4053 33.208 16.2963 34.4766 16.2945 35.7477C16.2945 50.8429 11.908 58.4961 3.2589 58.4961C2.39459 58.4961 1.56567 58.8385 0.954511 59.4479C0.343348 60.0574 0 60.884 0 61.7459C0 62.6078 0.343348 63.4343 0.954511 64.0438C1.56567 64.6533 2.39459 64.9956 3.2589 64.9956C15.8676 64.9956 22.8123 54.5964 22.8123 35.7477ZM67.4593 76.0904C72.8224 63.3321 75.3784 49.575 74.9548 35.7477C74.9698 30.3496 73.7435 25.0199 71.37 20.1683C71.1827 19.7842 70.9215 19.4406 70.6011 19.1572C70.2807 18.8738 69.9075 18.6561 69.5027 18.5165C69.098 18.377 68.6696 18.3183 68.2421 18.3438C67.8146 18.3693 67.3964 18.4785 67.0112 18.6652C66.626 18.8519 66.2815 19.1125 65.9973 19.432C65.7131 19.7514 65.4948 20.1236 65.3548 20.5272C65.2149 20.9309 65.156 21.358 65.1816 21.7843C65.2072 22.2106 65.3167 22.6277 65.5039 23.0118C67.4431 26.9784 68.4464 31.3349 68.437 35.7477C68.8472 48.6453 66.4929 61.4817 61.5313 73.3996C61.3547 73.7887 61.2567 74.2088 61.243 74.6357C61.2293 75.0627 61.3002 75.4881 61.4515 75.8878C61.6028 76.2874 61.8317 76.6534 62.125 76.9647C62.4183 77.276 62.7703 77.5267 63.1608 77.7022C63.5829 77.8958 64.0421 77.9956 64.5067 77.9947C65.13 77.9921 65.7394 77.8113 66.2627 77.4737C66.786 77.1362 67.2013 76.6561 67.4593 76.0904ZM9.77671 45.497V35.7477C9.78533 27.9933 12.8782 20.5589 18.3768 15.0757C23.8754 9.59255 31.3306 6.50831 39.1068 6.49971C45.4564 6.47862 51.6379 8.53336 56.7049 12.3493C57.3964 12.8664 58.2655 13.0885 59.1211 12.9666C59.9768 12.8447 60.7488 12.3889 61.2674 11.6993C61.786 11.0098 62.0086 10.1431 61.8864 9.2899C61.7642 8.43667 61.307 7.6668 60.6156 7.14967C54.4216 2.48761 46.8671 -0.0235115 39.1068 0.000165915C29.6028 0.0113467 20.4913 3.78118 13.7709 10.4827C7.05054 17.1843 3.27011 26.2703 3.2589 35.7477V45.497C3.2589 46.3589 3.60225 47.1855 4.21341 47.7949C4.82458 48.4044 5.65349 48.7468 6.51781 48.7468C7.38212 48.7468 8.21103 48.4044 8.8222 47.7949C9.43336 47.1855 9.77671 46.3589 9.77671 45.497Z"
                          fill="#A2A2B5" />
                      </svg>


                      <h4 class="pt-2">Security</h4>
                      <p class=" category-text">$375 left to spend</p>
                      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar p-bar3"></div>
                      </div>
                      <p class="small-text pt-3">$5.99 <span>of $600</span></p>
                    </div>
                  </div>
                </div>

              </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="setting-modal" tabindex="-1" aria-labelledby="settingModalLabel"
              aria-hidden="true">
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
                        <button type="button" class="border-0 bg-white py-0" data-bs-toggle="modal"
                          data-bs-target="#info"><i class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
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
                          data-bs-target="#language"><i
                            class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
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
                          data-bs-target="#currency"><i
                            class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
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
                          data-bs-target="#changePs"><i
                            class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
                      </div>
                    </div>

                    <form action="">
                      <div class="mx-2 modal-box rounded">
                        <div
                          class="pt-3 form-check form-switch form-check-reverse d-flex justify-content-between mx-2 py-2 mb-2 ps-0">
                          <label class="form-check-label" for="flexSwitchCheckReverse">
                            <span><img src="assets/img/images/images/auth.png" class="img-fluid me-2" width="20"
                                alt=""></span> Biometric Auth input</label>
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
            <div class="modal  fade " id="language" tabindex="-1" aria-labelledby="languageModalLabel"
              aria-hidden="true">
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
            <div class="modal  fade " id="currency" tabindex="-1" aria-labelledby="currencyModalLabel"
              aria-hidden="true">
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
            <div class="modal  fade " id="changePs" tabindex="-1" aria-labelledby="changePsModalLabel"
              aria-hidden="true">
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
      </div></div></div>

      @endsection

