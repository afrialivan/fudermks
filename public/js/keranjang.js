const btn = document.getElementById('pengataran')

btn.onclick = function pengataran(){
    document.querySelector(".notiff").classList.add("notif-aktif")
    console.log("hi")
}

const tambah = document.querySelectorAll('.keranjangTambah')
const kurang = document.querySelectorAll('.keranjangKurang')
const jumlah = document.querySelectorAll('.jumlah')
const jumlahValue = document.querySelectorAll('.jumlah').value


tambah.forEach(element => {
    let jumlah = element.previousElementSibling.value
    element.onclick = () => {
        element.previousElementSibling.value = jumlah++
        console.log('oi');
    }

    element.previousElementSibling.previousElementSibling.onclick = () => {
        element.previousElementSibling.value = jumlah--
    }
    // element.previousElementSibling.previousElementSibling.previousElementSibling.onclick = () => {
    //     console.log('tes');
    // }
});
