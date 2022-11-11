@extends('dashboard.layout')

@section('content')

    <div class="container my-3 text-right">
        <a href="{{route('post.create')}}" class="btn btn-success" >Crear</a>
    </div>

    <table class="table mb-3">

        <thead>

            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Posteado</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>

        @foreach($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->category->title}}</td>
                <td>{{$post->posted}}</td>
                <td>
                    <a href="{{ route('post.edit', $post) }}" class="btn btn-info">Editar</a>
                    <a href="{{ route('post.show', $post) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('post.destroy', $post) }}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>

    {{$posts->links()}}

@endsection
