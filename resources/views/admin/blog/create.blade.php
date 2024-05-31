@extends('admin.layouts.layout')


@section('blog')
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
                            <a href="{{ route('admin.blog.index') }}" class="btn btn-primary"
                               style="position:absolute; right:50;">Qaytish</a>
                        </div>
                    </div>
                </div>

                <form class="create__inputs" action="{{route('admin.blog.store')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <strong> Sarvlavha  :</strong>
                    <input type="text" name="title_uz" value="{{ old('title_uz') }}" class="form-control">
                    @error('title_uz')
                        {{ $message }}
                    @enderror <br>
                    <strong> Ma'lumot  :</strong>
                    <textarea class="form-control" name="description_uz" value="{{ old('description_uz') }}">{{ old('description_uz') }}</textarea>
                    @error('description_uz')
                        {{ $message }}
                    @enderror
                    <br>
                    <strong> Rasm(png yoki jpg) :</strong>
                    <input type="file" name="img" class="form-control"><br>


                    <input type="submit" value="Qo`shish">

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
