@extends('admin.layouts.layout')

@section('resume')
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
              <a href="{{ route('admin.resume.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                  <tr>
                        <td>ismi : </td>
                        <td><b>{{ $resume->name }}</b></td>
                    </tr>
                    <tr>
                        <td>familya : </td>
                        <td><b>{{ $resume->surname }}</b></td>
                    </tr>
                    <tr>
                        <td>Otasining ismi : </td>
                        <td><b>{{ $resume->patronymic }}</b></td>
                    </tr>
                    <tr>
                        <td>phone : </td>
                        <td><b>{{ $resume->phone }}</b></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><b>{{ $resume->email }}</b></td>
                    </tr>
                    <tr>
                        <td>Til bilish Darajasi : </td>
                        <td><b>{{ $resume->level }}</b></td>
                    </tr>
                    <tr>
                        <td>Mutaxasislik : </td>
                        <td><b>{{ $resume->task }}</b></td>
                    </tr>
                    <tr>
                        <td>Qoshimcha Mutaxasislik : </td>
                        <td><b>{{ $resume->specialty }}</b></td>
                    </tr>

                    <tr>
                        <td>Rasmi : </td>
                        <td>
                          <img alt="image" src="/images/{{ $resume->img }}" width="59">
                        </td>
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
