<x-app>
    <form class="form" method="POST" action="{{ route('country.store') }}">
        {{ csrf_field() }}
        <p>
            <label class="label-form" for="name">Name</label>
            <input class="input-form" type="text" name="name" id="name" value="" required />
        </p>
        <button class="submit-form" type="submit">Create</button>
    </form>
</x-app>
