<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://kipdev.io
 * @since      1.0.0
 *
 * @package    Wparoma
 * @subpackage Wparoma/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php print_r($dokkyDocuments); ?>

<form class="dokk-modal_form">
    <input type="hidden" id="authorId" value="<?php echo get_current_user_id(); ?>">

    <input type="hidden" id="documentId" value="0">
    <div class="dokky-modal__form__field">
        <label><?php _e('Document title', 'dokky'); ?> *
            <input type="text" maxlength="120" id="documentTitle">
        </label>
    </div>

    <div class="docky-modal__form__field">
    <label><?php _e('Document Description', 'dokky'); ?> *
            <input type="text" maxlength="120" id="documentDescription">
        </label>
    </div>

    <div class="docky-modal__form__field">
        <button class="dokky-modal__form__field__choose-file" id="dokky-media-open" type="button"><?php _e('Choose file', 'dokky'); ?></button>
        <input type="hidden" id="dokky_file_id" name="dokky_file_id" value="">
        <!-- <p id="dokky_file_id"></p> -->
    </div>

    <div class="dokky-modal__form__field">
        <button class="dokky-modal__form__field__submit" id="buttonAddDocument" type="button" onclick="addDocument()">Submit</button>
    </div>
</form>