<!-- PHP code to establish connection with the localserver -->
<?php
 
 $user = 'root';
 $password = '';
  
 $database = 'airtel';
 $servername='localhost';
 $mysqli = new mysqli($servername, $user, $password, $database);
 
 if ($mysqli->connect_error) {
     die('Connect Error (' .
     $mysqli->connect_errno . ') '.
     $mysqli->connect_error);
 }
 $sql = "SELECT * FROM query";
//  order by id ASC
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Airtel -Tool Owner Ticket</title>
    <link rel="icon" type="image/x-icon" href="https://assets.airtel.in/static-assets/new-home/img/favicon.ico"> 
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        body{
            color: red;
            background-color: black;
        }
        body::-webkit-scrollbar{
            display: block;
            width: 5px;
            background-color: #ff0000;
        }
        body::-webkit-scrollbar-thumb{
            background-color: #000000;
            border-radius: 50px;
        }
        table {
            margin: 0 auto;
            font-size: 12px;
            
            border: 1px solid black;   
            /* max-width: 100%;
    border: none;
    border-spacing: 0;
    text-align: left;
    overflow-x: hidden;  */
        }
 
        h1 {
            text-align: center;
            color: red;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            
            background-color: transparent;
            border: 1px solid black;
        }
 
        th,
        td {
            /* width:10%; */
            /* font-size: 15px; */
            font-weight: bold;
            border: 1px solid #502a2a;
            padding: 2px;
            text-align: center;
        }
 
        td {
            /* font-weight: 80px; */
            font-weight: lighter;
            color: white;
        }
        .reopen{
            display: block;
            width: fit-content;
            padding: 1px;
            background-color: black;
            border-radius: 2px;
            text-decoration: none;
            color: white;
            transition: background  0.5s;
        }
        .reopen:hover{
            background: #ff004f;
            cursor: pointer;
        }
        .close{
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            margin-top: 0px;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        .modal-content {
            color: black;
            background-color: #ffffff;
            margin: 15% auto;
            padding: 20px;
            width: 80%;
        }
.modal {
    /* display: none; */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
  }
  
  .modal-content {
	color: black;
    background-color: #ffffff;
    margin: 15% auto;
    padding: 20px;
    width: 80%;
  }
  .close{
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
	margin-top: 0px;
  }
  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

    </style>
    
    <!-- <link rel="stylesheet" href="table.css"> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
 
<body>
<?php
if (isset($_POST['id']) && isset($_POST['olm']) && isset($_POST['email'])) {
    $id = $_POST['id'];
    $editedOLM = $_POST['olm'];
    $editedEmail = $_POST['email'];
    // ... (repeat for other fields)

    // Connect to the database (replace with actual credentials)
    $connection = new mysqli("localhost", "username", "password", "database_name");

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Update the data in the database using the ID
    $sql = "UPDATE query SET OLM = '$editedOLM', email = '$editedEmail' WHERE uni = $id"; // Adjust the query as needed
    if ($connection->query($sql) === TRUE) {
        echo "Data updated successfully";
    } else {
        echo "Error updating data: " . $connection->error;
    }

    $connection->close();
}
?>

<div id="editForm" class="modal" style="display: none;">
    <!-- <input type="text" id="editOLM" name="editOLM">
    <input type="text" id="editEmail" name="editEmail"> -->
    <!-- ... (repeat for other form fields) -->
    <!-- <button id="saveEditButton">Save</button> -->
    <div class="modal-content" >
		  <span class="close" id="container">&times;</span>
		  <p style="font-size: 20px;">Enter Standard Resolution Remarks :  ​<input type="text" id="editOLM" name="editOLM"></p>
          <p style="font-size: 20px;">Enter Resolution Remarks: <input type="text" id="editEmail" name="editEmail"></p>
          <button id="saveEditButton">Save</button>
	</div>
</div>

    <!-- <div id="myModal" class="modal">
		<div class="modal-content" >
		  <span class="close" id="container">&times;</span>
		  <p style="font-size: 20px;">Enter Standard Resolution Remarks: <input type="text"></p>
          <p style="font-size: 20px;">Enter Reopen Remarks: <input type="text"></p>
          <input type="submit">
		</div>
	</div> -->
    <section>
        <h1>Tool Owner Ticket table</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>UserName</th>
                <th>OLM ID</th>
                <th>Email ID</th>
                <th>Digital Tool</th>
                <th>Raise Date</th>
                <th>Request ID</th>
                <th>Request Category</th>
                <th>Request SubCategory</th>
                <!-- <th>Support Document</th> -->
                <th>Request Status</th>
                <th>User Action</th>
                <th>Latest Resolution</th>
                <th>Latest Remark</th>
                <!-- <th>Reopen Count</th> -->
                <!-- <th>Latest Reopen</th> -->
                <!-- <th>Latest Reopen Remarks</th> -->
                <!-- <th>Closure Feedback</th> -->
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['OLM'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['tool'];?></td>
                <td><?php echo $rows['Request_Date'];?></td>
                <td><?php echo $rows['uni'];?></td>
                <td><?php echo $rows['support'];?></td>
                <td><?php echo $rows['subcategory'];?></td>
                <!-- <td><?php echo $rows['UserAction'];?></td> -->
                <td><?php echo $rows['Status'];?></td>
                <td><?php if ($rows['Status'] != "Close") { ?><button class="reopen" data-id="<?php echo $rows['uni']; ?>">Closed</button><?php } ?></td>
                <!-- <td><button class="reopen" data-id="<?php echo $rows['uni']; ?>">Closed</button></td> -->
                <td><?php echo $rows['latestresolution'];?></td>
                <td><?php echo $rows['standardremarks'];?></td>
                <!-- <td><?php echo $rows['reopencount'];?></td> -->
                <!-- <td><?php echo $rows['reopenRemark'];?></td> -->
                <!-- <td><?php echo $rows['reopenRemark'];?></td> -->
                <!-- <td><?php echo $rows['timeToResolve'];?></td> -->
            </tr>
            <?php
                }
            ?>
            <!-- <td><button class="reopen" id="reopen">Reopen</button></td> -->
        </table>
    </section>
</body>
<script>
$(document).ready(function() {
        $(".reopen").click(function() {
            var id = $(this).data("id");
            var row = $(this).closest("tr");

            var olm = row.find("td:eq(11)").text();
            var email = row.find("td:eq(10)").text();

            $("#editOLM").val(olm);
            $("#editEmail").val(email);
            $("#editForm").show();
        });

        $("#saveEditButton").click(function() {
            var editedOLM = $("#editOLM").val();
            var editedEmail = $("#editEmail").val();
            var id = $(".reopen").data("id");

            $.ajax({
                url: "toolowner.php",
                type: "POST",
                data: {
                    id: id,
                    olm: editedOLM,
                    email: editedEmail,
                },
                success: function(response) {
                    console.log(response);
                    var row = $(".reopen[data-id='" + id + "']").closest("tr");
                    row.find("td:eq(11)").text(editedOLM);
                    row.find("td:eq(10)").text(editedEmail);
                    row.find("td:eq(8)").text("awaiting");

                    $("#editForm").hide();
                },
                error: function() {
                    console.error("Error updating data");
                }
            });
        });
    });

</script>
<script>
//     const modal = document.getElementById("myModal");
// const openModalButton = document.getElementById("openModalButton");
// const closeSpan = document.getElementsByClassName("close")[0];
// openModalButton.addEventListener("click", function () {
//   modal.style.display = "block";
// });
// closeSpan.addEventListener("click", function () {
//   modal.style.display = "none";
// });
window.addEventListener("click", function (event) {
  if (event.target === editForm) {
    editForm.style.display = "none";
  }
});

</script>

 
</html>