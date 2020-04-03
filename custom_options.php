<?php 
function repeat_text_option_type( $option_name, $option, $values ){
$fo=array("ABeeZee" => "ABeeZee",
"Abel" => "Abel",
"Abril Fatface" => "Abril+Fatface",
"Aclonica" => "Aclonica",
"Acme" => "Acme",
"Actor" => "Actor",
"Adamina" => "Adamina",
"Advent Pro" => "Advent+Pro",
"Aguafina Script" => "Aguafina+Script",
"Akronim" => "Akronim",
"Aladin" => "Aladin",
"Aldrich" => "Aldrich",
"Alegreya" => "Alegreya",
"Alegreya SC" => "Alegreya+SC",
"Alex Brush" => "Alex+Brush",
"Alfa Slab One" => "Alfa+Slab+One",
"Alice" => "Alice",
"Alike" => "Alike",
"Alike Angular" => "Alike+Angular",
"Allan" => "Allan",
"Allerta" => "Allerta",
"Allerta Stencil" => "Allerta+Stencil",
"Allura" => "Allura",
"Almendra" => "Almendra",
"Almendra Display" => "Almendra+Display",
"Almendra SC" => "Almendra+SC",
"Amarante" => "Amarante",
"Amaranth" => "Amaranth",
"Amatic SC" => "Amatic+SC",
"Amethysta" => "Amethysta",
"Anaheim" => "Anaheim",
"Andada" => "Andada",
"Andika" => "Andika",
"Angkor" => "Angkor",
"Annie Use Your Telescope" => "Annie+Use+Your+Telescope",
"Anonymous Pro" => "Anonymous+Pro",
"Antic" => "Antic",
"Antic Didone" => "Antic+Didone",
"Antic Slab" => "Antic+Slab",
"Anton" => "Anton",
"Arapey" => "Arapey",
"Arbutus" => "Arbutus",
"Arbutus Slab" => "Arbutus+Slab",
"Architects Daughter" => "Architects+Daughter",
"Archivo Black" => "Archivo+Black",
"Archivo Narrow" => "Archivo+Narrow",
"Arimo" => "Arimo",
"Arizonia" => "Arizonia",
"Armata" => "Armata",
"Artifika" => "Artifika",
"Arvo" => "Arvo",
"Asap" => "Asap",
"Asset" => "Asset",
"Astloch" => "Astloch",
"Asul" => "Asul",
"Atomic Age" => "Atomic+Age",
"Aubrey" => "Aubrey",
"Audiowide" => "Audiowide",
"Autour One" => "Autour+One",
"Average" => "Average",
"Average Sans" => "Average+Sans",
"Averia Gruesa Libre" => "Averia+Gruesa+Libre",
"Averia Libre" => "Averia+Libre",
"Averia Sans Libre" => "Averia+Sans+Libre",
"Averia Serif Libre" => "Averia+Serif+Libre",
"Bad Script" => "Bad+Script",
"Balthazar" => "Balthazar",
"Bangers" => "Bangers",
"Basic" => "Basic",
"Battambang" => "Battambang",
"Baumans" => "Baumans",
"Bayon" => "Bayon",
"Belgrano" => "Belgrano",
"Belleza" => "Belleza",
"BenchNine" => "BenchNine",
"Bentham" => "Bentham",
"Berkshire Swash" => "Berkshire+Swash",
"Bevan" => "Bevan",
"Bigelow Rules" => "Bigelow+Rules",
"Bigshot One" => "Bigshot+One",
"Bilbo" => "Bilbo",
"Bilbo Swash Caps" => "Bilbo+Swash+Caps",
"Bitter" => "Bitter",
"Black Ops One" => "Black+Ops+One",
"Bokor" => "Bokor",
"Bonbon" => "Bonbon",
"Boogaloo" => "Boogaloo",
"Bowlby One" => "Bowlby+One",
"Bowlby One SC" => "Bowlby+One+SC",
"Brawler" => "Brawler",
"Bree Serif" => "Bree+Serif",
"Bubblegum Sans" => "Bubblegum+Sans",
"Bubbler One" => "Bubbler+One",
"Buda" => "Buda",
"Buenard" => "Buenard",
"Butcherman" => "Butcherman",
"Butterfly Kids" => "Butterfly+Kids",
"Cabin" => "Cabin",
"Cabin Condensed" => "Cabin+Condensed",
"Cabin Sketch" => "Cabin+Sketch",
"Caesar Dressing" => "Caesar+Dressing",
"Cagliostro" => "Cagliostro",
"Calligraffitti" => "Calligraffitti",
"Cambo" => "Cambo",
"Candal" => "Candal",
"Cantarell" => "Cantarell",
"Cantata One" => "Cantata+One",
"Cantora One" => "Cantora+One",
"Capriola" => "Capriola",
"Cardo" => "Cardo",
"Carme" => "Carme",
"Carrois Gothic" => "Carrois+Gothic",
"Carrois Gothic SC" => "Carrois+Gothic+SC",
"Carter One" => "Carter+One",
"Caudex" => "Caudex",
"Cedarville Cursive" => "Cedarville+Cursive",
"Ceviche One" => "Ceviche+One",
"Changa One" => "Changa+One",
"Chango" => "Chango",
"Chau Philomene One" => "Chau+Philomene+One",
"Chela One" => "Chela+One",
"Chelsea Market" => "Chelsea+Market",
"Chenla" => "Chenla",
"Cherry Cream Soda" => "Cherry+Cream+Soda",
"Cherry Swash" => "Cherry+Swash",
"Chewy" => "Chewy",
"Chicle" => "Chicle",
"Chivo" => "Chivo",
"Cinzel" => "Cinzel",
"Cinzel Decorative" => "Cinzel+Decorative",
"Clicker Script" => "Clicker+Script",
"Coda" => "Coda",
"Coda Caption" => "Coda+Caption",
"Codystar" => "Codystar",
"Combo" => "Combo",
"Comfortaa" => "Comfortaa",
"Coming Soon" => "Coming+Soon",
"Concert One" => "Concert+One",
"Condiment" => "Condiment",
"Content" => "Content",
"Contrail One" => "Contrail+One",
"Convergence" => "Convergence",
"Cookie" => "Cookie",
"Copse" => "Copse",
"Corben" => "Corben",
"Courgette" => "Courgette",
"Cousine" => "Cousine",
"Coustard" => "Coustard",
"Covered By Your Grace" => "Covered+By+Your+Grace",
"Crafty Girls" => "Crafty+Girls",
"Creepster" => "Creepster",
"Crete Round" => "Crete+Round",
"Crimson Text" => "Crimson+Text",
"Croissant One" => "Croissant+One",
"Crushed" => "Crushed",
"Cuprum" => "Cuprum",
"Cutive" => "Cutive",
"Cutive Mono" => "Cutive+Mono",
"Damion" => "Damion",
"Dancing Script" => "Dancing+Script",
"Dangrek" => "Dangrek",
"Dawning of a New Day" => "Dawning+of+a+New+Day",
"Days One" => "Days+One",
"Delius" => "Delius",
"Delius Swash Caps" => "Delius+Swash+Caps",
"Delius Unicase" => "Delius+Unicase",
"Della Respira" => "Della+Respira",
"Denk One" => "Denk+One",
"Devonshire" => "Devonshire",
"Didact Gothic" => "Didact+Gothic",
"Diplomata" => "Diplomata",
"Diplomata SC" => "Diplomata+SC",
"Domine" => "Domine",
"Donegal One" => "Donegal+One",
"Doppio One" => "Doppio+One",
"Dorsa" => "Dorsa",
"Dosis" => "Dosis",
"Dr Sugiyama" => "Dr+Sugiyama",
"Droid Sans" => "Droid+Sans",
"Droid Sans Mono" => "Droid+Sans+Mono",
"Droid Serif" => "Droid+Serif",
"Duru Sans" => "Duru+Sans",
"Dynalight" => "Dynalight",
"EB Garamond" => "EB+Garamond",
"Eagle Lake" => "Eagle+Lake",
"Eater" => "Eater",
"Economica" => "Economica",
"Electrolize" => "Electrolize",
"Elsie" => "Elsie",
"Elsie Swash Caps" => "Elsie+Swash+Caps",
"Emblema One" => "Emblema+One",
"Emilys Candy" => "Emilys+Candy",
"Engagement" => "Engagement",
"Englebert" => "Englebert",
"Enriqueta" => "Enriqueta",
"Erica One" => "Erica+One",
"Esteban" => "Esteban",
"Euphoria Script" => "Euphoria+Script",
"Ewert" => "Ewert",
"Exo" => "Exo",
"Expletus Sans" => "Expletus+Sans",
"Fanwood Text" => "Fanwood+Text",
"Fascinate" => "Fascinate",
"Fascinate Inline" => "Fascinate+Inline",
"Faster One" => "Faster+One",
"Fasthand" => "Fasthand",
"Federant" => "Federant",
"Federo" => "Federo",
"Felipa" => "Felipa",
"Fenix" => "Fenix",
"Finger Paint" => "Finger+Paint",
"Fjalla One" => "Fjalla+One",
"Fjord One" => "Fjord+One",
"Flamenco" => "Flamenco",
"Flavors" => "Flavors",
"Fondamento" => "Fondamento",
"Fontdiner Swanky" => "Fontdiner+Swanky",
"Forum" => "Forum",
"Francois One" => "Francois+One",
"Freckle Face" => "Freckle+Face",
"Fredericka the Great" => "Fredericka+the+Great",
"Fredoka One" => "Fredoka+One",
"Freehand" => "Freehand",
"Fresca" => "Fresca",
"Frijole" => "Frijole",
"Fruktur" => "Fruktur",
"Fugaz One" => "Fugaz+One",
"GFS Didot" => "GFS+Didot",
"GFS Neohellenic" => "GFS+Neohellenic",
"Gabriela" => "Gabriela",
"Gafata" => "Gafata",
"Galdeano" => "Galdeano",
"Galindo" => "Galindo",
"Gentium Basic" => "Gentium+Basic",
"Gentium Book Basic" => "Gentium+Book+Basic",
"Geo" => "Geo",
"Geostar" => "Geostar",
"Geostar Fill" => "Geostar+Fill",
"Germania One" => "Germania+One",
"Gilda Display" => "Gilda+Display",
"Give You Glory" => "Give+You+Glory",
"Glass Antiqua" => "Glass+Antiqua",
"Glegoo" => "Glegoo",
"Gloria Hallelujah" => "Gloria+Hallelujah",
"Goblin One" => "Goblin+One",
"Gochi Hand" => "Gochi+Hand",
"Gorditas" => "Gorditas",
"Goudy Bookletter 1911" => "Goudy+Bookletter+1911",
"Graduate" => "Graduate",
"Grand Hotel" => "Grand+Hotel",
"Gravitas One" => "Gravitas+One",
"Great Vibes" => "Great+Vibes",
"Griffy" => "Griffy",
"Gruppo" => "Gruppo",
"Gudea" => "Gudea",
"Habibi" => "Habibi",
"Hammersmith One" => "Hammersmith+One",
"Hanalei" => "Hanalei",
"Hanalei Fill" => "Hanalei+Fill",
"Handlee" => "Handlee",
"Hanuman" => "Hanuman",
"Happy Monkey" => "Happy+Monkey",
"Headland One" => "Headland+One",
"Henny Penny" => "Henny+Penny",
"Herr Von Muellerhoff" => "Herr+Von+Muellerhoff",
"Holtwood One SC" => "Holtwood+One+SC",
"Homemade Apple" => "Homemade+Apple",
"Homenaje" => "Homenaje",
"IM Fell DW Pica" => "IM+Fell+DW+Pica",
"IM Fell DW Pica SC" => "IM+Fell+DW+Pica+SC",
"IM Fell Double Pica" => "IM+Fell+Double+Pica",
"IM Fell Double Pica SC" => "IM+Fell+Double+Pica+SC",
"IM Fell English" => "IM+Fell+English",
"IM Fell English SC" => "IM+Fell+English+SC",
"IM Fell French Canon" => "IM+Fell+French+Canon",
"IM Fell French Canon SC" => "IM+Fell+French+Canon+SC",
"IM Fell Great Primer" => "IM+Fell+Great+Primer",
"IM Fell Great Primer SC" => "IM+Fell+Great+Primer+SC",
"Iceberg" => "Iceberg",
"Iceland" => "Iceland",
"Imprima" => "Imprima",
"Inconsolata" => "Inconsolata",
"Inder" => "Inder",
"Indie Flower" => "Indie+Flower",
"Inika" => "Inika",
"Irish Grover" => "Irish+Grover",
"Istok Web" => "Istok+Web",
"Italiana" => "Italiana",
"Italianno" => "Italianno",
"Jacques Francois" => "Jacques+Francois",
"Jacques Francois Shadow" => "Jacques+Francois+Shadow",
"Jim Nightshade" => "Jim+Nightshade",
"Jockey One" => "Jockey+One",
"Jolly Lodger" => "Jolly+Lodger",
"Josefin Sans" => "Josefin+Sans",
"Josefin Slab" => "Josefin+Slab",
"Joti One" => "Joti+One",
"Judson" => "Judson",
"Julee" => "Julee",
"Julius Sans One" => "Julius+Sans+One",
"Junge" => "Junge",
"Jura" => "Jura",
"Just Another Hand" => "Just+Another+Hand",
"Just Me Again Down Here" => "Just+Me+Again+Down+Here",
"Kameron" => "Kameron",
"Karla" => "Karla",
"Kaushan Script" => "Kaushan+Script",
"Kavoon" => "Kavoon",
"Keania One" => "Keania+One",
"Kelly Slab" => "Kelly+Slab",
"Kenia" => "Kenia",
"Khmer" => "Khmer",
"Kite One" => "Kite+One",
"Knewave" => "Knewave",
"Kotta One" => "Kotta+One",
"Koulen" => "Koulen",
"Kranky" => "Kranky",
"Kreon" => "Kreon",
"Kristi" => "Kristi",
"Krona One" => "Krona+One",
"La Belle Aurore" => "La+Belle+Aurore",
"Lancelot" => "Lancelot",
"Lato" => "Lato",
"League Script" => "League+Script",
"Leckerli One" => "Leckerli+One",
"Ledger" => "Ledger",
"Lekton" => "Lekton",
"Lemon" => "Lemon",
"Libre Baskerville" => "Libre+Baskerville",
"Life Savers" => "Life+Savers",
"Lilita One" => "Lilita+One",
"Limelight" => "Limelight",
"Linden Hill" => "Linden+Hill",
"Lobster" => "Lobster",
"Lobster Two" => "Lobster+Two",
"Londrina Outline" => "Londrina+Outline",
"Londrina Shadow" => "Londrina+Shadow",
"Londrina Sketch" => "Londrina+Sketch",
"Londrina Solid" => "Londrina+Solid",
"Lora" => "Lora",
"Love Ya Like A Sister" => "Love+Ya+Like+A+Sister",
"Loved by the King" => "Loved+by+the+King",
"Lovers Quarrel" => "Lovers+Quarrel",
"Luckiest Guy" => "Luckiest+Guy",
"Lusitana" => "Lusitana",
"Lustria" => "Lustria",
"Macondo" => "Macondo",
"Macondo Swash Caps" => "Macondo+Swash+Caps",
"Magra" => "Magra",
"Maiden Orange" => "Maiden+Orange",
"Mako" => "Mako",
"Marcellus" => "Marcellus",
"Marcellus SC" => "Marcellus+SC",
"Marck Script" => "Marck+Script",
"Margarine" => "Margarine",
"Marko One" => "Marko+One",
"Marmelad" => "Marmelad",
"Marvel" => "Marvel",
"Mate" => "Mate",
"Mate SC" => "Mate+SC",
"Maven Pro" => "Maven+Pro",
"McLaren" => "McLaren",
"Meddon" => "Meddon",
"MedievalSharp" => "MedievalSharp",
"Medula One" => "Medula+One",
"Megrim" => "Megrim",
"Meie Script" => "Meie+Script",
"Merienda" => "Merienda",
"Merienda One" => "Merienda+One",
"Merriweather" => "Merriweather",
"Merriweather Sans" => "Merriweather+Sans",
"Metal" => "Metal",
"Metal Mania" => "Metal+Mania",
"Metamorphous" => "Metamorphous",
"Metrophobic" => "Metrophobic",
"Michroma" => "Michroma",
"Milonga" => "Milonga",
"Miltonian" => "Miltonian",
"Miltonian Tattoo" => "Miltonian+Tattoo",
"Miniver" => "Miniver",
"Miss Fajardose" => "Miss+Fajardose",
"Modern Antiqua" => "Modern+Antiqua",
"Molengo" => "Molengo",
"Molle" => "Molle",
"Monda" => "Monda",
"Monofett" => "Monofett",
"Monoton" => "Monoton",
"Monsieur La Doulaise" => "Monsieur+La+Doulaise",
"Montaga" => "Montaga",
"Montez" => "Montez",
"Montserrat" => "Montserrat",
"Montserrat Alternates" => "Montserrat+Alternates",
"Montserrat Subrayada" => "Montserrat+Subrayada",
"Moul" => "Moul",
"Moulpali" => "Moulpali",
"Mountains of Christmas" => "Mountains+of+Christmas",
"Mouse Memoirs" => "Mouse+Memoirs",
"Mr Bedfort" => "Mr+Bedfort",
"Mr Dafoe" => "Mr+Dafoe",
"Mr De Haviland" => "Mr+De+Haviland",
"Mrs Saint Delafield" => "Mrs+Saint+Delafield",
"Mrs Sheppards" => "Mrs+Sheppards",
"Muli" => "Muli",
"Mystery Quest" => "Mystery+Quest",
"Neucha" => "Neucha",
"Neuton" => "Neuton",
"New Rocker" => "New+Rocker",
"News Cycle" => "News+Cycle",
"Niconne" => "Niconne",
"Nixie One" => "Nixie+One",
"Nobile" => "Nobile",
"Nokora" => "Nokora",
"Norican" => "Norican",
"Nosifer" => "Nosifer",
"Nothing You Could Do" => "Nothing+You+Could+Do",
"Noticia Text" => "Noticia+Text",
"Nova Cut" => "Nova+Cut",
"Nova Flat" => "Nova+Flat",
"Nova Mono" => "Nova+Mono",
"Nova Oval" => "Nova+Oval",
"Nova Round" => "Nova+Round",
"Nova Script" => "Nova+Script",
"Nova Slim" => "Nova+Slim",
"Nova Square" => "Nova+Square",
"Numans" => "Numans",
"Nunito" => "Nunito",
"Odor Mean Chey" => "Odor+Mean+Chey",
"Offside" => "Offside",
"Old Standard TT" => "Old+Standard+TT",
"Oldenburg" => "Oldenburg",
"Oleo Script" => "Oleo+Script",
"Oleo Script Swash Caps" => "Oleo+Script+Swash+Caps",
"Open Sans" => "Open+Sans",
"Open Sans Condensed" => "Open+Sans+Condensed",
"Oranienbaum" => "Oranienbaum",
"Orbitron" => "Orbitron",
"Oregano" => "Oregano",
"Orienta" => "Orienta",
"Original Surfer" => "Original+Surfer",
"Oswald" => "Oswald",
"Over the Rainbow" => "Over+the+Rainbow",
"Overlock" => "Overlock",
"Overlock SC" => "Overlock+SC",
"Ovo" => "Ovo",
"Oxygen" => "Oxygen",
"Oxygen Mono" => "Oxygen+Mono",
"PT Mono" => "PT+Mono",
"PT Sans" => "PT+Sans",
"PT Sans Caption" => "PT+Sans+Caption",
"PT Sans Narrow" => "PT+Sans+Narrow",
"PT Serif" => "PT+Serif",
"PT Serif Caption" => "PT+Serif+Caption",
"Pacifico" => "Pacifico",
"Paprika" => "Paprika",
"Parisienne" => "Parisienne",
"Passero One" => "Passero+One",
"Passion One" => "Passion+One",
"Patrick Hand" => "Patrick+Hand",
"Patrick Hand SC" => "Patrick+Hand+SC",
"Patua One" => "Patua+One",
"Paytone One" => "Paytone+One",
"Peralta" => "Peralta",
"Permanent Marker" => "Permanent+Marker",
"Petit Formal Script" => "Petit+Formal+Script",
"Petrona" => "Petrona",
"Philosopher" => "Philosopher",
"Piedra" => "Piedra",
"Pinyon Script" => "Pinyon+Script",
"Pirata One" => "Pirata+One",
"Plaster" => "Plaster",
"Play" => "Play",
"Playball" => "Playball",
"Playfair Display" => "Playfair+Display",
"Playfair Display SC" => "Playfair+Display+SC",
"Podkova" => "Podkova",
"Poiret One" => "Poiret+One",
"Poller One" => "Poller+One",
"Poly" => "Poly",
"Pompiere" => "Pompiere",
"Pontano Sans" => "Pontano+Sans",
"Port Lligat Sans" => "Port+Lligat+Sans",
"Port Lligat Slab" => "Port+Lligat+Slab",
"Prata" => "Prata",
"Preahvihear" => "Preahvihear",
"Press Start 2P" => "Press+Start+2P",
"Princess Sofia" => "Princess+Sofia",
"Prociono" => "Prociono",
"Prosto One" => "Prosto+One",
"Puritan" => "Puritan",
"Purple Purse" => "Purple+Purse",
"Quando" => "Quando",
"Quantico" => "Quantico",
"Quattrocento" => "Quattrocento",
"Quattrocento Sans" => "Quattrocento+Sans",
"Questrial" => "Questrial",
"Quicksand" => "Quicksand",
"Quintessential" => "Quintessential",
"Qwigley" => "Qwigley",
"Racing Sans One" => "Racing+Sans+One",
"Radley" => "Radley",
"Raleway" => "Raleway",
"Raleway Dots" => "Raleway+Dots",
"Rambla" => "Rambla",
"Rammetto One" => "Rammetto+One",
"Ranchers" => "Ranchers",
"Rancho" => "Rancho",
"Rationale" => "Rationale",
"Redressed" => "Redressed",
"Reenie Beanie" => "Reenie+Beanie",
"Revalia" => "Revalia",
"Ribeye" => "Ribeye",
"Ribeye Marrow" => "Ribeye+Marrow",
"Righteous" => "Righteous",
"Risque" => "Risque",
"Roboto" => "Roboto",
"Roboto Condensed" => "Roboto+Condensed",
"Rochester" => "Rochester",
"Rock Salt" => "Rock+Salt",
"Rokkitt" => "Rokkitt",
"Romanesco" => "Romanesco",
"Ropa Sans" => "Ropa+Sans",
"Rosario" => "Rosario",
"Rosarivo" => "Rosarivo",
"Rouge Script" => "Rouge+Script",
"Ruda" => "Ruda",
"Rufina" => "Rufina",
"Ruge Boogie" => "Ruge+Boogie",
"Ruluko" => "Ruluko",
"Rum Raisin" => "Rum+Raisin",
"Ruslan Display" => "Ruslan+Display",
"Russo One" => "Russo+One",
"Ruthie" => "Ruthie",
"Rye" => "Rye",
"Sacramento" => "Sacramento",
"Sail" => "Sail",
"Salsa" => "Salsa",
"Sanchez" => "Sanchez",
"Sancreek" => "Sancreek",
"Sansita One" => "Sansita+One",
"Sarina" => "Sarina",
"Satisfy" => "Satisfy",
"Scada" => "Scada",
"Schoolbell" => "Schoolbell",
"Seaweed Script" => "Seaweed+Script",
"Sevillana" => "Sevillana",
"Seymour One" => "Seymour+One",
"Shadows Into Light" => "Shadows+Into+Light",
"Shadows Into Light Two" => "Shadows+Into+Light+Two",
"Shanti" => "Shanti",
"Share" => "Share",
"Share Tech" => "Share+Tech",
"Share Tech Mono" => "Share+Tech+Mono",
"Shojumaru" => "Shojumaru",
"Short Stack" => "Short+Stack",
"Siemreap" => "Siemreap",
"Sigmar One" => "Sigmar+One",
"Signika" => "Signika",
"Signika Negative" => "Signika+Negative",
"Simonetta" => "Simonetta",
"Sintony" => "Sintony",
"Sirin Stencil" => "Sirin+Stencil",
"Six Caps" => "Six+Caps",
"Skranji" => "Skranji",
"Slackey" => "Slackey",
"Smokum" => "Smokum",
"Smythe" => "Smythe",
"Sniglet" => "Sniglet",
"Snippet" => "Snippet",
"Snowburst One" => "Snowburst+One",
"Sofadi One" => "Sofadi+One",
"Sofia" => "Sofia",
"Sonsie One" => "Sonsie+One",
"Sorts Mill Goudy" => "Sorts+Mill+Goudy",
"Source Code Pro" => "Source+Code+Pro",
"Source Sans Pro" => "Source+Sans+Pro",
"Special Elite" => "Special+Elite",
"Spicy Rice" => "Spicy+Rice",
"Spinnaker" => "Spinnaker",
"Spirax" => "Spirax",
"Squada One" => "Squada+One",
"Stalemate" => "Stalemate",
"Stalinist One" => "Stalinist+One",
"Stardos Stencil" => "Stardos+Stencil",
"Stint Ultra Condensed" => "Stint+Ultra+Condensed",
"Stint Ultra Expanded" => "Stint+Ultra+Expanded",
"Stoke" => "Stoke",
"Strait" => "Strait",
"Sue Ellen Francisco" => "Sue+Ellen+Francisco",
"Sunshiney" => "Sunshiney",
"Supermercado One" => "Supermercado+One",
"Suwannaphum" => "Suwannaphum",
"Swanky and Moo Moo" => "Swanky+and+Moo+Moo",
"Syncopate" => "Syncopate",
"Tangerine" => "Tangerine",
"Taprom" => "Taprom",
"Tauri" => "Tauri",
"Telex" => "Telex",
"Tenor Sans" => "Tenor+Sans",
"Text Me One" => "Text+Me+One",
"The Girl Next Door" => "The+Girl+Next+Door",
"Tienne" => "Tienne",
"Tinos" => "Tinos",
"Titan One" => "Titan+One",
"Titillium Web" => "Titillium+Web",
"Trade Winds" => "Trade+Winds",
"Trocchi" => "Trocchi",
"Trochut" => "Trochut",
"Trykker" => "Trykker",
"Tulpen One" => "Tulpen+One",
"Ubuntu" => "Ubuntu",
"Ubuntu Condensed" => "Ubuntu+Condensed",
"Ubuntu Mono" => "Ubuntu+Mono",
"Ultra" => "Ultra",
"Uncial Antiqua" => "Uncial+Antiqua",
"Underdog" => "Underdog",
"Unica One" => "Unica+One",
"UnifrakturCook" => "UnifrakturCook",
"UnifrakturMaguntia" => "UnifrakturMaguntia",
"Unkempt" => "Unkempt",
"Unlock" => "Unlock",
"Unna" => "Unna",
"VT323" => "VT323",
"Vampiro One" => "Vampiro+One",
"Varela" => "Varela",
"Varela Round" => "Varela+Round",
"Vast Shadow" => "Vast+Shadow",
"Vibur" => "Vibur",
"Vidaloka" => "Vidaloka",
"Viga" => "Viga",
"Voces" => "Voces",
"Volkhov" => "Volkhov",
"Vollkorn" => "Vollkorn",
"Voltaire" => "Voltaire",
"Waiting for the Sunrise" => "Waiting+for+the+Sunrise",
"Wallpoet" => "Wallpoet",
"Walter Turncoat" => "Walter+Turncoat",
"Warnes" => "Warnes",
"Wellfleet" => "Wellfleet",
"Wendy One" => "Wendy+One",
"Wire One" => "Wire+One",
"Yanone Kaffeesatz" => "Yanone+Kaffeesatz",
"Yellowtail" => "Yellowtail",
"Yeseva One" => "Yeseva+One",
"Yesteryear" => "Yesteryear",
"Zeyada" => "Zeyada",);

?>
 <?php 
  $counter = 0;
$values=(array)$values;
$output='';	
$output.='<div id="tabs">
  <ul>
    <li><a href="#tabs-1">'.__( 'Header', 'call-a-nerd-theme' ).'</a></li>
    <li><a href="#tabs-2">'.__( 'Content', 'call-a-nerd-theme' ).'</a></li>
    <li><a href="#tabs-3">'.__( 'Sidebar', 'call-a-nerd-theme' ).'</a></li>
    <li><a href="#tabs-4">'.__( 'Footer', 'call-a-nerd-theme' ).'</a></li>
       <li><a href="#tabs-5">'.__( 'Fonts', 'call-a-nerd-theme' ).'</a></li>
  </ul>';

$options[0][] = array(
		'name' => __( 'Header background color', 'call-a-nerd-theme' ),
		'desc' => __( 'Header Background Color', 'call-a-nerd-theme' ),
		'id' => 'header_background_Color',
		'std' => '',
		'type' => 'color'
	);
$options[0][] = array(
		'name' => __( 'Header border bottom? show / hide', 'call-a-nerd-theme' ),
		'desc' => '',
		'id' => 'header_border_bottom_show_hide',
		'std' => 'None',
		'type' => 'select',
		'options' => array("None" => __('Hide','call-a-nerd-theme'),
                           "Show" => __('Show','call-a-nerd-theme'))
	);
$options[0][] = array(
		'name' => __( 'Header border bottom color', 'call-a-nerd-theme' ),
		'desc' => __( 'Header border bottom Color', 'call-a-nerd-theme' ),
		'id' => 'header_border_bottom_color',
		'std' => '',
		'type' => 'color'
	);

$options[0][] = array(
		'name' => __( 'Header font color', 'call-a-nerd-theme' ),
		'desc' => __( 'Header Menu Color', 'call-a-nerd-theme' ),
		'id' => 'header_menu_color',
		'std' => '',
		'type' => 'color'
	);
$options[0][] = array(
		'name' => __( 'Header font shadow color', 'call-a-nerd-theme' ),
		'desc' => __( 'Header Menu Color', 'call-a-nerd-theme' ),
		'id' => 'header_menu_shadow_color',
		'std' => '',
		'type' => 'color'
	);
$options[0][] = array(
		'name' => __( 'Header font hover color', 'call-a-nerd-theme' ),
		'desc' => __( 'Font color for links, dropcaps and other elements', 'call-a-nerd-theme' ),
		'id' => 'header_menu_color_hover',
		'std' => '',
		'type' => 'color'
	);

$options[0][] = array(
		'name' => __( 'Header font color for solid background', 'call-a-nerd-theme' ),
		'desc' => __( 'Header Menu Color', 'call-a-nerd-theme' ),
		'id' => 'solid_header_menu_color',
		'std' => '',
		'type' => 'color'
	);
$options[0][] = array(
		'name' => __( 'Header font hover color for solid background', 'call-a-nerd-theme' ),
		'desc' => __( 'Font color for links, dropcaps and other elements', 'call-a-nerd-theme' ),
		'id' => 'solid_header_menu_color_hover',
		'std' => '',
		'type' => 'color'
	);
	$options[0][] = array(
		'name' => __( 'Subheader font color', 'call-a-nerd-theme' ),
		'desc' => __( 'Font color for links, dropcaps and other elements', 'call-a-nerd-theme' ),
		'id' => 'subheader_font_color',
		'std' => '',
		'type' => 'color'
	);
	$options[0][] = array(
		'name' => __( 'Subheader background color', 'call-a-nerd-theme' ),
		'desc' => __( 'Font color for links, dropcaps and other elements', 'call-a-nerd-theme' ),
		'id' => 'subheader_background_color',
		'std' => '',
		'type' => 'color'
	);

$options[1][] = array(
		'name' => __( 'Content background color', 'call-a-nerd-theme' ),
		'desc' => __( 'Standard-Hintergrundfarbe', 'call-a-nerd-theme' ),
		'id' => 'main_content_background',
		'std' => '',
		'type' => 'color'
	);

$options[1][] = array(
		'name' => __( 'Content link color', 'call-a-nerd-theme' ),
		'desc' => __( 'Font color for links, dropcaps and other elements', 'call-a-nerd-theme' ),
		'id' => 'main_content_anchor_color',
		'std' => '',
		'type' => 'color'
	);
$options[1][] = array(
		'name' => __( 'Content link hover color', 'call-a-nerd-theme' ),
		'desc' => __( 'Font color for links, dropcaps and other elements', 'call-a-nerd-theme' ),
		'id' => 'main_content_anchor_hover_color',
		'std' => '',
		'type' => 'color'
	);
$options[1][] = array(
		'name' => __( 'Content button background color', 'call-a-nerd-theme' ),
		'desc' => __( '', 'call-a-nerd-theme' ),
		'id' => 'main_content_button_background_color',
		'std' => '',
		'type' => 'color'
	);
$options[1][] = array(
		'name' => __( 'Content button fontcolor', 'call-a-nerd-theme' ),
		'desc' => __( '', 'call-a-nerd-theme' ),
		'id' => 'main_content_button_color',
		'std' => '',
		'type' => 'color'
	);
$options[1][] = array(
		'name' => __( 'Content button hover background color', 'call-a-nerd-theme' ),
		'desc' => __( '', 'call-a-nerd-theme' ),
		'id' => 'main_content_button_background_hover_color',
		'std' => '',
		'type' => 'color'
	);
$options[1][] = array(
		'name' => __( 'Content button hover fontcolor', 'call-a-nerd-theme' ),
		'desc' => __( '', 'call-a-nerd-theme' ),
		'id' => 'main_content_button_hover_color',
		'std' => '',
		'type' => 'color'
	);

$options[1][] = array(
		'name' => __( 'Content headline color', 'call-a-nerd-theme' ),
		'desc' => __( '', 'call-a-nerd-theme' ),
		'id' => 'main_content_heading_color',
		'std' => '',
		'type' => 'color'
	);
$options[1][] = array(
		'name' => __( 'Content single product title color', 'call-a-nerd-theme' ),
		'desc' => __( '', 'call-a-nerd-theme' ),
		'id' => 'main_content_single_product_title_color',
		'std' => '',
		'type' => 'color'
	);
$options[2][] = array(
		'name' => __( 'Sidebar background color', 'call-a-nerd-theme' ),
		'desc' => __( 'Standard-Hintergrundfarbe', 'call-a-nerd-theme' ),
		'id' => 'sidebar_background_color',
		'std' => '',
		'type' => 'color'
	);

$options[2][] = array(
		'name' => __( 'Sidebar widget background color', 'call-a-nerd-theme' ),
		'desc' => __( 'Standard-Hintergrundfarbe', 'call-a-nerd-theme' ),
		'id' => 'sidebar_widget_background_color',
		'std' => '',
		'type' => 'color'
	);

$options[2][] = array(
		'name' => __( 'Sidebar widget border color', 'call-a-nerd-theme' ),
		'desc' => __( 'Standard-Hintergrundfarbe', 'call-a-nerd-theme' ),
		'id' => 'sidebar_border_background_color',
		'std' => '',
		'type' => 'color'
	);


$options[2][] = array(
		'name' => __( 'Sidebar fontcolor', 'call-a-nerd-theme' ),
		'desc' => __( 'Alternate Background for menu hover, tables, etc', 'call-a-nerd-theme' ),
		'id' => 'sidebar_font_content_color',
		'std' => '',
		'type' => 'color'
	);
$options[2][] = array(
		'name' => __( 'Sidebar linkcolor', 'call-a-nerd-theme' ),
		'desc' => __( 'Font color for links, dropcaps and other elements', 'call-a-nerd-theme' ),
		'id' => 'sidebar_anchor_color',
		'std' => '',
		'type' => 'color'
	);
$options[2][] = array(
		'name' => __( 'Sidebar button color', 'call-a-nerd-theme' ),
		'desc' => __( 'Secondary color for link and button hover, etc', 'call-a-nerd-theme' ),
		'id' => 'sidebar_button_color',
		'std' => '',
		'type' => 'color'
	);
$options[2][] = array(
		'name' => __( 'Sidebar button background color', 'call-a-nerd-theme' ),
		'desc' => __( 'Alternate Background for menu hover, tables, etc', 'call-a-nerd-theme' ),
		'id' => 'sidebar_button_background_color',
		'std' => '',
		'type' => 'color'
	);
$options[2][] = array(
		'name' => __( 'Sidebar second fontcolor', 'call-a-nerd-theme' ),
		'desc' => __( 'Alternate Background for menu hover, tables, etc', 'call-a-nerd-theme' ),
		'id' => 'sidebar_content_secondary_font_color',
		'std' => '',
		'type' => 'color'
	);
$options[2][] = array(
		'name' => __( 'Sidebar headline color', 'call-a-nerd-theme' ),
		'desc' => __( 'Alternate Background for menu hover, tables, etc', 'call-a-nerd-theme' ),
		'id' => 'sidebar_content_heading_color',
		'std' => '',
		'type' => 'color'
	);


$options[3][] = array(
		'name' => __( 'Footer background color', 'call-a-nerd-theme' ),
		'desc' => __( 'Footer Background', 'call-a-nerd-theme' ),
		'id' => 'footer_background',
		'std' => '',
		'type' => 'color'
	);

$options[3][] = array(
		'name' => __( 'Footer fontcolor', 'call-a-nerd-theme' ),
		'desc' => __( 'Footer Color, tables, etc', 'call-a-nerd-theme' ),
		'id' => 'footer_color',
		'std' => '',
		'type' => 'color'
	);
$options[3][] = array(
		'name' => __( 'Footer linkcolor', 'call-a-nerd-theme' ),
		'desc' => __( 'Footer Anchor Color', 'call-a-nerd-theme' ),
		'id' => 'footer_anchor_color',
		'std' => '',
		'type' => 'color'
	);
$options[3][] = array(
		'name' => __( 'Footer link hover color', 'call-a-nerd-theme' ),
		'desc' => __( 'Footer Anchor Color', 'call-a-nerd-theme' ),
		'id' => 'footer_anchor_hover_color',
		'std' => '',
		'type' => 'color'
	);
$options[3][] = array(
		'name' => __( 'Footer headline color', 'call-a-nerd-theme' ),
		'desc' => __( 'Footer Title', 'call-a-nerd-theme' ),
		'id' => 'footer_title',
		'std' => '',
		'type' => 'color'
	);

$fo=array_flip($fo);

$options[4][] = array(
		'name' => __( 'Normal text font', 'call-a-nerd-theme' ),
		'desc' => __( 'Select Font Family for content', 'call-a-nerd-theme' ),
		'id' => 'fontfamily_content',
		'std' => '',
		'type' => 'select',
		'options' => $fo
	);

$options[4][] = array(
		'name' => __( 'Headline and header font', 'call-a-nerd-theme' ),
		'desc' => __( 'Select Font family for headings', 'call-a-nerd-theme' ),
		'id' => 'fontfamily_heading',
		'std' => '',
		'type' => 'select',
		'options' => $fo
	);

?><script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script><style>input.ci {
	-webkit-appearance: none;
	border: 1px solid #cccccc;
	width: 100%;
	height: 32px;
}
</style><?php
$i=0;
$j=1;
foreach ($options as $koj => $oj) {
	$output .= ' <div id="tabs-'.$j.'">';
	foreach ($oj as $key => $value) {
		$output .='<div class="width50">';
		$output .='<label>'.$value['name'].'</label><br>';
		
		if($value['type']=='color'){
			if (strpos($values[$value['id'] ], '#') !== false){
			$output .= '<input autocomplete="off" type="text" class="of-input ci colorpicker'.$value['id'].'" id="'.$value['id'].'"  name="' . esc_attr( $option_name . '[' . $option['id'] . ']['.$value['id'].']' ) . '"  value="' . esc_attr( $values[$value['id'] ]) . '" onclick="jQuery(\'.kc_color_picker\').removeClass(\'poppicker\');"/>';
			}else{$output .= '<input autocomplete="off" type="text class="of-input ci colorpicker'.$value['id'].'" id="'.$value['id'].'"  name="' . esc_attr( $option_name . '[' . $option['id'] . ']['.$value['id'].']' ) . '" value="#' . esc_attr( $values[$value['id'] ]) . '" onclick="jQuery(\'.kc_color_picker\').removeClass(\'poppicker\');"/>';}
		}
		else if($value['type']=='select'){
			$output .= '<select class="of-input ci" id="'.$value['id'].'"  name="' . esc_attr( $option_name . '[' . $option['id'] . ']['.$value['id'].']' ) . '"  onchange="changeFont'.$value['id'].'(this);"/>';	
			
			foreach($value['options'] as $ke => $val){
							$output .= '<option '.(($values[$value['id'] ]==str_replace('+',' ', $ke))?'selected':'').' value="'.str_replace('+',' ', $ke).'">'.$val.'</option>';				
			}
			
			$output .= '</select>';if($value['id']!='header_border_bottom_show_hide'){$output.="<h1 id='h2".$value['id']."' style='font-family:".esc_attr( $values[$value['id'] ]).";'>".__('Call a Nerd Theme','call-a-nerd-theme')."</h1><script>WebFont.load({
    google: {
      families: ['".esc_attr( $values[$value['id'] ])."']
    }
  });var changeFont".$value['id']." = function(font){
			WebFont.load({
    google: {
      families: [font.value]
    }
  });
    document.getElementById('h2".$value['id']."').style.fontFamily = font.value;
}</script>";
		}}
		

		$output .='</div>';
		$i++;
	}
	$output.='</div>';
	$j++;
}

