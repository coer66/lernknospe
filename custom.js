function cookieOk() {
  var now = new Date(); // Variable für aktuelles Datum
  var lifetime = now.getTime(); // Variable für Millisekunden seit 1970 bis aktuelles Datum
  var deleteCookie = lifetime + 86400; // Macht den Cookie 1 Tage gültig.
     
  now.setTime(deleteCookie);
  var enddate = now.toUTCString();
     
  document.cookie = "setCookieHinweis = set; path=/; secure; expires=" + enddate;
  document.getElementById("cookie-popup").classList.add("hidden");
}
function cookienOk() {
}
