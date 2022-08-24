@extends('../layouts.dashboard')


@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg px-3 pt-4 pb-3 d-flex align-items-center justify-content-between">
                        <h6 class="text-white text-capitalize m-0">Users table</h6>
                        <a href='{{ route('Dashboard.Users.Create') }}' class="btn bg-gradient-secondary m-0">
                            Create User
                        </a>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">

                        <form class="py-2 px-3">
                            <div class="input-group input-group-outline">
                                <label class="form-label" for="search">Search</label>
                                <input  name="search" id="search"  class="form-control " type="text" value="{{ request()->search ?? '' }}" >
                            
                            </div>
                                
                        </form>

                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        id
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        profile
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        name
                                    </th>
                                    
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                        email
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        created_at
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        updated_at
                                    </th>
                                    <th class="opacity-7">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if(count($users) === 0)
                                    <tr>
                                        <td colspan="7" class="text-center pt-4 text-uppercase  text-xxs font-weight-bolder  ps-4 ">
                                            Try creating a User first
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-4 ">
                                                {{ $user->id }}
                                            </td>
                                            <td class="text-uppercase text-secondary text-xxs font-weight-bolder ps-4 ">
                                                <img style="height:50px;width:50px;" class="rounded-circle"
                                                    src={{ asset('storage/' . $user->picture) }} alt="">
                                            </td>
                                            <td class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-4">
                                                {{ $user->name }}
                                            </td>
                                            <td class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-4">
                                                {{ $user->email }}
                                            </td> <td class="text-uppercase text-secondary text-xxs font-weight-bolder ps-4">
                                                {{ $user->created_at }}
                                            </td>
                                            <td class="text-uppercase text-secondary text-xxs font-weight-bolder ps-4">
                                                {{ $user->updated_at }}
                                            </td>
                                            <td class="align-middle d-flex ">
                                                <a href={{ route('Dashboard.Users.Edit', $user->id) }}
                                                    class="btn bg-gradient-success d-block my-auto font-weight-bold text-xs
                                           data-toggle="tooltip"
                                                    data-original-title="Edit user">
                                                    Edit
                                                </a>
                                                <form action={{ "/dashboard/users/$user->id" }} method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" href="javascript:;"
                                                        class="ms-2 btn bg-gradient-danger d-block my-auto  font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                        <div class="px-4 pt-3">
                            {{ $users->links('vendor.pagination.bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
