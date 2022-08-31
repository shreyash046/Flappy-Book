    <div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>" height="140" width="160"></center>
		<hr>
		<a class="btn btn-success" href="change_pic.php">Change Profile Picture</a>
      </div>
		<div class="col-md-10">
			<hr>
			<div class="pull-right"><a href="edit_profile.php" class="btn btn-info"><i class="icon-pencil"></i> Edit</a></div>
			<p>Personal Info
			
			</p>
				<?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
			?>
			<hr>
			<p>Name:<?php echo $row['firstname']." ".$row['lastname']; ?><span class="margin-p"> </span>Gender:<?php echo $row['gender']; ?></p>
			<hr>
			<p>Address:<?php echo $row['address']; ?></p>
			<hr>
			<p>Gender:<?php echo $row['gender']; ?></p>
						<hr>
			<p>Birthdate:<?php echo $row['birthdate']; ?></p>
						<hr>
			<p>Contact No:<?php echo $row['mobile']; ?></p>
						<hr>
			<p>Status:<?php echo $row['status']; ?></p>
						<hr>
				<p>Work:<?php echo $row['work']; ?></p>
			<hr>
				<p>Religion:<?php echo $row['religion']; ?></p>
		</div>

    </div> 