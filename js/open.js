//Função para mostrar os horários abertos durante a semana e se estamos abertos ou fechados.
function openningHours() {
    let date = new Date();
    let day = date.getDay();
    let hour = date.getHours();   
    
    const openTo = document.getElementById("open");
    const isOpen = document.getElementById("isOpen");
    
    if (day == 0) {
        openTo.innerText = "Domingo -";
        isOpen.innerText = "Estamos Fechados";
        isOpen.classList.add("closed");    
        
        
    } else if (day == 6) {
        openTo.innerText = "Aberto das 09h às 14h -";
        if (hour >= 14 || hour < 8) {
            isOpen.innerText = "Fechado";
            isOpen.classList.add("closed");            
        } else {
            isOpen.innerText = "Aberto";            
        }
    } else if (day != 0 && day != 6) {
        openTo.innerText = "Aberto das 08h às 18h -";
    
        if (hour >= 8 && hour < 18) {
            isOpen.innerText = "Aberto";            
        } else {
            isOpen.innerText = "Fechado";
            isOpen.classList.add("closed");            
        }
    } 
}

openningHours();