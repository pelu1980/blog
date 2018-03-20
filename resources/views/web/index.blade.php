@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Lista de Posts</h1>

			@foreach($posts as $post)
				<div class="panel panel-default">
					
					<div class="panel-heading">
						
						{{$post->titulo}}
						<a href="{{ route('category' , $post->category->slug) }}" class="pull-right btn btn-primary"> {{$post->category->descripcion}} </a>
					</div>
					<div class="panel-body">
						@if($post->imagen)
							<img src="{{ $post->imagen }}" class="img-responsive">
						@endif

						{{ $post->extracto }}

						<a href="{{ route('post' , $post->slug) }}" class="pull-right"> Leer Más </a>
						
					</div>
				</div>				
			@endforeach	

			{{$posts->render()}}
		</div>
	</div>

</div>


@endsection