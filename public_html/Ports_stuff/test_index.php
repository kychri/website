<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
</head>

<body>

<h2>Filter DIV Elements</h2>

<div class="button-group" data-filter-group="building">
  <button  data-filter="">any</button>
  <button  data-filter=".A"> Building A</button>
  <button  data-filter=".C"> Building C</button>
  <button  data-filter=".D"> Building D</button>
  <button  data-filter=".E"> Building E</button>
  <button  data-filter=".F"> Building F</button>
  <button  data-filter=".G"> Building G</button>
  <button  data-filter=".H"> Building H</button>
  <button  data-filter=".I"> Building I</button>
  <button  data-filter=".J"> Building J</button>
  <button  data-filter=".K"> Building K</button>
  <button  data-filter=".L"> Building L</button>
  <button  data-filter=".M"> Building M</button>
  <button  data-filter=".N"> Building N</button>
  <button  data-filter=".Q"> Building Q</button>
  <button  data-filter=".R"> Building R</button>
  <button  data-filter=".S"> Building S</button>
  <button  data-filter=".T"> Building T</button>
  <button  data-filter=".U"> Building U</button>
  <button  data-filter=".V"> Building V</button>
  <button  data-filter=".W"> Building W</button>
</div>

<div class="button-group" data-filter-group="floor">
  <div class="filterFloor" data-filter="">Any</div>
  <div class="filterFloor" data-filter=".0">Floor 0</div>
  <div class="filterFloor" data-filter=".1">Floor 1</div>
  <div class="filterFloor" data-filter=".2">Floor 2</div>
  <div class="filterFloor" data-filter=".3">Floor 3</div>
  <div class="filterFloor" data-filter=".4">Floor 4</div>
  <div class="filterFloor" data-filter=".5">Floor 5</div>
  <div class="filterFloor" data-filter=".6">Floor 6</div>
  <div class="filterFloor" data-filter=".7">Floor 7</div>
  <div class="filterFloor" data-filter=".8">Floor 8</div>
  <div class="filterFloor" data-filter=".9">Floor 9</div>
</div>

<div class="switch-container">
  <div class="filterSwitch Floor0" data-filter="filterSwitch('B01axxxA0131nc0')">B01axxxA0131nc0</div>
  <div class="filterSwitch Floor0" data-filter="filterSwitch('B03axxxA0186nc0')">B03axxxA0186nc0</div>
  <div class="filterSwitch Floor0" data-filter="filterSwitch('B02axxxA0180nc0')">B02axxxA0180nc0</div>
  <div class="filterDiv A">Floor 2</div>
  <div class="filterDiv A">Floor 3</div>
  <div class="filterDiv A">Floor 4</div>
  <div class="filterDiv A">Floor 5</div>
  <div class="filterDiv A">Floor 6</div>
  <div class="filterDiv A">Floor 7</div>
  <div class="filterDiv A">Floor 8</div>
  <div class="filterDiv A">Floor 9</div>
  <div class="filterDiv C">Floor 0</div>
  <div class="filterDiv C">Floor 1</div>
  <div class="filterDiv C">Floor 2</div>
  <div class="filterDiv C">Floor 3</div>
  <div class="filterDiv C">Floor 4</div>
  <div class="filterDiv C">Floor 5</div>
  <div class="filterDiv C">Floor 6</div>
</div>

<div class="room-container">
  <div class="filterDiv B01axxxA0131nc0" data-filter="filterRoom('B01axxxA0131nc0')">B01axxxA0131nc0</div>
  <div class="filterDiv B03axxxA0186nc0" data-filter="filterRoom('B03axxxA0186nc0')">B03axxxA0186nc0</div>
  <div class="filterDiv B02axxxA0180nc0" data-filter="filterRoom('B02axxxA0180nc0')">B02axxxA0180nc0</div>
<script>

// store filter for each group
var filters = {};

$demo.on( 'click', '.button', function() {
  var $this = $(this);
  // get group key
  var $buttonGroup = $this.parents('.button-group');
  var filterGroup = $buttonGroup.attr('data-filter-group');
  // set filter for group
  filters[ filterGroup ] = $this.attr('data-filter');
  // combine filters
  var filterValue = concatValues( filters );
  $grid.isotope({ filter: filterValue });
});

// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}




// Filter by Building
filterSelection("onClick")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Filter by Floor
filterFloor("onClick")
function filterFloor(c) {
  var x, i;
  x = document.getElementsByClassName("filterSwitch");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
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
