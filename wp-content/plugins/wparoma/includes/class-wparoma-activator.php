<?php

/**
 * Fired during plugin activation
 *
 * @link       https://kipdev.io
 * @since      1.0.0
 *
 * @package    Wparoma
 * @subpackage Wparoma/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wparoma
 * @subpackage Wparoma/includes
 * @author     Eliott Raheriarisoa <eliott.raheriarisoa@gmail.com>
 */
class Wparoma_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public function activate() {
		$this->createDocumentsTable();
		$this->createTagsTable();
	}

	public function createDocumentsTable() {
		global $wpdb;
		$dokkyDocumentsTable = $wpdb->prefix . 'dokky_documents';
		$charset_collate = $wpdb->get_charset_collate();
	
		$sql = "CREATE TABLE $dokkyDocumentsTable (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			media_id INT NOT NULL,
			title VARCHAR(255) NOT NULL,
			description TEXT NOT NULL,
			tags TEXT NULL,
			metadata TEXT NULL,
			author_id INT NOT NULL,
			document_content LONGTEXT NULL,
			updated_at DATETIME NULL,
			created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
			type TEXT NULL,
			PRIMARY KEY (id)
			) $charset_collate;";
		
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}
	
	public function createTagsTable() {
		global $wpdb;
		$dokkyTagsTable = $wpdb->prefix . 'dokky_tags';
		$charset_collate = $wpdb->get_charset_collate();
	
		$sql = "CREATE TABLE $dokkyTagsTable (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			title VARCHAR(255) NOT NULL,
			class_color VARCHAR(255) NOT NULL,
			created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY (id)
			) $charset_collate;";
		
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}
}
