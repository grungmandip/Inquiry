<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>お問い合わせの</h1>
{$inquiry_data|var_dump}
<table class = "table">
<tr>
	<td>id
	<td>{$inquiry_data.inquiry_id}
</tr>
<tr>
	<td>ステータス
	<td>{$inquiry_data.status}
</tr>
<tr>
	<td>email
	<td>{$inquiry_data.email}
</tr>
<tr>
	<td>name
	<td>{$inquiry_data.name}
</tr>
<tr>
	<td>birthday
	<td>{$inquiry_data.birthday}
</tr>
<tr>
	<td>body
	<td><pre>{$inquiry_data.inquiry_body}</pre>
</tr>
<tr>
	<td>返信時間
	<td>{$inquiry_data.response_date}
</tr>
<tr>
	<td>返信内容
	<td><pre>{$inquiry_data.response_body}</pre>
</table>

<h2>返信内容の登録</h2>
<form action="./inquiry_edit.php" method="post">
<input type="hidden" name="inquiry_id" value="{$inquiry_data.inquiry_id}">
返信内容<textarea name="response_body"></textarea><sssbr>
<button class ="btn btn-primary">返信内容の登録</button>
</form>

<h2>未実装</h2>
<ul>
	<li>「返信をmailする」機能
	<li>返信のステータス表示
</ul>

<hr>
<a href ="./top.php">Top</a>




</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>