<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
$("button").click(function(){
$("p").hide();
});
});
    </script>
<p>hello world </p>
<button>Click On Me </button>         
</body>
</html>
<br></br>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("p").click(function(){
            $(this).hide();
    });
});
    </script>
    </head>
    <body>
        <p> hello  how you day going</p>
</body>
</html>

<br></br>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("buttton").click(function(){
        $("#demo").hide();
        });
    });

    </script>
    </head>
    <body>
        <h1 id="demo">hello</h1>
        <button>Click On Me</button>
</body>
</html>

<br></br>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("button").click(function(){
$("#test").hide();
});
});
</script>
</head>
<body>

<h2>This is a heading</h2>

<p>This is a paragraph.</p>
<p id="test">This is another paragraph.</p>

<button>Click me</button>

</body>
</html>

<br></br>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("button").click(function(){
s(".test").hide();
});
});
</script>
</head>
<body>
<p>This is another paragraph.</p>
<p id ="test">This is a paragraph </p>
<button>Click me</button>

</body>
</html>

<br></br>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("p").click(function(){
$(this).hide();
});
});
</script>
</head>
<body>

<p>If you click on me, I will disappear.</p>
<p>Click me away!</p>
<p>Click me too!</p>

</body>
</html>

<br></br>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("p").dblclick(function(){
$(this).hide();
});
});
</script>
</head>
<body>

<p>hello world </p>
<p>Click me away</p>
<p>Click me too</p>

</body>
</html>


<br></br>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#p1").mouseenter(function(){
alert("You entered p1!");
});
});
</script>
</head>
<body>

<p id="p1">write a paragraph</p>

</body>
</html>

<br></br>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#p1").mouseleave(function(){
alert("Bye! You now leave p1!");
});
});
</script>
</head>
<body>

<p id="p1">This is a paragraph too write short note </p>

</body>
</html>

<br></br>


<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#p1").mousedown(function(){
alert("Mouse down over p1!");
});
});
</script>
</head>
<body>

<p id="p1">write a short note in this paragraph</p>

</body>
</html>

<br></br>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#p1").mouseup(function(){
alert("Mouse up over p1!");
});
});
</script>
</head>
<body>

<p id="p1">Hello World </p>

</body>
</html>

<br></br>


<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#p1").hover(function(){
alert("You entered p1!");
},
function(){
alert("Bye! You now leave p1!");
}); 
});
</script>
</head>
<body>

<p id="p1">write a javascript function </p>

</body>
</html>

<br></br>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("input").focus(function(){
$(this).css("background-color", "yellow");
});
$("input").blur(function(){
$(this).css("background-color", "violet");
});
});
</script>
</head>
<body>

Name: <input type="text" name="fullname"><br>
Email: <input type="text" name="email"><br>
Password: <input type ="password" name = "password"><br>
Address:<input type="text" name="address"><br>
</body>
</html>

<br></br>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("p").on("click", function(){
$(this).hide();
});
});
</script>
</head>
<body>

<p>If you click on me, I will disappear.</p>
<p>Click me away!</p>
<p>Click me too!</p>

</body>
</html>

