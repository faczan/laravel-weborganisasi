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
       
         
    <div class= "card" >
        <div class= "card-header">
            <div class= "pull-left">
            <strong>Program kerja</strong>
            </div>
        </div>
        <div class="pull-right">
            
       
    </div>
     <div class="card-body table-responsive">
        <a class="btn btn-info" href="program/create">Tambah</a>
        <br/><br/>
    
        <table class="table table-bordered">
    
        <tr class="text-center">
            <th>id program kerja</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Nama_Organisasi </th>
            <th>Nama_program_kerja </th>
            <th>Tanggal_program_kerja </th>
            
            <th colspan="2">Aksi</th>
            
        </tr>
        @foreach ($program as $key=>$value)
        <tr>
            <td>{{ $value->id_program_kerja }}</td> 
            <td>{{ $value->NPM }}</td>
            <td>{{ $value->Nama}}</td>
            <td>{{ $value->Nama_Organisasi}}</td>
            <td>{{ $value->Nama_program_kerja }}</td>
            <td>{{ $value->Tanggal_program_kerja }}</td>
            
           
            <td>
                <form action="{{ url('program/'.$value->id) }}" method="Post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
           
        </tr>
        @endforeach
           
       
    </table>
     </div>
    
   
</div>
</div>    
@endsection