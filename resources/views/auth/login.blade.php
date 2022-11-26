
<div>
    @if($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>


<form action="/login" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="text" name="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="text" name="password">
    </div>
    <div>
        <button>Login</button>
    </div>
</form>
