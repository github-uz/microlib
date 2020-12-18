<?php
/**
 * Created by PhpStorm.
 * User: Kakashi
 * Date: 24.11.2020
 * Time: 20:23
 */


foreach (glob('./lib/*.php') as $file) {
    if ($file != './lib/loader.php') require_once $file;
}