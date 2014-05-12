[installazione]


1) creare il database (il default è stato creato con dbnoma: hms, user: hms, password: hms
2) creare schema con data/db/db.sql
3) impostare connessione db in protected/config/main.php

esempio:

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=hms',
			'emulatePrepare' => true,
			'username' => 'hms',
			'password' => 'hms',
			'charset' => 'utf8',
		),


4) accedere all'app hms.localhost

