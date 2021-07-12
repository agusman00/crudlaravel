<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5f9b85;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Nama Depan</th>
    <th>Nama Belakang</th>
    <th>Perusahaan</th>
    <th>Email</th>
    <th>Nomor Telepon</th>
  </tr>
  @php
      $no = 1;
  @endphp
  @foreach ($data as $row)
  <tr>
    <th scope="row">{{$no++}}</th>
    <td>{{$row->namadepan}}</td>
    <td>{{$row->namabelakang}}</td>
    <td>{{$row->perusahaan}}</td>
    <td>{{$row->email}}</td>
    <td>+62 {{$row->tlpn}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
