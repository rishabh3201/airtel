<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Airtel</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="chat.css">
	<style>
		.container3{
			margin-top: 05px;
			margin-bottom: 01px;
			margin-right: 3px;
		}
	</style>
	<!-- <link rel="shortcut icon" type="image/x-icon" href="airtel_symbol.png" sizes="32x32"/> -->
	<link rel="icon" type="image/x-icon" href="https://assets.airtel.in/static-assets/new-home/img/favicon.ico"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<script src="https://kit.fontawesome.com/200329ca9b.js" crossorigin="anonymous"></script>
	<meta property="og:image" content="https://pacman-e281c.firebaseapp.com/img/preview.png">
	<meta property="og:url" content="https://pacman-e281c.firebaseapp.com/">
	<meta property="og:description" content="Pac-Man game written in HTML5 + CSS3 + jQuery with Canvas. This WebApp is a Responsive Web Design (RWD) website.">
	<meta property="og:title" content="Lucio PANEPINTO - Pac-Man">
		
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
	<meta name="description" content="Pac-Man game written in HTML5 + CSS3 + jQuery with Canvas. This WebApp is a Responsive Web Design (RWD) website." />
	<meta name="keywords" content="pacman, pac-man, pac-man online, pacman online, online, online games, games, free, puzzle, lucio panepinto, lucio, panepinto, html, html5, css, css3, javascript, jquery, rwd, responsive, responsive web design, responsive web, web design, canvas, draw" />

	<!-- <link rel="stylesheet" type="text/css" href="css/pacman.css" />
	<link rel="stylesheet" type="text/css" href="css/pacman-home.css" /> -->
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-mobile.js"></script>
	<script type="text/javascript" src="js/jquery-buzz.js"></script>
		
	<script type="text/javascript" src="js/game.js"></script>
	<script type="text/javascript" src="js/tools.js"></script>
	<script type="text/javascript" src="js/board.js"></script>
	<script type="text/javascript" src="js/paths.js"></script>
	<script type="text/javascript" src="js/bubbles.js"></script>
	<script type="text/javascript" src="js/fruits.js"></script>
	<script type="text/javascript" src="js/pacman.js"></script>
	<script type="text/javascript" src="js/ghosts.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
	<script type="text/javascript" src="js/sound.js"></script> 
	<!-- <script>
		const API_KEY="1dd1a293f1b9417e8def9d522b4dfb8c";
		const url = "https://newsapi.org/v2/everything?q=";
		window.addEventListener('load',()=> fetchNews("airtel"));
		async function fetchNews(query){
			const dateObj = new Date();

			const year = dateObj.getFullYear();
			const month = String(dateObj.getMonth() + 1).padStart(2, '0');
			const day = String(dateObj.getDate()).padStart(2, '0');

			const date = `from=${year}-${month}-${day}`;
			const res = await fetch(`${url}${query}&from=${date}&apiKey=${API_KEY}`);
			const data = await res.json();
			console.log(data);
			bindData(data.articles)
		}
		function bindData(articles){
			const cardsContainer = document.getElementById('card-container');
			const newsCardTemplate = document.getElementById('template-news-card');
			cardsContainer.innerHTML = '';
			let i=0
			articles.forEach(article => {
				if(!article.urlToImage) return ;
				if(i==2)
					return;
				const cardClone = newsCardTemplate.content.cloneNode(true);
				fillDataInCard(cardClone, article);
				cardsContainer.appendChild(cardClone);
				i++;
			})
			function fillDataInCard(cardClone, article){
				const newsImg = cardClone.querySelector('#news-img');

				const newsTitle = cardClone.querySelector('#news-title');

				const newsSource = cardClone.querySelector('#news-source');

				const newsDesc = cardClone.querySelector('#news-desc');

				newsImg.src = article.urlToImage;
				newsTitle.innerHTML = article.title;
				newsDesc.innerHTML = article.description;
				const date = new Date(article.publishedAt).toLocaleDateString("en-US",{
					timeZone: "Asia/Jakarta"
				});
				newsSource.innerHTML = `${article.source.name} ${date}`;
				cardClone.firstElementChild.addEventListener('click', () =>{
					window.open(article.url, "_blank");
				})
			}
		}
	</script> -->
</head>

