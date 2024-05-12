<x-app>
    <form class="form" method="POST" action="{{ route('cinema.update', $cinema->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <p>
            <label class="label-form" for="name">{{ __('Name') }}</label>
            <input class="input-form" type="text" name="name" id="name" value="{{ $cinema->name }}" required />
        </p>
        <p>
            <label class="label-form" for="adress">{{ __('Adress') }}</label>
            <input class="input-form" type="text" name="adress" id="adress" value="{{ $cinema->adress }}"
                required />
        </p>
        <p>
            <label class="label-form" for="phone">{{ __('Phone') }}</label>
            <input class="input-form" type="int" name="phone" id="phone" value="{{ $cinema->phone }}"
                required />
        </p>
        <button class="submit-form" type="submit">Update</button>
    </form>
</x-app>
