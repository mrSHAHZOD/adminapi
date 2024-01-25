@extends('admin.layouts.layout')

@section('result')
    active
@endsection

@section('content')
    <!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Mentor ma'lumotlari</h3>
                    <a class="create__btn" href="{{ route('admin.result.index') }}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Sarvlavha uz : </p>
                                </td>
                                <td><b>{{ $result->t_tok }}</b></td>
                            </tr>
                            <tr>
                              <tr>
                                <td>
                                    <p>Sarvlavha ru : </p>
                                </td>
                                <td><b>{{ $result->t_id }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Vaqt : </p>
                                </td>
                                <td><b>{{ $result->created_at }}</b></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

    <!-- MAIN -->
@endsection
