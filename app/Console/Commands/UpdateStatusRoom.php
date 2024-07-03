<?php

namespace App\Console\Commands;

use App\Models\booking;
use App\Models\rooms;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class UpdateStatusRoom extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updateStatusRoom';

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
        $today = Carbon::now()->toDateString();
        $room = booking::with('room')->get();
        foreach ($room as $rooms) {
            if ($rooms->check_out_date < $today) {
                $rooms->room->status = 'available';
                $rooms->room->save();
            }
        }
    }
}
