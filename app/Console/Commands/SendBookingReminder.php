<?php

namespace App\Console\Commands;

use App\Mail\BookingReminder;
use App\Models\booking;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendBookingReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:booking-reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $today = now()->toDateString();
        $bookings = booking::where('check_out_date_reminder', $today)->get();

        foreach ($bookings as $booking) {
            Mail::to($booking->user->email)->send(new BookingReminder($booking));
        }

        $this->info('Reminder emails sent successfully!');
    }
}
