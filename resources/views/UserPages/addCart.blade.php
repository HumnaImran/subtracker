

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
      <div class="header-left"><h1>Payment</h1></div>
      <ul class="nav user-menu">
        <li class="nav-item dropdown noti-dropdown me-2">
          <a
            href="#"
            class="dropdown-toggle nav-link"
            data-bs-toggle="dropdown"
          >
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
                        <img
                          class="avatar-img rounded-circle"
                          alt=""
                          src="assets/img/figma/header/Ellipse 88.png"
                        />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title"
                            >Alex have been subscribed</span
                          >
                        </p>
                        <p class="noti-time">
                          <span class="notification-time"
                            >10 May 2024 10:20 PM</span
                          >
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="admin-notification.html">
                    <div class="media d-flex">
                      <span class="avatar avatar-sm flex-shrink-0">
                        <img
                          class="avatar-img rounded-circle"
                          alt=""
                          src="assets/img/figma/header/Ellipse 88.png"
                        />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title"
                            >Matthew have been subscribed</span
                          >
                        </p>
                        <p class="noti-time">
                          <span class="notification-time"
                            >11 May 2024 03:56 AM</span
                          >
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="admin-notification.html">
                    <div class="media d-flex">
                      <span class="avatar avatar-sm flex-shrink-0">
                        <img
                          class="avatar-img rounded-circle"
                          alt=""
                          src="assets/img/figma/header/Ellipse 88.png"
                        />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title"
                            >Potter have been subscribed</span
                          >
                        </p>
                        <p class="noti-time">
                          <span class="notification-time"
                            >11 May 2024 03:56 AM</span
                          >
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="admin-notification.html">
                    <div class="media d-flex">
                      <span class="avatar avatar-sm flex-shrink-0">
                        <img
                          class="avatar-img rounded-circle"
                          alt="User Image"
                          src="assets/img/figma/header/Ellipse 88.png"
                        />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title"
                            >Ali have been subscribed</span
                          >
                        </p>
                        <p class="noti-time">
                          <span class="notification-time"
                            >09 May 2024 04:56 AM</span
                          >
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="admin-notification.html">
                    <div class="media d-flex">
                      <span class="avatar avatar-sm flex-shrink-0">
                        <img
                          class="avatar-img rounded-circle"
                          alt="User Image"
                          src="assets/img/figma/header/Ellipse 88.png"
                        />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title"
                            >Maritza have been subscribed</span
                          >
                        </p>
                        <p class="noti-time">
                          <span class="notification-time"
                            >10 May 2024 08:42 AM</span
                          >
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="admin-notification.html">
                    <div class="media d-flex">
                      <span class="avatar avatar-sm flex-shrink-0">
                        <img
                          class="avatar-img rounded-circle"
                          alt="User Image"
                          src="assets/img/figma/header/Ellipse 88.png"
                        />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title"
                            >Marya have been subscribed</span
                          >
                        </p>
                        <p class="noti-time">
                          <span class="notification-time"
                            >06 May 2024 11:01 AM</span
                          >
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="notification-message">
                  <a href="admin-notification.html">
                    <div class="media d-flex">
                      <span class="avatar avatar-sm flex-shrink-0">
                        <img
                          class="avatar-img rounded-circle"
                          alt="User Image"
                          src="assets/img/figma/header/Ellipse 88.png"
                        />
                      </span>
                      <div class="media-body flex-grow-1">
                        <p class="noti-details">
                          <span class="noti-title"
                            >Richard have been subscribed</span
                          >
                        </p>
                        <p class="noti-time">
                          <span class="notification-time"
                            >05 May 2024 06:23 AM</span
                          >
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
          <a
            href="javascript:void(0)"
            class="dropdown-toggle user-link nav-link"
            data-bs-toggle="dropdown"
          >
            <span class="user-img">
              <img
                class="rounded-circle"
                src="assets/img/figma/header/Ellipse 88.png"
                width="40"
                alt="Admin"
              />
            </span>
            <i class="fa-solid fa-angle-down "></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end">
              <div class="p-2">
                <button
                  type="button"
                  class="btn bg-white d-flex"
                  data-bs-toggle="modal"
                  data-bs-target="#setting-modal" style="display: flex; justify-content: center; align-items: center;"
                >
                  <span><i class="fa-solid fa-gear me-2 text-secondary fs-4" style="color:rgba(145, 145, 145, 1);"></i></span>
                 <p   style="margin-bottom: 0rem;  color:rgba(145, 145, 145, 1); font-size: 15px; font-weight: 400; font-family:
