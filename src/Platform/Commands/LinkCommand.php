<?php

declare(strict_types=1);

namespace Orchid\Platform\Commands;

use Illuminate\Console\Command;

class LinkCommand extends Command
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'orchid:link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a symbolic link from "vendor/orchid" to "public/orchid"';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        if (file_exists(public_path('orchid'))) {
            $this->error('The "public/orchid" directory already exists.');

            return;
        }

        $this->laravel->make('files')->link(realpath(PLATFORM_PATH.'/public/'), public_path('orchid'));

        $this->info('The [public/orchid] directory has been linked.');
    }
}
