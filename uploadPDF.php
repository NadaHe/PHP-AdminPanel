<?php

use PgSql\Lob;

$file=$_FILES["file"];

move_uploaded_file( $file["tmp_name"], "uploads/".$file["name"] );

header("Location: contact-us.php");

