<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConferenceRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('ConferenceRole')->insert(array (
            0 =>
            array (
                'ConfID' => 'flog_2020',
                'Role' => 'Chair',
                'AuthenticationID' => 2,
            ),
            1 =>
            array (
                'ConfID' => 'jone_2021',
                'Role' => 'Chair',
                'AuthenticationID' => 2,
            ),
            2 =>
            array (
                'ConfID' => 'flog_2020',
                'Role' => 'Chair',
                'AuthenticationID' => 3,
            ),
            3 =>
            array (
                'ConfID' => 'jone_2021',
                'Role' => 'Reviewer',
                'AuthenticationID' => 3,
            ),
            4 =>
            array (
                'ConfID' => 'flog_2020',
                'Role' => 'Reviewer',
                'AuthenticationID' => 4,
            ),
            5 =>
            array (
                'ConfID' => 'jone_2021',
                'Role' => 'Reviewer',
                'AuthenticationID' => 4,
            ),
            6 =>
            array (
                'ConfID' => 'flog_2020',
                'Role' => 'Reviewer',
                'AuthenticationID' => 5,
            ),
            7 =>
            array (
                'ConfID' => 'jone_2021',
                'Role' => 'Chair',
                'AuthenticationID' => 5,
            ),
            8 =>
            array (
                'ConfID' => 'flog_2020',
                'Role' => 'Reviewer',
                'AuthenticationID' => 6,
            ),
            9 =>
            array (
                'ConfID' => 'jone_2021',
                'Role' => 'Reviewer',
                'AuthenticationID' => 6,
            ),
        ));


    }
}
