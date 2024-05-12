<x-app>
    <form class="form" method="POST" action="{{ route('cinema.store') }}">
        {{ csrf_field() }}
        <p>
            <label class="label-form" for="name">Name</label>
            <input class="input-form" type="text" name="name" id="name" value="" required />
        </p>
        <p>
            <label class="label-form" for=" dress">adresse</label>
            <input class="input-form" type="text" name="adress" id="adress" value="" required />
        </p>
        <p>
            <label class="label-form" for="phone">phone</label>
            <input class="input-form" type="phone" name="phone" id="phone" value="" required />
        </p>
        <button class="submit-form" type="submit">Create</button>
    </form>
</x-app>
