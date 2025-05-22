const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {
  const myObj = JSON.parse(this.responseText);
  document.getElementById("xato").innerHTML = myObj.age;
   let son1 = parseInt(myObj.son1);
   let son2 = myObj.son2;
   son();
}
xmlhttp.open("GET", "bag.json");
xmlhttp.send();

function abd() {
    let X = document.forms['form']['jav'].value;
    if (X == "") {
        document.getElementById('jav').style.borderColor='red';
        document.getElementById('xato').style.color='red';
        document.getElementById('xato').innerHTML = "Javob kiritmadingiz";
        return false;
    }
}
function son() {
    if (true) {
        document.getElementById('son1').innerHTML = son1;
        document.getElementById('son2').innerHTML = son2;
    }
}