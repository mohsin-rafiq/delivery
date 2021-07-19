<h1>Member's List</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->full_name}}</td>
            <td>{{$item->email_address}}</td>
            <td>{{$item->created_at}}</td>
            <td><a href="{{URL::asset('members/edit/' . $item->id)}}">Edit</a></td>
            <td><a href="{{URL::asset('members/delete/' . $item->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<div>
    {{$members->links()}}
</div>

<style>
    .w-5 {
        display: none;
    }
</style>