<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\donerRegistration;
use App\Http\Controllers\donerData;
use App\Http\Controllers\resiverController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Session;

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
/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/',[resiverController::class, 'index']);


Route::get('/adminlogin', function () {
    return view('login');
});


//Login validation

Route::group(['middleware'=>'AdminCheck'], function(){
    Route::get('/admindashbord', function () {
        return view('admindashbord');
    });

    Route::get('/showalldoner', [donerData::class, 'showall']);

    Route::get('/logout',[adminController::class, 'logout']); // For admin logout


    Route::post('/sarech', [donerData::class, 'search']);

    Route::get('/update/{id}', [donerData::class, 'update']);

    Route::put('/updatesave/{id}', [donerData::class, 'updatesave']);

    Route::get('/delete/{id}', [donerData::class, 'delete']);

    Route::get('/updatedeletout', function () {
        return view('updatedeletout');
    });


    Route::get('/showalldonernotverify',[donerData::class, 'showAllDonerNotVerify']);

    Route::get('/showallreceivernotverify',[resiverController::class, 'showAllresiverNotVerify']);

    Route::get('/verify/{id}', [donerData::class, 'verify']);

    Route::get('/updatelist/{id}', [donerData::class, 'updateFromList']);

    Route::put('/updatelistsave/{id}', [donerData::class, 'updateFromListSave']);

    Route::get('/deletelist/{id}', [donerData::class, 'deleteFromList']);

    Route::get('/showallreceiver', [resiverController::class, 'showData']);

    Route::get('/verifyresiver/{id}', [resiverController::class, 'verifyData']);

    Route::get('/updatelistresiver/{id}', [resiverController::class, 'updateData']);

    Route::put('/saveresiverupdate/{id}', [resiverController::class, 'updateDataSave']);

    Route::get('/deletelistresiver/{id}', [resiverController::class, 'deleteData']);
});

//Admin Login page
Route::post('/adminlogin',[adminController::class, 'loginValidation']);

//Doner registration
Route::get('/register', function () {
    return view('register');
});

Route::post('/save', [donerRegistration::class, 'addData']);



// Reciver

Route::get('/reciverregister', function () {
    return view('Resiver/resiverregister');
});

Route::post('/saveresiver',[resiverController::class, 'saveData']);


//Admin Only

Route::get('/forgotpassword', function(){
    return "There is no option to reset password, Please Contact Devoloper !!!!!!!!";
});