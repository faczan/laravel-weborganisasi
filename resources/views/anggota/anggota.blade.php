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
                    <li><a href="#">anggota</a></li>
                    <li class="active">tambah</li>
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
            <strong>Data Anggota</strong>
            </div>
        </div>
        <div class="pull-right">
            
       
    </div>
     <div class="card-body table-responsive">
        <a class="btn btn-info" href="anggota/create">Tambah</a>
        <br/><br/>
    
        <table class="table table-bordered">
    
        <tr class="text-center">
            <th>NPM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tempat Lahir </th>
            <th>Tanggal Lahir </th>
            <th>Organisasi</th>
            <th colspan="2">Aksi</th>
            
        </tr>
        @foreach ($anggota as $key=>$value)
        <tr>
              
            <td>{{ $value->NPM }}</td>
            <td>{{ $value->NAMA}}</td>
            <td>{{ $value->Alamat}}</td>
            <td>{{ $value->Tempat_lahir }}</td>
            <td>{{ $value->Tanggal_Lahir }}</td>
            <td>{{ $value->NAMA_Organisasi }}</td>
            <td><a class="btn btn-info" href="{{url('anggota/'.$value->id.'/edit')}}">
            <i class="fa fa-pencil"></i>
            </a></td>
            <td>
                <form action="{{ url('anggota/'.$value->id) }}" method="Post">
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