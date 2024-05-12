<x-app>
    <form class="form" method="POST" action="{{ route('salle.update', $salle->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <p>
            <label class="label-form" for="numSalle">{{ __('Num salle') }}</label>
            <input class="input-form" type="text" name="numSalle" id="numSalle" value="{{ $salle->numSalle }}" />
        </p>
        <p>
            <label class="label-form" for="capacite">{{ __('Capacite') }}</label>
            <input class="input-form" type="text" name="capacite" id="capacite" value="{{ $salle->capacite }}" />
        </p>
        <p>
            <select class="select-form" name="cinema_id" id="cinema_id">
                @foreach ($cinemas as $cinema)
                    <option value="{{ $cinema->id }}"
                        {{ $cinema->id == $salle->cinema_id ? 'selected="selected"' : '' }}>
                        {{ $cinema->name }}
                    </option>
                @endforeach
            </select>
        </p>
        <button class="submit-form" type="submit">Update</button>
    </form>
</x-app>
