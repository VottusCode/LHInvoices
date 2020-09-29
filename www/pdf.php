<?php declare(strict_types=1);

/**
 * LHInvoices
 *
 * @copyright Lite-Host.eu, 2020
 */

/**
 * Composer
 *
 * Requiring Composer's autoloader to load
 * all classes and dependencies.
 */
require __DIR__ . '/../vendor/autoload.php';

use LHInvoices\App;
use Tracy\Debugger;

/**
 * Defining the environment.
 *
 * In development mode Tracy is enabled.
 */
if (!defined('DEVELOPMENT')) define("DEVELOPMENT", false);

if (DEVELOPMENT) Debugger::enable(Debugger::DEVELOPMENT);

/**
 * Starting the application
 */
App::start();

