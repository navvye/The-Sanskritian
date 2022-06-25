<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<form method="post" action="index.php">
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Title: <input type="text" name="title">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>

  Synopsis: <textarea name="synopsis" rows="5" cols="40"></textarea>
  <br><br>
  Image Link <textarea name="image" rows="5" cols="10"></textarea>
  <br><br>


Topic:
  <input type="radio" name="topic" value="ScienceTechnology">Science and Technology</input>
  <input type="radio" name="topic" value="Movies"> Movies</input>
  <input type="radio" name="topic" value="Books">Books</input>
    <input type="radio" name="topic" value="Gaming">Gaming</input>
    <input type="radio" name="topic" value="Stories">Stories</input>
    <input type="radio" name="topic" value="Poems">Poems</input>
    <br>

  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
