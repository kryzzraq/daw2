//Añado funcionalidad a los eventos
boton0.addEventListener("click",()=>{miCalcu.pintarEnDisplay(boton0)})
boton00.addEventListener("click",()=>{miCalcu.pintarEnDisplay(boton00)})
boton1.addEventListener("click",()=>{miCalcu.pintarEnDisplay(boton1)})
boton2.addEventListener("click",()=>{miCalcu.pintarEnDisplay(boton2)})
boton3.addEventListener("click",()=>{miCalcu.pintarEnDisplay(boton3)})
boton4.addEventListener("click",()=>{miCalcu.pintarEnDisplay(boton4)})
boton5.addEventListener("click",()=>{miCalcu.pintarEnDisplay(boton5)})
boton6.addEventListener("click",()=>{miCalcu.pintarEnDisplay(boton6)})
boton7.addEventListener("click",()=>{miCalcu.pintarEnDisplay(boton7)})
boton8.addEventListener("click",()=>{miCalcu.pintarEnDisplay(boton8)})
boton9.addEventListener("click",()=>{miCalcu.pintarEnDisplay(boton9)})

botonCE.addEventListener("click", ()=>{miCalcu.borrarUltimoValor()})
botonC.addEventListener("click",()=>{miCalcu.borrarTodo()})

botonSumar.addEventListener("click",()=>{miCalcu.operar(botonSumar.value)})
botonRestar.addEventListener("click", ()=>{miCalcu.operar(botonRestar.value)})
botonMultiplicar.addEventListener("click",()=>miCalcu.operar(botonMultiplicar.value))
botonDividir.addEventListener("click",()=>{miCalcu.operar(botonDividir.value)})

botonIgual.addEventListener("click", ()=>{miCalcu.igualar()})