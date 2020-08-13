<?php
use Illuminate\Database\Seeder;
namespace database\seeds\SeedPart;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Hash as Hash;
class PeopleSeeds extends SeedPartClass{
	public function run()
    {
		//人力定義
		DB::table('users')->insert([
		[
			'id_number'=>'ushq12',
            'email' => 'a123whrwrj3j35456@gmail.com',
            'password' => Hash::make('gg123456'),
			'name'=>'大明',
			'special_skill'=>'雜技',
			'license'=>'丙級打雜證照',
			'license_img_path'=>'JJJ',
			//'permission'=>7,
			'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id

        ],
		[
			'id_number'=>'qet15',
            'email' => 'a12346k46ki46i56@gmail.com',
            'password' => Hash::make('ta123456'),
			'name'=>'大華',
			'special_skill'=>'雜技',
			'license'=>'丙級打雜證照',
			'license_img_path'=>'JJJ',
			//'permission'=>7,
			'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
        ],
		[
			'id_number'=>'adm',
            'email' => 'adm@mail.com',
            'password' => Hash::make('12345678'),
			'name'=>'admin',
			'special_skill'=>'全知全能',
			'license'=>'神級無敵證照',
			'license_img_path'=>'JJJ',
			//'permission'=>7,
			'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
        ],
		[
			'id_number'=>'qet16',
            'email' => 'add11@gmail.com',
            'password' => Hash::make('12345678'),
			'name'=>'山竹',
			'special_skill'=>'雜技',
			'license'=>'丙級打雜證照',
			'license_img_path'=>'JJJ',
			//'permission'=>7,
			'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
        ],
		[
			'id_number'=>'qet17',
            'email' => 'add12@gmail.com',
            'password' => Hash::make('12345678'),
			'name'=>'朵朵',
			'special_skill'=>'雜技',
			'license'=>'丙級打雜證照',
			'license_img_path'=>'JJJ',
			//'permission'=>7,
			'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
        ],
		[
			'id_number'=>'qet18',
            'email' => 'small8@gmail.com',
            'password' => Hash::make('12345678'),
			'name'=>'小八',
			'special_skill'=>'雜技',
			'license'=>'丙級打雜證照',
			'license_img_path'=>'JJJ',
			//'permission'=>7,
			'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
        ],
		[
			'id_number'=>'qet19',
            'email' => 'mounnn@gmail.com',
            'password' => Hash::make('12345678'),
			'name'=>'山田',
			'special_skill'=>'雜技',
			'license'=>'丙級打雜證照',
			'license_img_path'=>'JJJ',
			//'permission'=>7,
			'company_id'=>DB::table('companies')->where('name', '五菱機台有限公司')->first()->id
        ]
		]);
		
		
	}
}