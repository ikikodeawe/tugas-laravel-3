@extends('adminlte.master')

@section('content')


<div class="card card-widget">
	<div class="card-header">
		<div class="user-block">
			<img class="img-circle" src="{{ asset('adminlte/dist/img/user1-128x128.jpg')}}" alt="User Image">
			<span class="username"><a href="#">Jonathan Burke Jr.</a></span>
			<span class="description">Shared publicly - 7:30 PM Today</span>
		</div>
		<!-- /.user-block -->
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<!-- post text -->
		<h1>{{$tanya->judul}}</h1>

		<p>{{$tanya->isi}}</p>

		<!-- Social sharing buttons -->
		<button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
	</div>
	<!-- /.card-body -->
	<div class="card-footer card-comments">
		@foreach($answer as $key => $jawab)
		<div class="card-comment">
			<!-- User image -->
			<img class="img-circle img-sm" src="{{ asset('adminlte/dist/img/user4-128x128.jpg')}}" alt="User Image">

			<div class="comment-text">
				<span class="username">
					Nora Havisham
					<span class="text-muted float-right">8:03 PM Today</span>
				</span><!-- /.username -->
				{{$jawab->isi}}
			</div>
			<!-- /.comment-text -->
		</div>
		@endforeach
		<!-- /.card-comment -->
	</div>
	<!-- /.card-footer -->
	<div class="card-footer">
		<form action="/jawaban/{{$tanya->id}}" method="POST">
			@csrf
			<img class="img-fluid img-circle img-sm" src="{{ asset('adminlte/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
			<!-- .img-push is used to add margin to elements next to floating images -->
			<div class="img-push">
				<input type="text" class="form-control form-control-sm" name="jawab" placeholder="Press enter to post comment">
			</div>
		</form>
	</div>
	<!-- /.card-footer -->
</div>


@endsection