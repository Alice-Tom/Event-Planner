<?php

namespace App\Console\Commands;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DeleteAllExpiredMedia extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:media';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete Media that is past the expiry date';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Event::where('expiry_date', '<=', Carbon::now())->each(function ($event) {
            $event->clearMediaCollection();
        });
    }
}
