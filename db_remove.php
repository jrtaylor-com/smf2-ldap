<?
$result = $smcFunc['db_query']('', '
                DELETE 
                FROM {db_prefix}settings 
                WHERE variable = {string:variable} AND value = {string:value}
                LIMIT 1',
                array(
                    'variable' => 'disableHashTime', 'value' => '1'
                )
            );
?>