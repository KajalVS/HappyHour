<?php if(count($errors) > 0): ?>
	<div> 
		<?php foreach ($errors as $error) : 
			echo $error ;
		 endforeach 
		 ?>
	</div>
<?php endif ?>
		