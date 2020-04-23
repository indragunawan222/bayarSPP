<section>
	<div class="content">
		<h1>Halo {{Session::get('nama')}}</h1>
		<br>
		<a href="{{url('logout')}}">logout</a>
<html>
<head>
</head>
<body>
	<h2>Data Siswa</h2>
 
	<a href="tambahpembayaran">Tambah Pembayaran Baru</a>
	
	<br/>
	<br/>

		<table border="1">

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
			@foreach($pembayaran as $p)
			<tr>
				<td>{{isset($i)? ++$i : $i = 1 }}</td>
				<td>{{$p->id_pembayaran}}</td>
				<td>{{$p->nisn}}</td>
				<td>{{$p->nama}}</td>
				<td>{{$p->kelas}}</td>
				<td>{{$p->tgl_dibayar}}</td>
				<td>{{$p->bulan_dibayar}}</td>
				<td>{{$p->tahun_dibayar}}</td>
				<td>{{$p->jumlah_bayar}}</td>
				<td>	
				<form action="{{url('siswa/delete/deletepembayaranpost'.$p->Id_Pembayaran)}}" method="post">
						@csrf
						@method('DELETE')
						<button>delete</button>
					</form>
			</td>
				
			</tr>
			@endforeach


		</table>
		

		<br>
	</div>
</section>