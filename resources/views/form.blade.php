<h1>User Form</h1>

@if($errors->any())
    <ul>
        @foreach ($errors->all() as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
@endif

@if(Session::has('user'))
<h1>What's wrong with you</h1>
@endif

<form action="save" method="post">
    @csrf
    <label>Username</label>
    <input type="text" name="username" placeholder="Enter username" />
    <span>@error('username'){{$message}}@enderror</span>
    <br>
    <label>Passowrd</label>
    <input type="text" name="passowrd" placeholder="Enter password" />
    <span>@error('passowrd'){{$message}}@enderror</span>
    <br>
    <input type="submit" value="Save" />
</form>