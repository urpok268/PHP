function showEvents(day, month, year, event){	
	var currentDay = document.getElementsByClassName('calendar-day')[day-1];
	var selected = document.getElementsByClassName('selected')[0];
	if (selected) selected.classList.remove("selected");
	currentDay.classList.add("selected");
	if (currentDay.classList.contains("today") && event[0] == "На этот день событий не запланированно")
		event[0] = "На сегодня событий не запланированно";
	var months = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
	var eventHead = document.getElementsByClassName('eventHead')[0];
	if (day<10) eventHead.innerHTML = months[month-1]+" 0"+day+", "+year;
		else eventHead.innerHTML = months[month-1]+" "+day+", "+year;
	var events = document.getElementsByClassName("rightEvents")[0];
	events.innerHTML = "";
	if (typeof map.get(day+"."+month+"."+year) !== 'undefined'){
		map.get(day+"."+month+"."+year).forEach((value, key, map) => {
			let p = document.createElement("p");
			p.className = "rightEvent";
			p.innerHTML = key+" "+value;
			events.appendChild(p);
		});
	}
	else{
		let p = document.createElement("p");
		p.className = "rightEvent";
		p.innerHTML = "На этот день событий не запланированно";
		events.appendChild(p);
	}
}
function daysInMonth (month, year) {
    return new Date(year, month, 0).getDate();
}
function printCalendar(monthNum, yearNum, events){
	let months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
	let date = new Date();
	const h1 = document.createElement("h1");
	h1.innerHTML = "<b>Календарь</b>";
	h1.style.color = "white";
	h1.align = "center";
	const body = document.getElementsByTagName('body')[0];
	body.appendChild(h1);
	const br1 = document.createElement("br");
	const br2 = document.createElement("br");
	body.appendChild(br1);
	body.appendChild(br2);
	const console_log = document.createElement("div");
	console_log.className = "console-log";
	const circle1 = document.createElement("div");
	circle1.className = "circle";
	circle1.id = "red";
	const circle2 = document.createElement("div");
	circle2.className = "circle";
	circle2.id = "yellow";
	const circle3 = document.createElement("div");
	circle3.className = "circle";
	circle3.id = "green";
	console_log.appendChild(circle1);
	console_log.appendChild(circle2);
	console_log.appendChild(circle3);
	body.appendChild(console_log);
	const section = document.createElement('table');
	section.className = "section";
	const row = section.insertRow();
	const cell1 = row.insertCell();
	cell1.className = "leftPannel";
	const cell2 = row.insertCell();
	cell2.className = "centralPannel";
	const cell3 = row.insertCell();
	cell3.className = "rightPannel";
	console_log.appendChild(section);
	//leftPannel
	const yearChangePannel = document.createElement('div');
	yearChangePannel.className = "yearChangePannel";
	const yearForm = document.createElement('form');
	yearForm.id = "dateForm";
	yearForm.method = "post";
	cell1.appendChild(yearForm);
	yearForm.appendChild(yearChangePannel);
	yearChangePannel.innerHTML = '<input type="submit" name="yearChange" value="<" class="yearChange"><input type=hidden id=curYear name=year value="'+yearNum+'">'+yearNum+'<input type="submit" name="yearChange" value=">" class="yearChange">';
	for (let i = 0; i<12; i++){
		let input2 = document.createElement('input');
		let span = document.createElement('span');
		span.innerHTML = months[i];
		let label = document.createElement('label');
		input2.type = "radio";
		input2.name = "month";
		label.className = "monthButton";
		input2.value = months[i];
		if (i+1==monthNum) {
			input2.checked = true;
			label.className += " monthSelected";
		}
		let br3 = document.createElement('br');
		label.appendChild(input2);
		label.appendChild(span);
		yearForm.appendChild(label);
		yearForm.appendChild(br3);
		label.onclick = function(){
			document.getElementById("dateForm").submit();
		}
	}
	//rightPannel
	const p = document.createElement('p');
	p.className = "eventHead";
	if (date.getDate()>9)
		p.innerHTML = months[date.getMonth()]+" "+date.getDate()+", "+date.getFullYear();
	else p.innerHTML = months[date.getMonth()]+" 0"+date.getDate()+", "+date.getFullYear();
	cell3.appendChild(p);
	const hr = document.createElement('hr');
	hr.className = "hr";
	cell3.appendChild(hr);
	rightEvents = document.createElement('div');
	rightEvents.className = "rightEvents";
	cell3.appendChild(rightEvents);
	rightEvent = document.createElement('p');
	rightEvent.className = "rightEvent";
	rightEvent.innerHTML = "На сегодня событий не запланированно";
	rightEvents.appendChild(rightEvent);
	//centralPannel
	let days = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
	let dateForPrint = new Date(yearNum+"-"+monthNum+"-01");
	const centralPannel = document.getElementsByClassName("centralPannel")[0];
	centralPannel.innerHTML = "";
	const calendarItem = document.createElement("div");
	calendarItem.className = "calendar-item";
	centralPannel.appendChild(calendarItem);
	const calendarHead = document.createElement("div");
	calendarHead.className = "calendar-head";
	calendarHead.innerHTML = months[dateForPrint.getMonth()];
	calendarItem.appendChild(calendarHead);
	const table = document.createElement('table');
	const row2 = table.insertRow();
	for (let i = 0; i<7; i++){
		let day = document.createElement("th");
		day.innerHTML = days[i];
		row2.appendChild(day);
	}
	const rowForDays = [];
	rowForDays.push(table.insertRow());
	rowForDays.push(table.insertRow());
	rowForDays.push(table.insertRow());
	rowForDays.push(table.insertRow());
	rowForDays.push(table.insertRow());
	rowForDays.push(table.insertRow());
	calendarItem.appendChild(table);
	let firstDate;
	let lastDate = new Date((dateForPrint.getMonth()+1)+"-"+daysInMonth(dateForPrint.getMonth()+1,dateForPrint.getFullYear())+"-"+dateForPrint.getFullYear());
	if (date.getMonth()<10)
		firstDate = new Date("0"+(dateForPrint.getMonth()+1)+"-01-"+dateForPrint.getFullYear());
	else firstDate = new Date((dateForPrint.getMonth()+1)+"-01-"+dateForPrint.getFullYear());
	if (firstDate.getDay()>0){
		for (let i = 0; i<firstDate.getDay()-1;i++){
			let cell2 = rowForDays[0].insertCell();
		}
	}
	let currentDay = 1;
	for (let i = 0; i < 6; i++){
		for (let j = 0; j<7; j++){
			let date2;
			if (i<10)
				date2 = new Date((dateForPrint.getMonth()+1)+"-0"+currentDay+"-"+dateForPrint.getFullYear());
			else 
				date2 = new Date((dateForPrint.getMonth()+1)+"-"+currentDay+"-"+dateForPrint.getFullYear());
			if (date2.getDay()>j+1 || currentDay>daysInMonth(dateForPrint.getMonth()+1,dateForPrint.getFullYear())) continue;
			let cell2 = rowForDays[i].insertCell();
			cell2.className = "calendar-day";
			if (currentDay == date.getDate() && date.getMonth()+1 == monthNum && date.getFullYear() == yearNum)
				cell2.classList.add("today");
			
			if (typeof map.get(currentDay+"."+monthNum+"."+yearNum) !== 'undefined')
				cell2.classList.add("event");
			let circleDay = document.createElement('div');
			circleDay.className = "circleDay";
			cell2.appendChild(circleDay);
			circleDay.innerHTML = currentDay;		
			cell2.onclick = (function(day, month, year) {
				return function() {
				showEvents(day, (dateForPrint.getMonth()+1), dateForPrint.getFullYear());
			};
			})(currentDay);
			currentDay++;
		}
	
	}
	
}

