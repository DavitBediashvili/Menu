@extends("layout")

@section("body")
<Form >

</Form>
    <div>
    <h1>{{$food[0]['category']}}</h1>
    <table>
        @foreach($food as $foo)
            <tr>
                <td>{{$foo->priority}}</td>
                <td>{{$foo->name}}</td>
                <td>{{$foo->price}}</td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection