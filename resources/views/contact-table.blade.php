<h1>Contact Table</h1>

@foreach ($contact as $con)
    <h2>{{ $con->id . ' | ' . $con->name }}</h2>
    <h2>{{$con->email }}</h2>
    <h2>{{$con->subject }}</h2>
    <h2>{{$con->message }}</h2>
    <h2>=============================</h2>
@endforeach