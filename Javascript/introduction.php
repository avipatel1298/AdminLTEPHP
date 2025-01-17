<html>
 <body>
   <h2>ON CLICK </h2>
     <p id = "demo"></p>
     <button type="button" onclick='document.getElementById("demo").innerHTML = "Hello JavaScript!"'>
      Click Me!</button>
</body>
</html>
<br> </br>

<html>
 <body>
    <h2>Basic Print Output</h2>
    <p id = "test"></p>
    <script>
    document.getElementById("test").innerHTML = "hello world";
    </script>
</body>
</html>
<br></br>

<html>
<head>
    <script>
    function myFunction() {
    document.getElementById("test1").innerHTML = "Paragraph changed.";
}
    </script>
</head>
<body>
    <h2>ON CLICK FUNCTION</h2>
    <p id="test1">A Paragraph</p>
    <button type="button" onclick="myFunction()">Click it</button>
</body>
<br></br>

<html>
<body>
    <h2>Using innerHTML</h2>
    <p id = "demo1"></p>
    <script>
    document.getElementById("demo1").innerHTML = (10+20);
    </script>
</body>
</html>
<br>
</br>

<html>
<body>
<h2>Using document.write()</h2>
<p id = "demo2"></p>
<script>
document.write("welcome to javascript");
</script>
</body>
</html>

<br>
</br>


<html>
<body>
<h2>using window.alert()</h2>
<script>
window.alert(5 + 6);
</script>
</body>
</html>

<br></br>

<html>
<body>
<h2>Using console.log()</h2>
<script>
console.log("hello");
</script>
</body>
</html>
<br></br>

<html>
<body>
<h2>JavaScript Print</h2>
<button onclick="window.print()">Print this page</button>                   
</body>
</html>

<br></br>

<html>
<body>
<script>
let x = 50
x--;
let z = x 
document.write(z)
</script>
</body>
</html>

<br>
</br>

<html>
<body>
<script>
document.write(200 + 800 *2)
</script>
</body>
</html>

<br></br>


<html>
<body>
<script>
const person = {
firstname : "John",
lastname : "Doe",
age : 30,
city: "New York"
}

person.test = function(){
return this.firstname + " " + this.lastname + " " + "From " + this.city
}

document.write("My Father Is " + person.test())
</script>
</body>
</html>

<br>
</br>


<html>
<body onload="myFunction()">
<script>
function myFunction() {
alert("Page is loaded");
}
</script>

</body>
</html>


<html>
<body>
<script>
let x = 45
Y = x.padEnd(5,0)
document.write(Y)
</script>
</body>
</html>



