@extends('layouts/app')

@section('content')
@if($errors->any())
@foreach($errors->all() as $err)
<p class="alert alert-danger">{{ $err }}</p>
@endforeach
@endif
<form action="{{url('karyawan/'.$data->nip)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6>Formulir Edit Karyawan</h6>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label>NIP </label>
                    <input type="number" class="form-control" name="nip" value="{{$data->nip}}">
                    </div>


                <div class="form-group">
                    <label>Nama Karyawan </label>
                    <input type="text" class="form-control" name="nama_karyawan" value="{{$data->nama_karyawan}}">>
                    </div>

                <div class="form-group">
                    <label>Gaji Karyawan</label>
                    <input type="number" class="form-control" name="gaji_karyawan"value="{{$data->gaji_karyawan}}">>
                    </div>

                <div class="form-group">
                    <label>Alamat </label>
                    <textarea class="form-control" name="alamat">{{$data->alamat}}</textarea>
                    </div>
            
            
                <div class="form-group">
                    <label>Jenis Kelamin </label>
                    <select name="jenis_kelamin" class="custom-select"> 
                        <option value="" selected disabled hidden>Pilih Jenis Kelamin</option>
                        <option value="Pria" {{$data->jenis_kelamin == 'Pria' ? 'selected': ''}}>Pria</option>
                        <option value="Wanita"  {{$data->jenis_kelamin == 'Wanita' ? 'selected': ''}}>Wanita</option>

                    </select>
                   </div>

            </div>    

                <div class="card-footer">
                    <button type="submit" class ="btn btn-primary">
                        Simpan 
                    </button>
                </div>
            </div>
            </div>
        </div>
    </div>
</form>
@endsection