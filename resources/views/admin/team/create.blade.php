@extends('admin.layouts.layout')


@section('team')
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
                            <h3>Jamoa qo`shish</h3>
                            <a href="{{ route('admin.team.index') }}" class="btn btn-primary"
                               style="position:absolute; right:50;">Qaytish</a>
                        </div>
                    </div>
                </div>

                <form class="create__inputs" action="{{route('admin.team.store')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <strong> Ismi  :</strong>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    @error('name')
                        {{ $message }}
                    @enderror <br>
                    <strong> Malumotlari  :</strong>
                    <textarea class="form-control" name="position" value="{{ old('position') }}">{{ old('position') }}</textarea>
                    @error('position')
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
