<x-app>
    <a style="padding: 10px;margin:15px;border:1px solid black; bordr-radius:" href="/cinema">Retour</a>

    <div class="card bg-white rounded-lg overflow-hidden shadow-md" style="width: 250px">
        <div class="card-body p-4">
            <h1 class="text-xl font-bold mb-2">{{ $cinema->name }}</h1>
            <p>adresse : {{ $cinema->adress }}</p>
            <p>telephone : {{ $cinema->phone }}</p>
            <a href="{{ route('cinema.edit', $cinema->id) }}"
                class="text-blue-500 hover:underline">{{ __('Edit') }}</a>
            <a href="{{ route('cinema.destroy', $cinema->id) }}"
                class="text-red-500 hover:underline">{{ __('Delete') }}</a>
        </div>
    </div>
</x-app>
