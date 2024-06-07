@extends('admin.layouts.layout')

@section('contact')
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


            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Yoshi</th>
                      <th>Xabarlar</th>
                      <th>time</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($contact) == 0)
					    <tr>
					        <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan</td>
					    </tr>
					@endif

                    @foreach($contact as $contact)
                      <tr>
                        <td>
                          {{ ++$loop->index }}
                        </td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->age }}</td>
                        <td>{{ $contact->description_uz }}</td>

                      <td><b>{{ $contact->created_at }}</b></td>
                        <td>
                            <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST">

                          <a href="{{ route('admin.contact.show', $contact->id) }}" class="btn btn-info"><ion-icon class="fas fa-info-circle"></ion-icon></a>

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
