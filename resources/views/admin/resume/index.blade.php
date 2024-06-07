@extends('admin.layouts.layout')

@section('resume')
active
@endsection

@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Resume</h4>
                        <a href="{{ route('admin.resume.create') }}" class="btn btn-primary" style="position:absolute; right:50px;">Create</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>Patronymic</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Language Level</th>
                                        <th>Specialty</th>
                                        <th>Download PDF</th>
                                        <th>xolati</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($resume->isEmpty())
                                        <tr>
                                            <td colspan="11" class="h5 text-center text-muted">No data available</td>
                                        </tr>
                                    @else
                                        @foreach($resume as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="/images/{{ $item->img }}" alt="Image of {{ $item->name }}" width="80px"></td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->surname }}</td>
                                                <td>{{ $item->patronymic }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->level }}</td>
                                                <td>{{ $item->task }}</td>
                                                <td><a href="{{ url('items/' . $item->id . '/pdf') }}" target="_blank">Download PDF</a></td>
                                                <td>@if($item->status == 0)
                                                    <span style="color: red">O'qilmagan</span>
                                                    @else <span style="color: rgb(14, 243, 14)">O'qilgan</span>@endif
                                                </td>
                                                <td>
                                                    <form action="{{ route('admin.resume.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                        <a href="{{ route('admin.resume.show', $item->id) }}" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
                                                        <a href="{{ route('admin.resume.edit', $item->id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
