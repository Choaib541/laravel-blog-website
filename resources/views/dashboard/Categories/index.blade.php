@extends('../layouts.dashboard')


@section('content')
    @if (count($errors->all()) !== 0)
        <div class="alert alert-danger">
            <ul class="m-0 p-0 ps-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-4 ">
                    <h6>Create Category</h6>
                    <form action="/dashboard/categories" method="POST" class="row">
                        @csrf
                        <div class="col-8   m-0 ">
                            <div class="input-group  input-group-outline ">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" name="name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <button class="btn bg-gradient-primary m-0 ">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-4 ">
                    <h6>Update Category</h6>
                    <form method="POST" class="row" action="/dashboard/categories">
                        @csrf
                        @method('patch')
                        <div class="col-2  m-0 ">
                            <div class="input-group  input-group-outline ">
                                <label for="id" class="form-label">id</label>
                                <input id="id" name="id" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-6 m-0 ">
                            <div class="input-group  input-group-outline ">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" name="name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-4">
                            <button class="btn bg-gradient-primary m-0 ">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg px-3 pt-4 pb-3 d-flex align-items-center justify-content-between">
                        <h6 class="text-white text-capitalize m-0">Categories table</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">



                        <form class="py-2 px-3">
                            <div class="input-group input-group-outline">
                                <label class="form-label" for="search">Search</label>
                                <input  name="search" id="search"  class="form-control " type="text"   value="{{ request()->search ?? '' }}" >
                            
                            </div>
                                
                        </form>

                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        id
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">
                                        name </th>
                                          <th
                                        class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">
                                        Number of posts </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">
                                        created_at</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">
                                        updated_at</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="text-uppercase text-secondary text-center text-xxs font-weight-bolder ">
                                            {{ $category->id }}
                                        </td>
                                        <td class="text-uppercase text-secondary text-center text-xxs font-weight-bolder  ">
                                            {{ $category->name }}
                                        </td>
                                         <td class="text-uppercase text-secondary text-center text-xxs font-weight-bolder  ">
                                            {{ $category->count }}
                                        </td>
                                        <td class="text-uppercase text-secondary text-center text-xxs font-weight-bolder ">
                                            {{ $category->created_at }}
                                        </td>
                                        <td class="text-uppercase text-secondary text-center text-xxs font-weight-bolder ">
                                            {{ $category->updated_at }}
                                        </td>
                                        <td class="align-middle d-flex ">
                                            <form action={{ 'categories/' . $category->id }} method="POST"
                                                class="d-inline">
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
                            </tbody>
                        </table>
                        <div class="px-4">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
