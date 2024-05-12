<x-app>
    <table class="table-head">
        <thead>
            <tr>
                <th>{{ __('Nume salle') }}</th>
                <th>
                    {{ __('Heure de début') }}
                </th>
                <th>{{ __('Film') }}</th>
            </tr>
        </thead>

        <tbody class="table-body">
            @foreach ($seances as $seance)
                <tr>
                    <td>{{ $seance->numSalle }}</td>
                    <td>{{ $seance->start_time }}</td>
                    <td>
                        @foreach ($movies as $movie)
                            @if ($movie->id == $seance->movies_id)
                                {{ $movie->title }}
                            @endif
                        @endforeach
                    </td>
                    <td class="table-action">
                        <a href="{{ route('seance.edit', $seance->id) }}">{{ __('Edit') }}</a>
                        <a href="{{ route('seance.destroy', $seance->id) }}" class="delete">{{ __('Delete') }}</a>
                        <a href="{{ route('seance.show', $seance->id) }}">{{ __('Show') }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="previous-next">
        <h1 style="color: white">{{ $seances->links() }}</h1>
    </div>
    <a class="submit-form" href="{{ route('seance.create') }}">{{ __('Create') }}</a>

</x-app>
