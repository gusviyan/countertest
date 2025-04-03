<?php

include "koneksi.php";

				$ceknext = mysql_query ("SELECT * FROM tbl_bpjs WHERE status = 0 AND panggil = 0 AND loket = 0 LIMIT 1");
				$pglnext = mysql_fetch_array ($ceknext);
				if ($pglnext != 0){
					echo"
					<center>
					<h1 style='font-size:400%;'>B$pglnext[id]</h1>
					</center>
					";
				} else{
					echo"
					<center><h1> --- </h1></center>
					";
				}
			?>