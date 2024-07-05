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
                <h1>Spotify Subscription </h1>
            </div>
            <ul class="nav user-menu">
                <li class="nav-item dropdown noti-dropdown me-2">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <!-- <i class="far fa-bell"></i> -->
                        <img src= "assets/img/notification-bing.png"> <span class="badge badge-pill"></span>
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
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="assets/img/figma/header/Ellipse 88.png" />
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
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="assets/img/figma/header/Ellipse 88.png" />
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
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="assets/img/figma/header/Ellipse 88.png" />
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
                            <img class="rounded-circle" src="assets/img/figma/header/Ellipse 88.png" width="40"
                                alt="Admin" />
                        </span>
                        <i class="fa-solid fa-angle-down "></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="p-2">
                            <button type="button" class="btn bg-white d-flex" data-bs-toggle="modal"
                                data-bs-target="#setting-modal"
                                style="display: flex; justify-content: center; align-items: center;">
                                <span><i class="fa-solid fa-gear me-2 text-secondary fs-4"
                                        style="color:rgba(145, 145, 145, 1);"></i></span>
                                <p
                                    style="margin-bottom: 0rem;  color:rgba(145, 145, 145, 1); font-size: 15px; font-weight: 400; font-family:
Poppins;
">
                                    Account Setting</p>
                            </button>
                        </div>
                        <div class="p-2">
                            <div
                                style="display: flex; justify-content: center; align-items: center;padding: .375rem .75rem; ">
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
            <div class="content container-fluid">
                <div class="container mt-5">
                    <nav class="d-flex justify-content-between align-item-center flex-wrap"
                        style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.79 22.75H6.21C3.47 22.75 1.25 20.52 1.25 17.78V10.37C1.25 9.00997 2.09 7.29997 3.17 6.45997L8.56 2.25997C10.18 0.999974 12.77 0.939974 14.45 2.11997L20.63 6.44997C21.82 7.27997 22.75 9.05997 22.75 10.51V17.79C22.75 20.52 20.53 22.75 17.79 22.75ZM9.48 3.43997L4.09 7.63997C3.38 8.19997 2.75 9.46997 2.75 10.37V17.78C2.75 19.69 4.3 21.25 6.21 21.25H17.79C19.7 21.25 21.25 19.7 21.25 17.79V10.51C21.25 9.54997 20.56 8.21997 19.77 7.67997L13.59 3.34997C12.45 2.54997 10.57 2.58997 9.48 3.43997Z"
                                            fill="#919191" />
                                        <path
                                            d="M12 18.75C11.59 18.75 11.25 18.41 11.25 18V15C11.25 14.59 11.59 14.25 12 14.25C12.41 14.25 12.75 14.59 12.75 15V18C12.75 18.41 12.41 18.75 12 18.75Z"
                                            fill="#919191" />
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item active mt-1" aria-current="page">
                                Subscriptions
                            </li>
                            <li class="breadcrumb-item mt-1"><a href="#">Spotify</a></li>
                        </ol>
                        <div class="d-flex">
                            <a class="d-flex ms-md-2 justify-content-end" href="new-subscription.html"> <button
                                    type="button" class="btn subscription-btn bg-white  d-flex justify-content-end"
                                    style="display: flex; justify-content: center; align-items: center;  color: red; border-color: #758AFF;">
                                    <!-- <i class="fa-solid fa-trash pt-2"></i> -->
                                    <i class="fa-solid fa-trash-can" style="color:red"></i>
                                </button>
                            </a>
                            <a class="d-flex ms-md-2 justify-content-end" href="new-subscription.html"> <button
                                    type="button" class="btn subscription-btn bg-white  d-flex justify-content-end"
                                    style="color: #758AFF; border-color: #758AFF;">
                                    <span class="pt-1">

                                        <img src="assets/img/Vector (4).png">
                                        Edit</span>
                                </button>
                            </a>
                            <a class="d-flex ms-md-2 justify-content-end" href="new-subscription.html"> <button
                                    type="button" class="btn subscription-btn d-flex justify-content-end">
                                    <span class="pt-1"><i class="fa-solid fa-plus pe-2 "></i>Add Document</span>
                                </button>
                            </a>
                        </div>
                        </a>
                    </nav>
                    <div class="row d-flex justify-content-center pt-4">
                        <div class="col-md-5">
                            <div class="card p-5 " style="background-color: #f7f7ff; border-radius: 15px;">
                                <img src="assets/img/am-imags/image 1.png" class="m-auto" width="80px" alt="...">
                                <div class="card-body text-center pt-4">
                                    <h3 class="card-title">SignNTrack</h2>
                                        <h5 class="card-text text-secondary">$5.99/month</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container pt-3">
                    <div class="row">
                        <!-- <div class="col-lg-6 col-md-6 mb-3">
                          <label for="name" class="form-label">Name</label>
                          <select class="form-select" aria-label="name" style="font-size: 14px;
                      font-weight: 400;
                      color:rgb(155, 154, 154);;
                      font-family: Poppins ;">
                              <option selected>Select Name</option>
                          </select>
                      </div> -->
                        <div class="col-lg-6 col-md-6 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control bg-form-color" placeholder="SignNTrack"
                                aria-label="Description"
                                style="font-size: 14px;
                    font-weight: 400;
                    color:rgb(155, 154, 154);;
                    font-family: Poppins ;">
                        </div>

                        <div class="col-lg-6 col-md-6 mb-3">
                            <label for="name" class="form-label">Category</label>
                            <input type="text" class="form-control bg-form-color" placeholder="Signature"
                                aria-label="Description"
                                style="font-size: 14px;
                  font-weight: 400;
                  color:rgb(155, 154, 154);;
                  font-family: Poppins ;">
                        </div>
                        <div class="col-lg-12 col-md-12 mb-3">
                            <label for="name" class="form-label">Description</label>
                            <input type="text" class="form-control bg-form-color"
                                placeholder="Lorem ipsum dolor sit amet consectetur. Sed enim dictum scelerisque lacus nunc et tellus. Luctus "
                                aria-label="Description"
                                style="font-size: 14px;
                      font-weight: 400;
                      color:rgb(155, 154, 154);;
                      font-family: Poppins ;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-3">
                            <label for="startDate" class="form-label">Start Date</label>
                            <input type="date" class="form-control bg-form-color" placeholder="Start Date"
                                aria-label="startDate"
                                style="font-size: 14px;
                      font-weight: 400;
                      color:rgb(155, 154, 154);;
                      font-family: Poppins ;">
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3">
                            <label for="renewalDate" class="form-label">Renewal Date</label>
                            <input type="date" class="form-control bg-form-color" placeholder="Select Date"
                                aria-label="renewalDate"
                                style="font-size: 14px;
                      font-weight: 400;
                      color:rgb(155, 154, 154);;
                      font-family: Poppins ;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-4">
                            <label for="billing" class="form-label">Billing Cycle</label>
                            <select class="form-select bg-form-color" aria-label="billing"
                                style="font-size: 14px;
                      font-weight: 400;
                      color:rgb(155, 154, 154);;
                      font-family: Poppins ;">
                                <option selected>Select Cycle</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-4">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control bg-form-color" placeholder="Enter Price"
                                aria-label="price"
                                style="font-size: 14px;
                      font-weight: 400;
                      color:rgb(155, 154, 154);;
                      font-family: Poppins ;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-4">
                            <label for="reminder" class="form-label">Reminder</label>
                            <select class="form-select bg-form-color" aria-label="reminder"
                                style="font-size: 14px;
                      font-weight: 400;
                      color:rgb(155, 154, 154);;
                      font-family: Poppins ;">
                                <option selected class="bg-form-color">Select Reminder Duration</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div>
                        <h3>Documents</h3>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 mt-2  px-3">
                            <div class="row  bg-white    " style="border-radius: 10px; border: 1px solid #EAECF0;">
                                <div class="col col-sm-3 col-lg-3 pdf-image">
                                    <img class="pdf-image w-100" src="assets/img/am-imags/pdf.png" alt="">
                                </div>
                                <div class="col-9 col-sm-9 col-lg-9  ">
                                    <dov class="row">
                                        <div class="col-10  d-flex  flex-column justify-content-center ">

                                            <div class="pt-4">
                                                <h4 class="pdf-heading pdf-headingnew mb-0"
                                                    style="font-size: 16px;
                            font-weight: 500;
                            color:rgb(75, 70, 70);;
                            font-family: Poppins ;">
                                                    Tech design requirements.pdf</h4>
                                                <p class="pdf-para pdf-paranew mb-0">200 KB</p>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex align-item-center align-self-center">
                                            <i class="fa-classic fa-trash-can"></i>

                                        </div>
                                    </dov>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 mt-2 px-3">
                            <div class="row  bg-white    " style="border-radius: 10px; border: 1px solid #EAECF0;">
                                <div class="col col-sm-3 col-lg-3 pdf-image">
                                    <img class="pdf-image w-100" src="assets/img/am-imags/pdf.png" alt="">
                                </div>
                                <div class="col-9 col-sm-9 col-lg-9  ">
                                    <dov class="row">
                                        <div class="col-10  d-flex  flex-column justify-content-center ">

                                            <div class="pt-4">
                                                <h4 class="pdf-heading pdf-headingnew mb-0"
                                                    style="font-size: 16px;
                            font-weight: 500;
                            color:rgb(75, 70, 70);;
                            font-family: Poppins ;">
                                                    Tech design requirements.pdf</h4>
                                                <p class="pdf-para pdf-paranew mb-0">200 KB</p>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex align-item-center align-self-center">
                                            <i class="fa-classic fa-trash-can"></i>
                                        </div>
                                    </dov>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 mt-2 px-3 mb-5">
                            <div class="row  bg-white    " style="border-radius: 10px; border: 1px solid #EAECF0;">
                                <div class="col col-sm-3 col-lg-3 pdf-image">
                                    <img class="pdf-image w-100" src="assets/img/am-imags/pdf.png" alt="">
                                </div>
                                <div class="col-9 col-sm-9 col-lg-9  ">
                                    <dov class="row">
                                        <div class="col-10  d-flex  flex-column justify-content-center ">

                                            <div class="pt-4">
                                                <h4 class="pdf-heading pdf-headingnew mb-0"
                                                    style="font-size: 16px;
                            font-weight: 500;
                            color:rgb(75, 70, 70);;
                            font-family: Poppins ;">
                                                    Tech design requirements.pdf</h4>
                                                <p class="pdf-para pdf-paranew mb-0">200 KB</p>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex align-item-center align-self-center">
                                            <i class="fa-classic fa-trash-can"></i>
                                        </div>
                                    </dov>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 mt-2 px-3 mb-5">
                            <div class="row  bg-white    " style="border-radius: 10px; border: 1px solid #EAECF0;">
                                <div class="col col-sm-3 col-lg-3 pdf-image">
                                    <img class="pdf-image w-100" src="assets/img/am-imags/pdf.png" alt="">
                                </div>
                                <div class="col-9 col-sm-9 col-lg-9  ">
                                    <dov class="row">
                                        <div class="col-10  d-flex  flex-column justify-content-center ">

                                            <div class="pt-4">
                                                <h4 class="pdf-heading pdf-headingnew mb-0"
                                                    style="font-size: 16px;
                            font-weight: 500;
                            color:rgb(75, 70, 70);;
                            font-family: Poppins ;">
                                                    Tech design requirements.pdf</h4>
                                                <p class="pdf-para pdf-paranew mb-0">200 KB</p>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex align-item-center align-self-center">
                                            <i class="fa-classic fa-trash-can"></i>
                                        </div>
                                    </dov>

                                </div>
                            </div>
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
                            <img src="assets/img/figma/header/Ellipse 88.png" class="img-fluid" width="80"
                                alt="">
                            <h5 class="mt-3">John Smith</h5>
                        </div>
                        <!-- personal data button -->
                        <div class="mx-2 modal-box mb-2 rounded">
                            <div class="d-flex justify-content-between align-items-center gap-3 px-2">
                                <p class="pt-3">
                                    <span><i class="fa-regular fa-user me-2"></i></span>
                                    Personal Data
                                </p>
                                <button type="button"class="border-0 bg-white py-0" data-bs-toggle="modal"
                                    data-bs-target="#info"><i
                                        class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
                            </div>
                        </div>
                        <!-- Language button -->
                        <div class="mx-2 modal-box mb-2 rounded">
                            <div class="d-flex justify-content-between align-items-center gap-3 px-2">
                                <p class="pt-3">
                                    <span><img src= "assets/img/mdi_language.png"></i></span>
                                    Language
                                </p>
                                <button type="button"class="border-0 bg-white py-0" data-bs-toggle="modal"
                                    data-bs-target="#language"><i
                                        class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
                            </div>
                        </div>
                        <!--Currency  button  -->
                        <div class="mx-2 modal-box mb-2 rounded">
                            <div class="d-flex justify-content-between align-items-center gap-3 px-2">
                                <p class="pt-3">
                                    <span><img src= "assets/img/ic_round-currency-yen.png"></i></span>
                                    Currency

                                </p>

                                <button type="button"class="border-0 bg-white py-0" data-bs-toggle="modal"
                                    data-bs-target="#currency"><i
                                        class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
                            </div>
                        </div>
                        <!-- Change password button -->

                        <div class="mx-2 modal-box mb-2 rounded">
                            <div class="d-flex justify-content-between align-items-center gap-3 px-2">
                                <p class="pt-3">
                                    <span><img src= "assets/img/carbon_password.png"></span>
                                    Change Password
                                </p>
                                <button type="button"class="border-0 bg-white py-0" data-bs-toggle="modal"
                                    data-bs-target="#changePs"><i
                                        class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
                            </div>
                        </div>

                        <form action="">
                            <div class="mx-2 modal-box rounded">
                                <div
                                    class="pt-3 form-check form-switch form-check-reverse d-flex justify-content-between mx-2 py-2 mb-2 ps-0">
                                    <label class="form-check-label" for="flexSwitchCheckReverse">
                                        <span><img src="assets/img/images/images/auth.png" class="img-fluid me-2"
                                                width="20" alt=""></span> Biometric Auth input</label>
                                    <input class="form-check-input  text-white " type="checkbox"
                                        id="flexSwitchCheckReverse">
                                </div>
                            </div>
                            <div class="mx-2 modal-box rounded">
                                <div
                                    class="pt-3 form-check form-switch form-check-reverse d-flex justify-content-between mx-2 py-2 mb-2 ps-0">
                                    <label class="form-check-label" for="flexSwitchCheckReverse2">
                                        <span><img src="assets/img/images/images/Vector-removebg-preview.png"
                                                class="img-fluid me-1" width="22" alt=""></span>
                                        Two Factor Auth.</label>

                                    <input class="form-check-input  text-white " type="checkbox"
                                        id="flexSwitchCheckReverse3">

                                </div>
                            </div>
                            <div class="mx-2 modal-box mb-2 rounded">
                                <div
                                    class="pt-3 form-check form-switch form-check-reverse d-flex justify-content-between mx-2 py-2 ps-0">
                                    <label class="form-check-label" for="flexSwitchCheckReverse3">
                                        <span><i class="fa-regular fa-envelope fs-5 me-2"></i></span> Email
                                        Notification</label>
                                    <input class="form-check-input  text-white " type="checkbox"
                                        id="flexSwitchCheckReverse3">
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
                            <img src="assets/img/figma/header/Ellipse 88.png" class="img-fluid" width="80"
                                alt="">
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
                                <span class="position-absolute"><i
                                        class="fa-regular fa-user me-2 text-secondary"></i></span>
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
                                        <img src="assets/img/images/images/PK.png" class="img-fluid me-3" width="20"
                                            alt="">
                                        Pakistan
                                    </p>
                                    <p class="text-secondary pt-2">(اردو)</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-2">
                                        <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3"
                                            width="20" alt="">
                                        Iran
                                    </p>
                                    <p class="text-secondary pt-2">(فارسی)</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-2">
                                        <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20"
                                            alt="">
                                        English (UK)
                                    </p>
                                    <p class="text-secondary pt-2">(English)</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-2">
                                        <img src="assets/img/images/images/PK.png" class="img-fluid me-3" width="20"
                                            alt="">
                                        Pakistan
                                    </p>
                                    <p class="text-secondary pt-2">(اردو)</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-2">
                                        <img src="assets/img/images/images/PK.png" class="img-fluid me-3" width="20"
                                            alt="">
                                        Pakistan
                                    </p>
                                    <p class="text-secondary pt-2">(اردو)</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-2">
                                        <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20"
                                            alt="">
                                        English (UK)
                                    </p>
                                    <p class="text-secondary pt-2">(English)</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-2">
                                        <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20"
                                            alt="">
                                        English (UK)
                                    </p>
                                    <p class="text-secondary pt-2">(English)</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-2">
                                        <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20"
                                            alt="">
                                        Iran
                                    </p>
                                    <p class="text-secondary pt-2">(فارسی)</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-2">
                                        <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3"
                                            width="20" alt="">
                                        Iran
                                    </p>
                                    <p class="text-secondary pt-2">(فارسی)</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-2">
                                        <img src="assets/img/images/images/PS.png" class="img-fluid me-3" width="20"
                                            alt="">
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
                                        <img src="assets/img/images/images/PK.png" class="img-fluid me-3" width="20"
                                            alt="">
                                        Pakistan
                                    </p>
                                    <p class="text-secondary pt-2">PKR</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-3">
                                        <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3"
                                            width="20" alt="">
                                        Iran
                                    </p>
                                    <p class="text-secondary pt-2">Rial</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-3">
                                        <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20"
                                            alt="">
                                        English (UK)
                                    </p>
                                    <p class="text-secondary pt-2">GBP</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-3">
                                        <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3"
                                            width="20" alt="">
                                        Iran
                                    </p>
                                    <p class="text-secondary pt-2">Rial</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-3">
                                        <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3"
                                            width="20" alt="">
                                        Iran
                                    </p>
                                    <p class="text-secondary pt-2">Rial</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-3">
                                        <img src="assets/img/images/images/PS.png" class="img-fluid me-3" width="20"
                                            alt="">
                                        Palestine
                                    </p>
                                    <p class="text-secondary pt-2">JOD</p>
                                </a>
                            </li>
                            <li style="list-style: none;">
                                <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                    href="#">
                                    <p class="pt-3">
                                        <img src="assets/img/images/images/PS.png" class="img-fluid me-3" width="20"
                                            alt="">
                                        Palestine
                                    </p>
                                    <p class="text-secondary pt-2">JOD</p>
                                </a>
                            </li style="list-style: none;">
                            <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2"
                                href="#">
                                <p class="pt-2">
                                    <img src="assets/img/images/images/PS.png" class="img-fluid me-3" width="20"
                                        alt="">
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
                                <input type="password" class="form-control " id="passwordInput"
                                    placeholder="Enter Password">
                                <span class="position-absolute"><i class="fa-solid fa-lock text-secondary"></i></span>
                            </div>
                            <div class="mb-2 personal-data position-relative">
                                <label for="passwordInput" class="form-label">New Password</label>
                                <input type="password" class="form-control " id="passwordInput"
                                    placeholder="Enter Password">
                                <span class="position-absolute"><i
                                        class="fa-solid fa-lock me-2 text-secondary"></i></span>
                            </div>
                            <div class="mb-2 personal-data position-relative">
                                <label for="epasswordInput" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control " id="passwordInput"
                                    placeholder="Enter Password">
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
