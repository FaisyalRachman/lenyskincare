/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
        config.allowedContent = true;
        config.extraPlugins = 'codemirror';
		config.toolbarGroups = [
		
			{ name: 'others' },
			'/',
			{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
			{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
			{ name: 'styles' }
		];
	 
		// Remove some buttons provided by the standard plugins, which are
		// not needed in the Standard(s) toolbar.
		config.removeButtons = 'Underline,Subscript,Superscript';
	 
		// Set the most common block elements.
		config.format_tags = 'p;h1;h2;h3;pre';
	 
		// Simplify the dialog windows.
		config.removeDialogTabs = 'image:advanced;link:advanced';


};
