    Admin Account Setup<br /><br />
    <form action='<?php echo $this->self; ?>?mode=new_install&amp;step=6' method='post'>
    <table border='0' cellpadding='4' cellspacing='0'>
    <tr>
        <td><input class='input' type='text' name='admin_name' /></td>
        <td>User Name</td>
    </tr>
    <tr>
        <td><input class='input' type='password' name='admin_pass' /></td>
        <td>Password</td>
    </tr>
    <tr>
        <td><input class='input' type='password' name='admin_pass2' /></td>
        <td>Password (confirmation)</td>
    </tr>
    <tr>
        <td><input class='input' type='text' name='admin_email' /></td>
        <td>Email</td>
    </tr>
    <tr>
        <td colspan='2' align='center'><br /><input type='submit' value='Continue' /></td>
    </tr>
    </table>
    </form>
