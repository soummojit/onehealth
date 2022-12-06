<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
    <meta charset="utf-8" />
    <title>Database</title>
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
    <link rel="stylesheet" type="text/css" href="css/data.css">
</head>

<body>
    <form id="form1" runat="server">
        <div id="wrapper">
            <h1>Sortable Table of Database</h1>
            <table id="keywords" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th><span>Full Name</span></th>
                        <th><span>Email</span></th>
                        <th><span>Phone</span></th>
                        <th><span>Address</span></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $con = mysqli_connect("localhost", "root", "", "dbsoummo");
                        if($con-> connect_error)
                        {
                            die("Connection failed:". $con-> connect_error);
                        }

                        $sql = "SELECT name, email, phone, address from dt";
                        $result = $con-> query($sql);

                        if($result-> num_rows > 0)
                        {
                            while ($row = $result-> fetch_assoc())
                            {
                                echo "<tr><td>". $row["name"] ."</td><td>". $row["email"] ."</td><td>". $row["phone"] ."</td><td>". $row["address"] ."</td></tr>" ;
                            }
                            
                        }

                        else{
                            //
                        }

                        $con-> close();
                    ?>
                    
                </tbody>
            </table>
            <button type="button" class="glow-on-hover" onclick='location.href="remove.php"'>Clear Data</button>
        </div>

    </form>
</body>

</html>