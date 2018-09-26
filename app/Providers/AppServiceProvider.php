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
			    'label'     => 'Our Story',
			    'nav-text'  => 'Our Story' ],
		    
		    [ 'url'       => '/wedding-details',
			    'label'     => 'Details about our wedding!',
			    'nav-text'  => 'Wedding Details' ],
		    
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
	
	    $secondary_urls = [
		    [ 'url'       => '/wedding-details/hotel',
			    'label'     => 'Hotel Information',
			    'nav-text'  => 'Hotel Information' ],
		
		    [ 'url'       => '/wedding-details/weekend-plans',
			    'label'     => 'Details about our wedding weekend plans',
			    'nav-text'  => 'Wedding Weekend Plans' ],
		
		    [ 'url'       => '/wedding-details/bridal-party',
			    'label'     => 'Information about our bridal party!',
			    'nav-text'  => 'Bridal Party' ]
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
