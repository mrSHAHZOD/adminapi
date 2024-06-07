@extends('admin.layouts.layout')

@section('team')
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
                            <h4>team</h4>
                            <a href="{{ route('admin.team.create') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Create</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Ismi</th>
                                            <th>Malumotlari</th>
                                            <th>Rasimlar</th>
                                            <th>Vaqt</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($team) == 0)
                                            <tr>
                                                <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan
                                                </td>
                                            </tr>
                                        @endif

                                        @foreach ($team as $team)
                                            <tr>
                                                <td>
                                                    {{ ++$loop->index }}
                                                </td>
                                                <td>{{ $team->name }}</td>
                                                <td>{{ $team->position }}</td>


                                                <td>
                                                    <img src="/images/{{ $team->img }}" alt="" width="100px">
                                                </td>

                                                <td><b>{{ $team->created_at }}</b></td>
                                                <td>
                                                    <form action="{{ route('admin.team.destroy', $team->id) }}" method="POST">

                                                        <a href="{{ route('admin.team.show', $team->id) }}" class="btn btn-info"><ion-icon class="fas fa-info-circle"></ion-icon></a>
                                                        <a href="{{ route('admin.team.edit', $team->id) }}" class="btn btn-primary"><ion-icon class="far fa-edit"></ion-icon></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" onclick="return confirm('Rostdan o`chirmoqchimisiz ?')"><ion-icon class="fas fa-times"></ion-icon></button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach

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

