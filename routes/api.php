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

Route::get('select/all_users', 'UsersController@all_users')->name('users.all_users')->middleware('permission:user,select');
Route::get('select/one_user', 'UsersController@one_user')->name('users.one_user')->middleware('permission:user,select');
Route::get('select/display_users', 'UsersController@display_users')->name('users.display_users')->middleware('permission:user,select');

Route::get('select/all_reserves', 'ReservesController@all_reserves')->name('reserves.all_reserves')->middleware('permission:reserve,select');
Route::get('select/one_reserve', 'ReservesController@one_reserve')->name('reserves.one_reserve')->middleware('permission:reserve,select');
Route::get('insert/reserve', 'ReservesController@insert')->name('reserve.insert')->middleware('permission:reserve,insert');
Route::get('update/reserve', 'ReservesController@update')->name('reserve.update')->middleware('permission:reserve,update');

Route::get('select/all_processing_executions', 'ProcessingExecutionsController@all_processing_executions')->name('processing_executions.all_processing_executions')->middleware('permission:processing_exeution,select');
Route::get('select/one_processing_execution', 'ProcessingExecutionsController@one_processing_execution')->name('processing_executions.one_processing_execution')->middleware('permission:processing_exeution,select');
Route::get('insert/processing_execution', 'ProcessingExecutionsController@insert')->name('processing_execution.insert')->middleware('permission:processing_exeution,insert');
Route::get('update/processing_execution', 'ProcessingExecutionsController@update')->name('processing_execution.update')->middleware('permission:processing_exeution,update');

Route::get('select/all_stuffs', 'StuffsController@all_stuffs')->name('stuffs.all_stuffs')->middleware('permission:stuff,select');
Route::get('select/one_stuff', 'StuffsController@one_stuff')->name('stuffs.one_stuff')->middleware('permission:stuff,select');
Route::get('insert/stuff', 'StuffsController@insert')->name('stuff.insert')->middleware('permission:stuff,insert');
Route::get('update/stuff', 'StuffsController@update')->name('stuff.update')->middleware('permission:stuff,update');

Route::get('select/all_standard_parts', 'StandardPartsController@all_standard_parts')->name('standard_parts.all_standard_parts')->middleware('permission:standard_part,select');
Route::get('select/one_standard_part', 'StandardPartsController@one_standard_part')->name('standard_parts.one_standard_part')->middleware('permission:standard_part,select');
Route::get('insert/standard_part', 'StandardPartsController@insert')->name('standard_part.insert')->middleware('permission:standard_part,insert');
Route::get('update/standard_part', 'StandardPartsController@update')->name('standard_part.update')->middleware('permission:standard_part,update');

Route::get('select/all_machines', 'MachinesController@all_machines')->name('machines.all_machines')->middleware('permission:machine,select');
Route::get('select/one_machine', 'MachinesController@one_machine')->name('machines.one_machine')->middleware('permission:machine,select');
Route::get('insert/machine', 'MachinesController@insert')->name('machine.insert')->middleware('permission:machine,insert');
Route::get('update/machine', 'MachinesController@update')->name('machine.update')->middleware('permission:machine,update');

Route::get('select/all_tools', 'ToolsController@all_tools')->name('tools.all_tools')->middleware('permission:tool,select');
Route::get('select/one_tool', 'ToolsController@one_tool')->name('tools.one_tool')->middleware('permission:tool,select');
Route::get('insert/tool', 'ToolsController@insert')->name('tool.insert')->middleware('permission:tool,insert');
Route::get('update/tool', 'ToolsController@update')->name('tool.update')->middleware('permission:tool,update');

Route::get('select/all_jigs', 'JigsController@all_jigs')->name('jigs.all_jigs')->middleware('permission:jig,select');
Route::get('select/one_jig', 'JigsController@one_jig')->name('jigs.one_jig')->middleware('permission:jig,select');
Route::get('insert/jig', 'JigsController@insert')->name('jig.insert')->middleware('permission:jig,insert');
Route::get('update/jig', 'JigsController@update')->name('jig.update')->middleware('permission:jig,update');

Route::get('select/all_purchase_lists', 'PurchaseListsController@all_purchase_lists')->name('purchase_lists.all_purchase_lists')->middleware('permission:purchase_list,select');
Route::get('select/one_purchase_list', 'PurchaseLists@one_purchase_list')->name('purchase_lists.one_purchase_list')->middleware('permission:purchase_list,select');
Route::get('insert/purchase_list', 'PurchaseListsController@insert')->name('purchase_list.insert')->middleware('permission:purchase_list,insert');
Route::get('update/purchase_list', 'PurchaseListsController@update')->name('purchase_list.update')->middleware('permission:purchase_list,update');
Route::get('update/purchase_list/confirm', 'PurchaseListsController@confirm')->name('purchase_list.confirm')->middleware('permission:purchase_list,confirm');

Route::get('select/all_outsourcings', 'OutsourcingsController@all_outsourcings')->name('outsourcings.all_outsourcings')->middleware('permission:outsourcing,select');
Route::get('select/one_outsourcing', 'OutsourcingsController@one_outsourcing')->name('outsourcings.one_outsourcing')->middleware('permission:outsourcing,select');
Route::get('insert/outsourcing', 'OutsourcingsController@insert')->name('outsourcing.insert')->middleware('permission:outsourcing,insert');
Route::get('update/outsourcing', 'OutsourcingsController@update')->name('outsourcing.update')->middleware('permission:outsourcing,update');

