function uuidv4() {
  return ([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g, c =>
    (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
  );
}
var x, i, j, selElmnt, a, b, c,p;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select1");
for (i = 0; i < x.length; i++) {
	x[i].id = 'scroll'+uuidv4();
	selElmnt = x[i].getElementsByTagName("select")[0];
	/*for each element, create a new DIV that will act as the selected item:*/
	a = document.createElement("DIV");
	a.setAttribute("class", "select-selected");
	a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
	x[i].appendChild(a);

	scrollbox = document.createElement("DIV");
	scrollbox.setAttribute("class", "scrollb");

	/*for each element, create a new DIV that will contain the option list:*/
	b = document.createElement("DIV");
	b.setAttribute("class", "select-items select-hide");

	b.appendChild(scrollbox);
	for (j = 0; j < selElmnt.length; j++) {
		/*for each option in the original select element,
		create a new DIV that will act as an option item:*/
		c = document.createElement("DIV");
		c.innerHTML = selElmnt.options[j].innerHTML;
		c.id = selElmnt.options[j].value; 
		var target1 = selElmnt.options[j].getAttribute('target'); 
		c.setAttribute('target', target1); 
		
		c.addEventListener("click", function (e) {  
			/*when an item is clicked, update the original select box,
			and the selected item:*/
			var y, i, k, s, h;
			s = this.parentNode.parentNode.getElementsByTagName("select")[0];
			h = this.parentNode.previousSibling;
			 	var targetcheck=this.getAttribute("target"); 

			 	var idee=this.getAttribute("id"); 

if(targetcheck == '_new'){   
	window.open(
  idee,
  '_blank' 
); // <- This is what makes it open in a new window.
} else {  
	window.location.href = idee;
}
			 	 
			for (i = 0; i < s.length; i++) {  
				if (s.options[i].innerHTML == this.innerHTML) {
					s.selectedIndex = i;
					h.innerHTML = this.innerHTML;
					y = this.parentNode.getElementsByClassName("same-as-selected");
					for (k = 0; k < y.length; k++) {
						y[k].removeAttribute("class");
					}
					this.setAttribute("class", "same-as-selected");
					var targetcheck=this.getAttribute("target");
//window.location.href = this.id;
if(targetcheck == '_new'){  
	window.open(
  this.id,
  '_blank' 
); // <- This is what makes it open in a new window.
} else { alert(this.id);
	window.location.href = this.id;
}
 
 
					break;
				}
			}


			h.click();
		});
		//b.appendChild(c); 
		   
		if(j==0){ }else{
		scrollbox.appendChild(c); 
		}
	}



	x[i].appendChild(b);
	a.addEventListener("click", function (e) {  
		/*when the select box is clicked, close any other select boxes,
		and open/close the current select box:*/
		e.stopPropagation();
		closeAllSelect(this);
		this.nextSibling.classList.toggle("select-hide");
		this.classList.toggle("select-arrow-active");
		
		var scrollBoxID = jQuery(this).parent().attr('id');
		jQuery("div[id='"+scrollBoxID+"'] div.scrollb").scrollbox({
			wheelSensitivity: 8,
			momentum: {
				acceleration: 800,
				thresholdTime: 250
			},
		});

		//jQuery().scrollbox();
		/*setTimeout(function(){
			jQuery("div.banner-col2 .custom-select1 .scrollb").scrollbox('update');
			console.log('update scrollb');
		}, 500);*/
	});
}
p = document.getElementsByClassName("custom-about");
for (i = 0; i < p.length; i++) {
	p[i].id = 'scroll'+uuidv4();
	selElmnt = p[i].getElementsByTagName("select")[0];
	/*for each element, create a new DIV that will act as the selected item:*/
	a = document.createElement("DIV");
	a.setAttribute("class", "select-selected");
	a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
	p[i].appendChild(a);

	scrollbox = document.createElement("DIV");
	scrollbox.setAttribute("class", "scrollb");

	/*for each element, create a new DIV that will contain the option list:*/
	b = document.createElement("DIV");
	b.setAttribute("class", "select-items select-hide");

	b.appendChild(scrollbox);
	for (j = 0; j < selElmnt.length; j++) {
		/*for each option in the original select element,
		create a new DIV that will act as an option item:*/
		c = document.createElement("DIV");
		c.innerHTML = selElmnt.options[j].innerHTML;
		c.id = selElmnt.options[j].value; 
		var target1 = selElmnt.options[j].getAttribute('target'); 
		c.setAttribute('target', target1); 
		
		c.addEventListener("click", function (e) {  
			/*when an item is clicked, update the original select box,
			and the selected item:*/
			var y, i, k, s, h;
			s = this.parentNode.parentNode.getElementsByTagName("select")[0];
			h = this.parentNode.previousSibling;
			 	var targetcheck=this.getAttribute("target"); 
		console.log(this.innerHTML);
			 	var idee=this.id; 

			 

if(targetcheck == '_new'){   
	window.open(
  idee,
  '_blank' 
); // <- This is what makes it open in a new window.
} else {  
	locationsselections(idee,this.innerHTML); 
}
			 	 
	/****		for (i = 0; i < s.length; i++) {  
				if (s.options[i].innerHTML == this.innerHTML) {
					s.selectedIndex = i;
					h.innerHTML = this.innerHTML;
					y = this.parentNode.getElementsByClassName("same-as-selected");
					for (k = 0; k < y.length; k++) {
						y[k].removeAttribute("class");
					}
					this.setAttribute("class", "same-as-selected");
					var targetcheck=this.getAttribute("target");
//window.location.href = this.id;
if(targetcheck == '_new'){  
	window.open(
  this.id,
  '_blank' 
); // <- This is what makes it open in a new window.
} else {  
	 locationsselections(this.id);  
}
 
 
					break;
				}
			} ****/


		//	h.click();
		});
		//b.appendChild(c); 
		   
		if(j==0){ }else{
		scrollbox.appendChild(c); 
		}
	}



	p[i].appendChild(b);
	a.addEventListener("click", function (e) {  
		/*when the select box is clicked, close any other select boxes,
		and open/close the current select box:*/
		e.stopPropagation();
		closeAllSelect(this);
		this.nextSibling.classList.toggle("select-hide");
		this.classList.toggle("select-arrow-active");
		
		var scrollBoxID = jQuery(this).parent().attr('id');
		jQuery("div[id='"+scrollBoxID+"'] div.scrollb").scrollbox({
			wheelSensitivity: 8,
			momentum: {
				acceleration: 800,
				thresholdTime: 250
			},
		});

		//jQuery().scrollbox();
		/*setTimeout(function(){
			jQuery("div.banner-col2 .custom-select1 .scrollb").scrollbox('update');
			console.log('update scrollb');
		}, 500);*/
	});
}
function closeAllSelect(elmnt) {
	/*a function that will close all select boxes in the document,
	except the current select box:*/
	var x, y, i, arrNo = [];
	x = document.getElementsByClassName("select-items");
	y = document.getElementsByClassName("select-selected");
	
	if( typeof jQuery('div.scrollb').destroy == 'function' ) {
		jQuery('div.scrollb').destroy();
	}

	for (i = 0; i < y.length; i++) {
		if (elmnt == y[i]) {
			arrNo.push(i)
		} else {
			y[i].classList.remove("select-arrow-active");
		}
	}
	for (i = 0; i < x.length; i++) {
		if (arrNo.indexOf(i)) {
			x[i].classList.add("select-hide");
		}
	}
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);