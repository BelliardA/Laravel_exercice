<x-app>
    <form enctype="multipart/form-data" class="form" method="POST" action="{{ route('movie.update', $movie->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <p>
            <label class="label-form" for="title">{{ __('Title') }}</label>
            <input class="input-form" type="text" name="title" id="title" value="{{ $movie->title }}" required />
        </p>
        <p>
            <label class="label-form" for="year">{{ __('Year') }}</label>
            <input class="input-form" type="text" name="year" id="year" value="{{ $movie->year }}"
                required />
        </p>
        <p>
            <select class="select-form" name="director_id" id="director_id" required>
                @foreach ($artists as $artist)
                    <option value="{{ $artist->id }}"
                        {{ $artist->id == $movie->director_id ? 'selected="selected"' : '' }}>
                        {{ $artist->name }}
                    </option>
                @endforeach
            </select>
        </p>
        <p>
            <select class="select-form" name="country_id" id="country_id" required>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}"
                        {{ $country->id == $movie->country_id ? 'selected="selected"' : '' }}>
                        {{ $country->name }}
                    </option>
                @endforeach
            </select>
        </p>
        <div class="mb-4">
            <label for="poster" class="block text-gray-700 font-bold mb-2">Photo :</label>
            <input type="file" name="poster" id="poster" value="" required
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-indigo-600">
            
        </div>
        <button class="submit-form" type="submit">Update</button>
    </form>
</x-app>