Route::get('select/all_self_mades', 'SelfMadesController@all_self_mades')->name('self_mades.all_self_mades')->middleware('permission:self_made,select');
Route::get('select/one_self_made', 'SelfMadesController@one_self_made')->name('self_mades.one_self_made')->middleware('permission:self_made,select');
Route::get('insert/self_made', 'SelfMadesController@insert')->name('self_made.insert')->middleware('permission:self_made,insert');
Route::get('update/self_made', 'SelfMadesController@update')->name('self_made.update')->middleware('permission:self_made,update');

Route::get('select/all_processing_orders', 'ProcessingOrdersController@all_processing_orders')->name('processing_orders.all_processing_orders')->middleware('permission:processing_order,select');
Route::get('select/one_processing_order', 'ProcessingOrdersController@one_processing_order')->name('processing_orders.one_processing_order')->middleware('permission:processing_order,select');
Route::get('insert/processing_order', 'ProcessingOrdersController@insert')->name('processing_order.insert')->middleware('permission:processing_order,insert');
Route::get('update/processing_order', 'ProcessingOrdersController@update')->name('processing_order.update')->middleware('permission:processing_order,update');
Route::get('update/processing_order/confirm', 'ProcessingOrdersController@confirm')->name('processing_order.confirm')->middleware('permission:processing_order,confirm');

Route::get('select/all_assembly_orders', 'AssemblyOrdersController@all_assembly_orders')->name('assembly_orders.all_assembly_orders')->middleware('permission:assembly_order,select');
Route::get('select/one_assembly_order', 'AssemblyOrdersController@one_assembly_order')->name('assembly_orders.one_assembly_order')->middleware('permission:assembly_order,select');
Route::get('insert/assembly_order', 'AssemblyOrdersController@insert')->name('assembly_order.insert')->middleware('permission:assembly_order,insert');
Route::get('update/assembly_order', 'AssemblyOrdersController@update')->name('assembly_order.update')->middleware('permission:assembly_order,update');
Route::get('update/assembly_order/confirm', 'AssemblyOrdersController@confirm')->name('assembly_order.confirm')->middleware('permission:assembly_order,confirm');

Route::get('select/all_work_orders', 'WorkOrdersController@all_work_orders')->name('work_orders.all_work_orders')->middleware('permission:work_order,select');
Route::get('select/one_work_order', 'WorkOrdersController@one_work_order')->name('work_orders.one_work_order')->middleware('permission:work_order,select');
Route::get('insert/work_order', 'WorkOrdersController@insert')->name('work_order.insert')->middleware('permission:work_order,insert');
Route::get('update/work_order', 'WorkOrdersController@update')->name('work_order.update')->middleware('permission:work_order,update');
Route::get('update/work_order/confirm', 'WorkOrdersController@confirm')->name('work_order.confirm')->middleware('permission:work_order,confirm');

Route::get('select/all_order_product', 'OrdersController@all_order_product')->name('orders.all_order_product')->middleware('permission:order,select');
Route::get('select/all_orders_with_info', 'OrdersController@all_orders_with_info')->name('orders.all_orders_with_info')->middleware('permission:order,select');
Route::get('select/one_orders_with_info', 'OrdersController@one_order_with_info')->name('orders.one_order_with_info')->middleware('permission:order,select');
Route::get('select/all_orders', 'OrdersController@all_orders')->name('orders.all_orders')->middleware('permission:order,select');
Route::get('select/one_order', 'OrdersController@one_order')->name('orders.one_order')->middleware('permission:order,select');
Route::get('insert/order', 'OrdersController@insert')->name('order.insert')->middleware('permission:order,insert');
Route::get('update/order', 'OrdersController@update')->name('order.update')->middleware('permission:order,update');
Route::get('update/order/confirm', 'OrdersController@confirm')->name('order.confirm')->middleware('permission:order,confirm');

Route::get('select/all_companies', 'CompaniesController@all_companies')->name('companies.all_companies')->middleware('permission:company,select');
Route::get('select/one_company', 'CompaniesController@one_company')->name('companies.one_company')->middleware('permission:company,select');

Route::get('select/all_products', 'ProductsController@all_products')->name('products.all_products')->middleware('permission:product,select');
Route::get('select/one_product', 'ProductsController@one_product')->name('products.one_product')->middleware('permission:product,select');
Route::get('insert/product', 'ProductsController@insert')->name('product.insert')->middleware('permission:product,insert');
Route::get('update/product', 'ProductsController@update')->name('product.update')->middleware('permission:product,update');

Route::get('select/all_page_info', 'PageInfosController@all_page_info')->name('page_info.all_page_info')->middleware('permission:page_info,select');
Route::get('select/one_page_info', 'PageInfosController@one_page_info')->name('page_info.one_page_info')->middleware('permission:page_info,select');

Route::get('select/all_user_permissions', 'UserPermissionsController@all_user_permissions')->name('user_permissions.all_user_permissions')->middleware('permission:user_permission,select');
Route::get('select/one_user_permission', 'UserPermissionsController@one_user_permission')->name('user_permissions.one_user_permission')->middleware('permission:user_permission,select');
Route::get('select/display_user_permission', 'UserPermissionsController@display_user_permission')->name('user_permissions.display_user_permission')->middleware('permission:user_permission,select');

Route::get('select/type_with_condition', 'TypesController@type_with_condition')->name('types.type_with_condition')->middleware('permission:type,select');