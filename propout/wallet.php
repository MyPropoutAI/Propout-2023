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
<div class='menu'><a class='link' href="#">Home</a><a class='link' href="#">List</a><a class='link' href="#">Marketplace</a><a class='link' href="#">Blog</a></div>

<div class='bdy'>
<div class='dash'>
<a class='bal'>Johnny John</a><a class="balc">Wallet Balance</a><a class="balt" href="#">Connect Wallet</a>
<br><div class="acc">0.00</div>
</div>
<div class="leg"> 
<button onclick='fund()' class="su">Fund Wallet</button><button class="sut">Withdraw</button>
<div class="la">
<a class='li' href="#">Transaction History</a><a class='li' href="#">Notifications</a><a class='li' href="#">Messages</a><a class='li' href="#"></a>
</div>
</div>

</div>
</body>
<script>
function fund(){
	window.location.href="funding.php";
}
</script>
</html>