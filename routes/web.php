<?php


use App\Models\Post;
use App\Models\User;
use App\Models\Laundry;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardLaundryController;
use App\Http\Controllers\DashboardCustomerController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\MemberProfileController;
use App\Http\Controllers\MemberLaundryController;
use App\Http\Controllers\InvoiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index' ,  [
        'title' => 'Home',
        'active' => 'ho'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active'=> 'about',
        'name' => 'Firmansyah',
        'position' => 'CEO',
        'img' => 'testimonila1.png',
        'bio' => 'Halo saya adalah CEO perusahaan laundry , saya merintis karir sejak 2020 menjadikan laundry terbaik yang pernah anda dapatkan , dari pengalaman saya dan riset untuk pakain , menggunakan semua teknik mencuci dan deteggen yang berkualitas , tidak akan mengecewakan client kami'
    ]);
});
Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}',[PostController::class,'show']);
Route::get('/contact', function () {
    return view('contact',  [
        'title' => 'Contact',
        'active' => 'contact'
    ]);
});

Route::get('/services', function () {
    return view('services',  [
        'title' => 'Services',
        'active' => 'services'
    ]);
});

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Categories',
        'active' => 'categories',
        'categories' => Category::latest()->paginate(5)
    ]);
} );

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authen']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    if(auth()->user()->role_id === 1){
        return view('dashboard.index', [
            'laundries' => Laundry::all(),
            'users' => User::all()
        ]);
    } else {
        return view('member.index', [
            'laundries' => Laundry::all()
        ]);
    }
})->middleware('auth')->name('dashboard');


Route::resource('/customers', DashboardCustomerController::class)->middleware('admin');
Route::resource('/laundries', DashboardLaundryController::class)->middleware('admin');

Route::resource('/member', MemberProfileController::class)->middleware('auth');
Route::resource('/laundry', MemberLaundryController::class)->middleware('auth');



Route::get("/generate-invoice-pdf", [PDFController::class, 'generateInvoicePDF'])->middleware('auth')->name('pdf');































// Route::get('category/{category:slug}', function(Category $category){
//     return view('category', [
//         'title' => $category->name,
//         'posts' => $category->posts,
//         'categories' => Category::all(),
//         'sort' => Post::paginate(4)->sortByDesc('created_at')
//     ]);
// });

// Route::get('authors/{user:username}', function(User $user){
//     return view('author', [
//         'title' => 'User Post',
//         'posts' => $user->posts,
//         'categories' => Category::all(),
//         'sort' => Post::paginate(4)->sortByDesc('published_at')
//     ]);
// });

