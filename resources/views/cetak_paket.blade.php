<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4><br>
	</center>
 
	<table class="table table-hover" id="paket">
                    <thead class="text-warning">
                    	<tr>
                      <th>ID</th>
                      <th>OPD</th>
                      <th>Pekerjaan</th>
                      <th>Pagu</th>
                      <th></th>
                  </tr>
                    </thead>
                    @php $no = 1; @endphp
                    @foreach($cetak as $a)
                    <tbody>
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $a->opd }}</td>
                        <td>{{ $a->pekerjaan }}</td>
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
 
</body>
</html>