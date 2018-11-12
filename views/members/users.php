<?php
include('views/elements/header.php');?>

<?php
if( is_array($user) ) {
extract($user);
}?>

<div class="container">
	<div class="page-header">

<h1>Member <?php echo $user[uID];?></h1>
		<p><?php echo $user[email];?></p>
  </div>

<?php echo $user['first_name'];?> <?php echo $user['last_name'];?><br />
<a href="mailto:<?php echo $user['email'];?>"><?php echo $user['email'];?></a>

</div>

</div>

<?php include('views/elements/footer.php');?>
