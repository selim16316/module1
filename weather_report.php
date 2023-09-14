<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
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
      <div class="container">
      <h1>Weather Report</h1>

    <form method="post">
        <label for="temperature">Enter Temperature :</label></br>
        <input type="number" name="temperature" id="temperature" required>
        <br>
        <input type="submit" value="Check Weather">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $temperature = $_POST['temperature'];

       
        if ($temperature <= 0) {
            $message = "It's freezing!";
        } elseif ($temperature > 0 && $temperature < 18) {
            $message = "It's cool.";
        } else {
            $message = "It's warm.";
        }

        
        echo "<h3>Temperature: $temperature&deg;C</h3>";
        echo "<h3>$message</h3>";
    }
    ?>

</div>
</body>
</html>
