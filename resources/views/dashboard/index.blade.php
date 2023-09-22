@extends('layouts.dash')
@section('title', 'User')
@section('content')

<form action="{{route('storeAbsen')}}" method="post">
  @csrf
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nis" name="nis">
    </div>
  </div>
  <div class="row mb-3">
    <label for="rayon" class="col-sm-2 col-form-label">Rayon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="rayon" name="rayon">
    </div>
  </div>
  <div class="row mb-3">
    <label for="rombel" class="col-sm-2 col-form-label">Rombel</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="rombel" name="rombel">
    </div>
  </div>


  <!-- keterangan -->
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Keterangan</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="keterangan" id="gridRadios1" value="Hadir" checked>
        <label class="form-check-label" for="gridRadios1">
          Hadir
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="keterangan" id="gridRadios2" value="Izin">
        <label class="form-check-label" for="gridRadios2">
          Izin
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="keterangan" id="gridRadios3" value="Sakit">
        <label class="form-check-label" for="gridRadios3">
          Sakit
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="keterangan" id="gridRadios3" value="Alpa">
        <label class="form-check-label" for="gridRadios4">
          Alpa
        </label>
      </div>
      
    </div>
  </fieldset>
    <!-- end keterangan -->
  <button type="submit" class="btn btn-primary">Masuk</button>
</form>
<hr>
<!-- table -->
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>NIS</th>
            <th>Rayon</th>
            <th>Rombel</th>
            <th>Ket.</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        @foreach($data as $dt)
        <tr>       
          <td>{{$i++}}</td>
          <td>{{$dt->name}}</td>
          <td>{{$dt->nis}}</td>
          <td>{{$dt->rayon}}</td>
          <td>{{$dt->rombel}}</td> 
          <td>{{$dt->keterangan}}</td> 
          <td>
          <form action="{{route('indexEdit', $dt->id)}}" class="d-inline" method="get">
            <button class="btn btn-outline-success">Edit</button>
                @csrf
            </form>
            <form action="{{route('deleteAbsen', $dt->id)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin menghapus absen?')">
            <button class="btn btn-outline-danger" >Delete</button>
                @csrf
            </form>
          </td>     
        </tr>
        @endforeach
    </tbody>
</table>
<!-- end table -->

@endsection