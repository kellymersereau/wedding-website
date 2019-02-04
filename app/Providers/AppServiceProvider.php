<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
	    $primary_urls = [
		    [ 'url'       => '/',
			    'label'     => 'Kelly Mersereau and Brian Taylor\'s Wedding - October 11, 2019',
			    'nav-text'  => 'Home' ],
		
		    [ 'url'       => '/our-story',
			    'label'     => 'Our story',
			    'nav-text'  => 'Our story' ],
		    
		    [ 'url'       => '/wedding-details',
			    'label'     => 'Details about our wedding!',
			    'nav-text'  => 'Details' ],
		
		    [ 'url'       => '/wedding-party',
			    'label'     => 'Information about our wedding party!',
			    'nav-text'  => 'Wedding Party' ],
		    
		    [ 'url'       => '/registry',
			    'label'     => 'Gift Registry Information',
			    'nav-text'  => 'Gift Registry' ],
		
		    [ 'url'       => '/rsvp',
			    'label'     => 'RSVP to our wedding',
			    'nav-text'  => 'RSVP']
	
	    ];
	
	    view()->share('primary_urls', $primary_urls);
	    
	    $secondary_urls = [
	    	
		    [ 'url'       => '/wedding-details/accommodations',
		    'label'     => 'Accommodations',
		    'nav-text'  => 'Accommodations' ],
		
		    [ 'url'       => '/wedding-details/other-events',
			    'label'     => 'Details about other events during our wedding weekend',
			    'nav-text'  => 'Other Events' ]
	    ];
	
	    view()->share('secondary_urls', $secondary_urls);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
