<?php require_once '../partials/template.php'; ?>


<?php function get_page_content() {
	if (isset($_SESSION['user']) && $_SESSION['user']['roles_id'] == 1) {
		# code...
	
	global $conn;
?>

	<?php 
	$item_id = $_GET['id'];
	$sql = "SELECT * FROM items WHERE id='$item_id'";
	$result = mysqli_query($conn,$sql);
	$item=mysqli_fetch_assoc($result);
	//var_dump($item);

	 ?>

<div class="container">
	<div class="row mx-0">
		<div class="col-sm-8 offset-sm-2">
			<form action="../controllers/process_edit_item.php" method="POST">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" name="name" class="form-control" value="<?php echo $item['name']; ?>" required>
				</div>
				
				<div class="form-group">
					<label for="price">Price:</label>
					<input type="text" name="price" class="form-control" value="<?php echo $item['price']; ?>" required>
				</div>

				<div class="form-group">
					<label for="description">Description:</label>
					<textarea id="description" name="description" rows="5" class="form-control col-8"><?php echo $item['description']; ?></textarea>
				</div>

				<div class="form-group">
					<label for="categories">Categories:</label>
					<select class="form-control col-8" name="category_id" id="category" required>
						
						<?php 
						$sql = "SELECT * FROM categories";
						$categories = mysqli_query($conn,$sql);
						foreach($categories as $category){
							extract($category);
							
							//ternary operator
							$selected = $item['category_id'] == $id ? 'selected':'';

							echo "<option value='$id' $selected>$name</option>";
						}
						 ?>
						
					</select>
				</div>

				<input type="hidden" name="id" value="<?php echo $item['id']; ?>">
				<button type="submit" class="btn btn-primary"> Update Changes</button>

			</form> <!-- end edit form -->
			
		</div> <!-- end 8 cols -->
		
	</div>
	
</div>

<?php } else{

	header('Location: ./error.php');

}?>


<?php } ?>