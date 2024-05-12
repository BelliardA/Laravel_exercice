<x-app>
    <form class="form" method="POST" action="{{ route('salle.store') }}">
        {{ csrf_field() }}
        <p>
            <label class="label-form" for="numSalle">Numéro de salle</label>
            <input class="input-form" type="text" name="numSalle" id="numSalle" value="" required />
        </p>
        <p>
            <label class="label-form" for="capacite">Capacité</label>
            <input class="input-form" type="text" name="capacite" id="capacite" value="" required />
        </p>
        <p>
            <select class="select-form" name="cinema_id" id="cinema_id" required>
                @foreach ($cinemas as $cinema)
                    <option value="{{ $cinema->id }}"
                        {{ $cinema->id == $salle->cinema_id ? 'selected="selected"' : '' }}>
                        {{ $cinema->name }}
                    </option>
                @endforeach
            </select>
        </p>
        <button class="submit-form" type="submit">Create</button>
    </form>
</x-app>
