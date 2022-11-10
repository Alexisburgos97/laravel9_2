@extends('dashboard.layout')

@section('content')

    <h1> Editar Categoría {{$category->title}}</h1>

    <form action="{{route('category.update', $category)}}" method="post" >
        @method('PUT')
        @csrf

        <label for="title" >Título</label>
        <input type="text" name="title" id="title" value="{{$category->title}}" >
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="slug" >Slug</label>
        <input type="text" name="slug" id="slug" value="{{$category->slug}}" >
        @error('slug')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <button type="submit"> Envíar </button>

    </form>

@endsection
