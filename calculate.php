<!DOCTYPE html>
<?php
 $name = htmlspecialchars(filter_input(INPUT_GET, 'name'));
 $amount = htmlspecialchars(filter_input(INPUT_GET, 'amount', FILTER_VALIDATE_INT));
 $interest = htmlspecialchars(filter_input(INPUT_GET, 'interest', FILTER_VALIDATE_INT));
 $payrate = htmlspecialchars(filter_input(INPUT_GET, 'payrate', FILTER_VALIDATE_INT));
 
 
 $percent = ($interest / 100 );

 $monthlyinterest = ($percent * $amount) / 12; 
 
 $currentbalance = $amount;

 
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include ('navigation.php'); echo "</br></br>" ?>
        <!-- end of navigation bar -->
        <?php
        if ($payrate < $monthlyinterest){
            header('location: Error.php');
        }//end if error 
        echo "Hello, $name.</br></br>";
        echo "Your current payoff schedule looks like this:</br>";
        echo "you took out $$amount at $interest% interest with a payrate of: $$payrate</br></br>";
        
        $i = 0;
        
        while ($currentbalance >= 0){
            
            $currentbalance += $monthlyinterest - $payrate;
            $i++;
            if($currentbalance < 0){
                $payrate += $currentbalance;
                break;
            }//end if
            $currentbalfac = "$" . number_format($currentbalance, 2);
            echo "month: $i, You payed $$payrate, Your current balance is: $currentbalfac.</br>";
            
        }//end while loop
        $payratefac = "$" . number_format($payrate, 2);
        echo "month: $i, You payed $payratefac, Your current balance is: $currentbalfac.</br></br></br>";
        ?>
    </body>
</html>


