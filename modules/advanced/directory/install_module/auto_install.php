<?php
/*
File revision date: 2-Out-2006
*/

/* Auto instalation:
(`name`, `display_name`, `link`, `published`, `cod_user_type`, `self_skin`, `aditional_params`, `box_code`, `cod_skin`)
*/

$module="
('Directory - vers&atilde;o reduzida', 'en=Directory||pt=Direct�rio', 'directory/directory_main.php', 's', ".$default_code.", 'no', 'N/A', ".$default_box_code.", 0),
('Direct�rio', 'en=Directory Browsing||pt=Direct�rio', 'directory/directory_browsing.php', 's', ".$default_code.", 'yes', 'N/A', ".$default_box_code.", 0),
('Adicionar Conte�dos', 'en=Add Content||pt=Adicionar conte�dos', 'directory/ds_add_item.php', 's', ".$auth_code.", 'yes', 'N/A', ".$default_box_code.", 0),
('Editar Conte�dos', 'en=Edit Contents||pt=Editar conte�dos', 'directory/ds_my_items.php', 's', ".$auth_code.", 'yes', 'N/A', ".$default_box_code.", 0),
('Top', 'en=Top Directory||pt=Top Direct�rio', 'directory/top_main.php', 's', ".$default_code.", 'yes', 'N/A', ".$default_box_code.", 0),
('P&aacute;ginas', 'en=webpage||pt=P&aacute;gina Web', 'directory/ds_webpages.php', 's', ".$default_code.", 'yes', 'N/A', ".$default_box_code.", 0),
('Pesquisas R&aacute;pidas no direct�rio', 'en=Directory Search||pt=Pesquisar', 'directory/quick_search.php', 's', ".$default_code.", 'yes', 'N/A', ".$default_code.", 0),
('Pesquisa Avan&ccedil;ada no direct�rio', 'en=Directory Search||pt=Pesquisar', 'directory/advanced_search.php', 's', ".$default_code.", 'yes', 'N/A', ".$default_code.", 0),
('Detalhes do item', 'en=Content Details||pt=Conte�do', 'directory/ds_files.php', 's', ".$default_code.", 'no', 'N/A', ".$default_box_code.", 2)
";

?>