        
        <header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="home.php" class="navbar-brand"><i class="icon-home"></i> Home</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li><a href="profile.php"><i class="icon-user"></i> Profile</a></li>
        <li><a href="photos.php"><i class="icon-picture"></i> Photos</a></li>
        <li><a href="friends.php"><i class="icon-group"></i> Friends</a></li>
		<li><a href="message.php"><i class="icon-group"></i> Message</a>
        </li>
        <li>
          <a href="logout.php"><i class="icon-signout"></i> Logout</a>
        </li>
      </ul>
  
		<div class="pull-right">
            <form class="form-inline" method="post" action="search.php">
             <input type="text" name="search" class="form-control"  id="span5" placeholder="Search">
            </form>
		</div>
   
    </nav>
  </div>
</header>