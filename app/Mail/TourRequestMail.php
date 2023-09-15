<?php

use App\Models\around;
use Illuminate\Mail\Mailable;

class TourRequestMail extends Mailable
{
    public $tourRequest;

    public function __construct(around $tourRequest)
    {
        $this->tourRequest = $tourRequest;
    }

    public function build()
    {
        return $this->subject('New Tour Request')
            ->markdown('tour_request_mail');
    }
}
