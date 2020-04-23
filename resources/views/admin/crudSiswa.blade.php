<section>
	<div class="content">
		<h1>CRUD SISWA</h1>

		<br>
		<a href="{{url('admin/home')}}">kembali</a>
		<a href="{{url('admin/tambah/siswa')}}">tambah</a>
		<a href="{{url('admin/crud/siswa')}}">hapus</a>

		<table>
		<tr>
				<th>No</th>
				<th>Id Pembayaran</th>
				<th>nisn</th>
				<th>Nama Siswa</th>
				<th>Kelas</th>
				<th>tgl dibayar</th>
				<th>bulan dibayar</th>
				<th>tahun dibayar</th>
				<th>Jumlah bayar</th>
				<th>opsi</th>

			</tr>
			@foreach($siswa as $row)
			<tr>
				<td>{{isset($i)? ++$i : $i = 1 }}</td>
				<td>{{$row->id_pembayaran}}</td>
				<td>{{$row->nisn}}</td>
				<td>{{$row->nama}}</td>
				<td>{{$row->kelas}}</td>
				<td>{{$row->tgl_dibayar}}</td>
				<td>{{$row->bulan_dibayar}}</td>
				<td>{{$row->tahun_dibayar}}</td>
				<td>{{$row->jumlah_bayar}}</td>
				
			</tr>		
					<a href="{{url('admin/edit/siswa/'.$row->nisn)}}">edit</a>
					<form action="{{url('admin/delete/siswa'.$row->nisn)}}" method="post">
						@csrf
						@method('DELETE')
					</form>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</section>