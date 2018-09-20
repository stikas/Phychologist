@extends('layouts.base')
@section('content')

	<div class="row margin-b-2">
		@foreach($articles as $article)    
			<div class="col-sm-4">
				<a href="article/{{$article->id}}">
					<img class="img-responsive thumbnail" src="/uploaded_images/{{$article->image_name}}" alt="">
					<div class="caption">
						<h4>{{$article->title}}</h4>
						<p>{{$article->description}}</p>
					</div>
				</a>
			</div>
		@endforeach
	</div>

@endsection


