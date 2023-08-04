<html>
<head>
    <style>
        .error {
            color: red;
        }
        table {
            border: 3px solid black;
            border-collapse: collapse;
        }
        h1{
            text-align: center;
        }
        th,td {
            padding: 0.5rem;
        }
        input[type=submit]{
            border: 1px solid black;       
        }
    </style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $passwordErr = $ipAddresErr = $DOBErr = $genderErr = $mobileErr = $briefinfoErr = $websiteErr = "";
    $name = $email = $password = $ipAddress = $DOB = $gender = $mobile = $brief = $website = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match('/^[A-Za-z]+(?: [A-Za-z]+){0,2}$/', $name)) {
                $nameErr = "Only letters and white spaces allowed";
            }
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!preg_match('/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/', $email)) {
                $emailErr = "Invalid email format";
            }
        }
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
            if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{7,20})/', $password)) {
                $passwordErr = "must contain an uppercase-lowercase-number-no special character.";
            }
        }
        if (empty($_POST["ipaddress"])) {
            $ipAddresErr = "IP address is required";
        } else {
            $ipAddress = test_input($_POST["ipaddress"]);
            if (!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $ipAddress)) {
                $ipAddresErr = "Drop a valid IP";
             }
        }
        if (empty($_POST["website"])) {
            $websiteErr = "Personal Website URL is required";
        } else {
            $website = test_input($_POST["website"]);
            if (!preg_match('/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/', $website)) {
                $websiteErr = "Invalid website";
            }
        }
        if (empty($_POST["dob"])) {
            $DOBErr = "Date is required";
        } else {
            $DOB = test_input($_POST["dob"]);
            if (!preg_match("/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d{2}$/", $DOB)) {
                $DOBErr = "Date-Month-Year";
            }
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        if (empty($_POST["mobile"])) {
            $mobileErr = "Mobile number is required";
        } else {
            $mobile = test_input($_POST["mobile"]);
            if (!preg_match('/^(?:\+?880|0)\d{9,10}$/', $mobile)) {
                $mobileErr = "Please enter a valid mobile number.";
            }
        }
        if (empty($_POST["info"])) {
            $briefinfoErr = "";
         } else {
            $brief = test_input($_POST["info"]);
            if (($brief > 50) ||  !preg_match('/^/^[A-Za-z0-9]$/', $brief)) {
                $briefinfoErr="Your brief info must not contain more than 50 words."; 
            }
         }
        } 
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

<h1>LAB 05</h1>
<p><span class="error">* required field.</span></p>
<div class="content">
<form method="post" action="<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" min="4" max="20">
                <span class="error">*
                    <?php echo $nameErr; ?>
                </span>
            </td>
        </tr>
        <tr>
            <td>E-mail: </td>
            <td><input type="text" name="email">
                <span class="error">*
                    <?php echo $emailErr; ?>
                </span>
            </td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="password" min="7" max="25">
                <span class="error">*
                    <?php echo $passwordErr; ?>
                </span>
            </td>
        </tr>
        <tr>
            <td>IP Address: </Address>
            </td>
            <td><input type="text" name="ipaddress">
                <span class="error">*
                    <?php echo $ipAddresErr; ?>
                </span>
            </td>
        </tr>
        <tr>
            <td>Personal Website URL: </Address>
            </td>
            <td><input type="text" name="website">
                <span class="error">*
                    <?php echo $websiteErr; ?>
                </span>
            </td>
        </tr>
        <tr>
            <td>Date of birth: </Address>
            </td>
            <td><input type="text" name="dob">
                <span class="error">*
                    <?php echo $DOBErr; ?>
                </span>
            </td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <span class="error">*
                    <?php echo $genderErr; ?>
                </span>
            </td>
        </tr>
        <tr>
            <td>Mobile number: </Address>
            </td>
            <td><input type="number" name="mobile">
                <span class="error">*
                    <?php echo $mobileErr; ?>
                </span>
            </td>
        </tr>
        <tr>
            <td>Brief Info: </Address>
            </td>
            <td><input type="text" name="info" id="textarea" cols="30" rows="30">
                <span class="error">*
                    <?php echo $briefinfoErr; ?>
                </span>
            </td>
        </tr>
        <td>
            <input type="submit" name="submit" value="Submit">
        </td>
    </table>
</form>
</div>
    <?php
    echo "<h3>Values are:</h3>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $ipAddress;
    echo "<br>";
    echo $DOB;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $mobile;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $brief;
    echo "<br>";

    ?>
</body>
</html>