<?php
use Illuminate\Database\Seeder;
namespace database\seeds\SeedPart;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Hash as Hash;
class WorkSeeds extends SeedPartClass{
	public function run()
    {	
		//訂單資料
		DB::table('orders')->insert([
			[
				//'id_number'=>'OD001',
				'internal_order_number'=>'ODR0001',
				'external_order_number'=>'EX336085',
				'isFinished'=>True,
				'name' => '我要一些熱壓機',
				//'count' => 1,
				'purchase_date'=>new \DateTime('2019-11-06 21:00:00'),
				'estimated_delivery_date'=>new \DateTime('2019-12-06 17:00:00'),
				'actuel_delivery_date'=>new \DateTime('2019-12-06 21:00:00'),
				'deadline'=>new \DateTime('2019-12-06 23:59:59'),
				'customer_id'=>"XX有限公司",
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				//'id_number'=>'OD001',
				'internal_order_number'=>'ODR0004',
				'external_order_number'=>'EX182611',
				'isFinished'=>True,
				'name' => '熱壓機4台',
				//'count' => 4,
				'purchase_date'=>new \DateTime('2019-08-18 21:00:00'),
				'estimated_delivery_date'=>new \DateTime('2019-09-18 17:00:00'),
				'actuel_delivery_date'=>new \DateTime('2019-09-18 21:00:00'),
				'deadline'=>new \DateTime('2019-09-18 23:59:59'),
				'customer_id'=>"XX有限公司",
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		DB::table('orders')->insert([
			[
				//'id_number'=>'OD002',
				'internal_order_number'=>'ODR0002',
				'external_order_number'=>'EX668004',
				'isFinished'=>False,
				'name' => '門窗',
				//'count' => 100,
				'purchase_date'=>new \DateTime('2019-12-01 21:00:00'),
				'estimated_delivery_date'=>new \DateTime('2019-12-06 17:00:00'),
				'deadline'=>new \DateTime('2020-01-10 23:59:59'),
				'remarks'=>"需優先完成10件於10天內。",
				'customer_id'=>"OO有限公司",
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		DB::table('orders')->insert([
			[
				//'id_number'=>'OD001',
				'internal_order_number'=>'ODR0003',
				'external_order_number'=>'EX111986',
				'isFinished'=>True,
				'name' => '鋁門',
				//'count' => 30,
				'purchase_date'=>new \DateTime('2019-11-26 21:00:00'),
				'estimated_delivery_date'=>new \DateTime('2019-12-06 17:00:00'),
				'deadline'=>new \DateTime('2019-12-06 23:59:59'),
				'customer_id'=>"OO有限公司",
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				//'id_number'=>'OD001',
				'internal_order_number'=>'ODR0005',
				'external_order_number'=>'EX128860',
				'isFinished'=>True,
				'name' => '熱壓機備用機',
				//'count' => 5,
				'purchase_date'=>new \DateTime('2019-12-06 21:00:00'),
				'estimated_delivery_date'=>new \DateTime('2019-12-06 17:00:00'),
				'deadline'=>new \DateTime('2020-01-16 23:59:59'),
				'customer_id'=>"XX有限公司",
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		

		DB::table('order_product')->insert([
			[//1
				'order_id'=>DB::table('orders')->where('internal_order_number', 'ODR0001')->first()->id,
				'product_id'=>DB::table('products')->where('id_number', 'PRD0001')->first()->id,
				'count' => 10,
				//'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[//2
				'order_id'=>DB::table('orders')->where('internal_order_number', 'ODR0002')->first()->id,
				'product_id'=>DB::table('products')->where('id_number', 'PRD0003')->first()->id,
				'count' => 100,
				//'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[//3
				'order_id'=>DB::table('orders')->where('internal_order_number', 'ODR0002')->first()->id,
				'product_id'=>DB::table('products')->where('id_number', 'PRD0004')->first()->id,
				'count' => 100,
				//'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[//4
				'order_id'=>DB::table('orders')->where('internal_order_number', 'ODR0003')->first()->id,
				'product_id'=>DB::table('products')->where('id_number', 'PRD0003')->first()->id,
				'count' => 30,
				//'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[//5
				'order_id'=>DB::table('orders')->where('internal_order_number', 'ODR0004')->first()->id,
				'product_id'=>DB::table('products')->where('id_number', 'PRD0001')->first()->id,
				'count' => 4,
				//'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[//6
				'order_id'=>DB::table('orders')->where('internal_order_number', 'ODR0005')->first()->id,
				'product_id'=>DB::table('products')->where('id_number', 'PRD0001')->first()->id,
				'count' => 5,
				//'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		
		//工單資料
		DB::table('work_orders')->insert([
			[
				'id_number'=>'WOD0001',
				'priority'=>'Normal',
				'isFinished'=>True,
				'name' => '熱壓機工單A',
				//'count' => 2,
				'start_time'=>new \DateTime('2019-11-08 08:00:00'),
				'end_time'=>new \DateTime('2019-11-20 17:00:00'),
				'deadline'=>new \DateTime('2019-12-06 21:00:00'),
				
				'order_product_id'=>1,
				'order_product_count'=>2,
				
				
				'order_id'=>DB::table('orders')->where('internal_order_number', 'ODR0001')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'WOD0002',
				'priority'=>'Normal',
				'isFinished'=>True,
				'name' => '熱壓機工單B',
				//'count' => 2,
				'start_time'=>new \DateTime('2019-11-08 08:00:00'),
				'end_time'=>new \DateTime('2019-12-06 17:00:00'),
				'deadline'=>new \DateTime('2019-12-06 21:00:00'),
				
				'order_product_id'=>1,
				'order_product_count'=>8,
				
				
				'order_id'=>DB::table('orders')->where('internal_order_number', 'ODR0001')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		DB::table('work_orders')->insert([
			[
				'id_number'=>'WOD0003',
				'priority'=>'High',
				'isFinished'=>True,
				'name' => '門窗工單A-1',
				//'count' => 2,
				'start_time'=>new \DateTime('2019-12-03 08:00:00'),
				'deadline'=>new \DateTime('2019-12-11 21:00:00'),
				
				'order_product_id'=>2,
				'order_product_count'=>10,
				'remarks'=>'需優先完成10件。',
				
				'order_id'=>DB::table('orders')->where('internal_order_number', 'ODR0002')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'WOD0004',
				'priority'=>'High',
				'isFinished'=>True,
				'name' => '門窗工單A-2',
				//'count' => 2,
				'start_time'=>new \DateTime('2019-12-03 08:00:00'),
				'deadline'=>new \DateTime('2019-12-11 21:00:00'),
				
				'order_product_id'=>3,
				'order_product_count'=>10,
				'remarks'=>'需優先完成10件。',
				
				'order_id'=>DB::table('orders')->where('internal_order_number', 'ODR0002')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		DB::table('work_orders')->insert([
			[
				'id_number'=>'WOD0005',
				'priority'=>'Low',
				'isFinished'=>True,
				'name' => '門窗工單B-1',
				//'count' => 2,
				'start_time'=>new \DateTime('2019-12-03 08:00:00'),
				'deadline'=>new \DateTime('2019-12-11 21:00:00'),
				
				'order_product_id'=>2,
				'order_product_count'=>90,

				'order_id'=>DB::table('orders')->where('internal_order_number', 'ODR0002')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'WOD0006',
				'priority'=>'Low',
				'isFinished'=>True,
				'name' => '門窗工單B-2',
				//'count' => 2,
				'start_time'=>new \DateTime('2019-12-03 08:00:00'),
				'deadline'=>new \DateTime('2019-12-11 21:00:00'),
				
				'order_product_id'=>3,
				'order_product_count'=>90,

				'order_id'=>DB::table('orders')->where('internal_order_number', 'ODR0002')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		
		//工單-採購單資料
		DB::table('purchase_lists')->insert([
			[
				'id_number'=>"PUL0001",
				'isFinished'=>False,
				//'priority'=>'Normal',
				'name' => '標準件001',
				'principal' => "ABC",
				'img_path' => "JJJ",
				'remarks'=>'你好我是標準件',
				'start_time'=>new \DateTime('2020-02-15 08:00:00'),
				'end_time'=>new \DateTime('2020-03-10 17:00:00'),
				'actual_delivery_date'=>new \DateTime('2020-03-12 08:00:00'),
				'estimated_delivery_date'=>new \DateTime('2020-03-10 08:00:00'),
				'deadline'=>new \DateTime('2020-04-20 21:00:00'),
				'work_order_id'=>DB::table('work_orders')->where('id_number', 'WOD0001')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>"PUL0005",
				'isFinished'=>True,
				//'priority'=>'Normal',
				'name' => '熱壓機模板',
				'principal' => "陳曉明",
				'img_path' => "JJJ",
				'remarks'=>'外包廠商製作',
				'start_time'=>new \DateTime('2019-11-08 08:00:00'),
				'end_time'=>new \DateTime('2019-11-11 08:00:00'),
				'actual_delivery_date'=>new \DateTime('2019-11-11 08:00:00'),
				'estimated_delivery_date'=>new \DateTime('2019-11-16 08:00:00'),
				'deadline'=>new \DateTime('2019-12-01 21:00:00'),
				'work_order_id'=>DB::table('work_orders')->where('id_number', 'WOD0002')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>"PUL0007",
				'isFinished'=>True,
				//'priority'=>'Normal',
				'name' => '外包錫製成',
				'principal' => "陳曉明",
				'img_path' => "JJJ",
				'remarks'=>'外包廠商製作',
				'start_time'=>new \DateTime('2019-11-08 08:00:00'),
				'end_time'=>new \DateTime('2019-11-11 08:00:00'),
				'actual_delivery_date'=>new \DateTime('2019-11-11 08:00:00'),
				'estimated_delivery_date'=>new \DateTime('2019-11-16 08:00:00'),
				'deadline'=>new \DateTime('2019-12-01 21:00:00'),
				'work_order_id'=>DB::table('work_orders')->where('id_number', 'WOD0002')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		DB::table('purchase_lists')->insert([
			[
				'id_number'=>"PUL0002",
				'isFinished'=>True,
				//'priority'=>'Normal',
				'name' => '熱壓機鋁材料',
				'principal' => "陳曉明",
				'img_path' => "JJJ",
				'start_time'=>new \DateTime('2019-11-08 08:00:00'),
				'end_time'=>new \DateTime('2019-11-15 08:00:00'),
				'actual_delivery_date'=>new \DateTime('2019-11-15 08:00:00'),
				'estimated_delivery_date'=>new \DateTime('2019-11-16 08:00:00'),
				'deadline'=>new \DateTime('2019-12-01 21:00:00'),
				'work_order_id'=>DB::table('work_orders')->where('id_number', 'WOD0001')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>"PUL0003",
				'isFinished'=>True,
				//'priority'=>'Normal',
				'name' => '熱壓機鐵材料',
				'principal' => "陳曉明",
				'img_path' => "JJJ",
				'start_time'=>new \DateTime('2019-11-08 08:00:00'),
				'end_time'=>new \DateTime('2019-11-14 08:00:00'),
				'actual_delivery_date'=>new \DateTime('2019-11-14 08:00:00'),
				'estimated_delivery_date'=>new \DateTime('2019-11-16 08:00:00'),
				'deadline'=>new \DateTime('2019-12-01 21:00:00'),
				'work_order_id'=>DB::table('work_orders')->where('id_number', 'WOD0001')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>"PUL0004",
				'isFinished'=>True,
				//'priority'=>'Normal',
				'name' => '熱壓機鋁材料',
				'principal' => "陳曉明",
				'img_path' => "JJJ",
				'start_time'=>new \DateTime('2019-11-08 08:00:00'),
				'end_time'=>new \DateTime('2019-11-15 08:00:00'),
				'actual_delivery_date'=>new \DateTime('2019-11-15 08:00:00'),
				'estimated_delivery_date'=>new \DateTime('2019-11-16 08:00:00'),
				'deadline'=>new \DateTime('2019-12-01 21:00:00'),
				'work_order_id'=>DB::table('work_orders')->where('id_number', 'WOD0002')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			
			
		]);
		
		DB::table('purchase_lists')->insert([
			[
				'id_number'=>"PUL0006",
				'isFinished'=>False,
				//'priority'=>'Normal',
				'name' => '門窗鋁材料',
				'principal' => "王大明",
				'img_path' => "JJJ",
				'start_time'=>new \DateTime('2019-11-08 08:00:00'),
				'end_time'=>new \DateTime('2019-11-15 08:00:00'),
				'estimated_delivery_date'=>new \DateTime('2019-11-16 08:00:00'),
				'deadline'=>new \DateTime('2019-12-06 21:00:00'),
				'work_order_id'=>DB::table('work_orders')->where('id_number', 'WOD0002')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		
		//加工單資料
		DB::table('processing_orders')->insert([
			[
				'id_number'=>"PCO0001",
				'isFinished'=>False,
				//'priority'=>'Normal',
				'name' => 'OO機組的OO機A件加工',
				'principal' => "ABC",
				'img_path' => "JJJ",
				'remarks' => "JJJ",
				//'start_time'=>new \DateTime('2020-02-15 08:00:00'),
				//'end_time'=>new \DateTime('2020-03-10 17:00:00'),
				//'actual_delivery_date'=>new \DateTime('2020-03-12 08:00:00'),
				//'estimated_delivery_date'=>new \DateTime('2020-03-10 08:00:00'),
				//'deadline'=>new \DateTime('2020-04-20 21:00:00'),
				'work_order_id'=>DB::table('work_orders')->where('id_number', 'WOD0001')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>"PCO0002",
				'isFinished'=>False,
				//'priority'=>'Normal',
				'name' => 'OO機組的OO機A件加工',
				'principal' => "ABC",
				'img_path' => "JJJ",
				'remarks' => "JJJ",
				//'start_time'=>new \DateTime('2020-02-15 08:00:00'),
				//'end_time'=>new \DateTime('2020-03-10 17:00:00'),
				//'actual_delivery_date'=>new \DateTime('2020-03-12 08:00:00'),
				//'estimated_delivery_date'=>new \DateTime('2020-03-10 08:00:00'),
				//'deadline'=>new \DateTime('2020-04-20 21:00:00'),
				'work_order_id'=>DB::table('work_orders')->where('id_number', 'WOD0001')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);

		//製程編排
		DB::table('processing_executions')->insert([
			[
				//'id_number'=>"PCE0001",
				'schedule_sequence'=>1,
				'name' => '車',
				'processing_order_id'=>DB::table('processing_orders')->where('id_number', 'PCO0001')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				//'id_number'=>"PCE0002",
				'schedule_sequence'=>2,
				'name' => '銑',
				'processing_order_id'=>DB::table('processing_orders')->where('id_number', 'PCO0001')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);

		//自製單
		DB::table('self_mades')->insert([
			[
				'id_number'=>"SMD0001",
				'name' => '用車的件',
				'principal' => 'ああああ',
				'program' => 'Java',
				'machine_setting' => '{"tttt":"yyyy"}',
				'count' => 2,
				'actual_completion_date'=>new \DateTime('2020-03-12 08:00:00'),
				'estimated_completion_date'=>new \DateTime('2020-03-10 08:00:00'),
				
				'processing_execution_id'=>1,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>"SMD0002",
				'name' => '用銑的件',
				'principal' => 'バカバカバカバカ',
				'program' => 'Java',
				'machine_setting' => '{"tttt":"zyzyz"}',
				'count' => 2,
				'actual_completion_date'=>new \DateTime('2020-03-12 08:00:00'),
				'estimated_completion_date'=>new \DateTime('2020-03-10 08:00:00'),
				
				'processing_execution_id'=>2,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>"SMD0003",
				'name' => '錫製成',
				'principal' => '陳曉明',
				'program' => 'C',
				'machine_setting' => '{"using":{"machines":["MCE0009","MCE0011","MCE0013"]}}',
				'count' => 30,
				'actual_completion_date'=>new \DateTime('2019-12-25 08:00:00'),
				'estimated_completion_date'=>new \DateTime('2019-12-31 08:00:00'),
				
				'processing_execution_id'=>1,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		DB::table('self_mades')->insert([
			[
				'id_number'=>"SMD0004",
				'name' => '錫合金',
				'principal' => '陳曉明',
				'program' => 'python',
				'machine_setting' => '{"using":{"machines":["MCE0013"]}}',
				'count' => 120,
				'estimated_completion_date'=>new \DateTime('2019-12-31 08:00:00'),
				
				'processing_execution_id'=>1,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>"SMD0005",
				'name' => '錫合金',
				'principal' => '王大明',
				'program' => 'python',
				'machine_setting' => '{"using":{"machines":["MCE0013"]}}',
				'count' => 60,
				'estimated_completion_date'=>new \DateTime('2019-12-30 08:00:00'),
				
				'processing_execution_id'=>1,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		//外包單
		DB::table('outsourcings')->insert([
			[
				'id_number'=>"OSC0001",
				'name'=>"外包某種件01",
				'contractor'=>"某家公司",
				'actual_completion_date'=>new \DateTime('2020-03-12 08:00:00'),
				'estimated_completion_date'=>new \DateTime('2020-03-10 08:00:00'),
				
				'remarks'=>'abc',
				'processing_execution_id'=>1,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>"OSC0002",
				'name'=>"外包某種件02",
				'contractor'=>"某家公司",
				'actual_completion_date'=>new \DateTime('2020-03-12 08:00:00'),
				'estimated_completion_date'=>new \DateTime('2020-03-10 08:00:00'),
				
				'remarks'=>'abc',
				'processing_execution_id'=>2,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>"OSC0004",
				'name'=>"錫製成",
				'contractor'=>"XX有限公司",
				'actual_completion_date'=>new \DateTime('2019-12-05 08:00:00'),
				'estimated_completion_date'=>new \DateTime('2019-12-08 08:00:00'),
				
				'remarks'=>'abc',
				'processing_execution_id'=>2,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			]
		]);
		DB::table('outsourcings')->insert([
			[
				'id_number'=>"OSC0003",
				'name'=>"錫製成",
				'contractor'=>"XX有限公司",
				'estimated_completion_date'=>new \DateTime('2020-03-10 08:00:00'),
				
				'remarks'=>'abc',
				'processing_execution_id'=>2,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			]
		]);
		
		//組裝單
		DB::table('assembly_orders')->insert([
			[
				'id_number'=>"ASO0001",
				'isFinished'=>True,
				'name'=>"熱壓機組裝",
				'principal'=>'許小華',
				'machine'=>'{"using":{"machines":["MCE0011","MCE0013"]}}',
				'actual_delivery_date'=>new \DateTime('2019-11-18 08:00:00'),
				'estimated_delivery_date'=>new \DateTime('2019-11-18 08:00:00'),
				
				'work_order_id'=>DB::table('work_orders')->where('id_number', 'WOD0001')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>"ASO0002",
				'isFinished'=>True,
				'name'=>"熱壓機組裝",
				'principal'=>'許小華',
				'machine'=>'{"using":{"machines":["MCE0011","MCE0013"]}}',
				'actual_delivery_date'=>new \DateTime('2019-12-01 08:00:00'),
				'estimated_delivery_date'=>new \DateTime('2019-12-04 08:00:00'),
				
				'work_order_id'=>DB::table('work_orders')->where('id_number', 'WOD0002')->first()->id,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			]
		]);
			
	}
}