<x-app>
    <table class="table-head">
        <thead>
            <tr>
                <th>{{ __('Name') }}</th>
                <th>{{ __('adress') }}</th>
                <th>{{ __('phone') }}</th>
            </tr>
        </thead>

        <tbody class="table-body">
            @foreach ($cinemas as $cinema)
                <tr>
                    <td>{{ $cinema->name }}</td>
                    <td>{{ $cinema->adress }}</td>
                    <td>{{ $cinema->phone }}</td>
                    <td class="table-action">
                        <a href="{{ route('cinema.edit', $cinema->id) }}">{{ __('Edit') }}</a>
                        <a href="{{ route('cinema.destroy', $cinema->id) }}" class="delete">{{ __('Delete') }}</a>
                        <a href="{{ route('cinema.show', $cinema->id) }}">{{ __('Show') }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="previous-next">
        <h1 style="color: white">{{ $cinemas->links() }}</h1>
    </div>
    <a class="submit-form" href="{{ route('cinema.create') }}">{{ __('Create') }}</a>

</x-app>
