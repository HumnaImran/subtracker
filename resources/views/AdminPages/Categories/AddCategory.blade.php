
@extends('layouts.AdminMaster')
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
            <h1>New Category </h1>
        </div>
        <ul class="nav user-menu">
            <li class="nav-item dropdown noti-dropdown me-2">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <!-- <i class="far fa-bell"></i> -->
                    <img src= "assets/img/notification-bing.png">
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
                @if (auth()->check())
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
                       Category
                    </li>
                    <li class="breadcrumb-item mt-1"><a href="#">New Category</a></li>
                </ol>

            </nav>
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="container mt-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="card p-5" style="background-color:rgba(247, 247, 255, 1);">
                            <div class="image-container" style="position: relative; width: 100px; height: 100px; margin: auto; overflow: hidden;  ">
                                <img id="selectedImage" src="assets/img/ic_round-image.png" class="m-auto" alt="..." style="width: 100%; height: 100%; object-fit: cover;">
                                <img src="assets/img/tabler_edit.png" style="position: absolute; bottom: 0; right: 0; width: 30px; height: 30px; cursor: pointer;" alt="..." onclick="document.getElementById('imageInput').click();">
                                <input type="file" name="image" id="imageInput" style="display: none;" onchange="previewImage(event)">
                            </div>
                            <div class="card-body text-center pt-4">
                                <h3 class="card-title">Name</h3>
                                <h5 class="card-text" style="font-size: 16px; font-weight: 400; color:rgb(170, 168, 168); font-family: Poppins;">
                                    Pricing</h5>
                            </div>
                        </div>


                    @if ($errors->has('image'))
                        <div class="alert alert-danger mt-2">{{ $errors->first('image') }}</div>
                    @endif


                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Name" aria-label="name" name="name"
                            style="font-size: 14px; font-weight: 400; color:rgb(155, 154, 154); font-family: Poppins;">
                            @if ($errors->has('name'))
    <div class="alert alert-danger mt-2">{{ $errors->first('name') }}</div>
@endif
                    </div>
                    {{-- <div class="col-lg-12 col-md-12 mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" aria-label="image"
                            style="font-size: 14px; font-weight: 400; color:rgb(155, 154, 154); font-family: Poppins;">
                    </div> --}}
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col d-flex align-items-lg-end justify-content-center mb-4 offset-0 offset-md-8">
                        <button class="btn btn-outline-secondary px-sm-5 px-4 me-2">Cancel</button>
                        <button type="submit" class="btn px-sm-5 px-4" style="background-color: #758AFF; color: white;">Save</button>
                    </div>
                </div>
            </div>
        </form>
        </div>

    </div>


</div>
<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('selectedImage');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
    </script>

@endsection
