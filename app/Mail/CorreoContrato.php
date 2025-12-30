<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorreoContrato extends Mailable
{
    use Queueable, SerializesModels;

    public $archivos;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $archivos)
    {
        $this->archivos = $archivos;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $correo = $this->view('contrats.correo')
        ->subject('Contrato firmado');
        foreach($this->archivos as $archivo){
            $correo->attach($archivo);
        }
        return $correo;
    }
}
