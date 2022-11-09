<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Projeto API</title>
</head>
<body>

	<div class="center">
		<div class="carta">

		</div><!--carta-->


	</div><!--center-->


	<script>
		
		fetch("https://deckofcardsapi.com/api/deck/ec9n2mp5xhfu/shuffle/")
		.then(response => response.json())
		.then(deckNovo = {





		} )

		fetch("https://deckofcardsapi.com/api/deck/ec9n2mp5xhfu/draw/?count=6")
		.then(response => response.json())
		.then(deck => {
			console.log(deck)
			var carta = document.querySelector(".carta");
			console.log(deck.cards[0].image);
			
			deckTX = 60;
			deckRZ = -5;
			deckImage = 0;

			for(var i = 0; i <= 4; i++){

				
			

				setTimeout(() =>{

					carta.innerHTML += "<img style='margin: 30px auto; transform: translate(-"+deckTX+"%, 0%) rotateZ("+deckRZ+"deg)'' src='"+deck.cards[deckImage].image+"'>";


					console.log(carta.innerHTML);
					deckTX = deckTX - 10;
					deckRZ = deckRZ + 5;
					deckImage = deckImage + 1;
				}, i * 800);

				
			}



			carta.innerHTML += "<p>BARALHO</p>"
			
			/*carta.innerHTML += "<img style='margin: 30px auto;'  src='"+deck.cards[0].image+"'>";
				carta.innerHTML += "<img style='margin: 30px auto; transform: translate(-40%, -50%) rotateZ(5deg)'' src='"+deck.cards[1].image+"'>";
				carta.innerHTML += "<img style='margin: 30px auto; transform: translate(-30%, -50%) rotateZ(10deg)'' src='"+deck.cards[2].image+"'>";*/

			
		});

		

	</script>

</body>
</html>