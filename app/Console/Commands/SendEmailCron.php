<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmailCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = [
            'title' => 'Mail from Syahrizal',
            'body' => 'This is for testing email using smtp'
        ];

        \Log::info("Cron is working fine!");
        \Mail::to('syahrizal@gmail.com')->send(new \App\Mail\MyTestMail($data));
    }
}
