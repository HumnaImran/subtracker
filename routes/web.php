<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserPagescontroller;
use App\Http\Controllers\SubscriptionController;

// Route::get('/', function () {
//     return view('welcome');
// });

//userpages routes
Route::get('/home', [UserPagescontroller::class, 'index'])->name('user.index');
Route::get('/addCart', [UserPagescontroller::class, 'addCart'])->name('user.addCart');
Route::get('/budgetSpending', [UserPagescontroller::class, 'budgetSpending'])->name('user.budgetSpending');
Route::get('/categoryName', [UserPagescontroller::class, 'categoryName'])->name('user.categoryName');
Route::get('/contact_support', [UserPagescontroller::class, 'contact_support'])->name('user.contact_support');
Route::get('/createAccount', [UserPagescontroller::class, 'createAccount'])->name('user.createAccount');
Route::get('/faqs', [UserPagescontroller::class, 'faqs'])->name('user.faqs');
Route::get('/forgotPassword', [UserPagescontroller::class, 'forgotPassword'])->name('user.forgotPassword');
Route::get('/joinPremium', [UserPagescontroller::class, 'joinPremium'])->name('user.joinPremium');
Route::get('/newSubscription', [UserPagescontroller::class, 'newSubscription'])->name('user.newSubscription');
Route::get('/newpassword', [UserPagescontroller::class, 'newpassword'])->name('user.newpassword');
Route::get('/payment', [UserPagescontroller::class, 'payment'])->name('user.payment');

Route::get('/privacyPolicy', [UserPagescontroller::class, 'privacyPolicy'])->name('user.privacyPolicy');

Route::get('/RecoveryCode', [UserPagescontroller::class, 'RecoveryCode'])->name('user.RecoveryCode');

Route::get('/', [UserPagescontroller::class, 'signIn'])->name('user.signIn');
Route::get('/SpotiSubscription', [UserPagescontroller::class, 'SpotiSubscription'])->name('user.SpotiSubscription');

Route::get('/subscriptionPlans', [UserPagescontroller::class, 'subscriptionPlans'])->name('user.subscriptionPlans');
Route::get('/subscriptionShedule', [UserPagescontroller::class, 'subscriptionShedule'])->name('user.subscriptionShedule');

Route::get('/subscriptions', [UserPagescontroller::class, 'subscriptions'])->name('user.subscriptions');

Route::get('/termsAndServices', [UserPagescontroller::class, 'termsAndServices'])->name('user.termsAndServices');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');



//adminRoutes
Route::get('/adminAdmin', [adminController::class, 'Admin'])->name('admin.admin');
Route::get('/adminIndex', [adminController::class, 'index'])->name('admin.Index');
Route::get('/complaintsAndSecurity', [adminController::class, 'complaintsAndSecurity'])->name('admin.complaintsAndSecurity');

Route::get('/engagementMetrices', [adminController::class, 'engagementMetrices'])->name('admin.engagementMetricess');


Route::get('/financialOverview', [adminController::class, 'financialOverview'])->name('admin.financialOverviews');

Route::get('/operationalMetrices', [adminController::class, 'operationalMetrices'])->name('admin.operationalMetricess');


Route::get('/subscription', [adminController::class, 'subscription'])->name('admin.subscription');

Route::get('/SupportQuriesDetails', [adminController::class, 'SupportQuriesDetails'])->name('admin.SupportQuriesDetails');

Route::get('/SupportQuries', [adminController::class, 'SupportQuries'])->name('admin.SupportQuries');

Route::get('/user', [adminController::class, 'user'])->name('admin.user');

Route::get('/AddCategory', [adminController::class, 'AddCategory'])->name('admin.AddCategory');

Route::resource('categories', CategoryController::class);

Route::resource('subscriptions', SubscriptionController::class);
