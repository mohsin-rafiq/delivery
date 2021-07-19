<h1>Member Form</h1>

@if($errors->any())
    <ul>
        @foreach ($errors->all() as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
@endif

<form action="{{URL::asset('members/update')}}" method="post">
    @csrf
    <label>Full Name</label>
    <input type="text" name="full_name" placeholder="Enter your full name" value="{{$member->full_name}}" />
    <br>
    <label>Email</label>
    <input type="email" name="email_address" placeholder="Enter your email address" value="{{$member->email_address}}" />
    <br>
    <input type="hidden" name="id" value="{{$member->id}}" />
    <input type="submit" value="Update" />
</form>