<!DOCTYPE html>
<html lang="hr">
    <head>
		<meta charset ="utf-8">
		<title>Algebra Blog novo</title>
    </head>
    <body>
		
		<form method = "post" action = "">
			{{ csrf_field() }}
			
			naslov:
			<input type = "text" name = "title" /><br/><br/>
			sadržaj:
			<textarea name = "content"></textarea><br/><br/>
			
			<input type = "submit" value = "Spremi" />
		
		</form>
		
    </body>
</html>