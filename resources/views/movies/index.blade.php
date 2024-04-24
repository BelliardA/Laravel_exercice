<x-app>
    <table class="table-head">
        <thead>
            <tr>
                <th>{{ __('Title') }}</th>
                <th>{{ __('Year') }}</th>
                <th>{{ __('Director') }}</th>
                <th>{{ __('Country') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>

        <tbody class="table-body">
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->year }}</td>
                    <td>
                        @foreach ($artists as $artist)
                            @if ($artist->id == $movie->director_id)
                                {{ $artist->name }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($countries as $country)
                            @if ($country->id == $movie->country_id)
                                {{ $country->name }}
                            @endif
                        @endforeach
                    </td>
                    <td class="table-action">
                        <a href="{{ route('movie.edit', $movie->id) }}">{{ __('Edit') }}</a>
                        <a href="{{ route('movie.destroy', $movie->id) }}" class="delete">{{ __('Delete') }}</a>
                        <a href="{{ route('movie.show', $movie->id) }}">{{ __('Show') }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="previous-next">
        <h1 style="color: white">{{ $movies->links() }}</h1>
    </div>
    <a class="submit-form" href="{{ route('movie.create') }}">{{ __('Create') }}</a>

</x-app>
