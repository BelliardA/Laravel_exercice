<x-app>
    <form class="form" method="POST" action="{{ route('seance.store') }}">
        {{ csrf_field() }}
        <p>
            <select class="select-form" name="salle_id" id="salle_id" required>
                @foreach ($salles as $salle)
                    <option value="{{ $salle->id }}"
                        {{ $salle->id == $seance->numSalle ? 'selected="selected"' : '' }}>
                        {{ $salle->numSalle }}
                    </option>
                @endforeach
            </select>
        </p>
        <p>
            <label class="label-form" for="starttime">Heure de début</label>
            <input class="input-form" type="text" name="starttime" id="starttime" value="" required />
        </p>
        <p>
            <select class="select-form" name="movie_id" id="movie_id" required>
                @foreach ($movies as $movie)
                    <option value="{{ $movie->id }}"
                        {{ $movie->id == $seance->movie_id ? 'selected="selected"' : '' }}>
                        {{ $movie->title }}
                    </option>
                @endforeach
            </select>
        </p>
        <button class="submit-form" type="submit">Create</button>
    </form>
</x-app>
