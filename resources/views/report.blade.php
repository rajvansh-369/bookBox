@extends('layouts.app')
@section('content')

    <div class="container mt-5">

        <div class="row">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Box Name</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Book Author</th>
                        <th scope="col">Quantity</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($getReport as $data)
                    {{-- {{dd($data->box->box_name )}} --}}
                    <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $data->box->box_name }}</td>
                            <td>{{ $data->book->book_name }}</td>
                            <td>{{ $data->book->book_author }}</td>
                            <td>{{ $data->qty }}</td>

                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

@endsection
