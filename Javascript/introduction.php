<html>
<body  onload="myFunction()">
<h2>ON CLICK </h2>
<p id = "demo"></p>
<button type="button" onclick='document.getElementById("demo").innerHTML = "Hello JavaScript!"'>
Click Me!</button>

<br> </br>

<script>
<h2>Basic Print Output</h2>
<p id = "test"></p>
document.getElementById("test").innerHTML = "hello world";
</script>

<br></br>

<script>
function myFunction() {
document.getElementById("test1").innerHTML = "Paragraph changed.";
}
</script>
<h2>ON CLICK FUNCTION</h2>
<p id="test1">A Paragraph</p>
<button type="button" onclick="myFunction()">Click it</button>
<br></br>

<h2>Using innerHTML</h2>
<p id = "demo1"></p>
<script>
document.getElementById("demo1").innerHTML = (10+20);
</script>
<br>
</br>
<h2>Using document.write()</h2>
<p id = "demo2"></p>
<script>
document.write("welcome to javascript");
</script>
<br>
</br>

<h2>using window.alert()</h2>
<script>
window.alert(5 + 6);
</script>

<br></br>

<h2>Using console.log()</h2>
<script>
console.log("hello");
</script>

<br></br>

<h2>JavaScript Print</h2>
<button onclick="window.print()">Print this page</button>                   

<br></br>

<script>
let x = 50
x--;
let z = x 
document.write(z)
</script>

<br>
</br>

<script>
document.write(200 + 800 *2)
</script>

<br></br>

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

<br>
</br>

<script>
function myFunction() {
alert("Page is loaded");
}
</script>

<script>
let x = 45
Y = x.padEnd(5,0)
document.write(Y)
</script>
</body>
</html>


