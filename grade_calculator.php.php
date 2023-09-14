<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>

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
        font-size: 16px;
        font-weight: bold;
        }
        h3{
            font-size: 20px;
        }
	</style>
</head>
<body>
      <div class="container">  
        <h1>Grade Calculator</h1>
        <form method="post">
            <label for="score1">Test Score One</label></br>
            <input type="number" name="score1" id="score1" required>
            <br>
            <label for="score2">Test Score Two</label></br>
            <input type="number" name="score2" id="score2" required>
            <br>
            <label for="score3">Test Score Three</label></br>
            <input type="number" name="score3" id="score3" required>
            <br>
            <input type="submit" value="Result">
        </form>

    <?php
    
    function calculateGrade($average) {
        if ($average >= 80) {
            return 'A';
        } elseif ($average >= 70) {
            return 'B';
        } elseif ($average >= 60) {
            return 'C';
        } elseif ($average >= 50) {
            return 'D';
        } else {
            return 'F';
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        
        $average = ($score1 + $score2 + $score3) / 3;

        
        $grade = calculateGrade($average);

        
        echo "<h3>Test Scores: $score1, $score2, $score3</h3>";
        echo "<h3>Average Score: $average</h3>";
        echo "<h3>Grade: $grade</h3>";
    }
    ?>

 </div>   
</body>
</html>
