<?php

function language_list(...$language):array
{
    // implement the language list function

return $language;
}

function add_to_language_list(array $list, string $language):array{
$list[]=$language;
    return $list;
}
    
function prune_language_list(array $list):array{
    array_shift($list);
    return $list;
}

function current_language(array $list):string{
    return $list[0];
}

function language_list_length(array $list):int{
    return count($list);
}