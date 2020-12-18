<!-- 
 this is a partial page
 purpose is to show the "Add Recipe" form
 even though the file extension is .php, all of the code is html.
 -->

<div class="form-container">
<h2>Add a joke</h2>
<p>Fill out all of the fields and submit</p>
<form action="processAddItem.php">
    Joke:<input type="text" name="jokeText"></input><br>
    Answer:<textarea rows="5" cols="50" name="jokeAnswer"></textarea><br>
    <button type="submit">Add</button>
</form>
</div>
