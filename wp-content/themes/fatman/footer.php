<footer>
	<?php wp_nav_menu(['theme_location' => 'menu_footer']); ?>
	<div id="copyright">  
<a href="https://sarshomar.com/fa">سرشمار</a> را امتحان کنید | 
<a href="https://github.com/mohammadalisalehi">طراحی شده</a> در <a href="http://ermile.com/fa">ارمایل</a> &copy; 2016<?php
		$currentYear = date('Y');
		if (2016 < $currentYear)
		{
			echo '-' . $currentYear;
		}
		?>
	 </dive>
</footer>
</body>
</html>