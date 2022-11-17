<?php require 'header.php'?>
		<!-- ROTATE SCREEN -->
		
		<!-- INTRO SCREEN -->
		<div class="introPage">
		<div class="bg-wrapper">
		<img src="assets/christ_bg.png" alt="">
		</div>
			<div class="cont">
				<div class="logo-wrapper">
					<img src="assets/fox_logo.png" alt="">
				</div>
			<div class="langs">
				<a href="<?php echo addLang($actual_link, 'en'); ?>" class="<?php if($lang==='en') echo "active"?>" >En</a>
				<a href="<?php echo addLang($actual_link, 'us'); ?>" class="<?php if($lang==='us') echo "active"?>" >Us</a>
				<a href="<?php echo addLang($actual_link, 'fr'); ?>" class="<?php if($lang==='fr') echo "active"?>" >Fr</a>
				<a href="<?php echo addLang($actual_link, 'es');  ?>" class="<?php if($lang==='es') echo "active"?>" >Es</a>
				</div>
				<p>
					<?php echo $intr_text['text']?>
				</p>
				<button class="btn fullScreenBtn hide">
					<span><?php echo $intr_text['btn']?></span>

					<div class="arrow-wrapper">
						<img src="assets/arrow-wh.png" alt="" />
					</div>
				</button>
				<button class="btn" id="startBtn">
					<span><?php echo $intr_text['btn']?></span>

					<div class="arrow-wrapper">
						<img src="assets/arrow-wh.png" alt="" />
					</div>
				</button>
				
			</div>

			<div class="bg top"></div>
			<div class="bg bottom"></div>
		</div>
		<!-- OUTRO SCREEN -->
		<div class="outroPage hide" id="outro">
		<div class="bg-wrapper">
		<img src="assets/christ_bg.png" alt="">
		</div>
			<div class="content">
			<div class="logo-wrapper">
					<img src="assets/fiabLogoWhite.png" alt="">
				</div>
			<div class="text-content">
			<?php echo $outro_txt['endText']?>
				<?php echo $link?>
			</div>

				<div class="shareing">
					<a
						href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link?>" 
						target="_blank"
						class="btn"
						title="share on fb"
					>
					<span><i class="fa-brands fa-facebook-f"></i> share</span> 	<div class="arrow-wrapper">
						<img src="assets/arrow-wh.png" alt="" />
					</div></a
					>
					<div class="copySection">
					
						<button class="btn btn-copy" title="copy url" id="urlBtn" onclick="copyUrl()">
						<span>copy url</span> <div class="arrow-wrapper">
						<img src="assets/arrow-wh.png" alt="" />
					</div>
						</button>
					</div>
				</div>
			</div>
		</div>


		<!-- MAIN -->
		<main onclick="void(0)">
			<div class="container">
			<div class="rotateScreen">
			<div class="content">
				<p>For the best experiance please rotate device to landscape mode <br><i class="fa-solid fa-rotate"></i></p>
			</div>
		</div>
				<div class="game-panel">
					<div class="fullScreenBtn">
						<i class="fa-solid fa-expand"></i>
					</div>
					<!-- SIDEBAR -->
					<div class="drop_menu">
						<img src="assets/inventory.png" alt="" />
					</div>
					<div class="sidebar"></div>
					<!-- MAIN PANEL -->
					<div class="main-panel">
						<div class="text-bubble">
							<!-- <div class="close"><span></span><span></span></div> -->
							<div class="text-bubble-text"></div>
						</div>
						<div class="main-img">
							<!-- HAT -->

							<div class="item_pos hat" data-item="hat">
								<!-- <img src="assets/hat.png" alt="" /> -->
							</div>
							<!-- blanket -->
							<div class="item_pos blanket" data-item="blanket">
								
							</div>
							<div class="item_pos mouth" data-item="mouth"></div>
							<!-- main-img -->
							<img src="assets/deblo.png" class="log-bare" alt="" />
							<div class="face">
								<img src="assets/face_1.png" alt="" />
							</div>
						</div>
					</div>
					<div class="bg-img">
						<img src="assets/fire-joypixels.gif" class="fire" alt="" />
						<img src="assets/stocic.png" class="table" alt="" />
						<img src="assets/background.png" alt="" />
					</div>
				</div>
				<div class="cursor"></div>
			</div>
			<!-- <div class="fullscreenReq">
				<div class="full_text">
					<p>Please allow Full screen for the best experience</p>
				</div>
				<button class="btn fullScreenBtn">Fullscreen</button>
			</div> -->
		</main>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js" integrity="sha512-6+YN/9o9BWrk6wSfGxQGpt3EUK6XeHi6yeHV+TYD2GR0Sj/cggRpXr1BrAQf0as6XslxomMUxXp2vIl+fv0QRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.5/mobile-detect.min.js"></script>
		<script src="js/messages.js"></script>
		<script src="js/Game.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
