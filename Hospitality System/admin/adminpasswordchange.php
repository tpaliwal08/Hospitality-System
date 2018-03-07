[<?php # Script 7.8 - password.php
// This page lets a user change their password.

// Set the page title and include the HTML header.
$page_title = 'Change Your Password';
include ('./header.html');

// Check if the form has been submitted.
if (isset($_POST['submitted'])) {

    require_once ('mysql_connect.php'); // Connect to the db.
    
    // Create function for escaping the data.
    function escape_data ($data) {
        global $dbc; // Need the connection.
        if (ini_get('magic_quotes_gpc')) {
            $data = stripslashes($data);
        }
        return mysql_real_escape_string (trim($data), $dbc);
    } // End of function.
    
    $errors = array(); // Initialize error array.
    
    // Check for an email address.
    if (empty($_POST['email'])) {
        $errors[] = 'You forgot to enter your email address.';
    } else {
        $e = escape_data($_POST['email']);
    }
    
    // Check for an existing password.
    if (empty($_POST['password'])) {
        $errors[] = 'You forgot to enter your existing password.';
    } else { 
        $p = escape_data($POST['password']);
    }
    
    // Check for a password and match against the confirmed password.
    if (!empty($_POST['password1'])) {
            if ($_POST['password1'] != $_POST['password2']) {
                $errors[] = 'Your new password did not match the confirmed new password.';
    } else {
        $np = escape_data($_POST['password1']);
        }
    ] else { 
        $errors[] = 'You forgot to enter your new password.';
    }
    
    if (empty($errors)) { // If everythings OK.
    
        // Check that theyve entereed the right email address/password combination.
        $query = "SELECT user_id FROM users WHERE (email='$e' AND password=SHA('$p') )";
        $result = mysql_query($query);
        $num = mysql_num_rows($result);
        if (mysql_num_rows($result) == 1) { // Match was made.
        
            // Get the user_id.
            $row = mysql_fetch_array ($result, MYSQL_NUM);
            
            // Make the UPDATE query.
            $query = "UPDATE users SET password=SHA('$np') WHERE user_id=$row[0]";
            $result = @mysql_query ($query);
            if (mysql_affected_rows() == 1) { // If it ran OK.
            
                // Send an email, if desired.
                
                // Print a message.
                echo'<h1 id="mainhead">Thank you!</h1>
                <p>Your password has been updated.  In Chapter 9 you will actually be able to log in! </p><p><br/></p>';
                
                // Include the footer and quit the script (to not show the form).
                include ('./footer.html');
                exit();
                
            } else { // If it did not run OK.
                echo '<h1 id="mainhead">System Error</h1>
                <p class="error">Your password could not be changed due to a system error. We apologize.</p>'; // Public message.
                echo '<p>' . mysql_error() . '<br/><br/>Query: ' . $query . '</p>'; // Debugging message.
                include ('./footer.html');
                exit();
            }
            
        } else { // Invalid email address/password combination.
            echo '<h1 id="mainhead">Error!</h1>
            <p class="error">The email address and password do not match those on file.</p>';
        } 
        
    } else { // Report the errors.
    
        echo '<h1 id="mainhead">Error!</h1>
        <p class="error">The following errors(s) occurred:<br/>';
        foreach ($errors as $msg) { // Print each error.
            echo " - $msg<br/>\n";
        }
        echo '</p><p>Please try again.</p><p><br/></p>';
        
    } // End of if (empty($errors)) IF.
    
        mysql_close(); // Close the database connection.
        
    } // End of the main Submit conditional.
    ?>
    <h2>Change Your Password</h2>
    <form action="password.php" method="post">
        <p>Email Address: <input type="text" name="email" size="20" maxlength="40" value="<?php if (isset(_POST['email'])) echo $_POST['email']; ?>" /></p>
        <p>Current Password: <input type="password" name="password" size="10" maxlength="20" /></p>
        <p>New Password: <input type="password" name="password1" size="10" maxlength="20" /></p>
        <p>Confirm New Password: <input type="password" name="password2" size="10" maxlength="20" /></p>
        <p><input type="submit" name="submit" value="Change My Password" /></p>
        <input type="hidden" name="submitted" value="TRUE" />
    </form>
    <?php
    include ('./footer.html');
    ?>/code]

Could someone please point out the mistake, on what line and provide some code to fix it?