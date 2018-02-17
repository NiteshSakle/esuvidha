<!DOCTYPE html>

<html>
    <script type="text/javascript">
        function ShowHideDiv() {
            var chkYes = document.getElementById("chkYes");
            var addr = document.getElementById("address");
            addr.style.display = chkYes.checked ? "" : "none";
        }
    </script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style>
        body {font-family: Arial;}
        * {box-sizing: border-box}

        /* Full-width input fields */
        input[type=text], input[type=password],input[type=number], input[type=email], input[type=date] {
            width: 70%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus, input[type=number]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity:1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .container {
            padding: 16px;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
            .cancelbtn, .signupbtn {
                width: 100%;
            }
        }
        td:first-child { 
            width: 20%
        }
    </style>
    <body>
        <div class="heading">
            <img src="images/logo.png" alt="Mahagenco"/>        
            <h1 class="headline">KHAPERKHEDA THERMAL POWER STATION</h1>
        </div>
        <form method="post" action="addquarterapp.php" style="border:1px solid #ccc">
            <div class="container">
                <h1><center>QUARTER APPLICATION FORM</center></h1>
                <hr>
                <table style="width: 75%;margin: 0px auto">
                    <td> <b> Applicant's Name </b> </td>
                    <td><input type="text" placeholder="Enter Name" name="empname" required></td>
                    </tr>
                    <tr>
                        <td> <b> SAP ID </b> </td>
                        <td><input type="number" placeholder="Enter SAP ID" name="sapid" required></td>
                    </tr>

                    <tr>
                        <td> <b> CPF NO </b> </td>
                        <td><input type="number" placeholder="Enter CPF NO" name="cpfno" required></td>
                    </tr>

                    <tr>
                        <td> <b> Designation </b> </td>
                        <td><input type="text" placeholder="Enter Designation" name="designation" required></td>
                    </tr>

                    <tr>
                        <td> <b> Section </b> </td>
                        <td><input type="text" placeholder="Enter Section" name="section" required></td>
                    </tr>

                    <tr>
                        <td> <b> Mobile No. </b> </td>
                        <td><input type="number" placeholder="Enter Mobile Number" name="mobileno" required></td>
                    </tr>

                    <tr>
                        <td> <b> Email </b> </td>
                        <td><input type="email" placeholder="Enter Email" name="email"></td>
                    </tr>

                    <tr>
                        <td> <b> Birthdate </b> </td>
                        <td><input type="date"  name="dob"></td>
                    </tr>

                    <tr>
                        <td><b> Holding a quarter currently?</b></td>
                        <td>
                            <label for="chkYes">
                                <input type="radio" id="chkYes" name="chkqrt" value="yes" onclick="ShowHideDiv()" required=""/>
                                Yes
                            </label>
                            <label for="chkNo">
                                <input type="radio" id="chkNo" name="chkqrt" value="no" onclick="ShowHideDiv()" required=""/>
                                No
                            </label>
                        </td>
                    </tr>
                    <tr id="address" style="display: none">
                        <td><b> Address </b></td>
                        <td>
                            Type: <select name="type" id="type" class="" style="margin-left: 9%">
                                <option class="" value="">Type</option>
                                <option class="" value="A">A</option>
                                <option class="" value="B">B</option>
                                <option class="" value="C">C</option>
                                <option class="" value="D">D</option>
                                <option class="" value="E">E</option>
                                <option class="" value="F">F</option>
                            </select>
                            <br/>
                            Bulid no:
                            <input type="number" id="buildno_txt" placeholder="Building Number" name="buildno" value="" size=2" style="width: 74%; margin: 10px">
                            <br/>
                            Qrt no:  &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="number" id="qrtno_txt" placeholder="Quarter number" name="qrtno" value="" size="3" style="width: 74%">
                        </td>
                    </tr>

                    <tr>
                        <td> <b> Remark </b> </td>
                        <td>
                            <textarea name="remark" id="remark" cols="75" rows="6" wrap="soft" style="background: #f1f1f1;"></textarea>
                        </td>

                    </tr>
                </table>
                <div class="clearfix">
                    <a href="index.php" style="text-align: center;margin: 8px 0;color: white" class="cancelbtn">Cancel</a>
                    <button type="submit" class="signupbtn">Apply </button>
                </div>
            </div>
        </form>

    </body>
</html>
