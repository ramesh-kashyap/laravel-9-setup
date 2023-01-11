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
Route::get('/Withdraw', [App\Http\Controllers\UserPanel\WithdrawRequest::class, 'index'])->name('user.WithdrawRequest');
Route::post('/WithdrawRequest', [App\Http\Controllers\UserPanel\WithdrawRequest::class, 'WithdrawRequests'])->name('user.WithdrawRequests');
Route::get('/WithdrawHistory', [App\Http\Controllers\UserPanel\WithdrawRequest::class, 'WithdrawHistory'])->name('user.WithdrawHistory');
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



});
});
