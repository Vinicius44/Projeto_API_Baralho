<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Projeto API</title>


	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body>

	<div class="center">

		<p style="font-family: 'Montserrat', sans-serif;, cursive; margin: 20px; padding:  30px;font-size: 30px ; border-radius: 5px; display:  inline-block;background-color: #f7a12f; color:  white" class='PBaralho'>BARALHO</p>

		<div class="carta">

		</div><!--carta-->


	


	<script>

		function trocar() {


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

					carta.innerHTML += "<img style='margin: 0px auto; transform: translate(-"+deckTX+"%, -50%) rotateZ("+deckRZ+"deg)'' src='"+deck.cards[deckImage].image+"'>";


					console.log(carta.innerHTML);
					deckTX = deckTX - 10;
					deckRZ = deckRZ + 5;
					deckImage = deckImage + 1;
				}, i * 800);

				
			}

			carta.innerHTML += '<input onclick="trocar()" id="trocar" style="border: 0;outline: 2px solid white; color: white;padding: 10px; font-size: 20px;position: absolute; left: 50%; top: 70%; transform:translate(-50%, -50%); cursor: pointer;" type="button" name="" value="TROCAR">';


		
			
			/*carta.innerHTML += "<img style='margin: 30px auto;'  src='"+deck.cards[0].image+"'>";
				carta.innerHTML += "<img style='margin: 30px auto; transform: translate(-40%, -50%) rotateZ(5deg)'' src='"+deck.cards[1].image+"'>";
				carta.innerHTML += "<img style='margin: 30px auto; transform: translate(-30%, -50%) rotateZ(10deg)'' src='"+deck.cards[2].image+"'>";*/

			
		});
			
		}

		
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

					carta.innerHTML += "<img style='margin: 0px auto; transform: translate(-"+deckTX+"%, -50%) rotateZ("+deckRZ+"deg)'' src='"+deck.cards[deckImage].image+"'>";


					console.log(carta.innerHTML);
					deckTX = deckTX - 10;
					deckRZ = deckRZ + 5;
					deckImage = deckImage + 1;
				}, i * 800);

				
			}

			carta.innerHTML += '<input onclick="trocar()" id="trocar" style="border: 0;outline: 2px solid white; color: white;padding: 10px; font-size: 20px;position: absolute; left: 50%; top: 70%; transform:translate(-50%, -50%); cursor: pointer;" type="button" name="" value="TROCAR">';


		
			
			/*carta.innerHTML += "<img style='margin: 30px auto;'  src='"+deck.cards[0].image+"'>";
				carta.innerHTML += "<img style='margin: 30px auto; transform: translate(-40%, -50%) rotateZ(5deg)'' src='"+deck.cards[1].image+"'>";
				carta.innerHTML += "<img style='margin: 30px auto; transform: translate(-30%, -50%) rotateZ(10deg)'' src='"+deck.cards[2].image+"'>";*/

			
		});

		

	</script>



	</div><!--center-->

</body>
</html>