<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConferenceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('Conference')->insert(array (
            0 =>
                array (
                    'ConfID' => 'dmc_2020',
                    'CreationDateTime' => '2020-12-02 16:22:00',
                    'Name' => 'Data Mining Conference',
                    'ShortName' => 'dmc',
                    'Year' => 2020,
                    'StartDate' => '2020-12-05',
                    'EndDate' => '2020-12-20',
                    'Submission_Deadline' => '2020-12-13',
                    'WebSite' => 'www.dataMiningConference.com',
                    'CreatorUser' => 3,
                    'approved' => 1,
                ),
            1 =>
                array (
                    'ConfID' => 'flog_2020',
                    'CreationDateTime' => '2020-11-01 13:53:00',
                    'Name' => 'Finance Logix',
                    'ShortName' => 'flog',
                    'Year' => 2021,
                    'StartDate' => '2020-11-09',
                    'EndDate' => '2020-11-12',
                    'Submission_Deadline' => '2020-11-23',
                    'WebSite' => 'www.financelogix.com',
                    'CreatorUser' => 2,
                    'approved' => 1,
                ),
            2 =>
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
            3 =>
                array (
                    'ConfID' => 'jone_2021_1',
                    'CreationDateTime' => '2020-12-10 16:13:00',
                    'Name' => 'Java One++',
                    'ShortName' => 'jone',
                    'Year' => 2021,
                    'StartDate' => '2021-12-20',
                    'EndDate' => '2021-12-30',
                    'Submission_Deadline' => '2021-12-25',
                    'WebSite' => 'www.java_one++.com',
                    'CreatorUser' => 3,
                    'approved' => 1,
                ),
            4 =>
                array (
                    'ConfID' => 'jone_2021_2',
                    'CreationDateTime' => '2020-12-24 16:16:00',
                    'Name' => 'Java One--',
                    'ShortName' => 'jone',
                    'Year' => 2021,
                    'StartDate' => '2021-12-25',
                    'EndDate' => '2021-12-30',
                    'Submission_Deadline' => '2021-12-28',
                    'WebSite' => 'www.java_one--.com',
                    'CreatorUser' => 3,
                    'approved' => 1,
                ),
        ));


    }
}
