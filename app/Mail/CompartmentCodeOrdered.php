<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CompartmentCodeOrdered extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * The compartment instance.
     * 
     *  @var Compartment
     */
     private $compartment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Compartment $compartment)
    {
        $this->compartment = $compartment
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('zhicong.tay@gmail.com')
                    ->view('emails.compartmentcode.ordered')
                    ->subject('Please retrive/ return your item')
                    ->with([
                        'compartmentItem' => $this->compartment->item,
                        'compartmentCode' => $this->compartment->code,
                    ]);
    }
}
