@foreach ($users as $user)
    {{-- <h1>{{ $user->id }}</h1> --}}
    <h1>{{$user-> id . ' | ' .  $user->name }}</h1>
    <h1>{{ $user->email }}</h1>
    ==============================
@endforeach