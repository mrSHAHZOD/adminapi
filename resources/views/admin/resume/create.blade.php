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
    <!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <div class="card">
                        <div class="card-header">

                            <h3>Yangilik qo'shish</h3>
                            <a href="{{ route('admin.resume.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Qaytish</a>
                        </div>
                    </div>
                </div>

                <form class="create__inputs" action="{{ route('admin.resume.store') }}"
                    method="POST"enctype="multipart/form-data">
                    @csrf
                    <strong> ISM :</strong>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    <!--    @error('name')
        {{ $message }}
    @enderror <br> -->

                    <strong> Familya :</strong>
                    <input type="text" name="surname" value="{{ old('surname') }}" class="form-control">
                    <!--    @error('surname')
        {{ $message }}
    @enderror <br> -->

                    <strong> Otasining ismi :</strong>
                    <input type="text" name="patronymic" value="{{ old('patronymic') }}" class="form-control">
                    <!--    @error('patronymic')
        {{ $message }}
    @enderror <br> -->

                    <strong> til bilish darajasi :</strong>
                    <input type="text" name="level" value="{{ old('level') }}" class="form-control">
                    <!--    @error('level')
        {{ $message }}
    @enderror <br> -->

                    <strong> Telefoni :</strong>
                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control">
                    <!--    @error('phone')
        {{ $message }}
    @enderror <br> -->
                    <strong> Telefoni :</strong>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                    <!--    @error('email')
        {{ $message }}
    @enderror <br> -->

                    <strong> Mutaxasislik :</strong>
                    <input type="text" name="task" value="{{ old('task') }}" class="form-control">
                    <!--    @error('task')
        {{ $message }}
    @enderror <br> -->
                    <strong> Qoshimcha mutaxasislik :</strong>
                    <input type="text" name="specialty" value="{{ old('specialty') }}" class="form-control">
                    <!--    @error('specialty')
        {{ $message }}
    @enderror <br> -->

                    <strong> Rasm(png yoki jpg) :</strong>
                    <input type="file" name="img" class="form-control"><br>

                    <input type="submit" value="Qo`shish" class="btn btn-primary" style="position:absolute; right:50;">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>

@endsection
