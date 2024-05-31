@extends('admin.layouts.layout')

@section('result')
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
              <h4>results</h4>
              <a href="{{ route('admin.result.create') }}" class="btn btn-primary" style="position:absolute; right:50;">Create</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                        <th>User</th>
                        <th>Comment</th>
                      <th>Bot Token</th>
                      <th>Bot ID</th>
                        <th>Rasim</th>
                      <th>Vaqt</th>

                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($result) == 0)
					    <tr>
					        <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan</td>
					    </tr>
					@endif

                    @foreach($result as $results)
                      <tr>
                        <td>
                          {{ ++$loop->index }}
                        </td>
                          <td>{{ $results->user }}</td>
                          <td>{{ $results->comment }}</td>
                        <td>{{ $results->t_tok }}</td>
                        <td>{{ $results->t_id }}</td>
                          <td>
                              <img src="/images/{{ $results->img }}" alt="" width="70px">
                          </td>
				                  <td><b>{{ $results->created_at }}</b></td>
                        <td>

                          <form action="{{ route('admin.result.destroy', $results->id) }}" method="POST">
                          <a href="{{ route('admin.result.show', $results->id) }}" class="btn btn-info"><ion-icon class="fas fa-info-circle"></ion-icon></a>
                          <a href="{{ route('admin.result.edit', $results->id) }}" class="btn btn-primary"><ion-icon class="far fa-edit"></ion-icon></a>
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
