<?php
/*
Plugin Name: Poll
 */

include_once plugin_dir_path( __FILE__ ).'/pollwidget.php';

/**
 * Classe Poll_Plugin
 * Déclare le plugin
 */
class Poll_Plugin
{
    /**
     * Constructeur
     */
    public function __construct()
    {
    }

    /**
     * Fonction d'installation
     */
    public function install()
    {
    }

    /**
     * Fonction de désinstallation
     * Suppression des tables du sondage
     */
    public function uninstall()
    {
    }
}

new Poll_Plugin();
