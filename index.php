<?php
echo "<!DOCTYPE html>\n"; 
echo "\n"; 
echo "<html>\n"; 
echo "<head>\n"; 
echo "	<meta charset=\"UTF-8\">\n"; 
echo "	<title>PHP-based web application</title>\n"; 
echo "	<link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">\n"; 
echo "</head>\n"; 
echo "<body>\n"; 
echo "	<div class=\"page\">\n"; 
echo "		<div class=\"header\">\n"; 
echo "			<a href=\"index.php\" id=\"logo\"><img src=\"resources/logo.jpg\" alt=\"logo\"></a>\n"; 
echo "			<div>\n"; 
echo "				<div>\n"; 
echo "					<p>Welcome to the website</p>\n"; 
echo "				</div>\n"; 
echo "				<div>\n"; 
echo "					<ul>\n"; 
echo "						<li class=\"selected\">\n"; 
echo "							<a href=\"index.php\"><span>Home</span></a>\n"; 
echo "						</li>\n"; 
echo "						<li>\n"; 
echo "							<a href=\"about.php\"><span>About</span></a>\n"; 
echo "						</li>\n"; 
echo "						<li>\n"; 
echo "							<a href=\"work.php\"><span>Work</span></a>\n"; 
echo "						</li>\n"; 
echo "						<li>\n"; 
echo "							<a href=\"artist.php\"><span>Artists</span></a>\n"; 
echo "						</li>\n"; 
echo "					</ul>\n"; 
echo "					<form action=\"index.php\">\n"; 
echo "						<input type=\"text\" onclick=\"this.value='';\" onfocus=\"this.select()\" onblur=\"this.value=!this.value?'Enter search query':this.value;\" value=\"Enter search query\">\n"; 
echo "						<input type=\"submit\" value=\"\">\n"; 
echo "					</form>\n"; 
echo "				</div>\n"; 
echo "			</div>\n"; 
echo "		</div>\n"; 
echo "		<div class=\"body\">\n"; 
echo "			<div class=\"home\">\n"; 
echo "				<div class=\"section\">\n"; 
echo "					<img src=\"resources/art-images/paintings/large/19070.jpg\" alt=\"\">\n"; 
echo "					<div>\n"; 
echo "						<div>\n"; 
echo "							<p>\n"; 
echo "								Where Do We Come From? What Are We? Where Are We Going? This is Paul Gaugin’s most famous painting, and he considered it his masterpiece.\n"; 
echo "							</p>\n"; 
echo "							<!-- <a href=\"about.php\"></a> -->\n"; 
echo "						</div>\n"; 
echo "					</div>\n"; 
echo "				</div>\n"; 
echo "				<div class=\"section\">\n"; 
echo "					<div>\n"; 
echo "						<img src=\"resources/art-images/artists/small/24.jpg\" alt=\"\">\n"; 
echo "						<img src=\"resources/art-images/artists/small/1.jpg\" alt=\"\">\n"; 
echo "						<img src=\"resources/art-images/artists/small/2.jpg\" alt=\"\">\n"; 
echo "					</div>\n"; 
echo "					<div>\n"; 
echo "						<img src=\"resources/art-images/artists/small/15.jpg\" alt=\"\">\n"; 
echo "						\n"; 
echo "					</div>\n"; 
echo "					\n"; 
echo "				</div>\n"; 
echo "				<div>\n"; 
echo "					<ul>\n"; 
echo "						<li>\n"; 
echo "							<h3>Romanticism</h3>\n"; 
echo "							<a href=\"work.php\"><img src=\"resources/art-images/genres/square-medium/33.jpg\" alt=\"\"></a>\n"; 
echo "							<p>\n"; 
echo "								Romanticism was an artistic, literary and intellectual movement that originated in the second half of the 18th century in Europe, and gained strength in reaction to the Industrial Revolution\n"; 
echo "							</p>\n"; 
echo "							<a href=\"work.php\" class=\"click-here\"></a>\n"; 
echo "						</li>\n"; 
echo "						<li>\n"; 
echo "							<h3>Realism</h3>\n"; 
echo "							<a href=\"work.php\"><img src=\"resources/art-images/genres/square-medium/34.jpg\" alt=\"\"></a>\n"; 
echo "							<p>\n"; 
echo "								Realism as a tendency in 19th century art was related to similar movements in the theatre, literature and opera. All emphasized the depiction of everyday subjects, but by no means always discarding classical\n"; 
echo "							</p>\n"; 
echo "							<a href=\"work.php\" class=\"click-here\"></a>\n"; 
echo "						</li>\n"; 
echo "						<li>\n"; 
echo "							<h3>High Renaissance</h3>\n"; 
echo "							<a href=\"work.php\"><img src=\"resources/art-images/genres/square-medium/79.jpg\" alt=\"\"></a>\n"; 
echo "							<p>\n"; 
echo "								High Renaissance is the period denoting the apogee of the visual arts in the Italian Renaissance. The High Renaissance period is traditionally taken to begin in the 1490s, with Leonardo's fresco\n"; 
echo "							</p>\n"; 
echo "							<a href=\"work.php\" class=\"click-here\"></a>\n"; 
echo "						</li>\n"; 
echo "					</ul>\n"; 
echo "				</div>\n"; 
echo "			</div>\n"; 
echo "		</div>\n"; 
echo "		<div class=\"footer\">\n"; 
echo "			<div>\n"; 
echo "				<div>\n"; 
echo "					<ul>\n"; 
echo "						<li>\n"; 
echo "							<a href=\"index.php\">Home</a>\n"; 
echo "						</li>\n"; 
echo "						<li>\n"; 
echo "							<a href=\"about.php\">About</a>\n"; 
echo "						</li>\n"; 
echo "						<li>\n"; 
echo "							<a href=\"work.php\">Work</a>\n"; 
echo "						</li>\n"; 
echo "						<li>\n"; 
echo "							<a href=\"artist.php\">Artists</a>\n"; 
echo "						</li>\n"; 
echo "					</ul>\n"; 
echo "					<p>\n"; 
echo "						PHP-based website\n"; 
echo "					</p>\n"; 
echo "				</div>\n"; 
echo "			</div>\n"; 
echo "		</div>\n"; 
echo "	</div>\n"; 
echo "</body>\n"; 
echo "</html>\n";
?>