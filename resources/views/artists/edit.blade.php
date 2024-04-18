<x-app>
    <form class="form" method="POST" action="{{ route('artist.update', $artist->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <p>
            <label class="label-form" for="name">{{ __('Name') }}</label>
            <input class="input-form" type="text" name="name" id="name" value="{{ $artist->name }}" required />
        </p>
        <p>
            <label class="label-form" for="firstname">{{ __('Firstname') }}</label>
            <input class="input-form" type="text" name="firstname" id="firstname" value="{{ $artist->firstname }}"
                required />
        </p>
        <p>
            <label class="label-form" for="birthdate">{{ __('Birthdate') }}</label>
            <input class="input-form" type="int" name="birthdate" id="birthdate" value="{{ $artist->birthdate }}"
                required />
        </p>
        <p>
            <select class="select-form" name="country_id" id="country_id" required>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}"
                        {{ $country->id == $artist->country_id ? 'selected="selected"' : '' }}>
                        {{ $country->name }}
                    </option>
                @endforeach
            </select>
        </p>
        <button class="submit-form" type="submit">Update</button>
    </form>
</x-app>
