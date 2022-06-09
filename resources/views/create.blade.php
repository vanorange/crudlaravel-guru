@extends('layouts.default')
@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Tambah Data Guru</h1>
                    <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data" class="mt-2">
                        @csrf
                        <div class="form-group mb-2">
                            <label class="form-label">Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">NIP</label>
                            <input type="number" name="nip" class="form-control" placeholder="Masukan NIP">
                        </div>
                        <div class="form-group mb-2">
                            <label  class="form-label">Mata Pelajaran</label>
                            <select class="form-select" name="mapel" aria-label="Default select example">
                                <option  selected>Pilih</option>
                                <option value="Matematika">Matematika</option>
                                <option value="Fisika">Fisika</option>
                                <option value="Biologi">Biologi</option>
                            </select>
                        </div>
                        <div class="form-group mn-2">
                            <label class="form-label">Alamat</label>
                            <textarea type="text" name="alamat" class="form-control" placeholder="Masukan Alamat"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary mx-2">Simpan</button>
                            <a href="{{url('/')}}" class="btn btn-secondary">Kembali Ke halaman Utama</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection