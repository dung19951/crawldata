<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Scraper\Example;

class ScrapeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:example';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $point;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Example $example)
    {
        parent::__construct();
        $this->point = $example;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->point->scrape();
    }
}
