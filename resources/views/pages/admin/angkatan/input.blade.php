<x-admin-layout title="">
    <div class="page-wrapper">
        <!-- Page Title -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="page-title-text">Howdy, John!</h2>
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
                                <span class="panel-title-text">Tambah Data Angkatan</span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('angkatan.store') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Angkatan</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control @error ('angkatan') is invalid @enderror" id="example-text-input" name="angkatan" placeholder="Masukkan Angkatan">
                                    </div>
                                @error('angkatan')
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
   