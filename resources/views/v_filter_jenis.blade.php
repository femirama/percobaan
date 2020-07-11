
@extends('v_main')

<script src={{url("https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js")}}></script>
<script src={{url("https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js")}}></script>
<script src={{url("https://code.jquery.com/jquery-3.5.1.js")}}></script>     

@section('content')                 
 
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="card">
        <div class="card-header card-header-warning">
        <h4 class="card-title">Jenis Pengadaan</h4>
        <p class="card-category">New employees on 15th September, 2016</p>
        </div>
        <div class="card-body table-responsive">
        <table class="table table-hover" id="tabel">
          <thead class="text-warning">
            <th>#</th>
            <th>Pekerjaan</th>
            <th>Jenis</th>
            <th>Pagu</th>
            <th>HPS</th>
          </thead>
          <tbody>
           @php $i=1 @endphp
           @foreach($filter as $p)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $p->pekerjaan }}</td>
                @if ($p->jenis=='PB') {
                  <td>{{ Pengadaan Barang }}</td>
                }
                else if ($p->jenis=='PK') {
                  <td>{{ Pengadaan Konstruksi }}</td>
                } 
                @endif
              <td>{{ $p->pagu }}</td>
              <td>{{ $p->hps  }}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection


<script type="text/javascript">
  $(document).ready(function() {
    $('#tabel').DataTable();
  });
</script>

