<link rel="shortcut icon" href="./assets/img/sub-tracker-images/logo/logo-1.png" />
<link rel="stylesheet" href="assets/css/style.css" />

<link
  rel="stylesheet"
  href="assets/plugins/bootstrap/css/bootstrap.min.css"
/>

<link
  rel="stylesheet"
  href="assets/plugins/fontawesome/css/fontawesome.min.css"
/>
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

<link rel="stylesheet" href="assets/css/animate.min.css" />

<link rel="stylesheet" href="assets/css/admin.css" />
<link rel="stylesheet" href="assets/css/style.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.13.0/d3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script
  src="https://kit.fontawesome.com/c4e7cb26f8.js"
  crossorigin="anonymous"
></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/c4e7cb26f8.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



<style>
    .single-line-input {
    border: none;
    border-bottom: 1px solid #4242524D;
    outline: none;
    padding: 7px;
    font-size: 16px;
    width: 100%;
    /* max-width: 483px;  */
    background-color: transparent;
}

.btn-custom {
    /* width: 491px;
height: 55px; */
padding: 10px 18px 10px 18px;
gap: 8px;
border-radius: 8px;
border: 1px;
background: #758AFF;
border: 1px solid #758AFF;
box-shadow: 0px 1px 2px 0px #1018280D;
/* font-family: "Poppins"; */
font-size: 20px;
font-weight: 500;
line-height: 24px;
color: #FFFFFF;
}
.forgotpassword {
    width: 100%;
    max-width: 609.8px;
/* height: 711.12px; */
height: auto;
}



.forgotpwdimg-pdcust {
    padding-top: 200px;
}

.forgotpwd-h1 {
    /* font-family: "Poppins"; */
font-size: 40px;
font-weight: 500;
line-height: 60px;

color: #000000;

}

.border-dark-custom {
    box-shadow: 0px 0px 4px 0px #00000040;
}

.section {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.4) 45.19%, rgba(207, 207, 252, 0) 137.36%);

        }

        .logoforgot-cust {
    padding-top: 355px;
    /* width: 100%; */
    /* width: 190px; */
    /* height: 92px; */
    height: auto;
    padding-bottom: 78px;



    width: 260px;
/* height: 167px; */


}
.text-gray{
    font-size: 20px;
    font-weight: 400;
    line-height: 30px;
    color:#999999;
}


.py-5-custom {

    padding-block: 20px;
    margin-bottom: 50px !important;
}


.forgotpwd-h5 {
    /* font-family: Poppins; */
font-size: 16px;
font-weight: 400;
line-height: 30px;
color: #1C1C23;
}

.text-beforegrey{
    /* font-family: Poppins; */
font-size: 15px;
font-weight: 400;
line-height: 22.5px;
text-align: center;
color: #424252;

}

.text-greynot {

    color: #000000;

}

.border-dark-custom {
    box-shadow: 0px 0px 4px 0px #00000040;
}

