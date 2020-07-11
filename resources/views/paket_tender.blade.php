@extends('v_main')



@section('content')


<script src={{url("https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js")}}></script>
<script src={{url("https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js")}}></script>
<script src={{url("https://code.jquery.com/jquery-3.5.1.js")}}></script>


 <script src={{url("../assets/dataTables.min.js")}}></script>

        <div class="container-fluid">
          
        
          <div class="row">
            

            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Employees Stats</h4>
                  <p class="card-category">New employees on 15th September, 2016</p>
                  <a href="/paket/cetak" class="btn btn-primary" target="_blank">CETAK PDF</a>
    
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover" id="paket">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>OPD</th>
                      <th>Pekerjaan</th>
                      <th>Pagu</th>
                      <th></th>
                    </thead>
                    @php $no = 1; @endphp
                    @foreach($paket_opd as $a)
                    
                    <tbody>
                      <tr>
                        <td width="20">{{ $no++ }}</td>
                        <td width="200">{{ $a->opd }}</td>
                        <td width="400">{{ $a->pekerjaan }}</td>
                        <td>{{ $a->pagu }}</td>
                        <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

<table class="table table-striped table-bordered" id="example">
                      <thead class=" text-primary">
                        <tr>
                            <th><div align="center">NO</th>
                            <th><div align="center">NAMA</th>
                            <th><div align="center">DATA DIRI</th>
                            <!-- <th><div align="center">EMAIL</th> -->
                            <th><div align="center">PERUSAHAAN</th>
                            <th><div align="center">EDIT</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <td>asdfasdf</td>
                        <td>eereeeee</td>
                        <td>asdfasdf</td>
                        <td>asdfaoooooooosdf</td>
                        <td>asdfasdf</td>
                      </tr>
                       <tr>
                        <td>hdfa</td>
                        <td>erjht</td>
                        <td>ppppp</td>
                        <td>asdfaoooooooosdf</td>
                        <td>asdfasdf</td>
                      </tr>

                        
                          
                      </tbody>
                    </table>

<script type="text/javascript">
  $(document).ready(function() {
    $('#paket').DataTable();
} );
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>

@endsection
