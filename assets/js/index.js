//Funcion para deslizar pantalla en boton start
function start(){
    let btn_start = document.getElementById('btn-start')
    
    btn_start.addEventListener('click', (event)=>{
        event.preventDefault()
        scrollTo(0, 1000)
    })
    
}

start()