<?php

$spanish = array(

	// general
	'group_tools:decline' => "Declinar",
	'group_tools:revoke' => "Revocar",
	'group_tools:add_users' => "Agregar ususarios",
	'group_tools:in' => "en",
	'group_tools:remove' => "Remover",
	'group_tools:clear_selection' => "Limpiar seleccion",
	'group_tools:all_members' => "Todos los miembros",
	'group_tools:explain' => "Explicacion",

	'group_tools:default:access:group' => "Solo miembros de grupo",

	'group_tools:joinrequest:already' => "Revocar solicitud de adhesión",
	'group_tools:joinrequest:already:tooltip' => "Usted ya ha solicitado a unirse a este grupo, haga clic aquí para revocar esta solicitud",
	'group_tools:join:already:tooltip' => "Usted fue invitado a este grupo para que pueda unirse en este momento.",

	// menu
	'group_tools:menu:mail' => "Correo de miembros",
	'group_tools:menu:invitations' => "Gestionar invitaciones",

	// plugin settings
	'group_tools:settings:invite:title' => "Opciones de invitaciones de grupo",
	'group_tools:settings:management:title' => "Opciones generales de grupo",
	'group_tools:settings:default_access:title' => "Acceso predeterminado de grupo",

	'group_tools:settings:admin_transfer' => "Permitir la transferencia de propietario del grupo",
	'group_tools:settings:admin_transfer:admin' => "Solo el administrador del sitio",
	'group_tools:settings:admin_transfer:owner' => "Los propietarios de grupo y los administradores del sitio",

	'group_tools:settings:multiple_admin' => "Permitir multiples administradores de grupo",
	'group_tools:settings:auto_suggest_groups' => "Grupos auto sugeridos en grupos 'sugeridos' basados en la información del perfil. Se completará con los grupos sugeridos predefinidos. Establecer esta opción en "No" sólo mostrará los grupos sugeridos predefinidos (si los hay).",

	'group_tools:settings:invite' => "Permitir que todos los usuarios sean invitados (no sólo los amigos)",
	'group_tools:settings:invite_email' => "Permitir que todos los usuarios sean invitados por dirección de correo electrónico",
	'group_tools:settings:invite_csv' => "Permitir que todos los usuarios sean invitados por archivo CSV",
	'group_tools:settings:invite_members' => "Permitir a los miembros del grupo invitar a nuevos usuarios",
	'group_tools:settings:invite_members:default_off' => "Sí, por defecto desactivado",
	'group_tools:settings:invite_members:default_on' => "Sí, por defecto activo",
	'group_tools:settings:invite_members:description' => "Los propietarios de grupos/administradores pueden activar/desactivar esto para su grupo",
	'group_tools:settings:domain_based' => "Habilitar grupos en función de dominio",
	'group_tools:settings:domain_based:description' => "Los usuarios pueden unirse a un grupo en función de su dominio de correo electrónico. Durante el registro se completarán automáticamente unirse a grupos en función de su dominio de correo electrónico.",

	'group_tools:settings:mail' => "Permitir Mensajes grupo (permite a los administradores de grupo enviar un mensaje a todos los miembros)",

	'group_tools:settings:listing:default' => "Grupo predeterminado pestaña lista",
	'group_tools:settings:listing:available' => "Grupo disponible listado de pestañas",

	'group_tools:settings:default_access' => "¿Cuál debe ser el acceso predeterminado para el contenido de los grupos de este sitio?",
	'group_tools:settings:default_access:disclaimer' => "<b>DISCLAIMER:</b> this will not work unless you have <a href='https://github.com/Elgg/Elgg/pull/253' target='_blank'>https://github.com/Elgg/Elgg/pull/253</a> applied to your Elgg installation.",

	'group_tools:settings:search_index' => "Permitir a los grupos cerrados que sean indexados por los motores de búsqueda",
	'group_tools:settings:auto_notification' => "Habilitar automáticamente la notificación de grupo cuando se unen al grupo",
	'group_tools:settings:show_membership_mode' => "Mostrar el estado de la membresia de abierto/cerrado en el perfil de grupo y el bloque propietario",
	'group_tools:settings:show_hidden_group_indicator' => "Mostrar un indicador si un grupo está oculto",
	'group_tools:settings:show_hidden_group_indicator:group_acl' => "Sí, si el grupo es sólo los miembros",
	'group_tools:settings:show_hidden_group_indicator:logged_in' => "Sí, para todos los grupos no públicos",
	
	'group_tools:settings:special_states' => "Los grupos con una condición especial",
	'group_tools:settings:special_states:featured' => "Featured",
	'group_tools:settings:special_states:featured:description' => "Los administradores del sitio han optado por presentar los siguientes grupos.",
	'group_tools:settings:special_states:auto_join' => "Unirse automáticamente",
	'group_tools:settings:special_states:auto_join:description' => "Los nuevos usuarios se unirán de forma automática los siguientes grupos.",
	'group_tools:settings:special_states:suggested' => "Sugeridos",
	'group_tools:settings:special_states:suggested:description' => "Los siguientes grupos se sugieren a los usuarios (nuevos). Es posible la auto sugestion de grupos, si no hay grupos son detectados automáticamente o demasiado pocos, la lista se agregará por estos grupos.",

	'group_tools:settings:fix:title' => "Arreglar problemas de acceso a grupos",
	'group_tools:settings:fix:missing' => "Estos son %d usuarios quienes son unos miembros de un grupo, pero ellos no tienen acceso  al contenido compartido con el grupo.",
	'group_tools:settings:fix:excess' => "Estos son %d usuarios quienes tienen acceso al contenido de grupos donde ellos ya no son un miembro apagado.",
	'group_tools:settings:fix:without' => "EStos son %d grupos sin la posibilidad de compartir contenidos con sus miembros.",
	'group_tools:settings:fix:all:description' => "Solucionar todos los problemas anteriores a la vez.",
	'group_tools:settings:fix_it' => "Arreglar esto",
	'group_tools:settings:fix:all' => "Arreglar todos los problemas",
	'group_tools:settings:fix:nothing' => "Nada esta mal con los grupos de tu sitio!",

	// group invite message
	'group_tools:groups:invite:body' => "Hola %s,

%s te ha invitado a unirse al '%s' grupo.
%s

Haga clic a continuación para ver sus invitaciones:
%s",

	// group add message
	'group_tools:groups:invite:add:subject' => "Usted ha sido agregado al grupo %s",
	'group_tools:groups:invite:add:body' => "Hola %s,

%s te ha agregado al grupo %s.
%s

Para ver el grupo, haga clic en este enlace
%s",
	// group invite by email
	'group_tools:groups:invite:email:subject' => "Usted ha sido invitado al grupo %s",
	'group_tools:groups:invite:email:body' => "Hola,

%s ha invitado a unirse al grupo %s en %s.
%s

Si usted no tiene una cuenta en %s por favor registrarse aqui
%s

Si ya tiene una cuenta o después de registrarse, por favor haga clic en el siguiente enlace para aceptar la invitación
%s

También puede ir a todos los grupos de sitio -> invitaciones de grupo e introduzca el código siguiente:
%s",
	// group transfer notification
	'group_tools:notify:transfer:subject' => "La Administracion del grupo %s ha sido designada para usted",
	'group_tools:notify:transfer:message' => "Hola %s,

%s lo ha designado a usted como nuevo adminsitrador del grupo %s.

Para visitar el grupo, por favor haga clic en el siguiente enlace:
%s",

	// group edit tabbed
	'group_tools:group:edit:profile' => "Perfil de grupo / herramientas",
	'group_tools:group:edit:other' => "Otras opciones",

	// admin transfer - form
	'group_tools:admin_transfer:title' => "La transferencia de la propiedad de este grupo",
	'group_tools:admin_transfer:transfer' => "La transferencia de grupo pertenece a",
	'group_tools:admin_transfer:myself' => "Mío",
	'group_tools:admin_transfer:submit' => "Transferir",
	'group_tools:admin_transfer:no_users' => "No miembros o amigos a la transferencia de grupo a.",
	'group_tools:admin_transfer:confirm' => "¿Está seguro que desea transferir la propiedad?",

	// special states form
	'group_tools:special_states:title' => "Estados especiales de grupo",
	'group_tools:special_states:description' => "Un grupo puede tener varios estados especiales, aquí es una visión general de los estados especiales y su valor actual.",
	'group_tools:special_states:featured' => "Es este grupo relevante",
	'group_tools:special_states:auto_join' => "Podrán los usuarios unirse automaticamente al grupo",
	'group_tools:special_states:auto_join:fix' => "Hacer a todos los miembros del sitio, miembros de este grupo, por favor %sclic aquí%s.",
	'group_tools:special_states:suggested' => "Es este un grupo sugerido para (nuevos) usuarios",
	
	// group admins
	'group_tools:multiple_admin:group_admins' => "Los administradores de grupo",
	'group_tools:multiple_admin:profile_actions:remove' => "Remover a administrador de grupo",
	'group_tools:multiple_admin:profile_actions:add' => "Agregar administrador de grupo",

	'group_tools:multiple_admin:group_tool_option' => "Permitir a los administradores de grupo para asignar otros administradores de grupo",

	// cleanup options
	'group_tools:cleanup:title' => "Limpieza de la barra lateral del grupo",
	'group_tools:cleanup:description' => "Limpieza de la barra lateral del grupo. Esto no tendrá ningún efecto para los administradores de grupo.",
	'group_tools:cleanup:owner_block' => "Limitar el bloque propietario",
	'group_tools:cleanup:owner_block:explain' => "El bloque propietario se puede encontrar en la parte superior de la barra lateral, algunos enlaces adicionales pueden ser publicados en esta área (ejemplo: enlaces RSS).",
	'group_tools:cleanup:actions' => "Ocultar: Unirse al grupo/Solicitud de miembros",
	'group_tools:cleanup:actions:explain' => "Dependiendo de su configuración de grupo, los usuarios pueden unirse directamente a un grupo o enviar solicitudes de miembros.",
	'group_tools:cleanup:menu' => "Ocultar elementos del menú lateral",
	'group_tools:cleanup:menu:explain' => "Ocultar los enlaces del menú a las diferentes herramientas para el grupo. Los usuarios solo podrán tener acceso a las herramientas de grupo mediante el uso de los widgets de grupo.",
	'group_tools:cleanup:members' => "Ocultar a los miembros de grupo",
	'group_tools:cleanup:members:explain' => "En la página de perfil de grupo una lista de los miembros del grupo se puede encontrar en la sección resaltada. Puede optar por ocultar esta lista.",
	'group_tools:cleanup:search' => "Ocultar busqueda dentro del grupo",
	'group_tools:cleanup:search:explain' => "En la página de perfil de grupo, se muestra un cuadro de búsqueda. Puede optar por ocultar esto.",
	'group_tools:cleanup:featured' => "Mostrar grupos relevantes dentro de la barra lateral",
	'group_tools:cleanup:featured:explain' => "Usted puede optar por mostrar una lista de grupos destacados en la sección resaltada en la página de perfil de grupo",
	'group_tools:cleanup:featured_sorting' => "Cómo ordenar los grupos destacados",
	'group_tools:cleanup:featured_sorting:time_created' => "El más reciente primero",
	'group_tools:cleanup:featured_sorting:alphabetical' => "Alfabético",
	'group_tools:cleanup:my_status' => "Ocultar mi estado",
	'group_tools:cleanup:my_status:explain' => "En la barra lateral en la página de perfil de grupo hay un elemento que muestra su estado de afiliación actual y alguna otra información de estado. Puede optar por ocultar esto.",

	// group default access
	'group_tools:default_access:title' => "Grupo de acceso predeterminado",
	'group_tools:default_access:description' => "Aquí se puede controlar lo que debe ser el acceso predeterminado de nuevos contenidos en su grupo.",

	// group notification
	'group_tools:notifications:title' => "Notificaciones de grupo",
	'group_tools:notifications:description' => "Este grupo tiene %s miembros, de los cuales %s han permitido a las notificaciones sobre la actividad de este grupo. A continuación se puede cambiar esto para todos los usuarios del grupo.",
	'group_tools:notifications:disclaimer' => "Grupos grandes podrían tomar un tiempo.",
	'group_tools:notifications:enable' => "Activar las notificaciones para todos",
	'group_tools:notifications:disable' => "Desactivar las notificaciones para todos",

	// group profile widgets
	'group_tools:profile_widgets:title' => "Mostrar widgets del perfil de grupo a NO MIEMBROS",
	'group_tools:profile_widgets:description' => "Este es un grupo cerrado. Por defecto no se muestran widgets a los NO MIEMBROS. Aqui puede configurar, si desea cambiar eso.",
	'group_tools:profile_widgets:option' => "Permitir que NO MIEMBROS puedan ver los widgets dentro del perfil de grupo:",

	// group mail
	'group_tools:mail:message:from' => "Del grupo",

	'group_tools:mail:title' => "Enviar un correo electrónico a los miembros del grupo",
	'group_tools:mail:form:recipients' => "Número de destinatarios",
	'group_tools:mail:form:members:selection' => "Seleccionar miembros individuales",

	'group_tools:mail:form:title' => "Asunto",
	'group_tools:mail:form:description' => "Cuerpo de mensaje",

	'group_tools:mail:form:js:members' => "Por favor, seleccione al menos un miembro para enviar el mensaje ",
	'group_tools:mail:form:js:description' => "Por favor ingrese el mensaje",

	// group invite
	'group_tools:groups:invite:title' => "Invitar usuarios a este grupo",
	'group_tools:groups:invite' => "Invitar usuarios",

	'group_tools:group:invite:friends:select_all' => "Seleccionar a todos los amigos",
	'group_tools:group:invite:friends:deselect_all' => "No seleccionar a ningún amigo",

	'group_tools:group:invite:users' => "Buscar usuario(s)",
	'group_tools:group:invite:users:description' => "Introduzca un nombre o nombre de usuario de un miembro de sitio y seleccione él/ella de la lista",
	'group_tools:group:invite:users:all' => "Invitar a todos los miembros del sitio a este grupo",

	'group_tools:group:invite:email' => "Utilizando dirección de correo electrónico",
	'group_tools:group:invite:email:description' => "Introduzca una dirección de correo electrónico válida y seleccionarlo de la lista",

	'group_tools:group:invite:csv' => "El uso de carga de archivos CSV",
	'group_tools:group:invite:csv:description' => "YPuede cargar un archivo CSV con los usuarios para invitar.<br />El formato debe ser: displayname;e-mail. No debería haber una línea de cabecera.",

	'group_tools:group:invite:text' => "Nota personal (opcional)",
	'group_tools:group:invite:add:confirm' => "¿Seguro que desea añadir los usuarios directamente?",

	'group_tools:group:invite:resend' => "Vuelva a enviar invitaciones a los usuarios que ya han sido invitados",

	'group_tools:groups:invitation:code:title' => "Invitación de grupo por correo electrónico",
	'group_tools:groups:invitation:code:description' => "Si ha recibido una invitación para unirse a un grupo por e-mail, se puede introducir el código de invitación para aceptar la invitación. Si hace clic en el enlace del correo electrónico de invitación se introducirá el código para usted.",

	// group membership requests
	'group_tools:groups:membershipreq:requests' => "Las solicitudes de membresía",
	'group_tools:groups:membershipreq:invitations' => "Usuarios invitados",
	'group_tools:groups:membershipreq:invitations:none' => "Invitaciones a usuarios no pendientes",
	'group_tools:groups:membershipreq:email_invitations' => "Direcciones de correo electrónico invitados",
	'group_tools:groups:membershipreq:email_invitations:none' => "No hay pendientes invitaciones por correo electrónico",
	'group_tools:groups:membershipreq:invitations:revoke:confirm' => "¿Seguro que desea revocar esta invitación?",

	// group invitations
	'group_tools:group:invitations:request' => "Solicitudes de adhesión pendientes",
	'group_tools:group:invitations:request:revoke:confirm' => "¿Seguro que desea revocar su solicitud de adhesión?",
	'group_tools:group:invitations:request:non_found' => "No hay solicitudes de adhesión pendientes en este momento",

	// group listing
	'group_tools:groups:sorting:alphabetical' => "Alfabético",
	'group_tools:groups:sorting:open' => "Abierto",
	'group_tools:groups:sorting:closed' => "Cerrado",
	'group_tools:groups:sorting:ordered' => "Ordenado",
	'group_tools:groups:sorting:suggested' => "Sugerido",

	// discussion status
	'group_tools:discussion:confirm:open' => "¿Estas seguro que deseas volver a abrir este tópico?",
	'group_tools:discussion:confirm:close' => "¿Estas seguro que deseas cerrar este tópico?",
	
	// allow group members to invite
	'group_tools:invite_members:title' => "Los miembros del grupo que puedan invitar",
	'group_tools:invite_members:description' => "Permitir a los miembros de este grupo para que puedan invitar a nuevos miembros",

	// actions
	'group_tools:action:error:input' => "Entrada no válida para llevar a cabo esta acción",
	'group_tools:action:error:entities' => "Las GUID dadas no dio lugar a las entidades correctas",
	'group_tools:action:error:entity' => "La GUID dada no dio lugar a la entidad correcta",
	'group_tools:action:error:edit' => "Usted no tiene acceso a la entidad dada",
	'group_tools:action:error:save' => "Se ha producido un error al guardar los ajustes",
	'group_tools:action:success' => "Los ajustes se han guardado correctamente",

	// admin transfer - action
	'group_tools:action:admin_transfer:error:access' => "Usted no está autorizado a transferir la propiedad de este grupo",
	'group_tools:action:admin_transfer:error:self' => "No se puede transferir la propiedad a sí mismo, ya que es el dueño",
	'group_tools:action:admin_transfer:error:save' => "Error desconocido al guardar el grupo, por favor intente de nuevo",
	'group_tools:action:admin_transfer:success' => "El grupo propiedad fue transferido con éxito a %s",

	// group admins - action
	'group_tools:action:toggle_admin:error:group' => "La entrada dada no da lugar a un grupo o si no puede editar este grupo o el usuario no es miembro",
	'group_tools:action:toggle_admin:error:remove' => "Se ha producido un error desconocido mientras se quita el usuario como un administrador del grupo",
	'group_tools:action:toggle_admin:error:add' => "Se ha producido un error desconocido al tiempo que añade al usuario como un administrador del grupo",
	'group_tools:action:toggle_admin:success:remove' => "El usuario se ha eliminado correctamente como un grupo admin",
	'group_tools:action:toggle_admin:success:add' => "El usuario ha sido añadido como un grupo admin",

	// group mail - action
	'group_tools:action:mail:success' => "Mensaje enviado correctamente",

	// group - invite - action
	'group_tools:action:invite:error:invite'=> "No hay usuarios hayan sido invitados (%s ya invitados, %s ya es un usuario)",
	'group_tools:action:invite:error:add'=> "No hay usuarios hayan sido invitados (%s ya invitados, %s ya es un usuario)",
	'group_tools:action:invite:success:invite'=> "Correctamente invitados %s usuarios (%s ya invitados y %s ya miembros)",
	'group_tools:action:invite:success:add'=> "Correctamente agregados %s usuarios (%s ya invitados y %s ya miembros)",

	// group - invite - accept e-mail
	'group_tools:action:groups:email_invitation:error:input' => "Por favor ingrese el código de invitación",
	'group_tools:action:groups:email_invitation:error:code' => "EL ingreso de el código de invitación no es válido",
	'group_tools:action:groups:email_invitation:error:join' => "Ha ocurrido un error mientras estaba adhiriendose al grupo %s, tal vez usted ya es un miembro",
	'group_tools:action:groups:email_invitation:success' => "Usted se ha adherido al grupo correctamente",

	// group - invite - decline e-mail
	'group_tools:action:groups:decline_email_invitation:error:delete' => "Se ha producido un error al suprimir la invitación",

	// suggested groups
	'group_tools:suggested_groups:info' => "Los siguientes grupos podrían ser interesantes para usted. Haga clic en los botones de unirse a unirse a ellos inmediatamente o haga clic en el título para ver más información sobre el grupo.",
	'group_tools:suggested_groups:none' => "No podemos sugerir un grupo para ti. Esto puede suceder si tenemos que poca información acerca de usted, o que usted ya es un miembro de los grupos que nos gustan a unirse. Utilice el buscador para encontrar más grupos.",
		
	// group toggle auto join
	'group_tools:action:toggle_special_state:error:auto_join' => "Se ha producido un error al guardar la nueva configuración automática",
	'group_tools:action:toggle_special_state:error:suggested' => "Se ha producido un error al guardar los nuevos ajustes sugeridos",
	'group_tools:action:toggle_special_state:error:state' => "Estado proporcionado no válido",
	'group_tools:action:toggle_special_state:auto_join' => "La nueva configuración de auto ingreso se ha guardado correctamente",
	'group_tools:action:toggle_special_state:suggested' => "La configuración de nuevos sugeridos se ha guardado correctamente",
	
	// group fix auto_join
	'group_tools:action:fix_auto_join:success' => "Membresia de grupo fija: %s nuevos miembros, %s ya era miembro y %s fracasos",

	// group cleanup
	'group_tools:actions:cleanup:success' => "La configuración de limpieza se han guardado correctamente",

	// group default access
	'group_tools:actions:default_access:success' => "El acceso por defecto para el grupo se ha guardado correctamente",

	// group notifications
	'group_tools:action:notifications:error:toggle' => "Opción conmutativa no válido",
	'group_tools:action:notifications:success:disable' => "Se han desactivado correctamente las notificaciones para cada miembro",
	'group_tools:action:notifications:success:enable' => "Se han habilitado correctamente las notificaciones para cada miembro",

	// fix group problems
	'group_tools:action:fix_acl:error:input' => "Opción no válida no se puede arreglar: %s",
	'group_tools:action:fix_acl:error:missing:nothing' => "No hay usuarios que faltan se encuentran en el grupo de ACL",
	'group_tools:action:fix_acl:error:excess:nothing' => "No hay usuarios que se encuentran en exceso de los grupos de ACL",
	'group_tools:action:fix_acl:error:without:nothing' => "No se han encontrado grupos sin ACL",

	'group_tools:action:fix_acl:success:missing' => "Correctamente agregados %d usuarios a ACL grupos",
	'group_tools:action:fix_acl:success:excess' => "Correctamente removidos %d usuariosers from group ACLs",
	'group_tools:action:fix_acl:success:without' => "Correctamente creados %d grupos ACL",

	// discussion toggle status
	'group_tools:action:discussion:toggle_status:success:open' => "El tópico se volvió a abrir con éxito",
	'group_tools:action:discussion:toggle_status:success:close' => "El tema se cerró con éxito",
		
	// Widgets
	// Group River Widget
	'widgets:group_river_widget:title' => "Actividad de grupo",
    'widgets:group_river_widget:description' => "Muestra la actividad de un grupo en un widget",

    'widgets:group_river_widget:edit:num_display' => "Numero de actividades",
	'widgets:group_river_widget:edit:group' => "Seleccionar un grupo",
	'widgets:group_river_widget:edit:no_groups' => "Tienes que ser miembro de al menos un grupo para usar este widget",

	'widgets:group_river_widget:view:not_configured' => "Ese widget aun no esta configurado",

	'widgets:group_river_widget:view:more' => "Actividad en el '%s' grupo",
	'widgets:group_river_widget:view:noactivity' => "No hemos podido encontrar ninguna actividad.",

	// Group Members
	'widgets:group_members:title' => "Miembros de grupos",
  	'widgets:group_members:description' => "Mostrar los miembros de este grupo",

	'widgets:group_members:edit:num_display' => "Cuántos miembros para mostrar",
  	'widgets:group_members:view:no_members' => "No se han encontrados miembros de grupo",

  	// Group Invitations
	'widgets:group_invitations:title' => "Invitaciones de grupo",
  	'widgets:group_invitations:description' => "Muestra las invitaciones de grupo en circulación para el usuario actual",

	// Discussion
	"widgets:discussion:settings:group_only" => "Mostrar sólo las discusiones de los grupos que son miembros de",
  	'widgets:discussion:more' => "Ver más discusiones",
  	"widgets:discussion:description" => "Mostrar las ultimas discusiones",

	// Forum topic widget
	'widgets:group_forum_topics:description' => "Mostrar las ultimas discusiones",

	// index_groups
	'widgets:index_groups:description' => "Lista de grupos de su comunidad",
	'widgets:index_groups:show_members' => "Mostrar miembros contados",
	'widgets:index_groups:featured' => "Mostrar solo grupos relevantes",
	'widgets:index_groups:sorting' => "Cómo ordenar los grupos",

	'widgets:index_groups:filter:field' => "Grupos de filtros basados en campos",
	'widgets:index_groups:filter:value' => "con valor",
	'widgets:index_groups:filter:no_filter' => "No filtro",

	// Featured Groups
	'widgets:featured_groups:description' => "Muestra una lista aleatoria de grupos destacados",
  	'widgets:featured_groups:edit:show_random_group' => "Mostrar un grupo no ofrecido al azar",

	// group_news widget
	"widgets:group_news:title" => "Noticias de grupo",
	"widgets:group_news:description" => "Muestra últimos 5 blogs de varios grupos",
	"widgets:group_news:no_projects" => "No hay grupos configurados",
	"widgets:group_news:no_news" => "No hay blogs para este grupo",
	"widgets:group_news:settings:project" => "Grupo",
	"widgets:group_news:settings:no_project" => "Seleccione un grupo",
	"widgets:group_news:settings:blog_count" => "Numero de maximo de blogs",
	"widgets:group_news:settings:group_icon_size" => "Tamaño de los iconos de grupo",
	"widgets:group_news:settings:group_icon_size:small" => "Pequeño",
	"widgets:group_news:settings:group_icon_size:medium" => "Medio",

	// quick start discussion
	'group_tools:widgets:start_discussion:title' => "Iniciar un discución",
	'group_tools:widgets:start_discussion:description' => "Iniciar rápidamente una discusión es un grupo seleccionado",

	'group_tools:widgets:start_discussion:login_required' => "Para utilizar este widget que necesita para estar conectado",
	'group_tools:widgets:start_discussion:membership_required' => "Debe ser miembro de al menos un grupo con el fin de utilizar este widget. Puede encontrar grupos interesantes %s aquí %s.",

	'group_tools:forms:discussion:quick_start:group' => "Seleccionar un grupo para esta discusión",
	'group_tools:forms:discussion:quick_start:group:required' => "Por favor selecciones un grupo",
	
	'groups:search:tags' => "Buscar",
	'groups:search:title' => "Búsqueda de grupos que coinciden '%s'",
	'groups:searchtag' => "Búsqueda por grupos",
	
	// welcome message
	'group_tools:welcome_message:title' => "Mensaje de bienvenida de grupo",
	'group_tools:welcome_message:description' => "Se puede configurar un mensaje de bienvenida para los nuevos usuarios que se unen a este grupo. Si no desea enviar un mensaje de bienvenida, deje este campo en blanco.",
	'group_tools:welcome_message:explain' => "Con el fin de personalizar el mensaje, puede utilizar los siguientes marcadores de posición:
[name]: el nombre de nuevo usuario (eg. %s)
[group_name]: el nombre de est grupo (eg. %s)
[group_url]: la url de este grupo (eg. %s)",
	
	'group_tools:action:welcome_message:success' => "El mensaje de bienvenida ha sido guardado",
	
	'group_tools:welcome_message:subject' => "Bienvenido a %s",
	
	// email invitations
	'group_tools:action:revoke_email_invitation:error' => "Un error ocurrió al revocar la invitación, por favor intente de nuevo",
	'group_tools:action:revoke_email_invitation:success' => "La invitación ha sido revocada",
	
	// domain based groups
	'group_tools:join:domain_based:tooltip' => "Debido a un dominio de correo electrónico correspondiente, puede unirse a este grupo.",
	
	'group_tools:domain_based:title' => "Configurar dominios de correo electrónico",
	'group_tools:domain_based:description' => "Al configurar una (o más) dominios de correo electrónico, los usuarios con ese dominio de correo electrónico se unirán automáticamente su grupo tras el registro. Además, si usted tiene un grupo de usuarios cerrado con un dominio de correo electrónico a juego pueden unirse sin solicitar la membresía. Usted puede configurar multiple dominios usando una coma. No incluya el signo @",
	
	'group_tools:action:domain_based:success' => "Los nuevos dominios de correo electrónico se han guardado",
	
	// related groups
	'groups_tools:related_groups:tool_option' => "Mostrar grupos relacionados",
	
	'groups_tools:related_groups:widget:title' => "Grupos relacionados",
	'groups_tools:related_groups:widget:description' => "Mostrar una lista de grupos que haya añadido en relación con este grupo.",
	
	'groups_tools:related_groups:none' => "No se han encontrado grupos relacionados.",
	'group_tools:related_groups:title' => "Grupos relacionados",
	
	'group_tools:related_groups:form:placeholder' => "Buscar un nuevo grupo relacionado",
	'group_tools:related_groups:form:description' => "Puede buscar un nuevo grupo relacionado, selecciónelo de la lista y haga clic en Agregar.",
	
	'group_tools:action:related_groups:error:same' => "No se puede relacionar este grupo a sí mismo",
	'group_tools:action:related_groups:error:already' => "El grupo seleccionado ya está relacionado",
	'group_tools:action:related_groups:error:add' => "Se produjo un error desconocido al tiempo que añade la relación, por favor intente de nuevo.",
	'group_tools:action:related_groups:success' => "El grupo esta ahora relacionado",
	
	'group_tools:related_groups:notify:owner:subject' => "Un nuevo grupo relacionado ha sido agregado",
	'group_tools:related_groups:notify:owner:message' => "Hola %s,
	
%s ha añadido su grupo %s como un grupo relacionado a %s.",
	
	'group_tools:related_groups:entity:remove' => "Retire grupo relacionado",
	
	'group_tools:action:remove_related_groups:error:not_related' => "El grupo no está relacionada",
	'group_tools:action:remove_related_groups:error:remove' => "Se produjo un error desconocido mientras se quita la relación, por favor intente de nuevo",
	'group_tools:action:remove_related_groups:success' => "El grupo ya no está relacionado",
);

add_translation("es", $spanish);