<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\user;
use Illuminate\Support\Facades\Mail;

class SendFollowUpEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        // $oneMonthAgo = now()->subMonth();
    
        // $users = order::where('created_at', '<=', $oneMonthAgo)
        //              ->whereNull('updated_at')
        //              ->get();
    
        // foreach ($users as $user) {
        //     // Send follow-up email
        //     Mail::to($user)->send(new FollowUpEmail());
            
        //     // Update flag to indicate follow-up email sent
        //     $user->update(['updated_at' => now()]);
        // }

            $usersMail = user::select('email')->get();


            $emails = [];

            foreach ($usersMail as $user) {
                $emails[] = $user['email'];
            }


            Mail::send('email.cron', [], function ($message) use ($emails) {
                $message->to($emails)
                    ->subject('Test Cron Job');
            });
            

        }

    
}
