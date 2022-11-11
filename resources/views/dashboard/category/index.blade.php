@extends('dashboard.layout')

@section('content')

    <div class="container my-3 text-right">
        <a href="{{route('category.create')}}" class="btn btn-success mt-3">Crear</a>
    </div>

    <table class="table mb-3">

        <thead>

            <tr>
                <th>Título</th>
                <th>Slug</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>

        @foreach($categories as $category)
            <tr>
                <td>{{$category->title}}</td>
                <td>{{$category->slug}}</td>
                <td>
                    <a href="{{ route('category.edit', $category) }}" class="btn btn-info">Editar</a>
                    <a href="{{ route('category.show', $category) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('category.destroy', $category) }}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>

    {{$categories->links()}}

@endsection
