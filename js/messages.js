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
		case "de":
			text = {
				haveHat: "Du hast einen Hut für mich gefunden?",
				blanketMissing:
					"Mmm, ich bin satt. Kannst du meine Kuscheldecke finden?",

				msg0: "Hola! Ich bin Caga Tió, der katalanische Weihnachtsstamm!",
				msg1: "Kennst du die Wege meiner Tradition? Finde zuerst alle Gegenstände im Raum.",
				msg2: "Was du da hast…",
				msg3: "Eine Mütze, ein paar Süßigkeiten, eine Decke … schön!",
				capOn: "Danke für den Hut... hast du Süßigkeiten?",
				candy: "Mmm... ich bin jetzt müde. Kann ich eine Decke haben?",
				stick:
					"Oh nein! Du hast einen Stock gefunden. Ich sehe, wohin das führt …",
				sleepy: "Das ist gemütlich…",
				finishTxt:
					"Ups... ich habe eine Sauerei unter meiner Decke angerichtet!",

				full: "Juhu! Leckereien! Sind die für mich?",
				candyFull: "Gibst du mir ein paar Süßigkeiten?",
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
