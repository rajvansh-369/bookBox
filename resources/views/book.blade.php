@extends('layouts.app')
@section('content')

    <div class="container mt-5">

        <div class="row">
            <form action="/bookCreate" method="post">
              @csrf
                <div class="form-group">
                    <label for="bookName">Book Name</label>
                    <input type="text" class="form-control" name="bookName" placeholder="Enter Box Name">

                </div>
                <div class="form-group">
                    <label for="bookAuthorName">Book Author Name</label>
                    <input type="text" class="form-control" name="bookAuthorName"
                        placeholder="Enter Box Author Name">

                </div>
                <div class="form-group">
                    <label for="bookVolume">Book Volume</label>
                    <input type="number" class="form-control" name="bookVolume" placeholder="0.00">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        </div>

        <div class="row">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Book Author</th>
                        <th scope="col">Volume</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $book->book_name }}</td>
                            <td>{{ $book->book_author }}</td>
                            <td>{{ $book->volume }}</td>

                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

@endsection
