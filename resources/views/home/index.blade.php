<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
home index



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6Ly9qb2IuYXBwL2F1dGhlbnRpY2F0ZSIsImlhdCI6MTUwNTU1MzI3MSwiZXhwIjoxNTA1NTU2ODcxLCJuYmYiOjE1MDU1NTMyNzEsImp0aSI6Ik1GMUVXTnA1WGYwczZ0aGYifQ.iJZGYEse3rMe9fARryNui84pqXoshwG1U0nOVEu-pu8'
    }
});

</script>
</body>
</html>