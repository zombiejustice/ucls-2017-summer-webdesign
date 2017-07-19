function score() {
  var all = document.getElementsByTagName('label');
  for (let i=0; i<all.length; i++) {
    if (all[i].getElementsByTagName('input')[0].checked) {
      all[i].style.backgroundColor = '#ff6666';
    }
  }
  
  var results = document.getElementsByClassName('correct');
  var total = 0;
  for (let i=0; i<results.length; i++) {
    if (results[i].getElementsByTagName('input')[0].checked) {
      total +=1;
      results[i].style.backgroundColor = '#66ff66';
    } else {
      results[i].style.backgroundColor = '#ccffcc';
    }
  }
  
  let message = "<p>Your score: " + total + "/3</p>";
  if (total < 3) {
    message += "<p>Better luck next time!</p>";
  }
  document.getElementById('score').innerHTML = message;
}
