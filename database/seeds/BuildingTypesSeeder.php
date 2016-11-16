<?php

use Illuminate\Database\Seeder;
use \App\Models\BuildingTypes;
use \App\Models\Effects;
use \App\Models\Properties;

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
        $building = BuildingTypes::create([
            "name" => 'School',
            "category" => 'services',
            "description" => 'A School',
            "energy" => 5,
            "baseCost" => 5000000,
            "buildingTime" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Literacy")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 5,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 2,
        ]);

        $building = BuildingTypes::create([
            "name" => 'University',
            "category" => 'services',
            "description" => 'A university',
            "energy" => 10,
            "baseCost" => 20000000,
            "buildingTime" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Literacy")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 10,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 10,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Fire Station',
            "category" => 'services',
            "description" => 'A fire station',
            "energy" => 5,
            "baseCost" => 5000000,
            "buildingTime" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 3,
        ]);

        $property = Properties::where("name", "Crime")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 2,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Police Station',
            "category" => 'services',
            "description" => 'A Police Station',
            "energy" => 5,
            "baseCost" => 5000000,
            "buildingTime" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 3,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Crime")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 10,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Clinic',
            "category" => 'services',
            "description" => 'A clinic',
            "energy" => 5,
            "baseCost" => 5000000,
            "buildingTime" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 3,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Disease")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 5,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Crime")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Hospital',
            "category" => 'services',
            "description" => 'A hospital',
            "energy" => 10,
            "baseCost" => 25000000,
            "buildingTime" => 3,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 5,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Disease")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 15,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Crime")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 3,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Cemetery',
            "category" => 'services',
            "description" => 'A cemetery',
            "energy" => 1,
            "baseCost" => 5000000,
            "buildingTime" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Disease")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 5,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Airport',
            "category" => 'transportation',
            "description" => 'An airport',
            "energy" => 10,
            "baseCost" => 30000000,
            "buildingTime" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 15,
        ]);

        $building = BuildingTypes::create([
            "name" => 'International Airport',
            "category" => 'transportation',
            "description" => 'An International Airport',
            "energy" => 100,
            "baseCost" => 100000000,
            "buildingTime" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 30,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Bus Depot',
            "category" => 'transportation',
            "description" => 'A bus depot',
            "energy" => 10,
            "baseCost" => 5000000,
            "buildingTime" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 5,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Harbor',
            "category" => 'transportation',
            "description" => 'A harbor',
            "energy" => 10,
            "baseCost" => 50000000,
            "buildingTime" => 10,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 15,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Landfill',
            "category" => 'services',
            "description" => 'A landfill',
            "energy" => 2,
            "baseCost" => 10000000,
            "buildingTime" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Disease")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 3,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Metro',
            "category" => 'transportation',
            "description" => 'A metro',
            "energy" => 50,
            "baseCost" => 60000000,
            "buildingTime" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 10,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Prison',
            "category" => 'services',
            "description" => 'A prison',
            "energy" => 10,
            "baseCost" => 25000000,
            "buildingTime" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Crime")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 5,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Railway',
            "category" => 'transportation',
            "description" => 'Railway',
            "energy" => 50,
            "baseCost" => 100000000,
            "buildingTime" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 10,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Road',
            "category" => 'transportation',
            "description" => 'Road',
            "energy" => 50,
            "baseCost" => 70000000,
            "buildingTime" => 1,
        ]);

        // Get ID of property this next effect will affect
        $property = Properties::where("name", "Unemployment")->firstOrFail();

        Effects::create([
            "property" => $property->id,
            "relation" => $building->id,
            "affect" => 3,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Coal mine',
            "category" => 'raw',
            "description" => 'A Coal mine',
            "energy" => 10,
            "baseCost" => 25000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Oil Well',
            "category" => 'raw',
            "description" => 'An Oil Well',
            "energy" => 10,
            "baseCost" => 25000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Oil Refinery',
            "category" => 'manufactory',
            "description" => 'An Oil Refinery',
            "energy" => 20,
            "baseCost" => 100000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Wheat Farm',
            "category" => 'raw',
            "description" => 'A Wheat Farm',
            "energy" => 10,
            "baseCost" => 25000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Ranch',
            "category" => 'raw',
            "description" => 'A ranch',
            "energy" => 10,
            "baseCost" => 25000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Wheat Refinery',
            "category" => 'manufactory',
            "description" => 'A Wheat Refinery',
            "energy" => 20,
            "baseCost" => 100000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Meat Processor',
            "category" => 'manufactory',
            "description" => 'A Meat Processor',
            "energy" => 20,
            "baseCost" => 100000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Water Tower',
            "category" => 'raw',
            "description" => 'A Water Tower',
            "energy" => 1,
            "baseCost" => 10000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Clay Mine',
            "category" => 'raw',
            "description" => 'A Clay Mine',
            "energy" => 10,
            "baseCost" => 25000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Cement Kiln',
            "category" => 'raw',
            "description" => 'A Cement Kiln',
            "energy" => 10,
            "baseCost" => 25000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Timber Mill',
            "category" => 'raw',
            "description" => 'A Timber Mill',
            "energy" => 10,
            "baseCost" => 25000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Brick House',
            "category" => 'manufactory',
            "description" => 'A Brick house',
            "energy" => 20,
            "baseCost" => 100000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Concrete Mixer',
            "category" => 'manufactory',
            "description" => 'A Concrete Mixer',
            "energy" => 20,
            "baseCost" => 100000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Lumber Refinery',
            "category" => 'manufactory',
            "description" => 'A Lumber Refinery',
            "energy" => 20,
            "baseCost" => 100000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Rubber Processor',
            "category" => 'raw',
            "description" => 'A Rubber Processor',
            "energy" => 10,
            "baseCost" => 25000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Iron Mine',
            "category" => 'raw',
            "description" => 'An Iron Mine',
            "energy" => 10,
            "baseCost" => 25000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Bauxite Mill',
            "category" => 'raw',
            "description" => 'A Bauxite Mill',
            "energy" => 10,
            "baseCost" => 25000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Lead Mine',
            "category" => 'raw',
            "description" => 'A Lead Mine',
            "energy" => 10,
            "baseCost" => 25000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Steel Mill',
            "category" => 'manufactory',
            "description" => 'A Steel Mill',
            "energy" => 20,
            "baseCost" => 100000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Aluminum Factory',
            "category" => 'manufactory',
            "description" => 'An Aluminum Factory',
            "energy" => 20,
            "baseCost" => 100000,
            "buildingTime" => 1,
        ]);

        $building = BuildingTypes::create([
            "name" => 'Ammo Factory',
            "category" => 'manufactory',
            "description" => 'An Ammo Factory',
            "energy" => 20,
            "baseCost" => 100000,
            "buildingTime" => 1,
        ]);

    }
}
