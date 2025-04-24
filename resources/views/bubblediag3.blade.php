@if($errors->any())
    <h1>{{$errors->first()}}</h1>
@else
    <h1>give me videos</h1>     
@endif

<form hx-post="upload" hx-target="#toreplace" hx-swap="innerHTML" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">yea i got it man</button>
</form>