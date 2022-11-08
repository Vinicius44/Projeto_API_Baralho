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

		fetch("https://deckofcardsapi.com/api/deck/ec9n2mp5xhfu/draw/?count=2")
		.then(response => response.json())
		.then(deck => {
			console.log(deck)
			var carta = document.querySelector(".carta");
			console.log(deck.cards[0].image);
	
			carta.innerHTML += "<img style='margin: 30px auto; transform: rotateZ(5deg)' src='"+deck.cards[0].image+"'>";
			carta.innerHTML += "<img style='margin: 30px auto;' src='"+deck.cards[1].image+"'>";


			
		});

		

	</script>

</body>
</html>