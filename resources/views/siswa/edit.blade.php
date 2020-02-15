
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">Tambah Siswa</div>

                <div class="card-body">
                <form action="{{route('siswa.update',$siswa->id)}}" method="post">

                   @csrf 
                   @method('PATCH')
                    <div class="form-group">
                       <label>Nis</label>
                       <input type="text" name="nis" class="form-control" value="{{ $siswa->nis}}" required>
                    </div>

                    <div class="form-group">
                       <label>Nama</label>
                       <input type="text" name="nama" class="form-control" value="{{ $siswa->nama}}" required>
                    </div>

                    <div class="form-group">
                       <label>Alamat</label>
                       <textarea name="alamat" class="form-control" cols="50" rows="10" required> {{ $siswa->alamat}}</textarea>
                    </div>

                    <div class="form-group">
                       <label>Kelas</label>
                       <select name="id_kelas" class="form-control">
                        @foreach($kelas as $data)
                        <option value="{{$data->id}}" {{ $data->id == $siswa->id_kelas ? 'selected' : ''}}>
                        {{$data->kelas}} 
                        </option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                    <label for=" ">Mata Pelajaraan</label>
                    <select name="mapel[]" class="form-control" multiple>
                       @foreach ($mapel as $data)
                           <option value="{{$data->id}}" 
                           {{ (in_array($data->id,$selected)) ?
                           'selected="selected"' : ''}}>
                           {{$data->nama}}
                           </option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                         <button type="submit" class="btn btn-primary">Simpan</button>
                     </div>
                     
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

