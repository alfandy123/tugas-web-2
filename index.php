<html>
<title>
    Halaman Login PDO
</title>

<head>
   
</head>

<body>

    <center>
        <h2>Halaman Login</h2>
        <label>Crud_PDO</label>
    </center>
    <br>

    <table align="center">
        <form method="POST" action="proseslogin.php">

            <tr>
                <td>Username</td>
                <td><input type="text" name="username"> </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"> </td>
            </tr>
             <tr>
                <td>Hak</td>
                <td><input type="text" name="hak"> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit"  name="login" value="Login"></td>
            </tr>
        </form>

    </table>
</body>

</html>