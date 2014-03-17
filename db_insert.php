<?
$smcFunc['db_insert']('replace',
            '{db_prefix}settings',
            array(
                'variable' => 'string', 'value' => 'string'
            ),
            array(
                'disableHashTime', '1',
            ),
            array('variable')
        );
?>