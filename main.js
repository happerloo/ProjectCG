// JavaScript Document
 
	  
    var dragItem = document.querySelector("#item");
    var container = document.querySelector("#container");
	var zp7t = document.querySelector("#zp7Toren");
	var zp7g = document.querySelector("#zp7Gebouw");
	var titel = document.getElementById("gebouw_naam");
	var afb = document.getElementById("gebouw_afb");
	var adres = document.getElementById("gebouw_adres");
	var postcode = document.getElementById("gebouw_postcode");
	var tel = document.getElementById("gebouw_tel");
	
	var y = 0;

    var active = false;
    var currentX;
    var currentY;
    var initialX;
    var initialY;
    var xOffset = 0;
    var yOffset = 0;

    container.addEventListener("touchstart", dragStart, false);
    container.addEventListener("touchend", dragEnd, false);
    container.addEventListener("touchmove", drag, false);

    container.addEventListener("mousedown", dragStart, false);
    container.addEventListener("mouseup", dragEnd, false);
    container.addEventListener("mousemove", drag, false);
	/*registreert de start van de sleep*/
    function dragStart(e) {
      if (e.type === "touchstart") {
        initialX = e.touches[0].clientX - xOffset;
        initialY = e.touches[0].clientY - yOffset;
      } else {
        initialX = e.clientX - xOffset;
        initialY = e.clientY - yOffset;
      }

      if (e.target === dragItem) {
        active = true;
      }
    }
	/*registreert het einde van de sleep*/
    function dragEnd(e) {
      initialX = currentX;
      initialY = currentY;

      active = false;
    }
	/*registreert het slepen*/
    function drag(e) {
      if (active) {
      
        e.preventDefault();
      
        if (e.type === "touchmove") {
          currentX = e.touches[0].clientX - initialX;
          currentY = e.touches[0].clientY - initialY;
        } else {
          currentX = e.clientX - initialX;
          currentY = e.clientY - initialY;
        }

        xOffset = currentX;
        yOffset = currentY;

        setTranslate(currentX, currentY, dragItem);
      }
    }
	/*zet de nieuwe locatie van de objecten*/
    function setTranslate(xPos, yPos, el) {
		
      el.style.transform = "translate3d(" + xPos + "px, " + yPos + "px, 0)";
		
		zp7t.style.transform = "translate3d(" + xPos + "px, " + yPos + "px, 0) rotate(355deg)";
		zp7g.style.transform = "translate3d(" + xPos + "px, " + yPos + "px, 0) rotate(322deg)";
		
		if (currentX < -365) {
			console.log("te ver naar links" + screenX);
		}
		if (currentX > 165) {
			console.log("te ver naar rechts" + screenX);
		}
		else {
			console.log("swipen maar!"+ screenX);
		}
    }
	/*zorgt voor de pop up menu's bij de click*/
	/*pop up ZP7*/

	function vanOlstInfo() {
		if (y===0) {
 		titel.insertAdjacentText("afterbegin","van Olst Toren");
		afb.src= "vanolsttoren2 (1).jpg";
		adres.insertAdjacentText("afterbegin","Zernikeplein 7");
		postcode.insertAdjacentText("afterbegin","9746 AS Groningen");
		tel.insertAdjacentText("afterbegin","(050) 595 27 00");
		
}		
		toggleBox();
		y++
	}
		
		

function toggleBox() {
	
		var x = document.getElementById("popup_box");
		if (x.style.visibility === "visible") {
    x.style.visibility = "hidden"; 
  } else {
    x.style.visibility = "visible";
	}
}
