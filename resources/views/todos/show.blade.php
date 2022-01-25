@extends('app')

@section('content')
    <div class="container w-50 rounded p-4 mt-4 shadow-lg">
        <form class="" action="{{ route('todos-update',['id'=>$todo->id]) }}" method="POST">
            @method('PATCH')
            @csrf
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @error('title')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="title" class="form-label">Titulo de la tarea</label>
                <input type="text" name="title" class="form-control" value="{{$todo->title}}">
            </div>

            <a class="btn btn-success" href="{{route('index')}}">Volver</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>

    </div>
@endsection
