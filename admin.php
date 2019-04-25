<?php

	session_start();

	echo "<h1>BIENVENUE ADMIN ".$_SESSION['user']['username']."</h1>";