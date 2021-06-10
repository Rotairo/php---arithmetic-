<!doctype html>
<html>
<head>
<title> PHP ARITHMETIC OPERATORS PROGRAM </title>
</head>
<style>
.header {
       position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 80px; 
			overflow: hidden; /* Disables scrollbars on the header frame. To enable scrollbars, change " */
			background: white;
		}
	
  .main{
  border-radius: 10px 10px;
			position: fixed;
			top:80px; /* Set this to the height of the header */
			bottom: 50px; /* Set this to the height of the footer */
			left: 300px; 
			right: 0; /*para wray border an right han main*/
			overflow: auto; /*para ma scroll an sulod han main*/
			background: white;
			
		}
			.footer{
		text-align: center;
			position: absolute;
			left: 0;
			bottom: 1px;
			width: 100%;
			height: 50px; 
			overflow: hidden; /* Disables scrollbars on the footer frame. To enable scrollbars, change "hidden" to "scroll" */
			background: white;
		}
		body{
background-color:  white;
}

		nav{
		border-radius: 1px 1px;
			position: absolute; 
			top: 80px; /* Set this to the height of the header */
			bottom: 50px; /* Set this to the height of the footer */
			
			left:0; /*wry margin ha left*/
			width: 300px; /*width han navigation*/
			overflow: auto; /* Scrollbars will appear on this frame only when there's enough content to require scrolling. To disable scrollbars, change to "hidden", or use "scroll" to enable permanent scrollbars */
			background: white; 
		}
		
		i{
		font-siZe: 10px;
	}
		h1{
		color: black;
		text-shadow: 2px 2px 2px white;
		}
		.h3{
		background-color:black;
		height: 20px;
		margin-top:0px;
		margin-left: 300px;
		margin-right: 300px;
		border-radius: 30px 30px;
		box-shadow: 1px 1px 1px cyan;
		}
		h3{
		font-size:15px;
		color:  white;
		text-shadow: 2px 2px 2px grey;
		}
		img{
		margin-top: 10px;
		width: 200px;
		height: 200px;
		border-radius: 50%;
		}
		.button{
		background: blue;
		width: 270px;
		height: 70px;
		color: black;
		font-size: 20px;
		}
	
    h2{
    color: yellow;
    }
    fieldset{
    background-color: black;
    width: 300px;
    border-radius: 30px 30px;
    margin-bottom:10px;
    }
    
    .flex{
    display:flex;
    margin-left: 20px;
    }
    h4{
    padding-left:150px;
    padding-right:120px;
    color: white;
    font-size: 15px;
    }
    input[type=submit]{
font-size: 20px;
border: 2px  solid black;
position :relative;
background : skyblue;
text-align: center;
color: black;
margin: 5px;
}
.frame{
margin-top:0px;
width: 100%;
height: 100%;
background: white;
border: 1;
border-radius:  5px 5px;
}
h5{
font-size: 30px;
color: maroon;
}
</style>
<body>
<header class="header">
<center><h1>PHP ARITHMETIC OPERTORS PROGRAM</h1></header></center>
<nav>
<center>
<form method="post"> 

        <input type="submit" name="button1"
                class="button" value="Addition" />
                <br>
        <input type="submit" name="button2"
                class="button" value="Subtraction" />
                       <br>
        <input type="submit" name="button3"
                class="button" value="Multiplication" />
                       <br>
        <input type="submit" name="button4"
                class="button" value="Division" />
                       <br>
        <input type="submit" name="button5"
                class="button" value="Area & perimeter of traingle" />
                       <br>
        <input type="submit" name="button6"
                class="button" value="Area & perimeter of rectangle" />
                <br>	 

    </form> 
    </center>

</center></nav>

<main class="main">
<fieldset class="frame">
   <?php
      
        if(array_key_exists('button1', $_POST)) { 

            button1();

        } 

        else if(array_key_exists('button2', $_POST)) { 

            button2(); 

        }
        else if(array_key_exists('button3', $_POST)) { 

            button3(); 

        } 
        else if(array_key_exists('button4', $_POST)) { 

            button4(); 

        }
        else if(array_key_exists('button5', $_POST)) { 

            button5(); 

        }
        else if(array_key_exists('button6', $_POST)) { 

            button6(); 

        } 

        function button1() {
            $num1=20;
            $num2=10;
            $num3=30;
            echo "<br><br><h5>Addition</h5>";
            echo "<p>Adding two digits</p>";
            $answer=$num1+$num2;
            echo "Formula: $num1 + $num2 = $answer";
            echo "<br> Answer of 1st digit and second digit is: $answer";
            echo "<br><br><br><p>Adding three digits</p>";
            $answer=$num1+$num2 + $num3;
            echo "Formula: $num1 + $num2 + $num3 = $answer";
            echo "<br> Answer: $answer";
            
            
        } 

        function button2() { 

            $num1=20;
            $num2=10;
            $num3=30;
            echo "<h5>Subtract</h2>";
            echo "Subtraction of two digits</h2>";
            $answer=$num1-$num2;
            echo "<br>Formula: $num1 - $num2 = $answer";
            echo "<br><br><br> Answer of 1st digit and second digit is: $answer";
            echo "<br><br><br><p>subtracting three digits</p>";
            $answer=$num1-$num2 - $num3;
            echo "Formula: $num1 - $num2 -$num3 = $answer";
            echo "<br> Answer: $answer";
            

        }
        function button3() { 

            $num1=20;
            $num2=10;
            $num3=30;
            echo "<h5>multiply</h2>";
            echo "multiplication of two digits</h2>";
            $answer=$num1*$num2;
            echo "<br>Formula: $num1 * $num2 = $answer";
            echo "<br><br><br> Answer of 1st digit and second digit is: $answer";
            echo "<br><br><br><p>multiplying three digits</p>";
            $answer=$num1*$num2*$num3;
            echo "Formula: $num1 * $num2 * $num3 = $answer";
            echo "<br> Answer: $answer";
            


        } 
        function button4() { 

            $num1=20;
            $num2=10;
            echo "<h5>Devide</h2>";
            echo "Division of  two digits</h2>";
            $answer=$num1/$num2;
            echo "<br>Formula: $num1/$num2 = $answer";
            echo "<br><br><br> Answer of 1st digit and second digit is: $answer";
        }
        function button5() { 
            $b=20;
            $h=10;
            $a=2;
            echo "<h5> Area and perimeter of triangle</h5>";
            echo "Area:<br> b=$b<br>h=$h<brFORMULA:A=bh/2<br><br>Value: A=($b x $h)/2";
            echo"<br><br>Perimeter:<br> P= a+b+h<br>Value: P =$b+$h+100";
            $ans=($b*$h)/$a;
            echo "<br><br>Answer";
            echo "<br>The Area of triangle is: $ans";
            $P=$b+$h+$ans;
            echo "<br>The perimeter of triangle is : $P";
        }
        function button6(){   
            echo "<h5> Area and perimeter of rectangle</h5>";
            $length=20;
            $width=10;
            $a=2;
            echo "Area:<br> b=$b<br>h=$h<brFORMULA:A=length x width/2<br><br>Value: A = $length x $width";
            echo"<br><br>Perimeter:<br> P = 2xlenght+2xwidth<br>Value: P = 2*$length+2*$width";
            $Area=$length*$width;
            echo "<br><br>Answer";
            echo "<br>The Area of rectangle is: $Area";
            $P= ($a*$length)+($a*$width);
            echo "<br>The perimeter of rectangle is : $P";
        } 
    ?>
</fieldset>
</main>
<footer class="footer">
</center>
</footer>
<body>
<html>