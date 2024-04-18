<x-app>
    <table class="table-head">
        <thead>
            <tr>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Firstname') }}</th>
                <th>{{ __('Birthdate') }}</th>
                <th>{{ __('Country') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>

        <tbody class="table-body">
            @foreach ($artists as $artist)
                <tr>
                    <td>{{ $artist->name }}</td>
                    <td>{{ $artist->firstname }}</td>
                    <td>{{ $artist->birthdate }}</td>
                    <td>
                        @foreach ($countries as $country)
                            @if ($country->id == $artist->country_id)
                                {{ $country->name }}
                            @endif
                        @endforeach
                    </td>
                    <td class="table-action">
                        <a href="{{ route('artist.edit', $artist->id) }}">{{ __('Edit') }}</a>
                        <a href="{{ route('artist.destroy', $artist->id) }}" class="delete">{{ __('Delete') }}</a>
                        <a href="{{ route('artist.show', $artist->id) }}">{{ __('Show') }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="previous-next">
        <h1 style="color: white">{{ $artists->links() }}</h1>
    </div>
    <a class="submit-form" href="{{ route('artist.create') }}">{{ __('Create') }}</a>

</x-app>
