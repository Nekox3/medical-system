<?php
$config['per_page'] = 1;
$config["uri_segment"] = 3;

#es para envolver el codigo de paginado 
$config['full_tag_open'] = '<ul class="pagination">';
$config['full_tag_close'] = '</ul>';

$config['first_link'] = 'Primero';
$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';

$config['last_link'] = 'ultimo';
$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';

$config['next_link'] = 'Siguiente';
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';

$config['prev_link'] = 'Anterior';
$config['prev_tag_open'] = '<li>';
$config['prev_tag_close'] = '</li>';

$config['cur_tag_open'] = "<li class='disable'><li class='active'><a href='javascript:void(0)'>";
$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";

$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';

?>