<x-admin-layout title="">
    <div class="page-wrapper">
        <!-- Page Title -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="page-title-text">Hello, {{  Auth::User()->name }}</h2>
                </div>
                <div class="col-sm-6 text-right">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Body -->
        <div class="page-body">
            <div class="row">
                <div class="col-12">
                    <div class="panel panel-default">
                        <div class="panel-head">
                            <div class="panel-title">
                                <span class="panel-title-text">Data Alumni</span>
                            </div>
                            <div class="panel-action">
                                <a href="{{ route('alumni.create') }}" class="btn btn-primary btn-shadow btn-gradient btn-sm btn-pill">Tambah Data</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th class="min-w-125px">Gambar</th>
                                            <th>Nama</th>
                                            <th>Angkatan</th>
                                            <th>No.Hp</th>
                                            <th>Prodi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @php
                                     $count = 1;   
                                    @endphp
                                    <tbody>
                                        @foreach ($alumni as $item)
                                        <tr>
                                            <td>{{ $count++; }}</td>
                                            <td><img src="{{ asset('asset/gambar/'.$item->gambar) }}" style="width: 50px;" class="w-35px me-3" alt=""></td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->angkatan->angkatan }}</td>
                                            <td>{{ $item->no_hp }}</td>
                                            <td>{{ $item->prodi }}</td>
                                            <td>
                                                <a href="{{ route('alumni.edit',$item->id) }}" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Edit"><i class="icon-pencil mr-2 text-info"></i></a>
                                                <form action="{{ route('alumni.destroy',$item->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                <button type="submit" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Delete"><i class="icon-trash text-danger"></i></button>
                                            </form>
                                            </td>
                                        </tr>    
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
