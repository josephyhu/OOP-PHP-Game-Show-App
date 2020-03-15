document.addEventListener('keydown', myFunction);

function myFunction(e) {
  document.getElementById(`${e.key}`).click();
}
