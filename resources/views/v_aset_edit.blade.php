<html>
<head>
  <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
  <h2></h2>
  <h3>Data Aset</h3>
 
  <a href="/aset"> Kembali</a>
  
  <br/>
  <br/>
 
 @foreach($edit as $e)
  <form action="/formulir/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id_aset" value="{{ $e->id_aset }}"> <br/>
    Nama <input type="text" required="required" name="nama_brg" value="{{ $e->nama_brg }}"> <br/>
    Merk/Model <input type="text" required="required" name="merk" value="{{ $e->merk }}"> <br/>
    Tahun <input type="number" required="required" name="tahun" value="{{ $e->tahun }}"> <br/>
    <button class="btn btn-primary pull-right" type="submit" name="btnreg"><i class="fa fa-save"> SIMPAN </button></i>
  </form>
  @endforeach
 
 
</body>
</html>