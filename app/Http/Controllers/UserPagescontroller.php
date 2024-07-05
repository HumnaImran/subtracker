<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPagescontroller extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return view('AdminPages.dashboard');
        } else {
            return view('UserPages.index');
        }
    }
    public function addCart()
    {
        return view('UserPages.addCart');
    }
    public function budgetSpending()
    {
        return view('UserPages.budgetSpending');
    }
    public function categoryName()
    {
        return view('UserPages.categoryName');
    }
    public function contact_support()
    {
        return view('UserPages.contact_support');
    }
    public function createAccount()
    {
        return view('UserPages.createAccount');
    }
    public function faqs()
    {
        return view('UserPages.faqs');
    }
    public function forgotPassword()
    {
        return view('UserPages.forgotPassword');
    }
    public function joinPremium()
    {
        return view('UserPages.joinPremium');
    }
    public function newSubscription()
    {
        $categories = Category::all();
        return view('UserPages.newSubscription', compact('categories'));
    }

    public function newpassword()
    {
        return view('UserPages.newpassword');
    }

    public function payment()
    {
        return view('UserPages.payment');
    }

    public function privacyPolicy()
    {
        return view('userPages.privacyPolicy');
    }

    public function RecoveryCode()
    {
       return view('userPages.RecoveryCode');
    }

    public function signIn()
    {
        return view('userPages.signIn');
    }
    public function SpotiSubscription()
    {
        return view('userPages.SpotiSubscription');
    }
    public function subscriptionPlans()
    {
        return view('userPages.subscriptionPlans');
    }
    public function subscriptionShedule()
    {
        return view('userPages.subscriptionShedule');
    }
    public function subscriptions()
    {
        return view('userPages.subscriptions');
    }
    public function termsAndServices()
    {
        return view('userPages.termsAndServices');
    }



}
