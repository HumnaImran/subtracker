@extends('layouts.master')
@section('content')
    <div class="main-wrapper">

        <div class="header d-flex align-items-center" style="justify-content: space-between">
            <div>
            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fa-solid fa-circle-chevron-left texxt"></i>
            </a>
            <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
                <i class="fas fa-align-left"></i>
            </a>
            <div class="header-left ">
                <h1>Hello John! <span><img src="assets/img/hands.png" alt=""></span></h1>
            </div>
            </div>
        <div>
            <ul class="nav user-menu">
                <li class="nav-item dropdown noti-dropdown me-lg-2">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">

                        <img src= "assets/img/notification-bing.png">
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
                                    style="margin-bottom: 0rem;  color:rgba(145, 145, 145, 1); font-size: 15px; font-weight: 400; font-family: Poppins;">
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
        </div>
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


        <div class="page-wrapper">
            <div class="content container-fluid" style="margin-left: 0rem;">
                <p class="content-para pb-2" style="font-size: 1.1rem;">
                    "Gain valuable insights into your subscription usage and spending
                    habits
                    <br />
                    with our powerful analytics tool."
                </p>
                <div class="row">
                    <div class="col-xl-4 colo-md-12 col-sm-12 col-12">
                        <div class="card mb-sm-3">
                            <div class="card-body px-3">
                                <div class="row dash-widget-header">
                                    <div class="col-1 ">

                                    </div>
                                    <div class="col-5 circledashbor"
                                        style="
    position: relative;
    background-color: rgba(117, 138, 255, 0.1);
    border-radius: 50%;
    width: 60px;
    height: 60px;
">
                                        <p>22</p>
                                    </div>
                                    <div class="col-6 dash-widget-info">
                                        <h2>Total <br> Subscriptions</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 colo-md-12 col-sm-12 col-12">
                        <div class="card mb-sm-3">
                            <div class="card-body px-3">
                                <div class="row dash-widget-header">
                                    <div class="col-1 ">

                                    </div>
                                    <div class="col-5 circledashbor"
                                        style="
                                    position: relative;
                                    background-color: rgba(117, 138, 255, 0.1);
                                    border-radius: 50%;
                                    width: 60px;
                                    height: 60px;
                                ">
                                        <p>22</p>
                                    </div>
                                    <div class="col-6 dash-widget-info">
                                        <h2>Due <br> Subscriptions</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 colo-md-12 col-sm-12 col-12">
                        <div class="card mb-sm-3">
                            <div class="card-body px-3">
                                <div class="row dash-widget-header">
                                    <div class="col-1 ">

                                    </div>
                                    <div class="col-5 circledashbor"
                                        style="
                                    position: relative;
                                    background-color: rgba(117, 138, 255, 0.1);
                                    border-radius: 50%;
                                    width: 60px;
                                    height: 60px;
                                ">
                                        <p>22</p>
                                    </div>
                                    <div class="col-6 dash-widget-info">
                                        <h2>Paid <br> Subscriptions</h2>
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
                                <svg class="svg-semicircle" width="80%" height="100%" viewBox="0 0 317 323"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <filter id="filter0_dii_183_11111" x="0.166748" y="103.965" width="71.7539"
                                            height="103.035" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset dy="8" />
                                            <feGaussianBlur stdDeviation="12.5" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0.980392 0 0 0 0 0.85098 0 0 0 0.5 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_183_11111" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_183_11111"
                                                result="shape" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset dy="-3" />
                                            <feGaussianBlur stdDeviation="1.5" />
                                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1"
                                                k3="1" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" />
                                            <feBlend mode="normal" in2="shape"
                                                result="effect2_innerShadow_183_11111" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset dy="3" />
                                            <feGaussianBlur stdDeviation="1" />
                                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1"
                                                k3="1" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                                            <feBlend mode="normal" in2="effect2_innerShadow_183_11111"
                                                result="effect3_innerShadow_183_11111" />
                                        </filter>
                                        <filter id="filter1_d_183_11111" x="101.972" y="0" width="202.868"
                                            height="109.778" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset />
                                            <feGaussianBlur stdDeviation="12.5" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.678431 0 0 0 0 0.482353 0 0 0 0 1 0 0 0 0.5 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_183_11111" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_183_11111"
                                                result="shape" />
                                        </filter>
                                        <filter id="filter2_d_183_11111" x="15.2285" y="11.9404" width="132.104"
                                            height="129.515" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset />
                                            <feGaussianBlur stdDeviation="12.5" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.309804 0 0 0 0 0.388235 0 0 0 0 0.745098 0 0 0 0.5 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_183_11111" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_183_11111"
                                                result="shape" />
                                        </filter>
                                        <linearGradient id="paint0_linear_183_11111" x1="25" y1="25"
                                            x2="175.865" y2="320.47" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="white" />
                                            <stop offset="1" stop-color="white" stop-opacity="0" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_183_11111" x1="25" y1="25"
                                            x2="175.865" y2="320.47" gradientUnits="userSpaceOnUse">
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
                            <div class="graph-container position-relative">
                                <p class="graphy-text">Amount spent</p>
                                <canvas id="lineChart" style="height: 100% ;"></canvas>
                                <p class="text-center pt-3 month-text">Months</p>
                            </div>
                            <div class="labels">
                                <div class="label">1000</div>
                                <div class="label">800</div>
                                <div class="label">600</div>
                                <div class="label">400</div>
                                <div class="label">200</div>
                                <div class="label">0</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <h1 class="Upcoming-Renewals" style="font-weight: 700;">Upcoming Renewals</h1>
                    <div class="col-12 pt-3">
                        <div class=" sign-track">
                            <div class="logo-img" style="margin-right: 1rem;">
                                <img src="assets/img/sub-tracker-images/logo/image 1 (1).png" class="img-fluid ms-2"
                                    alt="Logo" />
                            </div>
                            <div class="sign-content" style="align-items: center;">
                                <h2 style="font-size: 1.3rem; margin-bottom: 0rem!important;">SignNTrack</h2>
                                <p style="font-size: 0.8rem; margin-left: 0.9rem; color:rgb(176 176 184);;