$output.='<div class="clearfix"><br><br><br></div>';


$output.='</div>';

	return $output;
}
add_filter( 'optionsframework_tabs', 'repeat_text_option_type', 10, 3 );


function repeat_text_option_type_demo( $option_name, $option, $values ){
	include "cusimp.php";
}
add_filter( 'optionsframework_demo', 'repeat_text_option_type_demo', 10, 3 );

function repeat_text_option_type_cui( $option_name, $option, $values ){
$output='';
	$i=0;
	$output .="<div class='oldlist'>";
	if(is_array($values)){
	foreach ($values as $key => $value) {$slug=substr(sanitize_title($value),0, 19);
		$output .="<div  class='cuilist'><br>";
		$output .=$i+1;
		$output .=' '.$value.'  <a href="'.site_url('/').$slug.'" target="_blank">'.__('View','call-a-nerd-theme').'</a>'.' '.'  <a href="#" class="cuilink">'.__('Edit','call-a-nerd-theme').'</a>'.' '.'<a onclick=\'return confirm("'.__('Are you sure you want to delete this custom post type and all Content created for it?','call-a-nerd-theme').'")\' href="?page=options-callanerd&deletep=1&id='.$value.'" class="delete">'.__('Delete','call-a-nerd-theme').'</a><br><br>';
		$output .= '<input class="of-input" style="display:none"  name="' . esc_attr( $option_name . '[' . $option['id'] . ']['.$i.']' ) . '" type="text" value="' . esc_attr( $value) . '" />';
		$output .='</div>';
		$i++;
	}}
		$output .='</div><br> '.        __( 'Create new custom post type. Enter name here', 'call-a-nerd-theme' ).'<br><br>';	
$output .= '<input class="of-input" style="width:354px;height: 51px;" id="anc" name="" type="text"" placeholder="title"/><a class="button-primary" id="ancclick" href="javascript:void(0)">'.__( 'Create', 'call-a-nerd-theme' ).'</a>';

	return $output;

}
add_action('admin_init','flushrules');
function flushrules(){
	flush_rewrite_rules();
	
}
add_filter( 'optionsframework_list_cui', 'repeat_text_option_type_cui', 10, 3 );

