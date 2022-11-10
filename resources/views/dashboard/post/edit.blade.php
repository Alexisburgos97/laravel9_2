@extends('dashboard.layout')

@section('content')

    <h1> Editar POST {{$post->title}}</h1>

    <form action="{{route('post.update', $post)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <label for="title" >Título</label>
        <input type="text" name="title" id="title" value="{{$post->title}}" >
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="slug" >Slug</label>
        <input type="text" name="slug" id="slug" value="{{$post->slug}}" >
        @error('slug')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="content" >Contenido</label>
        <input type="text" name="content" id="content" value="{{$post->content}}" >
        @error('content')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="description" >Descipción</label>
        <input type="text" name="description" id="description" value="{{$post->description}}" >
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="category_id" >Cateogias</label>
        <select name="category_id" id="category_id" >
            @foreach($categories as $title => $id)
                <option value="{{ $id }}" {{ $post->category_id == $id ? "selected" : "" }} >{{$title}}</option>
            @endforeach
        </select>
        @error('category_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="posted" >Posteado</label>
        <select name="posted" id="posted" >
            <option value="yes" {{ $post->posted == "yes" ? "selected" : "" }}>Si</option>
            <option value="not" {{ $post->posted == "not" ? "selected" : "" }} >No</option>
        </select>
        @error('posted')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="image" >Imagen</label>
        <input type="file" name="image" id="image" value="{{$post->image}}" >
        @error('image')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <button type="submit"> Envíar </button>

    </form>

@endsection
