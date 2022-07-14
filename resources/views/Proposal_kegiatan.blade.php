@extends('layout/latihan')

@section('title', 'Proposal Kegiatan')

@section('breadcrumps')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>

@endsection('breadcrumps')

@section('content')
<div class="content mt-3">
 
    <div class="animated fadeIn">
        <h1>Proposal Kegiatan</h1>
         <br>
    </div>

    <div class= "card" >
        <div class= "card-header">
            <div class= "pull-left">
            <h6>Buat Proposal Kegiatan</h6>
            </div>
        </div>
    </div>

    <form>
        <div class="row mb-2">
          <label for="inputNAMA" class="col-sm-2 col-form-label">NPM</label>
          <div class="col-sm-9">
            <input type="Nama" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="row mb-2">
          <label for="inputNPM" class="col-sm-2 col-form-label">Nama Anggota</label>
          <div class="col-sm-9">
            <input type="NPM" class="form-control" id="inputPassword3">
          </div>
        </div>
        
        <div class="row mb-3">
          <label for="inputNPM" class="col-sm-2 col-form-label">Asal Organisasi</label>
          <div class="col-sm-9">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
              <label class="form-check-label" for="gridRadios2">
                BEM (Badan Esekutif Mahasiswa)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
              <label class="form-check-label" for="gridRadios2">
                BEM (Badan Esekutif Mahasiswa)
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-2">
            <label for="inputNAMA" class="col-sm-2 col-form-label">ID Laporan</label>
            <div class="col-sm-9">
              <input type="Nama" class="form-control" id="inputEmail3">
            </div>
        </div>

        <div class="row mb-2">
            <label for="inputNAMA" class="col-sm-2 col-form-label">Nama Kegiatan</label>
            <div class="col-sm-9">
              <input type="Nama" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-2">
            <label for="inputNAMA" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
            <div class="col-sm-9">
                <div class="row g-3">
                    <div class="col-sm">
                      <input type="text" class="form-control" placeholder="Date" aria-label="City">
                    </div>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="month" aria-label="State">
                    </div>
                    <div class="col-sm">
                      <input type="text" class="form-control" placeholder="Year" aria-label="Zip">
                    </div>
                </div>
            </div>
        </div>
      
      <div class="row mb-2">
        <label for="inputNAMA" class="col-sm-2 col-form-label">File Proposal Kegiatan</label>
        <div class="col-sm-9">
            <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
    </div>
      
    </form>   
</div>

@endsection