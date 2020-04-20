@extends('admin.base')
@section('content')
<style media="screen">
#section {
    width:350px;
    float:left;
    padding:10px;
}
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #3385ff;
}

</style>
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">



<div class="sidebar">

  <ul>
      <p style="text-align:center; color:white;font-size:18px;">
        ADMIN PM
      </p>
    <li><a class="active"href="{{url('admin/home')}}">Home</a></li>
    <li><a href="{{url('admin/petugas')}}">Daftar Petugas</a></li>
    <li><a href="{{url('admin/masyarakat')}}">Daftar Masyarakat</a></li>
    <li><a href="{{url('admin/pengaduan')}}">Daftar Pengaduan</a></li>
    <li><a href="{{url('admin/tanggapan')}}">Daftar Tanggapan</a></li>
    <li style="float:right;"><a href="{{ url('logout') }}">Logout</a></li>

  </ul>
</div>

<br>
<center><font size="5" color="white">Selamat Datang {{Session::get('username')}} !</font></center>

@php
$totalpengaduan = DB::table('pengaduan')->count();
$totalmasyarakat = DB::table('users')->where('level', '=', 'masyarakat')->count();
$totalpetugas = DB::table('users')->where('level', '=', 'petugas')->count();
@endphp

@section('content')

<br>
<center>  
  <a style="background-color: #3385ff;padding: 10px; margin: 10px;text-decoration:none;color:white;">{{$totalpengaduan}} Total pengaduan</a> 
      </center>

<br><br>
<center>
  <a style="background-color: #3385ff;padding: 10px; margin: 10px;text-decoration:none;color:white;">{{$totalmasyarakat}} Total Masyarakat</a> 
      </center>  

<br><br>
<center>
  <a style="background-color: #3385ff;padding: 10px; margin: 10px;text-decoration:none;color:white;">{{$totalpetugas}} Total petugas</a> 
</center>

<br>
     <footer>
      <font color="white">
        <div style="text-align:center;padding-top:10px;">
        2020 © PM
        </div>
      </font>
      </footer>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->