<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<style>
	    
		img {
			float: left;
			margin-right: 20px;
		}
	
	    .cursive {
		font-family: 'Lucida Handwriting', cursive;
	    }
	
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #C3B1E1;
			color: white;
			padding: 10px;
			text-align: center;
		}

		nav {
			background-color: #FFD1DC;
			padding: 10px;
			text-align: center;
		}

		nav a {
			display: inline-block;
			padding: 10px;
			text-decoration: none;
			color: #333;
			font-weight: bold;
			border-radius: 5px;
			margin: 5px;
		}

		section {
			padding: 20px;
			margin: 20px;
			border: 1px solid #FFD1DC;
		}

		.hidden {
			display: none;
		}
		
		.social-media-container {
        float: right;
        }
	</style>
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  
</head>
<body>
    <img src="pics/uitmlogo.png" alt="UiTM" width="290" height="250">
	<header>
		<h1><span class="cursive">Nurfatwa</h1>
	<div class="social-media-container">
    <!-- Facebook icon with link -->
    <a href="https://www.facebook.com/">
    <i class="fab fa-facebook"></i>
   </a>

   <!-- Twitter icon with link -->
   <a href="https://twitter.com/">
   <i class="fab fa-twitter"></i>
   </a>

   <!-- Instagram icon with link -->
   <a href="https://www.instagram.com/">
   <i class="fab fa-instagram"></i>
   </a></div>
   </header>
	<nav>
	    <a href="#" data-section="home">Home</a>
		<a href="#" data-section="biography">Biography</a>
		<a href="#" data-section="resume">Resume</a>
		<a href="#" data-section="timetable">Time table</a>
		<a href="#" data-section="gallery">Galleries</a>
		<a href="#" data-section="download">Download</a>
		<a href="#" data-section="link">Links</a>
		<a href="#" data-section="login">Log in</a>
		<a href="#" data-section="logout">Log out</a>
	</nav>

	<section id="home">
		<h2>Home</h2>
		<audio controls>
         <source src="sounds/Freaking RomanceWebtoon- WHY.mp3" type="audio/mpeg">
         Your browser does not support the audio element.
        </audio>
		 <img src="pics/mycatform.jpeg" alt="my cat pics" height="300" width="200">
		<p>Welcome to my website. All the contents in it is made for assignment and it is non-profit website.<br> Have fun!</p>
    </section>
	<section>
	<p style="color:red"> Disclaimer & Copyright</p>
	 <p> The information on this website is for general information purposes only. Any reliance you place on such information is therefore strictly at your own risk.</p>
	 <p> Copyright © [2023] [nurfatwa]. All rights reserved. No part of this website may be reproduced, distributed, or transmitted in any form or by any means, including photocopying, recording, or other electronic or mechanical methods, without the prior written permission of the copyright holder, except in the case of brief quotations embodied in critical reviews and certain other noncommercial uses permitted by copyright law.</p>
	 <p> This website is solely purpose for non-profit organization. All rights for the publisher of the songs</p>
	 </section>
	
	<section id="biography" class="hidden">
		<audio controls>
         <source src="sounds/La Lecon Particuliere(1968).mp3" type="audio/mpeg">
         Your browser does not support the audio element.
        </audio>
        <h1>My Biography (nope. its poetic rizz)</h1>
        <p>want some poetic rizz ;)?</p>
        <p style="color: orange"><br> Jika aku menyukaimu hanya kerana rupa, <br>Lantas mengapa perasaan ini masih utuh walaupun kita sudah tidak lama bersua</p>
        <p><br>Or some english poetic rizz?</p>
        <p style="color: blue"><br>If you were a grain of sand, I'd search every beach and dessert looking for you no matter how long I will have to look </p>
        <p><br> No i didnt write it, i found it. on tiktok. :)<br>Oh how about some STEM rizz?</p>
        <p style="color:green"><br> You must be cos^2 and me sin^2 because together we make one (maths rizz)</p> 
        <p style="color:purple"><br> If i were magnesium, you would surely be oxygen, because i light up when i'm with you (chemistry rizz)</p>
        <p style="color:pink"><br> You must be the one for me, because my selectively permeable membrane let you through (biology rizz)</p>
	</section>

	<section id="resume" class="hidden">
		<head>
	<title>Resume</title>
	<style>
		table, th, td {
			border: 1px solid purple;
			border-collapse: collapse;
			padding: 5px;
		}
	</style>
