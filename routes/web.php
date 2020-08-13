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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('select/all_users', 'UsersController@all_users')->name('users.all_users');
Route::get('select/one_user', 'UsersController@one_user')->name('users.one_user');

Route::get('select/all_reserves', 'ReservesController@all_reserves')->name('reserves.all_reserves');
Route::get('select/one_reserve', 'ReservesController@one_reserve')->name('reserves.one_reserve');

Route::get('select/all_processing_executions', 'ProcessingExecutionsController@all_processing_executions')->name('processing_executions.all_processing_executions');
Route::get('select/one_processing_execution', 'ProcessingExecutionsController@one_processing_execution')->name('processing_executions.one_processing_execution');

Route::get('select/all_stuffs', 'StuffsController@all_stuffs')->name('stuffs.all_stuffs');
Route::get('select/one_stuff', 'StuffsController@one_stuff')->name('stuffs.one_stuff');

Route::get('select/all_standard_parts', 'StandardPartsController@all_standard_parts')->name('standard_parts.all_standard_parts');
Route::get('select/one_standard_part', 'StandardPartsController@one_standard_part')->name('standard_parts.one_standard_part');

Route::get('select/all_machines', 'MachinesController@all_machines')->name('machines.all_machines');
Route::get('select/one_machine', 'MachinesController@one_machine')->name('machines.one_machine');

Route::get('select/all_tools', 'ToolsController@all_tools')->name('tools.all_tools');
Route::get('select/one_tool', 'ToolsController@one_tool')->name('tools.one_tool');

Route::get('select/all_jigs', 'JigsController@all_jigs')->name('jigs.all_jigs');
Route::get('select/one_jig', 'JigsController@one_jig')->name('jigs.one_jig');

Route::get('select/all_purchase_lists', 'PurchaseListsController@all_purchase_lists')->name('purchase_lists.all_purchase_lists');
Route::get('select/one_purchase_list', 'PurchaseLists@one_purchase_list')->name('purchase_lists.one_purchase_list');

Route::get('select/all_outsourcings', 'OutsourcingsController@all_outsourcings')->name('outsourcings.all_outsourcings');
Route::get('select/one_outsourcing', 'OutsourcingsController@one_outsourcing')->name('outsourcings.one_outsourcing');

Route::get('select/all_self_mades', 'SelfMadesController@all_self_mades')->name('self_mades.all_self_mades');
Route::get('select/one_self_made', 'SelfMadesController@one_self_made')->name('self_mades.one_self_made');

Route::get('select/all_processing_orders', 'ProcessingOrdersController@all_processing_orders')->name('processing_orders.all_processing_orders');
Route::get('select/one_processing_order', 'ProcessingOrdersController@one_processing_order')->name('processing_orders.one_processing_order');

Route::get('select/all_assembly_orders', 'AssemblyOrdersController@all_assembly_orders')->name('assembly_orders.all_assembly_orders');
Route::get('select/one_assembly_order', 'AssemblyOrdersController@one_assembly_order')->name('assembly_orders.one_assembly_order');

Route::get('select/all_work_orders', 'WorkOrdersController@all_work_orders')->name('work_orders.all_work_orders');
Route::get('select/one_work_order', 'WorkOrdersController@one_work_order')->name('work_orders.one_work_order');

Route::get('select/all_orders', 'OrdersController@all_orders')->name('orders.all_orders');
Route::get('select/one_order', 'OrdersController@one_order')->name('orders.one_order');