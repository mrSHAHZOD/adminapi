@extends('admin.layouts.layout')

@section('contacts')
active
@endsection

@section('content')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h4>Show Product</h4>
              <a href="{{ route('admin.contact.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                  <tr>
                        <td>Ismi : </td>
                        <td><b>{{ $contact->name }}</b></td>
                    </tr>

                     <tr>
                        <td>Email : </td>
                        <td><b>{{ $contact->email }}</b></td>
                    </tr>
                    <tr>
                        <td>Telefon raqami : </td>
                        <td><b>{{ $contact->phone }}</b></td>
                    </tr>
                    <tr>
                        <td>Yoshi : </td>
                        <td><b>{{ $contact->age }}</b></td>
                    </tr>
                    <tr>
                        <td>Xabar : </td>
                        <td><b>{{ $contact->description_uz }}</b></td>
                    </tr>


                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
