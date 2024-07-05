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
        <h1>Financial Overview</h1>
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
        <div class="page-header"></div>
        <div class="row me-lg-5">
          <div class="col-xl-4 colo-md-12 col-sm-12 col-12">
            <div class="card">
              <div class="card-body">
                <div class="dash-widget-header">
                  <svg width="97" height="97" viewBox="0 0 97 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="48.5" cy="48.5" r="48.5" fill="#758AFF" fill-opacity="0.1"/>
                    <g clip-path="url(#clip0_126_743)">
                    <path d="M56.3333 55.5475C56.3333 53.2454 49.8042 51.3809 41.75 51.3809M56.3333 55.5475C56.3333 57.8496 49.8042 59.7142 41.75 59.7142C33.6958 59.7142 27.1667 57.8496 27.1667 55.5475M56.3333 55.5475V65.8329C56.3333 68.2059 49.8042 70.1309 41.75 70.1309C33.6958 70.1309 27.1667 68.2079 27.1667 65.8329V55.5475M56.3333 55.5475C64.3 55.5475 70.9167 53.4913 70.9167 51.3809V30.5475M41.75 51.3809C33.6958 51.3809 27.1667 53.2454 27.1667 55.5475M41.75 51.3809C32.5458 51.3809 25.0833 49.3246 25.0833 47.2142V36.7975M41.75 32.6309C32.5458 32.6309 25.0833 34.4954 25.0833 36.7975M25.0833 36.7975C25.0833 39.0996 32.5458 40.9642 41.75 40.9642C41.75 43.0746 48.5271 45.1309 56.4938 45.1309C64.4583 45.1309 70.9167 43.0746 70.9167 40.9642M70.9167 30.5475C70.9167 28.2454 64.4583 26.3809 56.4938 26.3809C48.5271 26.3809 42.0708 28.2454 42.0708 30.5475M70.9167 30.5475C70.9167 32.8496 64.4583 34.7142 56.4938 34.7142C48.5292 34.7142 42.0708 32.8496 42.0708 30.5475M42.0708 30.5475V51.7267" stroke="#758AFF" stroke-width="3"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_126_743">
                    <rect width="50" height="50" fill="white" transform="translate(23 24)"/>
                    </clipPath>
                    </defs>
                    </svg>


                  <div class="dash-widget-info">
                    <h5 class="pt-4">Monthly Subscriptions</h5>
                    <h1 class="text-muted">220</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 colo-md-12 col-sm-12 col-12">
            <div class="card">
              <div class="card-body">
                <div class="dash-widget-header ">
                  <svg width="97" height="97" viewBox="0 0 97 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="48.5" cy="48.5" r="48.5" fill="#758AFF" fill-opacity="0.1"/>
                    <g clip-path="url(#clip0_126_743)">
                    <path d="M56.3333 55.5475C56.3333 53.2454 49.8042 51.3809 41.75 51.3809M56.3333 55.5475C56.3333 57.8496 49.8042 59.7142 41.75 59.7142C33.6958 59.7142 27.1667 57.8496 27.1667 55.5475M56.3333 55.5475V65.8329C56.3333 68.2059 49.8042 70.1309 41.75 70.1309C33.6958 70.1309 27.1667 68.2079 27.1667 65.8329V55.5475M56.3333 55.5475C64.3 55.5475 70.9167 53.4913 70.9167 51.3809V30.5475M41.75 51.3809C33.6958 51.3809 27.1667 53.2454 27.1667 55.5475M41.75 51.3809C32.5458 51.3809 25.0833 49.3246 25.0833 47.2142V36.7975M41.75 32.6309C32.5458 32.6309 25.0833 34.4954 25.0833 36.7975M25.0833 36.7975C25.0833 39.0996 32.5458 40.9642 41.75 40.9642C41.75 43.0746 48.5271 45.1309 56.4938 45.1309C64.4583 45.1309 70.9167 43.0746 70.9167 40.9642M70.9167 30.5475C70.9167 28.2454 64.4583 26.3809 56.4938 26.3809C48.5271 26.3809 42.0708 28.2454 42.0708 30.5475M70.9167 30.5475C70.9167 32.8496 64.4583 34.7142 56.4938 34.7142C48.5292 34.7142 42.0708 32.8496 42.0708 30.5475M42.0708 30.5475V51.7267" stroke="#758AFF" stroke-width="3"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_126_743">
                    <rect width="50" height="50" fill="white" transform="translate(23 24)"/>
                    </clipPath>
                    </defs>
                    </svg>

                  <div class="dash-widget-info">
                    <h5 class="pt-4">Yearly Subscriptions</h5>
                    <h1 class="text-muted">220</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 colo-md-12 col-sm-12 col-12">
            <div class="card">
              <div class="card-body">
                <div class="dash-widget-header">
                  <svg width="97" height="97" viewBox="0 0 97 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="48.5" cy="48.5" r="48.5" fill="#758AFF" fill-opacity="0.1"/>
                    <g clip-path="url(#clip0_126_743)">
                    <path d="M27.9912 26.0092C27.8611 25.879 27.7065 25.7758 27.5365 25.7053C27.3664 25.6349 27.1841 25.5986 27 25.5986C26.816 25.5986 26.6337 25.6349 26.4636 25.7053C26.2935 25.7758 26.139 25.879 26.0088 26.0092C25.8787 26.1394 25.7754 26.2939 25.705 26.464C25.6345 26.634 25.5983 26.8163 25.5983 27.0004C25.5983 27.1845 25.6345 27.3668 25.705 27.5368C25.7754 27.7069 25.8787 27.8614 26.0088 27.9916L29.2568 31.2368C28.2458 31.3687 27.3172 31.8638 26.6443 32.63C25.9715 33.3961 25.6003 34.3808 25.6 35.4004V55.0004C25.6 56.1143 26.0425 57.1826 26.8302 57.9702C27.6178 58.7579 28.6861 59.2004 29.8 59.2004H57.2204L60.0204 62.0004H31.438C31.7277 62.8196 32.2643 63.5288 32.9739 64.0303C33.6835 64.5318 34.5311 64.8009 35.4 64.8004H60.6C61.2907 64.8004 61.9618 64.7313 62.6132 64.5932L68.0088 69.9916C68.2717 70.2545 68.6283 70.4022 69 70.4022C69.3718 70.4022 69.7284 70.2545 69.9912 69.9916C70.2541 69.7287 70.4018 69.3722 70.4018 69.0004C70.4018 68.6286 70.2541 68.2721 69.9912 68.0092L27.9912 26.0092ZM53.6 55.58V56.4004H36.8V53.6004C36.8 52.1152 36.21 50.6908 35.1598 49.6406C34.1096 48.5904 32.6852 48.0004 31.2 48.0004H28.4V42.4004H31.2C32.3861 42.401 33.5418 42.0249 34.5004 41.3264C35.459 40.628 36.1711 39.6432 36.534 38.514L40.3756 42.3556C39.742 43.4254 39.4825 44.6757 39.638 45.9094C39.7934 47.143 40.355 48.2898 41.2342 49.169C42.1134 50.0482 43.2602 50.6098 44.4939 50.7653C45.7275 50.9207 46.9778 50.6612 48.0476 50.0276L53.6 55.58ZM32.0204 34.0004L34 35.98V36.8004C34 37.543 33.705 38.2552 33.1799 38.7803C32.6548 39.3054 31.9426 39.6004 31.2 39.6004H28.4V35.4004C28.4 35.0291 28.5475 34.673 28.8101 34.4105C29.0726 34.1479 29.4287 34.0004 29.8 34.0004H32.0204ZM42.4924 44.4752L45.928 47.9052C45.4532 48.0326 44.9531 48.0328 44.4782 47.9056C44.0032 47.7784 43.5701 47.5284 43.2225 47.1808C42.8748 46.8331 42.6248 46.4 42.4976 45.9251C42.3705 45.4501 42.3706 44.9501 42.498 44.4752M29.8 56.4004C29.4287 56.4004 29.0726 56.2529 28.8101 55.9904C28.5475 55.7278 28.4 55.3717 28.4 55.0004V50.8004H31.2C31.9426 50.8004 32.6548 51.0954 33.1799 51.6205C33.705 52.1456 34 52.8578 34 53.6004V56.4004H29.8ZM59.2 48.0004C57.7356 48.0004 56.4056 48.5604 55.4088 49.4788L57.3912 51.464C57.8967 51.0358 58.5376 50.8007 59.2 50.8004H62V55.0004C61.9998 55.2916 61.9088 55.5754 61.7396 55.8124L63.7276 57.8004C64.394 57.0584 64.8 56.0756 64.8 55.0004V35.4004C64.8 34.2865 64.3575 33.2182 63.5699 32.4306C62.7822 31.6429 61.7139 31.2004 60.6 31.2004H37.1276L39.9276 34.0004H53.6V36.8004C53.6 38.2856 54.19 39.71 55.2402 40.7602C56.2904 41.8104 57.7148 42.4004 59.2 42.4004H62V48.0004H59.2ZM60.6 34.0004C60.9713 34.0004 61.3274 34.1479 61.59 34.4105C61.8525 34.673 62 35.0291 62 35.4004V39.6004H59.2C58.4574 39.6004 57.7452 39.3054 57.2201 38.7803C56.695 38.2552 56.4 37.543 56.4 36.8004V34.0004H60.6ZM65.7128 59.7828L67.6924 61.7652C69.3724 60.004 70.4 57.6212 70.4 55.0004V41.0004C70.4005 40.1315 70.1314 39.2838 69.63 38.5742C69.1285 37.8646 68.4193 37.328 67.6 37.0384V55.0004C67.6 56.8484 66.8832 58.5312 65.7128 59.7828Z" fill="#758AFF"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_126_743">
                    <rect width="56" height="56" fill="white" transform="translate(20 20)"/>
                    </clipPath>
                    </defs>
                    </svg>

                  <div class="dash-widget-info">
                    <h5 class="pt-4">Free Trials</h5>
                    <h1 class="text-muted">220</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-between align-item-center">
            <h4>Transactions</h4>
            <button class="btn user-btn rounded-pill px-4">
              <svg width="19" height="16" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.45825 8.00016V1.3335M15.5416 14.6668V12.1668M3.45825 14.6668V11.3335M15.5416 8.8335V1.3335M9.49992 3.8335V1.3335M9.49992 14.6668V7.16683"
                  stroke="white" stroke-width="1.5" stroke-linecap="round" />
                <path
                  d="M3.45825 11.3333C4.41159 11.3333 5.18444 10.5871 5.18444 9.66667C5.18444 8.74619 4.41159 8 3.45825 8C2.5049 8 1.73206 8.74619 1.73206 9.66667C1.73206 10.5871 2.5049 11.3333 3.45825 11.3333Z"
                  stroke="white" stroke-width="1.5" stroke-linecap="round" />
                <path
                  d="M9.49987 7.16683C10.4532 7.16683 11.2261 6.42064 11.2261 5.50016C11.2261 4.57969 10.4532 3.8335 9.49987 3.8335C8.54652 3.8335 7.77368 4.57969 7.77368 5.50016C7.77368 6.42064 8.54652 7.16683 9.49987 7.16683Z"
                  stroke="white" stroke-width="1.5" stroke-linecap="round" />
                <path
                  d="M15.5416 12.1668C16.495 12.1668 17.2678 11.4206 17.2678 10.5002C17.2678 9.57969 16.495 8.8335 15.5416 8.8335C14.5883 8.8335 13.8154 9.57969 13.8154 10.5002C13.8154 11.4206 14.5883 12.1668 15.5416 12.1668Z"
                  stroke="white" stroke-width="1.5" stroke-linecap="round" />
              </svg>
              <span>
                Filter
              </span>

            </button>
          </div>
          <div class="col-lg-12 mt-4">
            <div class="table-responsive border rounded">
              <table class="table usertable">
                <thead>
                  <tr class="rounded-top " style="background-color: #f1f3ff;">
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PACKAGE</th>
                    <th scope="col">USER TYPE</th>
                    <th scope="col">DATE</th>
                    <th scope="col">OPTION</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>John Smith</td>
                    <td>johnsmith@gmail.com</td>
                    <td>Yearly</td>
                    <td>
                      <span class="enterprise-user-type">
                        Enterprise
                      </span>
                    </td>
                    <td>12/11/2024 07:23</td>
                    <td>
                      <div class="dropdown py-0 ps-3">
                        <a class="btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item refund-text" href="#">
                              <span><svg width="25" height="25" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 15.5V14.5C16 13.4391 15.5786 12.4217 14.8284 11.6716C14.0783 10.9214 13.0609 10.5 12 10.5H8M8 10.5L11 13.5M8 10.5L11 7.5M20 21.5V5.5C20 4.96957 19.7893 4.46086 19.4142 4.08579C19.0391 3.71071 18.5304 3.5 18 3.5H6C5.46957 3.5 4.96086 3.71071 4.58579 4.08579C4.21071 4.46086 4 4.96957 4 5.5V21.5L8 19.5L12 21.5L16 19.5L20 21.5Z" stroke="#758AFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </span>
                              Refund</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>johnsmith@gmail.com</td>
                    <td>Yearly</td>
                    <td>
                      <span class="individual-user-type">
                        Individual
                      </span>
                    </td>
                    <td>12/11/2024 07:23</td>
                    <td>
                      <div class="dropdown py-0 ps-3">
                        <a class="btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item refund-text" href="#">
                              <span><svg width="25" height="25" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 15.5V14.5C16 13.4391 15.5786 12.4217 14.8284 11.6716C14.0783 10.9214 13.0609 10.5 12 10.5H8M8 10.5L11 13.5M8 10.5L11 7.5M20 21.5V5.5C20 4.96957 19.7893 4.46086 19.4142 4.08579C19.0391 3.71071 18.5304 3.5 18 3.5H6C5.46957 3.5 4.96086 3.71071 4.58579 4.08579C4.21071 4.46086 4 4.96957 4 5.5V21.5L8 19.5L12 21.5L16 19.5L20 21.5Z" stroke="#758AFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg></span>
                              Refund</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>johnsmith@gmail.com</td>
                    <td>Yearly</td>
                    <td> <span class="enterprise-user-type">
                      Enterprise
                    </span></td>
                    <td>12/11/2024 07:23</td>
                    <td>
                      <div class="dropdown py-0 ps-3">
                        <a class="btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item refund-text" href="#">
                              <span><svg width="25" height="25" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 15.5V14.5C16 13.4391 15.5786 12.4217 14.8284 11.6716C14.0783 10.9214 13.0609 10.5 12 10.5H8M8 10.5L11 13.5M8 10.5L11 7.5M20 21.5V5.5C20 4.96957 19.7893 4.46086 19.4142 4.08579C19.0391 3.71071 18.5304 3.5 18 3.5H6C5.46957 3.5 4.96086 3.71071 4.58579 4.08579C4.21071 4.46086 4 4.96957 4 5.5V21.5L8 19.5L12 21.5L16 19.5L20 21.5Z" stroke="#758AFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>></span>
                              Refund</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>johnsmith@gmail.com</td>
                    <td>Yearly</td>
                    <td> <span class="individual-user-type">
                      Individual
                    </span></td>
                    <td>12/11/2024 07:23</td>
                    <td>
                      <div class="dropdown py-0 ps-3">
                        <a class="btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item refund-text" href="#">
                              <span><svg width="25" height="25" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 15.5V14.5C16 13.4391 15.5786 12.4217 14.8284 11.6716C14.0783 10.9214 13.0609 10.5 12 10.5H8M8 10.5L11 13.5M8 10.5L11 7.5M20 21.5V5.5C20 4.96957 19.7893 4.46086 19.4142 4.08579C19.0391 3.71071 18.5304 3.5 18 3.5H6C5.46957 3.5 4.96086 3.71071 4.58579 4.08579C4.21071 4.46086 4 4.96957 4 5.5V21.5L8 19.5L12 21.5L16 19.5L20 21.5Z" stroke="#758AFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg></span>
                              Refund</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>johnsmith@gmail.com</td>
                    <td>Yearly</td>
                    <td> <span class="enterprise-user-type">
                      Enterprise
                    </span></td>
                    <td>12/11/2024 07:23</td>
                    <td>
                      <div class="dropdown py-0 ps-3">
                        <a class="btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item refund-text" href="#">
                              <span><svg width="25" height="25" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 15.5V14.5C16 13.4391 15.5786 12.4217 14.8284 11.6716C14.0783 10.9214 13.0609 10.5 12 10.5H8M8 10.5L11 13.5M8 10.5L11 7.5M20 21.5V5.5C20 4.96957 19.7893 4.46086 19.4142 4.08579C19.0391 3.71071 18.5304 3.5 18 3.5H6C5.46957 3.5 4.96086 3.71071 4.58579 4.08579C4.21071 4.46086 4 4.96957 4 5.5V21.5L8 19.5L12 21.5L16 19.5L20 21.5Z" stroke="#758AFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg></span>
                              Refund</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>John Smith</td>
                    <td>johnsmith@gmail.com</td>
                    <td>Yearly</td>
                    <td> <span class="individual-user-type">
                      Individual
                    </span></td>
                    <td>12/11/2024 07:23</td>
                    <td>
                      <div class="dropdown py-0 ps-3">
                        <a class="btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item refund-text" href="#">
                              <span><svg width="25" height="25" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 15.5V14.5C16 13.4391 15.5786 12.4217 14.8284 11.6716C14.0783 10.9214 13.0609 10.5 12 10.5H8M8 10.5L11 13.5M8 10.5L11 7.5M20 21.5V5.5C20 4.96957 19.7893 4.46086 19.4142 4.08579C19.0391 3.71071 18.5304 3.5 18 3.5H6C5.46957 3.5 4.96086 3.71071 4.58579 4.08579C4.21071 4.46086 4 4.96957 4 5.5V21.5L8 19.5L12 21.5L16 19.5L20 21.5Z" stroke="#758AFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg></span>
                              Refund</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>John Smith</td>
                    <td>johnsmith@gmail.com</td>
                    <td>Yearly</td>
                    <td> <span class="enterprise-user-type">
                      Enterprise
                    </span></td>
                    <td>12/11/2024 07:23</td>
                    <td>
                      <div class="dropdown py-0 ps-3">
                        <a class="btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>

                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item refund-text" href="#">
                              <span><svg width="25" height="25" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 15.5V14.5C16 13.4391 15.5786 12.4217 14.8284 11.6716C14.0783 10.9214 13.0609 10.5 12 10.5H8M8 10.5L11 13.5M8 10.5L11 7.5M20 21.5V5.5C20 4.96957 19.7893 4.46086 19.4142 4.08579C19.0391 3.71071 18.5304 3.5 18 3.5H6C5.46957 3.5 4.96086 3.71071 4.58579 4.08579C4.21071 4.46086 4 4.96957 4 5.5V21.5L8 19.5L12 21.5L16 19.5L20 21.5Z" stroke="#758AFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg></span>
                              Refund</a>
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
                            <a class="page-link text-secondary rounded" href="#">
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
                            <a class="page-link text-secondary rounded" href="#">Next
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
