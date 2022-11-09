@extends("layout")

@section("body")

    <table class="table">
        <thead>
            <tr>
                <th>Priority</th>
                <th>name</th>
                <th>category</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($search as $result)
                <tr>
                    <td>{{$result['priority']}}</td>
                    <td>{{$result['name']}}</td>
                    <td>{{$result['category']}}</td>
                    <td>{{$result['price']}}</td>
                </tr>
            @endforeach
        </tbody>
        
    </table>


@endsection