function sanitize_repeat_field_cui( $input, $option ){
	$output = array_map( 'sanitize_text_field', $input);
	        

	return $output;
}
add_filter( 'of_sanitize_list_cui', 'sanitize_repeat_field', 10, 2 );




/*
 * Sanitize Repeat Fields
 */
function sanitize_repeat_field( $input, $option ){
	
	
if(is_array($input)){
	$output = array_map( 'sanitize_text_field', $input);
	return $output;
}
}

add_filter( 'of_sanitize_tabs', 'sanitize_repeat_field', 10, 2 );


function custombutton_function( $option_name, $option, $values ){



add_thickbox();
?>
<a href="#TB_inline?width=100&height=240&inlineId=modal-window-id" id='custombutton' class="thickbox"><?php echo __('Save as new color scheme','call-a-nerd-theme');?></a>

<div id="modal-window-id" style="display:none;">
	<h3><?php echo __('Save Color Scheme','call-a-nerd-theme');?></h3>
<p>
<?php 	 //print_r(json_decode(get_option('all_color_scheme'),true));

 ?></p>
    
    <label><?php echo __('Title Name of Color Scheme','call-a-nerd-theme');?></label><br>
    <input  id='choosename' style='width: 100%' ><br>

    <label><?php echo __('Title Color of Color Scheme','call-a-nerd-theme');?></label><br>
    <input class="of-input ci colorpicker-t-c-o-c-s" style='width: 100%' id='choosecolor' onclick="jQuery('.kc_color_picker').addClass('poppicker');" type="text" autocomplete="off"><br><br>
    <input type='submit'  id='savecolor' onclick='return  false' value="<?php echo __('Submit','call-a-nerd-theme');?>">
</div>
<?php
}
add_filter( 'optionsframework_custombutton', 'custombutton_function', 10, 3 );


function custom_import( $option_name, $option, $values ){
?>
<div class='section'>
	<p><?php echo __('Import Options','call-a-nerd-theme');?></p>
	<textarea id='importtext' style='width:400px; height: 200px' class='of-input'></textarea><br>
	<input type='file' id='importfile'><br>
	<a class='btn' href='javascript:void(0)'  ><?php echo __('Submit','call-a-nerd-theme');?></a>
</div>	
<?php
}
add_filter( 'optionsframework_import', 'custom_import', 10, 3 );


function custom_export( $option_name, $option, $values ){
?>

<?php foreach(optionsframework_options() as $key => $value){
$data[$value['id']]=of_get_option($value['id']);

	}
$edata=json_encode($data);

	?>



<div class='section'>
<p><?php echo __('Export Current Setting:','call-a-nerd-theme');?></p>
	<textarea id='export' style='width:400px; height: 200px' class='of-input'><?php echo $edata ?></textarea><br>



</div>
<?php
}
add_filter( 'optionsframework_export', 'custom_export', 10, 3 );

