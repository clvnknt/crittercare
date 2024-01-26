<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;


// Guest
use App\Http\Controllers\Controller;

// User
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPetController;
use App\Http\Controllers\UserAdoptionController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\AdoptionRequestsController;
use App\Http\Controllers\MissingPetsController;
use App\Http\Controllers\AdditionalUserDetailsController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\PetSurrenderController;

// Admin
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPetController;
use App\Http\Controllers\AdminPetBreedController;
use App\Http\Controllers\AdminAdoptionController;
use App\Http\Controllers\AdminAdoptionRequestsController;
use App\Http\Controllers\AdminMissingPetsController;
use App\Http\Controllers\AdminCaseTypeController;
use App\Http\Controllers\AdminReportsController;
use App\Http\Controllers\AdminPetSurrenderController;
use App\Http\Controllers\AdminPetMonitoringController;

// Super Admin
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SuperAdminUserController;
use App\Http\Controllers\SuperAdminAdminController;

use App\Http\Controllers\PDFController;


//Root URL
Route::get('/', function () {
    return redirect()->route('landing');
});

// Landing Page
Route::get('/', function () {return view('index');})
->name('landing');

// Register
Route::get('/register', [RegisterController::class, 'viewRegistrationForm'])
->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Login
Route::get('/login', [LoginController::class, 'viewLoginForm'])
->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Logout
Route::post('/logout', [LoginController::class, 'logout'])
->name('logout');

