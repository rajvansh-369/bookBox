@extends('layouts.app')
@section('content')

    <div class="container mt-5">

        <div class="row">



            <form action="/boxCreate" method="post">
                @csrf
                <div class="form-group">
                    <label for="boxName">Box Name</label>
                    <input type="text" class="form-control" name="boxName" placeholder="Enter Box Name">

                </div>
                <div class="form-group">
                    <label for="boxVolume">Box Volume</label>
                    <input type="number"class="form-control" name="boxVolume" placeholder="0.00">
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
                        <th scope="col">Box Name</th>
                        <th scope="col">Volume</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($boxes as $box)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $box->box_name }}</td>
                            <td>{{ $box->volume }}</td>

                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>


@endsection