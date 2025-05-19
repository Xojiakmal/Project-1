// document.getElementById('son1').innerHTML = 6;
document.getElementById('son2').innerHTML = 4;

const xmlhttp = new XMLHttpRequest();

xmlhttp.onload = function() {
  const myObj = JSON.parse(this.responseText);
  document.getElementById("demo").innerHTML = myObj.name;
}
xmlhttp.open("GET", "index.php");
xmlhttp.send();


son()
function abd() {
    let X = document.forms['form']['jav'].value;
    if (X == "") {
        document.getElementById('jav').style.borderColor='red';
        return false;   
    }
}
function son() {
    if (true) {
        let son1 = Math.floor(Math.random()*(10));
        document.getElementById('son1').innerHTML = son1;
        let son2 = Math.floor(Math.random()*(10));
        document.getElementById('son2').innerHTML = son2;
        
    }
}