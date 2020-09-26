<!DOCTYPE html>
<html>
<head>
	<title>Preenchimento automatico do select</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10 mt-3">
				<div class="form-group">
					<label for="exampleFormControlSelect1">Categorias</label>
					<select class="form-control" id="categories" name="categories">
						<option value='' selected disabled>Selecionar uma categoria</option>
						<?php foreach($categories as $category):?>
							<option value="<?=$category->id;?>">
								<?=$category->name;?>
							</option>
						<?php endforeach;?>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Posts</label>
					<select class="form-control" id="posts">
						<option value="" selected>Selecionar um post</option>
					</select>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	<script>
		$(document).ready(function() {
			$('#categories').change(function() {
				var categoryID = $('#categories').val();

				if (categoryID != '') {
					$.ajax({
						url: "<?=base_url()?>/home/listarPais",
						method: "POST",
						data: { categoryID: categoryID },
						success: function (data) {
							$('#posts').html(data);
						}
					});
				}
			})
		})
	</script>
</body>
</html>