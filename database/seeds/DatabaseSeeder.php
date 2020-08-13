<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use database\seeds\SeedPart;
class DatabaseSeeder extends Seeder
{
	private static $seedparts = [
		SeedPart\CompaniesSeeds::class,
		SeedPart\PeopleSeeds::class,
		SeedPart\ResourceSeeds::class,
		SeedPart\WorkSeeds::class,
		SeedPart\PermissionSeeds::class,
		SeedPart\RelatedSeeds::class,
	];
		
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		//php artisan migrate:rollback
		//php artisan migrate:refresh --seed
		
		//composer dump-autoload
		
        //show tables;
        // DROP TABLE ...;
        //mysql -u root -p MES

		$this->call(self::$seedparts);
    }
}
