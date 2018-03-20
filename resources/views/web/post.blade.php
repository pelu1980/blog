@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>{{ $post->titulo}}</h1>

			
				<div class="panel panel-default">
					
					<div class="panel-heading">
						
						Categoria:
						<a href="{{ route('category' , $post->category->slug) }}" class="btn btn-primary"> {{$post->category->descripcion}} </a>
					</div>
					<div class="panel-body">
						@if($post->imagen)
							<img src="{{ $post->imagen }}" class="img-responsive">
						@endif

						{{ $post->extracto }}
						<hr>

						{!! $post->contenido !!}
						<hr>
						<h6>
							@foreach($post->tags as $tag)
							<a href="{{ route('tag', $tag->slug)}}"><strong> #{{$tag->descripcion}}</strong></a>
							@endforeach
						</h6>
						
					</div>
				</div>				
			

			
		</div>
	</div>

</div>


@endsection