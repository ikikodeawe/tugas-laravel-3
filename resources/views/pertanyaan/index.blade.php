@extends('adminlte.master')

@section('content')

<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Daftar Pertanyaan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<a href="/pertanyaan/create"><button class="mb-4 btn btn-primary">Buat Pertanyaan Baru</button></a>
		<table class="table table-bordered">
			<thead>                  
				<tr>
					<th style="width: 10px">#</th>
					<th>Judul Pertanyaan</th>
					<th style="width: 40px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($ask as $key => $tanya)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $tanya->judul }}</td>
					<td>
						<a href="/jawaban/{{$tanya->id}}" class="btn btn-sm btn-info">Tampil</a>
						<a href="/pertanyaan/{{$tanya->id}}/edit" class="btn btn-sm btn-warning">Ubah</a>
						<form action="/pertanyaan/{{$tanya->id}}" method="POST" style="display: inline">
							@csrf
							@method('DELETE')	
							<button type="submit" class="btn btn-danger">Hapus</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
	<div class="card-footer clearfix">
		
	</div>
</div>

@endsection