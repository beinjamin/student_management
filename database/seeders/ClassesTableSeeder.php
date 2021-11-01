<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("classes")->inserts([
            ["libelle" => "6eme"],
            ["libelle" => "4eme"],
            ["libelle" => "5eme"],
            ["libelle" => "3eme"],
            ["libelle" => "Séconde"],
            ["libelle" => "Premiere"],

        ]);
    }
}
