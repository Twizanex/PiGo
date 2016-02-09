<?php
/**
 * PiGo Course plugin language pack
 *
 * @package PiGo Course
 */

$english = array(

	/**
	 * Menu items and titles
	 */
	'groups' => "Courses",
	'groups:owned' => "Courses I manage",
	'groups:owned:user' => 'Courses %s manages',
	'groups:yours' => "My Courses",
	'groups:user' => "%s's Courses",
	'groups:all' => "All Courses",
	'groups:add' => "Create a new Course",
	'groups:edit' => "Edit Course",
	'groups:delete' => 'Delete Course',
	'groups:membershiprequests' => 'Manage join requests',
	'groups:membershiprequests:pending' => 'Manage join requests (%s)',
	'groups:invitations' => 'Courses invitations',
	'groups:invitations:pending' => 'Course invitations (%s)',

	'groups:icon' => 'Course Profile Picture (leave blank to leave unchanged)',
	'groups:name' => 'Course name',
	'groups:username' => 'Course short name (displayed in URLs, alphanumeric characters only)',
	'groups:description' => 'Description of the Course',
	'groups:briefdescription' => 'Brief description of the Course',
	'groups:interests' => 'Tags',
	'groups:website' => 'Website',
	'groups:members' => 'Course members',
	'groups:my_status' => 'My status',
	'groups:my_status:group_owner' => 'You manage this Course',
	'groups:my_status:group_member' => 'You are in this Course',
	'groups:subscribed' => 'Course notifications on',
	'groups:unsubscribed' => 'Course notifications off',

	'groups:members:title' => 'Members of %s',
	'groups:members:more' => "View all members",
	'groups:membership' => "Course membership permissions",
	'groups:access' => "Access permissions",
	'groups:owner' => "Owner",
	'groups:owner:warning' => "Warning: if you change this value, you will no longer be the owner of this Course.",
	'groups:widget:num_display' => 'Number of Courses to display',
	'groups:widget:membership' => 'Course membership',
	'groups:widgets:description' => 'Display the Courses you are a member of on your profile',
	'groups:noaccess' => 'No access to Course',
	'groups:permissions:error' => 'You do not have the permissions for this',
	'groups:ingroup' => 'in the Course',
	'groups:cantcreate' => 'You can not create a Course. Only teachers can.',
	'groups:cantedit' => 'You can not edit this Course',
	'groups:saved' => 'Course saved',
	'groups:featured' => 'Featured Courses',
	'groups:makeunfeatured' => 'Unfeature',
	'groups:makefeatured' => 'Make featured',
	'groups:featuredon' => '%s is now a featured Course.',
	'groups:unfeatured' => '%s has been removed from the featured Courses.',
	'groups:featured_error' => 'Invalid Course.',
	'groups:joinrequest' => 'Request membership',
	'groups:join' => 'Join Course',
	'groups:leave' => 'Leave Course',
	'groups:invite' => 'Invite friends',
	'groups:invite:title' => 'Invite friends to this Course',
	'groups:inviteto' => "Invite friends to '%s'",
	'groups:nofriends' => "You have no friends left who have not been invited to this Course.",
	'groups:nofriendsatall' => 'You have no friends to invite!',
	'groups:viagroups' => "via Courses",
	'groups:group' => "Course",
	'groups:search:tags' => "tag",
	'groups:search:title' => "Search for Courses tagged with '%s'",
	'groups:search:none' => "No matching Courses were found",
	'groups:search_in_group' => "Search in this Course",
	'groups:acl' => "Course: %s",

	'discussion:notification:topic:subject' => 'New Course assignment',
	'groups:notification' =>
'%s added a new Course assignment to %s:

%s
%s

View and reply to the discussion:
%s
',

	'discussion:notification:reply:body' =>
'%s replied to the discussion topic %s in the Course %s:

%s

View and reply to the Course:
%s
',

	'groups:activity' => "Course activity",
	'groups:enableactivity' => 'Enable Course activity',
	'groups:activity:none' => "There is no Course activity yet",

	'groups:notfound' => "Course not found",
	'groups:notfound:details' => "The requested Course either does not exist or you do not have access to it",

	'groups:requests:none' => 'There are no current membership requests.',

	'groups:invitations:none' => 'There are no current invitations.',

	'item:object:groupforumtopic' => "Homeworks and Assignments",

	'groupforumtopic:new' => "Add a homework or assignment",

	'groups:count' => "Courses created",
	'groups:open' => "open Course",
	'groups:closed' => "closed Course",
	'groups:member' => "members",
	'groups:searchtag' => "Search for Courses by tag",

	'groups:more' => 'More Courses',
	'groups:none' => 'No Courses',


	/*
	 * Access
	 */
	'groups:access:private' => 'Closed - Users must be invited',
	'groups:access:public' => 'Open - Any user may join',
	'groups:access:group' => 'Course members only',
	'groups:closedgroup' => 'This Course has a closed membership.',
	'groups:closedgroup:request' => 'To ask to be added, click the "request membership" menu link.',
	'groups:visibility' => 'Who have access to the contents of the Course?',

	/*
	Group tools
	*/
	'groups:enableforum' => 'Enable Course Homeworks and Assignments',
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
	'discussion:group' => 'Course assignments',
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
	'grouptopic:error' => 'Your Course assignment could not be created. Please try again or contact a system administrator.',
	'groups:forumpost:edited' => "You have successfully edited the assignment.",
	'groups:forumpost:error' => "There was a problem editing the assignment.",


	'groups:privategroup' => 'This Course is closed. Requesting membership.',
	'groups:notitle' => 'Course must have a title',
	'groups:cantjoin' => 'Can not join Course',
	'groups:cantleave' => 'Could not leave Course',
	'groups:removeuser' => 'Remove from Course',
	'groups:cantremove' => 'Cannot remove user from Course',
	'groups:removed' => 'Successfully removed %s from Course',
	'groups:addedtogroup' => 'Successfully added the user to the Course',
	'groups:joinrequestnotmade' => 'Could not request to join Course',
	'groups:joinrequestmade' => 'Requested to join Course',
	'groups:joined' => 'Successfully joined Course!',
	'groups:left' => 'Successfully left Course',
	'groups:notowner' => 'Sorry, you are not the owner of this Course.',
	'groups:notmember' => 'Sorry, you are not a member of this Course.',
	'groups:alreadymember' => 'You are already a member of this Course!',
	'groups:userinvited' => 'User has been invited.',
	'groups:usernotinvited' => 'User could not be invited.',
	'groups:useralreadyinvited' => 'User has already been invited',
	'groups:invite:subject' => "%s you have been invited to join %s!",
	'groups:updated' => "Last reply by %s %s",
	'groups:started' => "Started by %s",
	'groups:joinrequest:remove:check' => 'Are you sure you want to remove this join request?',
	'groups:invite:remove:check' => 'Are you sure you want to remove this invitation?',
	'groups:invite:body' => "Hi %s,

%s invited you to join the '%s' Course. Click below to view your invitations:

%s",

	'groups:welcome:subject' => "Welcome to the %s Course!",
	'groups:welcome:body' => "Hi %s!

You are now a member of the '%s' Course! Click below to begin posting!

%s",

	'groups:request:subject' => "%s has requested to join %s",
	'groups:request:body' => "Hi %s,

%s has requested to join the '%s' Course. Click below to view their profile:

%s

or click below to view the Course's join requests:

%s",

	/*
		Forum river items
	*/

	'river:create:group:default' => '%s created the Course %s',
	'river:join:group:default' => '%s joined the Course %s',
	'river:create:object:groupforumtopic' => '%s added a new Course assignment %s',
	'river:reply:object:groupforumtopic' => '%s submitted an assignment %s',
	
	'groups:nowidgets' => 'No widgets have been defined for this Course.',


	'groups:widgets:members:title' => 'Course members',
	'groups:widgets:members:description' => 'List the members of a Course.',
	'groups:widgets:members:label:displaynum' => 'List the members of a Course.',
	'groups:widgets:members:label:pleaseedit' => 'Please configure this widget.',

	'groups:widgets:entities:title' => "Objects in Course",
	'groups:widgets:entities:description' => "List the objects saved in this Course",
	'groups:widgets:entities:label:displaynum' => 'List the objects of a Course.',
	'groups:widgets:entities:label:pleaseedit' => 'Please configure this widget.',

	'groups:forumtopic:edited' => 'Assignment successfully edited.',

	'groups:allowhiddengroups' => 'Do you want to allow private (invisible) Courses?',
	'groups:whocancreate' => 'Who can create new Courses?',

	/**
	 * Action messages
	 */
	'group:deleted' => 'Course and Course contents deleted',
	'group:notdeleted' => 'Course could not be deleted',

	'group:notfound' => 'Could not find the Course',
	'grouppost:deleted' => 'Course posting successfully deleted',
	'grouppost:notdeleted' => 'Course posting could not be deleted',
	'groupstopic:deleted' => 'Assignment deleted',
	'groupstopic:notdeleted' => 'Assignment not deleted',
	'grouptopic:blank' => 'No assignment',
	'grouptopic:notfound' => 'Could not find the topic',
	'grouppost:nopost' => 'Empty post',
	'groups:deletewarning' => "Are you sure you want to delete this Course? There is no undo!",

	'groups:invitekilled' => 'The invite has been deleted.',
	'groups:joinrequestkilled' => 'The join request has been deleted.',

	// ecml
	'groups:ecml:discussion' => 'Course Assignments',
	'groups:ecml:groupprofile' => 'Course profiles',

);

add_translation("en", $english);
