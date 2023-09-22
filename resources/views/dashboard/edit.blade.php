@extends('layouts.dash')

@section('title', 'Edit Index')
@section('content')
<form action="{{route('updateAbsen', $data->id)}}" method="post">
  @csrf
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
    </div>
  </div>
  <div class="row mb-3">
    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nis" name="nis" value="{{$data->nis}}">
    </div>
  </div>
  <div class="row mb-3">
    <label for="rayon" class="col-sm-2 col-form-label">Rayon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="rayon" name="rayon" value="{{$data->rayon}}">
    </div>
  </div>
  <div class="row mb-3">
    <label for="rombel" class="col-sm-2 col-form-label">Rombel</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="rombel" name="rombel" value="{{$data->rombel}}">
    </div>
  </div>


  <!-- keterangan -->
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Keterangan</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="keterangan" id="gridRadios1" value="Hadir" {{$data->keterangan == 'Hadir'? 'checked' : ''}}>
        <label class="form-check-label" for="gridRadios1">
          Hadir
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="keterangan" id="gridRadios2" value="Izin" {{$data->keterangan == 'Izin'? 'checked' : ''}}>
        <label class="form-check-label" for="gridRadios2">
          Izin
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="keterangan" id="gridRadios3" value="Sakit" {{$data->keterangan == 'Sakit'? 'checked' : ''}}>
        <label class="form-check-label" for="gridRadios3">
          Sakit
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="keterangan" id="gridRadios3" value="Alpa" {{$data->keterangan == 'Alpa'? 'checked' : ''}}>
        <label class="form-check-label" for="gridRadios4">
          Alpa
        </label>
      </div>
      
    </div>
  </fieldset>
    <!-- end keterangan -->
  <button type="submit" class="btn btn-primary">Masuk</button>
</form>
@endsection