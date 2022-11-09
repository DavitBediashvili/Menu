@extends("layout")

@section("body")
    <table class="table">
        <thead>
            <tr>
                <th>Priority</th>
                <th>Category</th>
                <th>Name</th>
                <th>Price</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($infos as $info)
                    <tr>
                        <td>{{$info['priority']}}</td>
                        <td>{{$info['category']}}</td>
                        <td>{{$info['name']}}</td>
                        <td>{{$info['price']}}</td>
                        <form method="POST">
                            @csrf
                            <td>
                                <input type="number" name="priority" placeholder="Priority" size="6">
                                <input type="text" name="category" placeholder="Category" size="6">
                                <input type="text" name="name" placeholder="Name" size="6">
                                <input min=0 step="0.01" type="number" name="price" placeholder="Price" size="6">
                                <button class="btn btn-primary" name="edit" value="{{$info['id']}}">
                                Edit
                                </button>
                                <button class="btn btn-primary" name="delete" value="{{$info['id']}}">
                                Delete
                                </button>     
                            </td>
                        </form>
                    </tr>
            @endforeach
        </tbody>
    </table> 
    <form method="post">
        @csrf
        <input type="number" name="new_priority" placeholder="Priority" size="6">
        <input type="text" name="new_category" id="" placeholder="Category" size="6">
        <input type="text" name="new_name" id="" placeholder="Name" size="6">
        <input min=0 step="0.01" type="number" name="new_price" id="" placeholder="Price" size="6">

        <button class="btn btn-primary" name="add" value="yba">
            Add New Product
        </button>
    </form>

    <form action="/" method="post">
        @csrf
        <button class="btn btn-primary" name="back" value="yba">Main Page</button>
    </form>
   
@endsection