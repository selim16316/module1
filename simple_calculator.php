<!DOCTYPE html>
<html>
	<head>
		<title>Simple Calculator </title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		
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
	</style>
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
        <h1>Simple Calculator</h1>
        <form method="post" action="">
        <label for="fname">First Number:</label><br>
         <input name="number1" type="text" class="form-control" style="width: 220px; display: inline" /><br>
         <label for="fname">Second Number:</label><br>
         <input name="number2" type="text" class="form-control" style="width: 220px; display: inline" /><br>
		        <select name="operation">
                    <option>Select Operation</option>
		        	<option value="+">+</option>
		            <option value="-">-</option>
		            <option value="x">x</option>
		            <option value="/">/</option>
                    <option value="%">%</option>
		        </select> </br>
		        
		        <input name="submit" type="submit" value="Calculattion" class="btn btn-primary" />
		    </form>

		
			<?php
			
				
				if(isset($_POST['submit']))
				{
					
					if($firstNumber=$_POST['number1'] && $secondNumber=$_POST['number2'])
					{
					
						if($_POST['operation'] == '+')
						{
							$total = $_POST['number1'] + $_POST['number2'];	
						}
						if($_POST['operation'] == '-')
						{
							$total = $_POST['number1'] - $_POST['number2'];	
						}
						if($_POST['operation'] == 'x')
						{
							$total = $_POST['number1'] * $_POST['number2'];	
						}
						if($_POST['operation'] == '/')
						{
							$total = $_POST['number1'] / $_POST['number2'];	
						}
                        if($_POST['operation'] == '%')
						{
							$total = $_POST['number1'] % $_POST['number2'];	
						}
						
						
						echo "<h1>Result: {$_POST['number1']} {$_POST['operation']} {$_POST['number2']} = {$total}</h1>";
					
					} else {
						
						
						echo 'Please Enter Number';
					
					}
				}
			
			?>
		    
		  

	    
		</div>
	
	</body>
</html>