Poppins;
"> Account Setting</p>
                </button>
              </div>
              <div class="p-2">
                <div  style="display: flex; justify-content: center; align-items: center;padding: .375rem .75rem; ">
                    <img  src="assets/img/logout.png">
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
          <div class="container mt-1">
              <div class="row">
                <div class="col mb-3">
                  <h6 class="text-secondary pe-5">
                    Secure and Hassle-Free Payment Processing
                  </h6>
                </div>
              </div>
              <div class="row">
                <div class="container">
                  <div class="row">
                    <div class=" col-lg-3">
                      <div class="card border-0" style="width: 100%; box-shadow: none;">
                        <div
                          class="d-flex flex-column justify-content-center align-items-center"
                        >
                          <div class="px-4 py-4 imgdiv rounded-4">
                            <div class="mb-3">
                              <svg
                                class="img-fluid"
                                width="150"
                                height="120"
                                viewBox="0 0 169 113"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M147.841 9.3867C150.641 9.3867 153.327 10.3757 155.308 12.136C157.288 13.8964 158.401 16.2839 158.401 18.7734V93.867C158.401 96.3566 157.288 98.7441 155.308 100.504C153.327 102.265 150.641 103.254 147.841 103.254H21.1201C18.3194 103.254 15.6334 102.265 13.653 100.504C11.6726 98.7441 10.56 96.3566 10.56 93.867V18.7734C10.56 16.2839 11.6726 13.8964 13.653 12.136C15.6334 10.3757 18.3194 9.3867 21.1201 9.3867H147.841ZM21.1201 0C15.5187 0 10.1467 1.97791 6.18593 5.4986C2.22515 9.0193 0 13.7944 0 18.7734L0 93.867C0 98.8461 2.22515 103.621 6.18593 107.142C10.1467 110.663 15.5187 112.64 21.1201 112.64H147.841C153.442 112.64 158.814 110.663 162.775 107.142C166.736 103.621 168.961 98.8461 168.961 93.867V18.7734C168.961 13.7944 166.736 9.0193 162.775 5.4986C158.814 1.97791 153.442 0 147.841 0H21.1201Z"
                                  fill="black"
                                  class="svg-path"
                                />
                                <path
                                  d="M21.1201 32.8535C21.1201 31.6088 21.6764 30.415 22.6666 29.5348C23.6568 28.6546 24.9998 28.1602 26.4001 28.1602H47.5202C48.9206 28.1602 50.2636 28.6546 51.2538 29.5348C52.244 30.415 52.8002 31.6088 52.8002 32.8535V42.2402C52.8002 43.485 52.244 44.6787 51.2538 45.5589C50.2636 46.4391 48.9206 46.9336 47.5202 46.9336H26.4001C24.9998 46.9336 23.6568 46.4391 22.6666 45.5589C21.6764 44.6787 21.1201 43.485 21.1201 42.2402V32.8535ZM21.1201 61.0136C21.1201 59.7689 21.6764 58.5751 22.6666 57.6949C23.6568 56.8147 24.9998 56.3203 26.4001 56.3203H79.2004C80.6007 56.3203 81.9437 56.8147 82.9339 57.6949C83.9241 58.5751 84.4804 59.7689 84.4804 61.0136C84.4804 62.2584 83.9241 63.4522 82.9339 64.3323C81.9437 65.2125 80.6007 65.707 79.2004 65.707H26.4001C24.9998 65.707 23.6568 65.2125 22.6666 64.3323C21.6764 63.4522 21.1201 62.2584 21.1201 61.0136ZM21.1201 79.787C21.1201 78.5423 21.6764 77.3485 22.6666 76.4683C23.6568 75.5882 24.9998 75.0937 26.4001 75.0937H36.9602C38.3605 75.0937 39.7035 75.5882 40.6937 76.4683C41.6839 77.3485 42.2402 78.5423 42.2402 79.787C42.2402 81.0318 41.6839 82.2256 40.6937 83.1057C39.7035 83.9859 38.3605 84.4804 36.9602 84.4804H26.4001C24.9998 84.4804 23.6568 83.9859 22.6666 83.1057C21.6764 82.2256 21.1201 81.0318 21.1201 79.787ZM52.8002 79.787C52.8002 78.5423 53.3565 77.3485 54.3467 76.4683C55.3369 75.5882 56.6799 75.0937 58.0803 75.0937H68.6403C70.0407 75.0937 71.3836 75.5882 72.3738 76.4683C73.364 77.3485 73.9203 78.5423 73.9203 79.787C73.9203 81.0318 73.364 82.2256 72.3738 83.1057C71.3836 83.9859 70.0407 84.4804 68.6403 84.4804H58.0803C56.6799 84.4804 55.3369 83.9859 54.3467 83.1057C53.3565 82.2256 52.8002 81.0318 52.8002 79.787ZM84.4804 79.787C84.4804 78.5423 85.0367 77.3485 86.0268 76.4683C87.017 75.5882 88.36 75.0937 89.7604 75.0937H100.32C101.721 75.0937 103.064 75.5882 104.054 76.4683C105.044 77.3485 105.6 78.5423 105.6 79.787C105.6 81.0318 105.044 82.2256 104.054 83.1057C103.064 83.9859 101.721 84.4804 100.32 84.4804H89.7604C88.36 84.4804 87.017 83.9859 86.0268 83.1057C85.0367 82.2256 84.4804 81.0318 84.4804 79.787ZM116.16 79.787C116.16 78.5423 116.717 77.3485 117.707 76.4683C118.697 75.5882 120.04 75.0937 121.441 75.0937H132.001C133.401 75.0937 134.744 75.5882 135.734 76.4683C136.724 77.3485 137.281 78.5423 137.281 79.787C137.281 81.0318 136.724 82.2256 135.734 83.1057C134.744 83.9859 133.401 84.4804 132.001 84.4804H121.441C120.04 84.4804 118.697 83.9859 117.707 83.1057C116.717 82.2256 116.16 81.0318 116.16 79.787Z"
                                  fill="black"
                                  class="svg-path"
                                />
                              </svg>
                            </div>
                            <div class="text-center">
                              <label class="form-check-label" for="flexRadioDefault2">
                                Debit Card
                              </label>
                            </div>
                          </div>

                          <div class="card-body">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="cardId"
                                id="cardId"
                                checked
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="  col-lg-3">
                      <div class="card border-0" style="width: 100%; box-shadow: none;">
                        <div
                          class="d-flex flex-column justify-content-center align-items-center"
                        >
                          <div class="px-4 py-4 imgdiv rounded-4">
                            <div class="mb-3">
                              <svg
                                class="img-fluid"
                                width="150"
                                height="120"
                                viewBox="0 0 169 113"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M116.16 32.8535C116.16 31.6088 116.717 30.415 117.707 29.5348C118.697 28.6546 120.04 28.1602 121.44 28.1602H142.561C143.961 28.1602 145.304 28.6546 146.294 29.5348C147.284 30.415 147.841 31.6088 147.841 32.8535V42.2402C147.841 43.485 147.284 44.6787 146.294 45.5589C145.304 46.4391 143.961 46.9336 142.561 46.9336H121.44C120.04 46.9336 118.697 46.4391 117.707 45.5589C116.717 44.6787 116.16 43.485 116.16 42.2402V32.8535Z"
                                  fill="#424252"
                                  class="svg-path"
                                />
                                <path
                                  d="M21.1201 0C15.5187 0 10.1467 1.97791 6.18593 5.4986C2.22515 9.0193 0 13.7944 0 18.7734L0 93.867C0 98.8461 2.22515 103.621 6.18593 107.142C10.1467 110.663 15.5187 112.64 21.1201 112.64H147.841C153.442 112.64 158.814 110.663 162.775 107.142C166.736 103.621 168.961 98.8461 168.961 93.867V18.7734C168.961 13.7944 166.736 9.0193 162.775 5.4986C158.814 1.97791 153.442 0 147.841 0H21.1201ZM158.401 18.7734V65.7069H10.56V18.7734C10.56 16.2839 11.6726 13.8964 13.653 12.136C15.6334 10.3757 18.3194 9.3867 21.1201 9.3867H147.841C150.641 9.3867 153.327 10.3757 155.308 12.136C157.288 13.8964 158.401 16.2839 158.401 18.7734ZM147.841 103.254H21.1201C18.3194 103.254 15.6334 102.265 13.653 100.504C11.6726 98.7441 10.56 96.3566 10.56 93.867V84.4803H158.401V93.867C158.401 96.3566 157.288 98.7441 155.308 100.504C153.327 102.265 150.641 103.254 147.841 103.254Z"
                                  fill="#424252"
                                  class="svg-path"
                                />
                              </svg>
                            </div>
                            <div class="text-center">
                              <label class="form-check-label" for="flexRadioDefault2">
                                Credit Card
                              </label>
                            </div>
                          </div>

                          <div class="card-body">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="cardId"
                                id="cardId"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="  col-lg-3">
                      <div class="card border-0" style="width: 100%; box-shadow: none;">
                        <div
                          class="d-flex flex-column justify-content-center align-items-center"
                        >
                          <div class="px-4 py-4 imgdiv rounded-4">
                            <div class="mb-3">
                              <svg
                                class="img-fluid w-100"
                                width="150"
                                height="120"
                                viewBox="0 0 113 113"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M99.8856 26.138C100.879 18.5986 99.1153 13.2415 94.0714 8.35599C88.0254 2.50609 77.126 0 63.1621 0H22.6454C21.2662 0.000507665 19.9323 0.418955 18.8834 1.1802C17.8344 1.94144 17.1392 2.99559 16.9224 4.15336L0.0432184 95.0978C-0.0358548 95.5202 -0.00617406 95.9521 0.130215 96.3638C0.266604 96.7755 0.506453 97.1571 0.833212 97.4824C1.15997 97.8076 1.56586 98.0687 2.02288 98.2477C2.47989 98.4267 2.97715 98.5193 3.48035 98.519H26.3062L24.6332 107.53C24.5159 108.161 24.5609 108.806 24.765 109.42C24.9691 110.035 25.3275 110.605 25.8155 111.091C26.3035 111.576 26.9095 111.966 27.5919 112.234C28.2742 112.501 29.0167 112.64 29.7682 112.64H50.8547C54.4078 112.64 57.4225 110.458 57.994 107.495L58.2011 106.579L62.1765 85.1579L62.425 84.0034L62.4333 83.9541C62.5402 83.3703 62.8898 82.8384 63.4186 82.4548C63.9473 82.0712 64.6203 81.8614 65.3155 81.8634H68.4628C78.9481 81.8634 88.5472 80.0612 96.1668 75.4573C99.3058 73.5567 102.064 71.2125 104.391 68.3826C108.256 63.8092 110.757 58.5067 111.679 52.9307C113.684 44.1593 112.756 36.3454 106.959 30.7278C105.171 29.0327 103.039 27.6257 100.664 26.5744L99.8856 26.145V26.138ZM37.628 62.0892C38.4487 61.7247 39.3607 61.534 40.2866 61.533H52.1799C75.5358 61.533 93.8147 53.4798 99.1567 30.1646L99.1816 30.052C100.979 30.9249 102.494 31.9527 103.72 33.1353C108.242 37.521 109.344 43.9411 107.447 52.2126C105.194 62.0469 100.275 68.453 93.6739 72.4444C87.0315 76.457 78.418 78.1817 68.471 78.1817H65.3238C63.6041 78.1798 61.9399 78.6989 60.63 79.6459C59.32 80.5929 58.45 81.9057 58.1762 83.3487L57.9278 84.5032L53.9523 105.925L53.7535 106.84L53.7452 106.868C53.6349 107.45 53.2841 107.979 52.7559 108.361C52.2276 108.743 51.5565 108.953 50.863 108.952H29.7764C29.649 108.952 29.523 108.929 29.4071 108.884C29.2913 108.838 29.1884 108.772 29.1056 108.69C29.0229 108.608 28.9622 108.511 28.9279 108.407C28.8936 108.302 28.8864 108.193 28.9068 108.086L30.6295 98.7936L37.628 62.0892Z"
                                  fill="#424252"
                                  class="svg-path"
                                />
                              </svg>
                            </div>
                            <div class="text-center">
                              <label class="form-check-label" for="flexRadioDefault2">
                                Paypal
                              </label>
                            </div>
                          </div>

                          <div class="card-body">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="cardId"
                                id="cardId"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="  col-lg-3">
                      <div class="card border-0" style="width: 100%; box-shadow: none;">
                        <div
                          class="d-flex flex-column justify-content-center align-items-center"
                        >
                          <div class="px-4 py-4 imgdiv rounded-4">
                            <div class="mb-3">
                              <svg
                                class="img-fluid"
                                width="150"
                                height="120"
                                viewBox="0 0 97 119"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M92.7564 62.8481C92.6999 53.2131 97.0653 45.9515 105.881 40.5971C100.95 33.5333 93.491 29.6482 83.6582 28.8994C74.3481 28.1648 64.1621 34.3244 60.4324 34.3244C56.4908 34.3244 47.4774 29.1537 40.3853 29.1537C25.7491 29.3798 10.1946 40.8231 10.1946 64.1054C10.1946 70.9856 11.452 78.0918 13.9667 85.4099C17.3291 95.0449 29.4506 118.652 42.0948 118.271C48.7065 118.115 53.3827 113.58 61.9864 113.58C70.3359 113.58 74.6589 118.271 82.0335 118.271C94.7907 118.087 105.754 96.6272 108.947 86.9639C91.8381 78.897 92.7564 63.3425 92.7564 62.8481ZM77.9083 19.7589C85.071 11.2541 84.4211 3.51214 84.2092 0.729004C77.88 1.09632 70.5619 5.03792 66.3943 9.88369C61.8028 15.0826 59.1044 21.5107 59.6836 28.7582C66.5214 29.2809 72.7658 25.7631 77.9083 19.7589Z"
                                  fill="#424252"
                                  class="svg-path"
                                />
                              </svg>
                            </div>
                            <div class="text-center">
                              <label class="form-check-label" for="flexRadioDefault2">
                                Apple Pay
                              </label>
                            </div>
                          </div>

                          <div class="card-body">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="cardId"
                                id="cardId"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="container">
                  <div class="row">
                    <div class="header-left mb-3 mt-4"><h2>Add a New Card</h2></div>
                    <div class="col-md-6 mb-3">
                      <div class="form-floating">
                        <input
                          type="number"
                          class="form-control bg-form-color-second"
                          id="cardNumber"
                          placeholder="Card Number"
                        />
                        <label for="floatingInputGrid">Card Number</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-floating">
                        <input
                          type="text"
                          class="form-control bg-form-color-second"
                          id="cardholder"
                          placeholder="Cardholder Name"
                        />
                        <label for="floatingSelectGrid">Cardholder Name</label>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-md-6">
                      <div class="row justify-content-center mb-3">
                        <div class="col-md-5">
                          <div class="form-floating">
                            <select class="form-select bg-form-color-second" aria-label="year">
                              <option selected class="bg-form-color-second">MM</option>
                            </select>
                            <label for="floatingInputGrid">Select Month</label>
                          </div>
                        </div>
                        <div class="col-md-2 p-3 text-center">/</div>
                        <div class="col-md-5">
                          <div class="form-floating">
                            <select class="form-select bg-form-color-second" aria-label="month">
                              <option selected>YY</option>
                            </select>
                            <label for="floatingInputGrid">Select Year</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input
                          type="number"
                          class="form-control bg-form-color-second"
                          id="cvv"
                          placeholder="CVV"
                        />
                        <label for="floatingSelectGrid">CVV</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="flexCheckChecked"
                      checked
                    />
                    <label class="form-check-label" for="flexCheckChecked">
                      Save Card Details
                    </label>
                  </div>
                  <hr class="mt-5" />
                  <div class="col d-flex justify-content-sm-end justify-content-center mb-4">
                    <button class="btn btn-outline-primary px-lg-4 me-2 nowrap" >Cancel</button>
                    <button
                      class="btn px-5 text-light"
                      style="background-color: #758aff; font-family: poppins;"
                    >
                      Save & Confirm
                    </button>
                  </div>
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
                <button type="button"class="border-0 bg-white py-0"  data-bs-toggle="modal" data-bs-target="#info"><i class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
               </div>
             </div>
             <!-- Language button -->
             <div class="mx-2 modal-box mb-2 rounded">
              <div class="d-flex justify-content-between align-items-center gap-3 px-2">
               <p class="pt-3">
                 <span><img src= "assets/img/mdi_language.png"></i></span>
                 Language
               </p>
               <button type="button"class="border-0 bg-white py-0"  data-bs-toggle="modal" data-bs-target="#language"><i class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
              </div>
             </div>
              <!--Currency  button  -->
              <div class="mx-2 modal-box mb-2 rounded">
                <div class="d-flex justify-content-between align-items-center gap-3 px-2">
                 <p class="pt-3">
                   <span><img src= "assets/img/ic_round-currency-yen.png"></i></span>
                   Currency

                 </p>

                 <button type="button"class="border-0 bg-white py-0"  data-bs-toggle="modal" data-bs-target="#currency"><i class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
                </div>
              </div>
              <!-- Change password button -->

              <div class="mx-2 modal-box mb-2 rounded">
                <div class="d-flex justify-content-between align-items-center gap-3 px-2">
                 <p class="pt-3">
                   <span><img src= "assets/img/carbon_password.png"></span>
                   Change Password
                 </p>
                 <button type="button"class="border-0 bg-white py-0"  data-bs-toggle="modal" data-bs-target="#changePs"><i class="fa-solid fa-chevron-right text-secondary ps-5"></i></button>
                </div>
              </div>

                <form action="">
                  <div class="mx-2 modal-box rounded">
                    <div class="pt-3 form-check form-switch form-check-reverse d-flex justify-content-between mx-2 py-2 mb-2 ps-0">
                      <label class="form-check-label" for="flexSwitchCheckReverse">
                       <span><img src="assets/img/images/images/auth.png" class="img-fluid me-2" width="20" alt=""></span> Biometric Auth input</label>
                      <input class="form-check-input  text-white " type="checkbox" id="flexSwitchCheckReverse">
                    </div>
                  </div>
                  <div class="mx-2 modal-box rounded">
                    <div class="pt-3 form-check form-switch form-check-reverse d-flex justify-content-between mx-2 py-2 mb-2 ps-0">
                      <label class="form-check-label" for="flexSwitchCheckReverse2">
                        <span><img src="assets/img/images/images/Vector-removebg-preview.png" class="img-fluid me-1" width="22" alt=""></span>
                        Two Factor Auth.</label>

                      <input class="form-check-input  text-white " type="checkbox" id="flexSwitchCheckReverse3">

                    </div>
                  </div>
                  <div class="mx-2 modal-box mb-2 rounded">
                    <div class="pt-3 form-check form-switch form-check-reverse d-flex justify-content-between mx-2 py-2 ps-0">
                      <label class="form-check-label" for="flexSwitchCheckReverse3">
                       <span><i class="fa-regular fa-envelope fs-5 me-2"></i></span> Email Notification</label>
                      <input class="form-check-input  text-white " type="checkbox" id="flexSwitchCheckReverse3">
                    </div>
                  </div>
                  <div class="py-2 mx-2 modal-box mb-1 rounded">
                    <button type="button" class="btn w-100 text-start text-danger" >
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
     <a href="#">  <p>Change</p></a>

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
          <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
            <p class="pt-2">
              <img src="assets/img/images/images/PK.png" class="img-fluid me-3" width="20" alt="">
               Pakistan
            </p>
             <p class="text-secondary pt-2">(اردو)</p>
          </a>
       </li>
       <li style="list-style: none;">
          <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
            <p class="pt-2">
              <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3" width="20" alt="">
               Iran
            </p>
            <p class="text-secondary pt-2">(فارسی)</p>
          </a>
       </li>
       <li style="list-style: none;">
        <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
          <p class="pt-2">
            <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20" alt="">
            English (UK)
          </p>
          <p class="text-secondary pt-2">(English)</p>
        </a>
       </li>
       <li style="list-style: none;">
        <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
          <p class="pt-2">
            <img src="assets/img/images/images/PK.png" class="img-fluid me-3" width="20" alt="">
             Pakistan
          </p>
           <p class="text-secondary pt-2">(اردو)</p>
        </a>
       </li>
       <li style="list-style: none;">
        <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
          <p class="pt-2">
            <img src="assets/img/images/images/PK.png" class="img-fluid me-3" width="20" alt="">
             Pakistan
          </p>
           <p class="text-secondary pt-2">(اردو)</p>
        </a>
       </li>
       <li style="list-style: none;">
        <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
          <p class="pt-2">
            <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20" alt="">
            English (UK)
          </p>
          <p class="text-secondary pt-2">(English)</p>
        </a>
       </li>
       <li style="list-style: none;">
        <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
          <p class="pt-2">
            <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20" alt="">
            English (UK)
          </p>
          <p class="text-secondary pt-2">(English)</p>
        </a>
       </li>
       <li style="list-style: none;">
        <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
          <p class="pt-2">
            <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20" alt="">
             Iran
          </p>
          <p class="text-secondary pt-2">(فارسی)</p>
        </a>
     </li>
     <li style="list-style: none;">
      <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
        <p class="pt-2">
          <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3" width="20" alt="">
           Iran
        </p>
        <p class="text-secondary pt-2">(فارسی)</p>
      </a>
     </li>
     <li style="list-style: none;">
      <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
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
          <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
            <p class="pt-3">
              <img src="assets/img/images/images/PK.png" class="img-fluid me-3" width="20" alt="">
               Pakistan
            </p>
             <p class="text-secondary pt-2">PKR</p>
          </a>
       </li>
       <li style="list-style: none;">
          <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
            <p class="pt-3">
              <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3" width="20" alt="">
               Iran
            </p>
            <p class="text-secondary pt-2">Rial</p>
          </a>
       </li>
       <li style="list-style: none;">
        <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
          <p class="pt-3">
            <img src="assets/img/images/images/uk.png" class="img-fluid me-3" width="20" alt="">
            English (UK)
          </p>
          <p class="text-secondary pt-2">GBP</p>
        </a>
       </li>
       <li style="list-style: none;">
        <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
          <p class="pt-3">
            <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3" width="20" alt="">
             Iran
          </p>
          <p class="text-secondary pt-2">Rial</p>
        </a>
     </li>
     <li style="list-style: none;">
      <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
        <p class="pt-3">
          <img src="assets/img/images/images/IR (1).png" class="img-fluid me-3" width="20" alt="">
           Iran
        </p>
        <p class="text-secondary pt-2">Rial</p>
      </a>
     </li>
     <li style="list-style: none;">
      <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
        <p class="pt-3">
          <img src="assets/img/images/images/PS.png" class="img-fluid me-3" width="20" alt="">
          Palestine
        </p>
        <p class="text-secondary pt-2">JOD</p>
      </a>
     </li>
     <li style="list-style: none;">
      <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
        <p class="pt-3">
          <img src="assets/img/images/images/PS.png" class="img-fluid me-3" width="20" alt="">
          Palestine
        </p>
        <p class="text-secondary pt-2">JOD</p>
      </a>
     </li style="list-style: none;">
      <a class="dropdown-item language d-flex justify-content-between align-items-center py-0 rounded mb-2" href="#">
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
