<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
    console.log(6);


    var instance1 = Singleton.getInstance();
    var instance2 = Singleton.getInstance();

    if(instance1 == instance2) { console.log('yes') } else { console.log('no'); }

    console.log("Same instance? " + (instance1 === instance2));



});

 var Singleton = (function () {
    var instance;

    function createInstance() {
        var object = new Object("I am the instance");
        return object;
    }

    return {
        getInstance: function () {
            if (instance==false) {
                instance = createInstance();
            }
            return instance;
        }
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
