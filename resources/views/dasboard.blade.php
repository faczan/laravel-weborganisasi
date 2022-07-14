@extends('layout/latihan')

@section('title', 'Dashboard')

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

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Tambah Program kerja</strong>
                </div>
            </div>
            <div class="pull-rigth">
                <a href="{{ url('program')}}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-undo"></i> Back </a>
            </div>
        </div>

        <div class="card-body">

            <div class="row">
                <div class=" col-md-4 offset-md-4">
                    <form action="{{ url('program')}}" method="post">

                        @csrf
                        <div class="form-group">
                            <label>id program kerja</label>
                            <input type="text" name="id program kerja"><br/>
                        </div>
                        
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" name="NPM"><br/>
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="Nama"><br/>
                        </div>

                        <div class="form-group">
                            <label>Nama Organisasi</label>
                            <input type="text" name="Nama Organisasi"><br/>
                        </div>

                        <div class="form-group">
                            <label>Nama program kerja</label>
                            <input type="text" name="Nama program kerja"><br/>
                        </div>

                        <div class="form-group">
                            <label>Tanggal program kerja</label>
                            <input type="text" name="Tanggal program kerja"><br/>
                        </div>

                        <button type="submit">simpan</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>   
@endsection