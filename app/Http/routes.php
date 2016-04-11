<?php
		

//Pages
Route::get('/', function () {
    return view('welcome');
});

//Auth

Route::resource('shop', 'ShopController');


//API
Route::group(['prefix' => 'api/v1'], function () {
	Route::resource('tickets', 'API\Tickets');
	Route::resource('devices', 'API\Devices');
	Route::resource('notifications', 'API\Notifications');
	Route::resource('services', 'API\Services');
	Route::resource('reports', 'API\Reports');
	Route::resource('inventory', 'API\Inventory');
	//Route::resource('users', 'API\Users');
});

//Shop

//Staff
Route::group(['prefix' => 'staff'], function () {
	Route::resource('shifts', 'Staff\Shifts');
	Route::resource('employees', 'Staff\Employees');
	Route::resource('positions', 'Staff\Positions');
	Route::resource('sites', 'Staff\Sites');
	Route::resource('blocks', 'Staff\Blocks');
	Route::resource('request-offs', 'Staff\RequestOffs');
	Route::resource('swaps', 'Staff\Swaps');
	Route::resource('availibilities', 'Staff\Availibilities');
	Route::resource('payroll', 'Staff\Payroll');
	Route::resource('messages', 'Staff\Messages');
});
