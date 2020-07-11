<html>
<head>
	<title>Membuat CRUD Pada Laravel </title>
	<style type="text/css">
    .pagination li{
      float: left;
      list-style-type: none;
      margin:5px;
      }
  	</style>
  	<link rel="stylesheet" type="text/css" href="'/css/app.css'">
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>
 
	<a href="/inputt"> + Tambah Pegawai Baru</a>
	
	<br/>

	<p>Cari Data Barang :</p>
	<form action="/halaman/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Barang .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>

	<br/>
 
	<table border="1">
		<tr>
			<th>Nama Barang</th>
			<th>Merk/Model</th>
			<th>Tahun Pembelian</th>
			<th>Opsi</th>
		</tr>
		@foreach($aset_bpbj as $p)
		<tr>
			<td>{{ $p->nama_brg }}</td>
			<td>{{ $p->merk }}</td>
			<td>{{ $p->tahun }}</td>
			<td>
				<a href="/formulir/edit/{{ $p->id_uuid }}">Edit</a>
				|
				<a href="/formulir/hapus/{{ $p->id_aset }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
  					Halaman : {{ $aset_bpbj->currentPage() }} <br/>
                    Jumlah Data : {{ $aset_bpbj->total() }} <br/>
                    Data Per Halaman : {{ $aset_bpbj->perPage() }} <br/>
                   
                   
                    {{ $aset_bpbj->links() }}
 
</body>
</html>