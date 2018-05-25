<!DOCTYPE HTML>
<html>
	<head>
		<title>Gallery - Snapshot by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<div class="page-wrap">

			<!-- Main -->
				<section id="main">

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">

									<!-- Filters -->
										<header>
											<h1>Gallery</h1>
										</header>

										<div class="content">
										
											<div class="media all people">
											<?php
												include_once 'includes/dbh.inc.php';

												$sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
												$stmt = mysqli_stmt_init($conn);
												if(!mysqli_stmt_prepare($stmt, $sql)) {
													echo "SQL statement failed";
												} else {
													mysqli_stmt_execute($stmt);
													$result = mysqli_stmt_get_result($stmt);

													while ($row = mysqli_fetch_assoc($result)) {
														echo '<a href="#">
														<div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
															<h3>'.$row["titleGallery"].'</h3>
															<p>'.$row["descGallery"].'</p>
														</a>';	
													}
												}
											?>
											</div>
										
										</div>
                                </div>
                                <div class="gallery-upload">
                                    <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
									<input type="text" name="filename" placeholder="File name...">
									<input type="text" name="filetitle" placeholder="Image Title...">
									<input type="text" name="filedesc" placeholder="image description...">
									<input type="file" name="file">
									<button type="submit" name="submit">UPLOAD</button>

                                    </form>
                                </div>
						</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>