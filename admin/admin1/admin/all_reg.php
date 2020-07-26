 <?php

    $servername = "localhost";
    $username = "spycolle_root";
    $password = "jshavantkumar555";

    $count = 0;
    $res = "";

    $dbname = "spycolle_spy";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $file_dir = "doc-uploads/";
    if (!$conn) {
        echo "";
    } else {
        $sql = "SELECT * FROM registration order by regDate desc";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            $res = "<table style='width:100%;'><tr><th>Serial No.</th><th>Class</th><th>Reg. Date</th><th>Student Name</th><th>Mobile Number</th><th>Adhar Number</th><th>PaymentS tatus</th><th>Admit Card</th><th>Marks Sheet</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                $count++;
                $res = $res . "<tr>";
                $res = $res . "<th>" . $count . "</th>";
                $res = $res . "<td>" . $row['regDate'] . "</td>";
                $res = $res . "<td>" . $row['class'] . "</td>";
                $res = $res . "<td>" . $row['studentName'] . "</td>";
                $res = $res . "<td>" . $row['mobileNumber'] . "</td>";
                $res = $res . "<td>" . $row['adharNumber'] . "</td>";
                $res = $res . "<td>" . $row['paymentStatus'] . "</td>";
                $res = $res . "<td><a download=" . $row['admitCard'] . " target='_BLANK' href='" . $file_dir . $row['admitCard'] . "'>Download<a/></td>";
                $res = $res . "<td><a download=" . $row['marksSheet'] . " target='_BLANK' href='" . $file_dir . $row['marksSheet'] . "'>Download<a/></td>";
                $res = $res . "</tr>";
            }
            $res = $res . "</table>";
        } else {
            $res = "<center><h3 style='margin-top: 150px;'>No data available to show</h3></center>";
        }

        mysqli_close($conn);
        echo $res;
    }
    ?> 