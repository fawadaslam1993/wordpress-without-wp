<?php
/**
 * WordPress core upgrade functionality.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 2.7.0
 */

/**
 * Stores files to be deleted.
 *
 * @since 2.7.0
 *
 * @global array $_old_files
 * @var array
 * @name $_old_files
 */
global $_old_files;

$_old_files = array(
	// 2.0
	'admin/import-b2.php',
	'admin/import-blogger.php',
	'admin/import-greymatter.php',
	'admin/import-livejournal.php',
	'admin/import-mt.php',
	'admin/import-rss.php',
	'admin/import-textpattern.php',
	'admin/quicktags.js',
	'wp-images/fade-butt.png',
	'wp-images/get-firefox.png',
	'wp-images/header-shadow.png',
	'wp-images/smilies',
	'wp-images/wp-small.png',
	'wp-images/wpminilogo.png',
	'wp.php',
	// 2.0.8
	'includes/js/tinymce/plugins/inlinepopups/readme.txt',
	// 2.1
	'admin/edit-form-ajax-cat.php',
	'admin/execute-pings.php',
	'admin/inline-uploading.php',
	'admin/link-categories.php',
	'admin/list-manipulation.js',
	'admin/list-manipulation.php',
	'includes/comment-functions.php',
	'includes/feed-functions.php',
	'includes/functions-compat.php',
	'includes/functions-formatting.php',
	'includes/functions-post.php',
	'includes/js/dbx-key.js',
	'includes/js/tinymce/plugins/autosave/langs/cs.js',
	'includes/js/tinymce/plugins/autosave/langs/sv.js',
	'includes/links.php',
	'includes/pluggable-functions.php',
	'includes/template-functions-author.php',
	'includes/template-functions-category.php',
	'includes/template-functions-general.php',
	'includes/template-functions-links.php',
	'includes/template-functions-post.php',
	'includes/wp-l10n.php',
	// 2.2
	'admin/cat-js.php',
	'admin/import/b2.php',
	'includes/js/autosave-js.php',
	'includes/js/list-manipulation-js.php',
	'includes/js/wp-ajax-js.php',
	// 2.3
	'admin/admin-db.php',
	'admin/cat.js',
	'admin/categories.js',
	'admin/custom-fields.js',
	'admin/dbx-admin-key.js',
	'admin/edit-comments.js',
	'admin/install-rtl.css',
	'admin/install.css',
	'admin/upgrade-schema.php',
	'admin/upload-functions.php',
	'admin/upload-rtl.css',
	'admin/upload.css',
	'admin/upload.js',
	'admin/users.js',
	'admin/widgets-rtl.css',
	'admin/widgets.css',
	'admin/xfn.js',
	'includes/js/tinymce/license.html',
	// 2.5
	'admin/css/upload.css',
	'admin/images/box-bg-left.gif',
	'admin/images/box-bg-right.gif',
	'admin/images/box-bg.gif',
	'admin/images/box-butt-left.gif',
	'admin/images/box-butt-right.gif',
	'admin/images/box-butt.gif',
	'admin/images/box-head-left.gif',
	'admin/images/box-head-right.gif',
	'admin/images/box-head.gif',
	'admin/images/heading-bg.gif',
	'admin/images/login-bkg-bottom.gif',
	'admin/images/login-bkg-tile.gif',
	'admin/images/notice.gif',
	'admin/images/toggle.gif',
	'admin/includes/upload.php',
	'admin/js/dbx-admin-key.js',
	'admin/js/link-cat.js',
	'admin/profile-update.php',
	'admin/templates.php',
	'includes/images/wlw/WpComments.png',
	'includes/images/wlw/WpIcon.png',
	'includes/images/wlw/WpWatermark.png',
	'includes/js/dbx.js',
	'includes/js/fat.js',
	'includes/js/list-manipulation.js',
	'includes/js/tinymce/langs/en.js',
	'includes/js/tinymce/plugins/autosave/editor_plugin_src.js',
	'includes/js/tinymce/plugins/autosave/langs',
	'includes/js/tinymce/plugins/directionality/images',
	'includes/js/tinymce/plugins/directionality/langs',
	'includes/js/tinymce/plugins/inlinepopups/css',
	'includes/js/tinymce/plugins/inlinepopups/images',
	'includes/js/tinymce/plugins/inlinepopups/jscripts',
	'includes/js/tinymce/plugins/paste/images',
	'includes/js/tinymce/plugins/paste/jscripts',
	'includes/js/tinymce/plugins/paste/langs',
	'includes/js/tinymce/plugins/spellchecker/classes/HttpClient.class.php',
	'includes/js/tinymce/plugins/spellchecker/classes/TinyGoogleSpell.class.php',
	'includes/js/tinymce/plugins/spellchecker/classes/TinyPspell.class.php',
	'includes/js/tinymce/plugins/spellchecker/classes/TinyPspellShell.class.php',
	'includes/js/tinymce/plugins/spellchecker/css/spellchecker.css',
	'includes/js/tinymce/plugins/spellchecker/images',
	'includes/js/tinymce/plugins/spellchecker/langs',
	'includes/js/tinymce/plugins/spellchecker/tinyspell.php',
	'includes/js/tinymce/plugins/wordpress/images',
	'includes/js/tinymce/plugins/wordpress/langs',
	'includes/js/tinymce/plugins/wordpress/wordpress.css',
	'includes/js/tinymce/plugins/wphelp',
	'includes/js/tinymce/themes/advanced/css',
	'includes/js/tinymce/themes/advanced/images',
	'includes/js/tinymce/themes/advanced/jscripts',
	'includes/js/tinymce/themes/advanced/langs',
	// 2.5.1
	'includes/js/tinymce/tiny_mce_gzip.php',
	// 2.6
	'admin/bookmarklet.php',
	'includes/js/jquery/jquery.dimensions.min.js',
	'includes/js/tinymce/plugins/wordpress/popups.css',
	'includes/js/wp-ajax.js',
	// 2.7
	'admin/css/press-this-ie-rtl.css',
	'admin/css/press-this-ie.css',
	'admin/css/upload-rtl.css',
	'admin/edit-form.php',
	'admin/images/comment-pill.gif',
	'admin/images/comment-stalk-classic.gif',
	'admin/images/comment-stalk-fresh.gif',
	'admin/images/comment-stalk-rtl.gif',
	'admin/images/del.png',
	'admin/images/gear.png',
	'admin/images/media-button-gallery.gif',
	'admin/images/media-buttons.gif',
	'admin/images/postbox-bg.gif',
	'admin/images/tab.png',
	'admin/images/tail.gif',
	'admin/js/forms.js',
	'admin/js/upload.js',
	'admin/link-import.php',
	'includes/images/audio.png',
	'includes/images/css.png',
	'includes/images/default.png',
	'includes/images/doc.png',
	'includes/images/exe.png',
	'includes/images/html.png',
	'includes/images/js.png',
	'includes/images/pdf.png',
	'includes/images/swf.png',
	'includes/images/tar.png',
	'includes/images/text.png',
	'includes/images/video.png',
	'includes/images/zip.png',
	'includes/js/tinymce/tiny_mce_config.php',
	'includes/js/tinymce/tiny_mce_ext.js',
	// 2.8
	'admin/js/users.js',
	'includes/js/swfupload/plugins/swfupload.documentready.js',
	'includes/js/swfupload/plugins/swfupload.graceful_degradation.js',
	'includes/js/swfupload/swfupload_f9.swf',
	'includes/js/tinymce/plugins/autosave',
	'includes/js/tinymce/plugins/paste/css',
	'includes/js/tinymce/utils/mclayer.js',
	'includes/js/tinymce/wordpress.css',
	// 2.8.5
	'admin/import/btt.php',
	'admin/import/jkw.php',
	// 2.9
	'admin/js/page.dev.js',
	'admin/js/page.js',
	'admin/js/set-post-thumbnail-handler.dev.js',
	'admin/js/set-post-thumbnail-handler.js',
	'admin/js/slug.dev.js',
	'admin/js/slug.js',
	'includes/gettext.php',
	'includes/js/tinymce/plugins/wordpress/js',
	'includes/streams.php',
	// MU
	'README.txt',
	'htaccess.dist',
	'index-install.php',
	'admin/css/mu-rtl.css',
	'admin/css/mu.css',
	'admin/images/site-admin.png',
	'admin/includes/mu.php',
	'admin/wpmu-admin.php',
	'admin/wpmu-blogs.php',
	'admin/wpmu-edit.php',
	'admin/wpmu-options.php',
	'admin/wpmu-themes.php',
	'admin/wpmu-upgrade-site.php',
	'admin/wpmu-users.php',
	'includes/images/wordpress-mu.png',
	'includes/wpmu-default-filters.php',
	'includes/wpmu-functions.php',
	'wpmu-settings.php',
	// 3.0
	'admin/categories.php',
	'admin/edit-category-form.php',
	'admin/edit-page-form.php',
	'admin/edit-pages.php',
	'admin/images/admin-header-footer.png',
	'admin/images/browse-happy.gif',
	'admin/images/ico-add.png',
	'admin/images/ico-close.png',
	'admin/images/ico-edit.png',
	'admin/images/ico-viewpage.png',
	'admin/images/fav-top.png',
	'admin/images/screen-options-left.gif',
	'admin/images/wp-logo-vs.gif',
	'admin/images/wp-logo.gif',
	'admin/import',
	'admin/js/wp-gears.dev.js',
	'admin/js/wp-gears.js',
	'admin/options-misc.php',
	'admin/page-new.php',
	'admin/page.php',
	'admin/rtl.css',
	'admin/rtl.dev.css',
	'admin/update-links.php',
	'admin/admin.css',
	'admin/admin.dev.css',
	'includes/js/codepress',
	'includes/js/codepress/engines/khtml.js',
	'includes/js/codepress/engines/older.js',
	'includes/js/jquery/autocomplete.dev.js',
	'includes/js/jquery/autocomplete.js',
	'includes/js/jquery/interface.js',
	'includes/js/scriptaculous/prototype.js',
	// Following file added back in 5.1, see #45645.
	//'includes/js/tinymce/wp-tinymce.js',
	// 3.1
	'admin/edit-attachment-rows.php',
	'admin/edit-link-categories.php',
	'admin/edit-link-category-form.php',
	'admin/edit-post-rows.php',
	'admin/images/button-grad-active-vs.png',
	'admin/images/button-grad-vs.png',
	'admin/images/fav-arrow-vs-rtl.gif',
	'admin/images/fav-arrow-vs.gif',
	'admin/images/fav-top-vs.gif',
	'admin/images/list-vs.png',
	'admin/images/screen-options-right-up.gif',
	'admin/images/screen-options-right.gif',
	'admin/images/visit-site-button-grad-vs.gif',
	'admin/images/visit-site-button-grad.gif',
	'admin/link-category.php',
	'admin/sidebar.php',
	'includes/classes.php',
	'includes/js/tinymce/blank.htm',
	'includes/js/tinymce/plugins/media/css/content.css',
	'includes/js/tinymce/plugins/media/img',
	'includes/js/tinymce/plugins/safari',
	// 3.2
	'admin/images/logo-login.gif',
	'admin/images/star.gif',
	'admin/js/list-table.dev.js',
	'admin/js/list-table.js',
	'includes/default-embeds.php',
	'includes/js/tinymce/plugins/wordpress/img/help.gif',
	'includes/js/tinymce/plugins/wordpress/img/more.gif',
	'includes/js/tinymce/plugins/wordpress/img/toolbars.gif',
	'includes/js/tinymce/themes/advanced/img/fm.gif',
	'includes/js/tinymce/themes/advanced/img/sflogo.png',
	// 3.3
	'admin/css/colors-classic-rtl.css',
	'admin/css/colors-classic-rtl.dev.css',
	'admin/css/colors-fresh-rtl.css',
	'admin/css/colors-fresh-rtl.dev.css',
	'admin/css/dashboard-rtl.dev.css',
	'admin/css/dashboard.dev.css',
	'admin/css/global-rtl.css',
	'admin/css/global-rtl.dev.css',
	'admin/css/global.css',
	'admin/css/global.dev.css',
	'admin/css/install-rtl.dev.css',
	'admin/css/login-rtl.dev.css',
	'admin/css/login.dev.css',
	'admin/css/ms.css',
	'admin/css/ms.dev.css',
	'admin/css/nav-menu-rtl.css',
	'admin/css/nav-menu-rtl.dev.css',
	'admin/css/nav-menu.css',
	'admin/css/nav-menu.dev.css',
	'admin/css/plugin-install-rtl.css',
	'admin/css/plugin-install-rtl.dev.css',
	'admin/css/plugin-install.css',
	'admin/css/plugin-install.dev.css',
	'admin/css/press-this-rtl.dev.css',
	'admin/css/press-this.dev.css',
	'admin/css/theme-editor-rtl.css',
	'admin/css/theme-editor-rtl.dev.css',
	'admin/css/theme-editor.css',
	'admin/css/theme-editor.dev.css',
	'admin/css/theme-install-rtl.css',
	'admin/css/theme-install-rtl.dev.css',
	'admin/css/theme-install.css',
	'admin/css/theme-install.dev.css',
	'admin/css/widgets-rtl.dev.css',
	'admin/css/widgets.dev.css',
	'admin/includes/internal-linking.php',
	'includes/images/admin-bar-sprite-rtl.png',
	'includes/js/jquery/ui.button.js',
	'includes/js/jquery/ui.core.js',
	'includes/js/jquery/ui.dialog.js',
	'includes/js/jquery/ui.draggable.js',
	'includes/js/jquery/ui.droppable.js',
	'includes/js/jquery/ui.mouse.js',
	'includes/js/jquery/ui.position.js',
	'includes/js/jquery/ui.resizable.js',
	'includes/js/jquery/ui.selectable.js',
	'includes/js/jquery/ui.sortable.js',
	'includes/js/jquery/ui.tabs.js',
	'includes/js/jquery/ui.widget.js',
	'includes/js/l10n.dev.js',
	'includes/js/l10n.js',
	'includes/js/tinymce/plugins/wplink/css',
	'includes/js/tinymce/plugins/wplink/img',
	'includes/js/tinymce/plugins/wplink/js',
	'includes/js/tinymce/themes/advanced/img/wpicons.png',
	'includes/js/tinymce/themes/advanced/skins/wp_theme/img/butt2.png',
	'includes/js/tinymce/themes/advanced/skins/wp_theme/img/button_bg.png',
	'includes/js/tinymce/themes/advanced/skins/wp_theme/img/down_arrow.gif',
	'includes/js/tinymce/themes/advanced/skins/wp_theme/img/fade-butt.png',
	'includes/js/tinymce/themes/advanced/skins/wp_theme/img/separator.gif',
	// Don't delete, yet: 'wp-rss.php',
	// Don't delete, yet: 'wp-rdf.php',
	// Don't delete, yet: 'wp-rss2.php',
	// Don't delete, yet: 'wp-commentsrss2.php',
	// Don't delete, yet: 'wp-atom.php',
	// Don't delete, yet: 'wp-feed.php',
	// 3.4
	'admin/images/gray-star.png',
	'admin/images/logo-login.png',
	'admin/images/star.png',
	'admin/index-extra.php',
	'admin/network/index-extra.php',
	'admin/user/index-extra.php',
	'admin/images/screenshots/admin-flyouts.png',
	'admin/images/screenshots/coediting.png',
	'admin/images/screenshots/drag-and-drop.png',
	'admin/images/screenshots/help-screen.png',
	'admin/images/screenshots/media-icon.png',
	'admin/images/screenshots/new-feature-pointer.png',
	'admin/images/screenshots/welcome-screen.png',
	'includes/css/editor-buttons.css',
	'includes/css/editor-buttons.dev.css',
	'includes/js/tinymce/plugins/paste/blank.htm',
	'includes/js/tinymce/plugins/wordpress/css',
	'includes/js/tinymce/plugins/wordpress/editor_plugin.dev.js',
	'includes/js/tinymce/plugins/wordpress/img/embedded.png',
	'includes/js/tinymce/plugins/wordpress/img/more_bug.gif',
	'includes/js/tinymce/plugins/wordpress/img/page_bug.gif',
	'includes/js/tinymce/plugins/wpdialogs/editor_plugin.dev.js',
	'includes/js/tinymce/plugins/wpeditimage/css/editimage-rtl.css',
	'includes/js/tinymce/plugins/wpeditimage/editor_plugin.dev.js',
	'includes/js/tinymce/plugins/wpfullscreen/editor_plugin.dev.js',
	'includes/js/tinymce/plugins/wpgallery/editor_plugin.dev.js',
	'includes/js/tinymce/plugins/wpgallery/img/gallery.png',
	'includes/js/tinymce/plugins/wplink/editor_plugin.dev.js',
	// Don't delete, yet: 'wp-pass.php',
	// Don't delete, yet: 'wp-register.php',
	// 3.5
	'admin/gears-manifest.php',
	'admin/includes/manifest.php',
	'admin/images/archive-link.png',
	'admin/images/blue-grad.png',
	'admin/images/button-grad-active.png',
	'admin/images/button-grad.png',
	'admin/images/ed-bg-vs.gif',
	'admin/images/ed-bg.gif',
	'admin/images/fade-butt.png',
	'admin/images/fav-arrow-rtl.gif',
	'admin/images/fav-arrow.gif',
	'admin/images/fav-vs.png',
	'admin/images/fav.png',
	'admin/images/gray-grad.png',
	'admin/images/loading-publish.gif',
	'admin/images/logo-ghost.png',
	'admin/images/logo.gif',
	'admin/images/menu-arrow-frame-rtl.png',
	'admin/images/menu-arrow-frame.png',
	'admin/images/menu-arrows.gif',
	'admin/images/menu-bits-rtl-vs.gif',
	'admin/images/menu-bits-rtl.gif',
	'admin/images/menu-bits-vs.gif',
	'admin/images/menu-bits.gif',
	'admin/images/menu-dark-rtl-vs.gif',
	'admin/images/menu-dark-rtl.gif',
	'admin/images/menu-dark-vs.gif',
	'admin/images/menu-dark.gif',
	'admin/images/required.gif',
	'admin/images/screen-options-toggle-vs.gif',
	'admin/images/screen-options-toggle.gif',
	'admin/images/toggle-arrow-rtl.gif',
	'admin/images/toggle-arrow.gif',
	'admin/images/upload-classic.png',
	'admin/images/upload-fresh.png',
	'admin/images/white-grad-active.png',
	'admin/images/white-grad.png',
	'admin/images/widgets-arrow-vs.gif',
	'admin/images/widgets-arrow.gif',
	'admin/images/wpspin_dark.gif',
	'includes/images/upload.png',
	'includes/js/prototype.js',
	'includes/js/scriptaculous',
	'admin/css/admin-rtl.dev.css',
	'admin/css/admin.dev.css',
	'admin/css/media-rtl.dev.css',
	'admin/css/media.dev.css',
	'admin/css/colors-classic.dev.css',
	'admin/css/customize-controls-rtl.dev.css',
	'admin/css/customize-controls.dev.css',
	'admin/css/ie-rtl.dev.css',
	'admin/css/ie.dev.css',
	'admin/css/install.dev.css',
	'admin/css/colors-fresh.dev.css',
	'includes/js/customize-base.dev.js',
	'includes/js/json2.dev.js',
	'includes/js/comment-reply.dev.js',
	'includes/js/customize-preview.dev.js',
	'includes/js/wplink.dev.js',
	'includes/js/tw-sack.dev.js',
	'includes/js/wp-list-revisions.dev.js',
	'includes/js/autosave.dev.js',
	'includes/js/admin-bar.dev.js',
	'includes/js/quicktags.dev.js',
	'includes/js/wp-ajax-response.dev.js',
	'includes/js/wp-pointer.dev.js',
	'includes/js/hoverIntent.dev.js',
	'includes/js/colorpicker.dev.js',
	'includes/js/wp-lists.dev.js',
	'includes/js/customize-loader.dev.js',
	'includes/js/jquery/jquery.table-hotkeys.dev.js',
	'includes/js/jquery/jquery.color.dev.js',
	'includes/js/jquery/jquery.color.js',
	'includes/js/jquery/jquery.hotkeys.dev.js',
	'includes/js/jquery/jquery.form.dev.js',
	'includes/js/jquery/suggest.dev.js',
	'admin/js/xfn.dev.js',
	'admin/js/set-post-thumbnail.dev.js',
	'admin/js/comment.dev.js',
	'admin/js/theme.dev.js',
	'admin/js/cat.dev.js',
	'admin/js/password-strength-meter.dev.js',
	'admin/js/user-profile.dev.js',
	'admin/js/theme-preview.dev.js',
	'admin/js/post.dev.js',
	'admin/js/media-upload.dev.js',
	'admin/js/word-count.dev.js',
	'admin/js/plugin-install.dev.js',
	'admin/js/edit-comments.dev.js',
	'admin/js/media-gallery.dev.js',
	'admin/js/custom-fields.dev.js',
	'admin/js/custom-background.dev.js',
	'admin/js/common.dev.js',
	'admin/js/inline-edit-tax.dev.js',
	'admin/js/gallery.dev.js',
	'admin/js/utils.dev.js',
	'admin/js/widgets.dev.js',
	'admin/js/wp-fullscreen.dev.js',
	'admin/js/nav-menu.dev.js',
	'admin/js/dashboard.dev.js',
	'admin/js/link.dev.js',
	'admin/js/user-suggest.dev.js',
	'admin/js/postbox.dev.js',
	'admin/js/tags.dev.js',
	'admin/js/image-edit.dev.js',
	'admin/js/media.dev.js',
	'admin/js/customize-controls.dev.js',
	'admin/js/inline-edit-post.dev.js',
	'admin/js/categories.dev.js',
	'admin/js/editor.dev.js',
	'includes/js/tinymce/plugins/wpeditimage/js/editimage.dev.js',
	'includes/js/tinymce/plugins/wpdialogs/js/popup.dev.js',
	'includes/js/tinymce/plugins/wpdialogs/js/wpdialog.dev.js',
	'includes/js/plupload/handlers.dev.js',
	'includes/js/plupload/wp-plupload.dev.js',
	'includes/js/swfupload/handlers.dev.js',
	'includes/js/jcrop/jquery.Jcrop.dev.js',
	'includes/js/jcrop/jquery.Jcrop.js',
	'includes/js/jcrop/jquery.Jcrop.css',
	'includes/js/imgareaselect/jquery.imgareaselect.dev.js',
	'includes/css/wp-pointer.dev.css',
	'includes/css/editor.dev.css',
	'includes/css/jquery-ui-dialog.dev.css',
	'includes/css/admin-bar-rtl.dev.css',
	'includes/css/admin-bar.dev.css',
	'includes/js/jquery/ui/jquery.effects.clip.min.js',
	'includes/js/jquery/ui/jquery.effects.scale.min.js',
	'includes/js/jquery/ui/jquery.effects.blind.min.js',
	'includes/js/jquery/ui/jquery.effects.core.min.js',
	'includes/js/jquery/ui/jquery.effects.shake.min.js',
	'includes/js/jquery/ui/jquery.effects.fade.min.js',
	'includes/js/jquery/ui/jquery.effects.explode.min.js',
	'includes/js/jquery/ui/jquery.effects.slide.min.js',
	'includes/js/jquery/ui/jquery.effects.drop.min.js',
	'includes/js/jquery/ui/jquery.effects.highlight.min.js',
	'includes/js/jquery/ui/jquery.effects.bounce.min.js',
	'includes/js/jquery/ui/jquery.effects.pulsate.min.js',
	'includes/js/jquery/ui/jquery.effects.transfer.min.js',
	'includes/js/jquery/ui/jquery.effects.fold.min.js',
	'admin/images/screenshots/captions-1.png',
	'admin/images/screenshots/captions-2.png',
	'admin/images/screenshots/flex-header-1.png',
	'admin/images/screenshots/flex-header-2.png',
	'admin/images/screenshots/flex-header-3.png',
	'admin/images/screenshots/flex-header-media-library.png',
	'admin/images/screenshots/theme-customizer.png',
	'admin/images/screenshots/twitter-embed-1.png',
	'admin/images/screenshots/twitter-embed-2.png',
	'admin/js/utils.js',
	// Added back in 5.3 [45448], see #43895.
	// 'admin/options-privacy.php',
	'wp-app.php',
	'includes/class-wp-atom-server.php',
	'includes/js/tinymce/themes/advanced/skins/wp_theme/ui.css',
	// 3.5.2
	'includes/js/swfupload/swfupload-all.js',
	// 3.6
	'admin/js/revisions-js.php',
	'admin/images/screenshots',
	'admin/js/categories.js',
	'admin/js/categories.min.js',
	'admin/js/custom-fields.js',
	'admin/js/custom-fields.min.js',
	// 3.7
	'admin/js/cat.js',
	'admin/js/cat.min.js',
	'includes/js/tinymce/plugins/wpeditimage/js/editimage.min.js',
	// 3.8
	'includes/js/tinymce/themes/advanced/skins/wp_theme/img/page_bug.gif',
	'includes/js/tinymce/themes/advanced/skins/wp_theme/img/more_bug.gif',
	'includes/js/thickbox/tb-close-2x.png',
	'includes/js/thickbox/tb-close.png',
	'includes/images/wpmini-blue-2x.png',
	'includes/images/wpmini-blue.png',
	'admin/css/colors-fresh.css',
	'admin/css/colors-classic.css',
	'admin/css/colors-fresh.min.css',
	'admin/css/colors-classic.min.css',
	'admin/js/about.min.js',
	'admin/js/about.js',
	'admin/images/arrows-dark-vs-2x.png',
	'admin/images/wp-logo-vs.png',
	'admin/images/arrows-dark-vs.png',
	'admin/images/wp-logo.png',
	'admin/images/arrows-pr.png',
	'admin/images/arrows-dark.png',
	'admin/images/press-this.png',
	'admin/images/press-this-2x.png',
	'admin/images/arrows-vs-2x.png',
	'admin/images/welcome-icons.png',
	'admin/images/wp-logo-2x.png',
	'admin/images/stars-rtl-2x.png',
	'admin/images/arrows-dark-2x.png',
	'admin/images/arrows-pr-2x.png',
	'admin/images/menu-shadow-rtl.png',
	'admin/images/arrows-vs.png',
	'admin/images/about-search-2x.png',
	'admin/images/bubble_bg-rtl-2x.gif',
	'admin/images/wp-badge-2x.png',
	'admin/images/wordpress-logo-2x.png',
	'admin/images/bubble_bg-rtl.gif',
	'admin/images/wp-badge.png',
	'admin/images/menu-shadow.png',
	'admin/images/about-globe-2x.png',
	'admin/images/welcome-icons-2x.png',
	'admin/images/stars-rtl.png',
	'admin/images/wp-logo-vs-2x.png',
	'admin/images/about-updates-2x.png',
	// 3.9
	'admin/css/colors.css',
	'admin/css/colors.min.css',
	'admin/css/colors-rtl.css',
	'admin/css/colors-rtl.min.css',
	// Following files added back in 4.5, see #36083.
	// 'admin/css/media-rtl.min.css',
	// 'admin/css/media.min.css',
	// 'admin/css/farbtastic-rtl.min.css',
	'admin/images/lock-2x.png',
	'admin/images/lock.png',
	'admin/js/theme-preview.js',
	'admin/js/theme-install.min.js',
	'admin/js/theme-install.js',
	'admin/js/theme-preview.min.js',
	'includes/js/plupload/plupload.html4.js',
	'includes/js/plupload/plupload.html5.js',
	'includes/js/plupload/changelog.txt',
	'includes/js/plupload/plupload.silverlight.js',
	'includes/js/plupload/plupload.flash.js',
	// Added back in 4.9 [41328], see #41755.
	// 'includes/js/plupload/plupload.js',
	'includes/js/tinymce/plugins/spellchecker',
	'includes/js/tinymce/plugins/inlinepopups',
	'includes/js/tinymce/plugins/media/js',
	'includes/js/tinymce/plugins/media/css',
	'includes/js/tinymce/plugins/wordpress/img',
	'includes/js/tinymce/plugins/wpdialogs/js',
	'includes/js/tinymce/plugins/wpeditimage/img',
	'includes/js/tinymce/plugins/wpeditimage/js',
	'includes/js/tinymce/plugins/wpeditimage/css',
	'includes/js/tinymce/plugins/wpgallery/img',
	'includes/js/tinymce/plugins/wpfullscreen/css',
	'includes/js/tinymce/plugins/paste/js',
	'includes/js/tinymce/themes/advanced',
	'includes/js/tinymce/tiny_mce.js',
	'includes/js/tinymce/mark_loaded_src.js',
	'includes/js/tinymce/wp-tinymce-schema.js',
	'includes/js/tinymce/plugins/media/editor_plugin.js',
	'includes/js/tinymce/plugins/media/editor_plugin_src.js',
	'includes/js/tinymce/plugins/media/media.htm',
	'includes/js/tinymce/plugins/wpview/editor_plugin_src.js',
	'includes/js/tinymce/plugins/wpview/editor_plugin.js',
	'includes/js/tinymce/plugins/directionality/editor_plugin.js',
	'includes/js/tinymce/plugins/directionality/editor_plugin_src.js',
	'includes/js/tinymce/plugins/wordpress/editor_plugin.js',
	'includes/js/tinymce/plugins/wordpress/editor_plugin_src.js',
	'includes/js/tinymce/plugins/wpdialogs/editor_plugin_src.js',
	'includes/js/tinymce/plugins/wpdialogs/editor_plugin.js',
	'includes/js/tinymce/plugins/wpeditimage/editimage.html',
	'includes/js/tinymce/plugins/wpeditimage/editor_plugin.js',
	'includes/js/tinymce/plugins/wpeditimage/editor_plugin_src.js',
	'includes/js/tinymce/plugins/fullscreen/editor_plugin_src.js',
	'includes/js/tinymce/plugins/fullscreen/fullscreen.htm',
	'includes/js/tinymce/plugins/fullscreen/editor_plugin.js',
	'includes/js/tinymce/plugins/wplink/editor_plugin_src.js',
	'includes/js/tinymce/plugins/wplink/editor_plugin.js',
	'includes/js/tinymce/plugins/wpgallery/editor_plugin_src.js',
	'includes/js/tinymce/plugins/wpgallery/editor_plugin.js',
	'includes/js/tinymce/plugins/tabfocus/editor_plugin.js',
	'includes/js/tinymce/plugins/tabfocus/editor_plugin_src.js',
	'includes/js/tinymce/plugins/wpfullscreen/editor_plugin.js',
	'includes/js/tinymce/plugins/wpfullscreen/editor_plugin_src.js',
	'includes/js/tinymce/plugins/paste/editor_plugin.js',
	'includes/js/tinymce/plugins/paste/pasteword.htm',
	'includes/js/tinymce/plugins/paste/editor_plugin_src.js',
	'includes/js/tinymce/plugins/paste/pastetext.htm',
	'includes/js/tinymce/langs/wp-langs.php',
	// 4.1
	'includes/js/jquery/ui/jquery.ui.accordion.min.js',
	'includes/js/jquery/ui/jquery.ui.autocomplete.min.js',
	'includes/js/jquery/ui/jquery.ui.button.min.js',
	'includes/js/jquery/ui/jquery.ui.core.min.js',
	'includes/js/jquery/ui/jquery.ui.datepicker.min.js',
	'includes/js/jquery/ui/jquery.ui.dialog.min.js',
	'includes/js/jquery/ui/jquery.ui.draggable.min.js',
	'includes/js/jquery/ui/jquery.ui.droppable.min.js',
	'includes/js/jquery/ui/jquery.ui.effect-blind.min.js',
	'includes/js/jquery/ui/jquery.ui.effect-bounce.min.js',
	'includes/js/jquery/ui/jquery.ui.effect-clip.min.js',
	'includes/js/jquery/ui/jquery.ui.effect-drop.min.js',
	'includes/js/jquery/ui/jquery.ui.effect-explode.min.js',
	'includes/js/jquery/ui/jquery.ui.effect-fade.min.js',
	'includes/js/jquery/ui/jquery.ui.effect-fold.min.js',
	'includes/js/jquery/ui/jquery.ui.effect-highlight.min.js',
	'includes/js/jquery/ui/jquery.ui.effect-pulsate.min.js',
	'includes/js/jquery/ui/jquery.ui.effect-scale.min.js',
	'includes/js/jquery/ui/jquery.ui.effect-shake.min.js',
	'includes/js/jquery/ui/jquery.ui.effect-slide.min.js',
	'includes/js/jquery/ui/jquery.ui.effect-transfer.min.js',
	'includes/js/jquery/ui/jquery.ui.effect.min.js',
	'includes/js/jquery/ui/jquery.ui.menu.min.js',
	'includes/js/jquery/ui/jquery.ui.mouse.min.js',
	'includes/js/jquery/ui/jquery.ui.position.min.js',
	'includes/js/jquery/ui/jquery.ui.progressbar.min.js',
	'includes/js/jquery/ui/jquery.ui.resizable.min.js',
	'includes/js/jquery/ui/jquery.ui.selectable.min.js',
	'includes/js/jquery/ui/jquery.ui.slider.min.js',
	'includes/js/jquery/ui/jquery.ui.sortable.min.js',
	'includes/js/jquery/ui/jquery.ui.spinner.min.js',
	'includes/js/jquery/ui/jquery.ui.tabs.min.js',
	'includes/js/jquery/ui/jquery.ui.tooltip.min.js',
	'includes/js/jquery/ui/jquery.ui.widget.min.js',
	'includes/js/tinymce/skins/wordpress/images/dashicon-no-alt.png',
	// 4.3
	'admin/js/wp-fullscreen.js',
	'admin/js/wp-fullscreen.min.js',
	'includes/js/tinymce/wp-mce-help.php',
	'includes/js/tinymce/plugins/wpfullscreen',
	// 4.5
	'includes/theme-compat/comments-popup.php',
	// 4.6
	'admin/includes/class-wp-automatic-upgrader.php', // Wrong file name, see #37628.
	// 4.8
	'includes/js/tinymce/plugins/wpembed',
	'includes/js/tinymce/plugins/media/moxieplayer.swf',
	'includes/js/tinymce/skins/lightgray/fonts/readme.md',
	'includes/js/tinymce/skins/lightgray/fonts/tinymce-small.json',
	'includes/js/tinymce/skins/lightgray/fonts/tinymce.json',
	'includes/js/tinymce/skins/lightgray/skin.ie7.min.css',
	// 4.9
	'admin/css/press-this-editor-rtl.css',
	'admin/css/press-this-editor-rtl.min.css',
	'admin/css/press-this-editor.css',
	'admin/css/press-this-editor.min.css',
	'admin/css/press-this-rtl.css',
	'admin/css/press-this-rtl.min.css',
	'admin/css/press-this.css',
	'admin/css/press-this.min.css',
	'admin/includes/class-wp-press-this.php',
	'admin/js/bookmarklet.js',
	'admin/js/bookmarklet.min.js',
	'admin/js/press-this.js',
	'admin/js/press-this.min.js',
	'includes/js/mediaelement/background.png',
	'includes/js/mediaelement/bigplay.png',
	'includes/js/mediaelement/bigplay.svg',
	'includes/js/mediaelement/controls.png',
	'includes/js/mediaelement/controls.svg',
	'includes/js/mediaelement/flashmediaelement.swf',
	'includes/js/mediaelement/froogaloop.min.js',
	'includes/js/mediaelement/jumpforward.png',
	'includes/js/mediaelement/loading.gif',
	'includes/js/mediaelement/silverlightmediaelement.xap',
	'includes/js/mediaelement/skipback.png',
	'includes/js/plupload/plupload.flash.swf',
	'includes/js/plupload/plupload.full.min.js',
	'includes/js/plupload/plupload.silverlight.xap',
	'includes/js/swfupload/plugins',
	'includes/js/swfupload/swfupload.swf',
	// 4.9.2
	'includes/js/mediaelement/lang',
	'includes/js/mediaelement/lang/ca.js',
	'includes/js/mediaelement/lang/cs.js',
	'includes/js/mediaelement/lang/de.js',
	'includes/js/mediaelement/lang/es.js',
	'includes/js/mediaelement/lang/fa.js',
	'includes/js/mediaelement/lang/fr.js',
	'includes/js/mediaelement/lang/hr.js',
	'includes/js/mediaelement/lang/hu.js',
	'includes/js/mediaelement/lang/it.js',
	'includes/js/mediaelement/lang/ja.js',
	'includes/js/mediaelement/lang/ko.js',
	'includes/js/mediaelement/lang/nl.js',
	'includes/js/mediaelement/lang/pl.js',
	'includes/js/mediaelement/lang/pt.js',
	'includes/js/mediaelement/lang/ro.js',
	'includes/js/mediaelement/lang/ru.js',
	'includes/js/mediaelement/lang/sk.js',
	'includes/js/mediaelement/lang/sv.js',
	'includes/js/mediaelement/lang/uk.js',
	'includes/js/mediaelement/lang/zh-cn.js',
	'includes/js/mediaelement/lang/zh.js',
	'includes/js/mediaelement/mediaelement-flash-audio-ogg.swf',
	'includes/js/mediaelement/mediaelement-flash-audio.swf',
	'includes/js/mediaelement/mediaelement-flash-video-hls.swf',
	'includes/js/mediaelement/mediaelement-flash-video-mdash.swf',
	'includes/js/mediaelement/mediaelement-flash-video.swf',
	'includes/js/mediaelement/renderers/dailymotion.js',
	'includes/js/mediaelement/renderers/dailymotion.min.js',
	'includes/js/mediaelement/renderers/facebook.js',
	'includes/js/mediaelement/renderers/facebook.min.js',
	'includes/js/mediaelement/renderers/soundcloud.js',
	'includes/js/mediaelement/renderers/soundcloud.min.js',
	'includes/js/mediaelement/renderers/twitch.js',
	'includes/js/mediaelement/renderers/twitch.min.js',
	// 5.0
	'includes/js/codemirror/jshint.js',
	// 5.1
	'includes/random_compat/random_bytes_openssl.php',
	'includes/js/tinymce/wp-tinymce.js.gz',
	// 5.3
	'includes/js/wp-a11y.js',     // Moved to: includes/js/dist/a11y.js
	'includes/js/wp-a11y.min.js', // Moved to: includes/js/dist/a11y.min.js
	// 5.4
	'admin/js/wp-fullscreen-stub.js',
	'admin/js/wp-fullscreen-stub.min.js',
	// 5.5
	'admin/css/ie.css',
	'admin/css/ie.min.css',
	'admin/css/ie-rtl.css',
	'admin/css/ie-rtl.min.css',
	// 5.6
	'includes/js/jquery/ui/position.min.js',
	'includes/js/jquery/ui/widget.min.js',
	// 5.7
	'includes/blocks/classic/block.json',
	// 5.8
	'admin/images/freedoms.png',
	'admin/images/privacy.png',
	'admin/images/about-badge.svg',
	'admin/images/about-color-palette.svg',
	'admin/images/about-color-palette-vert.svg',
	'admin/images/about-header-brushes.svg',
	'includes/block-patterns/large-header.php',
	'includes/block-patterns/heading-paragraph.php',
	'includes/block-patterns/quote.php',
	'includes/block-patterns/text-three-columns-buttons.php',
	'includes/block-patterns/two-buttons.php',
	'includes/block-patterns/two-images.php',
	'includes/block-patterns/three-buttons.php',
	'includes/block-patterns/text-two-columns-with-images.php',
	'includes/block-patterns/text-two-columns.php',
	'includes/block-patterns/large-header-button.php',
	'includes/blocks/subhead/block.json',
	'includes/blocks/subhead',
	'includes/css/dist/editor/editor-styles.css',
	'includes/css/dist/editor/editor-styles.min.css',
	'includes/css/dist/editor/editor-styles-rtl.css',
	'includes/css/dist/editor/editor-styles-rtl.min.css',
);

