<x-app>
    <table class="table-head">
        <thead>
            <tr>
                <th>{{ __('Nume salle') }}</th>
                <th>{{ __('Capacité') }}</th>
                <th>{{ __('Cinema') }}</th>
            </tr>
        </thead>

        <tbody class="table-body">
            @foreach ($salles as $salle)
                <tr>
                    <td>{{ $salle->numSalle }}</td>
                    <td>{{ $salle->capacite }}</td>
                    <td>
                        @foreach ($cinemas as $cinema)
                            @if ($cinema->id == $salle->cinema_id)
                                {{ $cinema->name }}
                            @endif
                        @endforeach
                    </td>
                    <td class="table-action">
                        <a href="{{ route('salle.edit', $salle->id) }}">{{ __('Edit') }}</a>
                        <a href="{{ route('salle.destroy', $salle->id) }}" class="delete">{{ __('Delete') }}</a>
                        <a href="{{ route('salle.show', $salle->id) }}">{{ __('Show') }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="previous-next">
        <h1 style="color: white">{{ $salles->links() }}</h1>
    </div>
    <a class="submit-form" href="{{ route('salle.create') }}">{{ __('Create') }}</a>

</x-app>
