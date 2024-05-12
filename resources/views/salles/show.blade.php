<x-app>
    <a style="padding: 10px;margin:15px;border:1px solid black; bordr-radius:" href="/salle">Retour</a>

    <div class="card bg-white rounded-lg overflow-hidden shadow-md" style="width: 250px">
        <div class="card-body p-4">
            <h1 class="text-xl font-bold mb-2">{{ $salle->numSalle }}</h1>
            <p>Capacité : {{ $salle->capacite }}</p>
            <p>Salle de cinema :
                @foreach ($cinemas as $cinema)
                    @if ($cinema->id == $salle->cinema_id)
                        {{ $cinema->name }}
                    @endif
                @endforeach
            </p>
            <a href="{{ route('salle.edit', $salle->id) }}" class="text-blue-500 hover:underline">{{ __('Edit') }}</a>
            <a href="{{ route('salle.destroy', $salle->id) }}"
                class="text-red-500 hover:underline">{{ __('Delete') }}</a>
        </div>
    </div>
</x-app>
