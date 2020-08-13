<?php
use Illuminate\Database\Seeder;
namespace database\seeds\SeedPart;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Hash as Hash;
class CompaniesSeeds extends SeedPartClass{
	public function run()
    {
		DB::table('companies')->insert([
		[
            'name' => '五菱機台有限公司',
            'GUI_number' => rand(10000000,99999999),
			'address'=>'基隆市中正區中正路9487號'

        ],
		[
            'name' => '台中鋼鐵有限公司',
            'GUI_number' => rand(10000000,99999999),
			'address'=>'臺中市清水區槺榔里民族路3.14159段港都街(2+3i)巷9487號'

        ]
		]);

		//供應商
		DB::table('suppliers')->insert([
		[
			'name'=>'家樂福',
			'phone_number'=>'0988778778',
			'fax'=>'0231456789',
			'principal'=>'廖大小',
			'address'=>'基隆市中正區中正路3.14159號',
			'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
		],
		[
            'name' => '八菱機台製造有限公司',
			'phone_number'=>'0988778778',
			'fax'=>'0231456789',
			'principal'=>'廖大小',
			'address'=>'基隆市中正區中正路9487號',
			'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
        ],
		[
            'name' => '台中鋼鐵有限公司',
			'phone_number'=>'0988778778',
			'fax'=>'0231456789',
			'principal'=>'廖大小',
			'address'=>'臺中市清水區槺榔里民族路3.14159段港都街(2+3i)巷9487號',
			'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

        ],
		[
            'name' => '日本造紙有限公司',
			'phone_number'=>'0988778778',
			'fax'=>'0231456789',
			'principal'=>'廖大小',
			'address'=>'日本東京都江東区有明八十七丁目(2+3i)番9487号',
			'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

        ],
		[
            'name' => '基隆五金有限公司',
			'phone_number'=>'0988778778',
			'fax'=>'0231456789',
			'principal'=>'廖大小',
			'address'=>'基隆市中正區祥豐街9487號',
			'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

        ],
		[
            'name' => '南極製冰有限公司',
			'phone_number'=>'0988778778',
			'fax'=>'0231456789',
			'principal'=>'廖大小',
			'address'=>'南極洲毛德皇后地北區格奧爾格·馮·諾伊邁爾站東南東方94.87公里冰層底部',
			'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
        ]
		]);
	}
}