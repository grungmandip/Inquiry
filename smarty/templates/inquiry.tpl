

<html>
<head>
<title></title>
<meta charset="UTF-8">

</head>
<body>

{if 0 < $error_detail_count}
  <div style = "color:red;">error alert</div>

{/if}

{if true ==$error_detail.error_must_email}
  <div style = "color:red;">email address not found.</div>
{/if}

{if true ==$error_detail.error_csrf_token}
  <div style = "color:red;">CSRF token error.</div>
{/if}



{*
error_must_body
error_format_email
error_format_birthday
error_csrf_timeover

*}


	<form action = "./inquiry_fin.php" method ="post">
		emailアドレス(*):<input type= "text" name ="email"
 value="{$input.email}"><br>

		名前:<input type="text" name="name" 
value="{$input.name}"><br>

		誕生日:<input type="text" name="birthday" 
value="{$input.birthday}"><br>

		お問い合わせ<textarea name="body">{$input.body}</textarea></br>

		<input type="hidden" name="csrf_token" value="{$csrf_token}">


		<button>お問い合わせ</button>
	</form>

</body>
</html>