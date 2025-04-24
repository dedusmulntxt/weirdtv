
@if($errors->any())
    <h1>{{$errors->first()}}</h1>
@else
    <h1>WHO????????</h1>     
@endif

<br><br>



<form hx-post="auth" hx-target="#toreplace" hx-swap="innerHTML" method="POST">  
@csrf





<label for="name"><b>NAME</b></label>
<input type="text" placeholder="Enter name" name="name" id="name" required>

<label for="password"><b>PASSWORD</b></label>
<input type="password" placeholder="Enter Password" name="password" id="password" required>

<button type="submit" class="registerbtn">YEAH?</button>

</form>