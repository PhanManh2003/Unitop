# Attach multiple event handlers to a <p> element:
$("p").on({
  mouseenter: function(){
    $(this).css("background-color", "lightgray");
  },
  mouseleave: function(){
    $(this).css("background-color", "lightblue");
  },
  click: function(){
    $(this).css("background-color", "yellow");
  }
});

# Common events in JQUERY
Mouse Events	        Keyboard Events	              Form Events	            Document/Window Events
  click	                    keypress	                 submit	                     load
  dblclick	                keydown	                   change	                    resize
  mouseenter	              keyup	                     focus	                    scroll
  mouseleave		                                       blur	                      unload
  hover (mouseenter + mouseleave)