/**
 * Stores new files in content to copy
 *
 * The contents of this array indicate any new bundled plugins/themes which
 * should be installed with the WordPress Upgrade. These items will not be
 * re-installed in future upgrades, this behaviour is controlled by the
 * introduced version present here being older than the current installed version.
 *
 * The content of this array should follow the following format:
 * Filename (relative to content) => Introduced version
 * Directories should be noted by suffixing it with a trailing slash (/)
 *
 * @since 3.2.0
 * @since 4.7.0 New themes were not automatically installed for 4.4-4.6 on
 *              upgrade. New themes are now installed again. To disable new
 *              themes from being installed on upgrade, explicitly define
 *              CORE_UPGRADE_SKIP_NEW_BUNDLED as true.
 * @global array $_new_bundled_files
 * @var array
 * @name $_new_bundled_files
 */
global $_new_bundled_files;

$_new_bundled_files = array(
	'plugins/akismet/'        => '2.0',
	'themes/twentyten/'       => '3.0',
	'themes/twentyeleven/'    => '3.2',
	'themes/twentytwelve/'    => '3.5',
	'themes/twentythirteen/'  => '3.6',
	'themes/twentyfourteen/'  => '3.8',
	'themes/twentyfifteen/'   => '4.1',
	'themes/twentysixteen/'   => '4.4',
	'themes/twentyseventeen/' => '4.7',
	'themes/twentynineteen/'  => '5.0',
	'themes/twentytwenty/'    => '5.3',
	'themes/twentytwentyone/' => '5.6',
);

