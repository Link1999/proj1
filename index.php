<!DOCTYPE html>
<?php



?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include ('navigation.php'); echo "</br></br>" ?>
        <form action="calculate.php" method="get"/>
        
        <div>    
        <label>Enter Your Name:</label><!-- name text -->
        <input type="text" name="name"/></br></br>
        <label>Total Loan Amount:</label><!-- loan text -->
        <input type="text" name="amount"/></br></br>
        <label>Yearly Interest Rate:</label>
        <input type="text" name="interest"/></br></br>
        <label>Monthly Payment Rate:</label>
        <input type="text" name="payrate"/></br></br>
        </div>
        <div>
            <input type="submit" text="Submit"/>
        </div>   
    </body>
</html>
