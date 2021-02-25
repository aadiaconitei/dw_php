<header> 
	<a href="">
		<h4 class="logo">My Dream</h4>
	</a>
	<nav>
	  <ul>
		<li <?php if(isset($page) && $page =='acasa'):?>class="activ" <?php endif?>><a href="index.php">Acasa</a></li>
		<li <?php if(isset($page) && $page =='linkuri'):?>class="activ" <?php endif?>><a href="linkuri.php">Linkuri</a></li>
		<li <?php if(isset($page) && $page =='liste'):?>class="activ" <?php endif?>><a href="liste.php">Liste</a></li>
		<li <?php if(isset($page) && $page =='imagini'):?>class="activ" <?php endif?>><a href="imagini.php">Imagini</a></li>
		<li <?php if(isset($page) && $page =='despre'):?>class="activ" <?php endif?>><a href="despre.php">Despre</a></li>
		<li <?php if(isset($page) && $page =='grid'):?>class="activ" <?php endif?>><a href="grid.php">Grid</a></li>
		<li <?php if(isset($page) && $page =='tabele'):?>class="activ" <?php endif?>><a href="tabele.php">Tabele</a></li>
		<li><a target="_blank" href="html/bootstrap.html">Bootstrap</a></li>
		<li <?php if(isset($page) && $page =='contact'):?>class="activ" <?php endif?>><a href="contact.php">Contact</a></li>
	  </ul>
	</nav>
</header>
