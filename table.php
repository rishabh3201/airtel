<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://assets.airtel.in/static-assets/new-home/img/favicon.ico"> 
    <title>Ticket Table</title>
    <meta charset="UTF-8">
     <title>Glimpse Table</title>
     <style>
         table {
             margin-top: -210px;
             font-size: 15px;
             border: 1px solid red;
         }

        h2 {
            text-align: center;
             text-align: center;
             font-size: xx-large;
             font-family: 'Gill Sans', 'Gill Sans MT',
             ' Calibri', 'Trebuchet MS', 'sans-serif';
         }
  
         td {
             background-color: black;
             border: 2px solid red;
         }
  
         th,
         td {
             font-weight: bold;
             border: 1px solid white;
             padding: 05px;
             text-align: center;
         }
  
         td {
             font-weight: lighter;
         }
     </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="table.css"> 
</head>
<body>
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
 $sql = " SELECT * FROM query order by id ASC";
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>
  
 <body>
<div id="header">
<video autoplay loop muted plays-inline class="back-video" id="back-video">
				<source src="black_-_13495 (720p).mp4" type="video/mp4">
		</video>
<div class="container">
 <nav class="navbar">
 <img src="airtel.png" class="logo" style="background-color: transparent;">
    <ul id="sidemenu">
                    <li><a href="help.php" id="container">Home</a></li>
					<li><a href="help.php #services" id="container">Tools</a></li>
					<li><a href="help.php #fun" id="container">Fun</a></li>
					<li><a href="help.php #contact" id="container">Help</a></li>
					<li><a href="table.php #services" id="container1">Ticket</a></li>
					<li class="hi"><div class="clock">
						<div class="hour">
							<div class="hr" id="hr"></div>
						</div>
						<div class="min">
							<div class="mn" id="mn"></div>
						</div>
						<a href="#contact" id="container">. </a>
						<div class="sec">
							<div class="sc" id="sc">
				
							</div>
						</div>
					</div></li>
					<i class="fa-solid fa-circle-xmark" onclick="closemenu()"></i>
    <ul>
    <i class="fa-solid fa-bars" onclick="openmenu()"></i>

        
</nav>
</div>
<div class="header-text">
		<p></p>
		<h1><span>Network</span> Digital Suite</h1>
	</div>
</div>
<div id="services">
		<div class="container">
			<h1 class="sub-title">Ticket Table</h1>
			<div class="services-list">
                
        <section class="ticket">
        <table>
        
            <tr class="head">
                <th>Unique_id</th>
                <th>Request_Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>OLM</th>
                <th>Tool</th>
                <th>Support</th>
                <th>Message</th>
                <th>Status</th>
            </tr>
            <?php
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['unique_id'];?></td>
                <td><?php echo $rows['Request_Date'];?></td>
                <td><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['OLM'];?></td>
                <td><?php echo $rows['tool'];?></td>
                <td><?php echo $rows['support'];?></td>
                <td><?php echo $rows['message'];?></td>
                <td><?php echo $rows['Status'];?></td>
            </tr>
            <?php
                }
            ?>
            
        </table>
    </section>

            </div>
        </div>
</div>

 
 
     
 </body>
  
<script>
    document.getElementById("deleteButton").addEventListener("click", function() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "delete.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            alert(xhr.responseText);
        }
    };
    xhr.send();
});

<script>
<script>
		var sidemeu=document.getElementById("sidemenu");
		function openmenu(){
			sidemeu.style.right = "0";
		}
		function closemenu(){
			sidemeu.style.right = "-200px";

		}
</script>
</html>
</body>
<script type="text/javascript">
		const deg=6;
		const hr= document.querySelector('#hr');
		const mn =document.querySelector('#mn');
		const sc= document.querySelector('#sc');
		
		setInterval(()=>{
			let day = new Date();
			let hh = day.getHours()*30;
			let mm = day.getMinutes()*deg;
			let ss = day.getSeconds()*deg;
			hr.style.transform = `rotateZ(${(hh)+(mm/12)}deg)`;
			mn.style.transform = `rotateZ(${mm}deg)`;
			sc.style.transform = `rotateZ(${ss}deg)`;
		})
	</script>
    <script>
		window.addEventListener("scroll", function () {
		const navbar = document.querySelector(".navbar");
		const scrollPosition = window.scrollY;

		if (scrollPosition > 100) {
			navbar.style.backgroundColor = "black"; 
		} else {
			navbar.style.backgroundColor = "transparent"; 	
		}
		});
	  </script>
