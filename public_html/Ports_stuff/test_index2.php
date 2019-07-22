<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
</head>

<body>

<h2>Filter DIV Elements</h2>

<div class="button-group filters-button-group">
  <button class="button" data-filter=".A">Building A</button>
  <button class="button" data-filter=".C">Building C</button>
  <button class="button" data-filter=".D">Building D</button>
  <button class="button" data-filter=".E">Building E</button>
  <button class="button" data-filter=".F">Building F</button>
  <button class="button" data-filter=".G">Building G</button>
  <button class="button" data-filter=".H">Building H</button>
</div>

<div class="grid">
  <div class="button-group filters-button-group">
    <button class="button" data-category="A" data-filter=".0" >Floor0</button>
    <button class="button" data-category="A" data-filter=".1" >Floor1</button>
    <button class="button" data-category="A" data-filter=".2" >Floor2</button>
    <button class="button" data-category="A" data-filter=".3" >Floor3</button>
    <button class="button" data-category="A" data-filter=".4" >Floor4</button>
    <button class="button" data-category="A" data-filter=".5" >Floor5</button>
    <button class="button" data-category="A" data-filter=".6" >Floor6</button>
    <button class="button" data-category="A" data-filter=".7" >Floor7</button>
    <button class="button" data-category="A" data-filter=".8" >Floor8</button>
    <button class="button" data-category="A" data-filter=".9" >Floor9</button>
    <button class="button" data-filter=".C">Building C</button>
    <button class="button" data-filter=".D">Building D</button>
    <button class="button" data-filter=".E">Building E</button>
    <button class="button" data-filter=".F">Building F</button>
    <button class="button" data-filter=".G">Building G</button>
    <button class="button" data-filter=".H">Building H</button>
  </div>
</div>

<script>
  $grid.isotope({ filter: '.A' });
  $grid.isotope({ filter: '.C' });
  $grid.isotope({ filter: '.D' });
  $grid.isotope({ filter: '.E' });
  $grid.isotope({ filter: '*' });

  // external js: isotope.pkgd.js

// init Isotope
var iso = new Isotope( '.grid', {
  itemSelector: '.element-item',
  layoutMode: 'fitRows'
});

// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function( itemElem ) {
    var number = itemElem.querySelector('.number').textContent;
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function( itemElem ) {
    var name = itemElem.querySelector('.name').textContent;
    return name.match( /ium$/ );
  }
};

// bind filter button click
var filtersElem = document.querySelector('.filters-button-group');
filtersElem.addEventListener( 'click', function( event ) {
  // only work with buttons
  if ( !matchesSelector( event.target, 'button' ) ) {
    return;
  }
  var filterValue = event.target.getAttribute('data-filter');
  // use matching filter function
  filterValue = filterFns[ filterValue ] || filterValue;
  iso.arrange({ filter: filterValue });
});

// change is-checked class on buttons
var buttonGroups = document.querySelectorAll('.button-group');
for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
  var buttonGroup = buttonGroups[i];
  radioButtonGroup( buttonGroup );
}

function radioButtonGroup( buttonGroup ) {
  buttonGroup.addEventListener( 'click', function( event ) {
    // only work with buttons
    if ( !matchesSelector( event.target, 'button' ) ) {
      return;
    }
    buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
    event.target.classList.add('is-checked');
  });
}


</script>

</body>
</html>
