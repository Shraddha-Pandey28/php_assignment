<?php include 'link.php'; ?>

<form class="form-inline" action="auth.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="email">email:</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="education">password :</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>