<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ThankYou extends Mailable
{
    use Queueable, SerializesModels;
    public  $days;
    public  $today;
    public $user;
    public $room;
    public $totalPrice;
    public $checkInDate;
    public $checkoutDate;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $today,$days,$user, $room, $totalPrice, $checkInDate, $checkoutDate)
    {
        $this->user = $days;
        $this->user = $today;
        $this->user = $user;
        $this->room = $room;
        $this->totalPrice = $totalPrice;
        $this->checkInDate = $checkInDate;
        $this->checkoutDate = $checkoutDate;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('dangthanhthuy022002@gmail.com', 'AUGUSTINE')
                    ->view('mail.thankyou')
                    ->subject('Thank You')
                    ->with([
                        'days' => $this->days,
                        'today' => $this->today,
                        'user' => $this->user,
                        'room' => $this->room,
                        'totalPrice' => $this->totalPrice,
                        'checkInDate' => $this->checkInDate,
                        'checkoutDate' => $this->checkoutDate,
                    ]);
    }
    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
