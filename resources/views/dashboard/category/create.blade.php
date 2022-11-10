@extends('dashboard.layout')

@section('content')

    <h1> Crear Categoría </h1>

    <form action="{{route('category.store')}}" method="post" >

        @csrf

        <label for="title" >Título</label>
        <input type="text" name="title" id="title" value="{{old('title')}}" >
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="slug" >Slug</label>
        <input type="text" name="slug" id="slug" value="{{old('slug')}}" >
        @error('slug')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <button type="submit"> Envíar </button>

    </form>

@endsection
