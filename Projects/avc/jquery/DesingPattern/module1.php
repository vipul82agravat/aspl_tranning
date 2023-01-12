<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
    console.log(6);


   Exposer.first();
   Exposer.second();
   Exposer.three();




});

var Exposer = (function() {
    var privateVariable = 10;

    var privateMethod = function() {
    console.log('Inside a private method!');
    privateVariable++;
    }

    var methodToExpose = function() {
    console.log('This is a method I want to expose!');
    }

    var otherMethodIWantToExpose = function() {
    privateMethod();
    }

    return {
        first: methodToExpose,
        second: otherMethodIWantToExpose,
        three: privateMethod
    };
})();


</script>
</head>
<body>

<h3> This is an example of using the jQuery's ajax() method. </h3>
<h4> Click the following button to see the effect. </h4>
<button> Click me </button>
<p id = "para"></p>

</body>
</html>