/**
 * Upgrades the core of WordPress.
 *
 * This will create a .maintenance file at the base of the WordPress directory
 * to ensure that people can not access the web site, when the files are being
 * copied to their locations.
 *
 * The files in the `$_old_files` list will be removed and the new files
 * copied from the zip file after the database is upgraded.
 *
 * The files in the `$_new_bundled_files` list will be added to the installation
 * if the version is greater than or equal to the old version being upgraded.
 *
 * The steps for the upgrader for after the new release is downloaded and
 * unzipped is:
 *   1. Test unzipped location for select files to ensure that unzipped worked.
 *   2. Create the .maintenance file in current WordPress base.
 *   3. Copy new WordPress directory over old WordPress files.
 *   4. Upgrade WordPress to new version.
 *     4.1. Copy all files/folders other than content
 *     4.2. Copy any language files to WP_LANG_DIR (which may differ from WP_CONTENT_DIR
 *     4.3. Copy any new bundled themes/plugins to their respective locations
 *   5. Delete new WordPress directory path.
 *   6. Delete .maintenance file.
 *   7. Remove old files.
 *   8. Delete 'update_core' option.
 *
 * There are several areas of failure. For instance if PHP times out before step
 * 6, then you will not be able to access any portion of your site. Also, since
 * the upgrade will not continue where it left off, you will not be able to
 * automatically remove old files and remove the 'update_core' option. This
 * isn't that bad.
 *
 * If the copy of the new WordPress over the old fails, then the worse is that
 * the new WordPress directory will remain.
 *
 * If it is assumed that every file will be copied over, including plugins and
 * themes, then if you edit the default theme, you should rename it, so that
 * your changes remain.
 *
 * @since 2.7.0
 *
 * @global WP_Filesystem_Base $wp_filesystem          WordPress filesystem subclass.
 * @global array              $_old_files
 * @global array              $_new_bundled_files
 * @global wpdb               $wpdb                   WordPress database abstraction object.
 * @global string             $wp_version
 * @global string             $required_php_version
 * @global string             $required_mysql_version
 *
 * @param string $from New release unzipped path.
 * @param string $to   Path to old WordPress installation.
 * @return string|WP_Error New WordPress version on success, WP_Error on failure.
 */
