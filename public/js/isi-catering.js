// for (let i = 0; i < pilih.length; i++) {
//   pilih[i].style.backgroundColor = "red";
// }

const oi = document.getElementById('car')
const pilih = document.getElementById('pilih')
const a = document.querySelector('.pilihan h3')
const tambah = document.getElementById('tambah')
const kurang = document.getElementById('kurang')
var o = 0

oi.onclick = function() {
  o++
  a.innerHTML=o
  pilih.style.bottom='0'
}
tambah.onclick = function() {
  a.innerHTML=o
  o++
}
kurang.onclick = function() {
  o--
  a.innerHTML=o
  if(o === 0){
    pilih.style.bottom='-100px'
  }
}



// if (!dark) {
//   body.style.backgroundColor='black'
//   dark = true
// }
// else {
//   dark = false
//   body.style.backgroundColor='white'
// }