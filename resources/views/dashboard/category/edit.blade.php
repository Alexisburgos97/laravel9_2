@extends('dashboard.layout')

@section('content')

    <h1> Editar Categoría {{$category->title}}</h1>

    <form action="{{route('category.update', $category)}}" method="post" >
        @method('PUT')
        @csrf

        <label for="title" >Título</label>
        <input type="text" name="title" id="title" value="{{$category->title}}" class="form-control" >
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="slug" >Slug</label>
        <input type="text" name="slug" id="slug" value="{{$category->slug}}" class="form-control" >
        @error('slug')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <button type="submit" class="btn btn-success mt-3"> Envíar </button>

    </form>

@endsection
