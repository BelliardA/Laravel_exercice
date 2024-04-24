<x-app>
    <a style="padding: 10px;margin:15px;border:1px solid black; bordr-radius:" href="/movie">Retour</a>
    <div class="card bg-white rounded-lg overflow-hidden shadow-md" style="width: 250px">
        <div class="card-body p-4">
            <h1 class="text-xl font-bold mb-2">{{ $movie->title }}</h1>
            <p>Année de sortie : {{ $movie->year }}</p>
            <p>
                directeur :
                @foreach ($artists as $artist)
                    @if ($artist->id == $movie->director_id)
                        {{ $artist->name }}
                    @endif
                @endforeach
            </p>
            <p>
                Pays :
                @foreach ($countries as $country)
                    @if ($country->id == $movie->country_id)
                        {{ $country->name }}
                    @endif
                @endforeach
            </p>
            <p>
                Acteurs :
                @foreach ($movie->actors as $acteurs)
                    {{ $acteurs->name }}
                @endforeach
            </p>
            <img src="{{ asset('storage/uploads/posters/poster_' . $movie->id . '.png') }}" alt="">
            <a href="{{ route('movie.edit', $movie->id) }}" class="text-blue-500 hover:underline">{{ __('Edit') }}</a>
            <a href="{{ route('movie.destroy', $movie->id) }}"
                class="text-red-500 hover:underline">{{ __('Delete') }}</a>
        </div>
    </div>
</x-app>
