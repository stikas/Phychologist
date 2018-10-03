@extends('layouts.base')
@section('content')
	<!-- Page Content -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						<h1>{{$article->title}}</h1>
						<p>ΤΕΛ. ΑΝΑΝΕΩΣΗ: <span class="glyphicon glyphicon-time"></span>{{$article->updated_at->format('d-m-Y')}}</p>
						 {!! Share::currentPage()->facebook()->twitter()->linkedin() !!}
					</div>
				</div>
			</div>


			<!-- /.row -->

			<div class="row">
				<div class="col-sm-8">

					<!-- Image -->
					<figure class="margin-b-2">
						@if($article->media_type == "video")
						<iframe width="660" height="355" src='{!! $article->video_url !!}' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						@else
						<img class="img-responsive big_article_image" src="/uploaded_images/{{$article->image_name}}" alt="">
						@endif
						<figcaption class="margin-t-h">
								
						</figcaption>
					</figure>
					{!! nl2br(e($article->article)) !!}

				</div>
				<div class="col-sm-4">

				</div>
			</div>
		</div>

@endsection