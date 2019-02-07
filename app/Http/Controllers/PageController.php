<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	//
	public function index()
	{
		$page_url = '/';
		$title = 'Kelly Mersereau and Brian Taylor\'s Wedding - October 11, 2019';
		$description = 'Learn everything you need to know about Kelly Mersereau and Brian Taylor\'s Wedding!';
		$keywords = 'wedding, new jersey, asbury park, the berkeley hotel, love, really cool people, kelly, brian, mersereau, taylor';
		$pageClass = "home";
		
		return view('pages.home', [
			'title' => $title,
			'description'=>$description,
			'keywords'=>$keywords,
			'pageClass'=>$pageClass,
			'page_url'=>$page_url
		]);
	}
	
	public function story()
	{
		$page_url = '/our-story';
		$title = 'Our Story';
		$description = 'Read the story of how we met, our relationship and life together.';
		$keywords = 'wedding, new jersey, asbury park, the berkeley hotel, love, really cool people, kelly, brian, mersereau, taylor';
		$pageClass = "our-story";
		
		return view('pages.our-story', [
			'title' => $title,
			'description'=>$description,
			'keywords'=>$keywords,
			'pageClass'=>$pageClass,
			'page_url'=>$page_url
		]);
	}
	
	public function weddingDetails()
	{
		$page_url = '/wedding-details';
		$title = 'Details about our wedding!';
		$description = 'Specific details about our wedding on October 11, 2019';
		$keywords = 'wedding, new jersey, asbury park, the berkeley hotel, love, really cool people, kelly, brian, mersereau, taylor, information, details';
		$pageClass = "details";
		
		return view('pages.details', [
			'title' => $title,
			'description'=>$description,
			'keywords'=>$keywords,
			'pageClass'=>$pageClass,
			'page_url'=>$page_url
		]);
	}
	
	public function accommodations()
	{
		$page_url = '/wedding-details/accommodations';
		$title = 'Accommodations';
		$description = 'Accommodations';
		$keywords = 'wedding, new jersey, asbury park, the berkeley hotel, love, really cool people, kelly, brian, mersereau, taylor, information, details, accommodations';
		$pageClass = "accommodations";
		
		return view('pages.accommodations', [
			'title' => $title,
			'description'=>$description,
			'keywords'=>$keywords,
			'pageClass'=>$pageClass,
			'page_url'=>$page_url
		]);
	}
	
	
	public function otherEvents()
	{
		$page_url = '/wedding-details/other-events';
		$title = 'Other events';
		$description = 'Details about other events during our wedding weekend';
		$keywords = 'wedding, new jersey, asbury park, the berkeley hotel, love, really cool people, kelly, brian, mersereau, taylor, information, details, plans, bar crawl';
		$pageClass = "other-events";
		
		return view('pages.other-events', [
			'title' => $title,
			'description'=>$description,
			'keywords'=>$keywords,
			'pageClass'=>$pageClass,
			'page_url'=>$page_url
		]);
	}
	
	public function weddingParty()
	{
		$page_url = '/wedding-party';
		$title = 'Our Wedding Party';
		$description = 'Information about our wedding party!';
		$keywords = 'wedding, new jersey, asbury park, the berkeley hotel, love, really cool people, kelly, brian, mersereau, taylor, information, wedding party, bridesmaids, groomsmen, maid of honor, best man';
		$pageClass = "wedding-party";
		
		return view('pages.wedding-party', [
			'title' => $title,
			'description'=>$description,
			'keywords'=>$keywords,
			'pageClass'=>$pageClass,
			'page_url'=>$page_url
		]);
	}
	
	public function registry()
	{
		$page_url = '/registry';
		$title = 'Gift Registry Information';
		$description = 'Our wedding registry!';
		$keywords = 'wedding, new jersey, asbury park, the berkeley hotel, love, really cool people, kelly, brian, mersereau, taylor, information, amazon wedding registry, amazon, bed bath and beyond, wedding registry, wayfair, wayfair wedding registry';
		$pageClass = "registry";
		
		return view('pages.registry', [
			'title' => $title,
			'description'=>$description,
			'keywords'=>$keywords,
			'pageClass'=>$pageClass,
			'page_url'=>$page_url
		]);
	}
	
	public function rsvp()
	{
		$page_url = '/rsvp';
		$title = 'RSVP to our wedding';
		$description = 'RSVP to our wedding';
		$keywords = 'wedding, new jersey, asbury park, the berkeley hotel, love, really cool people, kelly, brian, mersereau, taylor, rsvp';
		$pageClass = "rsvp";
		
		return view('pages.rsvp', [
			'title' => $title,
			'description'=>$description,
			'keywords'=>$keywords,
			'pageClass'=>$pageClass,
			'page_url'=>$page_url
		]);
	}
	
}
