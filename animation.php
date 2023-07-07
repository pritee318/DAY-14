<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("button").click(function(){
    $("div").animate({
      height: 'toggle'
    });
  });
});
</script> 
</head>
<body>
<p>Hello</p>
<button>click it!!</button>
<br>
<div style="background:lightblue;height:50px;width:50px;position:absolute;"></div>

</body>
</html>