function update_core( $from, $to ) {
	global $wp_filesystem, $_old_files, $_new_bundled_files, $wpdb;

	set_time_limit( 300 );

	/**
	 * Filters feedback messages displayed during the core update process.
	 *
	 * The filter is first evaluated after the zip file for the latest version
	 * has been downloaded and unzipped. It is evaluated five more times during
	 * the process:
	 *
	 * 1. Before WordPress begins the core upgrade process.
	 * 2. Before Maintenance Mode is enabled.
	 * 3. Before WordPress begins copying over the necessary files.
	 * 4. Before Maintenance Mode is disabled.
	 * 5. Before the database is upgraded.
	 *
	 * @since 2.5.0
	 *
	 * @param string $feedback The core update feedback messages.
	 */
	apply_filters( 'update_feedback', __( 'Verifying the unpacked files&#8230;' ) );

	// Sanity check the unzipped distribution.
	$distro = '';
	$roots  = array( '/wordpress/', '/wordpress-mu/' );

	foreach ( $roots as $root ) {
		if ( $wp_filesystem->exists( $from . $root . 'readme.html' )
			&& $wp_filesystem->exists( $from . $root . 'includes/version.php' )
		) {
			$distro = $root;
			break;
		}
	}

	if ( ! $distro ) {
		$wp_filesystem->delete( $from, true );

		return new WP_Error( 'insane_distro', __( 'The update could not be unpacked' ) );
	}

	/*
	 * Import $wp_version, $required_php_version, and $required_mysql_version from the new version.
	 * DO NOT globalise any variables imported from `version-current.php` in this function.
	 *
	 * BC Note: $wp_filesystem->wp_content_dir() returned unslashed pre-2.8.
	 */
	$versions_file = trailingslashit( $wp_filesystem->wp_content_dir() ) . 'upgrade/version-current.php';

	if ( ! $wp_filesystem->copy( $from . $distro . 'includes/version.php', $versions_file ) ) {
		$wp_filesystem->delete( $from, true );

		return new WP_Error(
			'copy_failed_for_version_file',
			__( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ),
			'includes/version.php'
		);
	}

	$wp_filesystem->chmod( $versions_file, FS_CHMOD_FILE );

	/*
	 * `wp_opcache_invalidate()` only exists in WordPress 5.5 or later,
	 * so don't run it when upgrading from older versions.
	 */
	if ( function_exists( 'wp_opcache_invalidate' ) ) {
		wp_opcache_invalidate( $versions_file );
	}

	require WP_CONTENT_DIR . '/upgrade/version-current.php';
	$wp_filesystem->delete( $versions_file );

	$php_version       = phpversion();
	$mysql_version     = $wpdb->db_version();
	$old_wp_version    = $GLOBALS['wp_version']; // The version of WordPress we're updating from.
	$development_build = ( false !== strpos( $old_wp_version . $wp_version, '-' ) ); // A dash in the version indicates a development release.
	$php_compat        = version_compare( $php_version, $required_php_version, '>=' );

	if ( file_exists( WP_CONTENT_DIR . '/db.php' ) && empty( $wpdb->is_mysql ) ) {
		$mysql_compat = true;
	} else {
		$mysql_compat = version_compare( $mysql_version, $required_mysql_version, '>=' );
	}

	if ( ! $mysql_compat || ! $php_compat ) {
		$wp_filesystem->delete( $from, true );
	}

	$php_update_message = '';

	if ( function_exists( 'wp_get_update_php_url' ) ) {
		$php_update_message = '</p><p>' . sprintf(
			/* translators: %s: URL to Update PHP page. */
			__( '<a href="%s">Learn more about updating PHP</a>.' ),
			esc_url( wp_get_update_php_url() )
		);

		if ( function_exists( 'wp_get_update_php_annotation' ) ) {
			$annotation = wp_get_update_php_annotation();

			if ( $annotation ) {
				$php_update_message .= '</p><p><em>' . $annotation . '</em>';
			}
		}
	}

	if ( ! $mysql_compat && ! $php_compat ) {
		return new WP_Error(
			'php_mysql_not_compatible',
			sprintf(
				/* translators: 1: WordPress version number, 2: Minimum required PHP version number, 3: Minimum required MySQL version number, 4: Current PHP version number, 5: Current MySQL version number. */
				__( 'The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher and MySQL version %3$s or higher. You are running PHP version %4$s and MySQL version %5$s.' ),
				$wp_version,
				$required_php_version,
				$required_mysql_version,
				$php_version,
				$mysql_version
			) . $php_update_message
		);
	} elseif ( ! $php_compat ) {
		return new WP_Error(
			'php_not_compatible',
			sprintf(
				/* translators: 1: WordPress version number, 2: Minimum required PHP version number, 3: Current PHP version number. */
				__( 'The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher. You are running version %3$s.' ),
				$wp_version,
				$required_php_version,
				$php_version
			) . $php_update_message
		);
	} elseif ( ! $mysql_compat ) {
		return new WP_Error(
			'mysql_not_compatible',
			sprintf(
				/* translators: 1: WordPress version number, 2: Minimum required MySQL version number, 3: Current MySQL version number. */
				__( 'The update cannot be installed because WordPress %1$s requires MySQL version %2$s or higher. You are running version %3$s.' ),
				$wp_version,
				$required_mysql_version,
				$mysql_version
			)
		);
	}

	// Add a warning when the JSON PHP extension is missing.
	if ( ! extension_loaded( 'json' ) ) {
		return new WP_Error(
			'php_not_compatible_json',
			sprintf(
				/* translators: 1: WordPress version number, 2: The PHP extension name needed. */
				__( 'The update cannot be installed because WordPress %1$s requires the %2$s PHP extension.' ),
				$wp_version,
				'JSON'
			)
		);
	}

	/** This filter is documented in admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Preparing to install the latest version&#8230;' ) );

	// Don't copy content, we'll deal with that below.
	// We also copy version.php last so failed updates report their old version.
	$skip              = array( 'content', 'includes/version.php' );
	$check_is_writable = array();

	// Check to see which files don't really need updating - only available for 3.7 and higher.
	if ( function_exists( 'get_core_checksums' ) ) {
		// Find the local version of the working directory.
		$working_dir_local = WP_CONTENT_DIR . '/upgrade/' . basename( $from ) . $distro;

		$checksums = get_core_checksums( $wp_version, isset( $wp_local_package ) ? $wp_local_package : 'en_US' );

		if ( is_array( $checksums ) && isset( $checksums[ $wp_version ] ) ) {
			$checksums = $checksums[ $wp_version ]; // Compat code for 3.7-beta2.
		}

		if ( is_array( $checksums ) ) {
			foreach ( $checksums as $file => $checksum ) {
				if ( 'content' === substr( $file, 0, 10 ) ) {
					continue;
				}

				if ( ! file_exists( ABSPATH . $file ) ) {
					continue;
				}

				if ( ! file_exists( $working_dir_local . $file ) ) {
					continue;
				}

				if ( '.' === dirname( $file )
					&& in_array( pathinfo( $file, PATHINFO_EXTENSION ), array( 'html', 'txt' ), true )
				) {
					continue;
				}

				if ( md5_file( ABSPATH . $file ) === $checksum ) {
					$skip[] = $file;
				} else {
					$check_is_writable[ $file ] = ABSPATH . $file;
				}
			}
		}
	}

	// If we're using the direct method, we can predict write failures that are due to permissions.
	if ( $check_is_writable && 'direct' === $wp_filesystem->method ) {
		$files_writable = array_filter( $check_is_writable, array( $wp_filesystem, 'is_writable' ) );

		if ( $files_writable !== $check_is_writable ) {
			$files_not_writable = array_diff_key( $check_is_writable, $files_writable );

			foreach ( $files_not_writable as $relative_file_not_writable => $file_not_writable ) {
				// If the writable check failed, chmod file to 0644 and try again, same as copy_dir().
				$wp_filesystem->chmod( $file_not_writable, FS_CHMOD_FILE );

				if ( $wp_filesystem->is_writable( $file_not_writable ) ) {
					unset( $files_not_writable[ $relative_file_not_writable ] );
				}
			}

			// Store package-relative paths (the key) of non-writable files in the WP_Error object.
			$error_data = version_compare( $old_wp_version, '3.7-beta2', '>' ) ? array_keys( $files_not_writable ) : '';

			if ( $files_not_writable ) {
				return new WP_Error(
					'files_not_writable',
					__( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ),
					implode( ', ', $error_data )
				);
			}
		}
	}

	/** This filter is documented in admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Enabling Maintenance mode&#8230;' ) );

	// Create maintenance file to signal that we are upgrading.
	$maintenance_string = '<?php $upgrading = ' . time() . '; ?>';
	$maintenance_file   = $to . '.maintenance';
	$wp_filesystem->delete( $maintenance_file );
	$wp_filesystem->put_contents( $maintenance_file, $maintenance_string, FS_CHMOD_FILE );

	/** This filter is documented in admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Copying the required files&#8230;' ) );

	// Copy new versions of WP files into place.
	$result = _copy_dir( $from . $distro, $to, $skip );

	if ( is_wp_error( $result ) ) {
		$result = new WP_Error(
			$result->get_error_code(),
			$result->get_error_message(),
			substr( $result->get_error_data(), strlen( $to ) )
		);
	}

	// Since we know the core files have copied over, we can now copy the version file.
	if ( ! is_wp_error( $result ) ) {
		if ( ! $wp_filesystem->copy( $from . $distro . 'includes/version.php', $to . 'includes/version.php', true /* overwrite */ ) ) {
			$wp_filesystem->delete( $from, true );
			$result = new WP_Error(
				'copy_failed_for_version_file',
				__( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ),
				'includes/version.php'
			);
		}

		$wp_filesystem->chmod( $to . 'includes/version.php', FS_CHMOD_FILE );

		/*
		 * `wp_opcache_invalidate()` only exists in WordPress 5.5 or later,
		 * so don't run it when upgrading from older versions.
		 */
		if ( function_exists( 'wp_opcache_invalidate' ) ) {
			wp_opcache_invalidate( $to . 'includes/version.php' );
		}
	}

	// Check to make sure everything copied correctly, ignoring the contents of content.
	$skip   = array( 'content' );
	$failed = array();

	if ( isset( $checksums ) && is_array( $checksums ) ) {
		foreach ( $checksums as $file => $checksum ) {
			if ( 'content' === substr( $file, 0, 10 ) ) {
				continue;
			}

			if ( ! file_exists( $working_dir_local . $file ) ) {
				continue;
			}

			if ( '.' === dirname( $file )
				&& in_array( pathinfo( $file, PATHINFO_EXTENSION ), array( 'html', 'txt' ), true )
			) {
				$skip[] = $file;
				continue;
			}

			if ( file_exists( ABSPATH . $file ) && md5_file( ABSPATH . $file ) === $checksum ) {
				$skip[] = $file;
			} else {
				$failed[] = $file;
			}
		}
	}

	// Some files didn't copy properly.
	if ( ! empty( $failed ) ) {
		$total_size = 0;

		foreach ( $failed as $file ) {
			if ( file_exists( $working_dir_local . $file ) ) {
				$total_size += filesize( $working_dir_local . $file );
			}
		}

		// If we don't have enough free space, it isn't worth trying again.
		// Unlikely to be hit due to the check in unzip_file().
		$available_space = @disk_free_space( ABSPATH );

		if ( $available_space && $total_size >= $available_space ) {
			$result = new WP_Error( 'disk_full', __( 'There is not enough free disk space to complete the update.' ) );
		} else {
			$result = _copy_dir( $from . $distro, $to, $skip );

			if ( is_wp_error( $result ) ) {
				$result = new WP_Error(
					$result->get_error_code() . '_retry',
					$result->get_error_message(),
					substr( $result->get_error_data(), strlen( $to ) )
				);
			}
		}
	}

	// Custom content directory needs updating now.
	// Copy languages.
	if ( ! is_wp_error( $result ) && $wp_filesystem->is_dir( $from . $distro . 'content/languages' ) ) {
		if ( WP_LANG_DIR !== ABSPATH . WPINC . '/languages' || @is_dir( WP_LANG_DIR ) ) {
			$lang_dir = WP_LANG_DIR;
		} else {
			$lang_dir = WP_CONTENT_DIR . '/languages';
		}

		// Check if the language directory exists first.
		if ( ! @is_dir( $lang_dir ) && 0 === strpos( $lang_dir, ABSPATH ) ) {
			// If it's within the ABSPATH we can handle it here, otherwise they're out of luck.
			$wp_filesystem->mkdir( $to . str_replace( ABSPATH, '', $lang_dir ), FS_CHMOD_DIR );
			clearstatcache(); // For FTP, need to clear the stat cache.
		}

		if ( @is_dir( $lang_dir ) ) {
			$wp_lang_dir = $wp_filesystem->find_folder( $lang_dir );

			if ( $wp_lang_dir ) {
				$result = copy_dir( $from . $distro . 'content/languages/', $wp_lang_dir );

				if ( is_wp_error( $result ) ) {
					$result = new WP_Error(
						$result->get_error_code() . '_languages',
						$result->get_error_message(),
						substr( $result->get_error_data(), strlen( $wp_lang_dir ) )
					);
				}
			}
		}
	}

	/** This filter is documented in admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Disabling Maintenance mode&#8230;' ) );

	// Remove maintenance file, we're done with potential site-breaking changes.
	$wp_filesystem->delete( $maintenance_file );

	// 3.5 -> 3.5+ - an empty twentytwelve directory was created upon upgrade to 3.5 for some users,
	// preventing installation of Twenty Twelve.
	if ( '3.5' === $old_wp_version ) {
		if ( is_dir( WP_CONTENT_DIR . '/themes/twentytwelve' )
			&& ! file_exists( WP_CONTENT_DIR . '/themes/twentytwelve/style.css' )
		) {
			$wp_filesystem->delete( $wp_filesystem->wp_themes_dir() . 'twentytwelve/' );
		}
	}

	/*
	 * Copy new bundled plugins & themes.
	 * This gives us the ability to install new plugins & themes bundled with
	 * future versions of WordPress whilst avoiding the re-install upon upgrade issue.
	 * $development_build controls us overwriting bundled themes and plugins when a non-stable release is being updated.
	 */
	if ( ! is_wp_error( $result )
		&& ( ! defined( 'CORE_UPGRADE_SKIP_NEW_BUNDLED' ) || ! CORE_UPGRADE_SKIP_NEW_BUNDLED )
	) {
		foreach ( (array) $_new_bundled_files as $file => $introduced_version ) {
			// If a $development_build or if $introduced version is greater than what the site was previously running.
			if ( $development_build || version_compare( $introduced_version, $old_wp_version, '>' ) ) {
				$directory = ( '/' === $file[ strlen( $file ) - 1 ] );

				list( $type, $filename ) = explode( '/', $file, 2 );

				// Check to see if the bundled items exist before attempting to copy them.
				if ( ! $wp_filesystem->exists( $from . $distro . 'content/' . $file ) ) {
					continue;
				}

				if ( 'plugins' === $type ) {
					$dest = $wp_filesystem->wp_plugins_dir();
				} elseif ( 'themes' === $type ) {
					// Back-compat, ::wp_themes_dir() did not return trailingslash'd pre-3.2.
					$dest = trailingslashit( $wp_filesystem->wp_themes_dir() );
				} else {
					continue;
				}

				if ( ! $directory ) {
					if ( ! $development_build && $wp_filesystem->exists( $dest . $filename ) ) {
						continue;
					}

					if ( ! $wp_filesystem->copy( $from . $distro . 'content/' . $file, $dest . $filename, FS_CHMOD_FILE ) ) {
						$result = new WP_Error( "copy_failed_for_new_bundled_$type", __( 'Could not copy file.' ), $dest . $filename );
					}
				} else {
					if ( ! $development_build && $wp_filesystem->is_dir( $dest . $filename ) ) {
						continue;
					}

					$wp_filesystem->mkdir( $dest . $filename, FS_CHMOD_DIR );
					$_result = copy_dir( $from . $distro . 'content/' . $file, $dest . $filename );

					// If a error occurs partway through this final step, keep the error flowing through, but keep process going.
					if ( is_wp_error( $_result ) ) {
						if ( ! is_wp_error( $result ) ) {
							$result = new WP_Error;
						}

						$result->add(
							$_result->get_error_code() . "_$type",
							$_result->get_error_message(),
							substr( $_result->get_error_data(), strlen( $dest ) )
						);
					}
				}
			}
		} // End foreach.
	}

	// Handle $result error from the above blocks.
	if ( is_wp_error( $result ) ) {
		$wp_filesystem->delete( $from, true );

		return $result;
	}

	// Remove old files.
	foreach ( $_old_files as $old_file ) {
		$old_file = $to . $old_file;

		if ( ! $wp_filesystem->exists( $old_file ) ) {
			continue;
		}

		// If the file isn't deleted, try writing an empty string to the file instead.
		if ( ! $wp_filesystem->delete( $old_file, true ) && $wp_filesystem->is_file( $old_file ) ) {
			$wp_filesystem->put_contents( $old_file, '' );
		}
	}

	// Remove any Genericons example.html's from the filesystem.
	_upgrade_422_remove_genericons();

	// Deactivate the REST API plugin if its version is 2.0 Beta 4 or lower.
	_upgrade_440_force_deactivate_incompatible_plugins();

	// Deactivate the Gutenberg plugin if its version is 10.7 or lower.
	_upgrade_580_force_deactivate_incompatible_plugins();

	// Upgrade DB with separate request.
	/** This filter is documented in admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Upgrading database&#8230;' ) );

	$db_upgrade_url = admin_url( 'upgrade.php?step=upgrade_db' );
	wp_remote_post( $db_upgrade_url, array( 'timeout' => 60 ) );

	// Clear the cache to prevent an update_option() from saving a stale db_version to the cache.
	wp_cache_flush();
	// Not all cache back ends listen to 'flush'.
	wp_cache_delete( 'alloptions', 'options' );

	// Remove working directory.
	$wp_filesystem->delete( $from, true );

	// Force refresh of update information.
	if ( function_exists( 'delete_site_transient' ) ) {
		delete_site_transient( 'update_core' );
	} else {
		delete_option( 'update_core' );
	}

	/**
	 * Fires after WordPress core has been successfully updated.
	 *
	 * @since 3.3.0
	 *
	 * @param string $wp_version The current WordPress version.
	 */
	do_action( '_core_updated_successfully', $wp_version );

	// Clear the option that blocks auto-updates after failures, now that we've been successful.
	if ( function_exists( 'delete_site_option' ) ) {
		delete_site_option( 'auto_core_update_failed' );
	}

	return $wp_version;
}

