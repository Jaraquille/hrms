<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FamilyPlanningController;
use App\Http\Controllers\FamilyPlanningAssessmentController;
use App\Http\Controllers\ImmunizationController;
use App\Http\Controllers\ImmunizationAssessmentController;
use App\Http\Controllers\PrenatalController;
use App\Http\Controllers\PrenatalAssessmentController;

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

Route::redirect('/', 'login');
Route::post('/registration', [Controller::class, 'registration'])->name('registration');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/patient-profile', [Controller::class, 'patient_profile'])->name('patient-profile');
    Route::post('/update-patient', [Controller::class, 'update_patient_profile'])->name('update-patient');
    Route::get('/patient-medical', [Controller::class, 'patient_medical'])->name('patient-medical');
    
    // Admin routes
    Route::get('/patient-info', [AdminController::class, 'patient_info'])->name('patient-info');
    Route::get('/new-patient', [AdminController::class, 'new_patient'])->name('new-patient');
    Route::post('/create-patient', [AdminController::class, 'create_patient'])->name('create-patient');
    Route::get('/edit-patient/{id}', [AdminController::class, 'edit_patient'])->name('edit-patient');
    Route::post('/modify-patient', [AdminController::class, 'modify_patient'])->name('modify-patient');
    Route::get('/family-planning', [AdminController::class, 'family_planning'])->name('family-planning');
    Route::post('/family-planning-filter', [AdminController::class, 'family_planning_filter'])->name('family-planning-filter');
    Route::post('/family-planning-search', [AdminController::class, 'family_planning_search'])->name('family-planning-search');
    Route::get('/family-planning-form/{id}', [AdminController::class, 'family_planning_form'])->name('family-planning-form');
    Route::post('/family-planning-form-create', [FamilyPlanningController::class, 'store'])->name('family-planning-form-create');
    Route::get('/family-planning-view/{id}', [FamilyPlanningController::class, 'show'])->name('family-planning-view');
    Route::get('/family-planning-edit/{id}', [FamilyPlanningController::class, 'edit'])->name('family-planning-edit');
    Route::post('/family-planning-form-update', [FamilyPlanningController::class, 'update'])->name('family-planning-form-update');
    Route::get('/family-planning-delete/{id}', [FamilyPlanningController::class, 'destroy'])->name('family-planning-delete');
    Route::get('/assessmment-new/{id}', [FamilyPlanningAssessmentController::class, 'create'])->name('assessmment-new');
    Route::post('/create-assessment', [FamilyPlanningAssessmentController::class, 'store'])->name('create-assessment');
    Route::get('/assessment-edit/{id}', [FamilyPlanningAssessmentController::class, 'edit'])->name('assessment-edit');
    Route::post('/update-assessment', [FamilyPlanningAssessmentController::class, 'update'])->name('update-assessment');
    Route::get('/assessment-delete/{id}', [FamilyPlanningAssessmentController::class, 'destroy'])->name('assessment-delete');
    Route::get('/print', [AdminController::class, 'print'])->name('print');
    Route::post('/print-filter', [AdminController::class, 'print_filter'])->name('print-filter');
    Route::get('/prenatal', [AdminController::class, 'prenatal'])->name('prenatal');
    Route::get('/prenatal-form/{id}', [AdminController::class, 'prenatal_form'])->name('prenatal-form');
    Route::post('/prenatal-form-create', [PrenatalController::class, 'store'])->name('prenatal-form-create');
    Route::get('/prenatal-delete/{id}', [PrenatalController::class, 'destroy'])->name('prenatal-delete');
    Route::get('/prenatal-view/{id}', [PrenatalController::class, 'show'])->name('prenatal-view');
    Route::get('/prenatal-edit/{id}', [PrenatalController::class, 'edit'])->name('prenatal-edit');
    Route::post('/prenatal-form-update', [PrenatalController::class, 'update'])->name('prenatal-form-update');
    Route::get('/immunization', [AdminController::class, 'immunization'])->name('immunization');
    Route::get('/immunization-form/{id}', [AdminController::class, 'immunization_form'])->name('immunization-form');
    Route::post('/immunization-form-create', [ImmunizationController::class, 'store'])->name('immunization-form-create');
    Route::get('/immunization-delete/{id}', [ImmunizationController::class, 'destroy'])->name('immunization-delete');
    Route::get('/immunization-view/{id}', [ImmunizationController::class, 'show'])->name('immunization-view');
    Route::get('/immunization-edit/{id}', [ImmunizationController::class, 'edit'])->name('immunization-edit');
    Route::post('/immunization-form-update', [ImmunizationController::class, 'update'])->name('immunization-form-update');
    Route::get('/assessmment-new2/{id}', [PrenatalAssessmentController::class, 'create'])->name('assessmment-new2');
    Route::post('/create-assessment2', [PrenatalAssessmentController::class, 'store'])->name('create-assessment2');
    Route::get('/assessment-edit2/{id}', [PrenatalAssessmentController::class, 'edit'])->name('assessment-edit2');
    Route::post('/update-assessment2', [PrenatalAssessmentController::class, 'update'])->name('update-assessment2');
    Route::get('/assessment-delete2/{id}', [PrenatalAssessmentController::class, 'destroy'])->name('assessment-delete2');
    Route::get('/assessmment-new3/{id}', [ImmunizationAssessmentController::class, 'create'])->name('assessmment-new3');
    Route::post('/create-assessment3', [ImmunizationAssessmentController::class, 'store'])->name('create-assessment3');
    Route::get('/assessment-edit3/{id}', [ImmunizationAssessmentController::class, 'edit'])->name('assessment-edit3');
    Route::post('/update-assessment3', [ImmunizationAssessmentController::class, 'update'])->name('update-assessment3');
    Route::get('/assessment-delete3/{id}', [ImmunizationAssessmentController::class, 'destroy'])->name('assessment-delete3');
    
    
    Route::fallback(function() {
        return view('pages/utility/404');
    });    
});