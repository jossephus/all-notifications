<?php

namespace Jossephus\AllNotifications\Tests;

use Orchestra\Testbench\TestCase;
use Jossephus\AllNotifications\AllNotificationsServiceProvider;
use Illuminate\Support\Facades\File;

class AllNotificationsCommandTest extends TestCase
{

	protected function getPackageProviders($app)
	{
		return [AllNotificationsServiceProvider::class];
	}


	/** @test */
	public function true_is_true()
	{
		$this->assertTrue(true);
	}

	/** @test */
	public function the_all_notifications_command_works()
	{
		if (!$this->app->files->exists(app_path('Notifications'))) {
			$this->app->files->makeDirectory(app_path('Notifications'));
		}

		$this->artisan('notifications:all')->assertExitCode(0);
	}

	/** @test */

	public function prints_no_notifications_if_there_is_no_notifications_directory()
	{
		$this->app->files->deleteDirectory(app_path('Notifications'));
		$this->artisan('notifications:all')
			->expectsOutput('No Notifications')
			->assertExitCode(0);
	}


	/** @test */
	public function notifications_all_command_lists_all_notifications()
	{
		/** TODO:// Check if the command outputs The File name  */
		$this->assertTrue(true);
		// $headers = [
		// 	'Notifications',
		// ];

		// $this->app->files->put(app_path('Notifications/TestNotification.php'), '');

		// $value = $this
		// 	->artisan('notifications:all')
		// 	->execute();
		// $this->assertFileExists(app_path('Notifications/TestNotification.php'));
	}
}
