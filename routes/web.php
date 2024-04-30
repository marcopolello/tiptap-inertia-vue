<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\InvoiceLayoutController;
use App\Models\Post;
use App\Models\Layout;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'posts' => Post::all(),
    ]);
})->name('test');

Route::post('/', function (Request $request) {
    // validation

    if (!$request->title) {
        return back()->withErrors([
            'title' => 'Title is required',
        ]);
    }

    Post::create([
        'title' => $request->title,
        'content' => $request->content,
    ]);

    return back()->with('message', 'Post was created!');
});

Route::prefix('layouts')->group(function () {
    Route::get('/layouts', function () {
        $layouts = Layout::all();
        return response()->json($layouts);
    })->name('layouts.list');
    Route::get('layout/{id}', [InvoiceLayoutController::class, 'index'])->name('layout.index');
});

Route::get('/posts/{post}', function (Post $post) {
    // dd($post->content);

    return Inertia::render('Show', [
        'post' => $post,
    ]);
})->name('post.show');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
