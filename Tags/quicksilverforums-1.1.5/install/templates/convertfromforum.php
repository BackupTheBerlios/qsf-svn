    What forum software are you converting from?<br /><br />
    <form action='<?php echo $this->self; ?>?mode=convert&amp;step=8' method='post'>
    <table border='0' cellpadding='4' cellspacing='0'>
        <tr>
            <td>
            Select forum:
            <select name='board_name'>
                <option value='convert_ikon312a.php'>Ikonboard 3.12a</option>
                <option value='convert_invision131f.php'>Invisionboard 1.31f</option>
                <option value='convert_phpbb2.php'>phpBB2 2.x (any 2.x version)</option>
                <option value='convert_yabbse.php'>YaBB SE 1.5.5</option>
                <option value='convert_smf105.php'>Simple Machines Forum 1.05</option>
            </select><br /><br />
            <input type='submit' name='submit' value='Continue' />
            </td>
        </tr>
    </table>
    </form>