/**
 * Copies a directory from one location to another via the WordPress Filesystem Abstraction.
 *
 * Assumes that WP_Filesystem() has already been called and setup.
 *
 * This is a standalone copy of the `copy_dir()` function that is used to
 * upgrade the core files. It is placed here so that the version of this
 * function from the *new* WordPress version will be called.
 *
 * It was initially added for the 3.1 -> 3.2 upgrade.
 *
 * @ignore
 * @since 3.2.0
 * @since 3.7.0 Updated not to use a regular expression for the skip list.
 *
 * @see copy_dir()
 * @link https://core.trac.wordpress.org/ticket/17173
 *
 * @global WP_Filesystem_Base $wp_filesystem
 *
 * @param string   $from      Source directory.
 * @param string   $to        Destination directory.
 * @param string[] $skip_list Array of files/folders to skip copying.
 * @return true|WP_Error True on success, WP_Error on failure.
 */
function _copy_dir( $from, $to, $skip_list = array() ) {
	global $wp_filesystem;

	$dirlist = $wp_filesystem->dirlist( $from );

	if ( false === $dirlist ) {
		return new WP_Error( 'dirlist_failed__copy_dir', __( 'Directory listing failed.' ), basename( $to ) );
	}

	$from = trailingslashit( $from );
	$to   = trailingslashit( $to );

	foreach ( (array) $dirlist as $filename => $fileinfo ) {
		if ( in_array( $filename, $skip_list, true ) ) {
			continue;
		}

		if ( 'f' === $fileinfo['type'] ) {
			if ( ! $wp_filesystem->copy( $from . $filename, $to . $filename, true, FS_CHMOD_FILE ) ) {
				// If copy failed, chmod file to 0644 and try again.
				$wp_filesystem->chmod( $to . $filename, FS_CHMOD_FILE );

				if ( ! $wp_filesystem->copy( $from . $filename, $to . $filename, true, FS_CHMOD_FILE ) ) {
					return new WP_Error( 'copy_failed__copy_dir', __( 'Could not copy file.' ), $to . $filename );
				}
			}

			/*
			 * `wp_opcache_invalidate()` only exists in WordPress 5.5 or later,
			 * so don't run it when upgrading from older versions.
			 */
			if ( function_exists( 'wp_opcache_invalidate' ) ) {
				wp_opcache_invalidate( $to . $filename );
			}
		} elseif ( 'd' === $fileinfo['type'] ) {
			if ( ! $wp_filesystem->is_dir( $to . $filename ) ) {
				if ( ! $wp_filesystem->mkdir( $to . $filename, FS_CHMOD_DIR ) ) {
					return new WP_Error( 'mkdir_failed__copy_dir', __( 'Could not create directory.' ), $to . $filename );
				}
			}

			/*
			 * Generate the $sub_skip_list for the subdirectory as a sub-set
			 * of the existing $skip_list.
			 */
			$sub_skip_list = array();

			foreach ( $skip_list as $skip_item ) {
				if ( 0 === strpos( $skip_item, $filename . '/' ) ) {
					$sub_skip_list[] = preg_replace( '!^' . preg_quote( $filename, '!' ) . '/!i', '', $skip_item );
				}
			}

			$result = _copy_dir( $from . $filename, $to . $filename, $sub_skip_list );

			if ( is_wp_error( $result ) ) {
				return $result;
			}
		}
	}

	return true;
}

