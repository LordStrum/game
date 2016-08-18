<?php

use Illuminate\Database\Seeder;
use \App\Models\BuildingTypes;

class BuildingTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Fill the database with the default buildings. It's gonna look dirty
     *
     * @return void
     */
    public function run()
    {
        BuildingTypes::create([
            "name" => 'School',
            "category" => 'services',
            "description" => 'A School',
            "energy" => 5,
            "baseCost" => 1000,
        ]);

        BuildingTypes::create([
            "name" => 'University',
            "category" => 'services',
            "description" => 'A university',
            "energy" => 10,
            "baseCost" => 10000,
        ]);

        BuildingTypes::create([
            "name" => 'Fire Station',
            "category" => 'services',
            "description" => 'A fire station',
            "energy" => 5,
            "baseCost" => 2000,
        ]);

        BuildingTypes::create([
            "name" => 'Police Station',
            "category" => 'services',
            "description" => 'A Police Station',
            "energy" => 5,
            "baseCost" => 1000,
        ]);

        BuildingTypes::create([
            "name" => 'Clinic',
            "category" => 'services',
            "description" => 'A clinic',
            "energy" => 5,
            "baseCost" => 1000,
        ]);

        BuildingTypes::create([
            "name" => 'Hospital',
            "category" => 'services',
            "description" => 'A hospital',
            "energy" => 10,
            "baseCost" => 10000,
        ]);

        BuildingTypes::create([
            "name" => 'Cemetery',
            "category" => 'services',
            "description" => 'A cemetery',
            "energy" => 1,
            "baseCost" => 1000,
        ]);

        BuildingTypes::create([
            "name" => 'Airport',
            "category" => 'transportation',
            "description" => 'An airport',
            "energy" => 10,
            "baseCost" => 10000,
        ]);

        BuildingTypes::create([
            "name" => 'International Airport',
            "category" => 'transportation',
            "description" => 'An International Airport',
            "energy" => 100,
            "baseCost" => 1000000,
        ]);

        BuildingTypes::create([
            "name" => 'Bus Depot',
            "category" => 'transportation',
            "description" => 'A bus depot',
            "energy" => 10,
            "baseCost" => 10000,
        ]);

        BuildingTypes::create([
            "name" => 'Harbor',
            "category" => 'transportation',
            "description" => 'A harbor',
            "energy" => 10,
            "baseCost" => 10000,
        ]);

        BuildingTypes::create([
            "name" => 'Landfill',
            "category" => 'services',
            "description" => 'A landfill',
            "energy" => 2,
            "baseCost" => 1000,
        ]);

        BuildingTypes::create([
            "name" => 'Metro',
            "category" => 'transportation',
            "description" => 'A metro',
            "energy" => 50,
            "baseCost" => 50000,
        ]);

        BuildingTypes::create([
            "name" => 'Prison',
            "category" => 'services',
            "description" => 'A prison',
            "energy" => 10,
            "baseCost" => 20000,
        ]);

        BuildingTypes::create([
            "name" => 'Railway',
            "category" => 'transportation',
            "description" => 'Railway',
            "energy" => 50,
            "baseCost" => 100000,
        ]);

        BuildingTypes::create([
            "name" => 'Road',
            "category" => 'transportation',
            "description" => 'Road',
            "energy" => 50,
            "baseCost" => 100000,
        ]);
    }
}