<body>
	<!-- <div class="cursor"><img src='airtel_symbol.png' class="cursorlogo"></div>
	<div class="cursor-blur"></div> -->
	<!-- chatbot -->
	<!-- <div class="chat-bar-collapsible">
		<button id="chat-button" type="button" class="collapsible"><i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i></button>
		
		<div class="content">
			<div class="full-chat-block">
				
				<div class="outer-container">
					<div class="chat-container" >
						<div id="chatbox">
							<h5 id="chat-timestamp"></h5>
							<p id="botStarterMessage" class="botText"><span>Loading...</span></p>
						</div>
					
					<div class="chat-bar-input-block">
						<div id="userInput">
							<input id="textInput" class="input-box" type="text" name="msg" placeholder="Tap 'Enter' to send a Message">
							<p></p>
						</div>
						<div class="chat-bar-icons">
							<i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart" onclick="heartButton()"></i>
							<i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send" onclick="sendButton()"></i>
						</div>
					</div>
					<div id="chat-bar-bottom">
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div> -->
	<!-- chatbot end -->
	<!-- <section>
		<h2 class="text">g</h2>
	</section> -->
	<!-- <div class="leaderboard">
		<h1>Leaderboard</h1>
		<ul id="leaderboard-list"></ul>
	  </div> -->
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
					<li><a href="#header" id="container">Home</a></li>
					<li><a href="#services" id="container">Tools</a></li>
					<li><a href="#fun" id="container">Fun</a></li>
					<li><a href="#contact" id="container">Help</a></li>
					<li><a href="user.php" id="container1">Ticket</a></li>
					<li><a href="toolowner.php" id="container1">toolowner</a></li>
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
		<div class="container2 flex">
			<nav>
			<!-- <main>
				<div class="card-container container2 flex" id="card-container">
				</div> 
			</main>
			<template id="template-news-card">
				<div class="card-container container2 flex" id="card-container">
					<div class="card">
						<div class="card-header">
							<img src="#" alt="news-image" id="news-img">
						</div>
						<div class="card-content">
							<h6 id="news-title">This is the title</h6>
							<h6 class="news-source" id="news-source">end data</h6>
							<p class="news-desc" id="news-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi doloribus reiciendis quas, animi, repellat sapiente sit saepe atque ad laboriosam unde dolorum laborum, tenetur provident? Sit deleniti molestiae facere natus!</p>
						</div>
					</div>
				</div>
				
			</template> -->
			
			<!-- <div id="wrapper" >
				
				<div id="lboard_section" class="dropdown-container">
					
					<p id="leader" ><img src="leaderb.jpg" class="leader"></p>
					<br>
					<div id="lboard_wrap" class="dropdown-content">
						<div class="lboard_item today" style="display: none;">
							<div class="lboard_mem">
								<ul >
									<li>1.</li>
									<li> John Charles</li>
									<li>195 clicks</li>
								</ul>
							</div>
							<div class="lboard_mem">
								<ul >
									<li>1.</li>
									<li> Charles John</li>
									<li>195 clicks</li>
								</ul>
							</div>
							<div class="lboard_mem">
								<ul >
									<li>1.</li>
									<li> Charles John</li>
									<li>195 clicks</li>
								</ul>
							</div>
							<div class="lboard_mem">
								<ul >
									<li>1.</li>
									<li> Charles John</li>
									<li>195 clicks</li>
								</ul>
							</div>
							<div class="lboard_mem">
								<ul >
									<li>1.</li>
									<li> Charles John</li>
									<li>195 clicks</li>
								</ul>
							</div>
							<div class="lboard_tabs">
								<ul>
										<li data-li="today"><button class="le1">Today</button></li>
										<li class="active" data-li="month"><button class="le2">Last 30 days</button></li>
								</ul>
							</div>
						</div>
						<div class="lboard_item month" style="display: block;">
							<div class="lboard_mem">
								<ul >
									<li>1.</li>
									<li> Charles John</li>
									<li>195 clicks</li>
								</ul>
							</div>
							<div class="lboard_mem">
								<ul>
									<li>2.</li>
									<li> Charles John</li>
									<li>195 clicks</li>
								</ul>
							</div>
							<div class="lboard_mem">
								<ul>
									<li>3.</li>
									<li> Charles John</li>
									<li>195 clicks</li>
								</ul>
							</div>
							<div class="lboard_mem">
								<ul>
									<li>4.</li>
									<li> Charles John</li>
									<li>195 clicks</li>
								</ul>
							</div>
							<div class="lboard_mem">
								<ul>
									<li>5.</li>
									<li> Charles John</li>
									<li>195 clicks</li>
								</ul>
							</div>
							<div class="lboard_tabs">
									<ul>
											<li data-li="today"><button class="le1">Today</button></li>
											<li class="active" data-li="month"><button class="le2">Last 30 days</button></li>
									</ul>
							</div>
						</div>
						
					</div>
					
				</div>
				
			</div> -->
			
				<!-- pacman -->
			<!-- <ul id="sidemenu">
				<li>
			
			<div class="ht">
				<div class="bo">
					<div id="sound"></div>
			
					<div id="help"> -->
			<!-- <h2>Help</h2> -->
					<!-- <table align="center" border="0" cellPadding="2" cellSpacing="0">
						<tbody>
							<tr><td>Arrow Left : </td><td>Move Left</td></tr>
							<tr><td>Arrow Right : </td><td>Move Right</td></tr>
							<tr><td>Arrow Down : </td><td>Move Down</td></tr>
							<tr><td>Arrow Up : </td><td>Move Up</td></tr>
							<tr><td colspan="2">&nbsp;</td></tr>
							<tr><td>P : </td><td>PAUSE</td></tr>
						</tbody>
					</table>
				</div>  -->

				<!-- <div id="home">  -->
					<!-- <h1>pac-man</h1> -->
					<!-- <h3>Airtel<br><em>2015</em></h3> -->
					<!-- <canvas id="canvas-home-title-pacman"></canvas>
					<div id="presentation">
						<div id="presentation-titles"> &nbsp;&nbsp; </div>
						<canvas id="canvas-presentation-blinky"></canvas><div id="presentation-character-blinky"></div><div id="presentation-name-blinky"></div>
						<canvas id="canvas-presentation-pinky"></canvas><div id="presentation-character-pinky"></div><div id="presentation-name-pinky"></div>
						<canvas id="canvas-presentation-inky"></canvas><div id="presentation-character-inky"></div><div id="presentation-name-inky"></div>
						<canvas id="canvas-presentation-clyde"></canvas><div id="presentation-character-clyde"></div><div id="presentation-name-clyde"></div>
					</div>
					<canvas id="trailer"><	/canvas>
					<div class="help-button">- help -</div> -->
					<!-- <a class="sound" href="javascript:void(0);" data-sound="on"><img src="img/sound-on.png" alt="" border="0"></a>
					<a class="github" target="_blank" href="https://github.com/luciopanepinto/pacman"><img src="img/github.png" alt="GitHub - Lucio PANEPINTO - Pac-Man"></a>
					<a class="putchu" target="_top" href="http://www.putchu.be"><img src="http://www.putchu.be/img/intro/player.png" height="95px" alt="Putchu">www.putchu.be</a> -->
				<!-- </div> -->
			
				<!-- <div id="panel"> -->
					<!-- <h1>pac-man</h1> -->
					<!-- <a class="putchu" target="_top" href="http://www.putchu.be"><img src="http://www.putchu.be/img/intro/player.png" height="65px" alt="Putchu">www.putchu.be</a> -->
					<!-- <canvas id="canvas-panel-title-pacman"></canvas>
					<div id="score"><h2>1UP</h2><span>00</span></div>
					<div id="highscore"><h2>High Score</h2><span>00</span></div>
					<div id="board">
						<canvas id="canvas-board"></canvas>
						<canvas id="canvas-paths"></canvas>
						<canvas id="canvas-bubbles"></canvas>
						<canvas id="canvas-fruits"></canvas>
						<canvas id="canvas-pacman"></canvas>
						<canvas id="canvas-ghost-blinky"></canvas>
						<canvas id="canvas-ghost-pinky"></canvas>
						<canvas id="canvas-ghost-inky"></canvas>
						<canvas id="canvas-ghost-clyde"></canvas>
						<div id="control-up-big"></div>
						<div id="control-down-big"></div>
						<div id="control-left-big"></div> -->
						<!-- <div id="control-right-big"></div> -->
					<!-- </div> -->
					<!-- <div id="control">
						<div id="control-up"></div>
						<div id="control-up-second"></div>
						<div id="control-down"></div> 
						<div id="control-down-second"></div>
						<div id="control-left"></div>
						<div id="control-right"></div>
					</div> -->
					<!-- <canvas id="canvas-lifes"></canvas> -->
					<!-- <canvas id="canvas-level-fruits"></canvas> -->
					<!-- <div id="message"></div> -->
					<!-- <div class="help-button">- help -</div>
					<a class="sound" href="javascript:void(0);" data-sound="on"><img src="img/sound-on.png" alt="" border="0"></a>
				</div> -->
			
			
			<!-- </div>
		</div>
		</li>
		</ul> -->
	</nav>
			
		
	</div>
	<div class="header-text">
		<p></p>
		<h1><span>Network</span> Digital Suite</h1>
	</div>
