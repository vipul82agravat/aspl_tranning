<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
    console.log(6);


   TeslaModelS.pressGasPedal();





});

 var TeslaModelS = function() {
    this.numWheels    = 4;
    this.manufacturer = 'Tesla';
    this.make         = 'Model S';
}

TeslaModelS.prototype = function() {

    var go = function() {
    // Rotate wheels
         console.log('This is go !');
    };

    var stop = function() {
    // Apply brake pads
         console.log('This is stop !');
    };

    return {
    pressBrakePedal: stop,
    pressGasPedal: go
    }

}();


</script>
</head>
<body>

<h3> This is an example of using the jQuery's ajax() method. </h3>
<h4> Click the following button to see the effect. </h4>
<button> Click me </button>
<p id = "para"></p>

</body>
</html>
