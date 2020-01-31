<?php


class ffxivPlugin
{
    private static $runInstallCalled = false;

    // Install plugin
    public static function installPlugin() {
        self::runInstall();
    }

    // Uninstall plugin
    public static function uninstallPlugin() {

    }

    public static function runInstall() {
        if (self::$runInstallCalled) { return; }
        self::$runInstallCalled = true;
    }

    public static function install_actions() {

    }
}