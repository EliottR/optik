<?php 
    add_action('wp_ajax_add_dokky_document', 'add_dokky_document');

    function load_media_files() {
		wp_enqueue_media();
		}
		add_action( 'admin_enqueue_scripts', 'load_media_files' );
    
    function add_dokky_document()
    {
        global $wpdb;
        $title = $_POST['title'];
        $description = $_POST['description'];
        $mediaId = $_POST['mediaId'];
        $authorId = $_POST['authorId'];
        $metadata = $_POST['metadata'];
        
        $data = array(
            'media_id' => $mediaId,
            'title' => $title,
            'description' => $description,
            'tags' => '',
            'metadata' => serialize($metadata),
            'author_id' => $authorId,
            'document_content' => '',
            'type' => pathinfo($metadata['url'], PATHINFO_EXTENSION)
        );

        $dokkyDocumentsTable = $wpdb->prefix . 'dokky_documents';
        $wpdb->insert($dokkyDocumentsTable, $data);
        $documentId = $wpdb->insert_id;

        $result = array('success' => true);

        echo json_encode($result);
        wp_die();
    }
?>