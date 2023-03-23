@extends('front.layout.app')
 
@section('content')
<h1>Reset Password</h1>
<form action="{{route('reset_password_submit')}}" method="POST">
 @csrf 
 <input type="hidden" name="token" value="{{ $token }}">
 <input type="hidden" name="email" value="{{ $email }}">
 <div>New Password</div>
 <div>
    <input type="password" name="new_password">
 </div>   
 <div>Retype Password</div>
 <div>
    <input type="password" name="retype_password">
 </div>
 <div style="margin-top:10px">
    <input type="submit" value="Update">
 </div>
</form>

@endsection();

