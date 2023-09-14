<!DOCTYPE html>
<html>
<head>
    <title>Number Comparison Tool</title>

    <style type="text/css">
				
        .container
		{
			left: 25%;
			padding: 100px;
			text-align: center;	
		}
		input, select {
  			width: 20%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
		}

		input[type=submit] {
  			width: 20%;
 		 	background-color: #4CAF50;
  			color: white;
  			padding: 14px 20px;
  			margin: 8px 0;
  			border: none;
	 	 	border-radius: 4px;
  			cursor: pointer;
        }
        label {
                font-size: 18px;
                font-weight: bold;
                }
                h3{
                    font-size: 20px;
                }
	</style>

</head>
<body>
    <div class="container" >
    <h1>Number Comparison Tool</h1>
    <form method="post">
        <label for="number1">Enter Number 1:</label></br>
        <input type="number" name="number1" id="number1" required>
        <br>
        <label for="number2">Enter Number 2:</label></br>
        <input type="number" name="number2" id="number2" required>
        <br>
        <input type="submit" value="Compare Numbers">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $largerNumber = ($number1 > $number2) ? $number1 : $number2;

        echo "<h3>Number 1: $number1</h3>";
        echo "<h3>Number 2: $number2</h3>";
        echo "<h3>The larger number is: $largerNumber</h3>";
    }
    ?>

 </div>
</body>
</html>
