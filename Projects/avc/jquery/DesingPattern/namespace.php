<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){

var subsys1 = {}, subsys2 = {};

var nextIdMod = function(startId) {
    var id = startId || 0;

    this.next = function() {
        return id++;
    };

    this.reset = function() {
        id = 0;
    }
};

nextIdMod.call(subsys1);
nextIdMod.call(subsys2,1000);

window.console && console.log(
    subsys1.next(),
    subsys1.next(),
    subsys2.next(),
    subsys1.reset(),
    subsys2.next(),
    subsys1.next()
);

var myApp = {};
(function() {
    var id = 0;

    this.next = function() {
        return id++;
    };

    this.reset = function() {
        id = 0;
    }
}).apply(myApp);

window.console && console.log(
    myApp.next(),
    myApp.next(),
    myApp.next(),
    myApp.reset()
); //0, 1, undefined, 0

var myApp = {};
(function(context) {
    var id = 0;

    context.next = function() {
        return id++;
    };

    context.reset = function() {
        id = 0;
    }
})(this);

window.console && console.log(
    this.next(),
    this.next(),
    this.reset(),
    this.next(),
    this.next()
)


});
</script>
</head>
<body>

<h3> This is an example of using the jQuery's ajax() method. </h3>
<h4> Click the following button to see the effect. </h4>
<button> Click me </button>
<p id = "para"></p>

</body>
</html>
