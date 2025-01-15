<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckDeviceType;

use App\Http\Controllers\{
    HomeController,
    MailController,
    ServiceController,
    ProfileController,
    PageController,
    SlideController,
    TeamMemberController,
    TransformationController,
    GalleryController,
    TestimonialsController,
    CampsController,
    TestingController,
    CoursesController,
    ServiceStudentController,
    ServiceManagementController,
    AdminDashboardController,
    ContactController,
    QueryController,
    ManagementQueryController,
    UserController
};


// Admin Routes
Route::middleware(['auth', 'verified', CheckDeviceType::class])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/updateStudent', fn() => view('updatestudent'))->name('update.student');
        Route::get('/updategallery', fn() => view('updategallery'))->name('update.gallery');
        Route::get('/updatemanagement', fn() => view('updatemanagement'))->name('update.management');
        Route::get('/updatetestimonials', fn() => view('updatetestimonials'))->name('update.testimonials');
        
        Route::resources([
            'slides'          => SlideController::class,
            'team_members'    => TeamMemberController::class,
            'transformations' => TransformationController::class,
            'galleries'       => GalleryController::class,
            'testimonials'    => TestimonialsController::class,
            'camps'           => CampsController::class,
            'testing'         => TestingController::class,
            'serviceStudents' => ServiceStudentController::class,
            'serviceManagement' => ServiceManagementController::class,
            'courses'         => CoursesController::class,
        ]);
            // Profile Management
     Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/profile-edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/student-queries', [QueryController::class, 'studentQueries'])->name('student.queries');
    Route::get('/management-queries', [QueryController::class, 'managementQueries'])->name('management.queries');
    });





});

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Service Routes
Route::prefix('services')->group(function () {
    // For Management
    Route::get('/management', [ServiceController::class, 'serviceformanagement'])->name('services.management');
    
    // For Students
    Route::prefix('student')->group(function () {
    Route::get('/', [ServiceController::class, 'serviceforstudent'])->name('services.student');
    Route::get('/{slug}', [ServiceController::class, 'showStudentService'])->name('services.student.show');
    });
   

});

// Mail Routes
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/management-query', [ManagementQueryController::class, 'submit'])->name('management.query.submit');
Route::post('/send-donation-mail', [MailController::class, 'sendDonationMail'])->name('send.donation_mail');

require __DIR__.'/auth.php';
