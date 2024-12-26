<?php

use Illuminate\Support\Facades\Route;
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
    AdminDashboardController
};

// Admin Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin_dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/updateStudent', fn() => view('updatestudent'))->name('update.student');
    Route::get('/updategallery', fn() => view('updategallery'))->name('update.gallery');
    Route::get('/updatemanagement', fn() => view('updatemanagement'))->name('update.management');
    Route::get('/updatetestimonials', fn() => view('updatetestimonials'))->name('update.testimonials');
    
   Route::resources([
    'slides'         => SlideController::class,
    'team_members'   => TeamMemberController::class,
    'transformations'=> TransformationController::class,
    'galleries'      => GalleryController::class,
    'testimonials'   => TestimonialsController::class,
    'camps'          => CampsController::class,
    'testing'        => TestingController::class,
    'serviceStudents' => ServiceStudentController::class,
    'serviceManagement' => ServiceManagementController::class,  // Fixed line
    'courses'        => CoursesController::class,
]);

    
    // Profile Management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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
        Route::get('/handwriting', [ServiceController::class, 'handwritingPage'])->name('services.student.handwriting');
        Route::get('/wings', [ServiceController::class, 'wingsPage'])->name('services.student.wings');
        Route::get('/{slug}', [ServiceController::class, 'showStudentService'])->name('services.student.show');
    });
});

// Mail Routes
Route::post('/send-contact-mail', [MailController::class, 'sendContactMail'])->name('send.contact_mail');
Route::post('/send-management-mail', [MailController::class, 'sendManagementMail'])->name('send.management_mail');
Route::post('/send-donation-mail', [MailController::class, 'sendDonationMail'])->name('send.donation_mail');

require __DIR__.'/auth.php';
