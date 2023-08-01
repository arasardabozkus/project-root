<?php
$content_json = file_get_contents(FCPATH . '../codeigniter/app/Language/tr/content.json');
$content = json_decode($content_json,true);

return $content;