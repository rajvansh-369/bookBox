<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Create Box</title>
</head>

<body>

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
                <button type="submit" class="btn btn-primary">Submit</button>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
