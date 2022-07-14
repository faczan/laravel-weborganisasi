@extends('admin_layout/home')

@section('title', 'manajemen profi')

@section('breadcrumps')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>manajemen profil</h1>
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
        Isi home
    </div>
    <br/>
    <form method="POST" action="{{ url('anggota') }}" >
        @csrf 
        NPM : <input type="text" name="NPM"><br/>
        NAMA : <input type="text" name="NAMA"><br/>
        Alamat : <input type="text" name="Alamat"><br/>
        Tempat_lahir : <input type="text" name="Tempat_lahir"><br/>
        Tanggal Lahir : <input type="text" name="Tanggal_Lahir"><br/>
        NAMA_Organisasi : <input type="text" name="NAMA_Organisasi"><br/>

        <button type="submit">simpan</button>

    </form>
    
       
</div>
@endsection

