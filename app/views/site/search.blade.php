@extends('layouts.master')

@section('content')
@if($results->count())
	@foreach($results as $r)
	<div class="col-lg-8">
		<h1>{{ HTML::link('blog/'.$r->slug, $r->title) }}</h1>
		<p class="lead">by {{ ucwords($r->user->username)}}</p>
		<p><span class="glyphicon glyphicon-time"></span> Posted {{ Carbon::createFromTimeStamp(strtotime($r->created_at))->formatLocalized('%A %d %B %Y')}}</p>
		<p>{{ Str::limit($r->body, 120)}}{{HTML::link('blog/'.$r->slug, 'Read More')}}</p>
		<hr><br>
	</div>
	@endforeach
@else
	<h4>I'm sorry your search returned no results</h4>
@endif
@stop