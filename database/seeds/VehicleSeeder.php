<?php

declare(strict_types=1);

use App\Brand;
use App\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$brands = Brand::all();
		foreach ($brands as $brand) {
			factory(Vehicle::class, 2)->create(['brand_id' => $brand->id]);
		}
	}
}
