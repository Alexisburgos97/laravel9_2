@extends('dashboard.layout')

@section('content')

    <h1> Crear POST </h1>

    <form action="{{route('post.store')}}" method="post" >

        @csrf

        <label for="title" >Título</label>
        <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control" >
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="slug" >Slug</label>
        <input type="text" name="slug" id="slug" value="{{old('slug')}}" class="form-control" >
        @error('slug')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="content" >Contenido</label>
        <input type="text" name="content" id="content" value="{{old('content')}}" class="form-control" >
        @error('content')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="description" >Descipción</label>
        <input type="text" name="description" id="description" value="{{old('description')}}" class="form-control" >
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="category_id" >Cateogias</label>
        <select name="category_id" id="category_id" class="form-control" >
            @foreach($categories as $title => $id)
                <option value="{{$id}}" {{ old('category_id') == $id ? "selected" : "" }} >{{$title}}</option>
            @endforeach
        </select>
        @error('category_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="posted" >Posteado</label>
        <select name="posted" id="posted" class="form-control" >
            <option value="yes" {{ old("posted") == "yes" ? "selected" : "" }} >Si</option>
            <option value="not" {{ old("posted") == "not" ? "selected" : "" }} >No</option>
        </select>
        @error('posted')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <button type="submit" class="btn btn-success mt-3"> Envíar </button>

    </form>

@endsection
