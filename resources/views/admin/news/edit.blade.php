@extends('admin.layouts.layout')

@section('news')
    active
@endsection

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section class="section">
    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
              <div class="head">
                  <div class="card">
                      <div class="card-header">
                          <h3>Edit</h3>
                          <a href="{{ route('admin.news.index') }}" class="btn btn-primary"
                             style="position:absolute; right:50;">Qaytish</a>
                      </div>
                  </div>
              </div>
            <div class="card-body">
              <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sarlavha</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="title_uz" value="{{ $news->title_uz }}">
                </div>
              </div>

                  <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Malumot</label>
                      <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="description_uz" value="{{ $news->description_uz }}">
                      </div>
                  </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rasimlar</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Choose File</label>
                    <input type="file" name="img" value="{{ $news->img }}" id="image-upload" />
                  </div>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

@endsection
