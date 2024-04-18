<x-app>
    <form class="form" method="POST" action="{{ route('artist.store') }}">
        {{ csrf_field() }}
        <p>
            <label class="label-form" for="name">Name</label>
            <input class="input-form" type="text" name="name" id="name" value="" required />
        </p>
        <p>
            <label class="label-form" for="firstname">Firstname</label>
            <input class="input-form" type="text" name="firstname" id="firstname" value="" required />
        </p>
        <p>
            <label class="label-form" for="birthdate">birthdate</label>
            <input class="input-form" type="int" name="birthdate" id="birthdate" value="" required />
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
        <button class="submit-form" type="submit">Create</button>
    </form>
</x-app>
