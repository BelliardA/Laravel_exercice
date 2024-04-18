<x-app>
    <table class="table-head">
        <thead>
            <tr>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>

        <tbody class="table-body">
            @foreach ($countries as $country)
                <tr>
                    <td>{{ $country->name }}</td>
                    <td class="table-action">
                        <a href="{{ route('country.edit', $country->id) }}">{{ __('Edit') }}</a>
                        <a href="{{ route('country.destroy', $country->id) }}" class="delete">{{ __('Delete') }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="previous-next">
        <h1 style="color: white ; ">{{ $countries->links() }}</h1>
    </div>
    <a class="submit-form" href="{{ route('country.create') }}">{{ __('Create') }}</a>

</x-app>