">
                                    Due Date:
                                    18.04.2024</p>
                            </div>
                            <div class="sign-pricing">
                                <p>$5.99</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row ">

                    <div class="col-12 pt-3 trackerrr mb-5">
                        <div class=" sign-track">
                            <div class="logo-img" style="margin-right: 1rem;">
                                <img src="assets/img/sub-tracker-images/logo/tresorly@4x 1.png" class="img-fluid ms-2"
                                    alt="Logo" />
                            </div>
                            <div class="sign-content" style="align-items: center;">
                                <h2 style="font-size: 1.3rem; margin-bottom: 0rem!important;">Tresorly</h2>
                                <p
                                    style="font-size: 0.8rem; margin-left: 0.9rem; color:rgb(176 176 184);;
                ">
                                    Due Date: 18.04.2024</p>
                            </div>
                            <div class="sign-pricing">
                                <p>$18.99</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row py-1">
                                    <div class=" pt-3">
                                      <div class="sign-track">
                                      <div class="logo-img">
                                        <img
                                          src="assets/img/sub-tracker-images/logo/tresorly@4x 1.png"
                                          class="img-fluid ms-2"
                                          alt="Logo"
                                        />
                                      </div>
                                      <div class="sign-content">
                                        <h style="font-size: 1.3rem; margin-bottom: 0rem!important;"2>Tresorly</h2>
                                        <p style="font-size: 0.8rem; margin-left: 0.9rem; color:rgb(176 176 184);;">Due Date: 18.04.2024</p>
                                      </div>
                                      <div class="sign-pricing">
                                        <p>$18.99</p>
                                      </div>
                                    </div>
                                    </div>
                                  </div> -->
            </div>
        </div>
    </div>






    </div>
    </div>
@endsection
