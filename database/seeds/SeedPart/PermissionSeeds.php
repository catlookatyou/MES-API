<?php
use Illuminate\Database\Seeder;
namespace database\seeds\SeedPart;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Hash as Hash;
class PermissionSeeds extends SeedPartClass{
	public function run()
    {
		//公共權限
		$users = DB::table('users')->pluck('id')->all();
		$forms = ["form_frame","form_error","form_home"];
		$insert_global_user_permission = [];
		foreach ($users as $user) {
			foreach ($forms as $form) {
				$insert_global_user_permission = array_merge($insert_global_user_permission,[
					[
						'user_id'=>$user, 
						'resource'=>$form,
						'operation'=>'select'
					],
					[
						'user_id'=>$user, 
						'resource'=>$form,
						'operation'=>'insert'
					],
					[
						'user_id'=>$user, 
						'resource'=>$form,
						'operation'=>'update'
					]
				]);
			}
		}
		DB::table("user_permission")->insert($insert_global_user_permission);

		//管理權限 
		DB::table('user_permission')->insert([
[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'tasks_graph',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'work_order',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'machine',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'order',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'task',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'stuff',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'user',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'company',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'task_sample',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'order_product',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'delay',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'form_scheduling',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'form_task',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'form_taskconfirm',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'form_machinestate',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'form_tasklog',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'qet15')->first()->id,
			'resource'=>'tool',
			'operation'=>'select'
		],
		
		
		
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'tasks_graph',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'work_order',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'machine',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'order',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'task',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'stuff',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'user',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'company',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'task_sample',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'product',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'order_product',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'reserve',
			'operation'=>'select'
		],
        [
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'purchase',
			'operation'=>'select'
		],
        [
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'supplier',
			'operation'=>'select'
		],
        
        
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'delay',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'page_infos',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'tool',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_view_db',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_order',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_pageinfo',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_purchaserecord',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_reserve',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_scheduling',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_stuff',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_task',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_workorder',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_worksample',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_taskconfirm',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_machinestate',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_machine',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_tasksample',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_tasklog',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_costaccounting',
			'operation'=>'select'
		],
		[
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_toolkit',
			'operation'=>'select'
		],
        [
			'user_id'=>DB::table('users')->where('id_number', 'adm')->first()->id,
			'resource'=>'form_work',
			'operation'=>'select'
		],
			 
		]);

		DB::table('page_infos')->insert([
              [
                'name'=>'工單紀錄',
                'id_name'=>'order',
                'title'=>'工單管理',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'採購紀錄',
                'id_name'=>'purchaserecord',
                'title'=>'採購紀錄',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'庫存紀錄',
                'id_name'=>'reserve',
                'title'=>'庫存管理',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'排程圖表',
                'id_name'=>'scheduling',
                'title'=>'排程資訊',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'原物料紀錄',
                'id_name'=>'stuff',
                'title'=>'原物料管理',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'排程紀錄',
                'id_name'=>'task',
                'title'=>'排程管理',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'工單紀錄',
                'id_name'=>'workorder',
                'title'=>'工單管理',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'機台管理',
                'id_name'=>'machine',
                'title'=>'機台管理',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'工序管理',
                'id_name'=>'tasksample',
                'title'=>'工序管理',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'工序定義',
                'id_name'=>'worksample',
                'title'=>'工序資料',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'主表單',
                'id_name'=>'frame',
                'title'=>'主表單',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'排程完成',
                'id_name'=>'taskconfirm',
                'title'=>'排程確認',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'機器圖表',
                'id_name'=>'machinestate',
                'title'=>'機器狀態表',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'工具',
                'id_name'=>'tools',
                'title'=>'工具樣板',
                'is404'=>true,
                'canaccess'=>false,
                'other_msg'=>''
              ],
              [
                'name'=>'日誌資料',
                'id_name'=>'tasklog',
                'title'=>'排程日誌',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'錯誤表單',
                'id_name'=>'error',
                'title'=>'錯誤頁面',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>'<br/><object type="image/svg+xml" data="error.svg" style="height:50%;"/>'
              ],
              [
                'name'=>'表單資料',
                'id_name'=>'pageinfo',
                'title'=>'表單編輯',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'成本會計',
                'id_name'=>'costaccounting',
                'title'=>'成本會計評估',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'首頁',
                'id_name'=>'home',
                'title'=>'首頁',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'器具管理',
                'id_name'=>'toolkit',
                'title'=>'器具管理',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],
              [
                'name'=>'work管理',
                'id_name'=>'work',
                'title'=>'work管理',
                'is404'=>false,
                'canaccess'=>true,
                'other_msg'=>''
              ],

		]);
	}
}