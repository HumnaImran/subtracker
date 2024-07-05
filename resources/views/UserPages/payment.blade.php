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
      <div class="header-left"><h1>Payment</h1></div>
      <ul class="nav user-menu">
        <li class="nav-item dropdown noti-dropdown me-2">
          <a
            href="#"
            class="dropdown-toggle nav-link"
            data-bs-toggle="dropdown"
          >
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
      <div class="content container-fluid" style="margin-left: 2rem;">
          <div class="container mt-1" style="padding-right: 2rem;">
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
                    <div class="col col-lg-3">
                      <div class="card border-0" style=" box-shadow: none;">
                        <div
                          class="d-flex flex-column justify-content-center align-items-center"
                        >
                          <div class="px-5 py-4 imgdiv rounded-4">
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
                                checked
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-3">
                      <div class="card border-0" style="box-shadow: none;">
                        <div
                          class="d-flex flex-column justify-content-center align-items-center"
                        >
                          <div class="px-5 py-4 imgdiv rounded-4">
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
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col col-lg-3">
                      <div class="card border-0" style="  box-shadow: none;">
                        <div
                          class="d-flex flex-column justify-content-center align-items-center"
                        >
                          <div class="px-5 py-4 imgdiv rounded-4">
                            <div class="mb-3">
                              <svg
                                class="img-fluid"
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

                    <div class="col col-lg-3">
                      <div class="card border-0" style="  box-shadow: none;">
                        <div
                          class="d-flex flex-column justify-content-center align-items-center"
                        >
                          <div class="px-5 py-4 imgdiv rounded-4">
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
              </div>

              <div class="row">
                <div class="d-flex justify-content-between mb-3">
                  <h5>Manage Cards</h5>
                  <a href="add-card.html"><button class="btn px-4 text-light" style="background-color: #758aff"><i class="fa-solid fa-plus"></i>
                      Add Card
                    </button></a>

                </div>
                <div class="container" style="padding-left: 2rem;">
                  <div class="row my-3">
                    <div class="col-12 col-sm-3 col-md-2 col-lg-2 col-xl-1 mb-3 d-flex">
                      <div class="form-check pt-2 p-sm-2">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="cardmethod"
                          id="cardId"
                        />
                      </div>
                      <div class="svg-bg">
                        <svg
                          class="img-fluid"
                          width="40"
                          height="40"
                          viewBox="0 0 60 38"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M63.5 19.0001C63.5 29.4001 55.0999 37.9001 44.5999 37.9001C34.1999 37.9001 25.7 29.4001 25.7 19.0001C25.7 8.6001 34.1 0.100098 44.5 0.100098C55.1 0.100098 63.5 8.6001 63.5 19.0001Z"
                            fill="#FFB600"
                          />
                          <path
                            d="M44.5999 0.100098C54.9999 0.100098 63.5 8.6001 63.5 19.0001C63.5 29.4001 55.0999 37.9001 44.5999 37.9001C34.1999 37.9001 25.7 29.4001 25.7 19.0001"
                            fill="#F7981D"
                          />
                          <path
                            d="M44.6001 0.100098C55.0001 0.100098 63.5001 8.6001 63.5001 19.0001C63.5001 29.4001 55.1001 37.9001 44.6001 37.9001"
                            fill="#FF8500"
                          />
                          <path
                            d="M19.2 0.100098C8.9 0.200098 0.5 8.6001 0.5 19.0001C0.5 29.4001 8.9 37.9001 19.4 37.9001C24.3 37.9001 28.7 36.0001 32.1 33.0001C32.8 32.4001 33.4 31.7001 34 31.0001H30.1C29.6 30.4001 29.1 29.7001 28.7 29.1001H35.4C35.8 28.5001 36.2 27.8001 36.5 27.1001H27.6C27.3 26.5001 27 25.8001 26.8 25.1001H37.2C37.8 23.2001 38.2 21.2001 38.2 19.1001C38.2 17.7001 38 16.4001 37.8 15.1001H26.2C26.3 14.4001 26.5 13.8001 26.7 13.1001H37.1C36.9 12.4001 36.6 11.7001 36.3 11.1001H27.5C27.8 10.4001 28.2 9.8001 28.6 9.1001H35.3C34.9 8.4001 34.4 7.7001 33.8 7.1001H30.1C30.7 6.4001 31.3 5.8001 32 5.2001C28.7 2.1001 24.2 0.300097 19.3 0.300097C19.3 0.100097 19.3 0.100098 19.2 0.100098Z"
                            fill="#FF5050"
                          />
                          <path
                            d="M0.5 19.0003C0.5 29.4003 8.9 37.9003 19.4 37.9003C24.3 37.9003 28.7 36.0003 32.1 33.0003C32.8 32.4003 33.4 31.7003 34 31.0003H30.1C29.6 30.4003 29.1 29.7003 28.7 29.1003H35.4C35.8 28.5003 36.2 27.8003 36.5 27.1003H27.6C27.3 26.5003 27 25.8003 26.8 25.1003H37.2C37.8 23.2003 38.2 21.2003 38.2 19.1003C38.2 17.7003 38 16.4003 37.8 15.1003H26.2C26.3 14.4003 26.5 13.8003 26.7 13.1003H37.1C36.9 12.4003 36.6 11.7003 36.3 11.1003H27.5C27.8 10.4003 28.2 9.80029 28.6 9.10029H35.3C34.9 8.40029 34.4 7.70029 33.8 7.10029H30.1C30.7 6.40029 31.3 5.80029 32 5.20029C28.7 2.10029 24.2 0.300293 19.3 0.300293H19.2"
                            fill="#E52836"
                          />
                          <path
                            d="M19.4 37.9003C24.3 37.9003 28.6999 36.0003 32.0999 33.0003C32.7999 32.4003 33.4 31.7003 34 31.0003H30.1C29.6 30.4003 29.1 29.7003 28.7 29.1003H35.4C35.8 28.5003 36.2 27.8003 36.5 27.1003H27.6C27.3 26.5003 26.9999 25.8003 26.7999 25.1003H37.2C37.8 23.2003 38.2 21.2003 38.2 19.1003C38.2 17.7003 38 16.4003 37.7999 15.1003H26.2C26.3 14.4003 26.5 13.8003 26.7 13.1003H37.0999C36.8999 12.4003 36.5999 11.7003 36.2999 11.1003H27.5C27.8 10.4003 28.2 9.80029 28.6 9.10029H35.2999C34.9 8.40029 34.4 7.70029 33.7999 7.10029H30.1C30.7 6.40029 31.3 5.80029 32 5.20029C28.7 2.10029 24.1999 0.300293 19.2999 0.300293H19.2"
                            fill="#CB2026"
                          />
                          <path
                            d="M26.1 23.8L26.4 22.1C26.3 22.1 26.1 22.2 25.9 22.2C25.1999 22.2 25.1 21.8 25.2 21.6L25.7999 18.1H26.9L27.2 16.2H26.2L26.4 15H24.4C24.4 15 23.2 21.6 23.2 22.4C23.2 23.6 23.8999 24.1 24.7999 24.1C25.3999 24.1 25.9 23.9 26.1 23.8Z"
                            fill="white"
                          />
                          <path
                            d="M26.8 20.6001C26.8 23.4001 28.7 24.1001 30.3 24.1001C31.8 24.1001 32.4001 23.8001 32.4001 23.8001L32.8 21.9001C32.8 21.9001 31.7001 22.4001 30.7001 22.4001C28.5001 22.4001 28.9 20.8001 28.9 20.8001H33C33 20.8001 33.3 19.5001 33.3 19.0001C33.3 17.7001 32.6 16.1001 30.4 16.1001C28.3 15.9001 26.8 18.1001 26.8 20.6001ZM30.3 17.7001C31.4 17.7001 31.2001 19.0001 31.2001 19.1001H29C29 19.0001 29.2 17.7001 30.3 17.7001Z"
                            fill="white"
                          />
                          <path
                            d="M43 23.8001L43.4 21.6001C43.4 21.6001 42.4 22.1001 41.7 22.1001C40.3 22.1001 39.7 21.0001 39.7 19.8001C39.7 17.4001 40.9 16.1001 42.3 16.1001C43.3 16.1001 44.1 16.7001 44.1 16.7001L44.4 14.6001C44.4 14.6001 43.2 14.1001 42.1 14.1001C39.8 14.1001 37.5 16.1001 37.5 19.9001C37.5 22.4001 38.7 24.1001 41.1 24.1001C41.9 24.1001 43 23.8001 43 23.8001Z"
                            fill="white"
                          />
                          <path
                            d="M15.1 15.8999C13.7 15.8999 12.7 16.2999 12.7 16.2999L12.4 17.9999C12.4 17.9999 13.3 17.5999 14.6 17.5999C15.3 17.5999 15.9 17.6999 15.9 18.2999C15.9 18.6999 15.8 18.7999 15.8 18.7999C15.8 18.7999 15.2 18.7999 14.9 18.7999C13.2 18.7999 11.3 19.4999 11.3 21.7999C11.3 23.5999 12.5 23.9999 13.2 23.9999C14.6 23.9999 15.2 23.0999 15.3 23.0999L15.2 23.8999H17L17.8 18.3999C17.8 15.9999 15.8 15.8999 15.1 15.8999ZM15.5 20.3999C15.5 20.6999 15.3 22.2999 14.1 22.2999C13.5 22.2999 13.3 21.7999 13.3 21.4999C13.3 20.9999 13.6 20.2999 15.1 20.2999C15.4 20.3999 15.5 20.3999 15.5 20.3999Z"
                            fill="white"
                          />
                          <path
                            d="M19.7001 24.0003C20.2001 24.0003 22.7001 24.1003 22.7001 21.4003C22.7001 18.9003 20.3001 19.4003 20.3001 18.4003C20.3001 17.9003 20.7001 17.7003 21.4001 17.7003C21.7001 17.7003 22.8001 17.8003 22.8001 17.8003L23.1001 16.0003C23.1001 16.0003 22.4001 15.8003 21.2001 15.8003C19.7001 15.8003 18.2001 16.4003 18.2001 18.4003C18.2001 20.7003 20.7001 20.5003 20.7001 21.4003C20.7001 22.0003 20.0001 22.1003 19.5001 22.1003C18.6001 22.1003 17.7001 21.8003 17.7001 21.8003L17.4001 23.6003C17.5001 23.8003 18.0001 24.0003 19.7001 24.0003Z"
                            fill="white"
                          />
                          <path
                            d="M59.6 14.3003L59.2 17.0003C59.2 17.0003 58.4 16.0003 57.3 16.0003C55.5 16.0003 53.9 18.2003 53.9 20.8003C53.9 22.4003 54.7 24.1003 56.4 24.1003C57.6 24.1003 58.3 23.3003 58.3 23.3003L58.2 24.0003H60.2L61.7 14.4003L59.6 14.3003ZM58.7 19.6003C58.7 20.7003 58.2 22.1003 57.1 22.1003C56.4 22.1003 56 21.5003 56 20.5003C56 18.9003 56.7 17.9003 57.6 17.9003C58.3 17.9003 58.7 18.4003 58.7 19.6003Z"
                            fill="white"
                          />
                          <path
                            d="M4.20005 23.9003L5.40005 16.7003L5.60005 23.9003H7.00005L9.60005 16.7003L8.50005 23.9003H10.6L12.2 14.3003H8.90005L6.90005 20.2003L6.80005 14.3003H3.90005L2.30005 23.9003H4.20005Z"
                            fill="white"
                          />
                          <path
                            d="M35.2 23.9001C35.8 20.6001 35.9 17.9001 37.3 18.4001C37.5 17.1001 37.8 16.6001 38 16.1001C38 16.1001 37.9 16.1001 37.6 16.1001C36.7 16.1001 36 17.3001 36 17.3001L36.2 16.2001H34.3L33 24.0001H35.2V23.9001Z"
                            fill="white"
                          />
                          <path
                            d="M47.6 15.8999C46.2 15.8999 45.2001 16.2999 45.2001 16.2999L44.9001 17.9999C44.9001 17.9999 45.8 17.5999 47.1 17.5999C47.8 17.5999 48.4001 17.6999 48.4001 18.2999C48.4001 18.6999 48.3 18.7999 48.3 18.7999C48.3 18.7999 47.7001 18.7999 47.4001 18.7999C45.7001 18.7999 43.8 19.4999 43.8 21.7999C43.8 23.5999 45.0001 23.9999 45.7001 23.9999C47.1001 23.9999 47.7 23.0999 47.8 23.0999L47.7001 23.8999H49.5L50.3 18.3999C50.4 15.9999 48.3 15.8999 47.6 15.8999ZM48.1 20.3999C48.1 20.6999 47.9001 22.2999 46.7001 22.2999C46.1001 22.2999 45.9001 21.7999 45.9001 21.4999C45.9001 20.9999 46.2001 20.2999 47.7001 20.2999C48.0001 20.3999 48 20.3999 48.1 20.3999Z"
                            fill="white"
                          />
                          <path
                            d="M52 23.9001C52.6 20.6001 52.7 17.9001 54.1 18.4001C54.3 17.1001 54.6 16.6001 54.8 16.1001C54.8 16.1001 54.7001 16.1001 54.4001 16.1001C53.5001 16.1001 52.8 17.3001 52.8 17.3001L53 16.2001H51.1L49.8 24.0001H52V23.9001Z"
                            fill="white"
                          />
                          <path
                            d="M23 22.4C23 23.6 23.7 24.1 24.6 24.1C25.3 24.1 25.9 23.9 26.1 23.8L26.4 22.1C26.3 22.1 26.1 22.2 25.9 22.2C25.2 22.2 25.1 21.8 25.2 21.6L25.8 18.1H26.9L27.2 16.2H26.2L26.4 15"
                            fill="#DCE5E5"
                          />
                          <path
                            d="M27.8 20.6001C27.8 23.4001 28.7 24.1001 30.3 24.1001C31.8 24.1001 32.4001 23.8001 32.4001 23.8001L32.8 21.9001C32.8 21.9001 31.7001 22.4001 30.7001 22.4001C28.5001 22.4001 28.9 20.8001 28.9 20.8001H33C33 20.8001 33.3 19.5001 33.3 19.0001C33.3 17.7001 32.6 16.1001 30.4 16.1001C28.3 15.9001 27.8 18.1001 27.8 20.6001ZM30.3 17.7001C31.4 17.7001 31.6 19.0001 31.6 19.1001H29C29 19.0001 29.2 17.7001 30.3 17.7001Z"
                            fill="#DCE5E5"
                          />
                          <path
                            d="M43 23.8001L43.4 21.6001C43.4 21.6001 42.4 22.1001 41.7 22.1001C40.3 22.1001 39.7 21.0001 39.7 19.8001C39.7 17.4001 40.9 16.1001 42.3 16.1001C43.3 16.1001 44.1 16.7001 44.1 16.7001L44.4 14.6001C44.4 14.6001 43.2 14.1001 42.1 14.1001C39.8 14.1001 38.5 16.1001 38.5 19.9001C38.5 22.4001 38.7 24.1001 41.1 24.1001C41.9 24.1001 43 23.8001 43 23.8001Z"
                            fill="#DCE5E5"
                          />
                          <path
                            d="M12.4 18.1001C12.4 18.1001 13.3 17.7001 14.6 17.7001C15.3 17.7001 15.9 17.8001 15.9 18.4001C15.9 18.8001 15.8 18.9001 15.8 18.9001C15.8 18.9001 15.2 18.9001 14.9 18.9001C13.2 18.9001 11.3 19.6001 11.3 21.9001C11.3 23.7001 12.5 24.1001 13.2 24.1001C14.6 24.1001 15.2 23.2001 15.3 23.2001L15.2 24.0001H17L17.8 18.5001C17.8 16.2001 15.8 16.1001 15 16.1001M16.5 20.4001C16.5 20.7001 15.3 22.3001 14.1 22.3001C13.5 22.3001 13.3 21.8001 13.3 21.5001C13.3 21.0001 13.6 20.3001 15.1 20.3001C15.4 20.4001 16.5 20.4001 16.5 20.4001Z"
                            fill="#DCE5E5"
                          />
                          <path
                            d="M17.5 23.8003C17.5 23.8003 18.1 24.0003 19.8 24.0003C20.3 24.0003 22.8 24.1003 22.8 21.4003C22.8 18.9003 20.4 19.4003 20.4 18.4003C20.4 17.9003 20.8 17.7003 21.5 17.7003C21.8 17.7003 22.9 17.8003 22.9 17.8003L23.2 16.0003C23.2 16.0003 22.5 15.8003 21.3 15.8003C19.8 15.8003 19.3 16.4003 19.3 18.4003C19.3 20.7003 20.8 20.5003 20.8 21.4003C20.8 22.0003 20.1 22.1003 19.6 22.1003"
                            fill="#DCE5E5"
                          />
                          <path
                            d="M59.2001 16.9999C59.2001 16.9999 58.4001 15.9999 57.3001 15.9999C55.5001 15.9999 54.9001 18.1999 54.9001 20.7999C54.9001 22.3999 54.7001 24.0999 56.4001 24.0999C57.6001 24.0999 58.3001 23.2999 58.3001 23.2999L58.2001 23.9999H60.2001L61.7001 14.3999M59.1001 19.5999C59.1001 20.6999 58.2001 22.0999 57.1001 22.0999C56.4001 22.0999 56.0001 21.4999 56.0001 20.4999C56.0001 18.8999 56.7001 17.8999 57.6001 17.8999C58.3001 17.8999 59.1001 18.3999 59.1001 19.5999Z"
                            fill="#DCE5E5"
                          />
                          <path
                            d="M4.20005 23.9003L5.40005 16.7003L5.60005 23.9003H7.00005L9.60005 16.7003L8.50005 23.9003H10.6L12.2 14.3003H9.70005L6.90005 20.2003L6.80005 14.3003H5.70005L2.30005 23.9003H4.20005Z"
                            fill="#DCE5E5"
                          />
                          <path
                            d="M33.1001 23.9001H35.2001C35.8001 20.6001 35.9001 17.9001 37.3001 18.4001C37.5001 17.1001 37.8001 16.6001 38.0001 16.1001C38.0001 16.1001 37.9001 16.1001 37.6001 16.1001C36.7001 16.1001 36.0001 17.3001 36.0001 17.3001L36.2001 16.2001"
                            fill="#DCE5E5"
                          />
                          <path
                            d="M44.9001 18.1001C44.9001 18.1001 45.8 17.7001 47.1 17.7001C47.8 17.7001 48.4001 17.8001 48.4001 18.4001C48.4001 18.8001 48.3 18.9001 48.3 18.9001C48.3 18.9001 47.7001 18.9001 47.4001 18.9001C45.7001 18.9001 43.8 19.6001 43.8 21.9001C43.8 23.7001 45.0001 24.1001 45.7001 24.1001C47.1001 24.1001 47.7 23.2001 47.8 23.2001L47.7001 24.0001H49.5L50.3 18.5001C50.3 16.2001 48.3 16.1001 47.5 16.1001M49 20.4001C49 20.7001 47.8 22.3001 46.6 22.3001C46 22.3001 45.8 21.8001 45.8 21.5001C45.8 21.0001 46.1 20.3001 47.6 20.3001C48 20.4001 49 20.4001 49 20.4001Z"
                            fill="#DCE5E5"
                          />
                          <path
                            d="M49.9001 23.9001H52.0001C52.6001 20.6001 52.7001 17.9001 54.1001 18.4001C54.3001 17.1001 54.6001 16.6001 54.8001 16.1001C54.8001 16.1001 54.7001 16.1001 54.4001 16.1001C53.5001 16.1001 52.8001 17.3001 52.8001 17.3001L53.0001 16.2001"
                            fill="#DCE5E5"
                          />
                        </svg>
                      </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-7 col-lg-8 col-xl-9 mb-3">
                      <input
                        type="cardNumber"
                        class="form-control"
                        id="masterCard"
                        placeholder="Master card   ****  3122"
                      />
                    </div>

                    <div class="col-12 col-sm-3 col-md-3 col-lg-2 col-xl-2 mb-3 ">
                      <a class="px-2  text-secondary hover-red" href=""
                        >Remove</a
                      >
                      <a class="px-2 text-decoration-none" href="">Edit</a>
                    </div>
                  </div>
                  <div class="row my-3">
                    <div class="col-12 col-sm-3 col-md-2 col-lg-2 col-xl-1 mb-3 d-flex">
                      <div class="form-check pt-2 p-sm-2">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="cardmethod"
                        />
                      </div>
                      <div class="svg-bg">
                        <svg
                          width="40"
                          height="40"
                          viewBox="0 0 58 65"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M30.9563 27.0182L27.519 48.1424H33.0184L36.4561 27.0182H30.9563ZM22.892 27.0182L17.6488 41.5473L17.0286 38.4187L17.029 38.4197L16.8923 37.7185C16.2578 36.3509 14.7881 33.7517 12.0129 31.5334C11.1925 30.8778 10.3654 30.3182 9.56592 29.8402L14.3312 48.1424H20.0611L28.811 27.0182H22.892ZM44.3551 32.8827C44.3551 30.4944 49.711 30.8013 52.0644 32.0981L52.8491 27.5612C52.8491 27.5612 50.4272 26.6401 47.9026 26.6401C45.1733 26.6401 38.6924 27.8337 38.6924 33.6332C38.6924 39.0912 46.2991 39.159 46.2991 42.0245C46.2991 44.89 39.4767 44.3779 37.2252 42.5703L36.407 47.3125C36.407 47.3125 38.8625 48.506 42.6153 48.506C46.3676 48.506 52.0301 46.562 52.0301 41.2741C52.0301 35.7819 44.3551 35.2704 44.3551 32.8827ZM66.7965 27.0182H62.3749C60.3332 27.0182 59.836 28.5925 59.836 28.5925L51.6346 48.1424H57.3667L58.5134 45.0049H65.5048L66.1498 48.1424H71.1994L66.7965 27.0182ZM60.0982 40.67L62.988 32.7648L64.6137 40.67H60.0982Z"
                            fill="#005BAC"
                          />
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M15.2536 29.0071C15.2536 29.0071 15.026 27.1006 12.5958 27.1006H3.76675L3.66333 27.4589C3.66333 27.4589 7.90728 28.324 11.9788 31.5653C15.8697 34.6631 17.139 38.5248 17.139 38.5248L15.2536 29.0071Z"
                            fill="#F6AC1D"
                          />
                        </svg>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-7 col-lg-8 col-xl-9 mb-3">
                      <input
                        type="cardNumber"
                        class="form-control"
                        id="masterCard"
                        placeholder="Master card   ****  3122"
                      />
                    </div>

                    <div class="col-12 col-sm-3 col-md-3 col-lg-2 col-xl-2 mb-3">
                      <a class="px-2 text-secondary hover-red" href=""
                        >Remove</a
                      >
                      <a class="px-2 text-decoration-none" href="">Edit</a>
                    </div>
                  </div>
                </div>

                <div class="d-flex flex-column">
                  <div>
                    <h5>Billing</h5>
                  </div>
                  <div
                    class="my-3 pt-3 px-4 d-flex justify-content-between subscription rounded-2"
                  >
                    <p style="color:  rgba(66, 66, 82, 1);">Yearly Subscription</p>
                    <p  style="color:  rgba(66, 66, 82, 1)";>290.95 CHF</p>
                  </div>
                  <div class="d-flex justify-content-end">
                    <button
                      class="btn px-4 py-2 text-light"
                      style="background-color: #758aff"
                    >
                      Checkout
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


