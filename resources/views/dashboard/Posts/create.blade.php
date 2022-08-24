@extends('../layouts/dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg px-3 pt-4 pb-3 d-flex align-items-center justify-content-between">
                        <h6 class="text-white text-capitalize m-0">Create New Post</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <form action="/dashboard/posts" enctype="multipart/form-data" method="post" class="px-4 pb-4">
                            @method('post')
                            @csrf

                            <div class="mb-3 d-flex flex-column">
                                <label for="cover">Cover</label>
                                <input type="file" id="cover" name="cover">
                            </div>
                            @error('cover')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input class="form-control" type="text" id="title" name="title" value={{ old('title') }} >
                            </div>
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="input-group mb-3 input-group-outline">
                                <textarea class="form-control" placeholder="Description" type="text" id="description" name="description">{{ old('description') }}</textarea>
                            </div>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="mb-3">
                                <textarea id="editor"  name="content">{{ old('content') }}</textarea>
                            </div>
                            <div class="my-4">
                                @error('content')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <button class="btn bg-gradient-primary">
                                Create Post
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src={{ asset('assets/ckeditor/ckeditor.js') }}></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
