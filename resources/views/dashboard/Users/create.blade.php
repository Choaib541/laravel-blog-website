@extends('../layouts.dashboard')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg px-3 pt-4 pb-3 d-flex align-items-center justify-content-between">
                        <h6 class="text-white text-capitalize m-0">Create New User</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <form action="/dashboard/users" enctype="multipart/form-data" method="post" class="px-4 pb-4">
                            @method('post')
                            @csrf

                            <div class="mb-3 d-flex flex-column">
                                <label for="picture">Picture</label>
                                <input type="file" id="picture" name="picture">
                            </div>
                            @error('picture')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="name">Full Name</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    value={{ old('name') }}>
                            </div>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" type="email" id="email" name="email"
                                    value={{ old('email') }}>
                            </div>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="row ">
                                <div class="col col-md-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input class="form-control" type="password" id="password" name="password">
                                    </div>
                                </div>
                                <div class="col col-md-6 ">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label" for="password_confirmation">Password Confirmation</label>
                                        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation"
                                            >
                                    </div>

                                </div>
                            </div>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <button class="btn bg-gradient-primary">
                                Create Users
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
