<?php

namespace App\Mail;

use App\Models\booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingReminder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(booking $booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        return $this->view('Mail.booking_reminder')
                    ->with([
                        'booking' => $this->booking,
                    ]);
    }
}
