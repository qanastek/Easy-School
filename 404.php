<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Easy_School_wp
 */

get_header();
?>

	<style type="text/css">

		/** Styles for the 403 Page **/

		.particle-error,
		.permission_denied,
		#particles-js {
		  width: 100%;
		  height: 100%;
		  margin: 0px !important;
		}

		#particles-js {
		  position: fixed !important;
		  opacity: 0.23;
		}

		.permission_denied {
		  background: #24344c !important;
		}

		.permission_denied a {
		  text-decoration: none;
		}

		.denied__wrapper {
		  max-width: 390px;
		  width: 100%;
		  height: 390px;
		  display: block;
		  margin: 0 auto;
		  position: relative;
		  margin-top: 8vh;
		}

		.permission_denied h1 {
		  text-align: center;
		  color: #fff;
		  font-family: "Dosis", sans-serif;
		  font-size: 100px;
		  margin-bottom: 0px;
		  font-weight: 800;
		}

		.permission_denied h3 {
		  text-align: center;
		  color: #fff;
		  font-size: 19px;
		  line-height: 23px;
		  max-width: 330px;
		  margin: 0px auto 30px auto;
		  font-family: "Dosis", sans-serif;
		  font-weight: 400;
		}

		.permission_denied h3 span {
		  position: relative;
		  width: 65px;
		  display: inline-block;
		}

		.denied__link {
		  background: none;
		  color: #fff;
		  padding: 12px 0px 10px 0px;
		  border: 1px solid #fff;
		  outline: none;
		  border-radius: 7px;
		  width: 150px;
		  font-size: 15px;
		  text-align: center;
		  margin: 0 auto;
		  vertical-align: middle;
		  display: block;
		  margin-bottom: 40px;
		  margin-top: 0px;
		  font-family: "Dosis", sans-serif;
		  font-weight: 400;
		}

		.denied__link:hover {
		  color: #ffbb39;
		  border-color: #ffbb39;
		  cursor: pointer;
		  opacity: 1;
		}

		.permission_denied .stars {
		  animation: sparkle 1.6s infinite ease-in-out alternate;
		}

		@keyframes sparkle {
		  0% {
		    opacity: 1;
		  }
		  100% {
		    opacity: 0.3;
		  }
		}

		#astronaut {
		  width: 43px;
		  position: absolute;
		  right: 20px;
		  top: 210px;
		  animation: spin 4.5s infinite linear;
		}

		@keyframes spin {
		  0% {
		    transform: rotateZ(0deg);
		  }
		  100% {
		    transform: rotateZ(360deg);
		  }
		}

		@media (max-width: 600px) {
		  .permission_denied h1 {
		    font-size: 75px;
		  }
		  .permission_denied h3 {
		    font-size: 16px;
		    width: 200px;
		    margin: 0 auto;
		    line-height: 23px;
		  }
		  .permission_denied h3 span {
		    width: 60px;
		  }
		  #astronaut {
		    width: 35px;
		    right: 40px;
		    top: 170px;
		  }
		}

		.saturn,
		.saturn-2,
		.hover {
		  animation: hover 2s infinite ease-in-out alternate;
		}

		@keyframes hover {
		  0% {
		    transform: translateY(3px);
		  }
		  100% {
		    transform: translateY(-3px);
		  }
		}

		body
		{
			background-color: #24344c !important;
		}

	</style>

	<body class="permission_denied" style="background-color: #24344c !important;">
	  <div id="particles-js"></div>
	  <div class="denied__wrapper" style="min-height: 50em; color: white;">
	    <h1>404</h1>
	    <h3>Vous êtes perdu dans l'espace ? Hmm, J'ai l'impression que la page que vous chercher n'existe pas.</h3>
	    <svg id="astronaut" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
	    <style>
	      .st0{fill:none;} .st1{fill:#504E55;} .st2{fill:#F39E72;} .st3{fill:#FFFFFF;} .st4{opacity:0.24;} .st5{fill:#77574E;} .st6{fill:#FBD68D;} .st7{fill:#ECECEC;} .st8{fill:#F4A89C;} .st9{fill:#CFC9E5;} .st10{opacity:0.28;} .st11{opacity:0.25;} .st12{fill:#6F635C;} .st13{fill:#DAE7BE;} .st14{fill:#FFE0A6;} .st15{fill:#5F5E60;} .st16{fill:#CFE1AF;} .st17{fill:#EBE9F5;} .st18{fill:#53515A;} .st19{opacity:0.42;} .st20{fill:#53515B;}
	    </style>

	    <circle cx="256.8" cy="255.3" r="247.9" class="st0"/>
	    <path d="M346.4 475H164.9V244.8c0-14 11.4-25.4 25.4-25.4H321c14 0 25.4 11.4 25.4 25.4V475z" class="st2"/>
	    <path d="M346.4 470H165l5 5V349.9v-80-21.4c0-10.3 3.9-20.3 15-23.3 6.4-1.8 14.2-.7 20.7-.7h112.4c3.3 0 6.5 0 9.7 1.1 8.3 2.9 13.5 10.7 13.7 19.3.1 4.1 0 8.3 0 12.5v217.7c0 6.4 10 6.4 10 0v-130-79.5-19.1c-.1-13.8-7.6-26-21-30.5-7.2-2.4-15.8-1.5-23.3-1.5H192.9c-14.8 0-28.7 8.4-32 23.6-1.1 5.2-.8 10.8-.8 16.1V475c0 2.7 2.3 5 5 5h181.4c6.3 0 6.3-10-.1-10z" class="st1"/>
	    <path d="M164.9 250.3v120.3c0 6-4.9 11-11 11-17.6 0-31.9-14.4-31.9-31.9v-78.3c0-17.6 14.4-31.9 31.9-31.9 3 0 5.8 1.2 7.7 3.2 2.1 1.8 3.3 4.5 3.3 7.6z" class="st3"/>
	    <path d="M159.9 250.3v109.1c0 3.9 1.3 10.8-1 14.3-4.4 7-17.5.4-22.1-3.4-6.2-5.2-9.7-12.7-9.8-20.8-.3-17.8 0-35.6 0-53.3 0-8.3-.1-16.5 0-24.8.1-7.7 3.1-14.9 8.9-20.1 4.7-4.3 23.2-13.2 24-1 .4 6.4 10.4 6.4 10 0-1.7-24.7-33-15.8-43.8-3.2-7.7 9-9.1 19.5-9.1 30.8v68.7c0 13.3 4.7 25.4 15.8 33.3 12.2 8.7 36.4 10.9 37.1-9.5.7-19.1 0-38.3 0-57.4v-62.6c0-6.6-10-6.6-10-.1z" class="st1"/>
	    <path d="M122 339.8h42.9c6.4 0 6.4-10 0-10H122c-6.4 0-6.4 10 0 10z" class="st1"/>
	    <path d="M344.4 241v235.9h-36V232.1c0-4.8-2.2-9.2-5.9-12.8h11.7c16.6.1 30.2 9.8 30.2 21.7z" class="st4 st5"/>
	    <path d="M376 161.2c0 66.4-53.9 120.3-120.3 120.3s-120.3-53.9-120.3-120.3c0-40.5 20-76.2 50.6-98.1 19.7-14 43.7-22.2 69.7-22.2s50 8.2 69.7 22.2C356 84.9 376 120.7 376 161.2z" class="st6"/>
	    <path d="M371 161.2c-.3 45-26.7 86.2-67.7 105.1-40.7 18.7-90.5 11.1-123.9-18.6-34.7-30.8-47.8-80.2-32.7-124.2 4-11.7 10-22.7 17.5-32.5 3.6-4.7 7.6-9.1 11.9-13.2 1.8-1.7 3.6-3.3 5.4-4.9 1.1-.9 2.2-1.9 3.4-2.8.8-.6 1.6-1.3 2.5-1.9-1.8-.1-1.8-.2 0-.4 21.7-16.2 50.1-23.6 77-21.8C324 50.3 370.6 101.8 371 161.2c0 6.4 10 6.4 10 0-.4-55.8-38.1-106.2-92.3-120.9-28.7-7.8-59.6-5-86.4 7.5-3.2 1.5-6.3 3.1-9.3 4.9-1.6.9-3.2 1.9-4.8 2.9-.6.4-1.4.8-2 1.3-.4.3-.9.6-1.3.9.4.1.8.2 1.2.2-.3.3-1.5.2-1.9.4l-2.4 1.5c-1.1.8-2.2 1.7-3.3 2.6-2.7 2.1-5.3 4.3-7.8 6.6-9.6 8.9-17.9 19.4-24.2 30.8-25.2 45-19.6 102 13.3 141.5 31.5 37.9 84.1 53.8 131.4 39.9 46.1-13.6 81.7-53.9 88.6-101.6.9-6.2 1.4-12.4 1.4-18.7-.2-6.3-10.2-6.3-10.2.2z" class="st1"/>
	    <path d="M249.6 478.1h-96.4c-2.7 0-4.8-2.2-4.8-4.8v-10.8c0-27.2 22.3-49.5 49.5-49.5h7c27.2 0 49.5 22.3 49.5 49.5v10.8c.1 2.7-2.1 4.8-4.8 4.8z" class="st3"/>
	    <path d="M249.6 473.1h-93.3c-.5 0-2.7.3-3.1 0-.6-.5.1-7.8.1-9.1 0-5.4.6-10.5 2.3-15.7 7.9-23.8 32.9-33.6 56.2-29.8 14.4 2.3 26.9 11.8 33.2 24.9 2.9 6.1 4.3 12.7 4.3 19.4v6.1c0 2 .8 4.2-1.2 4.5-6.3.9-3.6 10.5 2.7 9.6 6.8-.9 8.5-6.9 8.5-12.8 0-5.1.1-10.2-.6-15.3-2-14.6-10.1-27.7-21.9-36.4-21.6-15.9-55.8-14.2-75.7 3.7-11.2 10.1-17.6 24.6-17.9 39.6-.2 8.4-1.6 20.7 10 21.3 15.1.8 30.4 0 45.5 0h50.7c6.7 0 6.7-10 .2-10z" class="st1"/>
	    <path d="M358.2 478.1h-96.6c-2.6 0-4.7-2.1-4.7-4.7v-9.6c0-28 22.9-50.8 50.8-50.8h4.4c28 0 50.8 22.9 50.8 50.8v9.6c0 2.6-2.1 4.7-4.7 4.7z" class="st3"/>
	    <path d="M358.2 473.1h-92.7c-.8 0-3.1.4-3.8 0 0 0 .2-6.4.2-7.6 0-5.2.5-10.1 2-15.1 7.3-24 32.6-36.2 56.4-31.7 14 2.7 26 11.7 32.6 24.3 3.2 6.2 4.9 13.1 5 20.1v5.5c0 2.1.8 4.4-1 4.7-6.3.9-3.6 10.5 2.7 9.6 6.6-.9 8.4-6.7 8.4-12.5 0-5.4.1-10.8-.8-16.2-2.4-14.4-10.8-27.2-22.5-35.8-22.3-16.2-56.2-13.8-75.9 5.4-10.5 10.3-16.6 24.5-16.9 39.2-.1 8.3-1.2 19.4 10 20 15.4.9 31.1 0 46.5 0h49.8c6.4.1 6.4-9.9 0-9.9z" class="st1"/>
	    <path d="M297.8 366.4h-84.4c-6.6 0-12-5.4-12-12v-47c0-6.6 5.4-12 12-12h84.4c6.6 0 12 5.4 12 12v47c0 6.6-5.4 12-12 12z" class="st3"/>
	    <path d="M297.8 361.4h-62.4c-7.3 0-14.8.6-22 0-6.3-.5-7-5.6-7-10.6v-17.4-19.2c0-3.5-.8-8.4 1.6-11.3 2.4-2.8 5.8-2.5 9-2.5h53.6c8.8 0 17.7-.5 26.5 0 5.5.3 7.5 4.1 7.5 9.1v39.6c.2 5.2.6 11.9-6.8 12.3-6.4.3-6.4 10.3 0 10 9.7-.5 16.6-7.6 17-17.2.2-4.7 0-9.4 0-14v-22.8c0-4.1.4-8.5-.2-12.5-1.3-8.5-8.6-14.1-17-14.4-3.4-.1-6.8 0-10.3 0h-43c-10.1 0-20.2-.3-30.3 0-8 .3-15.1 5-17.1 13.1-1 4.1-.5 8.8-.5 13 0 12.5-.4 25 0 37.5.3 8.4 5.8 15.8 14.4 17.2 3.1.5 6.3.2 9.4.2h77.7c6.4-.1 6.4-10.1-.1-10.1z" class="st1"/>
	    <circle cx="230.7" cy="316.7" r="10.4" class="st7"/>
	    <path d="M236.2 316.7c-.4 7-10.9 7-10.9 0s10.5-7 10.9 0c.3 6.4 10.3 6.4 10 0-.5-8.4-6.7-15.4-15.4-15.4-8.4 0-15.4 7.1-15.4 15.4 0 8.2 6.7 15.1 14.9 15.4 8.9.4 15.6-6.9 16-15.4.2-6.4-9.8-6.4-10.1 0z" class="st1"/>
	    <circle cx="230.7" cy="345.2" r="10.4" class="st8"/>
	    <path d="M236.2 345.2c-.4 7-10.9 7-10.9 0s10.5-7 10.9 0c.3 6.4 10.3 6.4 10 0-.5-8.4-6.7-15.4-15.4-15.4-8.4 0-15.4 7.1-15.4 15.4 0 8.2 6.7 15.1 14.9 15.4 8.9.4 15.6-6.9 16-15.4.2-6.4-9.8-6.4-10.1 0z" class="st1"/>
	    <path d="M371.7 160.3c-.2 47-28.6 87.5-69.2 106.2 21.1-26.3 34.4-60.1 34.4-98.5 0-49.8-21.3-91.8-54.5-118.6-1-.8-2.3-.5-3.3-1.3 15.7 3.5 30 10 42.7 19 30 21.4 50 54.7 49.9 93.2z" class="st4 st5"/>
	    <path d="M243.8 87h26.1c6.4 0 6.4-10 0-10h-26.1c-6.4 0-6.5 10 0 10z" class="st1"/>
	    <path d="M351 157.8c0 24.5-9.3 46.9-24.5 63.8-2.7 2.9-6.4 4.6-10.4 4.6l-120.4.4c-4 0-7.8-1.6-10.4-4.5-15.5-16.9-24.9-39.5-24.9-64.2 0-20.7 6.6-39.8 17.7-55.4 2.7-3.7 7-6 11.6-6h132c4.6 0 8.9 2.2 11.5 6 11.2 15.5 17.8 34.6 17.8 55.3z" class="st9"/>
	    <path d="M346 157.8c-.1 14.7-3.5 29.2-10.4 42.2-3.9 7.4-10.6 20.9-20 21.2-10.5.3-21.1.1-31.6.1-28.8.1-57.7.5-86.5.3-8.6-.1-13.5-8.5-17.8-15.1-7.9-12.3-12.8-26.5-13.9-41.2-1.2-14.9 1.2-30 7.2-43.7 3.4-7.7 8.1-20 17.8-20.2 27.6-.6 55.2 0 82.7 0h41.2c2.3 0 4.8-.2 7.1 0 7 .5 10.2 7.5 13.2 13 3.6 6.5 6.3 13.4 8.2 20.6 1.8 7.5 2.7 15.1 2.8 22.8.1 6.4 10.1 6.4 10 0-.1-15.9-3.8-31.4-10.9-45.6-5.1-10.1-11.3-20.5-23.9-20.8-11.1-.2-22.3 0-33.4 0h-95.5c-7.1 0-13.5 2-18.1 7.9-9.5 12.5-15.5 28.1-17.7 43.6-2.3 15.6-1 31.8 4.1 46.7 2.4 7.2 5.6 14.1 9.6 20.5 3.7 6 8.2 12.9 13.8 17.3 4.8 3.8 10.3 4.1 16.1 4 5.9 0 11.9 0 17.8-.1 18.4-.1 36.9-.1 55.3-.2 13.5 0 27.1-.1 40.6-.1 8.6 0 14.4-3.5 19.8-10.2 9.4-11.7 16.3-25.3 19.7-40 1.8-7.6 2.6-15.4 2.7-23.2 0-6.2-10-6.2-10 .2z" class="st1"/>
	    <path d="M181.6 111.8c-4.1 7.1-7.1 14.7-8.6 22.8-1.7 8.6 11.5 12.3 13.2 3.6 1.4-7 3.7-13.3 7.3-19.5 4.4-7.6-7.5-14.5-11.9-6.9zM182.4 166.4c-.4-3-.5-6.5-.4-9.8.1-3.7-3.2-6.9-6.9-6.9-3.8 0-6.7 3.1-6.9 6.9-.2 4.5.2 8.9.9 13.4.5 3.7 5.2 5.7 8.4 4.8 4-1.1 5.4-4.8 4.9-8.4z" class="st3"/>
	    <path d="M357.9 465v1c.6 8.8 1.5 7.2-8.3 7.1h-7.8c1.5-1.9 1.8-2.4 1.8-5.1v-1.1c0-14.1-5.3-26.9-13.7-36.2-5.5-6-12.3-10.3-19.8-12.7.8 0 1.6.1 2.4.1 13.1.8 25.1 6 33.2 14.6 8.1 8.6 12.2 19.5 12.2 32.3z" class="st10 st5"/>
	    <path d="M362.5 381.5h1.8c13.8 0 25.1-11.3 25.1-25.1v-92.1c0-13.8-11.3-25.1-25.1-25.1h-6.5c-6.3 0-11.4 5.1-11.4 11.4v114.8c0 8.9 7.2 16.1 16.1 16.1z" class="st3"/>
	    <path d="M362.5 386.5c17.5 0 31.5-12.6 31.9-30.4.2-8.2 0-16.4 0-24.6 0-22.3.5-44.6 0-66.8-.3-17.1-13.6-30.3-30.8-30.4-7.6-.1-15.3.4-19.7 7.7-2.1 3.5-2.4 7.2-2.4 11v106.4c0 2-.1 4 0 6 .3 11.8 9.2 20.6 21 21.1 6.4.3 6.4-9.7 0-10-10.8-.5-11.1-10-11.1-18.1v-28.5-69c0-4.8-1.6-13.9 3.9-16.2 5-2.1 14.1-.4 18.5 2 6.6 3.6 10.4 10.4 10.5 17.8.4 18.6 0 37.2 0 55.8v32.6c0 3.5.1 6.8-1.1 10.2-3.2 9.1-11.6 13.5-20.7 13.5-6.5-.1-6.5 9.9 0 9.9z" class="st1"/>
	    <path d="M346.4 343.9h42.9c6.4 0 6.4-10 0-10h-42.9c-6.4 0-6.5 10 0 10z" class="st1"/>
	    <path d="M384.5 269.3v80.5c1.6 20.1-11.2 27.9-24.1 26.2-1.5-.2-3-.4-4.3-1.2 11.2-3.6 19.4-15.1 19.4-28.6v-73c0-13.5-8.2-25-19.4-28.6 2.3-.9 2.8-1.2 4.3-1.2 14.8.1 25.2 10.4 24.1 25.9z" class="st11 st12"/>
	    <path d="M371.6 128.9l25.1-23.8" class="st13"/>
	    <path d="M375.1 132.4c8.4-7.9 16.7-15.8 25.1-23.8 4.7-4.4-2.4-11.5-7.1-7.1-8.4 7.9-16.7 15.8-25.1 23.8-4.6 4.5 2.4 11.5 7.1 7.1z" class="st1"/>
	    <path d="M139.7 128.9l-25.1-23.8" class="st13"/>
	    <path d="M143.3 125.3c-8.4-7.9-16.7-15.8-25.1-23.8-4.7-4.4-11.8 2.6-7.1 7.1 8.4 7.9 16.7 15.8 25.1 23.8 4.7 4.4 11.7-2.6 7.1-7.1z" class="st1"/>
	    <circle cx="114.6" cy="105.1" r="4.8" class="st14"/>
	    <path d="M114.4 105.1c0-.5.1-.1-.1.2.1-.2.5-.7.1-.3-.4.4.1 0 .2-.1.3-.2-.7 0 0 0 .5 0 .1.1-.2-.1.2.1.7.5.3.1-.5-.5.2.2.1.2.1.2.1.2 0-.1-.1-.3-.1-.3 0 .1 0 .7.1-.2.1-.2.1.1-.2.4-.3.5.5-.7.2-.3 0-.1-.3.2.5 0 .2-.1-.6-.1-.4-.1 0 .1-.2-.1-.3-.1-.5-.3.6.6.2.1.1.1-.1-.2-.1-.2 0 0 .1.4.1.4 0 0 .1 2.7 2.2 5 5 5 2.6 0 5.1-2.3 5-5-.3-5.3-4.3-9.8-9.8-9.8-5.4 0-9.7 4.5-9.8 9.8-.1 5.3 4.4 9.6 9.5 9.8 5.6.2 9.8-4.4 10-9.8.1-2.7-2.4-5-5-5-2.7 0-4.7 2.3-4.9 5z" class="st15"/>
	    <circle cx="396.7" cy="105.1" r="4.8" class="st16"/>
	    <path d="M396.4 105.1c0-.5.1-.1-.1.2.1-.2.5-.7.1-.3-.4.4.1 0 .2-.1.3-.2-.7 0 0 0 .5 0 .1.1-.2-.1.2.1.7.5.3.1-.5-.5.2.2.1.2.1.2.1.2 0-.1-.1-.3-.1-.3 0 .1 0 .7.1-.2.1-.2.1.1-.2.4-.3.5.5-.7.2-.3 0-.1-.3.2.5 0 .2-.1-.6-.1-.4-.1 0 .1-.2-.1-.3-.1-.5-.3.6.6.2.1.1.1 0-.2 0-.2 0 0 .1.4.1.4 0 0 .1 2.7 2.2 5 5 5 2.6 0 5.1-2.3 5-5-.3-5.3-4.3-9.8-9.8-9.8-5.4 0-9.7 4.5-9.8 9.8-.1 5.3 4.4 9.6 9.5 9.8 5.6.2 9.8-4.4 10-9.8.1-2.7-2.4-5-5-5-2.7 0-4.7 2.3-4.9 5z" class="st15"/>
	    <path d="M351.9 478.1H376" class="st3"/>
	    <g>
	      <path d="M138 478.1h-18.3" class="st3"/>
	    </g>
	    <g>
	      <path d="M307.6 397.2h4.6c2.6 0 5.1-2.3 5-5-.1-2.7-2.2-5-5-5h-4.6c-2.6 0-5.1 2.3-5 5 .1 2.7 2.2 5 5 5z" class="st1"/>
	    </g>
	    <g>
	      <path d="M199.2 397.2h4.6c2.6 0 5.1-2.3 5-5-.1-2.7-2.2-5-5-5h-4.6c-2.6 0-5.1 2.3-5 5 .1 2.7 2.2 5 5 5z" class="st1"/>
	    </g>
	    <g class="st10">
	      <path d="M249.5 465v1c.6 8.8 1.5 7.2-8.3 7.1h-7.8c1.5-1.9 1.8-2.4 1.8-5.1v-1.1c0-14.1-5.3-26.9-13.7-36.2-5.5-6-12.3-10.3-19.8-12.7.8 0 1.6.1 2.4.1 13.1.8 26.6 5.6 34.7 14.2 8.1 8.6 10.7 19.9 10.7 32.7z" class="st5"/>
	    </g>

	  </svg>
	    <svg id="planet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
	    <circle class="saturn" cx="256" cy="256" r="149.536" fill="#FF4F54"/>
	    <g class="saturn-2" fill="#EA4753">
	      <path d="M109.388 285.56c42.515 1.428 157.943-2.613 289.462-73.807-5.11-16.448-13.02-31.882-23.322-45.604-42.716 29.386-140.403 83.922-268.457 76.27-1.354 14.666-.508 29.175 2.318 43.14zM400.734 293.587c3.976-15.31 5.422-30.68 4.614-45.672-33.75 25.31-137.237 92.367-277.65 84.876 6.507 10.874 14.383 20.93 23.472 29.88 44.354.286 137.696-6.443 245.93-57.163 1.362-3.89 2.58-7.86 3.634-11.92zM245.488 405.184c35.427 2.537 69.784-7.742 97.543-27.59-27.972 11.533-60.787 21.76-97.542 27.59zM348.02 138.097c-15.645-12.225-33.99-21.522-54.434-26.832-71.883-18.667-145.126 18.253-174.25 84.01 49.02-1.676 133.073-12.256 228.685-57.178z"/>
	    </g>
	    <circle class="hover" cx="319.166" cy="208.081" r="28.389" fill="#D83A4E"/>
	    <path d="M331.25 189.492c6.04 1.568 11.114 4.97 14.792 9.452-2.98-8.73-10.143-15.848-19.74-18.34-15.175-3.94-30.672 5.167-34.613 20.342-2.373 9.136-.012 18.384 5.55 25.162-1.73-5.075-2.05-10.695-.602-16.273 3.94-15.177 19.438-24.284 34.613-20.343z" opacity=".1"/>
	    <circle class="hover" cx="234.463" cy="273.978" r="19.358" fill="#D83A4E"/>
	    <path d="M242.703 261.303c4.118 1.07 7.578 3.39 10.085 6.444-2.03-5.953-6.916-10.806-13.46-12.505-10.347-2.687-20.914 3.523-23.6 13.87-1.62 6.23-.008 12.537 3.785 17.158-1.18-3.46-1.398-7.293-.41-11.097 2.686-10.348 13.252-16.558 23.6-13.87z" opacity=".1"/>
	    <circle class="hover" cx="307.493" cy="144.207" r="12.584" fill="#D83A4E"/>
	    <path d="M312.85 135.967c2.678.695 4.927 2.204 6.557 4.19-1.32-3.872-4.496-7.026-8.75-8.13-6.727-1.747-13.596 2.29-15.343 9.017-1.052 4.05-.005 8.15 2.46 11.153-.767-2.25-.908-4.74-.267-7.213 1.747-6.727 8.616-10.764 15.343-9.017z" opacity=".1"/>
	    <circle class="hover" cx="163.289" cy="255.495" r="19.358" fill="#D83A4E"/>
	    <path d="M171.53 242.82c4.118 1.068 7.577 3.388 10.084 6.443-2.03-5.954-6.916-10.806-13.46-12.505-10.348-2.687-20.915 3.523-23.602 13.87-1.618 6.23-.008 12.536 3.785 17.158-1.18-3.46-1.398-7.293-.41-11.097 2.687-10.348 13.255-16.558 23.602-13.87z" opacity=".1"/>
	    <circle class="hover" cx="230.586" cy="365.92" r="19.358" fill="#D83A4E"/>
	    <path d="M238.826 353.245c4.118 1.07 7.578 3.39 10.085 6.444-2.03-5.954-6.915-10.807-13.46-12.506-10.347-2.688-20.914 3.522-23.6 13.87-1.62 6.23-.01 12.536 3.784 17.157-1.18-3.46-1.398-7.292-.41-11.096 2.688-10.346 13.255-16.556 23.602-13.87z" opacity=".1"/>
	    <circle class="hover" cx="302.221" cy="353.781" r="19.357" fill="#D83A4E"/>
	    <path d="M310.462 341.105c4.118 1.07 7.577 3.39 10.085 6.445-2.03-5.954-6.916-10.807-13.46-12.506-10.348-2.688-20.914 3.523-23.602 13.87-1.618 6.23-.008 12.536 3.785 17.157-1.18-3.46-1.398-7.29-.41-11.095 2.687-10.346 13.254-16.556 23.602-13.87z" opacity=".1"/>
	    <circle class="hover" cx="358.827" cy="284.847" r="11.079" fill="#D83A4E"/>
	    <path d="M363.542 277.593c2.357.612 4.337 1.94 5.772 3.688-1.162-3.406-3.958-6.184-7.703-7.156-5.922-1.537-11.97 2.017-13.507 7.938-.926 3.565-.005 7.175 2.166 9.82-.676-1.98-.8-4.175-.235-6.352 1.537-5.92 7.585-9.475 13.507-7.937z" opacity=".1"/>
	    <circle class="hover" cx="220.465" cy="156.416" r="11.079" fill="#D83A4E"/>
	    <path d="M225.18 149.162c2.358.612 4.338 1.94 5.773 3.688-1.162-3.408-3.958-6.185-7.703-7.157-5.922-1.538-11.97 2.016-13.508 7.938-.926 3.566-.004 7.175 2.167 9.82-.677-1.98-.8-4.174-.236-6.35 1.537-5.922 7.585-9.476 13.507-7.938z" opacity=".1"/>
	    <circle class="hover" cx="154.027" cy="171.743" r="5.819" fill="#D83A4E"/>
	    <path d="M156.504 167.933c1.238.322 2.278 1.02 3.03 1.938-.61-1.79-2.078-3.248-4.045-3.758-3.11-.808-6.288 1.06-7.095 4.17-.486 1.872-.002 3.767 1.138 5.156-.354-1.04-.42-2.192-.124-3.335.807-3.11 3.984-4.978 7.094-4.17z" opacity=".1"/>
	    <circle class="hover" cx="391.387" cy="251.305" r="5.819" fill="#D83A4E"/>
	    <path d="M393.864 247.495c1.237.32 2.277 1.02 3.03 1.937-.61-1.79-2.078-3.248-4.045-3.76-3.11-.807-6.288 1.06-7.096 4.17-.486 1.873-.002 3.768 1.138 5.158-.354-1.04-.42-2.192-.123-3.336.807-3.11 3.983-4.977 7.094-4.17z" opacity=".1"/>
	    <circle class="hover" cx="145.077" cy="302.473" r="5.819" fill="#D83A4E"/>
	    <path d="M147.554 298.662c1.238.322 2.277 1.02 3.03 1.938-.61-1.79-2.078-3.248-4.045-3.76-3.11-.807-6.288 1.06-7.096 4.17-.486 1.873-.002 3.77 1.138 5.157-.355-1.04-.42-2.19-.124-3.335.81-3.11 3.985-4.978 7.096-4.17z" opacity=".1"/>
	    <circle class="hover" cx="187.342" cy="355.265" r="5.819" fill="#D83A4E"/>
	    <path d="M189.818 351.455c1.238.32 2.278 1.02 3.032 1.938-.61-1.79-2.08-3.25-4.046-3.76-3.11-.808-6.287 1.06-7.095 4.17-.487 1.872-.003 3.768 1.137 5.157-.354-1.04-.42-2.192-.123-3.336.808-3.11 3.984-4.977 7.094-4.17z" opacity=".1"/>
	    <path d="M351.36 140.785c10.244 27.673 12.43 58.646 4.45 89.372-20.76 79.935-102.387 127.907-182.32 107.15-21.917-5.693-41.423-15.968-57.776-29.522 16.405 44.32 53.49 80.17 102.7 92.95 79.934 20.758 161.562-27.214 182.32-107.148 15.068-58.02-6.082-116.922-49.373-152.802z" opacity=".1"/>
	    <g>
	      <path class="stars" fill="#FFF" d="M112.456 363.093c-.056 7.866-6.478 14.197-14.344 14.142 7.866.056 14.198 6.48 14.142 14.345.056-7.866 6.48-14.198 14.345-14.142-7.868-.057-14.2-6.48-14.144-14.345zM432.436 274.908c-.056 7.866-6.478 14.198-14.344 14.142 7.866.057 14.197 6.48 14.142 14.345.056-7.866 6.48-14.197 14.345-14.142-7.868-.056-14.2-6.48-14.144-14.345zM159.75 58.352c-.12 16.537-13.62 29.848-30.157 29.73 16.537.118 29.848 13.62 29.73 30.156.118-16.537 13.62-29.848 30.156-29.73-16.54-.117-29.85-13.62-29.73-30.156z"/>
	    </g>
	  </svg>
	    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><button class="denied__link">Accueil</button></a>
	  </div>

	 <script type="text/javascript">
			/* -----------------------------------------------
			/* Author : Vincent Garreau  - vincentgarreau.com
			/* MIT license: http://opensource.org/licenses/MIT
			/* Demo / Generator : vincentgarreau.com/particles.js
			/* GitHub : github.com/VincentGarreau/particles.js
			/* How to use? : Check the GitHub README
			/* v2.0.0
			/* ----------------------------------------------- */

			var pJS = function(tag_id, params){

			  var canvas_el = document.querySelector('#'+tag_id+' > .particles-js-canvas-el');

			  /* particles.js variables with default values */
			  this.pJS = {
			    canvas: {
			      el: canvas_el,
			      w: canvas_el.offsetWidth,
			      h: canvas_el.offsetHeight
			    },
			    particles: {
			      number: {
			        value: 400,
			        density: {
			          enable: true,
			          value_area: 800
			        }
			      },
			      color: {
			        value: '#fff'
			      },
			      shape: {
			        type: 'circle',
			        stroke: {
			          width: 0,
			          color: '#ff0000'
			        },
			        polygon: {
			          nb_sides: 5
			        },
			        image: {
			          src: '',
			          width: 100,
			          height: 100
			        }
			      },
			      opacity: {
			        value: 1,
			        random: false,
			        anim: {
			          enable: false,
			          speed: 2,
			          opacity_min: 0,
			          sync: false
			        }
			      },
			      size: {
			        value: 20,
			        random: false,
			        anim: {
			          enable: false,
			          speed: 20,
			          size_min: 0,
			          sync: false
			        }
			      },
			      line_linked: {
			        enable: true,
			        distance: 100,
			        color: '#fff',
			        opacity: 1,
			        width: 1
			      },
			      move: {
			        enable: true,
			        speed: 2,
			        direction: 'none',
			        random: false,
			        straight: false,
			        out_mode: 'out',
			        bounce: false,
			        attract: {
			          enable: false,
			          rotateX: 3000,
			          rotateY: 3000
			        }
			      },
			      array: []
			    },
			    interactivity: {
			      detect_on: 'canvas',
			      events: {
			        onhover: {
			          enable: true,
			          mode: 'grab'
			        },
			        onclick: {
			          enable: true,
			          mode: 'push'
			        },
			        resize: true
			      },
			      modes: {
			        grab:{
			          distance: 100,
			          line_linked:{
			            opacity: 1
			          }
			        },
			        bubble:{
			          distance: 200,
			          size: 80,
			          duration: 0.4
			        },
			        repulse:{
			          distance: 200,
			          duration: 0.4
			        },
			        push:{
			          particles_nb: 4
			        },
			        remove:{
			          particles_nb: 2
			        }
			      },
			      mouse:{}
			    },
			    retina_detect: false,
			    fn: {
			      interact: {},
			      modes: {},
			      vendors:{}
			    },
			    tmp: {}
			  };

			  var pJS = this.pJS;

			  /* params settings */
			  if(params){
			    Object.deepExtend(pJS, params);
			  }

			  pJS.tmp.obj = {
			    size_value: pJS.particles.size.value,
			    size_anim_speed: pJS.particles.size.anim.speed,
			    move_speed: pJS.particles.move.speed,
			    line_linked_distance: pJS.particles.line_linked.distance,
			    line_linked_width: pJS.particles.line_linked.width,
			    mode_grab_distance: pJS.interactivity.modes.grab.distance,
			    mode_bubble_distance: pJS.interactivity.modes.bubble.distance,
			    mode_bubble_size: pJS.interactivity.modes.bubble.size,
			    mode_repulse_distance: pJS.interactivity.modes.repulse.distance
			  };


			  pJS.fn.retinaInit = function(){

			    if(pJS.retina_detect && window.devicePixelRatio > 1){
			      pJS.canvas.pxratio = window.devicePixelRatio; 
			      pJS.tmp.retina = true;
			    } 
			    else{
			      pJS.canvas.pxratio = 1;
			      pJS.tmp.retina = false;
			    }

			    pJS.canvas.w = pJS.canvas.el.offsetWidth * pJS.canvas.pxratio;
			    pJS.canvas.h = pJS.canvas.el.offsetHeight * pJS.canvas.pxratio;

			    pJS.particles.size.value = pJS.tmp.obj.size_value * pJS.canvas.pxratio;
			    pJS.particles.size.anim.speed = pJS.tmp.obj.size_anim_speed * pJS.canvas.pxratio;
			    pJS.particles.move.speed = pJS.tmp.obj.move_speed * pJS.canvas.pxratio;
			    pJS.particles.line_linked.distance = pJS.tmp.obj.line_linked_distance * pJS.canvas.pxratio;
			    pJS.interactivity.modes.grab.distance = pJS.tmp.obj.mode_grab_distance * pJS.canvas.pxratio;
			    pJS.interactivity.modes.bubble.distance = pJS.tmp.obj.mode_bubble_distance * pJS.canvas.pxratio;
			    pJS.particles.line_linked.width = pJS.tmp.obj.line_linked_width * pJS.canvas.pxratio;
			    pJS.interactivity.modes.bubble.size = pJS.tmp.obj.mode_bubble_size * pJS.canvas.pxratio;
			    pJS.interactivity.modes.repulse.distance = pJS.tmp.obj.mode_repulse_distance * pJS.canvas.pxratio;

			  };



			  /* ---------- pJS functions - canvas ------------ */

			  pJS.fn.canvasInit = function(){
			    pJS.canvas.ctx = pJS.canvas.el.getContext('2d');
			  };

			  pJS.fn.canvasSize = function(){

			    pJS.canvas.el.width = pJS.canvas.w;
			    pJS.canvas.el.height = pJS.canvas.h;

			    if(pJS && pJS.interactivity.events.resize){

			      window.addEventListener('resize', function(){

			          pJS.canvas.w = pJS.canvas.el.offsetWidth;
			          pJS.canvas.h = pJS.canvas.el.offsetHeight;

			          /* resize canvas */
			          if(pJS.tmp.retina){
			            pJS.canvas.w *= pJS.canvas.pxratio;
			            pJS.canvas.h *= pJS.canvas.pxratio;
			          }

			          pJS.canvas.el.width = pJS.canvas.w;
			          pJS.canvas.el.height = pJS.canvas.h;

			          /* repaint canvas on anim disabled */
			          if(!pJS.particles.move.enable){
			            pJS.fn.particlesEmpty();
			            pJS.fn.particlesCreate();
			            pJS.fn.particlesDraw();
			            pJS.fn.vendors.densityAutoParticles();
			          }

			        /* density particles enabled */
			        pJS.fn.vendors.densityAutoParticles();

			      });

			    }

			  };


			  pJS.fn.canvasPaint = function(){
			    pJS.canvas.ctx.fillRect(0, 0, pJS.canvas.w, pJS.canvas.h);
			  };

			  pJS.fn.canvasClear = function(){
			    pJS.canvas.ctx.clearRect(0, 0, pJS.canvas.w, pJS.canvas.h);
			  };


			  /* --------- pJS functions - particles ----------- */

			  pJS.fn.particle = function(color, opacity, position){

			    /* size */
			    this.radius = (pJS.particles.size.random ? Math.random() : 1) * pJS.particles.size.value;
			    if(pJS.particles.size.anim.enable){
			      this.size_status = false;
			      this.vs = pJS.particles.size.anim.speed / 100;
			      if(!pJS.particles.size.anim.sync){
			        this.vs = this.vs * Math.random();
			      }
			    }

			    /* position */
			    this.x = position ? position.x : Math.random() * pJS.canvas.w;
			    this.y = position ? position.y : Math.random() * pJS.canvas.h;

			    /* check position  - into the canvas */
			    if(this.x > pJS.canvas.w - this.radius*2) this.x = this.x - this.radius;
			    else if(this.x < this.radius*2) this.x = this.x + this.radius;
			    if(this.y > pJS.canvas.h - this.radius*2) this.y = this.y - this.radius;
			    else if(this.y < this.radius*2) this.y = this.y + this.radius;

			    /* check position - avoid overlap */
			    if(pJS.particles.move.bounce){
			      pJS.fn.vendors.checkOverlap(this, position);
			    }

			    /* color */
			    this.color = {};
			    if(typeof(color.value) == 'object'){

			      if(color.value instanceof Array){
			        var color_selected = color.value[Math.floor(Math.random() * pJS.particles.color.value.length)];
			        this.color.rgb = hexToRgb(color_selected);
			      }else{
			        if(color.value.r != undefined && color.value.g != undefined && color.value.b != undefined){
			          this.color.rgb = {
			            r: color.value.r,
			            g: color.value.g,
			            b: color.value.b
			          }
			        }
			        if(color.value.h != undefined && color.value.s != undefined && color.value.l != undefined){
			          this.color.hsl = {
			            h: color.value.h,
			            s: color.value.s,
			            l: color.value.l
			          }
			        }
			      }

			    }
			    else if(color.value == 'random'){
			      this.color.rgb = {
			        r: (Math.floor(Math.random() * (255 - 0 + 1)) + 0),
			        g: (Math.floor(Math.random() * (255 - 0 + 1)) + 0),
			        b: (Math.floor(Math.random() * (255 - 0 + 1)) + 0)
			      }
			    }
			    else if(typeof(color.value) == 'string'){
			      this.color = color;
			      this.color.rgb = hexToRgb(this.color.value);
			    }

			    /* opacity */
			    this.opacity = (pJS.particles.opacity.random ? Math.random() : 1) * pJS.particles.opacity.value;
			    if(pJS.particles.opacity.anim.enable){
			      this.opacity_status = false;
			      this.vo = pJS.particles.opacity.anim.speed / 100;
			      if(!pJS.particles.opacity.anim.sync){
			        this.vo = this.vo * Math.random();
			      }
			    }

			    /* animation - velocity for speed */
			    var velbase = {}
			    switch(pJS.particles.move.direction){
			      case 'top':
			        velbase = { x:0, y:-1 };
			      break;
			      case 'top-right':
			        velbase = { x:0.5, y:-0.5 };
			      break;
			      case 'right':
			        velbase = { x:1, y:-0 };
			      break;
			      case 'bottom-right':
			        velbase = { x:0.5, y:0.5 };
			      break;
			      case 'bottom':
			        velbase = { x:0, y:1 };
			      break;
			      case 'bottom-left':
			        velbase = { x:-0.5, y:1 };
			      break;
			      case 'left':
			        velbase = { x:-1, y:0 };
			      break;
			      case 'top-left':
			        velbase = { x:-0.5, y:-0.5 };
			      break;
			      default:
			        velbase = { x:0, y:0 };
			      break;
			    }

			    if(pJS.particles.move.straight){
			      this.vx = velbase.x;
			      this.vy = velbase.y;
			      if(pJS.particles.move.random){
			        this.vx = this.vx * (Math.random());
			        this.vy = this.vy * (Math.random());
			      }
			    }else{
			      this.vx = velbase.x + Math.random()-0.5;
			      this.vy = velbase.y + Math.random()-0.5;
			    }

			    // var theta = 2.0 * Math.PI * Math.random();
			    // this.vx = Math.cos(theta);
			    // this.vy = Math.sin(theta);

			    this.vx_i = this.vx;
			    this.vy_i = this.vy;

			    

			    /* if shape is image */

			    var shape_type = pJS.particles.shape.type;
			    if(typeof(shape_type) == 'object'){
			      if(shape_type instanceof Array){
			        var shape_selected = shape_type[Math.floor(Math.random() * shape_type.length)];
			        this.shape = shape_selected;
			      }
			    }else{
			      this.shape = shape_type;
			    }

			    if(this.shape == 'image'){
			      var sh = pJS.particles.shape;
			      this.img = {
			        src: sh.image.src,
			        ratio: sh.image.width / sh.image.height
			      }
			      if(!this.img.ratio) this.img.ratio = 1;
			      if(pJS.tmp.img_type == 'svg' && pJS.tmp.source_svg != undefined){
			        pJS.fn.vendors.createSvgImg(this);
			        if(pJS.tmp.pushing){
			          this.img.loaded = false;
			        }
			      }
			    }

			    

			  };


			  pJS.fn.particle.prototype.draw = function() {

			    var p = this;

			    if(p.radius_bubble != undefined){
			      var radius = p.radius_bubble; 
			    }else{
			      var radius = p.radius;
			    }

			    if(p.opacity_bubble != undefined){
			      var opacity = p.opacity_bubble;
			    }else{
			      var opacity = p.opacity;
			    }

			    if(p.color.rgb){
			      var color_value = 'rgba('+p.color.rgb.r+','+p.color.rgb.g+','+p.color.rgb.b+','+opacity+')';
			    }else{
			      var color_value = 'hsla('+p.color.hsl.h+','+p.color.hsl.s+'%,'+p.color.hsl.l+'%,'+opacity+')';
			    }

			    pJS.canvas.ctx.fillStyle = color_value;
			    pJS.canvas.ctx.beginPath();

			    switch(p.shape){

			      case 'circle':
			        pJS.canvas.ctx.arc(p.x, p.y, radius, 0, Math.PI * 2, false);
			      break;

			      case 'edge':
			        pJS.canvas.ctx.rect(p.x-radius, p.y-radius, radius*2, radius*2);
			      break;

			      case 'triangle':
			        pJS.fn.vendors.drawShape(pJS.canvas.ctx, p.x-radius, p.y+radius / 1.66, radius*2, 3, 2);
			      break;

			      case 'polygon':
			        pJS.fn.vendors.drawShape(
			          pJS.canvas.ctx,
			          p.x - radius / (pJS.particles.shape.polygon.nb_sides/3.5), // startX
			          p.y - radius / (2.66/3.5), // startY
			          radius*2.66 / (pJS.particles.shape.polygon.nb_sides/3), // sideLength
			          pJS.particles.shape.polygon.nb_sides, // sideCountNumerator
			          1 // sideCountDenominator
			        );
			      break;

			      case 'star':
			        pJS.fn.vendors.drawShape(
			          pJS.canvas.ctx,
			          p.x - radius*2 / (pJS.particles.shape.polygon.nb_sides/4), // startX
			          p.y - radius / (2*2.66/3.5), // startY
			          radius*2*2.66 / (pJS.particles.shape.polygon.nb_sides/3), // sideLength
			          pJS.particles.shape.polygon.nb_sides, // sideCountNumerator
			          2 // sideCountDenominator
			        );
			      break;

			      case 'image':

			        function draw(){
			          pJS.canvas.ctx.drawImage(
			            img_obj,
			            p.x-radius,
			            p.y-radius,
			            radius*2,
			            radius*2 / p.img.ratio
			          );
			        }

			        if(pJS.tmp.img_type == 'svg'){
			          var img_obj = p.img.obj;
			        }else{
			          var img_obj = pJS.tmp.img_obj;
			        }

			        if(img_obj){
			          draw();
			        }

			      break;

			    }

			    pJS.canvas.ctx.closePath();

			    if(pJS.particles.shape.stroke.width > 0){
			      pJS.canvas.ctx.strokeStyle = pJS.particles.shape.stroke.color;
			      pJS.canvas.ctx.lineWidth = pJS.particles.shape.stroke.width;
			      pJS.canvas.ctx.stroke();
			    }
			    
			    pJS.canvas.ctx.fill();
			    
			  };


			  pJS.fn.particlesCreate = function(){
			    for(var i = 0; i < pJS.particles.number.value; i++) {
			      pJS.particles.array.push(new pJS.fn.particle(pJS.particles.color, pJS.particles.opacity.value));
			    }
			  };

			  pJS.fn.particlesUpdate = function(){

			    for(var i = 0; i < pJS.particles.array.length; i++){

			      /* the particle */
			      var p = pJS.particles.array[i];

			      // var d = ( dx = pJS.interactivity.mouse.click_pos_x - p.x ) * dx + ( dy = pJS.interactivity.mouse.click_pos_y - p.y ) * dy;
			      // var f = -BANG_SIZE / d;
			      // if ( d < BANG_SIZE ) {
			      //     var t = Math.atan2( dy, dx );
			      //     p.vx = f * Math.cos(t);
			      //     p.vy = f * Math.sin(t);
			      // }

			      /* move the particle */
			      if(pJS.particles.move.enable){
			        var ms = pJS.particles.move.speed/2;
			        p.x += p.vx * ms;
			        p.y += p.vy * ms;
			      }

			      /* change opacity status */
			      if(pJS.particles.opacity.anim.enable) {
			        if(p.opacity_status == true) {
			          if(p.opacity >= pJS.particles.opacity.value) p.opacity_status = false;
			          p.opacity += p.vo;
			        }else {
			          if(p.opacity <= pJS.particles.opacity.anim.opacity_min) p.opacity_status = true;
			          p.opacity -= p.vo;
			        }
			        if(p.opacity < 0) p.opacity = 0;
			      }

			      /* change size */
			      if(pJS.particles.size.anim.enable){
			        if(p.size_status == true){
			          if(p.radius >= pJS.particles.size.value) p.size_status = false;
			          p.radius += p.vs;
			        }else{
			          if(p.radius <= pJS.particles.size.anim.size_min) p.size_status = true;
			          p.radius -= p.vs;
			        }
			        if(p.radius < 0) p.radius = 0;
			      }

			      /* change particle position if it is out of canvas */
			      if(pJS.particles.move.out_mode == 'bounce'){
			        var new_pos = {
			          x_left: p.radius,
			          x_right:  pJS.canvas.w,
			          y_top: p.radius,
			          y_bottom: pJS.canvas.h
			        }
			      }else{
			        var new_pos = {
			          x_left: -p.radius,
			          x_right: pJS.canvas.w + p.radius,
			          y_top: -p.radius,
			          y_bottom: pJS.canvas.h + p.radius
			        }
			      }

			      if(p.x - p.radius > pJS.canvas.w){
			        p.x = new_pos.x_left;
			        p.y = Math.random() * pJS.canvas.h;
			      }
			      else if(p.x + p.radius < 0){
			        p.x = new_pos.x_right;
			        p.y = Math.random() * pJS.canvas.h;
			      }
			      if(p.y - p.radius > pJS.canvas.h){
			        p.y = new_pos.y_top;
			        p.x = Math.random() * pJS.canvas.w;
			      }
			      else if(p.y + p.radius < 0){
			        p.y = new_pos.y_bottom;
			        p.x = Math.random() * pJS.canvas.w;
			      }

			      /* out of canvas modes */
			      switch(pJS.particles.move.out_mode){
			        case 'bounce':
			          if (p.x + p.radius > pJS.canvas.w) p.vx = -p.vx;
			          else if (p.x - p.radius < 0) p.vx = -p.vx;
			          if (p.y + p.radius > pJS.canvas.h) p.vy = -p.vy;
			          else if (p.y - p.radius < 0) p.vy = -p.vy;
			        break;
			      }

			      /* events */
			      if(isInArray('grab', pJS.interactivity.events.onhover.mode)){
			        pJS.fn.modes.grabParticle(p);
			      }

			      if(isInArray('bubble', pJS.interactivity.events.onhover.mode) || isInArray('bubble', pJS.interactivity.events.onclick.mode)){
			        pJS.fn.modes.bubbleParticle(p);
			      }

			      if(isInArray('repulse', pJS.interactivity.events.onhover.mode) || isInArray('repulse', pJS.interactivity.events.onclick.mode)){
			        pJS.fn.modes.repulseParticle(p);
			      }

			      /* interaction auto between particles */
			      if(pJS.particles.line_linked.enable || pJS.particles.move.attract.enable){
			        for(var j = i + 1; j < pJS.particles.array.length; j++){
			          var p2 = pJS.particles.array[j];

			          /* link particles */
			          if(pJS.particles.line_linked.enable){
			            pJS.fn.interact.linkParticles(p,p2);
			          }

			          /* attract particles */
			          if(pJS.particles.move.attract.enable){
			            pJS.fn.interact.attractParticles(p,p2);
			          }

			          /* bounce particles */
			          if(pJS.particles.move.bounce){
			            pJS.fn.interact.bounceParticles(p,p2);
			          }

			        }
			      }


			    }

			  };

			  pJS.fn.particlesDraw = function(){

			    /* clear canvas */
			    pJS.canvas.ctx.clearRect(0, 0, pJS.canvas.w, pJS.canvas.h);

			    /* update each particles param */
			    pJS.fn.particlesUpdate();

			    /* draw each particle */
			    for(var i = 0; i < pJS.particles.array.length; i++){
			      var p = pJS.particles.array[i];
			      p.draw();
			    }

			  };

			  pJS.fn.particlesEmpty = function(){
			    pJS.particles.array = [];
			  };

			  pJS.fn.particlesRefresh = function(){

			    /* init all */
			    cancelRequestAnimFrame(pJS.fn.checkAnimFrame);
			    cancelRequestAnimFrame(pJS.fn.drawAnimFrame);
			    pJS.tmp.source_svg = undefined;
			    pJS.tmp.img_obj = undefined;
			    pJS.tmp.count_svg = 0;
			    pJS.fn.particlesEmpty();
			    pJS.fn.canvasClear();
			    
			    /* restart */
			    pJS.fn.vendors.start();

			  };


			  /* ---------- pJS functions - particles interaction ------------ */

			  pJS.fn.interact.linkParticles = function(p1, p2){

			    var dx = p1.x - p2.x,
			        dy = p1.y - p2.y,
			        dist = Math.sqrt(dx*dx + dy*dy);

			    /* draw a line between p1 and p2 if the distance between them is under the config distance */
			    if(dist <= pJS.particles.line_linked.distance){

			      var opacity_line = pJS.particles.line_linked.opacity - (dist / (1/pJS.particles.line_linked.opacity)) / pJS.particles.line_linked.distance;

			      if(opacity_line > 0){        
			        
			        /* style */
			        var color_line = pJS.particles.line_linked.color_rgb_line;
			        pJS.canvas.ctx.strokeStyle = 'rgba('+color_line.r+','+color_line.g+','+color_line.b+','+opacity_line+')';
			        pJS.canvas.ctx.lineWidth = pJS.particles.line_linked.width;
			        //pJS.canvas.ctx.lineCap = 'round'; /* performance issue */
			        
			        /* path */
			        pJS.canvas.ctx.beginPath();
			        pJS.canvas.ctx.moveTo(p1.x, p1.y);
			        pJS.canvas.ctx.lineTo(p2.x, p2.y);
			        pJS.canvas.ctx.stroke();
			        pJS.canvas.ctx.closePath();

			      }

			    }

			  };


			  pJS.fn.interact.attractParticles  = function(p1, p2){

			    /* condensed particles */
			    var dx = p1.x - p2.x,
			        dy = p1.y - p2.y,
			        dist = Math.sqrt(dx*dx + dy*dy);

			    if(dist <= pJS.particles.line_linked.distance){

			      var ax = dx/(pJS.particles.move.attract.rotateX*1000),
			          ay = dy/(pJS.particles.move.attract.rotateY*1000);

			      p1.vx -= ax;
			      p1.vy -= ay;

			      p2.vx += ax;
			      p2.vy += ay;

			    }
			    

			  }


			  pJS.fn.interact.bounceParticles = function(p1, p2){

			    var dx = p1.x - p2.x,
			        dy = p1.y - p2.y,
			        dist = Math.sqrt(dx*dx + dy*dy),
			        dist_p = p1.radius+p2.radius;

			    if(dist <= dist_p){
			      p1.vx = -p1.vx;
			      p1.vy = -p1.vy;

			      p2.vx = -p2.vx;
			      p2.vy = -p2.vy;
			    }

			  }


			  /* ---------- pJS functions - modes events ------------ */

			  pJS.fn.modes.pushParticles = function(nb, pos){

			    pJS.tmp.pushing = true;

			    for(var i = 0; i < nb; i++){
			      pJS.particles.array.push(
			        new pJS.fn.particle(
			          pJS.particles.color,
			          pJS.particles.opacity.value,
			          {
			            'x': pos ? pos.pos_x : Math.random() * pJS.canvas.w,
			            'y': pos ? pos.pos_y : Math.random() * pJS.canvas.h
			          }
			        )
			      )
			      if(i == nb-1){
			        if(!pJS.particles.move.enable){
			          pJS.fn.particlesDraw();
			        }
			        pJS.tmp.pushing = false;
			      }
			    }

			  };


			  pJS.fn.modes.removeParticles = function(nb){

			    pJS.particles.array.splice(0, nb);
			    if(!pJS.particles.move.enable){
			      pJS.fn.particlesDraw();
			    }

			  };


			  pJS.fn.modes.bubbleParticle = function(p){

			    /* on hover event */
			    if(pJS.interactivity.events.onhover.enable && isInArray('bubble', pJS.interactivity.events.onhover.mode)){

			      var dx_mouse = p.x - pJS.interactivity.mouse.pos_x,
			          dy_mouse = p.y - pJS.interactivity.mouse.pos_y,
			          dist_mouse = Math.sqrt(dx_mouse*dx_mouse + dy_mouse*dy_mouse),
			          ratio = 1 - dist_mouse / pJS.interactivity.modes.bubble.distance;

			      function init(){
			        p.opacity_bubble = p.opacity;
			        p.radius_bubble = p.radius;
			      }

			      /* mousemove - check ratio */
			      if(dist_mouse <= pJS.interactivity.modes.bubble.distance){

			        if(ratio >= 0 && pJS.interactivity.status == 'mousemove'){
			          
			          /* size */
			          if(pJS.interactivity.modes.bubble.size != pJS.particles.size.value){

			            if(pJS.interactivity.modes.bubble.size > pJS.particles.size.value){
			              var size = p.radius + (pJS.interactivity.modes.bubble.size*ratio);
			              if(size >= 0){
			                p.radius_bubble = size;
			              }
			            }else{
			              var dif = p.radius - pJS.interactivity.modes.bubble.size,
			                  size = p.radius - (dif*ratio);
			              if(size > 0){
			                p.radius_bubble = size;
			              }else{
			                p.radius_bubble = 0;
			              }
			            }

			          }

			          /* opacity */
			          if(pJS.interactivity.modes.bubble.opacity != pJS.particles.opacity.value){

			            if(pJS.interactivity.modes.bubble.opacity > pJS.particles.opacity.value){
			              var opacity = pJS.interactivity.modes.bubble.opacity*ratio;
			              if(opacity > p.opacity && opacity <= pJS.interactivity.modes.bubble.opacity){
			                p.opacity_bubble = opacity;
			              }
			            }else{
			              var opacity = p.opacity - (pJS.particles.opacity.value-pJS.interactivity.modes.bubble.opacity)*ratio;
			              if(opacity < p.opacity && opacity >= pJS.interactivity.modes.bubble.opacity){
			                p.opacity_bubble = opacity;
			              }
			            }

			          }

			        }

			      }else{
			        init();
			      }


			      /* mouseleave */
			      if(pJS.interactivity.status == 'mouseleave'){
			        init();
			      }
			    
			    }

			    /* on click event */
			    else if(pJS.interactivity.events.onclick.enable && isInArray('bubble', pJS.interactivity.events.onclick.mode)){


			      if(pJS.tmp.bubble_clicking){
			        var dx_mouse = p.x - pJS.interactivity.mouse.click_pos_x,
			            dy_mouse = p.y - pJS.interactivity.mouse.click_pos_y,
			            dist_mouse = Math.sqrt(dx_mouse*dx_mouse + dy_mouse*dy_mouse),
			            time_spent = (new Date().getTime() - pJS.interactivity.mouse.click_time)/1000;

			        if(time_spent > pJS.interactivity.modes.bubble.duration){
			          pJS.tmp.bubble_duration_end = true;
			        }

			        if(time_spent > pJS.interactivity.modes.bubble.duration*2){
			          pJS.tmp.bubble_clicking = false;
			          pJS.tmp.bubble_duration_end = false;
			        }
			      }


			      function process(bubble_param, particles_param, p_obj_bubble, p_obj, id){

			        if(bubble_param != particles_param){

			          if(!pJS.tmp.bubble_duration_end){
			            if(dist_mouse <= pJS.interactivity.modes.bubble.distance){
			              if(p_obj_bubble != undefined) var obj = p_obj_bubble;
			              else var obj = p_obj;
			              if(obj != bubble_param){
			                var value = p_obj - (time_spent * (p_obj - bubble_param) / pJS.interactivity.modes.bubble.duration);
			                if(id == 'size') p.radius_bubble = value;
			                if(id == 'opacity') p.opacity_bubble = value;
			              }
			            }else{
			              if(id == 'size') p.radius_bubble = undefined;
			              if(id == 'opacity') p.opacity_bubble = undefined;
			            }
			          }else{
			            if(p_obj_bubble != undefined){
			              var value_tmp = p_obj - (time_spent * (p_obj - bubble_param) / pJS.interactivity.modes.bubble.duration),
			                  dif = bubble_param - value_tmp;
			                  value = bubble_param + dif;
			              if(id == 'size') p.radius_bubble = value;
			              if(id == 'opacity') p.opacity_bubble = value;
			            }
			          }

			        }

			      }

			      if(pJS.tmp.bubble_clicking){
			        /* size */
			        process(pJS.interactivity.modes.bubble.size, pJS.particles.size.value, p.radius_bubble, p.radius, 'size');
			        /* opacity */
			        process(pJS.interactivity.modes.bubble.opacity, pJS.particles.opacity.value, p.opacity_bubble, p.opacity, 'opacity');
			      }

			    }

			  };


			  pJS.fn.modes.repulseParticle = function(p){

			    if(pJS.interactivity.events.onhover.enable && isInArray('repulse', pJS.interactivity.events.onhover.mode) && pJS.interactivity.status == 'mousemove') {

			      var dx_mouse = p.x - pJS.interactivity.mouse.pos_x,
			          dy_mouse = p.y - pJS.interactivity.mouse.pos_y,
			          dist_mouse = Math.sqrt(dx_mouse*dx_mouse + dy_mouse*dy_mouse);

			      var normVec = {x: dx_mouse/dist_mouse, y: dy_mouse/dist_mouse},
			          repulseRadius = pJS.interactivity.modes.repulse.distance,
			          velocity = 100,
			          repulseFactor = clamp((1/repulseRadius)*(-1*Math.pow(dist_mouse/repulseRadius,2)+1)*repulseRadius*velocity, 0, 50);
			      
			      var pos = {
			        x: p.x + normVec.x * repulseFactor,
			        y: p.y + normVec.y * repulseFactor
			      }

			      if(pJS.particles.move.out_mode == 'bounce'){
			        if(pos.x - p.radius > 0 && pos.x + p.radius < pJS.canvas.w) p.x = pos.x;
			        if(pos.y - p.radius > 0 && pos.y + p.radius < pJS.canvas.h) p.y = pos.y;
			      }else{
			        p.x = pos.x;
			        p.y = pos.y;
			      }
			    
			    }


			    else if(pJS.interactivity.events.onclick.enable && isInArray('repulse', pJS.interactivity.events.onclick.mode)) {

			      if(!pJS.tmp.repulse_finish){
			        pJS.tmp.repulse_count++;
			        if(pJS.tmp.repulse_count == pJS.particles.array.length){
			          pJS.tmp.repulse_finish = true;
			        }
			      }

			      if(pJS.tmp.repulse_clicking){

			        var repulseRadius = Math.pow(pJS.interactivity.modes.repulse.distance/6, 3);

			        var dx = pJS.interactivity.mouse.click_pos_x - p.x,
			            dy = pJS.interactivity.mouse.click_pos_y - p.y,
			            d = dx*dx + dy*dy;

			        var force = -repulseRadius / d * 1;

			        function process(){

			          var f = Math.atan2(dy,dx);
			          p.vx = force * Math.cos(f);
			          p.vy = force * Math.sin(f);

			          if(pJS.particles.move.out_mode == 'bounce'){
			            var pos = {
			              x: p.x + p.vx,
			              y: p.y + p.vy
			            }
			            if (pos.x + p.radius > pJS.canvas.w) p.vx = -p.vx;
			            else if (pos.x - p.radius < 0) p.vx = -p.vx;
			            if (pos.y + p.radius > pJS.canvas.h) p.vy = -p.vy;
			            else if (pos.y - p.radius < 0) p.vy = -p.vy;
			          }

			        }

			        // default
			        if(d <= repulseRadius){
			          process();
			        }

			        // bang - slow motion mode
			        // if(!pJS.tmp.repulse_finish){
			        //   if(d <= repulseRadius){
			        //     process();
			        //   }
			        // }else{
			        //   process();
			        // }
			        

			      }else{

			        if(pJS.tmp.repulse_clicking == false){

			          p.vx = p.vx_i;
			          p.vy = p.vy_i;
			        
			        }

			      }

			    }

			  }


			  pJS.fn.modes.grabParticle = function(p){

			    if(pJS.interactivity.events.onhover.enable && pJS.interactivity.status == 'mousemove'){

			      var dx_mouse = p.x - pJS.interactivity.mouse.pos_x,
			          dy_mouse = p.y - pJS.interactivity.mouse.pos_y,
			          dist_mouse = Math.sqrt(dx_mouse*dx_mouse + dy_mouse*dy_mouse);

			      /* draw a line between the cursor and the particle if the distance between them is under the config distance */
			      if(dist_mouse <= pJS.interactivity.modes.grab.distance){

			        var opacity_line = pJS.interactivity.modes.grab.line_linked.opacity - (dist_mouse / (1/pJS.interactivity.modes.grab.line_linked.opacity)) / pJS.interactivity.modes.grab.distance;

			        if(opacity_line > 0){

			          /* style */
			          var color_line = pJS.particles.line_linked.color_rgb_line;
			          pJS.canvas.ctx.strokeStyle = 'rgba('+color_line.r+','+color_line.g+','+color_line.b+','+opacity_line+')';
			          pJS.canvas.ctx.lineWidth = pJS.particles.line_linked.width;
			          //pJS.canvas.ctx.lineCap = 'round'; /* performance issue */
			          
			          /* path */
			          pJS.canvas.ctx.beginPath();
			          pJS.canvas.ctx.moveTo(p.x, p.y);
			          pJS.canvas.ctx.lineTo(pJS.interactivity.mouse.pos_x, pJS.interactivity.mouse.pos_y);
			          pJS.canvas.ctx.stroke();
			          pJS.canvas.ctx.closePath();

			        }

			      }

			    }

			  };



			  /* ---------- pJS functions - vendors ------------ */

			  pJS.fn.vendors.eventsListeners = function(){

			    /* events target element */
			    if(pJS.interactivity.detect_on == 'window'){
			      pJS.interactivity.el = window;
			    }else{
			      pJS.interactivity.el = pJS.canvas.el;
			    }


			    /* detect mouse pos - on hover / click event */
			    if(pJS.interactivity.events.onhover.enable || pJS.interactivity.events.onclick.enable){

			      /* el on mousemove */
			      pJS.interactivity.el.addEventListener('mousemove', function(e){

			        if(pJS.interactivity.el == window){
			          var pos_x = e.clientX,
			              pos_y = e.clientY;
			        }
			        else{
			          var pos_x = e.offsetX || e.clientX,
			              pos_y = e.offsetY || e.clientY;
			        }

			        pJS.interactivity.mouse.pos_x = pos_x;
			        pJS.interactivity.mouse.pos_y = pos_y;

			        if(pJS.tmp.retina){
			          pJS.interactivity.mouse.pos_x *= pJS.canvas.pxratio;
			          pJS.interactivity.mouse.pos_y *= pJS.canvas.pxratio;
			        }

			        pJS.interactivity.status = 'mousemove';

			      });

			      /* el on onmouseleave */
			      pJS.interactivity.el.addEventListener('mouseleave', function(e){

			        pJS.interactivity.mouse.pos_x = null;
			        pJS.interactivity.mouse.pos_y = null;
			        pJS.interactivity.status = 'mouseleave';

			      });

			    }

			    /* on click event */
			    if(pJS.interactivity.events.onclick.enable){

			      pJS.interactivity.el.addEventListener('click', function(){

			        pJS.interactivity.mouse.click_pos_x = pJS.interactivity.mouse.pos_x;
			        pJS.interactivity.mouse.click_pos_y = pJS.interactivity.mouse.pos_y;
			        pJS.interactivity.mouse.click_time = new Date().getTime();

			        if(pJS.interactivity.events.onclick.enable){

			          switch(pJS.interactivity.events.onclick.mode){

			            case 'push':
			              if(pJS.particles.move.enable){
			                pJS.fn.modes.pushParticles(pJS.interactivity.modes.push.particles_nb, pJS.interactivity.mouse);
			              }else{
			                if(pJS.interactivity.modes.push.particles_nb == 1){
			                  pJS.fn.modes.pushParticles(pJS.interactivity.modes.push.particles_nb, pJS.interactivity.mouse);
			                }
			                else if(pJS.interactivity.modes.push.particles_nb > 1){
			                  pJS.fn.modes.pushParticles(pJS.interactivity.modes.push.particles_nb);
			                }
			              }
			            break;

			            case 'remove':
			              pJS.fn.modes.removeParticles(pJS.interactivity.modes.remove.particles_nb);
			            break;

			            case 'bubble':
			              pJS.tmp.bubble_clicking = true;
			            break;

			            case 'repulse':
			              pJS.tmp.repulse_clicking = true;
			              pJS.tmp.repulse_count = 0;
			              pJS.tmp.repulse_finish = false;
			              setTimeout(function(){
			                pJS.tmp.repulse_clicking = false;
			              }, pJS.interactivity.modes.repulse.duration*1000)
			            break;

			          }

			        }

			      });
			        
			    }


			  };

			  pJS.fn.vendors.densityAutoParticles = function(){

			    if(pJS.particles.number.density.enable){

			      /* calc area */
			      var area = pJS.canvas.el.width * pJS.canvas.el.height / 1000;
			      if(pJS.tmp.retina){
			        area = area/(pJS.canvas.pxratio*2);
			      }

			      /* calc number of particles based on density area */
			      var nb_particles = area * pJS.particles.number.value / pJS.particles.number.density.value_area;

			      /* add or remove X particles */
			      var missing_particles = pJS.particles.array.length - nb_particles;
			      if(missing_particles < 0) pJS.fn.modes.pushParticles(Math.abs(missing_particles));
			      else pJS.fn.modes.removeParticles(missing_particles);

			    }

			  };


			  pJS.fn.vendors.checkOverlap = function(p1, position){
			    for(var i = 0; i < pJS.particles.array.length; i++){
			      var p2 = pJS.particles.array[i];

			      var dx = p1.x - p2.x,
			          dy = p1.y - p2.y,
			          dist = Math.sqrt(dx*dx + dy*dy);

			      if(dist <= p1.radius + p2.radius){
			        p1.x = position ? position.x : Math.random() * pJS.canvas.w;
			        p1.y = position ? position.y : Math.random() * pJS.canvas.h;
			        pJS.fn.vendors.checkOverlap(p1);
			      }
			    }
			  };


			  pJS.fn.vendors.createSvgImg = function(p){

			    /* set color to svg element */
			    var svgXml = pJS.tmp.source_svg,
			        rgbHex = /#([0-9A-F]{3,6})/gi,
			        coloredSvgXml = svgXml.replace(rgbHex, function (m, r, g, b) {
			          if(p.color.rgb){
			            var color_value = 'rgba('+p.color.rgb.r+','+p.color.rgb.g+','+p.color.rgb.b+','+p.opacity+')';
			          }else{
			            var color_value = 'hsla('+p.color.hsl.h+','+p.color.hsl.s+'%,'+p.color.hsl.l+'%,'+p.opacity+')';
			          }
			          return color_value;
			        });

			    /* prepare to create img with colored svg */
			    var svg = new Blob([coloredSvgXml], {type: 'image/svg+xml;charset=utf-8'}),
			        DOMURL = window.URL || window.webkitURL || window,
			        url = DOMURL.createObjectURL(svg);

			    /* create particle img obj */
			    var img = new Image();
			    img.addEventListener('load', function(){
			      p.img.obj = img;
			      p.img.loaded = true;
			      DOMURL.revokeObjectURL(url);
			      pJS.tmp.count_svg++;
			    });
			    img.src = url;

			  };


			  pJS.fn.vendors.destroypJS = function(){
			    cancelAnimationFrame(pJS.fn.drawAnimFrame);
			    canvas_el.remove();
			    pJSDom = null;
			  };


			  pJS.fn.vendors.drawShape = function(c, startX, startY, sideLength, sideCountNumerator, sideCountDenominator){

			    // By Programming Thomas - https://programmingthomas.wordpress.com/2013/04/03/n-sided-shapes/
			    var sideCount = sideCountNumerator * sideCountDenominator;
			    var decimalSides = sideCountNumerator / sideCountDenominator;
			    var interiorAngleDegrees = (180 * (decimalSides - 2)) / decimalSides;
			    var interiorAngle = Math.PI - Math.PI * interiorAngleDegrees / 180; // convert to radians
			    c.save();
			    c.beginPath();
			    c.translate(startX, startY);
			    c.moveTo(0,0);
			    for (var i = 0; i < sideCount; i++) {
			      c.lineTo(sideLength,0);
			      c.translate(sideLength,0);
			      c.rotate(interiorAngle);
			    }
			    //c.stroke();
			    c.fill();
			    c.restore();

			  };

			  pJS.fn.vendors.exportImg = function(){
			    window.open(pJS.canvas.el.toDataURL('image/png'), '_blank');
			  };


			  pJS.fn.vendors.loadImg = function(type){

			    pJS.tmp.img_error = undefined;

			    if(pJS.particles.shape.image.src != ''){

			      if(type == 'svg'){

			        var xhr = new XMLHttpRequest();
			        xhr.open('GET', pJS.particles.shape.image.src);
			        xhr.onreadystatechange = function (data) {
			          if(xhr.readyState == 4){
			            if(xhr.status == 200){
			              pJS.tmp.source_svg = data.currentTarget.response;
			              pJS.fn.vendors.checkBeforeDraw();
			            }else{
			              console.log('Error pJS - Image not found');
			              pJS.tmp.img_error = true;
			            }
			          }
			        }
			        xhr.send();

			      }else{

			        var img = new Image();
			        img.addEventListener('load', function(){
			          pJS.tmp.img_obj = img;
			          pJS.fn.vendors.checkBeforeDraw();
			        });
			        img.src = pJS.particles.shape.image.src;

			      }

			    }else{
			      console.log('Error pJS - No image.src');
			      pJS.tmp.img_error = true;
			    }

			  };


			  pJS.fn.vendors.draw = function(){

			    if(pJS.particles.shape.type == 'image'){

			      if(pJS.tmp.img_type == 'svg'){

			        if(pJS.tmp.count_svg >= pJS.particles.number.value){
			          pJS.fn.particlesDraw();
			          if(!pJS.particles.move.enable) cancelRequestAnimFrame(pJS.fn.drawAnimFrame);
			          else pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw);
			        }else{
			          //console.log('still loading...');
			          if(!pJS.tmp.img_error) pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw);
			        }

			      }else{

			        if(pJS.tmp.img_obj != undefined){
			          pJS.fn.particlesDraw();
			          if(!pJS.particles.move.enable) cancelRequestAnimFrame(pJS.fn.drawAnimFrame);
			          else pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw);
			        }else{
			          if(!pJS.tmp.img_error) pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw);
			        }

			      }

			    }else{
			      pJS.fn.particlesDraw();
			      if(!pJS.particles.move.enable) cancelRequestAnimFrame(pJS.fn.drawAnimFrame);
			      else pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw);
			    }

			  };


			  pJS.fn.vendors.checkBeforeDraw = function(){

			    // if shape is image
			    if(pJS.particles.shape.type == 'image'){

			      if(pJS.tmp.img_type == 'svg' && pJS.tmp.source_svg == undefined){
			        pJS.tmp.checkAnimFrame = requestAnimFrame(check);
			      }else{
			        //console.log('images loaded! cancel check');
			        cancelRequestAnimFrame(pJS.tmp.checkAnimFrame);
			        if(!pJS.tmp.img_error){
			          pJS.fn.vendors.init();
			          pJS.fn.vendors.draw();
			        }
			        
			      }

			    }else{
			      pJS.fn.vendors.init();
			      pJS.fn.vendors.draw();
			    }

			  };


			  pJS.fn.vendors.init = function(){

			    /* init canvas + particles */
			    pJS.fn.retinaInit();
			    pJS.fn.canvasInit();
			    pJS.fn.canvasSize();
			    pJS.fn.canvasPaint();
			    pJS.fn.particlesCreate();
			    pJS.fn.vendors.densityAutoParticles();

			    /* particles.line_linked - convert hex colors to rgb */
			    pJS.particles.line_linked.color_rgb_line = hexToRgb(pJS.particles.line_linked.color);

			  };


			  pJS.fn.vendors.start = function(){

			    if(isInArray('image', pJS.particles.shape.type)){
			      pJS.tmp.img_type = pJS.particles.shape.image.src.substr(pJS.particles.shape.image.src.length - 3);
			      pJS.fn.vendors.loadImg(pJS.tmp.img_type);
			    }else{
			      pJS.fn.vendors.checkBeforeDraw();
			    }

			  };




			  /* ---------- pJS - start ------------ */


			  pJS.fn.vendors.eventsListeners();

			  pJS.fn.vendors.start();
			  


			};

			/* ---------- global functions - vendors ------------ */

			Object.deepExtend = function(destination, source) {
			  for (var property in source) {
			    if (source[property] && source[property].constructor &&
			     source[property].constructor === Object) {
			      destination[property] = destination[property] || {};
			      arguments.callee(destination[property], source[property]);
			    } else {
			      destination[property] = source[property];
			    }
			  }
			  return destination;
			};

			window.requestAnimFrame = (function(){
			  return  window.requestAnimationFrame ||
			    window.webkitRequestAnimationFrame ||
			    window.mozRequestAnimationFrame    ||
			    window.oRequestAnimationFrame      ||
			    window.msRequestAnimationFrame     ||
			    function(callback){
			      window.setTimeout(callback, 1000 / 60);
			    };
			})();

			window.cancelRequestAnimFrame = ( function() {
			  return window.cancelAnimationFrame         ||
			    window.webkitCancelRequestAnimationFrame ||
			    window.mozCancelRequestAnimationFrame    ||
			    window.oCancelRequestAnimationFrame      ||
			    window.msCancelRequestAnimationFrame     ||
			    clearTimeout
			} )();

			function hexToRgb(hex){
			  // By Tim Down - http://stackoverflow.com/a/5624139/3493650
			  // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
			  var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
			  hex = hex.replace(shorthandRegex, function(m, r, g, b) {
			     return r + r + g + g + b + b;
			  });
			  var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
			  return result ? {
			      r: parseInt(result[1], 16),
			      g: parseInt(result[2], 16),
			      b: parseInt(result[3], 16)
			  } : null;
			};

			function clamp(number, min, max) {
			  return Math.min(Math.max(number, min), max);
			};

			function isInArray(value, array) {
			  return array.indexOf(value) > -1;
			}


			/* ---------- particles.js functions - start ------------ */

			window.pJSDom = [];

			window.particlesJS = function(tag_id, params){

			  //console.log(params);

			  /* no string id? so it's object params, and set the id with default id */
			  if(typeof(tag_id) != 'string'){
			    params = tag_id;
			    tag_id = 'particles-js';
			  }

			  /* no id? set the id to default id */
			  if(!tag_id){
			    tag_id = 'particles-js';
			  }

			  /* pJS elements */
			  var pJS_tag = document.getElementById(tag_id),
			      pJS_canvas_class = 'particles-js-canvas-el',
			      exist_canvas = pJS_tag.getElementsByClassName(pJS_canvas_class);

			  /* remove canvas if exists into the pJS target tag */
			  if(exist_canvas.length){
			    while(exist_canvas.length > 0){
			      pJS_tag.removeChild(exist_canvas[0]);
			    }
			  }

			  /* create canvas element */
			  var canvas_el = document.createElement('canvas');
			  canvas_el.className = pJS_canvas_class;

			  /* set size canvas */
			  canvas_el.style.width = "100%";
			  canvas_el.style.height = "100%";

			  /* append canvas */
			  var canvas = document.getElementById(tag_id).appendChild(canvas_el);

			  /* launch particle.js */
			  if(canvas != null){
			    pJSDom.push(new pJS(tag_id, params));
			  }

			};

			window.particlesJS.load = function(tag_id, path_config_json, callback){

			  /* load json config */
			  var xhr = new XMLHttpRequest();
			  xhr.open('GET', path_config_json);
			  xhr.onreadystatechange = function (data) {
			    if(xhr.readyState == 4){
			      if(xhr.status == 200){
			        var params = JSON.parse(data.currentTarget.response);
			        window.particlesJS(tag_id, params);
			        if(callback) callback();
			      }else{
			        console.log('Error pJS - XMLHttpRequest status: '+xhr.status);
			        console.log('Error pJS - File config not found');
			      }
			    }
			  };
			  xhr.send();

			};
		</script>

  	<script type="text/javascript">
		 var particles = {
	      "particles": {
	        "number": {
	          "value": 260,
	          "density": {
	            "enable": true,
	            "value_area": 800
	          }
	        },
	        "color": {
	          "value": "#ffffff"
	        },
	        "shape": {
	          "type": "circle",
	          "stroke": {
	            "width": 0,
	            "color": "#000000"
	          },
	          "polygon": {
	            "nb_sides": 5
	          },
	          "image": {
	            "src": "img/github.svg",
	            "width": 100,
	            "height": 100
	          }
	        },
	        "opacity": {
	          "value": 1,
	          "random": true,
	          "anim": {
	            "enable": true,
	            "speed": 1,
	            "opacity_min": 0,
	            "sync": false
	          }
	        },
	        "size": {
	          "value": 3,
	          "random": true,
	          "anim": {
	            "enable": false,
	            "speed": 4,
	            "size_min": 0.3,
	            "sync": false
	          }
	        },
	        "line_linked": {
	          "enable": false,
	          "distance": 150,
	          "color": "#ffffff",
	          "opacity": 0.4,
	          "width": 1
	        },
	        "move": {
	          "enable": true,
	          "speed": 1,
	          "direction": "none",
	          "random": true,
	          "straight": false,
	          "out_mode": "out",
	          "bounce": false,
	          "attract": {
	            "enable": false,
	            "rotateX": 600,
	            "rotateY": 600
	          }
	        }
	      },
	      "interactivity": {
	        "detect_on": "canvas",
	        "events": {
	          "onhover": {
	            "enable": false,
	            "mode": "bubble"
	          },
	          "onclick": {
	            "enable": false,
	            "mode": "repulse"
	          },
	          "resize": false
	        },
	        "modes": {
	          "grab": {
	            "distance": 400,
	            "line_linked": {
	              "opacity": 1
	            }
	          },
	          "bubble": {
	            "distance": 250,
	            "size": 0,
	            "duration": 2,
	            "opacity": 0,
	            "speed": 3
	          },
	          "repulse": {
	            "distance": 400,
	            "duration": 0.4
	          },
	          "push": {
	            "particles_nb": 4
	          },
	          "remove": {
	            "particles_nb": 2
	          }
	        }
	      },
	      "retina_detect": true
	   };
	   particlesJS('particles-js', particles, function() {
	     console.log('callback - particles.js config loaded');
	   });
	</script>

<?php
get_footer();
