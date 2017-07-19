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

function addCheese(label) {
  let string = label.innerHTML.split('<')[1];
  label.innerHTML = "&#129472; <" + string;
}

function removeCheese(label) {
  let string = label.innerHTML.split('<')[1];
  label.innerHTML = "&#128280; <" + string;
}

function toggleCheese (label) {
  console.log("toggling");
  if (label.class == "cheese") {
    console.log('no longer cheese');
    label.class = "nocheese";
    label.onmouseleave = function () { removeCheese(this); }
  } else {
    console.log("becoming cheese");
    label.class = "cheese";
    label.onmouseleave = function () { return };
  }
}

function setup() {
  var labels = document.getElementsByTagName('label');
  for (let i=0; i<labels.length; i++) {
    labels[i].onmouseenter = function () { addCheese(this); };
    labels[i].onmouseleave = function () { removeCheese(this); };
    labels[i].onmousedown = function () { toggleCheese(this); };
    removeCheese(labels[i]);
  }
}