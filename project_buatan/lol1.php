<!DOCTYPE html>
<html>
<head>
    <script language='JavaScript'>
var txt="Contoh Title Bergerak ";
var speed=1;
var refresh=null;
function action() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
refresh=setTimeout("action()",speed);}action();
</script>

</head>
<body>

</body>
</html>