<?php

//Fahrenheit to celsius
function fahrenheit_to_celsius($given_value)
{
	$celsius=5/9*($given_value-32);
	return $celsius ;
}

//Celsius to fahrenheit
function celsius_to_fahrenheit($given_value)
{
	$fahrenheit=$given_value*9/5+32;
	return $fahrenheit ;
}

?>



<html>
<head>
	<title>Temperature Converter</title>
    <style>
        .container{
            left: 25%;
			padding: 100px;
			text-align: center;
        }
        table, tr,td{
        border: 1px;
        }
		form {
          width: 62%;
          float: right;
         }
        input, select {
  			width: 100%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
		}

		input[type=submit] {
  			width: 100%;
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
<div class="container">
    <h1>Temperature Converter</h1>
	<form action="" method="post">
	<table>

		<tr>
			<td>
				<select name="first_temp_type_name">
                   <option> Select</option>
					<option value="fahrenheit">Fahrenheit</option>
					<option value="celsius">Celsius</option>
					
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="given_value">
			</td>
		</tr>
		<tr>
			<td>
				<select name="second_temp_type_name">
                    <option >Select</option>
					<option value="fahrenheit">Fahrenheit</option>
					<option value="celsius">Celsius</option>
					</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="btn" value="Convert">
			</td>
		</tr>
		<tr>
			<td>

			<?php
if(isset($_POST['btn']))

{
    
    $first_temp_type_name=$_POST['first_temp_type_name'];
    $second_temp_type_name=$_POST['second_temp_type_name'];
    $given_value=$_POST['given_value'];
    
    //Fahrenheit to celsius and kelvin
    if ($first_temp_type_name=='fahrenheit') 
    {
        if ($second_temp_type_name=='celsius') 
        {
            $celsius=fahrenheit_to_celsius($given_value);
            echo "$given_value Fahrenheit = $celsius Celsius";
        }   
        else 
        {
            echo "$given_value Fahrenheit";
        }
    }
    //Celsius to fahrenheit and kelvin
    if ($first_temp_type_name=='celsius') 
    {
        if ($second_temp_type_name=='fahrenheit') 
        {
            $fahrenheit=celsius_to_fahrenheit($given_value);
	        echo "$given_value Celsius  = $fahrenheit Fahrenheit";
        }  
         
        {
            echo "$given_value Celsius";
        }
    }
     
}

				?>
			</td>
		</tr>
	</table>
 </form>
</div>
</body>
</html>