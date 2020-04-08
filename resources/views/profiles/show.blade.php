@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <div class="bg-blue-500 rounded-lg" style="height: 225px; width: 100% mb-2">
        </div>
        <div class="flex justify-between items-center mb-4">

            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="rounded-full border border-gray-300 shadow py-2 px-4 text-black text-xs mr-2">
                    Edit Profile
                </a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
                    Follow Me
                </a>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde autem adipisci, tenetur iusto quisquam dicta iste dolor amet accusamus vitae libero velit, modi sapiente porro sunt quibusdam aut necessitatibus placeat!
        </p>

        <img 
        src="{{ $user->avatar }}" 
        alt="My Avatar" 
        class="rounded-full mr-2 absolute" 
        style="width: 150px; left: calc(50% - 75px); top: 140px;">
    </header>
    
    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection