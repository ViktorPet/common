

    @extends('layouts.auth')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a href="{{ (Auth::guard('admin')->check()) ? route('dashboard'): url('login/admin')}}">Dashboard</a></div>

                    <div class="card-body">
                        Hi boss!
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
