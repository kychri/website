<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
</head>

<?php
//include file with CheckAccess implementation
require_once('authenticate.php');
?>

<body>

<h2> Select a building and floor number to reveal </h2>

<div id="myBtnContainer">
  <button class="btn" onclick="filterSelection('A')"> Building A</button>
  <button class="btn" onclick="filterSelection('C')"> Building C</button>
  <button class="btn" onclick="filterSelection('D')"> Building D</button>
  <button class="btn" onclick="filterSelection('E')"> Building E</button>
  <button class="btn" onclick="filterSelection('F')"> Building F</button>
  <button class="btn" onclick="filterSelection('G')"> Building G</button>
  <button class="btn" onclick="filterSelection('H')"> Building H</button>
  <button class="btn" onclick="filterSelection('I')"> Building I</button>
  <button class="btn" onclick="filterSelection('J')"> Building J</button>
  <button class="btn" onclick="filterSelection('K')"> Building K</button>
  <button class="btn" onclick="filterSelection('L')"> Building L</button>
  <button class="btn" onclick="filterSelection('M')"> Building M</button>
  <button class="btn" onclick="filterSelection('N')"> Building N</button>
  <button class="btn" onclick="filterSelection('Q')"> Building Q</button>
  <button class="btn" onclick="filterSelection('R')"> Building R</button>
  <button class="btn" onclick="filterSelection('S')"> Building S</button>
  <button class="btn" onclick="filterSelection('T')"> Building T</button>
  <button class="btn" onclick="filterSelection('U')"> Building U</button>
  <button class="btn" onclick="filterSelection('V')"> Building V</button>
  <button class="btn" onclick="filterSelection('W')"> Building W</button>
</div>

<div class="floor-container">
  <div class="filterDiv A" onclick="filterFloor('A0')">Floor 0</div>
  <div class="filterDiv A" onclick="filterFloor('A1')">Floor 1</div>
  <div class="filterDiv A" onclick="filterFloor('A2')">Floor 2</div>
  <div class="filterDiv A" onclick="filterFloor('A3')">Floor 3</div>
  <div class="filterDiv A" onclick="filterFloor('A4')">Floor 4</div>
  <div class="filterDiv A" onclick="filterFloor('A5')">Floor 5</div>
  <div class="filterDiv A" onclick="filterFloor('A6')">Floor 6</div>
  <div class="filterDiv A" onclick="filterFloor('A7')">Floor 7</div>
  <div class="filterDiv A" onclick="filterFloor('A8')">Floor 8</div>
  <div class="filterDiv A" onclick="filterFloor('A9')">Floor 9</div>
  <div class="filterDiv C">Floor 0</div>
  <div class="filterDiv C">Floor 1</div>
  <div class="filterDiv C">Floor 2</div>
  <div class="filterDiv C">Floor 3</div>
  <div class="filterDiv C">Floor 4</div>
  <div class="filterDiv C">Floor 5</div>
  <div class="filterDiv C">Floor 6</div>
</div>

<div class="switch-container">
  <div class="filterFloor A0" onclick="filterSwitch('B01axxxA0131nc0')">B01axxxA0131nc0</div>
  <div class="filterFloor A0" onclick="filterSwitch('B03axxxA0186nc0')">B03axxxA0186nc0</div>
  <div class="filterFloor A0" onclick="filterSwitch('B02axxxA0180nc0')">B02axxxA0180nc0</div>

  <div class="filterFloor A1" onclick="filterSwitch('B01axxxA1032nc0')">B01axxxA1032nc0</div>
  <div class="filterFloor A1" onclick="filterSwitch('B01axxxA1313nc0')">B01axxxA1313nc0</div>
  <div class="filterFloor A1" onclick="filterSwitch('B01axxxA4313nc0')">B01axxxA4313nc0</div>
  <div class="filterFloor A1" onclick="filterSwitch('H03a061Ra340nc0')">H03a061Ra340nc0</div>
  <div class="filterFloor A1" onclick="filterSwitch('B01a056Q1207nc0')">B01a056Q1207nc0</div>

  <div class="filterFloor A2" onclick="filterSwitch('B01axxxA2277nc0')">B01axxxA2277nc0</div>
  <div class="filterFloor A2" onclick="filterSwitch('B01a008H2267nc0')">B01a008H2267nc0</div>
  <div class="filterFloor A2" onclick="filterSwitch('b01a052c0203nc0')">b01a052c0203nc0</div>

  <div class="filterFloor A3" onclick="filterSwitch('B01axxxA3277nc0')">B01axxxA3277nc0</div>
  <div class="filterFloor A3" onclick="filterSwitch('B01a008H1167nc0')">B01a008H1167nc0</div>
  <div class="filterFloor A3" onclick="filterSwitch('B01a008H1267nc0')">B01a008H1267nc0</div>
  <div class="filterFloor A3" onclick="filterSwitch('B01a056Q3207nc0')">B01a056Q3207nc0</div>
  <div class="filterFloor A3" onclick="filterSwitch('B01a061Ra340nc0')">B01a061Ra340nc0</div>

</div>

<div class="room-container">
  <div class="filterRoom B01axxxA0131nc0" onclick="filterRoom('B01axxxA0131nc0')">B01axxxA0131nc0</div>
  <div class="filterRoom B03axxxA0186nc0" onclick="filterRoom('B03axxxA0186nc0')">B03axxxA0186nc0</div>
  <div class="filterRoom B02axxxA0180nc0" onclick="filterRoom('B02axxxA0180nc0')">B02axxxA0180nc0</div>
</div>

<script>

// Filter by Building
function filterSelection(option) {
  var sel_opt, i;

  sel_opt = document.getElementsByClassName("filterDiv");

  for (i = 0; i < sel_opt.length; i++) {
    w3RemoveClass(sel_opt[i], "show");
    if (sel_opt[i].className.indexOf(option) > -1) w3AddClass(sel_opt[i], "show");
  }
}

// Filter by Floor
function filterFloor(option) {
  var sel_opt, i;

  sel_opt = document.getElementsByClassName("filterFloor");

  for (i = 0; i < sel_opt.length; i++) {
    w3RemoveClass(sel_opt[i], "show");
    if (sel_opt[i].className.indexOf(option) > -1) w3AddClass(sel_opt[i], "show");
  }
}


// Filter for Switch
filterSwitch("onClick")
function filterSwitch(c) {
  var x, i;
  x = document.getElementsByClassName("filterSwitch");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