/**
 * Redirect to the About WordPress page after a successful upgrade.
 *
 * This function is only needed when the existing installation is older than 3.4.0.
 *
 * @since 3.3.0
 *
 * @global string $wp_version The WordPress version string.
 * @global string $pagenow
 * @global string $action
 *
 * @param string $new_version
 */
function _redirect_to_about_wordpress( $new_version ) {
	global $wp_version, $pagenow, $action;

	if ( version_compare( $wp_version, '3.4-RC1', '>=' ) ) {
		return;
	}

	// Ensure we only run this on the update-core.php page. The Core_Upgrader may be used in other contexts.
	if ( 'update-core.php' !== $pagenow ) {
		return;
	}

	if ( 'do-core-upgrade' !== $action && 'do-core-reinstall' !== $action ) {
		return;
	}

	// Load the updated default text localization domain for new strings.
	load_default_textdomain();

	// See do_core_upgrade().
	show_message( __( 'WordPress updated successfully.' ) );

	// self_admin_url() won't exist when upgrading from <= 3.0, so relative URLs are intentional.
	show_message(
		'<span class="hide-if-no-js">' . sprintf(
			/* translators: 1: WordPress version, 2: URL to About screen. */
			__( 'Welcome to WordPress %1$s. You will be redirected to the About WordPress screen. If not, click <a href="%2$s">here</a>.' ),
			$new_version,
			'about.php?updated'
		) . '</span>'
	);
	show_message(
		'<span class="hide-if-js">' . sprintf(
			/* translators: 1: WordPress version, 2: URL to About screen. */
			__( 'Welcome to WordPress %1$s. <a href="%2$s">Learn more</a>.' ),
			$new_version,
			'about.php?updated'
		) . '</span>'
	);
	echo '</div>';
	?>
<script type="text/javascript">
window.location = 'about.php?updated';
</script>
	<?php

	// Include admin-footer.php and exit.
	require_once ABSPATH . 'admin/admin-footer.php';
	exit;
}

