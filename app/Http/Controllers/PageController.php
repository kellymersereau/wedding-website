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
	
	public function about()
	{
		$page_url = '/about';
		$title = 'About Our Wedding';
		$description = 'Read about everything you need to know for our wedding!';
		$keywords = 'wedding, new jersey, asbury park, the berkeley hotel, love, really cool people, kelly, brian, mersereau, taylor';
		$pageClass = "about";
		
		return view('pages.about', [
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
		$title = 'Wedding Information';
		$description = 'Specific information about our wedding on October 11, 2019';
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
	
	public function hotel()
	{
		$page_url = '/wedding-details/hotel';
		$title = 'Hotel Information';
		$description = 'Hotel Information';
		$keywords = 'wedding, new jersey, asbury park, the berkeley hotel, love, really cool people, kelly, brian, mersereau, taylor, information, details';
		$pageClass = "hotel";
		
		return view('pages.hotel', [
			'title' => $title,
			'description'=>$description,
			'keywords'=>$keywords,
			'pageClass'=>$pageClass,
			'page_url'=>$page_url
		]);
	}
	
	
	public function weekendPlans()
	{
		$page_url = '/wedding-details/weekend-plans';
		$title = 'Wedding weekend plans';
		$description = 'Details about our wedding weekend plans';
		$keywords = 'wedding, new jersey, asbury park, the berkeley hotel, love, really cool people, kelly, brian, mersereau, taylor, information, details, plans, bar crawl';
		$pageClass = "plans";
		
		return view('pages.plans', [
			'title' => $title,
			'description'=>$description,
			'keywords'=>$keywords,
			'pageClass'=>$pageClass,
			'page_url'=>$page_url
		]);
	}
	
	public function bridalParty()
	{
		$page_url = '/bridal-party';
		$title = 'Our Bridal Party';
		$description = 'Information about our bridal party!';
		$keywords = 'wedding, new jersey, asbury park, the berkeley hotel, love, really cool people, kelly, brian, mersereau, taylor, information, bridal party, bridesmaids, groomsmen, maid of honor, best man';
		$pageClass = "bridal-party";
		
		return view('pages.bridal-party', [
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
		$title = 'Registry Information';
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
	
	public function contact()
	{
		$page_url = '/contact';
		$title = 'Contact us!';
		$description = 'Contact us!';
		$keywords = 'wedding, new jersey, asbury park, the berkeley hotel, love, really cool people, kelly, brian, mersereau, taylor, information, contact';
		$pageClass = "contact";
		
		return view('pages.contact', [
			'title' => $title,
			'description'=>$description,
			'keywords'=>$keywords,
			'pageClass'=>$pageClass,
			'page_url'=>$page_url
		]);
	}
	
}
