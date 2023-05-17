table>
    <thead>
        <tr>
            <th>{{ $criteria1 }}</th>
            <th>{{ $criteria2 }}</th>
            <th>Count</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($results as $result)
            <tr>
                <td>{{ $result->$criteria1 }}</td>
                <td>{{ $result->$criteria2 }}</td>
                <td>{{ $result->count }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
