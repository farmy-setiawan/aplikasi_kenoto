<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi IHI KENOTO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <center><h1>{{ $title }}</h1></center>
    <p>Tanggal Cetak : {{ $date }}</p>
    <p>Dengan Total : <b>@currency($datas)</b></p>
   
  
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>NAMA</th>
            <th>JUMLAH (Rp.)</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->nama }}</td>
            <td>@currency($user->jumlah)</td>
        </tr>
        @endforeach
    </table>
  
</body>
</html>