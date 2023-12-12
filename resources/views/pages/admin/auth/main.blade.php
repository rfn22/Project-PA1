<x-auth-layout title="Login">
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><div class="logo">
		<img src="{{ asset('assets/img/SIA.png') }}" alt=""> </div><br>Sistem Informasi Alumni</h3>
            <hr>
            @if(session('LoginError'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('LoginError')}}
            </div>
            @endif
            <form action="{{ route('auth.login') }}" method="post">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control @error ('email') is invalid  @enderror" placeholder="Email">
                </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control @error ('password') is invalid @enderror" placeholder="Password">
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
                <button type="submit" class="btn btn-primary btn-block" style="background: #010e16;">Log In</button>
                <hr>
            </form>
        </div>
    </div>
</x-auth-layout>