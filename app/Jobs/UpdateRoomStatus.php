<?php

namespace App\Jobs;

use App\Models\rooms;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdateRoomStatus implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $room;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(rooms $room)
    {
        //
        $this->$room = $room;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        if($this->room->check_out_date < now()){
            $this->room->status = 'available';
            $this->room->save();
        }
    }
}
