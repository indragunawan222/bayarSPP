<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
	<h3>Data Pembayaran SPP</h3>
 
	<a href="home"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="tambahpembayaran/store" method="post">
		{{ csrf_field() }}
		id pembayaran<input type="text"name="id_pembayaran" required="required"> <br/>
		nisn<input type="nomer"name="nisn" required="required"> <br/>
		nama<input type="text"name="nama" required="required"> <br/>
		kelas<input type="text"name="kelas" required="required"> <br/>
        tgl dibayar<input type="nomer"name="tgl_dibayar" require="required"> <br/>
		<label for="bulan_dibayar">bulan dibayar</label>
				<select name="bulan_dibayar" id="bulan_dibayar">
					<option value="">pilih bulan bayar</option>
						<option value="januari" {{old('bulan_dibayar',(@$pembayaran->bulan_dibayar == 'januari')? 'selected' : '')}}>Januari</option>
						<option value="febuari" {{old('bulan_dibayar',(@$pembayaran->bulan_dibayar == 'febuari')? 'selected' : '')}}>febuari</option>
						<option value="maret" {{old('bulan_dibayar',(@$pembayaran->bulan_dibayar == 'maret')? 'selected' : '')}}>maret</option>
						<option value="april" {{old('bulan_dibayar',(@$pembayaran->bulan_dibayar == 'april')? 'selected' : '')}}>april</option>
						<option value="mei" {{old('bulan_dibayar',(@$pembayaran->bulan_dibayar == 'mei')? 'selected' : '')}}>mei</option>
						<option value="juni" {{old('bulan_dibayar',(@$pembayaran->bulan_dibayar == 'juni')? 'selected' : '')}}>juni</option>
						<option value="juli" {{old('bulan_dibayar',(@$pembayaran->bulan_dibayar == 'juli')? 'selected' : '')}}>juli</option>
						<option value="agustus" {{old('bulan_dibayar',(@$pembayaran->bulan_dibayar == 'agustus')? 'selected' : '')}}>agustus</option>
						<option value="september" {{old('bulan_dibayar',(@$pembayaran->bulan_dibayar == 'september')? 'selected' : '')}}>september</option>
						<option value="oktober" {{old('bulan_dibayar',(@$pembayaran->bulan_dibayar == 'oktober')? 'selected' : '')}}>oktober</option>
						<option value="november" {{old('bulan_dibayar',(@$pembayaran->bulan_dibayar == 'november')? 'selected' : '')}}>november</option>
						<option value="desember" {{old('bulan_dibayar',(@$pembayaran->bulan_dibayar == 'desember')? 'selected' : '')}}>desember</option>
				</select>
        tahun dibayar<input type="nomer"name="tahun_dibayar" required="required"> <br/>
		jumlah bayar<input type="nomer"name="jumlah_bayar" required="required"> <br/>
        <input type="submit" value="BAYAR">
	</form>
 
</body>
</html>