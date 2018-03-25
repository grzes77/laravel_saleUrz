<?php

use Illuminate\Database\Seeder;
use App\Faculty;

class FacultiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faculties =   ['Biologiczno-rolniczy',
                        'Ekonomi',
                        'Filologiczny',
                        'Matematyczno-Przyrodniczy',
                        'Medyczny',
                        'Muzyki',
                        'Pedagogiczny',
                        'Prawa i Administracji',
                        'Socjologiczno-Historyczny',
                        'Sztuki',
                        'Wychowania Fizycznego',
                        'Biotechnologi'];


        foreach ($faculties as $faculty) {

            $facult = new Faculty();
            $facult->name_faculty = $faculty;
            $facult->save();

        }
    }
}
