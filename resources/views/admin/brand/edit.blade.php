
 @extends('admin.layout.master')

 @section('title', 'Brand')
 @section('content')
 <!-- Main -->
 <div class="app-main__inner">

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Brand
                    <div class="page-title-subheading">
                        View, create, update, delete and manage.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ route('brand.update', $brand->id) }}">
                        @csrf
                        @method('PUT')
                        @include('admin.components.notification')
                        <div class="position-relative row form-group">
                            <label for="image" class="col-md-3 text-md-right col-form-label">Image</label>
                            <div class="col-md-9 col-xl-8">
                                <img style="height: 200px; cursor: pointer;" class="thumbnail rounded-circle"
                                    data-toggle="tooltip" title="Click to change the image" data-placement="bottom"
                                    src="{{ asset('dashboard/assets/images/add-image-icon.jpg') }}" alt="Image">
                                <input name="image" type="file" onchange="changeImg(this)"
                                    class="image form-control-file" style="display: none;" value="">
                                <input type="hidden" name="old_image" value="{{ $brand->image }}">
                                <small class="form-text text-muted">
                                    Click on the image to change (required)
                                </small>
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="name" class="col-md-3 text-md-right col-form-label">Name</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="name" id="name" placeholder="Name" type="text"
                                    class="form-control" value="{{ $brand->name }}">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="description" class="col-md-3 text-md-right col-form-label">Description</label>
                            <div class="col-md-9 col-xl-8">
                                <textarea name="description" id="description" class="form-control">{!! $brand->description !!}</textarea>
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="meta_keywords" class="col-md-3 text-md-right col-form-label">Meta
                                Key</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="meta_keywords" id="meta_keywords" placeholder="Meta key"
                                    type="text" class="form-control" value="{{ $brand->meta_keywords }}">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="meta_description" class="col-md-3 text-md-right col-form-label">Meta
                                Description</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="meta_description" id="meta_description"
                                    placeholder="Meta Description" type="text" class="form-control" value="{{ $brand->meta_description }}">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="status" class="col-md-3 text-md-right col-form-label">Status</label>
                            <div class="col-md-9 col-xl-8">
                                <select required name="status" id="status" class="form-control">
                                    <option value="">-- Level --</option>
                                    <option value="0" {{ $brand->status == '0' ? 'selected' : '' }}>In active</option>
                                    <option value="1" {{ $brand->status == '1' ? 'selected' : '' }}>Active</option>
                                </select>
                            </div>
                        </div>
                        <div class="position-relative row form-group mb-1">
                            <div class="col-md-9 col-xl-8 offset-md-2">
                                <a href="{{ route('brand.index') }}" class="border-0 btn btn-outline-danger mr-1">
                                    <span class="btn-icon-wrapper pr-1 opacity-8">
                                        <i class="fa fa-times fa-w-20"></i>
                                    </span>
                                    <span>Cancel</span>
                                </a>

                                <button type="submit" class="btn-shadow btn-hover-shine btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-8">
                                        <i class="fa fa-download fa-w-20"></i>
                                    </span>
                                    <span>Save</span>
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main -->
@endsection
