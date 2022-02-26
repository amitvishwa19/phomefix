<?php

namespace App\Listeners;

use App\Events\ServiceRequestEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ServiceSenderListner
{
    
    public function handle(ServiceRequestEvent $event)
    {
        //activity()->log(env('mail will shoot to service sender'));
        //Mail to sender
        $to = $event->email;
        $subject = 'Thanks for choosing '.setting('app_name') . ' get your device repair';
        $body = 'test body';
        $data = array(
                    'name' => $event->name,
                    'message' => $event->message
                );
        $view = 'mails.inquiry';
        return appmail($to,$subject,$body,$data,$view,true);
    }
}
