const search = document.getElementById('search')
const list = document.getElementById('list')
const main = document.querySelector('main')
const body = document.querySelector('body')

search.onclick = () => {
  list.classList.add('d-block')
  list.classList.remove('d-none')
}

list.onmouseleave = out
body.onscroll = out
function out() {
  setTimeout(() => {
    list.classList.remove('d-block')
    list.classList.add('d-none')
  }, 100);
}