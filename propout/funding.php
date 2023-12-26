<html>
<head>
<meta charset="utf-8">
<title>Fund Wallet</title>
<meta property='og:title' content= 'payment'>
<meta property='og:image' content= ''>
<link rel='icon' type='image/x-icon' href=''>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css"/>	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class='logo'><button class="but" onclick="fund()"><i class="fa fa-arrow-left" style="font-size:15px"></i></button><br><img src="logo.jpg" class="img"/></div>

<div class='body'>
<div class='title'>Bank Tranfer</div>
<form>
<input type="text" class='text' placeholder="Amount"></input>
<br>
<button type="submit" class="sub">Fund Wallet</button>
</form>
<div class="step"> 
<h4>Payment steps</h4>
<ul>
<li>Enter the amount you want to deposit and click the “Fund Wallet” button.</li>
<li>You will be given a temporary transfer account (expires after 30 mins).</li>
<li>Transfer money to the account via your online banking or USSD.</li>
<li>Check your transaction history in Propout. Bank transfers generally credit within 10 minutes. <br>If the deposit doesn’t credit within 24 hours, please contact your bank.</li>
</ul>
</div>

</div>
</body>

<script>
function fund(){
	window.location.href="wallet.php";
}
</script>
</html>