@include('header')

    <table class="table table-bordered mb-5">
        <thead>
            <tr class="table-success">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $key => $product)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $product->name }}</td>
                <td>Rs {{ $product->price }}</td>
                <td><a href="/product/buy/{{ $product->id }}" class="btn btn-sm btn-primary">Buy</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@include('footer')
