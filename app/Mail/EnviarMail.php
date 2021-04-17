<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
        public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('templates.mensaje')
        ->subject('Mensaje de confirmación')
        ->attach($this->data['file']->getRealPath(),
        [
            'as'=>$this->data['file']->getClientOriginalName(),
            'mime'=>$this->data['file']->getClientMimeType(),
        ])
        ->cc($this->data['email2'])
        ->with(['mensaje'=>$this->data]);
    }
}
