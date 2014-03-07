@extends('layouts.admin')


@section('content')

<div class="col-md-12">
	{{ link_to_route('posts.create', 'Create a new post', null, array('class' => 'btn btn-primary')) }}
</div>
@if($posts->count())
<h4>These are your current posts</h4>
	<div class="col-md-12">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Title</th>
					<th>Description</th>
					<th>Date Created</th>
					<th>Preview</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $p)
				<tr>
					<td>{{ $p->title }}</td>
					<td>{{ substr($p->body, 0, 120). '[...]'}}</td>
					<td><span class="label label-info">{{ Carbon::createFromTimestamp(strtotime($p->created_at))->diffForHumans() }}</span></td>
					<td>{{ link_to_route('posts.show', 'Preview', array($p->id), array('class' => 'btn btn-info')) }}</td>
					<td>{{ link_to_route('posts.edit', 'Edit', array($p->id), array('class' => 'btn btn-warning')) }}</td>
					<td>
						{{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $p->id))) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
						{{ Form::close() }}

					</td>
						
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@else
	<div class="alert alsert-info col-md-4" style="margin-top: 15px">You currently have no posts</div>
	@endif



@stop