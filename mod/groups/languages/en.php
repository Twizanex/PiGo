<?php
/**
 * Elgg groups plugin language pack
 *
 * @package ElggGroups
 */

$english = array(

	/**
	 * Menu items and titles
	 */
	'groups' => "Classes",
	'groups:owned' => "Classes I manage",
	'groups:owned:user' => 'Classes %s manages',
	'groups:yours' => "My classes",
	'groups:user' => "%s's classes",
	'groups:all' => "All classes",
	'groups:add' => "Create a new class",
	'groups:edit' => "Edit class",
	'groups:delete' => 'Delete class',
	'groups:membershiprequests' => 'Manage join requests',
	'groups:membershiprequests:pending' => 'Manage join requests (%s)',
	'groups:invitations' => 'Classs invitations',
	'groups:invitations:pending' => 'Class invitations (%s)',

	'groups:icon' => 'Class Profile Picture (leave blank to leave unchanged)',
	'groups:name' => 'Class name',
	'groups:username' => 'Class short name (displayed in URLs, alphanumeric characters only)',
	'groups:description' => 'Description of the Class',
	'groups:briefdescription' => 'Brief description of the Class',
	'groups:interests' => 'Tags',
	'groups:website' => 'Website',
	'groups:members' => 'Class members',
	'groups:my_status' => 'My status',
	'groups:my_status:group_owner' => 'You manage this class',
	'groups:my_status:group_member' => 'You are in this class',
	'groups:subscribed' => 'Class notifications on',
	'groups:unsubscribed' => 'Class notifications off',

	'groups:members:title' => 'Members of %s',
	'groups:members:more' => "View all members",
	'groups:membership' => "Class membership permissions",
	'groups:access' => "Access permissions",
	'groups:owner' => "Owner",
	'groups:owner:warning' => "Warning: if you change this value, you will no longer be the owner of this class.",
	'groups:widget:num_display' => 'Number of classes to display',
	'groups:widget:membership' => 'Class membership',
	'groups:widgets:description' => 'Display the classes you are a member of on your profile',
	'groups:noaccess' => 'No access to class',
	'groups:permissions:error' => 'You do not have the permissions for this',
	'groups:ingroup' => 'in the class',
	'groups:cantcreate' => 'You can not create a class. Only teachers can.',
	'groups:cantedit' => 'You can not edit this class',
	'groups:saved' => 'Class saved',
	'groups:featured' => 'Featured classes',
	'groups:makeunfeatured' => 'Unfeature',
	'groups:makefeatured' => 'Make featured',
	'groups:featuredon' => '%s is now a featured class.',
	'groups:unfeatured' => '%s has been removed from the featured classes.',
	'groups:featured_error' => 'Invalid class.',
	'groups:joinrequest' => 'Request membership',
	'groups:join' => 'Join class',
	'groups:leave' => 'Leave class',
	'groups:invite' => 'Invite friends',
	'groups:invite:title' => 'Invite friends to this class',
	'groups:inviteto' => "Invite friends to '%s'",
	'groups:nofriends' => "You have no friends left who have not been invited to this class.",
	'groups:nofriendsatall' => 'You have no friends to invite!',
	'groups:viagroups' => "via classes",
	'groups:group' => "Class",
	'groups:search:tags' => "tag",
	'groups:search:title' => "Search for classes tagged with '%s'",
	'groups:search:none' => "No matching classes were found",
	'groups:search_in_group' => "Search in this class",
	'groups:acl' => "Class: %s",

	'discussion:notification:topic:subject' => 'New class assignment',
	'groups:notification' =>
'%s added a new class assignment to %s:

%s
%s

View and reply to the discussion:
%s
',

	'discussion:notification:reply:body' =>
'%s replied to the discussion topic %s in the class %s:

%s

View and reply to the class:
%s
',

	'groups:activity' => "Class activity",
	'groups:enableactivity' => 'Enable class activity',
	'groups:activity:none' => "There is no class activity yet",

	'groups:notfound' => "Class not found",
	'groups:notfound:details' => "The requested class either does not exist or you do not have access to it",

	'groups:requests:none' => 'There are no current membership requests.',

	'groups:invitations:none' => 'There are no current invitations.',

	'item:object:groupforumtopic' => "Homeworks and Assignments",

	'groupforumtopic:new' => "Add a homework or assignment",

	'groups:count' => "classes created",
	'groups:open' => "open class",
	'groups:closed' => "closed class",
	'groups:member' => "members",
	'groups:searchtag' => "Search for classes by tag",

	'groups:more' => 'More classes',
	'groups:none' => 'No classes',


	/*
	 * Access
	 */
	'groups:access:private' => 'Closed - Users must be invited',
	'groups:access:public' => 'Open - Any user may join',
	'groups:access:group' => 'Class members only',
	'groups:closedgroup' => 'This class has a closed membership.',
	'groups:closedgroup:request' => 'To ask to be added, click the "request membership" menu link.',
	'groups:visibility' => 'Who have access to the contents of the class?',

	/*
	Group tools
	*/
	'groups:enableforum' => 'Enable Class Homeworks and Assignments',
	'groups:yes' => 'yes',
	'groups:no' => 'no',
	'groups:lastupdated' => 'Last updated %s by %s',
	'groups:lastcomment' => 'Last comment %s by %s',

	/*
	Group discussion
	*/
	'discussion' => 'Assignments',
	'discussion:add' => 'Add a new assignment or homework',
	'discussion:latest' => 'Latest assignments',
	'discussion:group' => 'Class assignments',
	'discussion:none' => 'No assignments yet',
	'discussion:reply:title' => 'Reply by %s',

	'discussion:topic:created' => 'The assignment was created.',
	'discussion:topic:updated' => 'The assignment was updated.',
	'discussion:topic:deleted' => 'Assignment has been deleted.',

	'discussion:topic:notfound' => 'Assignment not found',
	'discussion:error:notsaved' => 'Unable to save this assignment',
	'discussion:error:missing' => 'Both title and message are required fields',
	'discussion:error:permissions' => 'You do not have permissions to perform this action',
	'discussion:error:notdeleted' => 'Could not delete the assignment',

	'discussion:reply:deleted' => 'Assignment submission has been deleted.',
	'discussion:reply:error:notdeleted' => 'Could not delete the assignment submission',

	'reply:this' => 'Submit Assignment',

	'group:replies' => 'Assignment Submissions',
	'groups:forum:created' => 'Created %s with %d comments',
	'groups:forum:created:single' => 'Created %s with %d reply',
	'groups:forum' => 'Assignment',
	'groups:addtopic' => 'Add an assignment',
	'groups:forumlatest' => 'Latest assignment',
	'groups:latestdiscussion' => 'Latest assignment',
	'groups:newest' => 'Newest',
	'groups:popular' => 'Popular',
	'groupspost:success' => 'Your submission was succesfully posted',
	'groups:alldiscussion' => 'Latest assignment',
	'groups:edittopic' => 'Edit assignment',
	'groups:topicmessage' => 'Topic message',
	'groups:topicstatus' => 'Topic status',
	'groups:reply' => 'Submit',
	'groups:topic' => 'Assignment',
	'groups:posts' => 'Posts',
	'groups:lastperson' => 'Last person',
	'groups:when' => 'When',
	'grouptopic:notcreated' => 'No assignments have been created.',
	'groups:topicopen' => 'Open',
	'groups:topicclosed' => 'Closed',
	'groups:topicresolved' => 'Resolved',
	'grouptopic:created' => 'Your assignment was created.',
	'groupstopic:deleted' => 'The assignment has been deleted.',
	'groups:topicsticky' => 'Sticky',
	'groups:topicisclosed' => 'This assignment is closed.',
	'groups:topiccloseddesc' => 'This assignment is closed and is not accepting new submissions.',
	'grouptopic:error' => 'Your class assignment could not be created. Please try again or contact a system administrator.',
	'groups:forumpost:edited' => "You have successfully edited the assignment.",
	'groups:forumpost:error' => "There was a problem editing the assignment.",


	'groups:privategroup' => 'This class is closed. Requesting membership.',
	'groups:notitle' => 'Class must have a title',
	'groups:cantjoin' => 'Can not join class',
	'groups:cantleave' => 'Could not leave class',
	'groups:removeuser' => 'Remove from class',
	'groups:cantremove' => 'Cannot remove user from class',
	'groups:removed' => 'Successfully removed %s from class',
	'groups:addedtogroup' => 'Successfully added the user to the class',
	'groups:joinrequestnotmade' => 'Could not request to join class',
	'groups:joinrequestmade' => 'Requested to join class',
	'groups:joined' => 'Successfully joined class!',
	'groups:left' => 'Successfully left class',
	'groups:notowner' => 'Sorry, you are not the owner of this class.',
	'groups:notmember' => 'Sorry, you are not a member of this class.',
	'groups:alreadymember' => 'You are already a member of this class!',
	'groups:userinvited' => 'User has been invited.',
	'groups:usernotinvited' => 'User could not be invited.',
	'groups:useralreadyinvited' => 'User has already been invited',
	'groups:invite:subject' => "%s you have been invited to join %s!",
	'groups:updated' => "Last reply by %s %s",
	'groups:started' => "Started by %s",
	'groups:joinrequest:remove:check' => 'Are you sure you want to remove this join request?',
	'groups:invite:remove:check' => 'Are you sure you want to remove this invitation?',
	'groups:invite:body' => "Hi %s,

%s invited you to join the '%s' class. Click below to view your invitations:

%s",

	'groups:welcome:subject' => "Welcome to the %s class!",
	'groups:welcome:body' => "Hi %s!

You are now a member of the '%s' class! Click below to begin posting!

%s",

	'groups:request:subject' => "%s has requested to join %s",
	'groups:request:body' => "Hi %s,

%s has requested to join the '%s' class. Click below to view their profile:

%s

or click below to view the class's join requests:

%s",

	/*
		Forum river items
	*/

	'river:create:group:default' => '%s created the class %s',
	'river:join:group:default' => '%s joined the class %s',
	'river:create:object:groupforumtopic' => '%s added a new class assignment %s',
	'river:reply:object:groupforumtopic' => '%s submitted an assignment %s',
	
	'groups:nowidgets' => 'No widgets have been defined for this class.',


	'groups:widgets:members:title' => 'Class members',
	'groups:widgets:members:description' => 'List the members of a class.',
	'groups:widgets:members:label:displaynum' => 'List the members of a class.',
	'groups:widgets:members:label:pleaseedit' => 'Please configure this widget.',

	'groups:widgets:entities:title' => "Objects in class",
	'groups:widgets:entities:description' => "List the objects saved in this class",
	'groups:widgets:entities:label:displaynum' => 'List the objects of a class.',
	'groups:widgets:entities:label:pleaseedit' => 'Please configure this widget.',

	'groups:forumtopic:edited' => 'Assignment successfully edited.',

	'groups:allowhiddengroups' => 'Do you want to allow private (invisible) classes?',
	'groups:whocancreate' => 'Who can create new classes?',

	/**
	 * Action messages
	 */
	'group:deleted' => 'Class and class contents deleted',
	'group:notdeleted' => 'Class could not be deleted',

	'group:notfound' => 'Could not find the class',
	'grouppost:deleted' => 'Class posting successfully deleted',
	'grouppost:notdeleted' => 'Class posting could not be deleted',
	'groupstopic:deleted' => 'Assignment deleted',
	'groupstopic:notdeleted' => 'Assignment not deleted',
	'grouptopic:blank' => 'No assignment',
	'grouptopic:notfound' => 'Could not find the topic',
	'grouppost:nopost' => 'Empty post',
	'groups:deletewarning' => "Are you sure you want to delete this class? There is no undo!",

	'groups:invitekilled' => 'The invite has been deleted.',
	'groups:joinrequestkilled' => 'The join request has been deleted.',

	// ecml
	'groups:ecml:discussion' => 'Class Assignments',
	'groups:ecml:groupprofile' => 'Class profiles',

);

add_translation("en", $english);
