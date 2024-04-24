<x-app>
    <a style="padding: 10px;margin:15px;border:1px solid black; bordr-radius:" href="/artist">Retour</a>

    <div class="card bg-white rounded-lg overflow-hidden shadow-md" style="width: 250px">
        <div class="card-body p-4">
            <h1 class="text-xl font-bold mb-2">{{ $artist->name }} {{ $artist->firstname }}</h1>
            <p>Année de naissance : {{ $artist->birthdate }}</p>
            <p>
                @foreach ($countries as $country)
                    @if ($country->id == $artist->country_id)
                        Pays : {{ $country->name }}
                    @endif
                @endforeach
            </p>
            <p>
                A jouer dans :
                @foreach ($artist->hasPlayed as $film)
                    {{ $film->title }} dans le role de : {{ $film->pivot->role_name }}
                @endforeach
            </p>
            <a href="{{ route('artist.edit', $artist->id) }}"
                class="text-blue-500 hover:underline">{{ __('Edit') }}</a>
            <a href="{{ route('artist.destroy', $artist->id) }}"
                class="text-red-500 hover:underline">{{ __('Delete') }}</a>
        </div>
    </div>
</x-app>
