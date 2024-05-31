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
    <!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <div class="card">
                        <div class="card-header">
                            <h3>Yangilik qo'shish</h3>
                            <a href="{{ route('admin.result.index') }}" class="btn btn-primary"
                               style="position:absolute; right:50;">Qaytish</a>
                        </div>
                    </div>
                </div>

                <form class="create__inputs" action="{{ route('admin.result.store') }}" method="POST"enctype="multipart/form-data">
                    @csrf
                    <strong> User:</strong>
                    <input type="text" name="user" value="{{ old('user') }}" class="form-control">
                    <!--    @error('user') {{ $message }} @enderror <br> -->

                    <strong> Comment:</strong>
                    <input type="text" name="comment" value="{{ old('comment') }}" class="form-control">
                    <!--    @error('comment') {{ $message }} @enderror <br> -->

                    <strong>Bot Token:</strong>
                    <input type="text" name="t_tok" value="{{ old('t_tok') }}" class="form-control">
                    <!--    @error('t_tok') {{ $message }} @enderror <br> -->


                    <strong>Bot ID  :</strong>
                    <textarea class="form-control" name="t_id" value="{{ old('t_id') }}">{{ old('t_id') }}</textarea>
                    @error('t_id')
                    {{ $message }}
                    @enderror
                    <br>

                    <strong> Rasm(png yoki jpg) :</strong>
                    <input type="file" name="img" class="form-control"><br>

                    <input type="submit" value="Qo`shish" class="btn btn-primary"
                           style="position:absolute; right:50;">

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
