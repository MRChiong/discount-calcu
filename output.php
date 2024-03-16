<html >
<head>
<title>Discount Result</title>
</head>
<body>

<?php
if(isset($_POST['submit'])) {
    $total = $_POST['total'];
    
    if($total > 1000) {
        $discountedAmount = $total * 0.9;
        $discountPercentage = 10;
    } elseif($total >= 500 && $total <= 1000) {
        $discountedAmount = $total * 0.95;
        $discountPercentage = 5;
    } else {
        $discountedAmount = $total; 
        $discountPercentage = 0;
    }
    
  
    echo "<h2>Total amount: $total</h2>";
    echo "<h2>Discount Percentage: $discountPercentage%</h2>";
    echo "<h2>Discounted amount: $discountedAmount</h2>";
}
?>

</body>