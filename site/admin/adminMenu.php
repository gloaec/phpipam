<?php
/*
 * Print Admin menu pn left if user is admin
 *************************************************/

/* verify that user is admin */
checkAdmin();

/* get all site settings */
$settings = getAllSettings();
?>

<table class="admin">

    <!-- Server management -->
    <tr class="th">
        <th>Server management</th>
    </tr>
    
    <!-- Site settings -->
    <tr id="settings" class="settings">
        <td link="Administration|settings">Server management</td>
    </tr>
   
    <!-- log -->
    <tr id="log" class="log">
        <td link="Administration|log">Log Files</td>
    </tr>
    
    <!-- space holder -->    
    <tr class="th">
        <td>&nbsp;</td>
    </tr>


    <!-- IP address management -->
    <tr class="th">
        <th>IP address management</th>
    </tr>
    
    <!-- section management -->
    <tr id="manageSection" class="manageSection">
        <td link="Administration|manageSection">Section management</td>
    </tr>
    
    <!-- subnet management -->
    <tr id="manageSubnet" class="manageSubnet">
        <td link="Administration|manageSubnet">Subnet management</td>
    </tr>

    <!-- edit instructions -->
    <tr id="instructions" class="instructions">
        <td link="Administration|instructions">Edit instructions</td>
    </tr>

    <!-- IP requests -->
    <?php
    /* show IP request link if enabled in config file!  */
    if($settings['enableIPrequests'] == 1) {    
    	print '<tr id="manageRequests" class="manageRequests">' . "\n";
        print '	<td link="Administration|manageRequests">IP requests ' . "\n";
        $requestNum = countRequestedIPaddresses();
        if($requestNum != 0) {
        	print '<span style="color:#AC001B;font-weight:bold">('. $requestNum . ')</span>' . "\n";
        }
        print '</td>' . "\n";
    	print '</tr>' . "\n";
    }
    ?>
        
    <!-- space holder -->    
    <tr class="th">
        <td>&nbsp;</td>
    </tr>
            
    <!-- user management -->
    <tr class="th">
        <th>User management</th>
    </tr>
    
    <!-- add new user -->
    <tr id="userAdd" class="userAdd">
        <td link="Administration|userAdd">Add new user</td>
    </tr>
    
    <!-- modify / delete user -->
    <tr id="userMod" class="userMod">
        <td link="Administration|userMod">Delete / modify user</td>
    </tr>

    <!-- space holder -->    
    <tr class="th">
        <td>&nbsp;</td>
    </tr>

    <!-- other -->
    <tr class="th">
        <th>Other</th>
    </tr>

    <!-- version check-->
    <tr id="versionCheck" class="versionCheck">
        <td link="Administration|versionCheck">Version check</td>
    </tr>

    <!-- export database -->
    <tr id="export" class="export">
        <td link="Administration|export">Export database</td>
    </tr>
                
</table>