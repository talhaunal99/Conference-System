<?php

use Illuminate\Database\Seeder;

class ConferenceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Conference')->delete();
        
        \DB::table('Conference')->insert(array (
            0 => 
            array (
                'ConfID' => 'flog_2020',
                'CreationDateTime' => '2020-11-01 13:53:00',
                'Name' => 'Finance Logix',
                'ShortName' => 'flog',
                'Year' => 2020,
                'StartDate' => '2020-11-09',
                'EndDate' => '2020-11-12',
                'Submission_Deadline' => '2020-11-23',
                'WebSite' => 'www.financelogix.com',
                'CreatorUser' => 2,
                'approved' => 0,
            ),
            1 => 
            array (
                'ConfID' => 'jone_2021',
                'CreationDateTime' => '2020-11-30 13:38:00',
                'Name' => 'Java One',
                'ShortName' => 'jone',
                'Year' => 2021,
                'StartDate' => '2020-12-07',
                'EndDate' => '2020-12-09',
                'Submission_Deadline' => '2020-12-15',
                'WebSite' => 'https://www.oracle.com/code-one/',
                'CreatorUser' => 2,
                'approved' => 1,
            ),
        ));
        
        
    }
}