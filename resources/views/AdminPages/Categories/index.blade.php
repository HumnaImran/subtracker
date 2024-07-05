

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
            <h1>Categories</h1>
        </div>
        <ul class="nav user-menu">
            <li class="nav-item dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle user-link nav-link" data-bs-toggle="dropdown">
                    <span class="user-img">
                        <img class="rounded-circle" src="assets/img/figma/header/Ellipse 88.png" width="40"
                            alt="Admin" />
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
                    <div class="user-data col-lg-12 d-flex justify-content-between mt-3">
                        <p class="user-para">categories : {{ $categoryCount }}</p>

                        <form class="d-flex flex-wrap" role="search">
                            <div class="position-relative me-2 sm-mt-3 sm-w-100  " style="display: flex; justify-content: center; align-items: center; ">
                                <span class="icon-search ps-2"><i class=" fa-2x fa-solid fa-magnifying-glass text-secondary fs-5" style="color:#00000040 !important; font-size: 1.5rem !important;;"></i></span>
                                <input class="form-control ps-5 rounded-pill " type="search" placeholder="Search"
                                  aria-label="Search" style="color:#00000040 !important; font-size: 17px;"  />
                              </div>
                            <div class="">
                                <!-- <button class="btn user-btn" type="submit">

                                </button> -->
                                <!-- Button trigger modal -->
                                <button class="btn user-btn rounded-pill px-4">
                                    <svg width="19" height="16" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.45825 8.00016V1.3335M15.5416 14.6668V12.1668M3.45825 14.6668V11.3335M15.5416 8.8335V1.3335M9.49992 3.8335V1.3335M9.49992 14.6668V7.16683" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                        <path d="M3.45825 11.3333C4.41159 11.3333 5.18444 10.5871 5.18444 9.66667C5.18444 8.74619 4.41159 8 3.45825 8C2.5049 8 1.73206 8.74619 1.73206 9.66667C1.73206 10.5871 2.5049 11.3333 3.45825 11.3333Z" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                        <path d="M9.49987 7.16683C10.4532 7.16683 11.2261 6.42064 11.2261 5.50016C11.2261 4.57969 10.4532 3.8335 9.49987 3.8335C8.54652 3.8335 7.77368 4.57969 7.77368 5.50016C7.77368 6.42064 8.54652 7.16683 9.49987 7.16683Z" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                        <path d="M15.5416 12.1668C16.495 12.1668 17.2678 11.4206 17.2678 10.5002C17.2678 9.57969 16.495 8.8335 15.5416 8.8335C14.5883 8.8335 13.8154 9.57969 13.8154 10.5002C13.8154 11.4206 14.5883 12.1668 15.5416 12.1668Z" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>
                                        <span>
                                            Filter
                                        </span>

                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body mb-5">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-10 mx-auto">
                                                            <h4 class="text-center">Add User</h4>
                                                            <form action="">
                                                                <div class="mb-3">
                                                                    <label for="email"
                                                                        class="form-label">Email*</label>
                                                                    <input type="email" class="form-control"
                                                                        id="email" placeholder="Enter Email" />
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="">Plan</label>
                                                                    <select class="form-select text-secondary"
                                                                        aria-label="Default select example">
                                                                        <option selected>Months</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="date"
                                                                        class="form-label">Duration</label>
                                                                    <input type="date" class="form-control"
                                                                        id="date" placeholder="Select Date" />
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
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Created At</th>

                                    {{-- <th scope="col">OPTIONS</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr class=" ">
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" style="width: 50px; height: 50px; object-fit: cover;">
                                    </td>
                                    <td>{{ $category->created_at }}</td>

                                    {{-- <td>
                                        <div class="dropdown">
                                            <button class="btn  py-0 ps-4 ms-2" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span><i class="fa-solid fa-ellipsis-vertical"></i></span>

                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item text-success mb-3" href="#">
                                                        <span><i
                                                                class="fa-regular fa-circle-check text-success"></i></span>
                                                        Activate</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item text-danger" href="#">
                                                        <span><i
                                                                class="fa-regular fa-circle-xmark text-danger"></i></span>
                                                        Deactivate</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td> --}}
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
