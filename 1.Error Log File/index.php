<html>
    <body>
        <form action="save_data.php" method="POST">
            <table align="center" width="50%">
                <tr>
                    <td width="25%"><h3>Enter Address</h3></td>
                    <td width="1%">:</td>
                    <td><textarea name="Address"></textarea></td>
                </tr>
                <tr>
                    <td width="25%"><h3>Enter Email</h3></td>
                    <td width="1%">:</td>
                    <td><input type="text" name="Email" /></td>
                </tr>
                <tr>
                    <td width="25%"><h3>Date of Birth</h3></td>
                    <td width="1%">:</td>
                    <td><input type="date" name="DOB" /></td>
                </tr>
                <tr>
                    <td width="25%"><h3>Country</h3></td>
                    <td width="1%">:</td>
                    <td>
                        <select name="country" id="country">
                            <option value="india">india</option>
                            <option value="usa">usa</option>
                            <option value="uk">uk </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="25%"><h3>State</h3></td>
                    <td width="1%">:</td>
                    <td>
                        <select name="state" id="state">
                            <option value="gujarat"> gujarat </option>
                            <option value="kerala"> kerala </option>
                            <option value="maharastra"> maharastra </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="25%"><h3>City</h3></td>
                    <td width="1%">:</td>
                    <td>
                        <select name="city" id="ciy">
                            <option value="rajkot"> rajkot </option>
                            <option value="jamnagar"> jamnagar </option>
                            <option value="delhi"> delhi </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="25%"></td>
                    <td><input type="submit" name="s"></td>
                </tr>
            </table>
        </form>
    </body>
</html>