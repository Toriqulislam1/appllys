<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\customerLogin;
use Mail;

class sendmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:sendmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send mail to all user by running';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $usermail = customerLogin::select('email')->get();

        $emails = [];

        foreach ($usermail as $mail) {
            $emails[] = $mail['email'];
        }

        Mail::send('email.cron', [], function ($message) use ($emails) {
            $message->to($emails)->subject('this is test cron job');
        });
    }
}