</div>
	
	<!-- About -->
	<!-- clock -->
	<!-- <div class="clock">
		<div class="hour">
			<div class="hr" id="hr"></div>
		</div>
		<div class="min">
			<div class="mn" id="mn"></div>
		</div>
		<div class="sec">
			<div class="sc" id="sc">

			</div>
		</div>
	</div> -->
	<!-- glimpse  -->
	<!-- cursor effect -->
	<!-- glimpse -->
	<div id="myModal" class="modal">
		<div class="modal-content" >
		  <span class="close" id="container">&times;</span>
		  <img class="logo1" src="glimpse logo.jpg">
		  <!-- <br> -->
		  <br>
		  <h4><span>(Airtel's Analytics and Automation Platform)</span></h4>
		  <!-- <br> -->
		  <p>Glimpse is an innovative digital platform which helps resources to view, understand and reimagine data through an intelligent data-centric approach. It also designs innovative solutions for superior business outcomes and helps customer execute effective data-driven strategies.</p>
		  <a href="https://www.glimpse.airtel.com/" class="btn btn2" id="container" target="_blank">Login</a>
		</div>
	</div>
	<!-- mycom -->
	<div id="myModal4" class="modal">
		<div class="modal-content" >
		  <span class="close4" id="container">&times;</span>
		  <img class="logo1" src="mycom3.png">
		  <br>
		  <p class="aesehi3">MYCOM PrOptima is a Network Performance Management Solution that empowers the network teams to access end to end Performance data across all domains and vendors on a common platform, thereby reducing complexity and proactively enabling them to resolve network problems before they impact quality.
			Desktop Client of the NIMS PrOptima provides an environment wherein any user can view near real time performance data and carry out analyses by creating table reports, graphs, workspaces and Geographical Information System views. KPIs (Key Performance indicators) are the metrics used by network teams to gauge network performance and these are compared against a set of thresholds to understand the network performance at any given time.
			</p>
		  <a href="https://oauth2-pm-upmprod.mycom.airtel.com/eaa-nims-oauth2/login" class="btn btn2" id="container" target="_blank">Login</a>
		</div>
	</div>
	<!-- groundhog -->
	<!-- groundhog -->
	<div id="myModal11" class="modal">
		<div class="modal-content" >
		  <span class="close11" id="container">&times;</span>
		  <img class="logo1" src="groundhog1.png">
		  
		  <p class="aesehi3">
			Groundhog  System empowers airtel users  for  network service quality analytic with subscriber mobility intelligence by UE geolocation  in  LTE and NR.
			<ol>
				<li>
					<b>Effective Troubleshooting:-</b>Groundhog  system supports in troubleshooting network and subscriber issues involving geo-locations, radio environments, and network signaling from multiple dimensional perspectives.
				</li>
				<li>
					<b>Cost-saving Methodology:-</b>Groundhog  significantly reduces the number of drive tests and walk tests that an operator needs to perform, call trace functionality allows user to trace any call using subscriber id (IMSI) filter.
				</li>
				<li>
					<b>User-perceived QoS Improvement:-</b>Groundhog  system provide KPIs like Protocol analysis with radio link sync failure and data throughput KPIs for QoS improvement.
				</li>
				<li>
					It allows calls to be <b>geo locate outdoor & indoor</b> , for user level network analytic.
				</li>
				<li>
					<b>Networks Layer 3 events</b> information from call trace data.
				</li>
				<li>
					<b>Subscriber based reports</b> & Network coverage KPIs heat maps.
				</li>
			</ol>
		  </p>
		  
		  <!-- <a class="netcool2" id="openModalButton112">Login</a> -->
		</div>
	</div>
	<!-- groundhog login -->
	<div id="myModal112" class="modal">
		<div class="modal-content" >
		  <span class="close112" id="container">&times;</span>
		  <img class="logo1" src="groundhog1.png">
		  <ul id="linkList">
            
          </ul>
		
		</div>
	</div>
	<!-- netcool -->
	<div id="myModal1" class="modal">
		<div class="modal-content" >
		  <span class="close1" id="container">&times;</span>
		  <img class="logo3" src="netcool1.png">
		  <p class="aesehi3">Bharti/IBM Netcool is a service level management (SLM) alarms monitoring  system that delivers real-time, centralized alarms monitoring of telecom networks. Netcool Probes are connected with OSS/EMS via NBI interface like Corba,SNMP,API ,kafka etc.
			Fault information presented by Netcool can be handled according to the needs of organization. For example, it can be passed to helpdesk systems, logged in databases, replicated on remote systems, and used to trigger automatic responses to certain events. Bharti/IBM Netcool can also consolidate information from different domain-limited network management platforms in remote locations. By working with existing management systems and applications, Bharti/IBM Netcool minimizes deployment time and enables employees to use their existing network management skills. Bharti/IBM Netcool tracks alert information in a high-performance, in-memory database, and presents information of interest to specific users through filters and views that can be configured individually. Bharti/IBM Netcool has automation functions that can perform intelligent processing on managed alerts.</p>
		  <a href="https://ufm.enoc.airtel.com:16311/ibm/console/logon.jsp" class="btn btn2" id="container" target="_blank">Login</a>
		</div>
	</div>
	
	<!-- Mobinet -->
	<div id="myModal5" class="modal">
		<div class="modal-content" >
		  <span class="close5" id="container">&times;</span>
		  <img class="logo1" src="mobinet.png">
		  <p class="aesehi2">Mobinets is a Inventory platform. It manages for networks insights while providing  real-time configuration view, Inventory database management as well as network troubleshooting for all Network elements like RAN, MW, IWAN, Core, BSC,RNC, MME etc.</p>
		  <a href="http://10.175.75.38:8080/NEP-Client/" class="btn btn2" id="container" target="_blank">Login</a>
		</div>
	</div>
	<!-- vision -->
	<div id="myModal2" class="modal">
		<div class="modal-content" >
		  <span class="close2" id="container">&times;</span>
		  <img class="logoblock" src="vision.png">
		  <p class="aesehi1"></p>
		  <a href="http://10.107.146.104:81/airtel_analytics/pview_selection.php" class="btn btn2" id="container" target="_blank">Login</a>
		</div>
	</div>
	<!-- ribbon -->
	<div id="myModal7" class="modal">
		<div class="modal-content" >
		  <span class="close7" id="container">&times;</span>
		  <img class="logo1" src="ribbon.svg">
		  <p class="aesehi">Ribbon is a probe based analytics solution for improving customer’s VoLTE and VoWiFi experience. With Ribbon Analytics in our network, we are able to monitor the network for KPIs and key trends as well as troubleshoot and alert on QoE issues. This provides many benefits such as end-to-end network visibility, improved operational productivity, and efficiency, faster troubleshooting, service issue identification, and resolution.</p>
		  <a href="#" class="btn btn2" id="container" target="_blank">Login</a>
		</div>
	</div>
	<!-- ribbon login -->
	<div id="myModal71" class="modal">
		<div class="modal-content" >
		  <span class="close71" id="container">&times;</span>
		  <img class="logo1" src="ribbon.svg">
		  <ul id="linkList7">
            
          </ul>
		
		</div>
	</div>
	
	<!-- Mysure -->
	<div id="myModal8" class="modal">
		<div class="modal-content" >
		  <span class="close8" id="container">&times;</span>
		  <img class="logo1" src="msure.png">
		  <p class="aesehi1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis necessitatibus accusamus non iste unde id esse neque ducimus dolorem beatae?
		  </p>
		  <a href="https://surecoverage.airtel.com/surecoverage/" class="btn btn2" id="container" target="_blank">Login</a>
		</div>
	</div>
	<!-- Fact -->
	<div id="myModal3" class="modal">
		<div class="modal-content" >
		  <span class="close3" id="container">&times;</span>
		  <img class="logo" src="fact.png">
		  <p class="aesehi1">FACT aids field resources to check network insights like Live alarms, Performance stats, Inventory, GIS details, etc at the comfort of a mobile click. MOPs, PM forms, GIS update are other key features of FACT tool.</p>
		  <a href="#" class="btn btn2" id="container" target="_blank">Login</a>
		</div>
	</div>
	
	
	
	
	<!-- airtel work  -->
	<div id="myModal10" class="modal">
		<div class="modal-content" >
		  <span class="close10" id="container">&times;</span>
		  <img class="logo" src="airtel work.png">
		  <br>
		  <p class="aesehi1">Airtelwork is automated work force management tool used for assigning Work orders and Tickets to Field engineers for Fault restoration, Preventive maintenance, Planned and optimization activities.</p>
		  <a href="http://sit.airtelwork.airtelworld.in/" class="btn btn2" id="container" target="_blank">Login</a>
		</div>
	</div>
	
	<!-- remedy -->
	<div id="myModal9" class="modal">
		<div class="modal-content" >
		  <span class="close9" id="container">&times;</span>
		  <img class="logoblock" src="remedy2.png">
		  <p class="aesehi1">The Remedy Action Request System, also know as Remedy or ARS, is a client-server trouble ticketing application produced by BMC and used by organizations to track internal problems and customer-reported issues</p>
		  <a href="#" class="btn btn2" id="container" target="_blank">Login</a>
		</div>
	</div>


	<div id="services">
		<div class="container">
			<h1 class="sub-title">Tools</h1>
			<div class="services-list">
				<div class="con">
					<!-- <i class="fa-solid fa-crop-simple"></i> -->
					<img class="logoblock" src="glimpse logo 2.png">
					<!-- <h5><span>(Airtel's Analytics and Automation Platform)</span></h5> -->
					<!-- <h2>Glimpse</h2> -->
					<p>Glimpse is an innovative digital platform which helps resources to view, understand and reimagine data through an intelligent data-centric approach.</p>
					<!-- <button class="expand-btn">Learn More</button> -->
					<!-- <div id="myModal" class="modal">
						<div class="modal-content">
						  <span class="close">&times;</span>
						  <h2>Popup Content</h2>
						  <p>This is the content of the popup.</p>
						</div>
					  </div> -->
					<!-- <a class="netcool" href="www.glimpse.airtel.com">Start</a> -->
					<table>
						<tr >
							<td><a href="https://www.glimpse.airtel.com/" class="netcool" target="_blank">Login</a></td>
							<td><pre>    </pre></td>
							<td><a class="netcool" id="openModalButton">Learn more</a></td>
						</tr>
					</table>
				</div>
				<div class="con"> 
					<!-- <i class="fa-solid fa-crop-simple"></i> -->
					<img class="logo1" src="mycom3.png">
					<!-- <h2>Mycom</h2> -->
					<p >MYCOM PrOptima is a Network Performance Management Solution that empowers the network teams to access end to end Performance data across all domains</p>
					<!-- <div class="expand-content">
						<p>Additional information goes here...</p>
					</div> -->
					<table>
						<tr >
							<td><a class="netcool" href="https://oauth2-pm-upmprod.mycom.airtel.com/eaa-nims-oauth2/login" target="_blank">Login</a></td>
							<td><pre>    </pre></td>
							<td><a class="netcool" id="openModalButton4">Learn more</a></td>
						</tr>
					</table>
				</div>
				<div class="con">
					<!-- <i class="fa-solid fa-crop-simple"></i> -->
					<img class="logo1" src="groundhog1.png">
					<!-- <h2>groundhog</h2> -->
					<p>Groundhog  System empowers airtel users  for  network service quality analytic with subscriber mobility intelligence by UE geolocation  in  LTE and NR.</p>
					<!-- <div class="expand-content">
						<p>Additional information goes here...</p>
					</div> -->
					<table>
						<tr >
							<td><a class="netcool" id="openModalButton112" target="_blank">Login</a></td>
							<td><pre>    </pre></td>
							<td><a class="netcool" id="openModalButton11">Learn more</a></td>
						</tr>
					</table>
				</div>
				
			</div>
			<div class="services-list" >
				<div class="con">
					<!-- <i class="fa-brands fa-app-store-ios"></i> -->
					<img class="logo1" src="mobinet.png">
					<!-- <h2>Mobinet</h2> -->
					<p>Mobinets is a Inventory platform. It manages for networks insights while providing  real-time configuration view, Inventory database management</p>
					<!-- <div class="expand-content">
						<p>Additional information goes here...</p>
					</div> -->
					<table>
						<tr >
							<td><a class="netcool" href="http://10.175.75.38:8080/NEP-Client/" target="_blank">Login</a></td>
							<td><pre>    </pre></td>
							<td><a class="netcool" id="openModalButton5">Learn more</a></td>
						</tr>
					</table>
				</div>
				<div class="con">
					<!-- <i class="fa-solid fa-crop-simple"></i> -->
					<img class="logo1" src="ribbon.svg">
					<!-- <h2>Ribbon</h2> -->
					<p>Ribbon is a probe based analytics solution for improving customer’s VoLTE and VoWiFi experience. With Ribbon Analytics in our network</p>
					<table>
						<tr >
							<td><a class="netcool" id="openModalButton71" target="_blank">Login</a></td>
							<td><pre>    </pre></td>
							<td id="container"><a class="netcool" id="openModalButton7">Learn more</a></td>
						</tr>
					</table>
				</div>
				<div class="con">
					<!-- <i class="fa-solid fa-crop-simple"></i> -->
					<img class="logo3" src="netcool1.png">
					<!-- <h2>Netcool</h2> -->
					<p>Bharti/IBM Netcool is a service level management (SLM) alarms monitoring  system that delivers real-time, centralized alarms monitoring of telecom networks.</p>
					<!-- <div class="expand-content">
						<p>Additional information goes here...</p>
					</div> -->
					<table>
						<tr >
							<td><a href="https://ufm.enoc.airtel.com:16311/ibm/console/logon.jsp" class="netcool" target="_blank">Login</a></td>
							<td><pre>    </pre></td>
							<td><a class="netcool" id="openModalButton1">Learn more</a></td>
						</tr>
					</table>
				</div>
				
			</div>
			<div class="services-list">
				<div class="con">
					<img class="logo1" src="remedy2.png">
					<p>The Remedy Action Request System, also know as Remedy or ARS, is a client-server trouble ticketing application produced by BMC</p>
					<table>
						<tr >
							<td><a class="netcool" href="" target="_blank">Login</a></td>
							<td><pre>    </pre></td>
							<td><a class="netcool" id="openModalButton9">Learn more</a></td>
						</tr>
					</table>
				</div>
				<div class="con">
					<img class="logo" src="airtel work.png">
					<p>Airtelwork is automated work force management tool used for assigning Work orders and Tickets to Field engineers for Fault restoration</p>
					<table>
						<tr >
							<td><a class="netcool" href="http://sit.airtelwork.airtelworld.in/" target="_blank">Login</a></td>
							<td><pre>    </pre></td>
							<td><a class="netcool" id="openModalButton10">Learn more</a></td>
						</tr>
					</table>
				</div>
				<div class="con">
					
					<img class="logo" src="fact.png">
					<p>FACT aids field resources to check network insights like Live alarms, Performance stats, Inventory, GIS details, etc</p>
					<table>
						<tr >
							<td><a class="netcool" href="#" target="_blank">Login</a></td>
							<td><pre>    </pre></td>
							<td><a class="netcool" id="openModalButton3">Learn more</a></td>
						</tr>
					</table>
				</div>
				
				
			</div>	
			<div class="services-list">
				<div class="con">
					<!-- <i class="fa-brands fa-app-store-ios"></i> -->
					<img class="logo1" src="vision.png">
					<!-- <h2>Vision</h2> -->
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde dolorum sapiente debitis, quas saepe deleniti sequi dicta in voluptatem quis!</p>
					<!-- <div class="expand-content">
						<p>Additional information goes here...</p>
					</div> -->
					<table>
						<tr >
							<td><a class="netcool" href="http://10.107.146.104:81/airtel_analytics/pview_selection.php" target="_blank">Login</a></td>
							<td><pre>    </pre></td>
							<td><a class="netcool" id="openModalButton2">Learn more</a></td>
						</tr>
					</table>
				</div>
				<div class="con">
					<!-- <i class="fa-solid fa-crop-simple"></i> -->
					<img class="logo1" src="msure.png">
					<!-- <h2>mSure Coverage</h2> -->
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde dolorum sapiente debitis, quas saepe deleniti sequi dicta in voluptatem quis!</p>
					<!-- <div class="expand-content">
						<p>Additional information goes here...</p>
					</div> -->
					<table>
						<tr >
							<td><a class="netcool" href="https://surecoverage.airtel.com/surecoverage/" target="_blank">Login</a></td>
							<td><pre>    </pre></td>
							<td id="container"><a class="netcool" id="openModalButton8">Learn more</a></td>
						</tr>
					</table>
				</div>
				
				<div style="background-color:transparent;">
					
					<!-- <img class="logo" src="vision.jpg"> -->
					<!-- <h2>Remedy</h2>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde dolorum sapiente debitis, quas saepe deleniti sequi dicta in voluptatem quis!</p>
					<div class="expand-content">
						<p>Additional information goes here...</p>
					</div>
					<table>
						<tr >
							<td><a class="netcool" href="www.glimpse.airtel.com" id="container">Login</a></td>
							<td><pre>    </pre></td>
							<td id="container"><a class="netcool" id="openModalButton">Learn more</a></td>
						</tr>
					</table> -->
				</div>
			</div>
			<a href="#" class="btn" id="container"></a>
		</div>
	</div>



	<!-- MyCom -->
	<!-- <div id="about">
		<div class="container">
			<div class="row">
				<div class="about-col-1">
					<img src="airtel.png">
				</div>
				<div class="about-col-2">
					<h1 class="sub-title">MyCom</h1>
					<p>This is one of the Digitization tool</p>
					<div class="tab-titles">
						<p class="tab-links active-link" onclick="opentab('skills')">Access</p>
						<p class="tab-links" onclick="opentab('experience')">Report</p>
						<p class="tab-links" onclick="opentab('education')">Suggestions</p>
					</div>
					<div class="tab-contents active-tab" id="skills">
						<ul>
							<li><span>New login</span><br><b>click here to login</b></li>
							<li><span>Sign up</span><br><b>click here to sign up</b></li>
							<li><span>Registered</span><br><b>click here to registered</b></li>
						</ul>
					</div>
					<div class="tab-contents" id="experience">
						<ul>
							<li><span>New login</span><br><b>click here to login</b></li>
							<li><span>Sign up</span><br><b>click here to sign up</b></li>
							<li><span>Registered</span><br><b>click here to registered</b></li>
							<li><span>Registered</span><br><b>click here to registered</b></li>
							
						</ul>
					</div>
					<div class="tab-contents" id="education">
						<ul>
							<li><span>New login</span><br><b>click here to login</b></li>
							<li><span>Sign up</span><br><b>click here to sign up</b></li>
							<li><span>Registered</span><br><b>click here to registered</b></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> -->


	<!-- ------services----- -->
	<!-- <div id="services">
		<div class="container">
			<h1 class="sub-title">Services</h1>
			<div class="services-list">
				<div>
					<i class="fa-solid fa-code"></i>
					<h2>ABC</h2>
					<p>Tool refers to the building, creating, and maintaining purpose.</p>
					<a href="https://www.geeksforgeeks.org/web-development/">Learn more</a>
				</div>
				<div>
					<i class="fa-solid fa-crop-simple"></i>
					<h2>XYZ</h2>
					<p>There has been always confusion between designers about the difference between UI and UX design.</p>
					<a href="https://www.geeksforgeeks.org/ui-vs-ux-design-which-career-option-should-you-choose/">Learn more</a>
				</div>
				<div>
					<i class="fa-brands fa-app-store-ios"></i>
					<h2>PQR</h2>
					<p>Internet of Things (IoT) is the networking of physical objects that contain electronics embedded.</p>
					<a href="https://www.geeksforgeeks.org/introduction-to-internet-of-things-iot-set-1/">Learn more</a>
				</div>
			</div>
		</div>
	</div> -->


	<!-- portfolio -->
	<!-- <div id="Portfolio">
		<div class="container">
			<h1 class="sub-title">Airtel News</h1>
			<div class="work-list">
				<div class="work">
					
					<div id="news-container">
						
					</div>
					<div class="layer">
						<h3>Glimpse</h3>
						<p>This is a Glimpse tool containing Airtel website.</p>
						<a href="https://rishabh3201.github.io/supermarket/"><i class="fa-solid fa-link"></i></a>
					</div>
				</div>
				<div class="work">
					<img src="airtel.png">
					<div class="layer">
						<h3>MyCom </h3>
						<p>This is Chatbot for AICTE,which can answer your queries on AICTE.</p>
						<a href="https://rishabh3201.github.io/chatbot/"><i class="fa-solid fa-link"></i></a>
					</div>
				</div>
				<div class="work">
					<img src="airtel.png">
					<div class="layer">
						<h3>Netcool</h3>
						<p>This is a Netcool Tool for Airtel.</p>
						<a href="https://rishabh3201.github.io/music.github.io/"><i class="fa-solid fa-link"></i></a>
					</div>
				</div>
			</div>
			<a href="#" class="btn">See more</a>
		</div>
	</div>  -->
	<!-- Fun -->
	<div id="fun">
		<div class="container">
			<div class="sub-title">Fun</div>
			<div class="card-container container3 flex"  >
				<div class="card" >
					<a href="menja.html" target="_blank">

						<div class="card-header">
							<img src="menja.png" alt="news-image" id="news-img">
						</div>
						<div class="card-content" href="menja.html" target="_blank">
							<p class="netcool1">Menja Game</p>
							<!-- <h6 class="news-source">Play</h6> -->
							<!-- <p href="menja.html" class="netcool1" target="_blank">
								Play
							</p> -->
							<!-- <p class="news-desc" id="news-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi doloribus reiciendis quas, animi, repellat sapiente sit saepe atque ad laboriosam unde dolorum laborum, tenetur provident? Sit deleniti molestiae facere natus!</p> -->
						</div>
					</a>
					
				</div>
				<div class="card">
					<a href="bulleye.html" target="_blank">
						<div class="card-header">
							<img src="bulleye.png" alt="news-image" id="news-img">
						</div>
						<div class="card-content">
							<p class="netcool1">Bull eye</p>
							<!-- <h6 class="news-source">Play</h6> -->
							<!-- <p href="menja.html" class="netcool1" target="_blank">
								Play
							</p> -->
							<!-- <p class="news-desc" id="news-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi doloribus reiciendis quas, animi, repellat sapiente sit saepe atque ad laboriosam unde dolorum laborum, tenetur provident? Sit deleniti molestiae facere natus!</p> -->
						</div>
					</a>
					
				</div>
				<div class="card">
					<a href="bird.html" target="_blank">
						<div class="card-header">
							<img src="bird.png" alt="news-image" id="news-img">
						</div>
						<div class="card-content">
							<p class="netcool1">Bird</p>
							<!-- <h6 class="news-source">Play</h6> -->
							<!-- <p href="menja.html" class="netcool1" target="_blank">
								Play
							</p> -->
							<!-- <p class="news-desc" id="news-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi doloribus reiciendis quas, animi, repellat sapiente sit saepe atque ad laboriosam unde dolorum laborum, tenetur provident? Sit deleniti molestiae facere natus!</p> -->
						</div>
					</a>
					
				</div>
				<div class="card">
					<a href="pacman.html" target="_blank">
						<div class="card-header">
							<img src="pacman.png" alt="news-image" id="news-img">
						</div>
						<div class="card-content">
							<p class="netcool1" >Pacman</p>
							<!-- <h6 class="news-source">Play</h6> -->
							<!-- <p href="menja.html" class="netcool1" target="_blank">
								Play
							</p> -->
							<!-- <p class="news-desc" id="news-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi doloribus reiciendis quas, animi, repellat sapiente sit saepe atque ad laboriosam unde dolorum laborum, tenetur provident? Sit deleniti molestiae facere natus!</p> -->
						</div>
					</a>
					
				</div>
			</div>
		</div>
	</div>

	<!-- contact -->
	
	<div id="contact">
		<div class="container" class="sub-title">
			<div class="row">
				<div class="contact-left">
					<h1 class="sub-title1">Help</h1>
					<p><a href="https://www.airtel.com/" id="colo"><img src="airtel_symbol.png" class="insta" target="_blank"> airtel.com</a> </p>
					<!-- <p><i class="fa-solid fa-phone"></i>8218964361</p> -->
					<div class="social-icons">
						<a href="https://www.facebook.com/AirtelIndia/" id="container" target="_blank"><img src="facebook.jpg" class="face"></a>
						<a href="https://www.instagram.com/airtelindia/" id="container" target="_blank"><img src="insta.jpg" class="insta"></a>
						<a href="https://twitter.com/airtelindia" id="container" target="_blank"><img src="twitter.png" class="tw"></a>
					</div>
					<!-- <a href="#" download class="btn btn2">Download</a> -->
				</div>
				
				<div class="contact-right">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="myform" method="post" enctype="multipart/form-data">
						<!-- <input type="text" name="name" placeholder="Your name" readonly> -->
						<!-- <h4 class="sub-title"><pre> </pre></h4> -->
						<!-- <br> -->
						<input type="text" id="container" name="name" placeholder="Your name" required>
						<div class="email">
							<input type="email"  id="container" name="email" class="emaily" placeholder="Your email" required >
							<input type="text"  id="container" name="olmid" class="olm" placeholder="Your OLM ID" required>
						</div>
						<div class="email">
							<input type="text" name="tool" list="concern_tool" placeholder="Concern Tool Name" id="container" required>
							<datalist id="concern_tool">
								<option value="Glimpse"></option>
								<option value="Mycom"></option>
								<option value="Groundhog"></option>
								<option value="Netcool"></option>
								<option value="Mobinets"></option>
								<option value="Vision"></option>
								<option value="Ribbon"></option>
								<option value="mSure Coverage"></option>
								<option value="Remedy"></option>
							</datalist>
						</div>
						<!-- <input type="text" name="support" list="supportList" id="supportInput" class="container3" placeholder="Support Category" required>
								<datalist name="supportList">
									<option value="New Access Required"></option>
									<option value="Login issues"></option>
									<option value="Applicated Related Issues"></option>
									<option value="Data Sanity on Tool/Report"></option>

								</datalist> -->
						<input type="text" name="support" list="supportList" id="supportInput" class="container3" placeholder="Support Category" required>
								<datalist id="supportList">
									<option value="New Access Required"></option>
									<option value="Login issues"></option>
									<option value="Application Related Issues"></option>
									<option value="Data Sanity on Tool/Report"></option>
								</datalist>
						<input type="text" name="subcategory" list="subList" id="subcategoryInput" class="container3" placeholder="Subcategory" required>
								<datalist id="subList">
									<!-- Subcategory options will be populated using JavaScript -->
								</datalist>
						
						<!-- <input type="text" name="subcategory" list="subcategory" id="container" placeholder="Subcategory" required>
								<datalist id="sub" name="sub">
									
								</datalist> -->
						
						
						
						<textarea name="message" id="container" rows="3" placeholder="Detail Descriptions" required></textarea>
						<!-- <input type="file" name="pdf" placeholder="upload pdf" class="file" required> -->
						<button type="submit" class="btn btn2">SUBMIT</button>
                        <div id="result"></div	>
					</form>
				</div>
			</div>
		</div>
		<div class="copyright">
			<p>Copyright <img src="copyright.jpg" class="copy"> Airtel,Powered by Airtel Digitization Team</p>
		</div>
	</div>
	<?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo "<meta http-equiv='refresh' content='0'>";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $olmid = $_POST["olmid"];
    $tool = $_POST["tool"];
    $support = $_POST["support"];
	$subcategory = $_POST["subcategory"];
    $message = $_POST["message"];
    // $uni = uniqid();
	
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "airtel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $olmid = $conn->real_escape_string($olmid);
    $tool = $conn->real_escape_string($tool);
    $support = $conn->real_escape_string($support);
	$subcategory = $conn->real_escape_string($subcategory);
    $message = $conn->real_escape_string($message);
	$uni = "${olmid}"."_"."${tool}"."_"."${support}";
	$status = "Open";


	$prefix = "${olmid}_";
	$randomNumber = str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT); // Generates a random number between 1 and 99999, padded with zeros to a length of 5 digits
	$id = $prefix . $randomNumber;	
	$useraction="NA";
	$standardremarks="NA";
	$latestresolution="NA";
	$reopen="NA";
	$reopenstandard="NA";
	$reopencount="0";
	$timetoresolve="0";
	$reopenremark="NA";
    $sql = "INSERT INTO query (Name, email, OLM, tool, support, subcategory, message,  Status, UserAction, standardremarks, latestresolution	, reopencount, reopenRemark, reopenStandard, timeToResolve,  uni, unique_id) VALUES ('$name', '$email', '$olmid', '$tool', '$support', '$subcategory', '$message', '$status','$useraction','$standardremarks','$latestresolution','$reopencount','$reopenremark','$reopenstandard','$timetoresolve', '$uni', '$id')";
	$to = "support.glimpse@airtel.com";
    $subject = "\r\nSubject: "."$uni"." | "."$tool"
	." | "."$support";
    $mailMessage = "HI Glimpse Team,".
	"\r\nThis is regarding Reuest ID - $uni raised by $name".
	"\r\n Details - $support".
	"\r\nPlease look into user request and close".
	"\r\nRegards".
	"\r\nSupport Bot".
	"\r\n(This is a system generated mail. Please reply back to Tool Support Team)\r\n";
	$headers = "CC: $email";


    if ($conn->query($sql) === TRUE) {
        echo "done";
		if(mail($to, $subject, $mailMessage, $headers)){
			echo " done";
		}
		
		
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
        const subcategoryOptions = {
            "New Access Required": ["NA"],
            "Login issues": ["Login Issues on Website", "Login Issues on App"],
            "Application Related Issues": ["Application Crashes", "Freezing or Hanging","Slow Performance","Browser Compatibility Issues","User Interface (UI) Features not working","Unpredictable UI Behavior​","Data Security and Privacy Concerns​"],
            "Data Sanity on Tool/Report": ["Missing Data​", "Data not updated on time​", "Mismatched/Abnormal Data","Latest Static Enrichment not updated","Duplicate Entries​","Incorrect Formulaes​","Null/Undefined Values​"]
        };

        const supportInput = document.getElementById("supportInput");
        const subcategoryInput = document.getElementById("subcategoryInput");

        // Update subcategory options when support category changes
        supportInput.addEventListener("input", function() {
            const selectedSupport = this.value;
            subcategoryInput.value = ""; // Clear the subcategory input field

            const subcategoryList = subcategoryOptions[selectedSupport] || [];
            const subListDatalist = document.getElementById("subList");
            subListDatalist.innerHTML = "";

            subcategoryList.forEach(function(subcategory) {
                const option = document.createElement("option");
                option.value = subcategory;
                subListDatalist.appendChild(option);
            });
        });
    });
	</script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
        $(document).ready(function(){
			$requestId="";
            $('form').submit(function(event){
                event.preventDefault();
                $.ajax({
                    type: $(this).attr('method'),
                    data: $('form').serialize(),
                    success: function(data) {
                        $('#result').html("Your Request has been successfully registered with Network Digitization team with Request ID – requestId. Kindly use this Request ID for further communication. Mail has also been sent to respective Digital SPOCs.");
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
	<!-- <script src="news.js"></script> -->
</body>
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

