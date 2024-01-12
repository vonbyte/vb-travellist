<x-app-layout>
    <div class="table-wrapper">
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($lists as $list)
                <tr>
                    <td>{{ $list->name }}</td>
                    <td>{{ $list->startDate }}</td>
                    <td>{{ $list->endDate }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</x-app-layout>
