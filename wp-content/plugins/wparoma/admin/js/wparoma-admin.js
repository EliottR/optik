	const addDocument = () => {
		const title = jQuery('#documentTitle').val();
		const description = jQuery('#documentDescription').val();
		const action = 'add_dokky_document';
		const metadata = JSON.parse(localStorage.getItem('lastAttachment'));
		const authorId = jQuery('#authorId').val();
		const mediaId = jQuery('#dokky_file_id').val();


		var dokkyDocumentData = {title, description, action, authorId, metadata, mediaId}

		jQuery.post(ajaxurl, dokkyDocumentData, function (response) {
			let responseJson = JSON.parse(response)
			
			if(responseJson.success) {
				window.location.reload()
			}
		})
	}

	jQuery(document).ready(function ($) {

		jQuery('#dokky-media-open').click(function (e) {
			e.preventDefault();
			var fileFrame;
	
			if (fileFrame) {
				fileFrame.open();
			}
	
			fileFrame = wp.media({
				title: 'mon super plugin',
				multiple: false,
				library: {
					//type: 'image',
				}
			});
			let fileName;
	
			fileFrame.on('close', function () {
				const selection = fileFrame.state().get('selection');
				const filesIds = new Array();
				let i = 0;
				selection.each(function (attachment) {
					console.log(attachment);
					filesIds[i] = attachment['id'];
					localStorage.setItem('lastAttachment', JSON.stringify(attachment));
					fileName = attachment.attributes.filename;
					i++;
				});
	
				// Todo if type = image PREVIEW else use icon library with sub_type 
	
				const ids = filesIds.join(",");
				jQuery('#dokky_file_id').val(ids);
	
				jQuery('#fileChoosed').html(fileName);
	
			});
	
			fileFrame.on('open', function () {
				var selection = fileFrame.state().get('selection');
				var ids = jQuery('#dokky_file_id').val().split(',');
				ids.forEach(function (id) {
					var attachment = wp.media.attachment(id);
					attachment.fetch();
					selection.add(attachment ? [attachment] : []);
				});
	
			});
	
			fileFrame.open();
		});
	
	});
	