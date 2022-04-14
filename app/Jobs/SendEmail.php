<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $params;
    protected $mailBBC;
    public function __construct($params, $mailBBC)
    {
        $this->params   = $params;
        $this->mailBBC  = $mailBBC;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       /*  $email = new SendEmail();
        Mail::send($email); */
        $params = $this->params;
        $mailBBC = $this->mailBBC;
        Mail::send('store.pages.contact.sendMail', ['body' => $params['message']], function ($message) use ($params, $mailBBC) {
            $message->from('nguyenhuynhminhman2311999@gmail.com', 'Minh Mẫn');
            $message->to($params['email'], $params['name']);
            foreach ($mailBBC as $mail) {
                $message->bcc($mail);
            }
            $message->subject('Demo Send Mail');
        });
    }
}
