


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">



$("button#submit").click( function() {
 
  if( $("#username").val() == "" || $("#password").val() == "" )
    $("div#ack").html("Please enter both username and password");
  else
    $.post( $("#myForm").attr("action"),
	        $("#myForm :input").serializeArray(),
			function(data) {
			  $("div#ack").html(data);
			});
 
	$("#myForm").submit( function() {
	   return false;	
	});
 
});

</script>

</head>
</html>