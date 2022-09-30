<div>
    <table class="table table-striped shadow border border-primary">
        <div class="row">
        <div class="col">
             <select class="form-select" wire:model.lazy="color">
                <option value="all">All</option>
                        <option value="black">Black</option>
                        <option value="white">White</option>
                        <option value="blue">Blue</option>
                        <option value="yellow">Yellow</option>
                        <option value="red">Red</option>
                        <option value="pink">Pink</option>
                    </select>
             </select>
        </div>
        
        <div class="col">
            <input type="text" class="form-control" placeholder="Search" wire:model.lazy="search">
        </div
        
        </div>
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
    {{$axies->links()}}
</div>

<style>

</style>
