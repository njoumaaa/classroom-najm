function verif1() {
  em = document.getElementById("email").value;
  pass = document.getElementById("password").value;
  if (em.length == 0 || pass.length == 0 || pass.length > 8) {
    alert("donnee invalide");
    return false;
  }
}
function verif() {
  nom = document.getElementById("name").value;
  if (nom.length == 0 || isNaN(nom) == false) {
    alert("nom invalide");
    return false;
  }
  tel = document.getElementById("tel").value;
  if (tel.length == 0 || isNaN(tel) == true || tel.length > 8) {
    alert("numero telephone invalide");
    return false;
  }
}
