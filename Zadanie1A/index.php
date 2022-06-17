<?php
require("../logged.php");
?>
<!DOCTYPE html>
<html>
	<meta charset="UTF-8"/>
	<head>
		<title>BSI - Zadanie 1A</title>
	</head>
	<body>
		<h3><a href="../index.php">Wróć do strony głównej</a></h3>
		<table width="100%">
			<tr>
				<td width="33%">Quisque risus nulla, feugiat eu luctus elementum, tincidunt tempor odio. Cras ac blandit neque. Nam malesuada lacus mauris, eget rhoncus erat molestie tempor. Sed mollis diam urna, ultricies rhoncus elit dapibus at. Praesent dictum sem in nibh blandit convallis. Aliquam erat volutpat. Phasellus ac volutpat nibh. Sed bibendum rutrum lacinia. In quis placerat urna, a ultricies mauris. Suspendisse ut dictum erat, facilisis maximus turpis. Maecenas et lectus auctor, suscipit lectus dapibus, pellentesque arcu. Quisque ornare congue feugiat.</td>
				<td>Quisque risus nulla, feugiat eu luctus elementum, tincidunt tempor odio. Cras ac blandit neque. Nam malesuada lacus mauris, eget rhoncus erat molestie tempor. Sed mollis diam urna, ultricies rhoncus elit dapibus at. Praesent dictum sem in nibh blandit convallis. Aliquam erat volutpat. Phasellus ac volutpat nibh. Sed bibendum rutrum lacinia. In quis placerat urna, a ultricies mauris. Suspendisse ut dictum erat, facilisis maximus turpis. Maecenas et lectus auctor, suscipit lectus dapibus, pellentesque arcu. Quisque ornare congue feugiat.</td>
				<td>Quisque risus nulla, feugiat eu luctus elementum, tincidunt tempor odio. Cras ac blandit neque. Nam malesuada lacus mauris, eget rhoncus erat molestie tempor. Sed mollis diam urna, ultricies rhoncus elit dapibus at. Praesent dictum sem in nibh blandit convallis. Aliquam erat volutpat. Phasellus ac volutpat nibh. Sed bibendum rutrum lacinia. In quis placerat urna, a ultricies mauris. Suspendisse ut dictum erat, facilisis maximus turpis. Maecenas et lectus auctor, suscipit lectus dapibus, pellentesque arcu. Quisque ornare congue feugiat.</td>
			</tr>
			<tr>
				<td colspan="3">Mauris rutrum mauris et lectus tincidunt sagittis. Quisque sodales arcu lacinia, sagittis libero ut, consectetur turpis. Fusce malesuada tristique iaculis. Proin volutpat condimentum purus ac molestie. Nam non dui dolor. Sed feugiat viverra est. Suspendisse ligula tellus, varius porttitor dictum eu, blandit sed elit. Maecenas id volutpat lorem. Sed ultrices eget diam et aliquet. Maecenas auctor aliquam scelerisque. Nam semper velit nec nulla mollis tincidunt. Nunc sagittis tortor ac imperdiet blandit. Suspendisse urna enim, suscipit non tempor sed, congue non lectus. Quisque dictum velit eget ligula venenatis, at molestie risus venenatis. Proin suscipit porta eros vitae posuere. Pellentesque ligula nunc, tincidunt sit amet dolor id, pellentesque elementum nisl. Sed aliquet auctor dui vitae tempus. Quisque eget libero id arcu pharetra ultricies. Mauris erat ex, aliquet vitae nibh sit amet, efficitur tristique felis. Curabitur a neque non augue pellentesque tincidunt a eget dui. In id diam non arcu commodo tincidunt feugiat iaculis augue. Nunc id nisi vitae magna volutpat sodales.</td>
			</tr>
			<tr>
				<!-- wersja 1
				<table width="100%">
					<tr>
						<td width="16.5%">Duis vel enim lectus. Donec nisi urna, tristique ut leo at, vehicula sollicitudin nunc. Aliquam erat volutpat. Praesent commodo et leo non viverra. Duis et suscipit lectus. Praesent lobortis auctor pellentesque. Nullam hendrerit risus consectetur dui rutrum suscipit.</td>
						<td width="16.5%">Duis vel enim lectus. Donec nisi urna, tristique ut leo at, vehicula sollicitudin nunc. Aliquam erat volutpat. Praesent commodo et leo non viverra. Duis et suscipit lectus. Praesent lobortis auctor pellentesque. Nullam hendrerit risus consectetur dui rutrum suscipit.</td>
						<td colspan="2">Sed lobortis lacus non euismod viverra. Curabitur dictum gravida ipsum a mollis. Donec at risus condimentum, tempor velit vel, ultricies dolor. Maecenas feugiat nisi at auctor euismod. Curabitur pellentesque vestibulum mauris, sed placerat lacus semper et. Suspendisse a facilisis nisi, vel consequat lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar facilisis elit non tincidunt. Nulla scelerisque velit quis nisi hendrerit eleifend. Aenean vel velit porttitor, molestie massa sodales, posuere libero. Cras id leo sit amet lorem pharetra vehicula posuere non libero. In aliquet pretium augue rutrum auctor. Donec elementum elementum sodales. Maecenas a dapibus arcu, non condimentum augue. Donec eget urna vitae orci tempus interdum cursus vel neque. Mauris dictum lorem ac viverra eleifend. Cras odio ex, sollicitudin sed vulputate et, accumsan vel elit. Donec sodales nunc a nulla luctus, ut aliquet erat aliquam. Vivamus malesuada at est vitae tempus. Praesent a facilisis ipsum, vitae sodales dui. Quisque laoreet maximus ultricies. Praesent rutrum sit amet quam at sodales. Donec elementum ornare aliquet. Sed rhoncus euismod tristique. Aenean a sem nec metus cursus molestie.</td>
					</tr>
				</table>
				-->
				<!-- wersja 2 -->
				<td>
					<table width="100%">
						<tr>
							<td>Duis vel enim lectus. Donec nisi urna, tristique ut leo at, vehicula sollicitudin nunc. Aliquam erat volutpat. Praesent commodo et leo non viverra. Duis et suscipit lectus. Praesent lobortis auctor pellentesque. Nullam hendrerit risus consectetur dui rutrum suscipit.</td>
							<td>Duis vel enim lectus. Donec nisi urna, tristique ut leo at, vehicula sollicitudin nunc. Aliquam erat volutpat. Praesent commodo et leo non viverra. Duis et suscipit lectus. Praesent lobortis auctor pellentesque. Nullam hendrerit risus consectetur dui rutrum suscipit.</td>
						</tr>
					</table>
				</td>
				<td colspan="2">Sed lobortis lacus non euismod viverra. Curabitur dictum gravida ipsum a mollis. Donec at risus condimentum, tempor velit vel, ultricies dolor. Maecenas feugiat nisi at auctor euismod. Curabitur pellentesque vestibulum mauris, sed placerat lacus semper et. Suspendisse a facilisis nisi, vel consequat lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar facilisis elit non tincidunt. Nulla scelerisque velit quis nisi hendrerit eleifend. Aenean vel velit porttitor, molestie massa sodales, posuere libero. Cras id leo sit amet lorem pharetra vehicula posuere non libero. In aliquet pretium augue rutrum auctor. Donec elementum elementum sodales. Maecenas a dapibus arcu, non condimentum augue. Donec eget urna vitae orci tempus interdum cursus vel neque. Mauris dictum lorem ac viverra eleifend. Cras odio ex, sollicitudin sed vulputate et, accumsan vel elit. Donec sodales nunc a nulla luctus, ut aliquet erat aliquam. Vivamus malesuada at est vitae tempus. Praesent a facilisis ipsum, vitae sodales dui. Quisque laoreet maximus ultricies. Praesent rutrum sit amet quam at sodales. Donec elementum ornare aliquet. Sed rhoncus euismod tristique. Aenean a sem nec metus cursus molestie.</td>
			</tr>
			<tr>
				<td colspan="3">
					<table width="100%">
						<tr>
							<td>Integer eget ultricies neque, a mattis purus. Duis et justo eget eros consectetur ornare a et eros. Donec ex nibh, ultricies vel ipsum nec, pellentesque bibendum risus. Curabitur ex purus, ornare sed vestibulum vitae, consequat eu quam. Integer pellentesque tincidunt sem ac facilisis. Suspendisse lacinia gravida vestibulum. Aenean maximus velit tellus, vitae scelerisque eros tincidunt vitae. Phasellus nulla nunc, ullamcorper id risus in, dapibus tempor ex. Sed placerat lectus a ante molestie, vel cursus leo tristique. Morbi quis lacinia felis. Vestibulum pretium tellus sed velit congue bibendum. Nulla eget tempus ligula.</td>
							<td>Integer eget ultricies neque, a mattis purus. Duis et justo eget eros consectetur ornare a et eros. Donec ex nibh, ultricies vel ipsum nec, pellentesque bibendum risus. Curabitur ex purus, ornare sed vestibulum vitae, consequat eu quam. Integer pellentesque tincidunt sem ac facilisis. Suspendisse lacinia gravida vestibulum. Aenean maximus velit tellus, vitae scelerisque eros tincidunt vitae. Phasellus nulla nunc, ullamcorper id risus in, dapibus tempor ex. Sed placerat lectus a ante molestie, vel cursus leo tristique. Morbi quis lacinia felis. Vestibulum pretium tellus sed velit congue bibendum. Nulla eget tempus ligula.</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>