function messages() {
	let url_string = window.location;
	let url = new URL(url_string);

	lang = url.searchParams.get("lang");

	console.log(lang);
	let text = {};
	switch (lang) {
		case "en":
			text = {
				haveHat: "You have found a hat for me?",
				blanketMissing: "Mmm, I'm full. Can you find my blankie?",

				msg0: "Hola! I’m Caga Tió, the Catalan Christmas Log!",
				msg1: "Do you know the ways of my tradition? First, find all the items around the room.",
				msg2: "What you have there...",
				msg3: "A hat, some candy, a blanket… nice!",
				capOn: "Thank you for the hat... do you have some candy?",
				candy: "Mmm... I'm tired now. Can I have a blankie?",
				stick: "Oh no! You found a stick. I see where this is going...",
				sleepy: "That's cozy...",
				finishTxt: "Oops... I made a mess under my blanket!",

				full: "Yay! Goodies! Are those for me?",
				candyFull: "Will you share some candy?",
			};
			break;
		case "en":
			text = {
				haveHat: "Have you found a hat for me?",
				blanketMissing: "Mmm, I'm full. Can you find my blankie?",

				msg0: "Hola! I’m Caga Tió, the Catalan Christmas Log!",
				msg1: "Do you want to know the ways of my tradition? First, find all the items in the room.",
				msg2: "What do you have there...?",
				msg3: "A hat, some candy, a blanket… nice!",
				capOn: "Thank you for the hat... do you have some candy?",
				candy: "Mmm... I'm tired now. Can I have a blankie?",
				stick: "Oh no! You found a stick. I see where this is going...",
				sleepy: "That's cozy...",
				finishTxt: "Oops... I made a mess under my blanket!",

				full: "Yay! Goodies! Are those for me?",
				candyFull: "Will you share some candy with me?",
			};
			break;
		case "es":
			text = {
				msg0: "Hola," + " I speak spanish now",
				msg1: "I'm part of some unique Christmas traditions",
				msg2: "What you have there...",
				msg3: "A hat, some candy, blanket...nice!",
				capOn: "Tnx for the cap... I speak spanish now",
				candy: "that was nice... I'm tired now. Can I have a blanky",
				stick: "Oh no... what you have there... a stick... put it back please",
				sleepy: "ZZZZ",
				finishTxt: "Ups... I made a mess under my blanket.",
				full: "Yay! Goodies! Are all those for me?",
			};
			break;
		case "fr":
			text = {
				msg0: "Hola," + " I speak spanish now",
				msg1: "I'm part of some unique Christmas traditions",
				msg2: "What you have there...",
				msg3: "A hat, some candy, blanket...nice!",
				capOn: "Tnx for the cap... I speak French now",
				candy: "that was nice... I'm tired now. Can I have a blanky",
				stick: "Oh no... what you have there... a stick... put it back please",
				sleepy: "ZZZZ",
				finishTxt: "Ups... I made a mess under my blanket.",
				full: "Yay! Goodies! Are all those for me?",
			};
			break;

		default:
			text = {
				haveHat: "You have found a hat for me?",
				blanketMissing: "Mmm, I'm full. Can you find my blankie?",

				msg0: "Hola! I’m Caga Tió, the Catalan Christmas Log!",
				msg1: "Do you know the ways of my tradition? First, find all the items around the room.",
				msg2: "What you have there...",
				msg3: "A hat, some candy, a blanket… nice!",
				capOn: "Thank you for the hat... do you have some candy?",
				candy: "Mmm... I'm tired now. Can I have a blankie?",
				stick: "Oh no! You found a stick. I see where this is going...",
				sleepy: "That's cozy...",
				finishTxt: "Oops... I made a mess under my blanket!",

				full: "Yay! Goodies! Are those for me?",
				candyFull: "Will you share some candy?",
			};
	}
	return text;
}
