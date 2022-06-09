@extends('layouts.default')

@section('content')
   <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1>CRUD GURU</h1>
                    <a href="{{url('create')}}" class="btn btn-success">+ Tambah Data Guru</a>
                </div>
                <?php $no = 1; ?>
                <div class="col-lg-8">
                    <table class="table table-stiped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Mata Pelajaran</th>
                                <th>Alamat</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dataguru)
                                <tr>
                                    <th><?php echo $no++ ?></th>
                                    <td>{{$dataguru->nama}}</td>
                                    <td>{{$dataguru->nip}}</td>
                                    <td>{{$dataguru->mapel}}</td>
                                    <td>{{$dataguru->alamat}}</td>
                                    <td>
                                        <a href="{{ url('/show/'. $dataguru->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{url('/destroy/'. $dataguru->id)}}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   </section>
@endsection