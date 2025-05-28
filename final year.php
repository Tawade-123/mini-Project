<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 8000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #fff;
        }
        #search-bar {
            margin-bottom: 20px;
         }
        </style>

    </style>
</head>

<body>
    <div class="container">
        <!-- Add a search bar -->
        <input type="text" id="search-bar" placeholder="Search for student name only">

        <?php
        
    // Database configuration
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "fycse";

    // Create connection
    $conn = mysqli_connect($server, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to select data from the 'Basic' table
    $sql = "SELECT * FROM basicfycse";
    $result = mysqli_query($conn, $sql);

    // Check if there are any rows in the result
    if ($result && mysqli_num_rows($result) > 0) {
        // Display data in a table
        echo "<table border='1'>";
        echo "<tr><th>Roll_Number</th><th>Full_Name</th><th>DBATU_Enrollment_Number</th><th>Email_Address</th><th>Personal_Mobile_Number</th></tr>";
        // Loop through each row in the result set
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['Roll_Number']) . "</td>";
            echo "<td>"  . htmlspecialchars($row['Name_of_Students']) ."</td>";
            echo "<td>" . htmlspecialchars($row['Enrollment_number']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Email_Address']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Contact_Number']) . "</td>";
            echo "</tr>";
        }

        // Close the table
        echo "</table>";
    } else {
        // If no results found
        echo "0 results";
    }

    // Close the database connection
    mysqli_close($conn);    
        ?>

    </div>

    <script>
        // JavaScript to filter the table rows based on the search input
        document.getElementById('search-bar').addEventListener('input', function () {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById('search-bar');
            filter = input.value.toUpperCase();
            table = document.querySelector('table');
            tr = table.getElementsByTagName('tr');

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName('td')[1]; // Assuming you want to filter based on the second column (Full_Name)
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = '';
                    } else {
                        tr[i].style.display = 'none';
                    }
                }
            }
        });
    </script>
</body>

</html>