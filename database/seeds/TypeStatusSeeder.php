<?php

use Illuminate\Database\Seeder;
use App\type_statuses;
class TypeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // este tendra id 1
        $typestatus = new type_statuses();
        $typestatus->name = "Tu tipo de estado";
        $typestatus->save();
    }
}
