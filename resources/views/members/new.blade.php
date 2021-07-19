<h1>Member Form</h1>

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

<form action="{{URL::asset('members/save')}}" method="post">
    @csrf
    <label>Full Name</label>
    <input type="text" name="full_name" placeholder="Enter your full name" />
    <br>
    <label>Email</label>
    <input type="email" name="email_address" placeholder="Enter your email address" />
    <br>
    <input type="submit" value="Save" />
</form>