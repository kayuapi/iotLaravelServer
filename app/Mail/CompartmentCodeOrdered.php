<?php

namespace App\Mail;

use App\Compartment;
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
        $this->compartment = $compartment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@chmbox.tech')
                    ->view('emails.compartmentcodeOrdered')
                    ->subject('Please retrive/ return your item')
                    ->with([
                        'compartmentItem' => $this->compartment->item->name,
                        'compartmentCode' => $this->compartment->passcode,
                    ]);
    }
}
