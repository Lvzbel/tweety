<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <div class="bg-blue-500 rounded-lg" style="height: 225px; width: 100% mb-2">
            </div>

            <img 
            src="{{ $user->avatar }}" 
            alt="My Avatar" 
            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            style="left: 50%" 
            width="150"
            >
        </div>
        <div class="flex justify-between items-center mb-4">

            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                <a href="" class="rounded-full border border-gray-300 shadow py-2 px-4 text-black text-xs mr-2">
                    Edit Profile
                </a>
                <x-follow-button :user="$user"></x-follow-button> 
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde autem adipisci, tenetur iusto quisquam dicta iste dolor amet accusamus vitae libero velit, modi sapiente porro sunt quibusdam aut necessitatibus placeat!
        </p>
    </header>
    
    @include('_timeline', [
        'tweets' => $user->tweets
    ])
</x-app>