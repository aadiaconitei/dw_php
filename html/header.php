<header> 
	<a href="">
		<h4 class="logo">My Dream</h4>
	</a>
	<nav>
	  <ul>
		<li <?php if(isset($page) && $page =='acasa'):?>class="activ" <?php endif?>><a href="index.php">Acasa</a></li>
		<li <?php if(isset($page) && $page =='linkuri'):?>class="activ" <?php endif?>><a href="linkuri.php">Linkuri</a></li>
		<li><a href="liste.php">Liste</a></li>
		<li><a href="imagini.php">Imagini</a></li>
		<li <?php if(isset($page) && $page =='despre'):?>class="activ" <?php endif?>><a href="despre.php">Despre</a></li>
		<li><a href="#about">Noutati</a></li>
		<li><a href="#contact">Contact</a></li>
	  </ul>
	</nav>
</header>
