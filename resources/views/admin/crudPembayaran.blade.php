<section>
	<div class="content">
		<h1>CRUD PEMBAYARAN</h1>

		<br>
		<a href="{{url('admin/home')}}">kembali</a>
		<a href="{{url('admin/tambah/pembayaran')}}">tambah</a>

		<table border="1">
		
			<tr>
				<th>Id Pembayaran</th>
				<th>Tanggal</th>
				<th>Petugas</th>
				<th>Nama Siswa</th>
				<th>Kelas</th>
				<th>bulan dibayar</th>
				<th>tahun dibayar</th>
				<th>Jumlah Bayar</th>
				<th>Tahun</th>
				<th>aksi</th>
			</tr>
			@foreach($pembayaran as $row)
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
				<td>					
					<a href="{{url('admin/edit/pembayaran/'.$row->id_pembayaran)}}">edit</a>
					<form action="{{url('admin/delete/pembayaran'.$row->id_pembayaran)}}" method="post">
						@csrf
						@method('DELETE')
						<button>delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</section>