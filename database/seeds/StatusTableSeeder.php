<?php

use Illuminate\Database\Seeder;
use App\Statuses;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = array(
                    ['statuses' => 'Activo'],
                    ['statuses' => 'Inactivo'],
                );

        foreach ($status as $value) {
            $statuses = new Statuses;
            $statuses->statuses = $value['statuses'];
            $statuses->save();
        }
    }
}