</head>
<body>
    <table width="100%">
	   <tr>
	      <th><h1>Siti Nurfatwa Dullah</h1>
	      <p>Universiti Teknologi Mara (UiTM), Shah Alam, Selangor, Malaysia (60) 11-2472-9281 | 2022646948@student.uitm.edu.my</p>
	      </th>
		  <th><img src="pics/mypic2.jpeg" alt="me without filter" height="230" width="150">
		  </th>
	</table>
	<h2 style="background-color:#BA55D3;">Education</h2>
	<table >
		<tr>
			<th>Level of Study</th>
			<th>Institution</th>
			<th>Major/Area of Study</th>
			<th>Graduation Date</th>
		</tr>
		<tr>
			<td>Sijil Pelajaran Malaysia</td>
			<td>SMK Pantai, W.P Labuan</td>
			<td>STEM</td>
			<td>February 2020</td>
		</tr>
		<tr>
			<td>Sijil Matrikulasi KPM</td>
			<td>Kolej Matrikulasi Labuan</td>
			<td>Sains Module 3 (Computer science)</td>
			<td>March 2022</td>
		</tr>
	</table>
	
	<h2 style="background-color:#BA55D3;">Skills</h2>
	<ul">
		<li>
			<h3 style="background-color:#9370DB;">Programming languages: </h3>
			<ul>Java</ul>
			<ul>C++</ul>
			<ul>HTML/CSS</ul>
			<ul>JavaScript</ul>
		</li>
	</ul>
	<h2 style="background-color:#BA55D3;">Languages</h2>
	<ul>
	    <li>
		    <h3 style="background-color:#9370DB;">Malay</h3>
			<p>Native</p>
		</li>
		<li>
		    <h3 style="background-color:#9370DB;">English</h3>
			<p>Proficient</p>
		</li>
	</ul>
</body>
	</section>

	
	<section id="timetable" class="hidden">
		<head>
	<title>Table Example</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
		}
		
	    .ict {
        background-color: #E6E6FA;
        }

       .mat {
        background-color: #98FB98;
        }

       .web {
       background-color: #87CEEB;
       }

      .os {
       background-color: #FFE5B4;
       }

      .prog {
       background-color: #FFC0CB;
       }

      .sta {
       background-color: #FFE4E1;
       }
	</style>
</head>
<body>
	<table style="width: 100%;">
		<tr>
			<th>Day/Time</th>
			<th>8:00-10:00</th>
			<th>10:00-12:00</th>
			<th>12:00-14:00</th>
			<th>14:00-16:00</th>
			<th>16:00-18:00</th>
		</tr>
		<tr>
			<td>Monday</td>
			<td></td>
			<td class="ict"><a href="#ICT450">ICT450</a></td>
			<td></td>
			<td></td>
			<td class="mat"><a href="#MAT421">MAT421</a></td>
		</tr>
		<tr>
			<td>Tuesday</td>
			<td class="web"><a href="#CSC574">CSC574</a></td>
			<td class="os"><a href="#CSC520">CSC520</a></td>
			<td></td>
			<td></td>
			<td class="ict"><a href="#ICT450">ICT450</a></td>
		</tr>
		<tr>
			<td>Wednesday</td>
			<td class="web"><a href="#CSC574">CSC574</a></td>
			<td class="prog"><a href="#CSC404">CSC404</a></td>
			<td></td>
			<td class="os"><a href="#CSC520">CSC520</a></td>
			<td></td>
		</tr>
		<tr>
			<td>Thursday</td>
			<td class="mat"><a href="#MAT421">MAT421</a></td>
			<td></td>
			<td></td>
			<td class="sta"><a href="#STA416">STA416</a></td>
			<td></td>
		</tr>
		<tr>
			<td>Friday</td>
			<td class="prog"><a href="#CSC404">CSC404</a></td>
			<td class="sta"><a href="#STA416">STA416</a></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	
	<h3 id="ICT450">ICT450</h3>
	<p style="border:2px solid #E6E6FA;">Database design and development<br>lecturer name: Dr. Nor Aziah binti Daud</p>
	
	<h3 id="MAT421">MAT421</h3>
	<p style="border:2px solid #98FB98;">Calculus 1<br>lecturer name: Nurul Syaza Abdul Latif</p>
	
	<h3 id="CSC574">CSC574</h3>
	<p style="border:2px solid #87CEEB;">Dynamic web application development<br>lecturer name: Nur Aina Khadijah binti Adnan</p>
	
	<h3 id="CSC520">CSC520</h3>
	<p style="border:2px solid #FFE5B4;">Principles of operating system<br>lecturer name: Profesor Madya Dr Norhaslinda binti Kamaruddin</p>
	
	<h3 id="CSC404">CSC404</h3>
	<p style="border:2px solid #FFC0CB;">Programming 2<br>lecturer name: Dr. Shakirah binti Hashim</p>
	
	<h3 id="STA416">STA416</h3>
	<p style="border:2px solid #FFE4E1;">Applied probability and statistic<br>lecturer name: Dr. Noor Fadhilah binti Ahmad Radi</p>
	
