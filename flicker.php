<html>
<head>
<style>
body {
  background-size: cover;
}
</style>
<script src="jquery.js?rev=<?=time();?>"></script>
<script>
$(document).ready(function() {
   setInterval(flick, <?=$_REQUEST['period'];?>);
});
function flick() {
  $.ajax({
    url: 'flick.php',
    success: function(data) {
       $('body').css('background-color', '#' + data);
     },
  });
}
</script>
</head>
<body name="flick">
</body>
</html>
