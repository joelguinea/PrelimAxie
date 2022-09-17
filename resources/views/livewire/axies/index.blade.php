<div>
    <table class="table table-striped shadow border border-primary">
        <thead class="bg-danger">
            <tr>
                <th>ID No</th>
                <th>Axie Name</th>
                <th>Axie Type</th>
                <th>Price</th>
                <th>Color</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($axies as $axie)
                <tr>
                    <td>{{ $axie->id }}</td>
                    <td>{{ $axie->axie_name }}</td>
                    <td>{{ $axie->axie_type }}</td>
                    <td>{{ $axie->price }}</td>
                    <td>{{ $axie->color }}</td>
                    <td>
                        <a href="{{ url('edit', ['axie' => $axie->id]) }}" class="btn btn-danger" id="ic" title="Edit">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['axie' => $axie->id]) }}" class="btn btn-danger" id="ic" title="Delete">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>

</style>
