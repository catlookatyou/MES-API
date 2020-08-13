<?php
use Illuminate\Database\Seeder;
namespace database\seeds\SeedPart;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Hash as Hash;
class RelatedSeeds extends SeedPartClass{
	public function run()
    {

		DB::table('tool_selfmade')->insert([
			[
				'tool_id'=>DB::table('tools')->where('id_number', 'TOL0001')->first()->id,
				'self_made_id'=>DB::table('self_mades')->where('id_number', 'SMD0001')->first()->id,
			],
			[
				'tool_id'=>DB::table('tools')->where('id_number', 'TOL0002')->first()->id,
				'self_made_id'=>DB::table('self_mades')->where('id_number', 'SMD0001')->first()->id,
			],
		]);
		
		DB::table('outsourcing_purchase_list')->insert([
			[
				'outsourcing_id'=>DB::table('outsourcings')->where('id_number', 'OSC0003')->first()->id,
				'purchase_list_id'=>DB::table('purchase_lists')->where('id_number', 'PUL0005')->first()->id,
			],
			[
				'outsourcing_id'=>DB::table('outsourcings')->where('id_number', 'OSC0004')->first()->id,
				'purchase_list_id'=>DB::table('purchase_lists')->where('id_number', 'PUL0007')->first()->id,
			],
		]);
		
		DB::table('self_made_stuff')->insert([
			[
				'stuff_id'=>DB::table('stuffs')->where('id_number', 'STU0001')->first()->id,
				'self_made_id'=>DB::table('self_mades')->where('id_number', 'SMD0003')->first()->id,
			],
			[
				'stuff_id'=>DB::table('stuffs')->where('id_number', 'STU0010')->first()->id,
				'self_made_id'=>DB::table('self_mades')->where('id_number', 'SMD0003')->first()->id,
			],
			[
				'stuff_id'=>DB::table('stuffs')->where('id_number', 'STU0011')->first()->id,
				'self_made_id'=>DB::table('self_mades')->where('id_number', 'SMD0003')->first()->id,
			],
			[
				'stuff_id'=>DB::table('stuffs')->where('id_number', 'STU0010')->first()->id,
				'self_made_id'=>DB::table('self_mades')->where('id_number', 'SMD0004')->first()->id,
			],
			[
				'stuff_id'=>DB::table('stuffs')->where('id_number', 'STU0012')->first()->id,
				'self_made_id'=>DB::table('self_mades')->where('id_number', 'SMD0004')->first()->id,
			],
			[
				'stuff_id'=>DB::table('stuffs')->where('id_number', 'STU0013')->first()->id,
				'self_made_id'=>DB::table('self_mades')->where('id_number', 'SMD0004')->first()->id,
			],
			[
				'stuff_id'=>DB::table('stuffs')->where('id_number', 'STU0010')->first()->id,
				'self_made_id'=>DB::table('self_mades')->where('id_number', 'SMD0005')->first()->id,
			],
			[
				'stuff_id'=>DB::table('stuffs')->where('id_number', 'STU0012')->first()->id,
				'self_made_id'=>DB::table('self_mades')->where('id_number', 'SMD0005')->first()->id,
			],
			[
				'stuff_id'=>DB::table('stuffs')->where('id_number', 'STU0013')->first()->id,
				'self_made_id'=>DB::table('self_mades')->where('id_number', 'SMD0005')->first()->id,
			],
		]);
	}
}