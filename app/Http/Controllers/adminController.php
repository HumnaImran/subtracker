<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function Admin()
    {
        return view('AdminPages.Admins');
    }

    public function complaintsAndSecurity()
    {
        return view('AdminPages.complaintsAndSecurity');
    }


    public function engagementMetrices()
    {
        return view('AdminPages.engagementMetrices');
    }

    public function financialOverview()
    {
        return view('AdminPages.finanacialOverview');
    }


    public function operationalMetrices()
    {
        return view('AdminPages.operationalMetrices');
    }


    public function subscription()
    {
        return view('AdminPages.subscription');
    }


    public function SupportQuriesDetails()
    {
        return view('AdminPages.SupportQuriesDetails');

    }



    public function SupportQuries()
    {
        return view('AdminPages.SupportQuries');

    }


    public function user()
    {
        return view('AdminPages.user');

    }



    public function index()
    {
        return view('AdminPages.dashboard');

    }


    public function AddCategory()
    {
        return view('AdminPages.categories.AddCategory');

    }
}
