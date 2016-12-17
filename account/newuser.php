<!DOCTYPE html>

<html>

<input type ="button" onclick="javascript:location.href='login.php'" value="Back"></input>

<style type="text/css">
.style1 { font-size: 13px;  font-family: "SimHei";  font-weight: normal;   color: #0099 FF; }
</style>

<div align="center">
	<form name="newuser" method="post" action="db/database.php">
		<table width="300" border="1" bgcolor="#D8EFFA">
			<tr align="center">
			<td height="30" colspan="2"><span class="style1">Sign up</span></td>
			</tr>

			<tr>
			<td width="110" align="center" class="style1">First Name: </td>
			<td width="170" height="30" align="left" valign="middle"><input name="FirstName" type="text" id="firstname" size="25"></td>
			</tr>

			<tr>
			<td width="110" align="center" class="style1">Last Name: </td>
			<td width="170" height="30" align="left" valign="middle"><input name="LastName" type="text" id="lastname" size="25"></td>
			</tr>

			<tr>
			<td width="110" align="center" class="style1">Email: </td>
			<td width="170" height="30" align="left" valign="middle"><input name="Email" type="text" id="email" size="25"></td>
			</tr>


			<tr>
			<td width="110" align="center" class="style1">Home Address: </td>
			<td width="170" height="30" align="left" valign="middle"><input name="HomeAddress" type="text" id="homeaddress" size="25"></td>
			</tr>

			<tr>
			<td width="110" align="center" class="style1">Home Phone: </td>
			<td width="170" height="30" align="left" valign="middle"><input name="HomePhone" type="text" id="homephone" size="25"></td>
			</tr>

			<tr>
			<td width="110" align="center" class="style1">Cell Phone: </td>
			<td width="170" height="30" align="left" valign="middle"><input name="CellPhone" type="text" id="cellphone" size="25"></td>
			</tr>
		</table>
		<table width="300" border="1" bgcolor="#D8EFFA">
			<tr align="center">
			<td height="30" align="center"><input type="submit" name="Submit" value="Submit"></td>
			</tr>
		</table>
		<br>
		<table width="300" border="1" bgcolor="#D8EFFA">
			<tr align="center">
			<td height="30" align="center"><a href="db/search.html">Search User</a></td>
			</tr>
		</table>

		<br>
		<table width="300" border="1" bgcolor="#D8EFFA">
			<tr align="center">
			<td height="30" align="center"><a href="db/user.php">Show All Users of my Company</a></td>
			</tr>
		</table>
		<br>
		<table width="300" border="1" bgcolor="#D8EFFA">
			<tr align="center">
			<td height="30" align="center"><a href="db/alluser.php">Show All Users from all Companys</a></td>
			</tr>
		</table>
	</form>
</div>

</html>
