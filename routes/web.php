<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\AvailableController;
use App\Http\Controllers\ViewMyBidController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\CashConfirmationController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\AcceptController;
use App\Http\Controllers\ViewDisputedBidsController;
use App\Http\Controllers\UserSubscriptionController;

use App\Http\Controllers\MyController;
use App\Http\Controllers\TransferController;

use App\Http\Controllers\SubscriptionsController;

use App\Http\Controllers\MpesaSTKPUSHController;
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


Route::middleware(['auth', 'user-access:accountant'])->group(function () {
  
    Route::get('/accountant/home', [HomeController::class, 'accountant'])->name('accountant.home');
});



Route::get('order/download/{orderId}', [AvailableController::class, 'downloadFile'])->name('order.download');


Route::middleware(['auth', 'user-access:receptionist'])->group(function () {
  
    
    Route::resource('viewdisputedbids', App\Http\Controllers\ViewDisputedBidsController::class);

    Route::get('/receptionist/home', [HomeController::class, 'receptionist'])->name('receptionist.home');
});



Route::post('/usersubscriptions', [UserSubscriptionController::class, 'subscribe'])->name('usersubscriptions');











Route::middleware(['web', 'verified'])->group(function () {
    Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
});

Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified', 'user-access:employer'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Rest of your routes
    Route::resource('ordars', App\Http\Controllers\ordarsController::class);
    Route::get('/search', 'SearchController@search')->name('search');
    Route::get('drafts', [App\Http\Controllers\ordarsController::class, 'drafts'])->name('drafts.index');
    Route::get('inprogress', [App\Http\Controllers\ordarsController::class, 'inprogress'])->name('inprogress.index');
    Route::get('inrevision', [App\Http\Controllers\ordarsController::class, 'inrevision'])->name('inrevision.index');
 










    Route::get('publicorders', [App\Http\Controllers\ordarsController::class, 'publicordars'])->name('publicorders.index');
   
    Route::put('ordars/{id}/updateStatus', [App\Http\Controllers\ordarsController::class, 'updateStatus'])->name('ordars.updateStatus');
   
   
    Route::get('ordars/{id}/editStatus', [App\Http\Controllers\ordarsController::class, 'editStatus'])->name('ordars.editStatus');





    Route::resource('bids', App\Http\Controllers\BidsController::class);
    Route::resource('takes', App\Http\Controllers\TakesController::class);

    Route::resource('escrowed', App\Http\Controllers\EscrowedController::class);
  

    Route::resource('unconfirmed', App\Http\Controllers\UnconfirmedController::class);

    Route::resource('submitted', App\Http\Controllers\SubmittedController::class);
   
    Route::resource('completed', App\Http\Controllers\CompletedController::class);

    Route::resource('disputed', App\Http\Controllers\DisputedController::class);
    Route::resource('unpaid', App\Http\Controllers\UnpaidController::class);

    Route::resource('paid', App\Http\Controllers\PaidController::class);
    Route::resource('subscription', App\Http\Controllers\SubscriptionController::class);



    Route::resource('allwriters', App\Http\Controllers\AllWritersController::class);



    Route::resource('employer/profile',App\Http\Controllers\employerprofileController::class);
    Route::get('employer/profile/edit', [App\Http\Controllers\employerprofileController::class, 'editProfile'])->name('employer.profile.edit');
    Route::put('employer/profile', [App\Http\Controllers\employerprofileController::class, 'update'])->name('employer.profile');
    
    Route::get('employerprofile/photo', [App\Http\Controllers\employerprofileController::class, 'showProfilePhoto'])->name('employerprofile.photo');

    Route::get('/raise-dispute', [App\Http\Controllers\DisputeController::class, 'create'])->name('disputes.create');

    Route::post('/raise-dispute', [App\Http\Controllers\DisputeController::class, 'store'])->name('disputes.store');




 
});

// routes/web.php



