function mulaihitung(){
  interval = setInterval("hitung()", 1);
}

function hitung(){
  resp = parseFloat(document.getElementById('responsibility').value) * 0.3;
  teamw = parseFloat(document.getElementById('teamwork').value) * 0.3;
  time_m = parseFloat(document.getElementById('timeManagement').value) * 0.4;
  total = resp+teamw+time_m;

  document.getElementById('total').value = total;

  if(total>=80){
    grade = 'A';
  }
  else if(total>=60){
    grade = 'B';
  }
  else if(total>=40){
    grade = 'C';
  }
  else{
    grade = 'D';
  }

  document.getElementById('grade').value = grade;

}

function stopHitung(){
  clearInterval(interval);
}