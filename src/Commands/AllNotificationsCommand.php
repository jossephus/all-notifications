<?php

namespace Jossephus\AllNotifications\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

use function PHPSTORM_META\map;

class AllNotificationsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notifications:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'All  Notifications or Files in App\Notification folder';

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
        $headers = [
            'Notifications',
        ];

        if (File::exists(app_path('Notifications/'))) {
            $allFiles = collect(File::allFiles(app_path('Notifications/')))->map(function ($file) {
                return [$file->getRelativePathName()];
            });
            return $this->table($headers, $allFiles->toArray());
        }
        return $this->info('No Notifications');
    }
}