Route::get('/about-us', [Controller::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [Controller::class, 'contactUs'])->name('contact-us');

Route::get('/pets/export-pdf', [PDFController::class, 'exportPdf'])
->name('admins.pets.exportPdf');

  
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// User Route Group
Route::middleware(['auth', 'user'])->prefix('u')->group(function () {

    // User Dashboard
    Route::get('/dashboard', function () {return view('users.user-dashboard');})
    ->name('users.user-dashboard');

    //Account Setting
    Route::match(['get', 'post'], '/account-settings', [UserController::class, 'accountSettings'])
    ->name('users.account-settings');
    Route::get('/account-settings/change-password', [UserController::class, 'viewChangePasswordForm'])
    ->name('users.change-password.form');
    Route::post('/account-settings/change-password', [UserController::class, 'changePassword']
    )->name('users.change-password');
    Route::get('/account-settings/edit', [UserController::class, 'editAccountDetails'])
    ->name('users.edit-account-details');
    Route::put('/account-settings/update-account-details', [UserController::class, 'updateAccountDetails'])
    ->name('users.update-account-details');
    Route::post('/users/change-valid-id', [UserController::class, 'changeValidId'])->name('users.change-valid-id');

    Route::get('additional-details/create', [AdditionalUserDetailsController::class, 'create'])
    ->name('users.add-additional-details');
    Route::post('additional-details/store', [AdditionalUserDetailsController::class, 'store'])
    ->name('users.store-additional-details');
    Route::get('additional-details/edit', [AdditionalUserDetailsController::class, 'edit'])
    ->name('users.edit-additional-details');
    Route::put('update-additional-details', [AdditionalUserDetailsController::class, 'update'])
    ->name('users.update-additional-details');
    Route::post('/account-settings/change-valid-id', [UserController::class, 'changeValidId'])
    ->name('users.change-valid-id');

    // Adoption Process
    Route::get('/adopt/available-pets', [UserPetController::class, 'viewAvailablePets'])
    ->name('users.available-pets.index'); // View Adoption List
    Route::get('/adopt/pets/{pet}', [UserPetController::class, 'view'])
    ->name('users.available-pets.view'); // View Pet for Adoption
    Route::get('/adopt/{pet}/adopt-pet', [AdoptionController::class, 'viewAdoptionForm'])
    ->name('users.pets.adopt'); //When Adopt Now Button is Clicked
    Route::post('/adopt{pet}/adopt-pet', [AdoptionController::class, 'submitAdoptionForm'])
    ->name('users.pets.submit-adopt'); //when Submit Button is Clicked
    Route::get('/adoption-requests', [AdoptionRequestsController::class, 'viewAdoptionRequests'])
    ->name('users.adoption-requests');
    Route::get('/adoptions/{adoptionRequest}', [AdoptionRequestsController::class, 'viewSpecificAdoptionRequest'])
    ->name('users.adoptions.view');
    Route::delete('/adoptions/{adoptionRequest}/cancel-request', [AdoptionRequestsController::class, 'cancelAdoptionRequest'])
    ->name('users.adoptions.cancel-request');
    Route::get('/adopted-pets', [UserPetController::class, 'viewAdoptedPets'])
    ->name('users.adopted-pets');

    // Manage Missing Pets
    Route::get('/missing-pets', [MissingPetsController::class, 'showMissingPetsPage'])
    ->name('users.missing-pets');
    Route::get('/missing-pets/create', [MissingPetsController::class, 'create'])
    ->name('users.missing-pets.create');
    Route::post('/missing-pets', [MissingPetsController::class, 'store'])
    ->name('users.missing-pets.store');
    Route::get('/missing-pets/{missingPet}', [MissingPetsController::class, 'show'])
    ->name('users.missing-pets.show');

    // User's Missing Pets
    Route::get('missing=pets/own-reports', [MissingPetsController::class, 'ownMissingPetReports'])
    ->name('users.missing-pets.own-reports');
    Route::post('missing-pets/update-status/{missingPet}', [MissingPetsController::class, 'updateStatus'])
    ->name('users.missing-pets.update-status');

    // User Reports
    Route::get('/reports', [ReportsController::class, 'index'])
    ->name('users.reports.index');
    Route::get('/reports/create', [ReportsController::class, 'create'])
    ->name('users.reports.create');
    Route::post('/reports', [ReportsController::class, 'store'])
    ->name('users.reports.store');
    Route::get('/reports/{report}', [ReportsController::class, 'showReport'])
    ->name('users.reports.show');
    Route::get('/getCaseTypes/{type}', 'ReportsController@getCaseTypes');


    //Pet Surrendering DON'T USE
    Route::get('/pet-surrender', [PetSurrenderController::class, 'dashboard'])
    ->name('users.pet-surrender.dashboard');
    Route::get('/pet-surrender/form', [PetSurrenderController::class, 'showForm'])
    ->name('users.pet-surrender.form');
    Route::get('/pet-surrender/requests', [PetSurrenderController::class, 'showRequests'])
    ->name('users.pet-surrender.requests');
    Route::get('/pet-surrender/surrenders', [PetSurrenderController::class, 'showSurrenders'])
    ->name('users.pet-surrender.surrenders');
    Route::post('/pet-surrender/submit', [PetSurrenderController::class, 'submit'])
    ->name('pet-surrender.submit');
});

// Admin Route Group
Route::middleware(['auth', 'admin'])->prefix('a')->group(function () {
    // Admin Dashboard
    Route::get('/dashboard', function () {return view('admins.admin-dashboard');})->name('admins.admin-dashboard');

    // Manage Pets
    Route::get('/pets', [AdminPetController::class, 'index'])->name('admins.pets.index'); // Landing Page
    Route::get('/pets/create', [AdminPetController::class, 'create']
    )->name('admins.pets.create'); // Add Pet
    Route::post('/pets', [AdminPetController::class, 'store'])->name('admins.pets.store'); // Store Pet
    Route::get('/pets/{pet}', [AdminPetController::class, 'view'])
    ->name('admins.pets.view'); // View Pet
    Route::get('/show-valid-id/{userId}', [AdminPetController::class, 'showValidId'])
    ->name('admins.pets.show-valid-id'); // View Valid ID
    Route::get('/pets/{pet}/edit', [AdminPetController::class, 'edit'])
    ->name('admins.pets.edit'); // Edit Pet
    Route::put('/pets/{pet}', [AdminPetController::class, 'update'])
    ->name('admins.pets.update'); // Update Pet
    Route::delete('/pets/{pet}', [AdminPetController::class, 'delete'])
    ->name('admins.pets.delete'); // Delete Pet

    
    //Manage Adoption Requests
    Route::get('/adoption-requests', [AdminAdoptionRequestsController::class, 'viewAdoptionRequests'])
    ->name('admins.adoption-requests.view');
    Route::get('/adoption-requests/{adoptionRequest}', [AdminAdoptionRequestsController::class, 'viewSpecificAdoptionRequest'])
    ->name('admins.adoption-requests.view-specific-adoption-request');
    Route::get('/admin/adoption-requests/export-pdf', [AdminAdoptionRequestsController::class, 'exportAdoptionRequestsPDF'])
    ->name('admin.adoption-requests.export-pdf');


    // Approve or Reject Adoption Request
    Route::post('/adoption-requests/{adoptionRequest}/approve', [AdminAdoptionRequestsController::class, 'approveAdoptionRequest'])
    ->name('admins.adoption-requests.approve');
    Route::post('/adoption-requests/{adoptionRequest}/decline', [AdminAdoptionRequestsController::class, 'declineAdoptionRequest'])
    ->name('admins.adoption-requests.decline');

    //Manage Notes
    Route::get('/adoption-requests/{adoptionRequest}/add-notes', [AdminAdoptionRequestsController::class, 'viewAddNotesForm'])
    ->name('admins.adoption-requests.add-notes-form');
    Route::post('/adoption-requests/{adoptionRequest}/add-notes', [AdminAdoptionRequestsController::class, 'addNotes'])
    ->name('admins.adoption-requests.add-notes');
    Route::get('/adoption-requests/{adoptionRequest}/edit-notes', [AdminAdoptionRequestsController::class, 'viewEditNotesForm'])
    ->name('admins.adoption-requests.edit-notes-form');
    Route::post('/admin-adoptions/{adoptionRequest}/update-notes', [AdminAdoptionRequestsController::class, 'updateNotes'])
    ->name('admins.adoption-requests.update-notes');

    // Manage Missing Pets
    Route::get('/missing-pet-reports', [AdminMissingPetsController::class, 'showAllMissingPets'])
    ->name('admins.missing-pets.index');
    Route::get('/missing-pet-reports/{missingPet}', [AdminMissingPetsController::class, 'show'])
    ->name('admins.missing-pets.show');
    Route::get('/missing-pet-reports/{missingPet}/change-status', [AdminMissingPetsController::class, 'changeStatus'])
    ->name('admins.missing-pets.change-status');
    Route::post('/missing-pet-reports/{missingPet}/update-status', [AdminMissingPetsController::class, 'updateStatus'])
    ->name('admins.missing-pets.update-status');
    Route::get('/missing-pets/export-pdf', [AdminMissingPetsController::class, 'exportMissingPetsPDF'])
    ->name('admins.missing-pets.generate-missing-pets-reports');

    // Manage Case Types
    Route::get('/case-types', [AdminCaseTypeController::class, 'index'])
    ->name('admins.case-types.index');
    Route::get('/case-types/create', [AdminCaseTypeController::class, 'create'])
    ->name('admins.case-types.create');
    Route::post('/case-types', [AdminCaseTypeController::class, 'store'])
    ->name('admins.case-types.store');
    Route::get('/case-types/{caseType}/edit', [AdminCaseTypeController::class, 'edit'])
    ->name('admins.case-types.edit');
    Route::put('/case-types/{caseType}', [AdminCaseTypeController::class, 'update'])
    ->name('admins.case-types.update');
    Route::delete('/case-types/{caseType}', [AdminCaseTypeController::class, 'destroy'])
    ->name('admins.case-types.destroy');

    // Manage User Reports
    Route::get('/reports', [AdminReportsController::class, 'viewReports'])
    ->name('admins.reports.view');
   Route::get('/reports/{report}', [AdminReportsController::class, 'showReports'])
   ->name('reports.show');
   Route::patch('/reports/{report}/update-status', [AdminReportsController::class, 'updateStatus'])
    ->name('reports.updateStatus');
   Route::get('/admins/reports/export-pdf', [AdminReportsController::class, 'exportReportsPDF'])
    ->name('admins.reports.export-pdf');


    // Manage Pet Surrender Requests NOT INCLUDED ANYMORE DONT USE
    Route::get('/pet-surrenders', [AdminPetSurrenderController::class, 'viewPetSurrenders'])
    ->name('admins.pet-surrenders.view');
    Route::get('/pet-surrenders/{petSurrender}', [AdminPetSurrenderController::class, 'show'])
    ->name('admins.pet-surrenders.show');
    Route::post('/pet-surrenders/{petSurrender}/approve', [AdminPetSurrenderController::class, 'approve'])
    ->name('admins.pet-surrenders.approve');
    Route::post('/pet-surrenders/{petSurrender}/reject', [AdminPetSurrenderController::class, 'reject'])
    ->name('admins.pet-surrenders.reject');

    // Manage Pet Monitoring
    Route::get('/pet-monitoring', [AdminPetMonitoringController::class, 'index'])
    ->name('admins.pet-monitoring.index');
    Route::post('/pet-monitoring/{monitoring}/change-status', [AdminPetMonitoringController::class, 'changeStatus'])
    ->name('admins.pet-monitoring.change-status');
    Route::post('/pet-monitoring/{monitoring}/update-notes', [AdminPetMonitoringController::class, 'updateNotes'])
    ->name('admins.pet-monitoring.update-notes');
    Route::post('/pet-monitoring/stop-monitoring/{monitoring}', [AdminPetMonitoringController::class, 'stopMonitoring'])
    ->name('admins.pet-monitoring.stop-monitoring');
    Route::post('/pet-monitoring/re-enable-monitoring/{monitoring}', [AdminPetMonitoringController::class, 'reEnableMonitoring'])
    ->name('admins.pet-monitoring.re-enable-monitoring');
    Route::get('/admin/pet-monitoring/export-pdf', [AdminPetMonitoringController::class, 'exportPetMonitoringPDF'])
    ->name('admin.pet-monitoring.export-pdf');
});

    // Super Admin Route Group
    Route::middleware(['auth', 'super-admin'])->prefix('s')->group(function () {
    // Super Admin Dashboard
    Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('super-admins.dashboard');
    Route::get('/user-distribution-chart', [SuperAdminController::class, 'userDistributionChart']);

    // Manage Users
    Route::get('/manage/users', [SuperAdminUserController::class, 'index'])
    ->name('super-admins.manage-users.index');
    Route::get('/manage/users/edit/{user}', [SuperAdminUserController::class, 'edit'])
        ->name('super-admins.manage-users.edit');
    Route::delete('/manage/users/delete/{user}', [SuperAdminUserController::class, 'destroy'])
        ->name('super-admins.manage-users.delete');

    // Manage Admins
    Route::get('/manage/admins', [SuperAdminAdminController::class, 'index'])
    ->name('super-admins.manage-admins.index');
    Route::get('/manage/admins/edit/{admin}', [SuperAdminAdminController::class, 'edit'])
        ->name('super-admins.manage-admins.edit');
    Route::delete('/manage/admins/delete/{admin}', [SuperAdminAdminController::class, 'destroy'])
        ->name('super-admins.manage-admins.delete');
    Route::get('/super-admins/manage-admins/create', [SuperAdminAdminController::class, 'create'])
        ->name('super-admins.manage-admins.create');
    Route::post('/super-admins/manage-admins/promote', [SuperAdminAdminController::class, 'promoteUsers'])
        ->name('super-admins.manage-admins.promote');
        Route::post('/super-admins/manage-admins/demote/{id}', [SuperAdminAdminController::class, 'demoteAdmin'])
        ->name('super-admins.manage-admins.demote');
});