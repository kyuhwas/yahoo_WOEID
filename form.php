<?php
include 'get_countries.php';
?>

<form action="#" method="POST" >

    <table>
        <tr>
            <td>Please Select the Country</td>
            <td>
                <select name="ddlCountry">
<?php
        foreach ($array_country_list as $country) {
            ?>
                    <option value="<?php echo $country['id'] ?>"><?php echo $country['name'] ?></option>              
                    
         <?php           
        }
?>            
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="submit" />
            </td>
        </tr>
    </table>
</form>    
