<?php

namespace App\Mail;

use App\Cakes\Models\Cake;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CakeListEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Cake
     */
    private Cake $cakes;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Cake $cakes)
    {
        $this->cakes = $cakes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.email')
            ->subject('Temos Bolinhos!!!')
            ->with([
                'cakes' => $this->cakes,
            ]);
    }
}
