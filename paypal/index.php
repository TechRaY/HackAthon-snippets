<form name="paypalForm" action="paypal.php" method="post">
<input type="hidden" name="id" value="123">
<input type="hidden" name="CatDescription" value="Donation to hb@TechRaY.com">
                       <input type="hidden" name="payment" value="50">  
                       <input type="hidden" name="key" value="<? echo md5(date("Y-m-d:").rand()); ?>
			
                                    
<input TYPE="image" SRC="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkMSLG7vuXd4ucHW9bbXi9MIH9Eg9Wkdq3njjjarZ5NfpJ3xaMZA" name="paypal"  value="Payment via Paypal" >
</form>
