@extends('admin.layouts.layout')

@section('resume')
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
                          <a href="{{ route('admin.resume.index') }}" class="btn btn-primary"
                             style="position:absolute; right:50;">Qaytish</a>
                      </div>
                  </div>
              </div>
            <div class="card-body">
              <form action="{{ route('admin.resume.update', $resume->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ismi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name" value="{{ $resume->name }}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Familya</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="surname" value="{{ $resume->surname }}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Otasining ismi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="patronymic" value="{{ $resume->patronymic }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Yoshi: </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="age" value="{{ $resume->age }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Millati : </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="nationality" value="{{ $resume->nationality }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Manzili</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="Address" value="{{ $resume->Address }}">
                </div>
              </div>


              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telefoni</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="phone" value="{{ $resume->phone }}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="email" value="{{ $resume->email }}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Til bilish darajasi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="level" value="{{ $resume->level }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Qo`shimcha Til bilish darajasi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="level2" value="{{ $resume->level2 }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mutaxasislik</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="task" value="{{ $resume->task }}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Qo`shimcha Mutaxasislik</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="specialty" value="{{ $resume->specialty }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Malumotlar</label>
                <div class="col-sm-12 col-md-7">
                    <textarea class="ckeditor form-control" name="html_code" value="{{  $resume->html_code }}">{{ $resume->html_code }}</textarea>
                </div>
              </div>

              {{-- qoshish --}}
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ish faoliyatidagi rasim:</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Choose File</label>
                    <input type="file" name="imge" value="{{ $resume->imge }}" id="image-upload" />
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rasimlar</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Choose File</label>
                    <input type="file" name="img" value="{{ $resume->img }}" id="image-upload" />
                  </div>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">


                   <button class="btn btn-primary" > Resumeni Tasdiqlash</button>
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
