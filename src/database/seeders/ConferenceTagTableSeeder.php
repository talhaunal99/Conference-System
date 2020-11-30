<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConferenceTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('ConferenceTag')->insert(array (
            0 =>
            array (
                'ConfID' => 'flog_2020',
                'Tag' => 'Climate',
            ),
            1 =>
            array (
                'ConfID' => 'flog_2020',
                'Tag' => 'Economics Topics',
            ),
            2 =>
            array (
                'ConfID' => 'flog_2020',
                'Tag' => 'Economy Updates',
            ),
            3 =>
            array (
                'ConfID' => 'flog_2020',
                'Tag' => 'Financial Risk',
            ),
            4 =>
            array (
                'ConfID' => 'flog_2020',
                'Tag' => 'Threats',
            ),
            5 =>
            array (
                'ConfID' => 'jone_2021',
                'Tag' => 'Automation',
            ),
            6 =>
            array (
                'ConfID' => 'jone_2021',
                'Tag' => 'Cybersecurity',
            ),
            7 =>
            array (
                'ConfID' => 'jone_2021',
                'Tag' => 'Technology Updates',
            ),
        ));


    }
}
