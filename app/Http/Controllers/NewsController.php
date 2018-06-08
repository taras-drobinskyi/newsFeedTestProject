<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    
	public function index()
	{

		$allnews = News::all();
		
		return view('news.index',compact('allnews'));
	}

	public function show(News $article)
	{
		return view('news.article',compact('article'));
	}

	public function create()
	{

		return view('news.create');
	}

	public function store()
	{
		
		News::create([
			'title'=> request('title'),
			'description'=>request('description'),
			'body'=>request('body')

		]);

		return redirect('/');
	}

	public function edit(News $article)
	{
		
		return view('news.edit',compact('article'));
	}
	

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
