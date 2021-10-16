<?php
/**
 * FileDescription
 *
 * This file is part of ADOdb, a Database Abstraction Layer library for PHP.
 *
 * @package ADOdb
 * @link https://adodb.org Project's web site and documentation
 * @link https://github.com/ADOdb/ADOdb Source code and issue tracker
 *
 * The ADOdb Library is dual-licensed, released under both the BSD 3-Clause
 * and the GNU Lesser General Public Licence (LGPL) v2.1 or, at your option,
 * any later version. This means you can use it in proprietary products.
 * See the LICENSE.md file distributed with this source code for details.
 * @license BSD-3-Clause
 * @license LGPL-2.1-or-later
 *
 * @copyright 2000-2013 John Lim
 * @copyright 2014 Damien Regad, Mark Newnham and the ADOdb community
 */
/**
 * FileDescription
 *
 * This file is part of ADOdb, a Database Abstraction Layer library for PHP.
 *
 * @package ADOdb
 * @link https://adodb.org Project's web site and documentation
 * @link https://github.com/ADOdb/ADOdb Source code and issue tracker
 *
 * The ADOdb Library is dual-licensed, released under both the BSD 3-Clause
 * and the GNU Lesser General Public Licence (LGPL) v2.1 or, at your option,
 * any later version. This means you can use it in proprietary products.
 * See the LICENSE.md file distributed with this source code for details.
 * @license BSD-3-Clause
 * @license LGPL-2.1-or-later
 *
 * @copyright 2000-2013 John Lim
 * @copyright 2014 Damien Regad, Mark Newnham and the ADOdb community
 * @author John Lim <jlim@natsoft.com>
 * @author Damien Regad
 * @author Mark Newnham
 */
/**
 * FileDescription
 *
 * This file is part of ADOdb, a Database Abstraction Layer library for PHP.
 *
 * @package ADOdb
 * @link https://adodb.org Project's web site and documentation
 * @link https://github.com/ADOdb/ADOdb Source code and issue tracker
 *
 * The ADOdb Library is dual-licensed, released under both the BSD 3-Clause
 * and the GNU Lesser General Public Licence (LGPL) v2.1 or, at your option,
 * any later version. This means you can use it in proprietary products.
 * See the LICENSE.md file distributed with this source code for details.
 * @license BSD-3-Clause
 * @license LGPL-2.1-or-later
 *
 * @copyright 2000-2013 John Lim
 * @copyright 2014 Damien Regad, Mark Newnham and the ADOdb community
 * @author John Lim <jlim@natsoft.com>
 * @author Damien Regad
 * @author Mark Newnham
 */
/**
 * ADOdb Library main include file.
 *
 * This file is part of the ADOdb Library, a Database Abstraction layer for PHP
 *
 * @package ADOdb
 * @link https://adodb.org Project's web site and documentation
 * @link https://github.com/ADOdb/ADOdb Source code and issue tracker
 *
 * The ADOdb Library is dual-licensed, released under both the BSD 3-Clause
 * and the GNU Lesser General Public Licence (LGPL) v2.1 or, at your option,
 * any later version. This means you can use it in proprietary products.
 * See the LICENSE.md file distributed with this source code for details.
 * @license BSD-3-Clause
 * @license LGPL-2.1-or-later
 *
 * @copyright 2000-2013 John Lim
 * @copyright 2014 Damien Regad, Mark Newnham and the ADOdb community
 * @author John Lim <jlim@natsoft.com>
 * @author Damien Regad
 * @author Mark Newnham
 */
include 'adodb.inc.php';

$drivers = [
	'mysqli' => 'root',
	'pgsql' => 'root',
	'mssqlnative' => 'SA',
];
$p = 'C0yote71';
$dbname = 'bugtracker';

foreach($drivers as $driver => $u) {
	echo "Testing $driver\n";
	$db = ADONewConnection($driver);
	$db->connect('localhost', $u, $p, $dbname);

	$queries = [
		'SELECT basename, priority, protected FROM mantis_plugin_table',
		'SELECT config_id, value FROM mantis_config_table',
		'SELECT id, username, protected FROM mantis_user_table',
	];

	foreach ($queries as $sql) {
		if ($driver == 'mssqlnative' || $dbname == 'ado521') {
			$sql = preg_replace('/mantis_([a-z_]+)_table$/', 'm_$1', $sql);
		}
		$rs = q($sql);
	}

	echo "\n";
}

function q($sql) {
	global $db;
	echo "--------- $sql\n";
	$rs = $db->execute($sql);
	if ($rs) {
		echo "fieldTypesArray(): "
			. implode(', ', array_column($rs->fieldTypesArray(), 'name')) . "\n";
		echo "fetchField(): " . $rs->fetchField(1)->name . "\n";
	} else {
		echo "Query failed.\n";
	}
	return $rs;
}
