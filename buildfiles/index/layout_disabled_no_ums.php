<?php
/*
File revision date: 14-abr-2008
*/
// engine - dynamic layout
if ($self_skin<>'default'):
	include($self_skin);
else:
	include_once($staticvars['local_root'].'kernel/engine_funcs.php');
	
	// atencao ao cod_skin! - verificar quando nao esta definida nenhuma skin!
	$cells_layout=$db->getquery("select cell, cod_module from skin_layout order by cell ASC, priority ASC");
	if ($cells_layout[0][0]==''):
		echo 'you need to define a page layout first!';
		exit;
	endif;
	$max_cells=$cells_layout[count($cells_layout)-1][0];
	
	for($x=0;$x<=$max_cells+1;$x++):
		$l_titulo[$x]='';// titulo
		$l_module[$x]='';//module
		$l_cod_module[$x]='';// cod_module
		$index[$x]=0;// cod_module
	endfor;
	
	// menu
	$l_titulo[0][0]='';
	$l_module[0][0]=$staticvars['local_root'].'layout/menu/menu.php';
	$l_cod_module[0][0]='';
	for($x=0;$x<count($cells_layout);$x++):
		$cell=$cells_layout[$x][0];
		$module=$db->getquery("select cod_module, link,name,display_name from module where published='s' and cod_module=".$cells_layout[$x][1]);
		if ($module[0][0]<>''):
			$l_titulo[$cell+1][$index[$cell+1]]=box_effects($module,$lang);
			$l_module[$cell+1][$index[$cell+1]]=$local_root.'modules/'.$module[0][1];
			$l_cod_module[$cell+1][$index[$cell+1]]=$module[0][0];
			$index[$cell+1]=$index[$cell+1]+1;
		endif;
	endfor;

	if($task<>''):
		$l_titulo[1]=array();
		$module=$db->getquery("select cod_module, link,name,display_name,cod_user_type from module where published='s' and cod_module=".$task);
		if (get_authorization($module[0][4],$staticvars)==false ):// error not authorized to view this page
			include_once($local_root.'general/error.php');
			load_unauthorized_acess("Est� a tentar aceder a uma area reservada.");
		else:
			if ($module[0][0]<>''):
				$l_titulo[1][0]=box_effects($module,$lang);
				$l_module[1][0]=$local_root.'modules/'.$module[0][1];
				$l_cod_module[1][0]=$task;
			else:
				include($local_root.'general/error.php');
				load_unauthorized_acess('ERROR(Core 4) - On locating the module to the corresponding id! or you do not have privileges to view.<br>Please Hit the Back Button. Thank You.');
			endif;
		endif;
	endif;
	// layout template to load
	include($staticvars['local_root'].'layout/templates/'.$cod_skin[0][1]);
	unset($l_titulo);
	unset($l_module);
	unset($l_cod_module);
endif;
?>