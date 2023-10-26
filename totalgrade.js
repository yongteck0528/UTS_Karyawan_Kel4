function hitung() {
  let resp = parseFloat(document.getElementById("responsibility").value) * 0.3;
  let teamw = parseFloat(document.getElementById("teamwork").value) * 0.3;
  let time_m =
    parseFloat(document.getElementById("timeManagement").value) * 0.4;
  let total = resp + teamw + time_m;

  console.log(resp);
  console.log(teamw);
  console.log(time_m);
  console.log(total);

  if (total >= 80) {
    grade = "A";
  } else if (total >= 60) {
    grade = "B";
  } else if (total >= 40) {
    grade = "C";
  } else {
    grade = "D";
  }

  document.getElementById("txt").value = total;
  

  console.log(txtTotal);
}
