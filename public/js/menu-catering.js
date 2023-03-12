const nama = document.getElementById('nama')
const isiNama = document.getElementById('nama').value

nama.oninput = () => {

  var namaSplit = document.getElementById('nama').value.split(' ')

  namaSplit.splice()
  
  document.getElementById('slug').value = namaSplit.join('-').toLowerCase()

  console.log(namaSplit.join('-').toLowerCase());
}
