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
                    'ConfID' => 'dmc_2020',
                    'Tag' => 'Artificial Intelligence',
                ),
            1 =>
                array (
                    'ConfID' => 'dmc_2020',
                    'Tag' => 'Data Mining',
                ),
            2 =>
                array (
                    'ConfID' => 'flog_2020',
                    'Tag' => 'Climate',
                ),
            3 =>
                array (
                    'ConfID' => 'flog_2020',
                    'Tag' => 'Economics Topics',
                ),
            4 =>
                array (
                    'ConfID' => 'flog_2020',
                    'Tag' => 'Economy Updates',
                ),
            5 =>
                array (
                    'ConfID' => 'flog_2020',
                    'Tag' => 'Financial Risk',
                ),
            6 =>
                array (
                    'ConfID' => 'flog_2020',
                    'Tag' => 'Threats',
                ),
            7 =>
                array (
                    'ConfID' => 'jone_2021',
                    'Tag' => 'Automation',
                ),
            8 =>
                array (
                    'ConfID' => 'jone_2021',
                    'Tag' => 'Cybersecurity',
                ),
            9 =>
                array (
                    'ConfID' => 'jone_2021',
                    'Tag' => 'Technology Updates',
                ),
            10 =>
                array (
                    'ConfID' => 'jone_2021_1',
                    'Tag' => 'Automation',
                ),
            11 =>
                array (
                    'ConfID' => 'jone_2021_1',
                    'Tag' => 'Cybersecurity',
                ),
            12 =>
                array (
                    'ConfID' => 'jone_2021_1',
                    'Tag' => 'Technology Updates',
                ),
            13 =>
                array (
                    'ConfID' => 'jone_2021_2',
                    'Tag' => 'Automation',
                ),
            14 =>
                array (
                    'ConfID' => 'jone_2021_2',
                    'Tag' => 'Cybersecurity',
                ),
            15 =>
                array (
                    'ConfID' => 'jone_2021_2',
                    'Tag' => 'Technology Updates',
                ),
        ));
    }
}
