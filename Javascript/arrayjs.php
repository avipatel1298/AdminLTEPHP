<html>
<body>
<h1>JavaScript Arrays</h1>
<script>
const cars = [
"audi",
"Volvo",
"BMW"
];
document.write(cars)
</script>

</body>
</html>

<br>
</br>

<html>
<body>
<script>
let fruit = ["apple","banana","orange","kiwi"]
document.write(fruit)
</script>
</body>
</html>
<br>
</br>

<html>
<body>
<script>
let fruits = ["apple","banana","orange","kiwi"]

for (let i = 0; i < fruits.length; i++) {
document.write(fruits[i] + "<br>") 
}
</script>
</body>
</html>
<br>
</br>

<html>
<body>
<script>
let car = ["bmw","audi","ford"]

car.forEach(function(car1){
document.write(car1 +"<br>")
})
</script>
</body>
</html>
<br>
</br>
<html>
<head>
<script>
let x = ["firstname","lastname","city","age"]
y = x.length
document.write(y)
</script>
<br></br>   
<html>
<body>
<script>
const y = ["Banana", "Orange", "Apple", "Mango"]
z = y.pop()
document.write(z + "<br>") 
document.write(y)
</script>
</body>
</html>

<br> </br>

<html>
<body>
<script>
const animal = ['dog','cat','cow','donkey','monkey']
animal.push('buffalo')
document.write(animal) 
</script>
</body>
</html>

<br>
</br> 
<html>
<body>
<script>
const a = ["Banana", "Orange", "Apple", "Mango"];
a.shift();
document.write(a)
</script>
</body>
</html>
<br>
</br>

<html>
<body>
<script>
const b = ["Saab", "Volvo", "BMW"]
c = b [1]
document.write(c)
</script>
</body>
</html>

<br>
</br>
<html>
<body>
<script>
const d = ["Abelson, Hal","Aaron, Hank","Adams, Scott","Addison, Joseph"]
for (let i = 0; i < d.length; i++){
document.write(d[i] + "<br>")
}
</script>
<br>
</br>

<html>
<body>
<script>
const  name = ["Abourezk, James","Abbey, Edward","Aesop","Ahmad","Aiken, Conrad"]
let name_at = name.at(2)
document.write(name_at)  
</script>
</body>
</html>
<br>
</br>

<html>
<body>
<script> 
const fruits_join = ["Banana", "Orange", "Apple", "Mango"];
let fruit_string =fruits_join.join("*")
document.write(fruit_string)
</script>
</body>
</html>


<br></br>

<html>
<body>
<script>
const fruits_pop = ["Banana", "Orange", "Apple", "Mango","Kiwi"]
fruits_pop.pop()
document.write(fruits_pop)
</script>
</body>
</html>


<html>
<body>
<p id = "element"></p>
<script>
const  fruit_unshift = ["Banana", "Orange", "Apple", "Mango","kiwi","Watermelon","Lemon","Tomato"]
fruit_unshift.unshift["Dragon"] 
document.getElementById("element").innerHTML = fruit_unshift
</script>
</body>
</html>
<br></br>

<html>
<body>
<p id ="copy"></p>
<script>
const fruits_within = ["Banana", "Orange", "Apple", "Mango","Potato"]
document.getElementById("copy").innerHTML = fruits_within.copyWithin(0,2)
</script>
</body>
</html>
<br>
</br>
<html>
<body>
<p id = "splice"></p>
<script>
const fruits_splice = ["Banana", "Orange", "Apple", "Mango","Kiwi","Watermelon","Lemon"]
fruits_splice.splice (4,6,"graps","Potato")
document.getElementById("splice").innerHTML = fruits_splice
</script>           
</body>
</html>

<br>
</br>

<html>
<body>
<p id = "date"></p>
<script>
const e = new Date("1-1-2026 11:13:00")
document.getElementById("date").innerHTML = e 
</script>
</body>
</html>
<br>
</br>

<html>
<body>
<p id="demo"></p>
<script>
const person = {
  firstName: "John",
  lastName: "Doe",
  id: 5566,
  fullName : function() {
    return this.firstName + " " + this.lastName;
  }
};

document.getElementById("demo").innerHTML = person.fullName()
</script>

</body>
</html>