/**
 * Cleans up Genericons example files.
 *
 * @since 4.2.2
 *
 * @global array              $wp_theme_directories
 * @global WP_Filesystem_Base $wp_filesystem
 */
function _upgrade_422_remove_genericons() {
	global $wp_theme_directories, $wp_filesystem;

	// A list of the affected files using the filesystem absolute paths.
	$affected_files = array();

	// Themes.
	foreach ( $wp_theme_directories as $directory ) {
		$affected_theme_files = _upgrade_422_find_genericons_files_in_folder( $directory );
		$affected_files       = array_merge( $affected_files, $affected_theme_files );
	}

	// Plugins.
	$affected_plugin_files = _upgrade_422_find_genericons_files_in_folder( WP_PLUGIN_DIR );
	$affected_files        = array_merge( $affected_files, $affected_plugin_files );

	foreach ( $affected_files as $file ) {
		$gen_dir = $wp_filesystem->find_folder( trailingslashit( dirname( $file ) ) );

		if ( empty( $gen_dir ) ) {
			continue;
		}

		// The path when the file is accessed via WP_Filesystem may differ in the case of FTP.
		$remote_file = $gen_dir . basename( $file );

		if ( ! $wp_filesystem->exists( $remote_file ) ) {
			continue;
		}

		if ( ! $wp_filesystem->delete( $remote_file, false, 'f' ) ) {
			$wp_filesystem->put_contents( $remote_file, '' );
		}
	}
}

