<link
rel="shortcut icon"
href="assets/img/sub-tracker-images/logo/logo-1.png"
/>
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

    .section {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.4) 45.19%, rgba(207, 207, 252, 0) 137.36%);

    }

    .logoforgot-cust {
        /* width: 100%; */
        max-width: 139px;
        /* height: 82px; */
        height: auto;

    }
.single-line-input {
border: none;
border-bottom: 1px solid #4242524D;
outline: none;
padding: 5px;
font-size: 16px;
width: 100%;
max-width: 483px;
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


.py-5-custom {

padding-top: 200px;
padding-bottom: 200px;
margin-bottom: 50px !important;
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

.forgotpwd-h5 {
/* font-family: Poppins; */
font-size: 16px;
font-weight: 400;
line-height: 30px;
color: #1C1C23;



}

.timer {
/* font-family: Poppins; */
font-size: 15px;
font-weight: 300;
line-height: 22.5px;
letter-spacing: 0.22em;
text-align: center;
color: #424252;

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

</style>

<script>
function togglePasswordVisibility(inputId) {
const passwordInput = document.getElementById(inputId);
const passwordToggle = passwordInput.nextElementSibling;

const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
passwordInput.setAttribute('type', type);
passwordToggle.querySelector('i').classList.toggle('fa-eye-slash');
}
</script>


<section class="section">

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="border border-dark-custom rounded py-5-custom px-5">
                    <div class="text-center">
                        <img src="./assets/img/forgotpwd/logoforgot.png" class="w-25 mb-4 logoforgot-cust" alt="">
                        <h1 class="forgotpwd-h1"> Reset Your Password</h1>
                        <h5 class="forgotpwd-h5  mb-3" style="font-size: 16px;
                        font-weight: 300;
                        color:rgb(170, 168, 168);;
                        font-family: Poppins ;">Here’s a tip: Use a combination of numbers, uppercase, lowercase and special characters</h5>
                    </div>
                    <div class="text-left mb-4 d-flex align-items-center">
                        <input type="password" class="single-line-input" id="passwordInput" placeholder="New Password">
                        <span class="password-toggle" onclick="togglePasswordVisibility('passwordInput')"><i class="fas fa-eye"></i></span>
                    </div>

                    <div class="text-left mb-2 d-flex align-items-center">
                        <input type="password" class="single-line-input" id="confirmPasswordInput" placeholder="Confirm Password">
                        <span class="password-toggle" onclick="togglePasswordVisibility('confirmPasswordInput')"><i class="fas fa-eye"></i></span>
                    </div>


                    <div class="d-grid mt-4">
                        <button class="btn-custom" type="submit"> Reset Password  </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center forgotpwdimg-pdcust px-4">
                    <img src="./assets/img/forgotpwd/resetimg.png" class="forgotpassword img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>


    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/libs/headhesive/dist/headhesive.min.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>

    <script src="assets/js/vendors/password.js"></script>
</section>

