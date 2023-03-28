@extends('master')

@section('title', 'Homepage')

@section('content')
<div class= 'bg-gray-50 border border-gray-200 rounded p-10 max-w-lg mx-auto mt-24'>
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">Add to Album</h2>
    <p class="mb-4">Post a song</p>
  </header>

  <form method="POST" action="/create" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
      <label for="title" class="inline-block text-lg mb-2">Song Title</label>
      <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
        value="{{old('title')}}" />

      @error('title')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="artist" class="inline-block text-lg mb-2">Artist/Singer</label>
      <input type="text" class="border border-gray-200 rounded p-2 w-full" name="artist"
        placeholder="Example: Hikaru Utada, Isekaijoucho" value="{{old('artist')}}" />

      @error('artist')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="cover" class="inline-block text-lg mb-2">
        Music Cover
      </label>
      <input type="file" class="border border-gray-200 rounded p-2 w-full" name="cover" />

      @error('cover')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>
    
    <div class="mb-6">
      <label for="music" class="inline-block text-lg mb-2">
        Music File
      </label>
      <input type="file" class="border border-gray-200 rounded p-2 w-full" name="music" />

      @error('music')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
        Add Song
      </button>

      <a href="/" class="text-black ml-4"> Back </a>
    </div>
  </form>
</div>
    @endsection