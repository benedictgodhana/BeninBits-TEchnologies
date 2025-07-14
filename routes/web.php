<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UpcomingTripController;
use App\Http\Controllers\UserController;
use App\Jobs\SendNewsletterJob;
use App\Mail\NewsletterMail;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Event;
use App\Models\Experience;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Subscriber;
use App\Models\Trip;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   

    return view('welcome');
});


Route::get('/services', function () {

    return view('Services');
});





Route::get('/faqs', function () {
    return view('FAQS');
});





Route::get('/terms', function () {
    return view('Terms');
});


Route::get('/blogs/{id}', [BlogController::class, 'showBlog'])->name('blogs.showBlog');


Route::get('/blog', function () {
    $blogs = Blog::all();
    return view('Blog', compact('blogs'));
});




Route::get('/about', function () {
    return view('About',);
});


Route::get('/contact', function () {
    return view('Contact',);
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


require __DIR__ . '/auth.php';
