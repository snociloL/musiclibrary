@extends('master')

@section('title', 'Homepage')

@section('content')

    <h2 class="text-2xl text-black-200 left-10 ">List of Songs :</h2>

   <div class="flex-container">     
        @foreach($menus as $menu)
        
            <div class="flex" style="
                border: 1px solid rgb(160, 40, 40);
                display: inline-flex;
                width: 100%;
                width: 600px;
                height: 200px;
                box-sizing: border-box;
                margin: 15px;
                background-color: rgb(206, 110, 80);" >
            <img class="hidden md:block flex" width="200" height="200"
                src="{{$menu->cover ? asset('storage/' . $menu->cover) : asset('/images/no-image.png')}}" 
                alt=""/>
            <div class=" ml-10 flex flex-col items-center justify-center">
                    <h3 class="text-2xl">
                        {{ $menu->title }}
                    </h3>
                <div class="text-xl font-bold mb-4">{{ $menu->artist }}</div>
                <div><i class="text-lg mt-4"></i>{{ $menu->created_at->diffForHumans()}}</div>
                <audio src="{{$menu->music ? asset('storage/' . $menu->music) : asset('/images/no-image.png')}}" controls></audio>
            </div>
        </div>
        @endforeach
    </div>
    <footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
    <a
        href="/menus/create"
        class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
        >Add Song</a>
</footer>
@endsection
