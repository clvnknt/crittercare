<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function aboutUs()
{
    // Logic for the "About Us" page
    return view('about_us'); // Change 'about_us' to the actual view name
}

public function contactUs()
{
    // Logic for the "Contact Us" page
    return view('contact_us'); // Change 'contact_us' to the actual view name
}

}
