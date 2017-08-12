<!DOCTYPE html>
<html>
<head>
	<title>Meal Calculator</title>
</head>
<body>
<form method="post">
    
    <?php
        function loop($k,$c){
        	for ($i=0; $i <= $c; $i++) { 
        	echo $k;
        }
        }
    ?>
    <h3>Total Savings</h3>
    <h4>X's Savings</h4>
    <?php loop('<input type="text" name="x[]" placeholder="enter amount">',20) ;?>
	
	<h4>Y's Savings</h4>
	<?php loop('<input type="text" name="y[]" placeholder="enter amount">',20); ?>
	
	<h4>Z's Savings</h4>
	<?php loop('<input type="text" name="z[]" placeholder="enter amount">',20); ?>

	<h3>Total Bazar</h3>
	<?php loop('<input type="text" name="bazar[]" placeholder="enter amount">',48); ?>
    <h3>Total Meal</h3>
	<h4>X's Meal</h4>
	<input type="text" name="xmeal[]" placeholder="enter amount">
	<h4>Y's Meal</h4>	
	<input type="text" name="ymeal[]" placeholder="enter amount">
	<h4>Z's Meal</h4>
	<input type="text" name="zmeal[]" placeholder="enter amount">
    <br><br>
	<button style="height: 40px;font-size: 16px; padding: 10px 28px;background-color: #2196F3; color: white;"type="submit" value="submit" name="submit">Calculate Meal</button>

</form>

<h2>All Meal Details :</h2> 


<?php
    if (isset($_POST['submit'])) {
       $x=[];
       $y=[];
       $z=[];

       $bazar=[];

       $xmeal = [];
       $ymeal = [];
       $zmeal = [];


       $x=$_POST['x'];
       $y=$_POST['y'];
       $z=$_POST['z'];
       $xmeal=$_POST['xmeal'];
       $ymeal=$_POST['ymeal'];
       $zmeal=$_POST['zmeal'];
       $bazar=$_POST['bazar'];
    	
    
    $xsave= array_sum($x);
       echo "X's Save : $".$xsave;
    $ysave= array_sum($y);
       echo "<br>Y's Save : $".$ysave;
    $zsave= array_sum($z);
       echo "<br>Z's Save : $".$zsave;

    $totalsave= $xsave+$ysave+$zsave;
       echo "<br><br>Total Save : $". $totalsave."<br>";

    $totalbazar= array_sum($bazar);
       echo "<br>Total Bazar : $".$totalbazar;

    $extra= $totalsave-$totalbazar;
       echo "<br><br>Extra after total bazar : $".$extra;     

    $totalxmeal= array_sum($xmeal);
       echo "<br><br>X's Meal : ".$totalxmeal;
    $totalymeal= array_sum($ymeal);
       echo "<br>Y's Meal : ".$totalymeal;
    $totalzmeal= array_sum($zmeal);
       echo "<br>Z's Meal : ".$totalzmeal;

    $totalmeal= $totalxmeal+$totalymeal+$totalzmeal;
       echo "<br>Total Meal : ".$totalmeal;
    $mealrate = $totalbazar/$totalmeal;
       echo "<br><br>Meal Rate : $".$mealrate;

    $xcost= $totalxmeal * $mealrate;
       echo "<br><br>X's cost : $". $xcost;

    $ycost= $totalymeal * $mealrate;
       echo "<br>Y's cost : $". $ycost;

    $zcost= $totalzmeal * $mealrate;
       echo "<br>Z's cost : $". $zcost."<br>";

    if ($xsave > $xcost) {
	    $xget= $xsave-$xcost;
	    echo "<br>X will get : $".$xget ;
    }else
    {
       $xpay= $xcost-$xsave;
        echo "<br>X will pay : $".$xpay;
    }

    if ($ysave > $ycost) {
	    $yget= $ysave-$ycost;
	    echo "<br>Y will get : $".$yget;
    }else
    {
	    $ypay= $ycost-$ysave;
	    echo "<br>Y will pay : $".$ypay;
    }

    if ($zsave > $zcost) {
	    $zget= $zsave-$zcost;
	    echo "<br>Z will get : $".$zget;
    }else
    {
	    $zpay= $zcost-$zsave;
	    echo "<br>Z will pay : $".$zpay;
    }
}
?>
</body>
</html>