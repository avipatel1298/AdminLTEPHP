
$(document).ready(function(){
    // p tag will hide on button click
    $("button").click(function(){
        $("p").hide();
    });
    //P tag will be hide on click - this event
    $(".p-tag").click(function(){
        $(this).hide();
    });
  
     // When a user clicks on a button, the element with id="test" will be hidden:
    $("button").click(function(){
       $("#test").hide();
    });
   
    // The function is executed when the user double-clicks on the HTML element:
    $("p").dblclick(function(){
        $(this).hide();
    });
    //   The function is executed when the mouse pointer enters the HTML element:
    $("#p1").mouseenter(function(){
        alert("You entered p1!");
    });
    //   The function is executed when the mouse pointer leaves the HTML element:
    $("#demo").mouseleave(function(){
        alert("Bye! You now leave demo!");
    });
    // The function is executed, when the left, middle or right mouse button is pressed down, while the mouse is over the HTML element:
    $("#pointerdown").mousedown(function(){
        alert("Mouse down over pointer!");
    });
    // The function is executed, when the left, middle or right mouse button is released, while the mouse is over the HTML element:
    $("#pointerup").mouseup(function(){
        alert("Mouse up over p1!");
    });
    // The first function is executed when the mouse enters the HTML element, and the second function is executed when the mouse leaves the HTML element:
    $("#p1").hover(function(){
        alert("You entered p1!");
      },
      function(){
        alert("Bye! You now leave p1!");
    }); 
//     The on() method attaches one or more event handlers for the selected elements.
//    Attach a click event to a <p> element:
    $("p").on("click", function(){
        $(this).hide();
    });
    // With jQuery, you can hide and show HTML elements with the hide() and show() methods:
    $("#hide").click(function(){
        $("p").hide();
    });
      $("#show").click(function(){
        $("#p_demo").show();
    });
    //   The optional speed parameter specifies the speed of the hiding/showing, and can take the following values: "slow", "fast", or milliseconds.
    $("button").click(function(){
        $("#p_test").hide(1000);
    });
    // You can also toggle between hiding and showing an element with the toggle() method.
    $("button").click(function(){
        $("#p_toggle").toggle();
    });
    
    });