/**
 * Recursively find Genericons example files in a given folder.
 *
 * @ignore
 * @since 4.2.2
 *
 * @param string $directory Directory path. Expects trailingslashed.
 * @return array
 */
function _upgrade_422_find_genericons_files_in_folder( $directory ) {
	$directory = trailingslashit( $directory );
	$files     = array();

	if ( file_exists( "{$directory}example.html" )
		&& false !== strpos( file_get_contents( "{$directory}example.html" ), '<title>Genericons</title>' )
	) {
		$files[] = "{$directory}example.html";
	}

	$dirs = glob( $directory . '*', GLOB_ONLYDIR );

	if ( $dirs ) {
		foreach ( $dirs as $dir ) {
			$files = array_merge( $files, _upgrade_422_find_genericons_files_in_folder( $dir ) );
		}
	}

	return $files;
}

/**
 * @ignore
 * @since 4.4.0
 */
function _upgrade_440_force_deactivate_incompatible_plugins() {
	if ( defined( 'REST_API_VERSION' ) && version_compare( REST_API_VERSION, '2.0-beta4', '<=' ) ) {
		deactivate_plugins( array( 'rest-api/plugin.php' ), true );
	}
}

/**
 * @ignore
 * @since 5.8.0
 */
function _upgrade_580_force_deactivate_incompatible_plugins() {
	if ( defined( 'GUTENBERG_VERSION' ) && version_compare( GUTENBERG_VERSION, '10.7', '<=' ) ) {
		$deactivated_gutenberg['gutenberg'] = array(
			'plugin_name'         => 'Gutenberg',
			'version_deactivated' => GUTENBERG_VERSION,
			'version_compatible'  => '10.8',
		);
		if ( is_plugin_active_for_network( 'gutenberg/gutenberg.php' ) ) {
			$deactivated_plugins = get_site_option( 'wp_force_deactivated_plugins', array() );
			$deactivated_plugins = array_merge( $deactivated_plugins, $deactivated_gutenberg );
			update_site_option( 'wp_force_deactivated_plugins', $deactivated_plugins );
		} else {
			$deactivated_plugins = get_option( 'wp_force_deactivated_plugins', array() );
			$deactivated_plugins = array_merge( $deactivated_plugins, $deactivated_gutenberg );
			update_option( 'wp_force_deactivated_plugins', $deactivated_plugins );
		}
		deactivate_plugins( array( 'gutenberg/gutenberg.php' ), true );
	}
}
