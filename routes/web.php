<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});



// Route::get('/job', function () {
//     $jobs = job::all();
//     return view('jobs.index',['jobs'=>$jobs] );
// });

// Route::get('/jon/create', function(){
//     return view('jobs.create');
// });

// Route::post('/job', [JobController::class, 'store']);


// Route::get('/job/{id}', function ($id) {
//     $job = job::find($id);
//     return view('jobs.show', ['job'=> $job]);
// });


// Route::get('/job/{id}/edit', function ($id){
//     $job = job::find($id);
//     return view('jobs.edit', ['job' => $job]);
// });


// Route::patch('/job/{id}', function($id){
//     request()->validate([
//         'title' => ['required','string','min:3'],
//         'salary' => ['required', 'numeric', 'min:0']
//     ]);
//     $job = job::find($id);
//     $job->update(
//         [
//             'title' => request('title'),
//             'salary' => request('salary')
//         ]
//         );
//     return redirect('job/'. $id); 
// });

// Route::delete('/job/{id}', function ($id){
//     $job = job::find($id)->delete();
// });


// Route::controller(JobController::class)->group(function(){
//     Route::get('job', 'index');
//     Route::post('job/create', 'create');
//     Route::get('job/{job}', 'show');
// });






Route::resource('job', JobController::class);



Route::get('employee', function(){
    $employees = Employee::all();
    return view('emp.employee', ['employees'=>$employees]);
});

Route::get('employee/{id}', function($id){
    $employee = Employee::find($id);
    return view('emp.employee-detail', ['employee'=>$employee]);
});


Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);