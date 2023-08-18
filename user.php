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
    <title>Airtel - Ticket</title>
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
            font-size: 15px;
            border: 1px solid #502a2a;    
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
            border: 1px solid #502a2a;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid #502a2a;
            padding: 12px;
            text-align: center;
        }
 
        td {
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
        
    </style>
    <!-- <link rel="stylesheet" href="table.css"> -->
</head>
 
<body>
    <div id="myModal" class="modal">
		<div class="modal-content" >
		  <span class="close" id="container">&times;</span>
		  <p style="font-size: 20px;">Enter Standard Reopen Remarks: <input type="text"></p>
          <p style="font-size: 20px;">Enter Reopen Remarks: <input type="text"></p>
          <input type="submit">
		</div>
	</div>
    <section>
        <h1>User Ticket Table</h1>
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
                <!-- <th>User Action</th> -->
                <th>Latest Resolution</th>
                <th>Latest Remark</th>
                <!-- <th>Reopen Count</th> -->
                <!-- <th>Latest Reopen</th> -->
                <!-- <th>Latest Reopen Remarks</th> -->
                <!-- <th>Time to Resovle</th> -->
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
                <!-- <td><?php if ($rows['Status'] != "Open") { ?><button class="reopen" id="reopen">Reopen</button><?php } ?></td> -->
                <td><?php echo $rows['UserAction'];?></td>
                <td><?php echo $rows['standardremarks'];?></td>
                <!-- <td><?php echo $rows['reopencount'];?></td>
                <td><?php echo $rows['reopenRemark'];?></td>
                <td><?php echo $rows['reopenRemark'];?></td>
                <td><?php echo $rows['timeToResolve'];?></td> -->
            </tr>
            <?php
                }
            ?>
            <!-- <td><button class="reopen" id="reopen">Reopen</button></td> -->
        </table>
    </section>
</body>
<script>
    const modal = document.getElementById("myModal");
    const openModalButton = document.getElementById("reopen");
    const closeSpan = document.getElementsByClassName("close")[0];
    openModalButton.addEventListener("click", function () {
    modal.style.display = "block";
    });
    closeSpan.addEventListener("click", function () {
    modal.style.display = "none";
    });
    window.addEventListener("click", function (event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
    });
</script>
 
</html>