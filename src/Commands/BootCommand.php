<?php

namespace Hephaestus\Framework\Commands;

use Hephaestus\Framework\Hephaestus;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Console\Signals;
use Illuminate\Support\Facades\Log;
use Illuminate\Console\Command;

class BootCommand extends Command
{

    // use Logs;

    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'bot:boot';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Starts the bot';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        /**
         * @var Application $app
         */

        // $this->output;
        // dd($this->app->getBindings());
        // $this->app->singleton(
        //     Hephaestus::class,
        //     fn () => Hephaestus::make($this->output)
        // );
        /**
         * @var Hephaestus
         */
        $hephaestus = app(Hephaestus::class);
        // $hephaestus->setOutput($this->output);


        // $hephaestus->log("Starting bot.", Level::Info);
        $hephaestus->connect();
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