<script>
    document.addEventListener("DOMContentLoaded", function () {
    let paymentRadioBtns = document.querySelectorAll('input[type="radio"][name="cardId"]');

    paymentRadioBtns.forEach((radioBtn) => {
        radioBtn.addEventListener("change", function () {
            document.querySelectorAll(".imgdiv").forEach((card) => {
                card.classList.remove("hover-card", "cardImgHover");
            });
            document.querySelectorAll(".svg-path").forEach((card) => {
                card.classList.remove("svgHover");
            });
            if (this.checked) {
                let parentCard = this.closest(".card");
                parentCard.querySelector(".imgdiv").classList.add("cardImgHover");
                let svgs = parentCard.querySelectorAll(".svg-path");
                svgs.forEach((svg) => {
                    svg.classList.add("svgHover");
                });
            }
        });
    });

    // Apply classes to the initially checked card on page load
    paymentRadioBtns.forEach((radioBtn) => {
        if (radioBtn.checked) {
            let parentCard = radioBtn.closest(".card");
            parentCard.querySelector(".imgdiv").classList.add("cardImgHover");
            let svgs = parentCard.querySelectorAll(".svg-path");
            svgs.forEach((svg) => {
                svg.classList.add("svgHover");
            });
        }
    });
});

</script>

@endsection