.password-toggle {
    cursor: pointer;
    margin-left: -30px;
    color: #808080; }

.password-toggle i {
    font-size: 18px;
}

.btn-apple {
            background-color: black;

        }

        .btn-google {
            border: 1px solid #D0D5DD;
            background: #FFFFFFB2;
            box-shadow: 0px 1px 2px 0px #1018280D;
            color:  #344054;

        }



/* .custom-imgsize {
    width: 380px;
height: 167px;

} */


.logoforgot-cust1 {
    position: relative;
    /* width: 100%; */
    /* max-width: 380px; */
    /* height: 167px; */
}


.logoforgot-cust2 {
    position: absolute;
    bottom: 0;
    left: 0 ;
    width: 150px !important;
    /* top: 636px; */


}

.custom-chkbxtxt {

    font-size: 14px;
    line-height: 20px;
    color: rgba(66, 66, 82, 1);
}


.get {

    /* margin-left: 90px; */
    font-size: 13px;
}

.logologimnpagesside{
    width: 300px !important;
}

@media(max-width:768px)
{
    .forgotpwd-h1 {
    /* font-family: "Poppins"; */
    font-size: 34px;
    font-weight: 500;
    line-height: 60px;
    color: #000000;
}
}
    </style>

<main>
    <!--CREATE ACCOUNT-->

     <div class="container">

            <div class="row">

                <div class="col-lg-6 d-flex align-items-center justify-content-center logoforgot-cust1">
                    <div class="text-center ">
                        <img src="./assets/img/forgotpwd/logoforgot.png" class="img-fluid logologimnpagesside" alt="">
                        <img src="./assets/img/forgotpwd/signin.png" class="img-fluid logoforgot-cust2" alt="">
                    </div>
                </div>


               <div class="col-lg-6">
                <div class="text-center mt-5">
                    @if (session('status'))
                    <div>
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div>
                        <div>{{ __('Whoops! Something went wrong.') }}</div>

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="border border-dark-custom rounded py-5-custom px-3 px-md-5 py-5">
                        <h1 class="forgotpwd-h1">Welcome Back</h1>
                        <h5 class=" text-gray mb-3"  style="font-size: 14px;
                        font-weight: 400;
                        color:rgb(155, 154, 154);;
                        font-family: Poppins ;">Welcome back! Please enter your details </h5>
                        <form method="POST" action="{{ route('login') }}">

                            @csrf
                        <div class="text-left mb-2 d-flex align-items-center">
                            <input type="text" class="single-line-input w-100" placeholder="Email" name="email">
                        </div>
                        <div class="text-left mb-4 d-flex align-items-center">
                            <input type="password" class="single-line-input w-100" id="passwordInput" placeholder="Password"  name="password">
                            <span class="password-toggle" onclick="togglePasswordVisibility('passwordInput')"><i class="fas fa-eye"></i></span>
                        </div>





                        <div class="d-md-flex justify-content-md-between ">
                            <div class="me-2 mb-2 mb-md-0">
                                <div class="form-check w-100">
                                    <input type="checkbox" class="form-check-input me-2" id="exampleCheck1">
                                    <label class="form-check-label Custom-font-size custom-chkbxtxt" for="exampleCheck1"  style="font-size: 14px;
                                    font-weight: 400;
                                    color:rgb(107, 103, 103);;
                                    font-family: Poppins ;">Remember for 30 days</label>
                                </div>
                            </div>
                            <div>
                                <a href="ForgotPasword.html" class="text-primary-cust get">Forgot Password?</a>
                            </div>
                        </div>



                        <div class="d-grid mt-4">
                            <button class="btn-custom" type="submit"> Sign In  </button>
                        </div>
                        </form>


                        <div class="d-grid mt-4">
                            <button class="btn-custom d-flex align-items-center justify-content-center btn-google" type="submit">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;">
                                    <g clip-path="url(#clip0_161_2675)">
                                        <path d="M24.266 12.9471C24.266 12.1314 24.1999 11.3113 24.0588 10.5088H12.74V15.1298H19.2217C18.9528 16.6201 18.0885 17.9385 16.823 18.7763V21.7746H20.69C22.9608 19.6846 24.266 16.5981 24.266 12.9471Z" fill="#4285F4"/>
                                        <path d="M12.74 24.6712C15.9764 24.6712 18.7058 23.6086 20.6944 21.7743L16.8274 18.776C15.7516 19.5079 14.3626 19.9224 12.7444 19.9224C9.61376 19.9224 6.95934 17.8103 6.00693 14.9707H2.01648V18.0616C4.05359 22.1138 8.20278 24.6712 12.74 24.6712Z" fill="#34A853"/>
                                        <path d="M6.00253 14.9716C5.49987 13.4812 5.49987 11.8674 6.00253 10.3771V7.28613H2.01649C0.31449 10.6769 0.31449 14.6718 2.01649 18.0625L6.00253 14.9716Z" fill="#FBBC04"/>
                                        <path d="M12.74 5.42056C14.4508 5.3941 16.1043 6.03787 17.3433 7.21957L20.7694 3.79351C18.6 1.7564 15.7207 0.636432 12.74 0.671707C8.20277 0.671707 4.05359 3.22912 2.01648 7.28571L6.00252 10.3766C6.95052 7.53263 9.60935 5.42056 12.74 5.42056Z" fill="#EA4335"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_161_2675">
                                            <rect width="24" height="24" fill="white" transform="translate(0.5 0.670898)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                Sign In with Google
                            </button>
                        </div>



                        <div class="d-grid mt-4">
                            <button class="btn-custom btn-apple" type="submit" style="display: flex; align-items: center; justify-content: center;">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;">
                                    <g clip-path="url(#clip0_161_2678)">
                                        <path d="M19.2071 13.3466C19.1957 11.4034 20.0762 9.93886 21.8541 8.85898C20.8597 7.43435 19.3553 6.6508 17.3722 6.49979C15.4945 6.35163 13.4402 7.59391 12.688 7.59391C11.8931 7.59391 10.0752 6.55108 8.64491 6.55108C5.69307 6.59667 2.55603 8.90457 2.55603 13.6002C2.55603 14.9878 2.80961 16.4209 3.31678 17.8969C3.99491 19.8401 6.43958 24.6012 8.98967 24.5242C10.3231 24.4929 11.2662 23.5783 13.0014 23.5783C14.6854 23.5783 15.5572 24.5242 17.0445 24.5242C19.6174 24.4872 21.8285 20.1592 22.4724 18.2103C19.0219 16.5833 19.2071 13.4463 19.2071 13.3466ZM16.2126 4.65632C17.6571 2.94106 17.5261 1.37966 17.4833 0.818359C16.2069 0.89244 14.7309 1.68739 13.8904 2.66468C12.9644 3.71321 12.4202 5.00963 12.537 6.4713C13.916 6.57672 15.1754 5.86726 16.2126 4.65632Z" fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_161_2678">
                                            <rect width="24" height="24" fill="white" transform="translate(0.5 0.670898)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                Sign In with Apple
                            </button>
                        </div>


                        <div class="text-center mb-4 mt-3">
                            <h5 class="text-beforegrey"  style="font-size: 14px;
                            font-weight: 400;
                            color:rgb(114, 110, 110);;
                            font-family: Poppins ;">Don’t have an account?
                                <a href="{{route('user.createAccount')}}" class="text-greynot">
                                    SIGN UP
                                </a>
                            </h5>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</main>




<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
     <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
     <script src="assets/libs/headhesive/dist/headhesive.min.js"></script>

     <!-- Theme JS -->
     <script src="assets/js/theme.min.js"></script>

     <script src="assets/js/vendors/password.js"></script>

     <script>
        function togglePasswordVisibility(inputId) {
        const passwordInput = document.getElementById(inputId);
        const passwordToggle = passwordInput.nextElementSibling;

        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        passwordToggle.querySelector('i').classList.toggle('fa-eye-slash');
    }
    </script>
