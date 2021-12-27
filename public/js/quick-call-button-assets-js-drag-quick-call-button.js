(function () {
	var isDragging = false;
    var $qcbIcon = jQuery('#draggable');
	initDragAndDrop();
	function initDragAndDrop() {
        $qcbIcon.draggable({
            drag: function () {
                isDragging = true;
            }
        });
	}
})();
/*This file was exported by "Export WP Page to Static HTML" plugin which created by ReCorp (https://myrecorp.com) */