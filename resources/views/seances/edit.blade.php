<x-app>
    <form class="form" method="POST" action="{{ route('seance.update', $seance->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <p>
            Numéro de salle
            <select class="select-form" name="salle_id" id="salle_id">
                @foreach ($salles as $salle)
                    <option
                        value="{{ $salle->numSalle }}"{{ $salle->numSalle == $seance->numSalle ? 'selected="selected"' : '' }}>
                        {{ $salle->numSalle }}
                    </option>
                @endforeach
            </select>
        </p>
        <p>
            <label class="label-form" for="heureDebut">{{ __('Heure de Début') }}</label>
            <input class="input-form" type="datetime" name="heureDebut" id="heureDebut"
                value="{{ $seance->start_time }}" />
        </p>
        <p>
            Film
            <select class="select-form" name="movie_id" id="movie_id">
                @foreach ($movies as $movie)
                    <option
                        value="{{ $movie->id }}"{{ $movie->id == $seance->movie_id ? 'selected="selected"' : '' }}>
                        {{ $movie->title }}
                    </option>
                @endforeach
            </select>
        </p>
        <button class="submit-form" type="submit">Update</button>
    </form>
</x-app>