Route::middleware(['auth', 'verified', 'user-access:writer'])->group(function () {

    Route::get('/user/home', [HomeController::class, 'managerHome'])->name('user.home');
    Route::resource('subscriptions', App\Http\Controllers\SubscriptionsController::class);

    Route::post('writersbids', [BidController::class, 'store'])->name('bids.store');


    
    Route::get('/raise-disputes', [App\Http\Controllers\WriterDisputeController::class, 'create'])->name('dispute.create');

    Route::post('/raise-disputes', [App\Http\Controllers\WriterDisputeController::class, 'store'])->name('dispute.store');




 

    Route::resource('available', App\Http\Controllers\AvailableController::class);
    
    Route::get('available/{available}/show', [AvailableController::class, 'show'])->name('orders.show');
    Route::resource('viewmybids', ViewMyBidController::class);
    Route::resource('discardedbids',App\Http\Controllers\DiscardedBidController::class);
    
    Route::resource('inprogressbids',App\Http\Controllers\InProgressBidController::class);
    Route::resource('inreviewbids',App\Http\Controllers\InReviewBidController::class);
    Route::resource('completedbids',App\Http\Controllers\CompletedBidController::class);
    
    
    
    Route::resource('revisionbids',App\Http\Controllers\RevisionBidController::class);
    
    Route::resource('disputedbids',App\Http\Controllers\DisputedBidController::class);
    Route::resource('transactions',App\Http\Controllers\TransactionController::class);
    Route::resource('untrustedemployers',App\Http\Controllers\UntrustedEmployerController::class);
    

    Route::resource('writer/profile',App\Http\Controllers\writerProfileController::class);
    Route::get('writer/profile/edit', [App\Http\Controllers\writerProfileController::class, 'editProfile'])->name('writer.profile.edit');
    Route::put('writer/profile', [App\Http\Controllers\writerProfileController::class, 'update'])->name('writer.profile');
    Route::get('userprofile/photo', [App\Http\Controllers\writerProfileController::class, 'showProfilePhoto'])->name('profile.photo');
    




});



    /*------------------------------------------
    --------------------------------------------
    All Admin Routes List
    --------------------------------------------
    --------------------------------------------*/
    Route::middleware(['user-access:admin'])->group(function () {
        Route::get('/admin', [HomeController::class, 'adminHome'])->name('adminHome');

        Route::post('/admin/login-as', [AdminLoginController::class, 'loginAs'])->name('admin.login-as');

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');

    });
  


    






    /*------------------------------------------
    --------------------------------------------
    All Writer Routes List
    Route::middleware(['user-access:writer'])->group(function () {
        Route::get('/user/home', [HomeController::class, 'managerHome'])->name('user.home');
    });
    --------------------------------------------
    --------------------------------------------*/
   






    Route::get('/accept/{orderId}', [AcceptController::class, 'show'])->name('accept');
    Route::post('/accept/{orderId}', [AcceptController::class, 'update'])->name('update');







    Route::resource('/admin/panel', MyController::class);

Route::resource('viewmybids', ViewMyBidController::class);







// Mpesa STK Push Callback Route



Route::post('/save-subjects', [App\Http\Controllers\SubjectController::class, 'saveSubjects'])->name('saveSubjects');





Route::controller(PaymentController::class)
->prefix('payments')
->as('payments')
->group(function(){
    Route::get('/initiatepush','initiateStkPush')->name('initiatepush');
    Route::post('/stkcallback','stkCallback')->name('stkcallback');
    Route::get('/stkquery','stkQuery')->name('stkquery');
    Route::get('/registerurl','registerUrl')->name('registerurl');
    Route::post('/validation','Validation')->name('validation');
    Route::post('/confirmation','Confirmation')->name('confirmation');
    Route::get('/simulate','Simulate')->name('simulate');
    Route::get('/qrcode','qrcode')->name('qrcode');
    Route::get('/b2c','b2c')->name('b2c');
    Route::post('/b2cresult','b2cResult')->name('b2cresult');
    Route::post('/b2ctimeout','b2cTimeout')->name('b2ctimeout');
    Route::get('/reversal','Reversal')->name('reversal');
    Route::post('/reversalresult','reversalResult')->name('reversalresult');
    Route::post('/reversaltimeout','reversalTimeout')->name('reversaltimeout');
});


// routes/web.php

// routes/web.php
Route::delete('/users/{user}', 'UseradminController@destroy')->name('users.destroy');
Route::resource('/users',App\Http\Controllers\UseradminController::class);
Route::post('admin/store', [App\Http\Controllers\UseradminController::class, 'store'])->name('admin.store');
Route::get('create', [App\Http\Controllers\UseradminController::class, 'put'])->name('admin.put');


Route::get('/admin/users/create', 'UseradminController.php@create')->name('admin.users.create');


Route::get('/confirmation', [App\Http\Controllers\CashConfirmationController::class, 'showConfirmationForm'])->name('confirmation.form');
Route::post('/confirmation', [App\Http\Controllers\CashConfirmationController::class, 'confirm'])->name('confirmation.confirm');


Route::get('/total-amount/{userId}', [CashConfirmationController::class, 'showTotalAmount'])->name('total.amount');



Route::get('/total-amount/{userId}', [AdminController::class, 'employerDisputes'])->name('disputed.orders');

Route::get('/resolved/orders', [AdminController::class, 'deleteEmployer'])->name('admin.delete');

Route::get('/disputed/orders', [AdminController::class, 'resolvedOrders'])->name('resolved.orders');



Route::get('/transfer', [TransferController::class, 'showTransferForm'])->name('transfer.form');
Route::post('/transfering', [TransferController::class, 'transferFunds'])->name('transfer.submit');
