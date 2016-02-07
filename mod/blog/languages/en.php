<?php
/**
 * Blog English language file.
 *
 */

$english = array(
	'blog' => 'News',
	'blog:blogs' => 'News',
	'blog:revisions' => 'Revisions',
	'blog:archives' => 'Archives',
	'blog:blog' => 'News',
	'item:object:blog' => 'News',

	'blog:title:user_blogs' => '%s\'s news',
	'blog:title:all_blogs' => 'All site news',
	'blog:title:friends' => 'Contacts\' news',

	'blog:group' => 'Class News',
	'blog:enableblog' => 'Enable groups\'s news and announcements',
	'blog:write' => 'Write a news or announcement',

	// Editing
	'blog:add' => 'Add news or announcement',
	'blog:edit' => 'Edit news or announcement',
	'blog:excerpt' => 'Excerpt',
	'blog:body' => 'Body',
	'blog:save_status' => 'Last saved: ',
	'blog:never' => 'Never',

	// Statuses
	'blog:status' => 'Status',
	'blog:status:draft' => 'Draft',
	'blog:status:published' => 'Published',
	'blog:status:unsaved_draft' => 'Unsaved Draft',

	'blog:revision' => 'Revision',
	'blog:auto_saved_revision' => 'Auto Saved Revision',

	// messages
	'blog:message:saved' => 'News or announcement saved.',
	'blog:error:cannot_save' => 'Cannot save news or announcement.',
	'blog:error:cannot_write_to_container' => 'Insufficient access to save announcement to class.',
	'blog:messages:warning:draft' => 'There is an unsaved draft of this post!',
	'blog:edit_revision_notice' => '(Old version)',
	'blog:message:deleted_post' => 'News or announcement deleted.',
	'blog:error:cannot_delete_post' => 'Cannot delete news or announcement.',
	'blog:none' => 'No news or announcements',
	'blog:error:missing:title' => 'Please enter a title!',
	'blog:error:missing:description' => 'Please enter the body of your news or announcement!',
	'blog:error:cannot_edit_post' => 'This post may not exist or you may not have permissions to edit it.',
	'blog:error:revision_not_found' => 'Cannot find this revision.',

	// river
	'river:create:object:blog' => '%s published a post %s',
	'river:comment:object:blog' => '%s commented on the post %s',

	// notifications
	'blog:newpost' => 'A new announcement post',
	'blog:notification' =>
'
%s made a new announcement.

%s
%s

View and comment on the new announcement:
%s
',

	// widget
	'blog:widget:description' => 'Display your latest news or announcenments',
	'blog:moreblogs' => 'More news or announcements',
	'blog:numbertodisplay' => 'Number of posts to display',
	'blog:noblogs' => 'No posts'
);

add_translation('en', $english);
