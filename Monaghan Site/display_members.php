<?php
    require_once('database.php');

    // Get members for selected category
    $queryProducts = "SELECT * FROM members";
    $statement3 = $db->prepare($queryProducts);
    $statement3->execute();
    $members = $statement3->fetchAll();
    $statement3->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    
    <style>

    </style>
    
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
              

        
    <div id="centerText"><header><h1>Accounts Manager</h1></header>
    <main>
        <h2>Member List</h2>
    </div>
        <br><br>

        <section>
            <!-- display a table of members -->
            <table>
                <tr>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
                <?php foreach ($members as $member_id) : ?>
                <tr>
                    <td><?php echo $member_id['clientEmail']; ?></td>
                    <td><?php echo $member_id['clientUsername']; ?></td>
                    <td><?php echo $member_id['clientPassword']; ?></td>
                    
                    <td id = "left"><form action="delete_member.php" method="post">
                        <input type="hidden" name="member_id"
                               value="<?php echo $member_id['memberID']; ?>">
                        <input type="submit" value="Delete">
                    </form></td>
                    
                    <td id = "left"><form action="edit_member_form.php" method="post">
                        <input type="hidden" name="member_id"
                               value="<?php echo $member_id['memberID']; ?>">
                        <input type="hidden" name="member_id"
                               value="<?php echo $member_id['memberID']; ?>">
                        <input type="submit" value="Edit">
                    </form></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <p><a href="accounts.php">Add Member</a></p>
        </section>
    
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