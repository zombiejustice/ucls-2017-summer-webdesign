function setCookie(key, value) {
  document.cookie = key + "=" + value + "; expires=" + "Wed, 18 Dec 2023 12:00:00 GMT";
}

function getCookie (key) {
  var pairs = document.cookie.split('; ');
  for (let p=0; p<pairs.length; p++) {
    var pair = pairs[p].split('=');
    if (pair[0]==key) { return pair[1]; }
  }
  return false;
}

function deleteCookie(key) {
  document.cookie = key + "=;expires=Wed 01 Jan 1970";
}