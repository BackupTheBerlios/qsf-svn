    Board Settings<br /><br />
    <form action='<?php echo $this->self; ?>?mode=new_install&amp;step=4' method='post'>
    <table border='0' cellpadding='4' cellspacing='0'>
    <tr>
        <td><input class='input' type='text' name='board_name' value='Quicksilver Forums' size='50' /></td>
        <td>Board Name</td>
    </tr>
    <tr>
        <td><input class='input' type='text' name='board_url' value='<?php echo $url; ?>' size='50' /></td>
        <td>Board URL</td>
    </tr>
    <tr>
        <td colspan='2' align='center'><br /><input type='submit' value='Continue' /></td>
    </tr>
    </table>
    </form>

