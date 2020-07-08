@extends('adminlte.master')

@section('content')

<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Buat Pertanyaan</h3>
	</div>
	<!-- /.card-header -->
	<!-- form start -->
	<form role="form" method="POST" action="/pertanyaan">
		@csrf
		<div class="card-body">
			<div class="form-group">
				<label for="judul">Judul Pertanyaan</label>
				<input type="text" name="judul" class="form-control" id="judul" placeholder="Masukan Judul Pertanyaan">
			</div>
			<div class="form-group">
				<label for="isi">Isi Pertanyaan</label>
				<textarea class="textarea" placeholder="Masukan Isi Pertanyaan" id="isi" name="isi" style="width: 100%; height: 200px; padding: 10px;"></textarea>
			</div>
		</div>
		<!-- /.card-body -->

		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Kirim</button>
		</div>
	</form>
</div>

@endsection

@push('summer')

<!-- <script src="{{asset('/adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
	$(function () {
    // Summernote
    $('.textarea').summernote({
    	height: 400	
    })
})
</script> -->

@endpush