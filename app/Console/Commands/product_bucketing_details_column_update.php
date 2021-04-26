<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class product_bucketing_details_column_update extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:product_bucketing_details_column_update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updating Bucket Talble For Extra Details of Vehicle';

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
        ini_set('memory_limit', '6G');
        echo "\n" . 'start product detail table syncing' . "\n";
	for($i=0;$i<10;$i++){
		echo "hello". $i;
	}
        echo "Updation Successfully Completed !!!";
    }

}
