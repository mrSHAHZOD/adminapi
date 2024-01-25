@extends('admin.layouts.layout')


@section('result')
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
                <div class="card-header">
                    <h3>Yangilik qo'shish</h3>
                    <a href="{{ route('admin.blog.index') }}" class="btn btn-primary"
                       style="position:absolute; right:50;">Qaytish</a>
                </div>

                <form class="create__inputs" action="{{ route('admin.result.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf

                    <strong> Sarvlavha uz :</strong>
                    <input type="text" name="t_tok" value="{{ old('t_tok') }}" class="form-control">
                    <!--    @error('t_tok') {{ $message }} @enderror <br> -->

                    <strong> Sarvlavha uz :</strong>
                    <input type="text" name="t_id" value="{{ old('t_id') }}" class="form-control">
                    <!--    @error('t_id') {{ $message }} @enderror <br> -->

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
