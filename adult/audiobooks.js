jQuery("#target").dialog({autoOpen: false});
function openDialog(file, story, index) {
    jQuery('#target').dialog({width: 890});
    jQuery('#target').dialog({title: story});
    jQuery('#target').dialog({resizable: false});
    jQuery('#target').on("dialogclose", function(event, ui) {
		$f().stop();
    });
    jQuery('#target').dialog({position: {my: "center", at: "top", of: window}});

    jQuery.ajax({
        type: 'POST',
        url: 'playStory.php',
        data: {story: file, index: index}
    }).done(
            function(html) {
                jQuery('#target').html(html);
            }
    );
    jQuery("#target").dialog("open");
}