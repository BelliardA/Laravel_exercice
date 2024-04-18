<x-app>
    <form class="form" method="POST" action="{{ route('country.update', $country->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <p>
            <label class="label-form" for="name">{{ __('Name') }}</label>
            <input class="input-form" type="text" name="name" id="name" value="{{ $country->name }}" required />
        </p>
        <button class="submit-form" type="submit">Update</button>
    </form>
</x-app>
