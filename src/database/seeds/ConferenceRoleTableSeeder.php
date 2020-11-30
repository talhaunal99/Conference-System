<?php

use Illuminate\Database\Seeder;

class ConferenceRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ConferenceRole')->delete();
        
        \DB::table('ConferenceRole')->insert(array (
            0 => 
            array (
                'ConfID' => 'dmc_2020',
                'Role' => 'Reviewer',
                'AuthenticationID' => 2,
            ),
            1 => 
            array (
                'ConfID' => 'flog_2020',
                'Role' => 'Chair',
                'AuthenticationID' => 2,
            ),
            2 => 
            array (
                'ConfID' => 'jone_2021',
                'Role' => 'Chair',
                'AuthenticationID' => 2,
            ),
            3 => 
            array (
                'ConfID' => 'jone_2021_1',
                'Role' => 'Reviewer',
                'AuthenticationID' => 2,
            ),
            4 => 
            array (
                'ConfID' => 'dmc_2020',
                'Role' => 'Chair',
                'AuthenticationID' => 3,
            ),
            5 => 
            array (
                'ConfID' => 'flog_2020',
                'Role' => 'Chair',
                'AuthenticationID' => 3,
            ),
            6 => 
            array (
                'ConfID' => 'jone_2021',
                'Role' => 'Author',
                'AuthenticationID' => 3,
            ),
            7 => 
            array (
                'ConfID' => 'jone_2021',
                'Role' => 'Reviewer',
                'AuthenticationID' => 3,
            ),
            8 => 
            array (
                'ConfID' => 'jone_2021_1',
                'Role' => 'Chair',
                'AuthenticationID' => 3,
            ),
            9 => 
            array (
                'ConfID' => 'jone_2021_2',
                'Role' => 'Chair',
                'AuthenticationID' => 3,
            ),
            10 => 
            array (
                'ConfID' => 'dmc_2020',
                'Role' => 'Chair',
                'AuthenticationID' => 4,
            ),
            11 => 
            array (
                'ConfID' => 'flog_2020',
                'Role' => 'Reviewer',
                'AuthenticationID' => 4,
            ),
            12 => 
            array (
                'ConfID' => 'jone_2021',
                'Role' => 'Author',
                'AuthenticationID' => 4,
            ),
            13 => 
            array (
                'ConfID' => 'jone_2021',
                'Role' => 'Reviewer',
                'AuthenticationID' => 4,
            ),
            14 => 
            array (
                'ConfID' => 'dmc_2020',
                'Role' => 'Reviewer',
                'AuthenticationID' => 5,
            ),
            15 => 
            array (
                'ConfID' => 'flog_2020',
                'Role' => 'Reviewer',
                'AuthenticationID' => 5,
            ),
            16 => 
            array (
                'ConfID' => 'jone_2021',
                'Role' => 'Author',
                'AuthenticationID' => 5,
            ),
            17 => 
            array (
                'ConfID' => 'jone_2021',
                'Role' => 'Chair',
                'AuthenticationID' => 5,
            ),
            18 => 
            array (
                'ConfID' => 'jone_2021_1',
                'Role' => 'Reviewer',
                'AuthenticationID' => 5,
            ),
            19 => 
            array (
                'ConfID' => 'dmc_2020',
                'Role' => 'Reviewer',
                'AuthenticationID' => 6,
            ),
            20 => 
            array (
                'ConfID' => 'flog_2020',
                'Role' => 'Reviewer',
                'AuthenticationID' => 6,
            ),
            21 => 
            array (
                'ConfID' => 'jone_2021',
                'Role' => 'Author',
                'AuthenticationID' => 6,
            ),
            22 => 
            array (
                'ConfID' => 'jone_2021',
                'Role' => 'Reviewer',
                'AuthenticationID' => 6,
            ),
        ));
        
        
    }
}