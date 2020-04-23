<section>
	

	<div class="content">
		
		<h1>SPP</h1>
		<hr><br>
		<form action="{{url('admin/siswa',@$siswa->nisn)}}" method="post">
			@if(!empty($siswa))
				@method('PATCH')
			@endif
				
			@csrf

			<div>
				<label for="nisn">id_pembayaran</label>
				<input type="text" id="id_pembayaran" name="pembayaran" value="{{old('nisn',@$siswa->nisn)}}">
			</div>
			<div>
				<label for="nis">nisn</label>
				<input type="text" id="nisn" name="nisn" value="{{old('nis',@$siswa->nis)}}">
			</div>
			<div>
				<label for="nama">nama</label>
				<input type="text" id="nama" name="nama" value="{{old('nama',@$siswa->nama)}}">
			</div>
			<div>
				<label for="nama">kelas</label>
				<input type="text" id="kelas" name="kelas" value="{{old('kelas',@$siswa->kelas)}}">
			</div>
			<div>
				<label for="nama">tgl_dibayar</label>
				<input type="text" id="tgl_dibayar" name="tgl_dibayar" value="{{old('tgl_dibayar',@$siswa->tgl_dibayar)}}">
			</div>
			<div>
				<label for="nama">bulan_dibayar</label>
				<input type="text" id="bulan_dibayar" name="bulan_dibayar" value="{{old('bulan_dibayar',@$siswa->bulan_dibayar)}}">
			</div>
			<div>
				<label for="nama">tahun_dibayar</label>
				<input type="text" id="tahun_dibayar" name="tahun_dibayar" value="{{old('tahun_dibayar',@$siswa->tahun_dibayar)}}">
			</div>
			<div>
				<label for="nama">jumalh_bayar</label>
				<input type="text" id="jumalah_bayar" name="jumlah_bayar" value="{{old('jumlah_bayar',@$siswa->jumlah_bayar)}}">
			</div>
			<div>
				<label for="alamat">alamat</label>
				<input type="text" id="alamat" name="alamat" value="{{old('alamat',@$siswa->alamat)}}">
			</div>
			<div>
				<label for="no_telp">no_telp</label>
				<input type="text" id="no_telp" name="no_telp" value="{{old('no_telp',@$siswa->no_telp)}}">
			</div>
			<div>
				<select name="id_spp" id="id_spp">
					<option value="">pilih SPP</option>
					@foreach($spp as $rows)
					<option value="{{$rows->id_spp}}"
				
						{{old('id_spp')}}

						@if(@$siswa->id_spp == $rows->id_spp)
							selected
						@endif

						>{{$rows->tahun}}</option>
					@endforeach
				</select>
			</div>
			<div>
				<button type="submit">kirim</button>
			</div>
		</form>



	</div>


</section>