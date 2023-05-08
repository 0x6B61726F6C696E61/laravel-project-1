<h1>Add an item</h1>
<form action='/przedmioty' method="POST">
    @csrf
<label for='name'>Name: </label>
<input type="text" id='name'>
<br>
<label for='description'>Item description: </label>
<input type="text" id='description'>
<br>
<label for='price'>Price: </label>
<input type="text" id='text'>
<br>
<input type="submit">
</form>