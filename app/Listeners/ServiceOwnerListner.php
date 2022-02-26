<?php

namespace App\Listeners;

use App\Events\ServiceRequestEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ServiceOwnerListner
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ServiceRequestEvent  $event
     * @return void
     */
    public function handle(ServiceRequestEvent $event)
    {
        //Mail to owner of app
        $to = env('MAIL_FROM_ADDRESS');
        $subject = 'New Repair inquiry for '.setting('app_name');
        $body = 'test body';
        $data = array(
                    'name' => $event->name,
                    'email' => $event->email,
                    'phone' => $event->phone,
                    'model' => $event->model,
                    'issue' => $event->issue,
                    'message' => $event->message,
                );
        $view = 'mails.inquiry_owner';

        
        //activity()->log(env('MAIL_FROM_ADDRESS'));
        return appmail($to,$subject,$body,$data,$view,true);
    }
}
