@extends('admin.partial.app')

@section('content')

    {{-- <div class="container mt-4"> --}}

        <div class="app-main">
            <div class="app-content mt-5">
                <div class="container-fluid"></div>


                <div class="row justify-content-left  ms-4">
                    <div class="col-md-8">

                        <div class="card shadow">
                            <div class="card-header fw-bold">
                                Edit Post
                            </div>

                            <!--begin::Card-->
                            <div class="card card-primary card-outline mb-4">
         
                                <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Post Title</label>
                                            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}"
                                                placeholder="Post Title" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Category</label>
                                            {{-- <select class="form-control" name="category_id"> --}}
                                            <select class="form-control" name="sub_category_id">
                                                <option>Select a category</option>
                                                @foreach ($categories as $cat)
                                                    @php
                                                        $sub_cats = DB::table('subcategories')->where('category_id', $cat->id)->get();
                                                    @endphp
                                                    <option disabled value="{{ $cat->id }}" class="text-info">{{ $cat->category_name }}</option>

                                                    @foreach ($sub_cats as $sub_cat)
                                                        <option value="{{ $sub_cat->id }}" @if ($sub_cat->id == $post->sub_category_id) selected  @endif> ---{{ $sub_cat->sub_category_name }}</option>
                                                    @endforeach

                                                @endforeach
                                            </select>
                                        </div>
                                        {{-- <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Sub Category</label>
                                            <select class="form-control" name="sub_category_id">
                                                <option>Sub Example 1</option>
                                            </select>
                                        </div> --}}
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Post Date</label>
                                            <input type="date" class="form-control" id="post_date" name="post_date" value="{{ $post->post_date }}"
                                                placeholder="Post Date" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Tags</label>
                                            <input type="text" class="form-control" id="tags" name="tags" value="{{ $post->tags }}"
                                                placeholder="Tags" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Description</label>
                                            <textarea class="form-control summernote" name="description"  rows="4">  {{ $post->description }} </textarea>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" name="img" />
                                            {{-- <label class="input-group-text" for="inputGroupFile02">Upload Image</label> --}}
                                            <input type="hidden" name="old_image" value="{{ $post->img }}" />
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" @if ($post->status == 1) checked @endif name="status" value="1" />
                                            <label class="form-check-label" for="exampleCheck1">Publish Now</label>
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                    <!--end::Footer-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card-->


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

