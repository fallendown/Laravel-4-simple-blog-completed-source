@extends('layouts.master')

@section('content')

@foreach($posts as $p)
<div class="col-lg-8">
	<h1>{{ HTML::link('blog/'.$p->slug, $p->title) }}</h1>
	<p class="lead">by {{ ucwords( $p->user->username ) }}</p>
	<hr>
	<p><span class="glyphicon glyphicon-time"></span> Posted {{ Carbon::createFromTimeStamp(strtotime($p->created_at))->formatLocalized('%A %d %B %Y')}}</p>
	<p>{{ Str::limit($p->body, 120)}}{{HTML::link('blog/'.$p->slug, 'Read More')}}</p>
</div>

@endforeach

@stop