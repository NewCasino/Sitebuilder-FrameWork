<?php
/*
File revision date: 13-mar-2008
*/

/* Auto instalation:
(`name`, `display_name`, `link`, `published`, `cod_user_type`, `self_skin`, `aditional_params`, `box_code`, `cod_skin`)
*/
$module="
('Publica��es - Main', 'pt=Publica��es||en=Posts', 'publicacoes/main.php', 's', ".$default_code.", 'no', 'N/A', ".$default_box_code.", 0),
('Gest�o de Publica��es', 'en=Edit Post||pt=Editar Publica��es', 'publicacoes/management_pubs.php', 's', ".$auth_code.", 'yes', 'N/A',".$default_box_code." , 0),
('Gest�o de Ficheiros', 'en=Edit Files||pt=Editar Ficheiros', 'publicacoes/management_files.php', 's', ".$auth_code.", 'yes', 'N/A',".$default_box_code." , 0),
('Categorias', 'en=Categories||pt=Categorias', 'publicacoes/categorias.php', 's', ".$default_code.", 'no', 'N/A',".$default_box_code." , 0),
('Ler publica�ao', 'en=Read Post||pt=Ler artigo', 'publicacoes/show_article.php', 's', ".$default_code.", 'no', 'N/A',".$default_box_code." , 0),
('Listagem publica�oes na categoria', 'en=Posts Listing||pt=Listagem de publica�oes', 'publicacoes/publicacoes_list.php', 's', ".$default_code.", 'no', 'N/A',".$default_box_code." , 0),
('Mais Lido e Mais Recente', 'en=Most readed & Recent||pt=Mais Lidos', 'publicacoes/most_read_recent.php', 's', ".$default_code.", 'no', 'N/A',".$default_box_code." , 0),
('Destque Artigo', 'en=Featured Post||pt=Destque Artigo', 'publicacoes/featured_posts.php', 's', ".$default_code.", 'no', 'N/A',".$default_box_code." , 0),
('Listagem de Artigos de Destaque', 'en=Featured Posts||pt=Destque de Artigos', 'publicacoes/featured_post_list.php', 's', ".$default_code.", 'no', 'N/A',".$default_box_code." , 0),
('Coment�rios Recentes', 'en=Recent Comments||pt=Coment�rios Recentes', 'publicacoes/recent_comments.php', 's', ".$default_code.", 'no', 'N/A',".$default_box_code." , 0),
('Listagem Arquivo', 'en=Archives||pt=Arquivo', 'publicacoes/archive_list.php', 's', ".$default_code.", 'no', 'N/A',".$default_box_code." , 0),
('Arquivo', 'en=Archives||pt=Arquivo', 'publicacoes/archives.php', 's', ".$default_code.", 'no', 'N/A',".$default_box_code." , 0),
('As minhas publica�oes', 'en=My Posts||pt=Os meus artigos', 'publicacoes/my_posts.php', 's', ".$auth_code.", 'no', 'N/A',".$default_box_code." , 0),
('Listagem das minhas publica�oes', 'en=List my Posts||pt=Os meus artigos', 'publicacoes/my_posts_list.php', 's', ".$auth_code.", 'no', 'N/A',".$default_box_code." , 0),
('Informa�ao sobre publica�oes', 'en=Posts Info||pt=Info', 'publicacoes/info.php', 's', ".$auth_code.", 'no', 'N/A',".$default_box_code." , 0),
('Lkistagem de publica�oes para revisao', 'en=Review Posts List||pt=Listagem de artigos para revisao', 'publicacoes/review_posts_list.php', 's', ".$auth_code.", 'no', 'N/A',".$default_box_code." , 0),
('Revisao de publica�oes', 'en=Review Posts List||pt=Listagem de artigos para revisao', 'publicacoes/review_posts.php', 's', ".$auth_code.", 'no', 'N/A',".$default_box_code." , 0),
('Direitos de Autor', 'en=Author Rights||pt=Direitos de Autor', 'publicacoes/author_rights.php', 's', ".$auth_code.", 'no', 'N/A',".$default_box_code." , 0),
('Gest�o de Categorias de Publica��es', 'en= Categories mng||pt=Gest�o de Categorias', 'publicacoes/management_cats.php', 's', ".$auth_code.", 'no', 'N/A',".$default_box_code." , 0),
('Gest�o de Ficheiros de Publica��es', 'en= Articles Files||pt=Gest�o de Ficheiros de Publica��es', 'publicacoes/management_files.php', 's', ".$auth_code.", 'no', 'N/A',".$default_box_code." , 0)
";
?>