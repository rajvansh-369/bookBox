@extends('layouts.app')
@section('content')
    <div class="container mt-5">

        <div class="row">



            <form action="/showBox" method="get">
                @csrf
                <div class="form-group">
                    <label for="boxName">Book</label>
                    
                    <select name="selectBook" id="book"  class="form-select" aria-label="Default select example" required>
                        <option value="Select Book">Select Book</option>

                        @foreach ($getAllBook as  $book)
                             <option value="{{$book->id}}">{{$book->book_name}} ----- {{$book->book_author}}  </option>
                        @endforeach
                    </select>
                   

                </div>
                <div class="form-group mt-3">
                    <label for="boxVolume">QTY</label>
                    <input type="number"class="form-control" name="qty" placeholder="0.00" required>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Show Boxex</button>
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


    @if ($bookID)
        
   
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Box Name</th>
                        <th scope="col">Quantity Can be Put</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($group_books as $box)

                    {{-- {{dd($group_books)}} --}}
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $box['box_name'] }}</td>
                            <td>{{ $box['countBook']}}</td>

                        </tr>
                    @endforeach

                </tbody>
            </table>

            <form action="/putBox" method="post">
                @csrf
                <input type="hidden" name="data" value="{{json_encode($group_books)}}">

                <button type="submit" class="btn btn-primary mt-2">Show Boxex</button>
            </form>

            @endif
            @if (\Session::has('bookaddedTOBox'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('bookaddedTOBox') !!}</li>
                    </ul>
                </div>
            @endif

        </div>
    </div>

@endsection