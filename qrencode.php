<html>
	<head>
		<title>QrCode</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="qrcode.min.js"></script>
		<link rel="stylesheet" href="w3.css">
	</head>

	</body>
		
		<div class="w3-container">

			<div class="w3-panel w3-padding-16 w3-deep-orange">
			  <h1>Get Your QR.</h1>
			</div>

			<div class="w3-panel w3-padding-24">
			  <input id="qrText" class="w3-input w3-animate-input" type="text" placeholder="Enter Text !" style="width:135px"><br>
			</div>
			 
			<div class="w3-panel w3-padding-16" id="qrcode">
				<p>QR generated on client.
			</div>
			
		</div>
		
		
		<script>
			
			var input = document.getElementById("qrText");
			input.addEventListener("keyup", function(event) {
    			event.preventDefault();
    			if (event.keyCode === 13) {
    				document.getElementById("qrcode").innerHTML = "";
        			var qr = new QRCode('qrcode',{
						text :input.value,
						width:256,
						height:256,
						colorDark:'#4286f4',
						colorLight:'#ffffff',
						correctLevel : QRCode.CorrectLevel.H
						}
					);
    			}
			});
			
		</script>
		
	</body>

</html>
