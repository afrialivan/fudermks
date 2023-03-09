const btn = document.getElementById('btn')
const loading = document.getElementById('loading')

btn.onclick = () => {
  loading.className = 'loading d-block'

  setTimeout(() => {
    window.location = `login.php`
  }, 2000);
}