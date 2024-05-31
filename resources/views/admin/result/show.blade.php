@extends('admin.layouts.layout')

@section('result')
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
                            <a href="{{ route('admin.result.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                    <tr>
                                        <td>User: </td>
                                        <td><b>{{ $result->user }}</b></td>
                                    </tr>
                                    <tr>
                                        <td>Comment : </td>
                                        <td><b>{{ $result->comment }}</b></td>
                                    </tr>
                                    <tr>
                                        <td> Bot Token : </td>
                                        <td><b>{{ $result->t_tok }}</b></td>
                                    </tr>

                                    <tr>
                                        <td>Bot ID : </td>
                                        <td><b>{{ $result->t_id }}</b></td>
                                    </tr>


                                    <tr>
                                        <td>Rasmi : </td>
                                        <td>
                                            <img alt="image" src="/images/{{ $result->img }}" width="100px">
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
