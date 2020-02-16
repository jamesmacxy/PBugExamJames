<?php

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

use App\Expense;
use App\Category;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function(){

	// $expenses = Expense::groupBy('category_id')->selectRaw('sum(amount) as sum, category_id')->pluck('sum','category_id');

	// $expenses = Expense::join('categories','categories.id','expenses.category_id')->groupBy('expenses.category_id')->selectRaw('sum(expenses.amount) as sum, expenses.category_id','categories.name')->get();

	$expenses = Expense::join('categories','categories.id','expenses.category_id')->groupBy('expenses.category_id', 'categories.name')->selectRaw('sum(expenses.amount) as sum, expenses.category_id, categories.name')->get();

	$categories = Category::all();

	return view('dashboard.index', compact('expenses','categories'));

	})->middleware('auth');



Route::get('/dashboard/changepassword', function(){

	return view('auth.changepassword');

	})->middleware('auth');

Route::post('/dashboard/changepassword', 'ChangePasswordController@updatePassword')->name('change.password')->middleware('auth');


Route::group(['middleware' => 'admin'], function(){

	Route::resource('/dashboard/users', 'AdminController');

	Route::resource('/dashboard/roles', 'AdminRoleController');

	Route::resource('/dashboard/expensemanagement', 'AdminExpenseManagementController');

	Route::resource('/dashboard/expenses', 'ExpensesController');


});

Route::group(['middleware' => 'user'], function(){

	Route::resource('/dashboard/expenses', 'ExpensesController');

});
