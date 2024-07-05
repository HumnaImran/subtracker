<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::all();
        return view('UserPages.Subscriptions.index', compact('subscriptions'));
    }

    public function create()
    {
        return view('subscriptions.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'renewal_date' => 'required|date',
            'billing_cycle' => 'required|string|max:255',
            'price' => 'required|numeric',
            'reminder_duration' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'document' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        try {
            $subscription = new Subscription();
            $subscription->name = $request->name;
            $subscription->category_id = $request->category_id;
            $subscription->description = $request->description;
            $subscription->start_date = $request->start_date;
            $subscription->renewal_date = $request->renewal_date;
            $subscription->billing_cycle = $request->billing_cycle;
            $subscription->price = $request->price;
            $subscription->reminder_duration = $request->reminder_duration;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $subscription->image = $imagePath;
            }
            // dd("here");
            if ($request->hasFile('document')) {
                $documentPath = $request->file('document')->store('documents', 'public');
                $subscription->document = $documentPath;
            }
             dd("here");
            $subscription->save();
            return redirect()->route('subscriptions.index')->with('success', 'Subscription created successfully.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }




}
