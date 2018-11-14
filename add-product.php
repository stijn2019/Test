<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post">
    <p>
        <label for="name">Productnaam:</label>
        <input type="text" name="name" id="name" required>
    </p>
    <p>
        <label for="description">Omschrijving:</label>
        <input type="text" name="description" id="description" required>
    </p>
    <p>
        <label for="price">Prijs:</label>
        <input type="text" name="price" id="price" required>
    </p>
    	<label for="price">Productafbeelding:</label>
		<input type="hidden" name="MAX_FILE_SIZE" value="<?=$maxFileSize;?>">
		<p><input type="file" name="fileUpload" id="picture"></p>
		<p>Caption: <input type="text" name="caption" id="caption" value=""></p>
		<input type="submit" value="Upload">
</form>



	
</form>
</body>
</html>