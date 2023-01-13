<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();



Route::post('login', [App\Http\Controllers\Login::class, 'login'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/getUserName', [App\Http\Controllers\Register::class, 'getUserNameAjax'])->name('getUserName');

Route::prefix('user')->group(function ()
{
Route::middleware('auth')->group(function ()
{
Route::get('/dashboard', [App\Http\Controllers\UserPanel\Dashboard::class, 'index'])->name('user.dashboard');

// profile
Route::get('/profile', [App\Http\Controllers\UserPanel\Profile::class, 'index'])->name('user.profile');
Route::post('/update-profile', [App\Http\Controllers\UserPanel\Profile::class, 'profile_update'])->name('user.update-profile');
Route::get('/ChangePass', [App\Http\Controllers\UserPanel\Profile::class, 'change_password'])->name('user.ChangePass');
Route::get('/BankDetail', [App\Http\Controllers\UserPanel\Profile::class, 'BankDetail'])->name('user.BankDetail');

Route::post('/edit-password', [App\Http\Controllers\UserPanel\Profile::class, 'change_password_post'])->name('user.edit-password');
Route::post('/bank-update', [App\Http\Controllers\UserPanel\Profile::class, 'bank_profile_update'])->name('user.bank-update');
Route::post('/change-trxpasswword', [App\Http\Controllers\UserPanel\Profile::class, 'change_trxpassword_post'])->name('user.change-trxpasswword');
// end profile


// add fund

Route::get('/AddFund', [App\Http\Controllers\UserPanel\AddFund::class, 'index'])->name('user.AddFund');
Route::any('/SubmitBuyFund', [App\Http\Controllers\UserPanel\AddFund::class, 'SubmitBuyFund'])->name('user.SubmitBuyFund');
// end add fund

// invest
Route::get('/invest', [App\Http\Controllers\UserPanel\Invest::class, 'index'])->name('user.invest');
Route::post('/fundActivation', [App\Http\Controllers\UserPanel\Invest::class, 'fundActivation'])->name('user.fundActivation');
Route::get('/DepositHistory', [App\Http\Controllers\UserPanel\Invest::class, 'invest_list'])->name('user.DepositHistory');

// end invest

// withdraw
Route::get('/Withdraw', [App\Http\Controllers\UserPanel\WithdrawRequest::class, 'index'])->name('user.Withdraw');
Route::post('/WithdrawRequest', [App\Http\Controllers\UserPanel\WithdrawRequest::class, 'WithdrawRequest'])->name('user.Withdraw-Request');
Route::get('/WithdrawHistory', [App\Http\Controllers\UserPanel\WithdrawRequest::class, 'WithdrawHistory'])->name('user.Withdraw-History');
// end withdraw

//team
Route::get('/referral-team', [App\Http\Controllers\UserPanel\Team::class, 'index'])->name('user.referral-team');
Route::get('/my-reEntry', [App\Http\Controllers\UserPanel\Team::class, 'reentryAccount'])->name('user.my-reEntry');
Route::get('/level-team', [App\Http\Controllers\UserPanel\Team::class, 'LevelTeam'])->name('user.level-team');
Route::get('/AutoPoolBonus', [App\Http\Controllers\UserPanel\Team::class, 'AutoPoolBonus'])->name('user.AutoPoolBonus');
//end team

//bonus
Route::get('/level-income', [App\Http\Controllers\UserPanel\Bonus::class, 'index'])->name('user.level-income');
Route::get('/direct-income', [App\Http\Controllers\UserPanel\Bonus::class, 'direct_income'])->name('user.direct-income');
Route::get('/AutoPool-income', [App\Http\Controllers\UserPanel\Bonus::class, 'autopool_income'])->name('user.AutoPool-income');
Route::get('/Booster-income', [App\Http\Controllers\UserPanel\Bonus::class, 'booster_income'])->name('user.Booster-income');
Route::get('/Booster-direct', [App\Http\Controllers\UserPanel\Bonus::class, 'booster_direct'])->name('user.Booster-direct');
Route::any('/Boots-submit', [App\Http\Controllers\UserPanel\Bonus::class, 'SubmitBootsIncome'])->name('user.Boots-submit');
Route::get('/Boost-matrix', [App\Http\Controllers\UserPanel\Bonus::class, 'boost_matrix'])->name('user.Boost-matrix');
Route::get('/Growth-bonus', [App\Http\Controllers\UserPanel\Bonus::class, 'growth_income'])->name('user.Growth-bonus');
Route::get('/Appraisal-bonus', [App\Http\Controllers\UserPanel\Bonus::class, 'appraisal_bonus'])->name('user.Appraisal-bonus');
//end bonus

//tickets
Route::get('/GenerateTicket',[App\Http\Controllers\UserPanel\Tickets::class,'GenerateTicket'])->name('user.GenerateTicket');
Route::post('/SubmitTicket',[App\Http\Controllers\UserPanel\Tickets::class,'SubmitTicket'])->name('user.SubmitTicket');
Route::get('/SupportMessage',[App\Http\Controllers\UserPanel\Tickets::class,'SupportMessage'])->name('user.SupportMessage');
Route::get('/ViewMessage',[App\Http\Controllers\UserPanel\Tickets::class,'ViewMessage'])->name('user.ViewMessage');

//end tickets

});
});


// admin

Route::prefix('admin')->group(function () {
Route::get('/admin-login', [App\Http\Controllers\Admin\AdminLogin::class, 'index'])->name('admin.admin-login');
Route::post('LoginAction', [App\Http\Controllers\Admin\AdminLogin::class, 'admin_login'])->name('admin.LoginAction');
Route::get('/admin-logout', [App\Http\Controllers\Admin\AdminLogin::class, 'logout'])->name('admin.admin-logout');
Route::group(['middleware' => ['admin']], function ()
{

 Route::get('/dashboard', [App\Http\Controllers\Admin\Dashboard::class, 'index'])->name('admin.dashboard');

 // usercontroller
 Route::get('/totalusers', [App\Http\Controllers\Admin\UserController::class, 'alluserlist'])->name('admin.totalusers');
 Route::get('/active-users', [App\Http\Controllers\Admin\UserController::class, 'active_users'])->name('admin.active-users');
 Route::get('/edit-users', [App\Http\Controllers\Admin\UserController::class, 'edit_users'])->name('admin.edit-users');
 Route::get('edit-user-view/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit_users_view'])->name('admin.edit-user-view');

 Route::any('update-user-profile', [App\Http\Controllers\Admin\UserController::class, 'users_profile_update'])->name('update-user-profile');
 Route::get('/block-users', [App\Http\Controllers\Admin\UserController::class, 'block_users'])->name('admin.block-users');
 Route::get('block-submit', [App\Http\Controllers\Admin\UserController::class, 'block_submit'])->name('admin.block-submit');

 //end userController

//DepositManagmentController
 Route::get('/depodit-request', [App\Http\Controllers\Admin\DepositManagmentController::class, 'deposit_request'])->name('admin.deposit-request');
 Route::get('/depodit-list', [App\Http\Controllers\Admin\DepositManagmentController::class, 'deposit_list'])->name('admin.deposit-list');
 Route::get('deposit_request_done', [App\Http\Controllers\Admin\DepositManagmentController::class, 'deposit_request_done'])->name('admin.deposit_request_done');
// end DepositManagmentController
//fundController
 Route::get('Add-fund-list', [App\Http\Controllers\Admin\FundController::class, 'add_fund_report'])->name('admin.add-fund-list');
});

});
