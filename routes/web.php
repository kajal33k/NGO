<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ContainerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeadingController;
use App\Http\Controllers\SadhguruController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\about_sunil;
use App\Http\Controllers\about_sunilController;
use App\Http\Controllers\ContactController;

Route::get('/dashboard', function (){
    return view('Dashboard.main');
}); 

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/food',[HomeController::class, 'food'])->name('food');
Route::get('/registration',[HomeController::class, 'registration'])->name('registration');
Route::get('/read',[HomeController::class, 'read'])->name('read');
Route::get('/view',[HomeController::class, 'view'])->name('view');
Route::get('/login',[HomeController::class, 'login'])->name('login');
Route::get('/learn',[HomeController::class, 'learn'])->name('learn');





                                // BACKEND
      
                            // BANNER
Route::get('banner/index',[BannerController::class,'index'])->name('banner.index');
Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
Route::get('/banner/edit{banner}', [BannerController::class, 'edit'])->name('banner.edit');
Route::post('/banner/update{banner}', [BannerController::class, 'update'])->name('banner.update');
Route::get('/banner/{banner}', [BannerController::class, 'destroy'])->name('banner.destroy');


                            // ABOUT-US
Route::get('about/index',[AboutController::class,'index'])->name('about.index'); 
Route::get('about/create',[AboutController::class,'create'])->name('about.create'); 
Route::post('about/store',[AboutController::class,'store'])->name('about.store');                            
Route::get('about/edit{about}',[AboutController::class,'edit'])->name('about.edit'); 
Route::post('about/update{about}',[AboutController::class,'update'])->name('about.update'); 
Route::get('about/{about}',[AboutController::class,'destroy'])->name('about.destroy'); 


                        // HEADING
Route::get('heading/index',[HeadingController::class,'index'])->name('heading.index');
Route::get('heading/create',[HeadingController::class,'create'])->name('heading.create');
Route::post('heading/store',[HeadingController::class,'store'])->name('heading.store');
Route::get('heading/edit{heading}',[HeadingController::class,'edit'])->name('heading.edit');
Route::post('heading/update{heading}',[HeadingController::class,'update'])->name('heading.update');
Route::get('heading/{heading}',[HeadingController::class,'destroy'])->name('heading.destroy');    

                                // SADHGURU
Route::get('sadhguru/index',[SadhguruController::class,'index'])->name('sadhguru.index');
Route::get('sadhguru/create',[SadhguruController::class,'create'])->name('sadhguru.create');
Route::post('sadhguru/store',[SadhguruController::class,'store'])->name('sadhguru.store');
Route::get('sadhguru/edit{sadhguru}',[SadhguruController::class,'edit'])->name('sadhguru.edit');
Route::post('sadhguru/update{sadhguru}',[SadhguruController::class,'update'])->name('sadhguru.update');
Route::get('sadhguru/{sadhguru}',[SadhguruController::class,'destroy'])->name('sadhguru.destroy');                               

                                // CONTAINER
Route::get('container/index',[ContainerController::class,'index'])->name('container.index');
Route::get('container/create',[ContainerController::class,'create'])->name('container.create');
Route::post('container/store',[ContainerController::class,'store'])->name('container.store');
Route::get('container/edit{container}',[ContainerController::class,'edit'])->name('container.edit');
Route::post('container/update{container}',[ContainerController::class,'update'])->name('container.update');
Route::get('container/{container}',[ContainerController::class,'destroy'])->name('container.destroy');

                        // Video
Route::get('video/index',[VideoController::class,'index'])->name('video.index');
Route::get('video/create',[VideoController::class,'create'])->name('video.create');
Route::post('video/store',[VideoController::class,'store'])->name('video.store');
Route::get('video/edit{video}',[VideoController::class,'edit'])->name('video.edit');
Route::post('video/update{video}',[VideoController::class,'update'])->name('video.update');
Route::get('video/{video}',[VideoController::class,'destroy'])->name('video.destroy');


                        // Image GAllery
Route::get('gallery/index',[GalleryController::class,'index'])->name('gallery.index');
Route::get('gallery/create',[GalleryController::class,'create'])->name('gallery.create');
Route::post('gallery/store',[GalleryController::class,'store'])->name('gallery.store');
Route::get('gallery/edit{gallery}',[GalleryController::class,'edit'])->name('gallery.edit');
Route::post('gallery/update{gallery}',[GalleryController::class,'update'])->name('gallery.update');
Route::get('gallery/{gallery}',[GalleryController::class,'destroy'])->name('gallery.destroy');  

                        // Card
Route::get('card/index',[CardController::class,'index'])->name('card.index');
Route::get('card/create',[CardController::class,'create'])->name('card.create');
Route::post('card/store',[CardController::class,'store'])->name('card.store');
Route::get('card/edit{card}',[CardController::class,'edit'])->name('card.edit');
Route::post('card/update{card}',[CardController::class,'update'])->name('card.update');
Route::get('card/{card}',[CardController::class,'destroy'])->name('card.destroy');

                            // STORY
Route::get('story/index',[StoryController::class,'index'])->name('story.index'); 
Route::get('story/create',[StoryController::class,'create'])->name('story.create');
Route::post('story/store',[StoryController::class,'store'])->name('story.store');
Route::get('story/edit{story}',[StoryController::class,'edit'])->name('story.edit');
Route::post('story/update{story}',[StoryController::class,'update'])->name('story.update');
Route::get('story/{story}',[StoryController::class,'destroy'])->name('story.destroy');


                            // STORY
Route::get('about_sunil/index',[about_sunilController::class,'index'])->name('about_sunil.index'); 
Route::get('about_sunil/create',[about_sunilController::class,'create'])->name('about_sunil.create');
Route::post('about_sunil/store',[about_sunilController::class,'store'])->name('about_sunil.store');
Route::get('about_sunil/edit{about_sunil}',[about_sunilController::class,'edit'])->name('about_sunil.edit');
Route::post('about_sunil/update{about_sunil}',[about_sunilController::class,'update'])->name('about_sunil.update');
Route::get('about_sunil/{about_sunil}',[about_sunilController::class,'destroy'])->name('about_sunil.destroy');
       
Route::get('contactform',[ContactController::class,'contactform'])->name('contactform');
Route::post('/contactform/store', [ContactController::class, 'store']);
