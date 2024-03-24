<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('home');
    }

    public function aboutUs() {
        return view('aboutUs');
    }

    public function services() {
        return view('services');
    }

    public function cases() {
        return view('cases');
    }

    public function blog() {
        return view('blog');
    }

    public function contact() {
        return view('contact');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
        return view('successForm')->with($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Site $site) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site) {
        //
    }
}
