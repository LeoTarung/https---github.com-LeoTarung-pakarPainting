@extends('main')
@section( 'content')
<div class="container-fluid mt-3">

    <div class="row mt-3">
        @if($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @else       
        @endif
        <div class="col-md-12">
            <div class="card shadow rounded">
                <div class="card-header"> Data Jenis Reject</div>
                <div class="card-body"> 
                    <a href="/tambahGejala" type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#tambah">Tambah</a>   
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama Reject</th>
                            <th scope="col">Aksi</th>
                        </thead>
                        <tbody>
                            @php
                                $no =1;
                            @endphp
                        @foreach($data as $reject)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $reject->id_reject }}</td>
                            <td>{{ $reject->nama }}</td>
                            <td class="text-center"></td>
                        </tr>
                        @php
                            $no = $no + 1;
                        @endphp
                        @endforeach                           
                        </tbody>
                      </table>  
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- Modal Tambah REJECT --}}
    <div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md ">
            <form action="/reject/tambah" method="POST" onSubmit="document.getElementById('submit').disabled=true;">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h5>
                        <button type="button" class="btn-danger rounded btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="id_reject" class="form-label">ID Reject</label>
                                <input type="text" class="form-control border-primary" id="id_reject" name="id_reject" aria-describedby="emailHelp" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="nama_reject" class="form-label">Nama Reject</label>
                                <input type="text" class="form-control border-primary" id="nama_reject" name="nama_reject" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" id="btn-cancel">Reset</button>
                        {{-- <button type="submit" class="btn btn-primary" onclick="redirect()">Lanjutkan</button> --}}
                        <button type="submit" id="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection