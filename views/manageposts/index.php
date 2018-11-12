<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Add Post</h1>
  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">
        <a href ="<?php echo BASE_URL;?>manageposts/add" class = "btn btn-primary">Add a Post</a>
      </div>
  </div>
</div>
<?php include('views/elements/footer.php');?>
