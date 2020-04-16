<?php  if (count($errors) > 0) : ?>
  <div id="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
  <hr id="errorline" style="border-color: red; border-width: 2px;">
<?php  endif ?>