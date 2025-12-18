<?php

namespace Config;

use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config
{
  /**
   * The directory that holds the Migrations and Seeds directories.
   */
  public string $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;

  /**
   * Lets you choose which connection group to use if no other is specified.
   */
  public string $defaultGroup = 'default';

  /**
   * The default database connection.
   *
   * @var array<string, mixed>
   */
  public array $default = [
    'DSN'          => '',
    'hostname'     => 'localhost',
    'username'     => 'root',
    'password'     => '',
    'database'     => 'crownandhalo',
    'DBDriver'     => 'MySQLi',
    'DBPrefix'     => '',
    'pConnect'     => false,
    'DBDebug'      => true,
    'charset'      => 'utf8mb4',
    'DBCollat'     => 'utf8mb4_general_ci',
    'swapPre'      => '',
    'encrypt'      => false,
    'compress'     => false,
    'strictOn'     => false,
    'failover'     => [],
    'port'         => 8889,
    'numberNative' => false,
    'foundRows'    => false,
    'dateFormat'   => [
      'date'     => 'Y-m-d',
      'datetime' => 'Y-m-d H:i:s',
      'time'     => 'H:i:s',
    ],
  ];

    //    /**
    //     * Sample database connection for SQLite3.
    //     *
    //     * @var array<string, mixed>
    //     */
    //    public array $default = [
    //        'database'    => 'database.db',
    //        'DBDriver'    => 'SQLite3',
    //        'DBPrefix'    => '',
    //        'DBDebug'     => true,
    //        'swapPre'     => '',
    //        'failover'    => [],
    //        'foreignKeys' => true,
    //        'busyTimeout' => 1000,
    //        'synchronous' => null,
    //        'dateFormat'  => [
    //            'date'     => 'Y-m-d',
    //            'datetime' => 'Y-m-d H:i:s',
    //            'time'     => 'H:i:s',
    //        ],
    //    ];

    //    /**
    //     * Sample database connection for Postgre.
    //     *
    //     * @var array<string, mixed>
    //     */
    //    public array $default = [
    //        'DSN'        => '',
    //        'hostname'   => 'localhost',
    //        'username'   => 'root',
    //        'password'   => 'root',
    //        'database'   => 'ci4',
    //        'schema'     => 'public',
    //        'DBDriver'   => 'Postgre',
    //        'DBPrefix'   => '',
    //        'pConnect'   => false,
    //        'DBDebug'    => true,
    //        'charset'    => 'utf8',
    //        'swapPre'    => '',
    //        'failover'   => [],
    //        'port'       => 5432,
    //        'dateFormat' => [
    //            'date'     => 'Y-m-d',
    //            'datetime' => 'Y-m-d H:i:s',
    //            'time'     => 'H:i:s',
    //        ],
    //    ];

    //    /**
    //     * Sample database connection for SQLSRV.
    //     *
    //     * @var array<string, mixed>
    //     */
    //    public array $default = [
    //        'DSN'        => '',
    //        'hostname'   => 'localhost',
    //        'username'   => 'root',
    //        'password'   => 'root',
    //        'database'   => 'ci4',
    //        'schema'     => 'dbo',
    //        'DBDriver'   => 'SQLSRV',
    //        'DBPrefix'   => '',
    //        'pConnect'   => false,
    //        'DBDebug'    => true,
    //        'charset'    => 'utf8',
    //        'swapPre'    => '',
    //        'encrypt'    => false,
    //        'failover'   => [],
    //        'port'       => 1433,
    //        'dateFormat' => [
    //            'date'     => 'Y-m-d',
    //            'datetime' => 'Y-m-d H:i:s',
    //            'time'     => 'H:i:s',
    //        ],
    //    ];

    //    /**
    //     * Sample database connection for OCI8.
    //     *
    //     * You may need the following environment variables:
    //     *   NLS_LANG                = 'AMERICAN_AMERICA.UTF8'
    //     *   NLS_DATE_FORMAT         = 'YYYY-MM-DD HH24:MI:SS'
    //     *   NLS_TIMESTAMP_FORMAT    = 'YYYY-MM-DD HH24:MI:SS'
    //     *   NLS_TIMESTAMP_TZ_FORMAT = 'YYYY-MM-DD HH24:MI:SS'
    //     *
    //     * @var array<string, mixed>
    //     */
    //    public array $default = [
    //        'DSN'        => 'localhost:1521/XEPDB1',
    //        'username'   => 'root',
    //        'password'   => 'root',
    //        'DBDriver'   => 'OCI8',
    //        'DBPrefix'   => '',
    //        'pConnect'   => false,
    //        'DBDebug'    => true,
    //        'charset'    => 'AL32UTF8',
    //        'swapPre'    => '',
    //        'failover'   => [],
    //        'dateFormat' => [
    //            'date'     => 'Y-m-d',
    //            'datetime' => 'Y-m-d H:i:s',
    //            'time'     => 'H:i:s',
    //        ],
    //    ];

  /**
   * This database connection is used when running PHPUnit database tests.
   *
   * @var array<string, mixed>
   */
  public array $tests = [
    'DSN'         => '',
    'hostname'    => '127.0.0.1',
    'username'    => '',
    'password'    => '',
    'database'    => ':memory:',
    'DBDriver'    => 'SQLite3',
    'DBPrefix'    => 'db_',  // Needed to ensure we're working correctly with prefixes live. DO NOT REMOVE FOR CI DEVS
    'pConnect'    => false,
    'DBDebug'     => true,
    'charset'     => 'utf8',
    'DBCollat'    => '',
    'swapPre'     => '',
    'encrypt'     => false,
    'compress'    => false,
    'strictOn'    => false,
    'failover'    => [],
    'port'        => 3306,
    'foreignKeys' => true,
    'busyTimeout' => 1000,
    'dateFormat'  => [
      'date'     => 'Y-m-d',
      'datetime' => 'Y-m-d H:i:s',
      'time'     => 'H:i:s',
    ],
  ];

  public function __construct()
  {
    parent::__construct();
    // Runtime env helper (reads from CI env helper first, then getenv)
    $env = function ($key) {
      $v = null;
      if (function_exists('env')) {
        $v = env($key);
      }
      if ($v === null) {
        $v = getenv($key) ?: null;
      }
      return $v;
    };

    // Determine environment name: prefer ENVIRONMENT constant, then CI env var
    $envName = defined('ENVIRONMENT') ? ENVIRONMENT : ($env('CI_ENVIRONMENT') ?: 'development');

    // Toggle DB debug depending on environment (disable on production)
    $this->default['DBDebug'] = ($envName !== 'production');

    // Use different default DB port for local (MAMP) vs production MySQL
    $defaultPort = ($envName === 'production') ? 3306 : 8889;
    $this->default['port'] = (int) ($env('DB_PORT') ?: $defaultPort);

    // Apply explicit overrides from environment variables if present
    if ($v = $env('DB_HOST')) {
      $this->default['hostname'] = $v;
    }
    if ($v = $env('DB_USER')) {
      $this->default['username'] = $v;
    }
    if ($v = $env('DB_PASS')) {
      $this->default['password'] = $v;
    }
    if ($v = $env('DB_NAME')) {
      $this->default['database'] = $v;
    }
    if ($v = $env('DB_DRIVER')) {
      $this->default['DBDriver'] = $v;
    }

    // Ensure that we always set the database group to 'tests' if
    // we are currently running an automated test suite, so that
    // we don't overwrite live data on accident.
    if (ENVIRONMENT === 'testing') {
      $this->defaultGroup = 'tests';
    }
  }
}
