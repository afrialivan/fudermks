const catering = document.getElementById('catering')
const cateringText = document.querySelector('#catering h3')
const cateringImg = document.querySelector('#catering img')
const menu = document.getElementById('menu')
const menuText = document.querySelector('#menu h3')
const menuImg = document.querySelector('#menu img')
const keranjang = document.getElementById('keranjang')
const pesanan = document.getElementById('pesanan')
const bgnav = document.getElementById('bg-nav')

var tinggi = window.innerHeight / 12

function keluar() {
  bgnav.style.top="-15px"
  menuText.classList.remove("on-page")
  cateringText.className = "on-page"
  menuImg.src="img/menu.png"
  cateringImg.src="img/catering-aktif.svg"
}

menu.onmouseleave = keluar
menu.onmouseover = () => {
  cateringText.classList.remove("on-page")
  bgnav.style.top= tinggi + "px"
  menuText.className = "on-page"
  menuImg.src="img/menu-aktif.svg"
  cateringImg.src="img/catering.png"
}

// function myFunction(x) {
//   if (x.matches) {
//     document.querySelector('#navbar-togler').className="d-flex bg"
//     document.querySelector('#side-nav').className="side-na"
//     document.querySelector('#nav-header').className="left"
//   } else {
//     document.querySelector('#side-nav').className="side-nav"
//     document.querySelector('#nav-header').className=" "
//     document.querySelector('#navbar-togler').className="d-none"
//   }
// }
// var x = window.matchMedia("(max-width: 960px)")
// myFunction(x) 
// x.addListener(myFunction)

// const togler = document.querySelector('#togler')
// const togle = document.querySelector('#togle')
// const nav = document.querySelector('nav')

// togler.addEventListener('click', () => {
//   document.querySelector('#nav-header').classList.toggle('left')
// }) 

