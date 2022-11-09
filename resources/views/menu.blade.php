@extends("layout")

@section("body")
    <div>
        @foreach($menu as $categories)
            <h1>
                <a href="{{ route('list', ['category' => $categories[0]['category']]) }}">
                    {{$categories[0]->category}}
                </a>
            </h1>
            <table>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->priority}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->price}}</td>
                    </tr>
                @endforeach
            </table>
            <br>
        @endforeach
            <button>
                <a href="{{ route('admin')}}">Go to admin panel</a>
            </button>  

        <form  method="post">
            @csrf
            <input type="text" name="search_input" placeholder="Search by name">
            <button class="btn btn-primary" name="search" value="yba">Search</button>
        </form>   
    </div>
@endsection