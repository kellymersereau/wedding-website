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
			    'nav-text'  => 'Wedding' ],
		    
		    [ 'url'       => '/wedding-details',
			    'label'     => 'Details about our wedding!',
			    'nav-text'  => 'Details' ],
		    
		    [ 'url'       => '/registry',
			    'label'     => 'Registry Information',
			    'nav-text'  => 'Registry' ],
		
		    [ 'url'       => '/rsvp',
			    'label'     => 'RSVP to our wedding',
			    'nav-text'  => 'RSVP'],
		    
		    [ 'url'       => '/contact',
			    'label'     => 'Contact us!',
			    'nav-text'  => 'Contact']
	    ];
	
	    view()->share('primary_urls', $primary_urls);
	
			$secondary_urls_home = [
				[ 'url'       => '/our-story',
					'label'     => 'Our Story',
					'nav-text'  => 'Story' ],
				
				[ 'url'       => '/wedding-party',
					'label'     => 'Information about our bridal party!',
					'nav-text'  => 'Bridal Party' ]
			];
	
	    view()->share('secondary_urls_home', $secondary_urls_home);
	    
	    $secondary_urls = [
		    [ 'url'       => '/wedding-details/accomodations',
			    'label'     => 'Accomodations',
			    'nav-text'  => 'Accomodations' ],
		
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
