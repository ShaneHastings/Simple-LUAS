function populateStops(){

	var selectOption = document.getElementById("stopPicker"),
    itemArray = ["The Point","Spencer Dock","Mayor Square - NCI","George's Dock","Connolly","Busáras","Abbey Street","Jervis",
	"Four Courts","Smithfield","Museum","Heuston","James's","Fatima","Rialto","Suir Road","Goldenbridge","Drimnagh","Fettercairn",
	"Cheeverstown","Citywest Campus","Fortunestown","Saggart","Depot","Broombridge","Cabra","Phibsborough","Grangegorman","Broadstone - DIT",
	"Dominick","Parnell","O'Connell - Upper","O'Connell - GPO","Marlborough","Westmoreland","Trinity","Dawson","St. Stephen's Green","Harcourt",
	"Charlemont","Ranelagh","Beechwood","Cowper","Milltown","Windy Arbour","Dundrum","Balally","Kilmacud","Stillorgan","Sandyford",
	"Central Park","Glencairn","The Gallops","Leopardstown Valley","Ballyogan Wood","Racecourse","Carrickmines","Brennanstown","Laughanstown",
	"Cherrywood","Brides Glen","Blackhorse","Bluebell","Kylemore","Red Cow","Kingswood","Belgard","Cookstown","Hospital","Tallaght"];
	
    stopArray = ["TPT","SDK","MYS","GDK","CON","BUS","ABB","JER","FOU","SMI","MUS","HEU","JAM","FAT","RIA","SUI",
	"GOL","DRI","FET","CVN","CIT","FOR","SAG","DEP","BRO","CAB","PHI","GRA","BRD","DOM","PAR","OUP","OGP","MAR","WES","TRY","DAW",
	"STS","HAR","CHA","RAN","BEE","COW","MIL","WIN","DUN","BAL","KIL","STI","SAN","CPK","GLE","GAL","LEO","BAW","RCC","CCK","BRE",
	"LAU","CHE","BRI","BLA","BLU","KYL","RED","KIN","BEL","COO","HOS","TAL"];

    for (var i = 0; i < itemArray.length; i++) {
      var opt = itemArray[i];
	  var stopAbv = stopArray[i];
      var el = document.createElement("option");
      el.textContent = opt;
      el.value = stopAbv;
      selectOption.appendChild(el);
    }
}

// This function checks which Luas line the chosen stop is on.
function lineChecker(){

	var selectOption = document.getElementById("stopPicker"),
    itemArray = ["The Point","Spencer Dock","Mayor Square - NCI","George's Dock","Connolly","Busáras","Abbey Street","Jervis",
	"Four Courts","Smithfield","Museum","Heuston","James's","Fatima","Rialto","Suir Road","Goldenbridge","Drimnagh","Fettercairn",
	"Cheeverstown","Citywest Campus","Fortunestown","Saggart","Depot","Broombridge","Cabra","Phibsborough","Grangegorman","Broadstone - DIT",
	"Dominick","Parnell","O'Connell - Upper","O'Connell - GPO","Marlborough","Westmoreland","Trinity","Dawson","St. Stephen's Green","Harcourt",
	"Charlemont","Ranelagh","Beechwood","Cowper","Milltown","Windy Arbour","Dundrum","Balally","Kilmacud","Stillorgan","Sandyford",
	"Central Park","Glencairn","The Gallops","Leopardstown Valley","Ballyogan Wood","Racecourse","Carrickmines","Brennanstown","Laughanstown",
	"Cherrywood","Brides Glen","Blackhorse","Bluebell","Kylemore","Red Cow","Kingswood","Belgard","Cookstown","Hospital","Tallaght"];
	
    stopArray = ["TPT","SDK","MYS","GDK","CON","BUS","ABB","JER","FOU","SMI","MUS","HEU","JAM","FAT","RIA","SUI",
	"GOL","DRI","FET","CVN","CIT","FOR","SAG","DEP","BRO","CAB","PHI","GRA","BRD","DOM","PAR","OUP","OGP","MAR","WES","TRY","DAW",
	"STS","HAR","CHA","RAN","BEE","COW","MIL","WIN","DUN","BAL","KIL","STI","SAN","CPK","GLE","GAL","LEO","BAW","RCC","CCK","BRE",
	"LAU","CHE","BRI","BLA","BLU","KYL","RED","KIN","BEL","COO","HOS","TAL"];

    for (var i = 0; i < itemArray.length; i++) {
      var opt = itemArray[i];
	  var stopAbv = stopArray[i];
      var el = document.createElement("option");
      el.textContent = opt;
      el.value = stopAbv;
      selectOption.appendChild(el);
    }
}