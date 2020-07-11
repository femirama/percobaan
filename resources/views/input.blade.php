<!DOCTYPE html>
<html>
<head>
  <title>input</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> -->
</head>
<body>


                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                    <br><br>
                    <div class="row">
                    
                    <br><br><br>
                    <form action="/prosess" method="post">
                    <!-- <form action="/formulir/insert" method="post"> -->
                      <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Barang</label>
                          <input name="nama_brg" type="text" id="nama_brg" class="form-control" value="{{ old('nama_brg') }}"/>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Merk</label>
                          <input name="merk" type="text" id="merk" class="form-control" value="{{ old('merk') }}" />
                        </div>
                      </div>






                     <!--  <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nomor Paket</label>
                          <input name="no_paket" type="text" id="no_paket" class="form-control" required />
                        </div>
                      </div>



                      <br><br><br>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Program</label>
                          <input name="program" type="text" id="program" class="form-control" required/>
                        </div>
                      </div>
                     


                      <br><br><br>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kegiatan</label>
                          <input name="kegiatan" type="text" id="kegiatan" class="form-control" required/>
                        </div>
                      </div>

                      <br><br><br>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Pekerjaan</label>
                          <input name="pekerjaan" type="text" id="pekerjaan" class="form-control" required/>
                        </div>
                      </div>

                      <br><br><br>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><span class="text-danger"> *)</span> Format Berita Acara</label>
                          <input name="format" type="text" id="format" class="form-control" />
                        </div>
                      </div> -->

                      <!-- <br><br><br>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tanggal</label>
                          <input name="tgl" type="date" id="tgl" class="form-control" />
                        </div>
                      </div> -->

                      <br><br><br>
                      <div class="col-md-4">
                        <div class="form-group">
                          <!-- <label class="bmd-label-floating">Tahun Anggaran</label> -->
                          <select name="tahun" class="form-control " required="">
                            <option selected value="">--Tahun Anggaran--</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                          </select>
                        </div>
                      </div>

                      <br><br><br>
                      <!-- <div class="col-md-4"> -->
                        <!-- <div class="form-group"> -->
                          <!-- <label class="bmd-label-floating">Pokja</label> -->
                         <!--  <select name="pokja" class="form-control " required>
                              <option selected value="">--PILIH POKJA--</option>
                              <option value="Pokja I">Pokja I</option>
                              <option value="Pokja II">Pokja II</option>
                              <option value="Pokja III">Pokja III</option>
                              <option value="Pokja IV">Pokja IV</option>
                              <option value="Pokja V">Pokja V</option>
                              <option value="Pokja VI">Pokja VI</option>
                              <option value="Pokja VII">Pokja VII</option>
                            </select>
                        </div>
                      </div> -->
                </div>
                  
                   <br><br><br>

                   <button class="btn btn-primary pull-right" type="submit" name="btnreg"><i class="fa fa-save"> SIMPAN </button></i>
                    <div class="clearfix"></div>
                  </form>

                  <br/>
                   
</body>
</html>