<?php

namespace Database\Seeders;

use App\Models\Vehicle;

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    public function run()
    {
        Vehicle::create(['code' => 'V001', 'owner' => 'John Doe', 'brand' => 'Toyota', 'number' => 'ABC123', 'color' => 'Red']);
        Vehicle::create(['code' => 'V002', 'owner' => 'Jane Smith', 'brand' => 'Honda', 'number' => 'XYZ456', 'color' => 'Blue']);
        Vehicle::create(['code' => 'V003', 'owner' => 'Michael Johnson', 'brand' => 'Ford', 'number' => 'LMN789', 'color' => 'Green']);
        Vehicle::create(['code' => 'V004', 'owner' => 'Emily Davis', 'brand' => 'Chevrolet', 'number' => 'DEF321', 'color' => 'Black']);
        Vehicle::create(['code' => 'V005', 'owner' => 'Chris Lee', 'brand' => 'Nissan', 'number' => 'GHI654', 'color' => 'White']);

    }
}
