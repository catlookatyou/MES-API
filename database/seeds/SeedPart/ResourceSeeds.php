<?php
	use Illuminate\Database\Seeder;
	namespace database\seeds\SeedPart;
	use Illuminate\Support\Facades\DB as DB;
	use Illuminate\Support\Facades\Hash as Hash;
	class ResourceSeeds extends SeedPartClass{
	public function run()
	{
		/*===========================
		* 模組元素定義
		*===========================*/

		//標準件資料
		DB::table('standard_parts')->insert([
			[
				'id_number'=>'STD0001',
				'name' => '螺絲',
			],
			[
				'id_number'=>'STD0002',
				'name' => '滾動軸承',
			],
		]);

		//產品資料
		DB::table('products')->insert([
			[
				'id_number'=>'PRD0001',

				'name' => '熱壓機',
				'remarks' => "JJJ",
				'unit_price'=>20000,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'PRD0002',

				'name' => '印表機',
				'remarks' => "JJJ",
				'unit_price'=>10000,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'PRD0003',

				'name' => '鋁門',
				'remarks' => "JJJ",
				'unit_price'=>5000,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'PRD0004',

				'name' => '鋁窗',
				'remarks' => "JJJ",
				'unit_price'=>2500,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			
		]);

		/*===========================
		* 公司財產 
		*===========================*/

		//治具資料
		 DB::table('types')->insert([
			[
				'name'=>'机械治具',
				'table_name'=>'jigs',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'木工治具',
				'table_name'=>'jigs',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'焊接治具',
				'table_name'=>'jigs',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'加工',
				'table_name'=>'jigs',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'零件',
				'table_name'=>'jigs',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		DB::table('jigs')->insert([
			[
				'id_number'=>'JIG0001',
				'name'=>'1號治具',
				'type_id'=>DB::table('types')->where([['name', '机械治具'],['table_name', 'jigs']])->first()->id,
				'application'=>'AAA',
				'purchase_date'=>new \DateTime('2014-06-18 00:22:11'),
				'financial'=>'FIA0001',
				//'brand'=>'火星牌',
				'remarks'=>'あああ',
				//'standard'=>'Aあα甲ㄅ規格',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

			],
			[
				'id_number'=>'JIG0002',
				'name'=>'2號治具',
				'type_id'=>DB::table('types')->where([['name', '木工治具'],['table_name', 'jigs']])->first()->id,
				'application'=>'AAA',
				'purchase_date'=>new \DateTime('2014-06-18 00:22:11'),
				'financial'=>'FIA0002',
				//'brand'=>'土星牌',
				'remarks'=>'あああ',
				//'standard'=>'Bばβ乙ㄆ規格',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

			],
			[
				'id_number'=>'JIG0003',
				'name'=>'加工治具',
				'type_id'=>DB::table('types')->where([['name', '加工'],['table_name', 'jigs']])->first()->id,
				'application'=>'ZZ精密工業有限公司',
				'purchase_date'=>new \DateTime('2014-06-18 00:22:11'),
				'financial'=>'FIA0003',
				//'brand'=>'土星牌',
				'remarks'=>'四軸加工翻轉治具',
				//'standard'=>'Bばβ乙ㄆ規格',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'CPS0001',
				'name'=>'塞規',
				'type_id'=>DB::table('types')->where([['name', '零件'],['table_name', 'jigs']])->first()->id,
				'application'=>'XX設備有限公司',
				'purchase_date'=>new \DateTime('2015-05-05 00:22:11'),
				'financial'=>'FIA0004',
				//'brand'=>'土星牌',
				'remarks'=>'用於管口成形機',
				//'standard'=>'Bばβ乙ㄆ規格',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'CPS0002',
				'name'=>'零件加工',
				'type_id'=>DB::table('types')->where([['name', '零件'],['table_name', 'jigs']])->first()->id,
				'application'=>'XX設備有限公司',
				'purchase_date'=>new \DateTime('2015-05-05 00:22:11'),
				'financial'=>'FIA0005',
				//'brand'=>'土星牌',
				'remarks'=>'.',
				//'standard'=>'Bばβ乙ㄆ規格',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);

		//刀具資料
		DB::table('types')->insert([
			[
				'name'=>'車刀',
				'table_name'=>'tools',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'銑刀',
				'table_name'=>'tools',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'鑽頭',
				'table_name'=>'tools',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'磨輪',
				'table_name'=>'tools',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'鉋刀',
				'table_name'=>'tools',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'鋼刀',
				'table_name'=>'tools',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'陶瓷刀',
				'table_name'=>'tools',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'鑽石刀',
				'table_name'=>'tools',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'氮化鈦度刀',
				'table_name'=>'tools',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		
		DB::table('tools')->insert([
			[
				'id_number'=>'TOL0001',
				'name'=>'1號車刀',
				'type_id'=>DB::table('types')->where([['name', '車刀'],['table_name', 'tools']])->first()->id,
				'financial'=>'FIA0006',
				'brand'=>'火星牌',
				'remarks'=>'あああ',
				'standard'=>'Aあα甲ㄅ規格',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

			],
			[
				'id_number'=>'TOL0002',
				'name'=>'1號銑刀',
				'type_id'=>DB::table('types')->where([['name', '銑刀'],['table_name', 'tools']])->first()->id,
				'financial'=>'FIA0007',
				'brand'=>'土星牌',
				'remarks'=>'あああ',
				'standard'=>'Bばβ乙ㄆ規格',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

			],
			[
				'id_number'=>'TOL0003',
				'name'=>'1號鑽頭',
				'type_id'=>DB::table('types')->where([['name', '鑽頭'],['table_name', 'tools']])->first()->id,
				'financial'=>'FIA0008',
				'brand'=>'金星牌',
				'remarks'=>'AZAZAZ',
				'standard'=>'CかΓ丙ㄇ規格',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

			],
			[
				'id_number'=>'TOL0004',
				'name'=>'高速鋼刀',
				'type_id'=>DB::table('types')->where([['name', '鋼刀'],['table_name', 'tools']])->first()->id,
				'financial'=>'FIA0009',
				'brand'=>'TT設備有限公司',
				'remarks'=>'每3個月定期檢查',
				'standard'=>'.',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

			],
			[
				'id_number'=>'TOL0005',
				'name'=>'陶瓷刀具',
				'type_id'=>DB::table('types')->where([['name', '陶瓷刀'],['table_name', 'tools']])->first()->id,
				'financial'=>'FIA0010',
				'brand'=>'QQ設備有限公司',
				'remarks'=>'每個月定期更換',
				'standard'=>'.',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

			],
			[
				'id_number'=>'TOL0006',
				'name'=>'多晶鑽石刀具 CBN刀具',
				'type_id'=>DB::table('types')->where([['name', '鑽石刀'],['table_name', 'tools']])->first()->id,
				'financial'=>'FIA0011',
				'brand'=>'XX設備有限公司',
				'remarks'=>'.',
				'standard'=>'.',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

			],
			[
				'id_number'=>'TOL0007',
				'name'=>'鍍層刀',
				'type_id'=>DB::table('types')->where([['name', '氮化鈦度刀'],['table_name', 'tools']])->first()->id,
				'financial'=>'FIA0012',
				'brand'=>'XX設備有限公司',
				'remarks'=>'.',
				'standard'=>'氮化鈦',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

			],
		]);

		//夾具資料
		DB::table('types')->insert([
			[
				'name'=>'...',
				'table_name'=>'fixtures',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		/* DB::table('fixtures')->insert([
			[
				'id_number'=>'FTR0001',
				'name'=>'1號夾具',
				'type_id'=>DB::table('types')->where([['name', '...'],['table_name', 'fixtures']])->first()->id,
				'financial'=>'FIA0013',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

			],
			[
				'id_number'=>'FTR0002',
				'name'=>'2號夾具',
				'type_id'=>DB::table('types')->where([['name', '...'],['table_name', 'fixtures']])->first()->id,
				'financial'=>'FIA0014',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

			],
		]); */

		//機台資料
		DB::table('types')->insert([
			[
				'name'=>'車',
				'table_name'=>'machines',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'銑',
				'table_name'=>'machines',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'鑽',
				'table_name'=>'machines',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'磨',
				'table_name'=>'machines',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'鉋',
				'table_name'=>'machines',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'切割',
				'table_name'=>'machines',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'壓',
				'table_name'=>'machines',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'name'=>'製成',
				'table_name'=>'machines',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);
		DB::table('machines')->insert([
			[
				'id_number'=>'MCE0001',
				'name' => '金屬切割機台',
				'type_id'=>DB::table('types')->where([['name', '切割'],['table_name', 'machines']])->first()->id,
				//'application'=>'APP',
				'brand'=>'火星牌',
				'remarks'=>'あああ',
				'financial'=>'FIA0014',
				'standard'=>'Aあα甲ㄅ規格',
				'purchase_date'=>new \DateTime('2018-03-16 01:22:00'),
				'age_limit' => 5,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'MCE0002',
				'name' => '金屬研磨機台1',
				'type_id'=>DB::table('types')->where([['name', '磨'],['table_name', 'machines']])->first()->id,
				//'application'=>'APP',
				'brand'=>'土星牌',
				'remarks'=>'あああ',
				'financial'=>'FIA0015',
				'standard'=>'Bばβ乙ㄆ規格',
				'purchase_date'=>new \DateTime('2015-09-22 00:22:11'),
				'age_limit' => 5,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'MCE0003',
				'name' => '金屬研磨機台2',
				'type_id'=>DB::table('types')->where([['name', '磨'],['table_name', 'machines']])->first()->id,
				//'application'=>'APP',
				'brand'=>'冥王星牌',
				'remarks'=>'123',
				'financial'=>'FIA0016',
				'standard'=>'CかΓ丙ㄇ規格',
				'purchase_date'=>new \DateTime('2015-09-22 00:22:11'),
				'age_limit' => 5,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'MCE0004',
				'name' => '金屬研磨機台3',
				'type_id'=>DB::table('types')->where([['name', '磨'],['table_name', 'machines']])->first()->id,
				//'application'=>'APP',
				'brand'=>'月球牌',
				'remarks'=>'543',
				'financial'=>'FIA0017',
				'standard'=>'Dだδ丁ㄈ規格',
				'purchase_date'=>new \DateTime('2015-09-22 00:22:11'),
				'age_limit' => 5,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'MCE0005',
				'name' => '金屬輾壓機台1',
				'type_id'=>DB::table('types')->where([['name', '壓'],['table_name', 'machines']])->first()->id,
				//'application'=>'APP',
				'brand'=>'綠蘋果牌',
				'remarks'=>'865',
				'financial'=>'FIA0018',
				'standard'=>'Eえε戊ㄍ規格',
				'purchase_date'=>new \DateTime('2015-09-22 00:22:11'),
				'age_limit' => 5,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'MCE0006',
				'name' => '金屬輾壓機台2',
				'type_id'=>DB::table('types')->where([['name', '壓'],['table_name', 'machines']])->first()->id,
				//'application'=>'APP',
				'brand'=>'abc牌',
				'remarks'=>'123',
				'financial'=>'FIA0019',
				'standard'=>'zzz規格',
				'purchase_date'=>new \DateTime('2015-09-22 00:22:11'),
				'age_limit' => 5,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'MCE0007',
				'name' => '車床',
				'type_id'=>DB::table('types')->where([['name', '車'],['table_name', 'machines']])->first()->id,
				//'application'=>'APP',
				'brand'=>'def牌',
				'remarks'=>'465',
				'financial'=>'FIA0020',
				'standard'=>'abc規格',
				'purchase_date'=>new \DateTime('2015-09-22 00:22:11'),
				'age_limit' => 5,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'MCE0008',
				'name' => '銑床',
				'type_id'=>DB::table('types')->where([['name', '銑'],['table_name', 'machines']])->first()->id,
				//'application'=>'APP',
				'brand'=>'ghi牌',
				'remarks'=>'789',
				'financial'=>'FIA0021',
				'standard'=>'def規格',
				'purchase_date'=>new \DateTime('2015-10-22 00:22:11'),
				'age_limit' => 7,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'MCE0009',
				'name' => '抽真空機',
				'type_id'=>DB::table('types')->where([['name', '製成'],['table_name', 'machines']])->first()->id,
				//'application'=>'APP',
				'brand'=>'OO設備有限公司',
				'remarks'=>'適用於各式產業抽取真空',
				'financial'=>'FIA0022',
				'standard'=>'Approx. 230 Kgf',
				'purchase_date'=>new \DateTime('2014-06-12 00:22:11'),
				'age_limit' => 3,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'MCE0010',
				'name' => 'IC除錫機',
				'type_id'=>DB::table('types')->where([['name', '製成'],['table_name', 'machines']])->first()->id,
				//'application'=>'APP',
				'brand'=>'OO設備有限公司',
				'remarks'=>'.',
				'financial'=>'FIA0023',
				'standard'=>'.',
				'purchase_date'=>new \DateTime('2014-06-12 00:22:11'),
				'age_limit' => 5,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'MCE0011',
				'name' => '氣動型彎管機',
				'type_id'=>DB::table('types')->where([['name', '製成'],['table_name', 'machines']])->first()->id,
				//'application'=>'APP',
				'brand'=>'HH有限公司',
				'remarks'=>'.',
				'financial'=>'FIA0024',
				'standard'=>'MITSUBISHI – ZE24B',
				'purchase_date'=>new \DateTime('2016-03-28 00:22:11'),
				'age_limit' => 5,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'MCE0012',
				'name' => '管口成形機',
				'type_id'=>DB::table('types')->where([['name', '製成'],['table_name', 'machines']])->first()->id,
				//'application'=>'APP',
				'brand'=>'KK設備有限公司',
				'remarks'=>'設計適用於管口成形',
				'financial'=>'FIA0025',
				'standard'=>'384x695x780mm',
				'purchase_date'=>new \DateTime('2018-12-11 00:22:11'),
				'age_limit' => 5,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'MCE0013',
				'name' => 'RAM板加熱機',
				'type_id'=>DB::table('types')->where([['name', '製成'],['table_name', 'machines']])->first()->id,
				//'application'=>'APP',
				'brand'=>'KK設備有限公司',
				'remarks'=>'設計適用於管口成形',
				'financial'=>'FIA0026',
				'standard'=>'384x695x780mm',
				'purchase_date'=>new \DateTime('2018-12-11 00:22:11'),
				'age_limit' => 5,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);

		//原物料種類紀錄
		DB::table('stuffs')->insert([
			[
				'id_number'=>'STU0001',
				'name' => '鋼材',
				'unit_price' => 9000,
				'unit'=>'條',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'STU0002',
				'name' => '潤滑劑',
				'unit_price' => 50,
				'unit'=>'公升',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'STU0003',
				'name' => '紙箱',
				'unit_price' => 5,
				'unit'=>'個',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'STU0004',
				'name' => '裝訂膠',
				'unit_price' => 3,
				'unit'=>'罐',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'STU0005',
				'name' => '金屬切割刀具A款',
				'unit_price' => 500,
				'unit'=>'個',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'STU0006',
				'name' => '金屬切割刀具B款',
				'unit_price' => 500,
				'unit'=>'個',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'STU0007',
				'name' => '金屬切割刀具C款',
				'unit_price' => 25,
				'unit'=>'片',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'STU0008',
				'name' => '鋁材',
				'unit_price' => 10,
				'unit'=>'公斤',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'STU0009',
				'name' => '模具',
				'unit_price' => 100,
				'unit'=>'組',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'STU0010',
				'name' => '錫',
				'unit_price' => 100,
				'unit'=>'公斤',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'STU0011',
				'name' => '氮氣',
				'unit_price' => 100,
				'unit'=>'公升',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'STU0012',
				'name' => '鉛',
				'unit_price' => 50,
				'unit'=>'公斤',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'STU0013',
				'name' => '銻',
				'unit_price' => 500,
				'unit'=>'公斤',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);

		//庫存資料紀錄
		DB::table('reserves')->insert([
			[
				'id_number' =>'REV0001',
				'name' => '鋼材庫存1號',
				'count'=>50,
				'unit'=>'條',
				'remarks'=>'金屬切割用',
				'supplier'=>"某家公司",
				'financial'=>'FIA0027',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id,
				'stuff_id'=>DB::table('stuffs')->where([
				['name','鋼材'],
				['company_id', DB::table('companies')->where('name', '五菱機台有限公司')->first()->id]])->first()->id
			],
			[
				'id_number' =>'REV0002',
				'name' => '鋁材庫存1號',
				'count'=>97,
				'unit'=>'條',
				'remarks'=>'原物料',
				'supplier'=>"某家公司",
				'financial'=>'FIA0028',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id,
				'stuff_id'=>DB::table('stuffs')->where([
				['name','鋁材'],
				['company_id', DB::table('companies')->where('name', '五菱機台有限公司')->first()->id]])->first()->id
			],
			[
				'id_number' =>'REV0003',
				'name' => '鋁材庫存2號',
				'count'=>100,
				'unit'=>'條',
				'remarks'=>'原物料',
				'supplier'=>"某家公司",
				'financial'=>'FIA0029',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id,
				'stuff_id'=>DB::table('stuffs')->where([
				['name','鋁材'],
				['company_id', DB::table('companies')->where('name', '五菱機台有限公司')->first()->id]])->first()->id
			],
			[
				'id_number' =>'REV0004',
				'name' => '金屬切割刀具A款1',
				'count'=>50,
				'unit'=>'組',
				'remarks'=>'切割用具',
				'supplier'=>"某家公司",
				'financial'=>'FIA0030',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id,
				'stuff_id'=>DB::table('stuffs')->where([
				['name','金屬切割刀具A款'],
				['company_id', DB::table('companies')->where('name', '五菱機台有限公司')->first()->id]])->first()->id
			],
			[
				'id_number' =>'REV0005',
				'name' => '金屬切割刀具A款2',
				'count'=>3,
				'unit'=>'組',
				'remarks'=>'切割用具',
				'supplier'=>"某家公司",
				'financial'=>'FIA0031',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id,
				'stuff_id'=>DB::table('stuffs')->where([
				['name','金屬切割刀具A款'],
				['company_id', DB::table('companies')->where('name', '五菱機台有限公司')->first()->id]])->first()->id
			],
			[
				'id_number' =>'REV0006',
				'name' => '金屬切割刀具B款1',
				'count'=>3,
				'unit'=>'個',
				'remarks'=>'切割用具',
				'supplier'=>"某家公司",
				'financial'=>'FIA0032',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id,
				'stuff_id'=>DB::table('stuffs')->where([
				['name','金屬切割刀具B款'],
				['company_id', DB::table('companies')->where('name', '五菱機台有限公司')->first()->id]])->first()->id
			],
			[
				'id_number' =>'REV0007',
				'name' => '金屬切割刀具C款1',
				'count'=>1,
				'unit'=>'片',
				'remarks'=>'切割用具',
				'supplier'=>"某家公司",
				'financial'=>'FIA0033',
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id,
				'stuff_id'=>DB::table('stuffs')->where([
				['name','金屬切割刀具C款'],
				['company_id', DB::table('companies')->where('name', '五菱機台有限公司')->first()->id]])->first()->id
			],
		]);

		/*DB::table('products')->insert([
			[
				'id_number'=>'PD001',
				'name'=>'鋁擠型散熱片',
				'unit_price'=>555,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

			],
			[
				'id_number'=>'PD002',
				'name'=>'鋁耐熱布壓條',
				'unit_price'=>333,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
			[
				'id_number'=>'PD003',
				'name'=>'鋁滾軸',
				'unit_price'=>250,
				'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
			],
		]);*/

	}
}