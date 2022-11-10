@extends('dashboard.layout')

@section('content')

    <a href="{{route('category.create')}}">Crear</a>

    <table>

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
                    <a href="{{ route('category.edit', $category) }}">Editar</a>
                    <a href="{{ route('category.show', $category) }}">Ver</a>
{{--                    <a href="{{ route('category.destroy', $category) }}">Eliminar</a>--}}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>

    {{$categories->links()}}

@endsection
