<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>

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
    <h1>Even or Odd Checker</h1>
    
    <form method="post">
        <label for="number">Enter a Number:</label></br>
        <input type="number" name="number" id="number" required>
        <br>
        <input type="submit" value="Check">
    </form> 



    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $number = $_POST["number"];

        
        if ($number % 2 == 0) {
            $message = "The number $number is even.";
        } else {
            $message = "The number $number is odd.";
        }

        
        echo "<h3>$message</h3>";
    }
    ?>
</div>
    
</body>
</html>
