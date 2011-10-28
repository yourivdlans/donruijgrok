tinyMCE.init({
	document_base_url : WEBROOT,
	convert_urls : false,
	theme : "advanced",
	mode : "textareas",
	plugins : "advhr,advimage,Archiv,advlink,contextmenu,paste,searchreplace,table",
	Archiv_settings_file : DOCROOT+"/app/webroot/js/tinymce/plugins/Archiv/config.php",
	
	content_css : "/css/style.css, /css/layout.css",
	theme_advanced_buttons2_add : "|,Archiv_files,Archiv_images",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_statusbar_location : "bottom",
	theme_advanced_resizing : false,
	theme_advanced_resizing_use_cookie : false,
	width : 450,
	height : 400
});