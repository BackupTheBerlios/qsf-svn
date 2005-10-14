    Install to what MySQL database?<br /><br />
    <form action='<?php echo $this->self; ?>?mode=new_install&amp;step=2' method='post'>
    <table border='0' cellpadding='4' cellspacing='0'>
    <tr>
        <td><b>Host Server</b></td>
        <td><input class='input' type='text' name='db_host' value='<?php echo $this->sets['db_host']; ?>' /></td>
    </tr>
    <tr>
        <td><b>Database Name</b></td>
        <td><input class='input' type='text' name='db_name' value='<?php echo $this->sets['db_name']; ?>' /></td>
    </tr>
    <tr>
        <td><b>Database Username</b></td>
        <td><input class='input' type='text' name='db_user' value='<?php echo $this->sets['db_user']; ?>' /></td>
    </tr>
    <tr>
        <td><b>Database Password</b></td>
        <td><input class='input' type='password' name='db_pass' value='' /></td>
    </tr>
    <tr>
        <td><b>Database Port</b><br /><span class='tiny'>Blank for none</span></td>
        <td><input class='input' type='text' name='db_port' value='<?php echo $this->sets['db_port']; ?>' /></td>
    </tr>
    <tr>
        <td><b>Database Socket</b><br /><span class='tiny'>Blank for none</span></td>
        <td><input class='input' type='text' name='db_socket' value='<?php echo $this->sets['db_socket']; ?>' /></td>
    </tr>
    <tr>
        <td colspan='2' class='tiny' align='center'><br /><br />The following should only be changed if you need to<br />install multiple Quicksilver Forums on the same database.</td>
    </tr>
    <tr>
        <td><b>Table Prefix</b></td>
        <td><input class='input' type='text' name='prefix' value='<?php echo $this->sets['prefix']; ?>' /></td>
    </tr>
    <tr>
        <td colspan='2' align='center'><br /><input type='submit' value='Continue' /></td>
    </tr>
    </table>
    </form>
