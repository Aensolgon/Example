/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' }
	];
	config.removeButtons = 'Underline,Subscript,Superscript';

	config.format_tags = 'p;h1;h2;h3;pre';

	config.removeDialogTabs = 'image:advanced;link:advanced';
	config.pasteFilter = null;
	config.disableNativeSpellChecker = false,
	config.allowedContent = true;
	config.extraAllowedContent = 'a div';
	config.basicEntities = false;
	config.fillEmptyBlocks = false;
	config.tabSpaces = 0;
	config.forcePasteAsPlainText = true;
	config.basicEntities = false;
	config.entities_greek = false; 
	config.entities_latin = false; 
	config.entities_additional = '';
	config.contentsCss = '/public/css/style.css';

};


