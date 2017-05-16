<?php 

namespace Astroanu\Lexicon;

use Illuminate\Support\ServiceProvider;
use Astroanu\Lexicon\Repositories\LexiconRepository;
use Astroanu\Lexicon\Contracts\LexiconRepositoryContract;
;
class LexiconProvider extends ServiceProvider {

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(LexiconRepositoryContract::class, LexiconRepository::class);
	}

	/**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

		$this->publishes([
		    __DIR__ . '/../../config/lexicon.php' => config_path('astroanu/lexicon.php')
		], 'config');
    }
}
