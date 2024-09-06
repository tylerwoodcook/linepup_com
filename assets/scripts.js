function lightTheme() {
  document.getElementById('body').classList.add('theme-light');
  document.getElementById('body').classList.remove('theme-dark');

  let links = document.getElementsByTagName('a');
  for (let i = 0; i < links.length; i++) {
    links[i].classList.remove('dark-theme-links');
  }
}
function darkTheme() {
  document.getElementById('body').classList.add('theme-dark');
  document.getElementById('body').classList.remove('theme-light');

  let links = document.getElementsByTagName('a');
  for (let i = 0; i < links.length; i++) {
    links[i].classList.add('dark-theme-links');
  }
}
