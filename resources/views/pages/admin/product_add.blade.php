<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin.head')
</head>

@section('content')
<style>
@media (max-width: 768px) {
    .page-header {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .breadcrumbs {
        padding-left: 0 !important;
        margin-left: 0 !important;
    }
}
</style>
<div class="wrapper">
    <div class="main-header">
        @include('layouts.admin.nav')
    </div>
    @include('layouts.admin.sidebar')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">{{ $judul }}</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group @error('ImageP') has-error has-feedback @enderror">
                                            <label for="ImageP">
                                                Product Image (PNG, JPG, JPEG)
                                                <span class="d-sm-none"><br></span>
                                                <span style="color: red;">Max 3 MB</span>
                                                <span class="d-none d-sm-inline"> | </span>
                                                <span class="d-sm-none"><br></span>
                                                Standard Size 1414px x 2000px
                                            </label>
											<input type="file" class="form-control-file" id="ImageP" name="ImageP" accept=".png, .jpg, .jpeg" required>
                                            @error('ImageP')
                                            <small id="ImageP" class="form-text text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group @error('Page') has-error has-feedback @enderror">
                                            <label for="Page">Page Catalog Product</label>
                                            <input type="number" id="Page" name="Page" min="1" value="{{ old('Page') }}" class="form-control" required>
                                            @error('Page')
                                            <small id="Page" class="form-text text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="visibility">Visibility</label>
                                            <select class="form-control" id="visibility" name="visibility">
                                                <option name='visibility' value='Showing'>Showing (Publish)</option>
                                                <option name='visibility' value='Hiding'>Hiding (Unpublish)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-1">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary fw-bold text-uppercase">
                                                <i class="fas fa-save mr-2"></i>Save
                                            </button>
                                            <button type="reset" class="btn btn-warning fw-bold text-uppercase">
                                                <i class="fas fa-undo mr-2"></i>Reset
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.admin.footer')
    </div>
</div>
@include('layouts.admin.script')
<script>
    //message with sweetalert
    @if(session('success'))
    Swal.fire({
        icon: "success",
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 3000
    });
    @elseif(session('error'))
    Swal.fire({
        icon: "error",
        title: "{{ session('error') }}",
        showConfirmButton: false,
        timer: 3000
    });
    @endif
</script>
@endsection

<body>
    @yield('content')
</body>
</html>
