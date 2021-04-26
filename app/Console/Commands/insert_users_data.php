<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class insert_users_data extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:insert_users_data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updating users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $row = 1;
        $str = array('name', 'email', 'created_at', 'updated_at', 'updated_by');
        echo "Start inserting  :  " . implode('-',$str). "\n";
        if (($handle = fopen(__DIR__ . "/../sample_data.csv", "r")) !== FALSE) {

            while (($data = fgetcsv($handle, 59000, ",")) !== FALSE) {
                if($row!=1){
                    \App\Models\User::insert(array(
                           'name' => $data[1],
                           'email' => $data[2],
                           'created_at' => $data[3],
                           'updated_at' => $data[4],
                           'updated_by' => $data[5],
                       ));
                }
                echo "Row : " . $row . "\n";
                $row++;
            }
            fclose($handle);
        }
        echo $row . PHP_EOL;
        echo "Updation Successfully Completed !!!";
    }

}
