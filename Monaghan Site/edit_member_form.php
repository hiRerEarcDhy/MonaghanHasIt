<?php
require('database.php');

$member_id = filter_input(INPUT_POST, 'member_id', FILTER_VALIDATE_INT);
$query = 'SELECT *
          FROM members
          WHERE memberID = :member_id';
$statement = $db->prepare($query);
$statement->bindValue(':member_id', $member_id);
$statement->execute();
$member = $statement->fetch();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<head>
    <style>form
{
    padding: 50px;
    
    width:400px;
    margin-left: 100px;
}</style>
    <title>Accounts</title>
    <link rel="stylesheet" type="text/css" href="css/one-page-wonder.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<!-- the body section -->
<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html"><h1>Monaghan Has It</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li>
              <a class="nav-link" href="index.html">About
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="landmarks.html">Landmarks</a>
            </li>
            <li>
              <a class="nav-link" href="rossmore.html">Rossmore Forest Park</a>
            </li>
            <li>
              <a class="nav-link" href="history.html">History</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container"> 
    <div id="contentbox">
              

        
    <main>
        <div id="centerText"><h1>Edit Member</h1></div>
        <form action="edit_member.php" method="post">
            <input type="hidden" name="member_id"
                   value="<?php echo $member['memberID']; ?>">

            <label>Email:</label><br>
            <input type="input" name="email"
                   value="<?php echo $member['clientEmail']; ?>">
            <br>

            <label>Username:</label><br>
            <input type="input" name="username"
                   value="<?php echo $member['clientUsername']; ?>">
            <br>

            <label>Password:</label><br>
            <input type="input" name="password"
                   value="<?php echo $member['clientPassword']; ?>">
            <br>

            <label>&nbsp;</label>
            <input type="submit" value="Save Changes">
            <br>
        </form>
        <p><a href="display_members.php">View Member List</a></p>
    </main>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">&copy; <?php echo date("Y");?> Monaghan Has It</p>
      </div>
      <!-- /.container -->
    </footer>
</div>
</div>
</body>
</html>