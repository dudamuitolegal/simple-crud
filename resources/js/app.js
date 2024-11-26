import './bootstrap';

//update current hours
 function updateHour() {
     const options = {timeZone: 'America/Sao_Paulo', hour: '2-digit', minute: '2-digit', second: '2-digit'};
     document.getElementById('hora').textContent = new Intl.DateTimeFormat('pt-BR', options).format(new Date());
 }
 setInterval(updateHour, 1000)


