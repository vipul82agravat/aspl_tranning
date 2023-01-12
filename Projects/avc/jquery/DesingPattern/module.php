<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
    console.log(6);


   HTMLChanger.callChangeHTML();
   console.log(HTMLChanger.contents);



});

var HTMLChanger = (function() {
    var contents = 'contents'

    var changeHTML = function() {
    var element = document.getElementById('attribute-to-change');
    //element.innerHTML = contents;
    element=contents;
    }

    return {
    callChangeHTML: function() {
        changeHTML();
        console.log(contents);
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
