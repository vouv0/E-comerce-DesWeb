
const button = document.querySelector("button")
const modal = document.querySelector("#modal")
const modal2 = document.querySelector("#modal2")
const modal3 = document.querySelector("#modal3")
const modal4 = document.querySelector("#modal4")
const modal5 = document.querySelector("#modal5")
const modal6 = document.querySelector("#modal6")
const modal7 = document.querySelector("#modal7")
const modal8 = document.querySelector("#modal8")
const modal9 = document.querySelector("#modal9")
buttonClose = document.querySelector("dialog button")

button.onclick = function (){
  modal.showModal()
  modal2.showModal()
}


buttonClose.onclick = function (){
  modal2.close()
}

buttonClose.onclick = function (){
  modal.close()
}