</html> -->


<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Ticket Table</title>
    <link rel="stylesheet" href="style.css">
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;

			font-size: large;
			border: 2px solid red;
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
		h2 {
			text-align: center;
			color: red;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: black;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid white;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
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
 <body>
<div id="header">
		<video autoplay loop muted plays-inline class="back-video" id="back-video">
				<source src="black_-_13495 (720p).mp4" type="video/mp4">
		</video>
		<div class="container">
			
			<nav class="navbar">
				
				<img src="airtel.png" class="logo" style="background-color: transparent;">
				<!-- <img src="airtel.png" class="logo"> -->
				
				
				
				<ul id="sidemenu">
					<!-- <audio controls autoplay loop ><source src="next.ogg" type="audio/mp3"><i class="fa-solid fa-volume"></i></audio> -->
					<li><a href="help.php" id="container">Home</a></li>
					<li><a href="help.php #services" id="container">Tools</a></li>
					<li><a href="help.php #fun" id="container">Fun</a></li>
					<li><a href="help.php #contact" id="container">Help</a></li>
					<li><a href="table.php #ticket" id="container1">Ticket</a></li>
					<li class="hi"><div class="clock">
						<div class="hour">
							<div class="hr" id="hr"></div>
						</div>
						<div class="min">
							<div class="mn" id="mn"></div>
						</div>
						<a href="#contact" id="container">. </a>
						<div class="sec">
							<div class="sc" id="sc">
				
							</div>
						</div>
					</div></li>
					<i class="fa-solid fa-circle-xmark" onclick="closemenu()"></i>
					
				</ul>
				
				<i class="fa-solid fa-bars" onclick="openmenu()"></i>
			</nav>
		</div>
		<br>
		<br>
        <div class="header-text">
			<p></p>
			<h1><span>Network</span> Digital Suite</h1>
		</div>
	</div>
	
</div>
<div id="ticket"></div>
<div >
		<div class="container4" >
			<h2 class="sub-title" >Ticket Table</h2>
			<div class="services-list">
	<section class="ticket" >
		<!-- <h2>Ticket Table</h2> -->
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
                <th>Unique_id</th>
                <th>Request_Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>OLM</th>
                <th>Tool</th>
                <th>Support</th>
                <th>Message</th>
                <th>Status</th>
			</tr>
			<?php
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
                <td><?php echo $rows['unique_id'];?></td>
                <td><?php echo $rows['Request_Date'];?></td>
                <td><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['OLM'];?></td>
                <td><?php echo $rows['tool'];?></td>
                <td><?php echo $rows['support'];?></td>
                <td><?php echo $rows['message'];?></td>
                <td><?php echo $rows['Status'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
		</section>
            </div>
            </div>
            </div>

			</body>
            <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
        $(document).ready(function(){
            $('form').submit(function(event){
                event.preventDefault();
                $.ajax({
                    type: $(this).attr('method'),
                    data: $('form').serialize(),
                    success: function(data) {
                        $('#result').html("Successful Submitted");
                        $(".myform")[0].reset();
                    }
                });
            });
        });
    </script>
	<!-- <script>
		document.addEventListener("DOMContentLoaded", function () {
    	const form = document.getElementById("myForm");
    	const submitMessage = document.getElementById("submit-message");

    	form.addEventListener("submit", function (event) {
        event.preventDefault();
        const responseMessage = "Record inserted successfully";
        submitMessage.textContent = responseMessage;
        submitMessage.style.display = "block";
    });
});

	</script> -->
	<script>
		document.getElementById('back-video').playbackRate=0.5;
	</script>
	<script>
		var tablinks=document.getElementsByClassName("tab-links");
		var tabcontents=document.getElementsByClassName("tab-contents");
		function opentab(tabname){
			for(tablink of tablinks){
				tablink.classList.remove("active-link");
			}
			for(tabcontent of tabcontents){
				tabcontent.classList.remove("active-tab");
			}
			event.currentTarget.classList.add("active-link");
			document.getElementById(tabname).classList.add("active-tab");
		}

	</script>
	<script >
		var sidemeu=document.getElementById("sidemenu");
		function openmenu(){
			sidemeu.style.right = "0";
		}
		function closemenu(){
			sidemeu.style.right = "-200px";

		}
	</script>
	<script src="news.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="responses.js">
		
	</script>
	<script src="learnmore.js"></script>
	<script src="chat.js">
			
	</script>
	<script type="text/javascript">
		const deg=6;
		const hr= document.querySelector('#hr');
		const mn =document.querySelector('#mn');
		const sc= document.querySelector('#sc');
		
		setInterval(()=>{
			let day = new Date();
			let hh = day.getHours()*30;
			let mm = day.getMinutes()*deg;
			let ss = day.getSeconds()*deg;
			hr.style.transform = `rotateZ(${(hh)+(mm/12)}deg)`;
			mn.style.transform = `rotateZ(${mm}deg)`;
			sc.style.transform = `rotateZ(${ss}deg)`;
		})
	</script>
	<script>
		var cursor = document.querySelector('.cursor');
			var blur = document.querySelector('.cursor-blur');
		document.addEventListener('mousemove', function(e) {
  			cursor.style.left = e.clientX - cursor.clientWidth / 2 + 'px';
  			cursor.style.top = e.clientY - cursor.clientHeight / 2 + 'px';
  			blur.style.left = e.x-150 + 'px';
  			blur.style.top = e.y - 150 + 'px';
			// blur.style.left = e.clientX - cursor.clientWidth / 2 + 'px';
  			// blur.style.top = e.clientY - cursor.clientHeight / 2 + 'px';
		});
		var sel = document.querySelectorAll('#container')
		sel.forEach(function(elem){
			elem.addEventListener("mouseenter",function(){
				cursor.style.scale=1.7
				
			})
		})
		sel.forEach(function(elem){
			elem.addEventListener("mouseleave",function(){
				cursor.style.scale=1
				
			})
		})
	</script>
	<script>
		const leaderboardData = [
  { name: "John", score: 350 },
  { name: "Alice", score: 420 },
  { name: "Bob", score: 280 },
  { name: "Eve", score: 390 },
  { name: "Chris", score: 310 }
];

function displayLeaderboard() {
  const leaderboardList = document.getElementById('leaderboard-list');
  leaderboardList.innerHTML = '';

  leaderboardData.sort((a, b) => b.score - a.score);

  leaderboardData.forEach((entry, index) => {
    const listItem = document.createElement('li');
    listItem.textContent = `${index + 1}. ${entry.name} - ${entry.score}`;
    leaderboardList.appendChild(listItem);
  });
}

displayLeaderboard();

	</script>
	<script>
		var tabs = document.querySelectorAll(".lboard_tabs ul li");
var today = document.querySelector(".today");
var month = document.querySelector(".month");
var year = document.querySelector(".year");
var items = document.querySelectorAll(".lboard_item");

tabs.forEach(function(tab){
	tab.addEventListener("click", function(){
		var currenttab = tab.getAttribute("data-li");
		
		tabs.forEach(function(tab){
			tab.classList.remove("active");
		})

		tab.classList.add("active");

		items.forEach(function(item){
			item.style.display = "none";
		})

		if(currenttab == "today"){
			today.style.display = "block";
		}
		else if(currenttab == "month"){
			month.style.display = "block";
		}
		else{
			year.style.display = "block";
		}

	})
})
	</script>
	<!-- pacman -->
	<script>
		window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			
			gtag('config', 'UA-121647007-2');
	</script>
	<script>
		function simulateKeyup(code) { 
				var e = jQuery.Event("keyup");
				e.keyCode = code;
				jQuery('body').trigger(e);
			}
			function simulateKeydown(code) { 
				var e = jQuery.Event("keydown");
				e.keyCode = code;
				jQuery('body').trigger(e);
			}
			
			$(document).ready(function() { 
				//$.mobile.loading().hide();
				loadAllSound();
				
				HELP_TIMER = setInterval('blinkHelp()', HELP_DELAY);
				
				initHome();
				
				$(".sound").click(function(e) { 
					e.stopPropagation();
					
					var sound = $(this).attr("data-sound");
					if ( sound === "on" ) { 
						$(".sound").attr("data-sound", "off");
						$(".sound").find("img").attr("src", "img/sound-off.png");
						GROUP_SOUND.mute();
					} else { 
						$(".sound").attr("data-sound", "on");
						$(".sound").find("img").attr("src", "img/sound-on.png");
						GROUP_SOUND.unmute();
					}
				});
				
				$(".help-button, #help").click(function(e) { 
					e.stopPropagation();
					if (!PACMAN_DEAD && !LOCK && !GAMEOVER) { 
						if ( $('#help').css("display") === "none") { 
							$('#help').fadeIn("slow");
							$(".help-button").hide();
							if ( $("#panel").css("display") !== "none") { 
								pauseGame();
							}
						} else { 
							$('#help').fadeOut("slow");
							$(".help-button").show();
						}
					}
				});
				
				$(".github,.putchu").click(function(e) { 
					e.stopPropagation();
				});
				
				$("#home").on("click touchstart", function(e) { 
					if ( $('#help').css("display") === "none") { 
						e.preventDefault();
						simulateKeydown(13);
					}
				});
				$("#control-up, #control-up-second, #control-up-big").on("mousedown touchstart", function(e) { 
					e.preventDefault();
					simulateKeydown(38);
					simulateKeyup(13);
				});
				$("#control-down, #control-down-second, #control-down-big").on("mousedown touchstart", function(e) { 
					e.preventDefault();
					simulateKeydown(40);
					simulateKeyup(13);
				});
				$("#control-left, #control-left-big").on("mousedown touchstart", function(e) { 
					e.preventDefault();
					simulateKeydown(37);
					simulateKeyup(13);
				});
				$("#control-right, #control-right-big").on("mousedown touchstart", function(e) { 
					e.preventDefault();
					simulateKeydown(39);
					simulateKeyup(13);
				});

				
				$("body").keyup(function(e) { 
					KEYDOWN = false;
				});
				
				$("body").keydown(function(e) { 
				
					if (HOME) { 
						
						initGame(true);
						
					} else { 				
						//if (!KEYDOWN) { 
							KEYDOWN = true;
							if (PACMAN_DEAD && !LOCK) { 
								erasePacman();
								resetPacman();
								drawPacman();
								
								eraseGhosts();
								resetGhosts();
								drawGhosts();
								moveGhosts();
								
								blinkSuperBubbles();
								
							} else if (e.keyCode >= 37 && e.keyCode <= 40 && !PAUSE && !PACMAN_DEAD && !LOCK) { 
								if ( e.keyCode === 39 ) { 
									movePacman(1);
								} else if ( e.keyCode === 40 ) { 
									movePacman(2);
								} else if ( e.keyCode === 37 ) { 
									movePacman(3);
								} else if ( e.keyCode === 38 ) { 
									movePacman(4);
								}
							} else if (e.keyCode === 68 && !PAUSE) { 
								// if ( $("#canvas-paths").css("display") === "none" ) { 
								// 	$("#canvas-paths").show();
								// } else { 
								// 	$("#canvas-paths").hide();
								// }
							} else if (e.keyCode === 80 && !PACMAN_DEAD && !LOCK) { 
								if (PAUSE) { 
									resumeGame();
								} else { 
									pauseGame();
								}
							} else if (GAMEOVER) { 
								initHome();
							}
						//}
					}
				});
			});
	</script>
	<!-- leaderboard -->
	<script>
		const dropdownContainer = document.querySelector(".dropdown-container");
		const dropdownContent = document.querySelector(".dropdown-content");
	  
		dropdownContainer.addEventListener("mouseover", function () {
		  dropdownContent.style.display = "block";
		});
	  
		dropdownContainer.addEventListener("mouseout", function () {
		  dropdownContent.style.display = "none";
		});
	  </script>
	  
	<script>
	</script>
	<script>
		window.addEventListener("scroll", function () {
		const navbar = document.querySelector(".navbar");
		const scrollPosition = window.scrollY;

		if (scrollPosition > 100) {
			navbar.style.backgroundColor = "black"; 
		} else {
			navbar.style.backgroundColor = "transparent"; 	
		}
		});
	  </script>


</html>
