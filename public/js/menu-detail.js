const tambah = document.getElementById('keranjangTambah')
const kurang = document.getElementById('keranjangKurang')
const jumlah = document.getElementById('jumlah')
const jumlahValue = document.getElementById('jumlah').value
// const submit = document.getElementById('notif-submit')
// const formm = document.querySelector('form')

// // btn.addEventListener('click', keranjang)

let nilai = 0

tambah.onclick = () => {
    nilai += 1
    jumlah.value = nilai
}
kurang.onclick = () => {
    if(nilai > 0) {
        nilai -= 1
    }
    jumlah.value = nilai
}






// function keranjang(){
//     // document.getElementById("alerts").classList.add("ada")
//     console.log("hi")
// }