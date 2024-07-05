
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
        <h1>Users</h1>
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
            <div class="user-data col-lg-12 d-flex justify-content-between mt-3">
              <p class="user-para">Total Users: 440</p>

              <form class="d-flex flex-wrap " role="search">
                <div class="position-relative me-2 sm-mt-3 sm-w-100  " style="display: flex; justify-content: center; align-items: center; ">
                  <span class="icon-search ps-2"><i class=" fa-2x fa-solid fa-magnifying-glass text-secondary fs-5" style="color:#00000040 !important; font-size: 1.5rem !important;;"></i></span>
                  <input class="form-control ps-5 rounded-pill " type="search" placeholder="Search"
                    aria-label="Search" style="color:#00000040 !important; font-size: 17px;"  />
                </div>

                <div class="">
                  <!-- <button class="btn user-btn" type="submit">

                                    </button> -->
                  <!-- Button trigger modal -->
                  <button type="button" class="btn user-btn mt-lg-0 mt-3" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <span><i class="fa-solid fa-plus pe-2"></i></span>New User
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content modal-user">
                        <div class="modal-header border-0">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body mb-5">
                          <div class="container">
                            <div class="row">
                              <div class="col-10 mx-auto">
                                <h4 class="text-center">Add User</h4>
                                <form action="">
                                  <div class="mb-3">
                                    <label for="email" class="form-label">Email*</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email" />
                                  </div>
                                  <div class="mb-3">
                                    <label for="plan">Plan</label>
                                    <select id="plan" class="form-select text-secondary" aria-label="Default select example" onchange="toggleCustomDuration(this.value)">
                                        <option value="monthly" selected>Monthly</option>
                                        <option value="yearly">Yearly</option>
                                        <option value="custom">Custom</option>
                                    </select>
                                </div>
                                <div id="custom-duration" class="mb-3" style="display:none;">
                                    <label for="custom-duration-input">Set Duration Date</label>
                                    <input type="date" id="custom-duration-input" class="form-control" />
                                </div>


                                  <div class="mb-3 position-relative">
                                    <label for="date" class="form-label">Duration</label>
                                    <input type="text" class="form-control" id="date" placeholder="Select Date" />
                                    <span class="date-icon">
                                      <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.44043C7.59 6.44043 7.25 6.10043 7.25 5.69043V2.69043C7.25 2.28043 7.59 1.94043 8 1.94043C8.41 1.94043 8.75 2.28043 8.75 2.69043V5.69043C8.75 6.10043 8.41 6.44043 8 6.44043Z" fill="#292D32"/>
                                        <path d="M16 6.44043C15.59 6.44043 15.25 6.10043 15.25 5.69043V2.69043C15.25 2.28043 15.59 1.94043 16 1.94043C16.41 1.94043 16.75 2.28043 16.75 2.69043V5.69043C16.75 6.10043 16.41 6.44043 16 6.44043Z" fill="#292D32"/>
                                        <path d="M20.5 10.5303H3.5C3.09 10.5303 2.75 10.1903 2.75 9.78027C2.75 9.37027 3.09 9.03027 3.5 9.03027H20.5C20.91 9.03027 21.25 9.37027 21.25 9.78027C21.25 10.1903 20.91 10.5303 20.5 10.5303Z" fill="#292D32"/>
                                        <path d="M16 23.4404H8C4.35 23.4404 2.25 21.3404 2.25 17.6904V9.19043C2.25 5.54043 4.35 3.44043 8 3.44043H16C19.65 3.44043 21.75 5.54043 21.75 9.19043V17.6904C21.75 21.3404 19.65 23.4404 16 23.4404ZM8 4.94043C5.14 4.94043 3.75 6.33043 3.75 9.19043V17.6904C3.75 20.5504 5.14 21.9404 8 21.9404H16C18.86 21.9404 20.25 20.5504 20.25 17.6904V9.19043C20.25 6.33043 18.86 4.94043 16 4.94043H8Z" fill="#292D32"/>
                                        <path d="M8.5 15.1904C8.37 15.1904 8.24 15.1605 8.12 15.1105C8 15.0605 7.89001 14.9904 7.79001 14.9004C7.70001 14.8004 7.62999 14.6904 7.57999 14.5704C7.52999 14.4504 7.5 14.3204 7.5 14.1904C7.5 13.9304 7.61001 13.6704 7.79001 13.4804C7.89001 13.3904 8 13.3204 8.12 13.2704C8.3 13.1904 8.50001 13.1704 8.70001 13.2104C8.76001 13.2204 8.82 13.2404 8.88 13.2704C8.94 13.2904 9 13.3205 9.06 13.3605C9.11 13.4005 9.15999 13.4404 9.20999 13.4804C9.24999 13.5304 9.29999 13.5804 9.32999 13.6304C9.36999 13.6904 9.40001 13.7504 9.42001 13.8104C9.45001 13.8704 9.47001 13.9304 9.48001 13.9904C9.49001 14.0604 9.5 14.1204 9.5 14.1904C9.5 14.4504 9.38999 14.7104 9.20999 14.9004C9.01999 15.0804 8.76 15.1904 8.5 15.1904Z" fill="#292D32"/>
                                        <path d="M12 15.1903C11.74 15.1903 11.48 15.0803 11.29 14.9003C11.25 14.8503 11.21 14.8003 11.17 14.7503C11.13 14.6903 11.1 14.6303 11.08 14.5703C11.05 14.5103 11.03 14.4503 11.02 14.3903C11.01 14.3203 11 14.2603 11 14.1903C11 14.0603 11.03 13.9303 11.08 13.8103C11.13 13.6903 11.2 13.5803 11.29 13.4803C11.57 13.2003 12.02 13.1103 12.38 13.2703C12.51 13.3203 12.61 13.3903 12.71 13.4803C12.89 13.6703 13 13.9303 13 14.1903C13 14.2603 12.99 14.3203 12.98 14.3903C12.97 14.4503 12.95 14.5103 12.92 14.5703C12.9 14.6303 12.87 14.6903 12.83 14.7503C12.79 14.8003 12.75 14.8503 12.71 14.9003C12.61 14.9903 12.51 15.0603 12.38 15.1103C12.26 15.1603 12.13 15.1903 12 15.1903Z" fill="#292D32"/>
                                        <path d="M8.5 18.6903C8.37 18.6903 8.24 18.6603 8.12 18.6103C8 18.5603 7.89001 18.4903 7.79001 18.4003C7.70001 18.3003 7.62999 18.2003 7.57999 18.0703C7.52999 17.9503 7.5 17.8203 7.5 17.6903C7.5 17.4303 7.61001 17.1703 7.79001 16.9803C7.89001 16.8903 8 16.8203 8.12 16.7703C8.49 16.6103 8.92999 16.7003 9.20999 16.9803C9.24999 17.0303 9.29999 17.0803 9.32999 17.1303C9.36999 17.1903 9.40001 17.2503 9.42001 17.3103C9.45001 17.3703 9.47001 17.4303 9.48001 17.5003C9.49001 17.5603 9.5 17.6303 9.5 17.6903C9.5 17.9503 9.38999 18.2103 9.20999 18.4003C9.01999 18.5803 8.76 18.6903 8.5 18.6903Z" fill="#292D32"/>
                                      </svg>

                                    </span>
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
                    <th scope="col">SIGNUP</th>
                    <th scope="col">LAST LOGIN</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">OPTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class=" ">
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td class="">
                      <span class=" enterprise-user-type">
                        Enterprise
                      </span>

                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn py-0 ps-4 ms-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa-solid fa-ellipsis-vertical"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item text-success mb-3" href="#">
                              <span><i class="fa-regular fa-circle-check text-success"></i></span>
                              Activate</a>
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#">
                              <span><i class="fa-regular fa-circle-xmark text-danger"></i></span>
                              Deactivate</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class=" ">
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td class="">
                      <span class=" individual-user-type">
                        Individual
                      </span>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn py-0 ps-4 ms-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa-solid fa-ellipsis-vertical"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item text-success mb-3" href="#">
                              <span><i class="fa-regular fa-circle-check text-success"></i></span>
                              Activate</a>
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#">
                              <span><i class="fa-regular fa-circle-xmark text-danger"></i></span>
                              Deactivate</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class=" ">
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td class="">
                      <span class=" enterprise-user-type">
                        Enterprise
                      </span>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn py-0 ps-4 ms-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa-solid fa-ellipsis-vertical"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item text-success mb-3" href="#">
                              <span><i class="fa-regular fa-circle-check text-success"></i></span>
                              Activate</a>
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#">
                              <span><i class="fa-regular fa-circle-xmark text-danger"></i></span>
                              Deactivate</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class=" ">
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td class="">
                      <span class=" individual-user-type">
                        Individual
                      </span>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn py-0 ps-4 ms-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa-solid fa-ellipsis-vertical"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item text-success mb-3" href="#">
                              <span><i class="fa-regular fa-circle-check text-success"></i></span>
                              Activate</a>
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#">
                              <span><i class="fa-regular fa-circle-xmark text-danger"></i></span>
                              Deactivate</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class=" ">
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td class="">
                      <span class=" enterprise-user-type">
                        Enterprise
                      </span>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn py-0 ps-4 ms-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa-solid fa-ellipsis-vertical"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item text-success mb-3" href="#">
                              <span><i class="fa-regular fa-circle-check text-success"></i></span>
                              Activate</a>
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#">
                              <span><i class="fa-regular fa-circle-xmark text-danger"></i></span>
                              Deactivate</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class=" ">
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td class="">
                      <span class=" individual-user-type">
                        Individual
                      </span>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn py-0 ps-4 ms-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa-solid fa-ellipsis-vertical"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item text-success mb-3" href="#">
                              <span><i class="fa-regular fa-circle-check text-success"></i></span>
                              Activate</a>
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#">
                              <span><i class="fa-regular fa-circle-xmark text-danger"></i></span>
                              Deactivate</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class=" ">
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td class="">
                      <span class=" enterprise-user-type">
                        Enterprise
                      </span>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn py-0 ps-4 ms-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa-solid fa-ellipsis-vertical"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item text-success mb-3" href="#">
                              <span><i class="fa-regular fa-circle-check text-success"></i></span>
                              Activate</a>
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#">
                              <span><i class="fa-regular fa-circle-xmark text-danger"></i></span>
                              Deactivate</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class=" ">
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td class="">
                      <span class=" individual-user-type">
                        Individual
                      </span>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn py-0 ps-4 ms-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa-solid fa-ellipsis-vertical"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item text-success mb-3" href="#">
                              <span><i class="fa-regular fa-circle-check text-success"></i></span>
                              Activate</a>
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#">
                              <span><i class="fa-regular fa-circle-xmark text-danger"></i></span>
                              Deactivate</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class=" ">
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td class="">
                      <span class=" enterprise-user-type">
                        Enterprise
                      </span>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn py-0 ps-4 ms-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa-solid fa-ellipsis-vertical"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item text-success mb-3" href="#">
                              <span><i class="fa-regular fa-circle-check text-success"></i></span>
                              Activate</a>
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#">
                              <span><i class="fa-regular fa-circle-xmark text-danger"></i></span>
                              Deactivate</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class=" ">
                    <td>John Smith</td>
                    <td>JohnSmith@gmail.com</td>
                    <td>12/11/2024 07:23</td>
                    <td>12/11/2024 07:23</td>
                    <td class="">
                      <span class=" individual-user-type">
                        Individual
                      </span>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn py-0 ps-4 ms-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa-solid fa-ellipsis-vertical"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item text-success mb-3" href="#">
                              <span><i class="fa-regular fa-circle-check text-success"></i></span>
                              Activate</a>
                          </li>
                          <li>
                            <a class="dropdown-item text-danger" href="#">
                              <span><i class="fa-regular fa-circle-xmark text-danger"></i></span>
                              Deactivate</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="">
                    <td colspan="6">
                      <nav aria-label="Page navigation example">
                        <ul class="pagination d-flex justify-content-between align-item-center">
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
<script>
    function toggleCustomDuration(value) {
        const customDurationDiv = document.getElementById('custom-duration');
        if (value === 'custom') {
            customDurationDiv.style.display = 'block';
        } else {
            customDurationDiv.style.display = 'none';
        }
    }
</script>



@endsection
