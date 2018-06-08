<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    
	//retieves all data from the news table using News model
	public function index()
	{

		$allnews = News::all();
		
		return view('news.index',compact('allnews'));
	}

	//accepts News model and passes to single article view
	public function show(News $article)
	{
		return view('news.article',compact('article'));
	}

	//redirecst to the view with create form
	public function create()
	{

		return view('news.create');
	}

	//creates a new article and saves it to database, and redirect to the startpage 
	public function store()
	{
		
		News::create([
			'title'=> request('title'),
			'description'=>request('description'),
			'body'=>request('body')

		]);

		return redirect('/');
	}
 	
 	//passes instance of an article to edit page
	public function edit(News $article)
	{
		
		return view('news.edit',compact('article'));
	}
	
	//retrieve an article that need to be updated, and redirect to startpage
	public function update(News $article)
	{
		
		$article->update([
			'title'=> request('title'),
			'description'=>request('description'),
			'body'=>request('body')

		]);

		
		return redirect('/');
	}



}