<audio controls>
  <source src="sounds/James Arthur - Cars Outside.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
</body>
	</section>
	
	<section id="gallery" class="hidden">
		<audio controls>
  <source src="sounds/cupid - fifty fifty English.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
	<title>Image Gallery</title>
	<style>
		.gallery {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}
		
		.gallery img {
			width: 20%;
			height: auto;
			margin: 10px;
		}
		
		.video {
           width: 25%;
           height: auto;
           max-width: 500px;
        }
	</style>
</head>
<body>
	<div class="gallery">
	<blockquote class="tiktok-embed" cite="https://www.tiktok.com/@kiama.o/video/7225369503394204933" data-video-id="7225369503394204933" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@kiama.o" href="https://www.tiktok.com/@kiama.o?refer=embed">@kiama.o</a> <a title="nezuko" target="_blank" href="https://www.tiktok.com/tag/nezuko?refer=embed">#nezuko</a> <a title="tanjiro" target="_blank" href="https://www.tiktok.com/tag/tanjiro?refer=embed">#tanjiro</a> <a title="animetiktok" target="_blank" href="https://www.tiktok.com/tag/animetiktok?refer=embed">#animetiktok</a> <a title="kny" target="_blank" href="https://www.tiktok.com/tag/kny?refer=embed">#kny</a> <a title="demonslayer" target="_blank" href="https://www.tiktok.com/tag/demonslayer?refer=embed">#demonslayer</a> <a title="kimetsunoyaiba" target="_blank" href="https://www.tiktok.com/tag/kimetsunoyaiba?refer=embed">#kimetsunoyaiba</a> <a title="tanjirokamado" target="_blank" href="https://www.tiktok.com/tag/tanjirokamado?refer=embed">#tanjirokamado</a> <a title="nezukochan" target="_blank" href="https://www.tiktok.com/tag/nezukochan?refer=embed">#nezukochan</a> <a target="_blank" title="♬ original sound  - •kiama•" href="https://www.tiktok.com/music/original-sound-•kiama•-7225370064944450310?refer=embed">♬ original sound  - •kiama•</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
	    <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@kmm0119/video/7223362597494590726" data-video-id="7223362597494590726" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@kmm0119" href="https://www.tiktok.com/@kmm0119?refer=embed">@kmm0119</a> น้อง🤏🏻✨<a title="demonslayer" target="_blank" href="https://www.tiktok.com/tag/demonslayer?refer=embed">#demonslayer</a> <a title="kimitsunoyaiba" target="_blank" href="https://www.tiktok.com/tag/kimitsunoyaiba?refer=embed">#kimitsunoyaiba</a> <a title="muichiroutoukito" target="_blank" href="https://www.tiktok.com/tag/muichiroutoukito?refer=embed">#muichiroutoukito</a> <a title="muichiro" target="_blank" href="https://www.tiktok.com/tag/muichiro?refer=embed">#muichiro</a> <a title="animeedit" target="_blank" href="https://www.tiktok.com/tag/animeedit?refer=embed">#animeedit</a> <a title="anime" target="_blank" href="https://www.tiktok.com/tag/anime?refer=embed">#anime</a> <a title="tiktok" target="_blank" href="https://www.tiktok.com/tag/tiktok?refer=embed">#tiktok</a> <a title="foryou" target="_blank" href="https://www.tiktok.com/tag/foryou?refer=embed">#foryou</a> <a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp?refer=embed">#fyp</a> <a target="_blank" title="♬ Cupid (Twin Ver.) - FIFTY FIFTY" href="https://www.tiktok.com/music/Cupid-Twin-Ver-7202908102025283586?refer=embed">♬ Cupid (Twin Ver.) - FIFTY FIFTY</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
		<img src="pics/classpic1.jpeg" alt="class">
		<img src="pics/classpic2.jpeg" alt="class">
		<img src="pics/classpich.jpeg" alt="class">
		<img src="pics/milo.jpeg" alt="my cat">
		<img src="pics/sky.jpeg" alt="sky">
		<img src="pics/mypic3.jpeg" alt="a guy photobombing me">
		<img src="pics/mypic1.jpeg" alt="me but with filter">
		<img src="pics/mypic2.jpeg" alt="me without filter">
		
  <video class="video" controls>
  <source src="vids/vid1.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video>
  
  <video class="video" controls>
  <source src="vids/vid2.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video>
  
  <video class="video" controls>
  <source src="vids/vid3.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video>
  
  <video class="video" controls>
  <source src="vids/vid4.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video>
  
  <video class="video" controls>
  <source src="vids/vid5.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video>
  
  <video class="video" controls>
  <source src="vids/vid6.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video>
	</div>
	</section>
	
	<section id="download" class="hidden">
		<h1> Download link </h1>
        <p>Resume<br><a href="download/resume.pdf" download>Download PDF</a></p>
        <p>Time table<br><a href="download/timetable.pdf" download>Download PDF</a></p>
        <nav>
	</section>
	
	<section id="link" class="hidden">
		<h2>Links</h2>
        <a href="https://www.pinterest.com/pin/799951952539243844/">
        <img src="pics/David.png" alt="Cat pics using link too" height="200" width="200">
        </a>
		<p>UITM website: <a href="https://uitm.edu.my/index.php/en/" target="_blank">Click here</a>
		<p>FSKM website: <a href="https://fskm.uitm.edu.my/v5/index.php/ms/" target="_blank">Click here</a>
        <p>i-Student portal: <a href="https://istudent.uitm.edu.my/index_isp.htm" target="_blank">Click here</a>
        <p>ufuture: <a href="https://ufuture.uitm.edu.my/home/" target="_blank">Click here</a>
		<p>MyStudent: <a href="https://mystudent.uitm.edu.my/login" target="_blank">Click here</a>
		<p>PTAR apps: <a href="https://ptarapps.uitm.edu.my/login/" target="_blank">Click here</a>
    </section>
	
	<section id="login" class="hidden">
	<title>Login Form</title>
		<h2>Login Form</h2>
	<form>
		<table>
			<tr>
				<td>ID:</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
			<tr>
			    <td><a href="signup.php">Sign up</a></td>
			</tr>
		</table>
	</form>
	</section>
	
	<section id="logout" class="hidden">
	    <audio controls>
         <source src="sounds/MELANCHOLIA Music Box.mp3" type="audio/mpeg">
         Your browser does not support the audio element.
        </audio>
		<h2>You're logged out</h2>
		<p>Thank you for visitting!</p>
	</section>
	 
	<script>
		// Get all the menu links
		var menuLinks = document.querySelectorAll('nav a');

		// Loop through each link
		for (var i = 0; i < menuLinks.length; i++) {
			// Add a click event listener to the link
			menuLinks[i].addEventListener('click', function(event) {
				// Prevent the default link behavior
				event.preventDefault();

				// Get the section that corresponds to the link
				var sectionId = this.getAttribute('data-section');
				var section = document.getElementById(sectionId);

				// Hide all sections
				var sections = document.querySelectorAll('section');
				for (var j = 0; j < sections.length; j++) {
					sections[j].classList.add('hidden');
				}

				// Show the selected section
				section.classList.remove('hidden');
			});
		}
	</script>

</body>
</html>
