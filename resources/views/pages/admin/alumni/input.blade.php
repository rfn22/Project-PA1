<x-admin-layout title="">
    <div class="page-wrapper">
        <!-- Page Title -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="page-title-text">Howdy, {{ Auth::User()->name }}!</h2>
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
                                <span class="panel-title-text">Tambah Data Alumni</span>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if($alumni->id)
                            <form action="{{ route('alumni.store') }}" method="post" enctype="multipart/form-data">
                                @method('PATCH')
                                @else
                            <form action="{{ route('alumni.store') }}" method="post" enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Angkatan</label>
                                    <div class="col-10">
                                        <select class="form-control" id="exampleFormControlSelect1" name="angkatan_id">
                                            <option>Pilih Angkatan </option>
                                            @foreach ($angkatan as $item)
                                            <option value="{{ $item->id }}">{{ $item->angkatan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-2 col-form-label">Nama</label>
                                    <div class="col-10">
                                        <input class="form-control @error ('nama') is invalid @enderror" type="text" id="example-search-input" name="nama" placeholder="Masukkan Nama" value="{{ $alumni->name }}">
                                    </div>
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-2 col-form-label">Email</label>
                                    <div class="col-10">
                                        <input class="form-control @error ('email') is invalid @enderror" type="email" id="example-email-input" name="email" placeholder="Masukkan Email" value="{{ $alumni->email }}">
                                    </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="example-url-input" class="col-2 col-form-label">Prodi</label>
                                    <div class="col-10">
                                        <select class="form-control" id="exampleFormControlSelect1" name="prodi">
                                            <option></option>
                                            <option value="S1 Informatika">S1 Informatika</option>
                                            <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                                            <option value="S1 Manajemen Rekayasa">S1 Manajemen Rekayasa</option>
                                            <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
                                            <option value="S1 Teknik Bioproses">S1 Teknik Bioproses</option>
                                            <option value="D3 Teknologi Informasi">D3 Teknologi Informasi</option>
                                            <option value="D3 Teknologi Komputer">D3 Teknologi Komputer</option>
                                            <option value="D4 Teknologi Rekayasa Perangkat Lunak">D4 Teknologi Rekayasa Perangkat Lunak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-2 col-form-label">No. Hp</label>
                                    <div class="col-10">
                                        <input class="form-control @error ('no_hp') is invalid @enderror" type="tel" id="example-tel-input" name="no_hp" placeholder="Masukkan No. Hp" value="{{ $alumni->no_hp }}">
                                    </div>
                                @error('no_hp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error ('gambar') is invalid @enderror" id="customFile" name="gambar">
                                    <label class="custom-file-label" for="customFile">Choose Photo</label>
                                </div>
                            @error('gambar')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            
                        </div>
                        <div class="panel-footer text-right">
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <a href="{{ route('alumni.index') }}" class="btn btn-outline btn-secondary btn-outline-1x">Cancel</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
   