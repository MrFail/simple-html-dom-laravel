<?php

    define('HDOM_TYPE_ELEMENT', env('HDOM_TYPE_ELEMENT',1));
    define('HDOM_TYPE_COMMENT', env('HDOM_TYPE_COMMENT',2));
    define('HDOM_TYPE_TEXT', env('HDOM_TYPE_TEXT',3));
    define('HDOM_TYPE_ENDTAG', env('HDOM_TYPE_ENDTAG',4));
    define('HDOM_TYPE_ROOT', env('HDOM_TYPE_ROOT',5));
    define('HDOM_TYPE_UNKNOWN', env('HDOM_TYPE_UNKNOWN',6));
    define('HDOM_QUOTE_DOUBLE', env('HDOM_QUOTE_DOUBLE',0));
    define('HDOM_QUOTE_SINGLE', env('HDOM_QUOTE_SINGLE',1));
    define('HDOM_QUOTE_NO', env('HDOM_QUOTE_NO',3));
    define('HDOM_INFO_BEGIN', env('HDOM_INFO_BEGIN',0));
    define('HDOM_INFO_END', env('HDOM_INFO_END',1));
    define('HDOM_INFO_QUOTE', env('HDOM_INFO_QUOTE',2));
    define('HDOM_INFO_SPACE', env('HDOM_INFO_SPACE',3));
    define('HDOM_INFO_TEXT', env('HDOM_INFO_TEXT',4));
    define('HDOM_INFO_INNER', env('HDOM_INFO_INNER',5));
    define('HDOM_INFO_OUTER', env('HDOM_INFO_OUTER',6));
    define('HDOM_INFO_ENDSPACE', env('HDOM_INFO_ENDSPACE',7));

    define('DEFAULT_TARGET_CHARSET', env('DEFAULT_TARGET_CHARSET','UTF-8'));
    define('DEFAULT_BR_TEXT',env('DEFAULT_BR_TEXT', "\r\n"));
    define('DEFAULT_SPAN_TEXT', env('DEFAULT_SPAN_TEXT',' '));
    define('MAX_FILE_SIZE', env('MAX_FILE_SIZE',600000));
    define('HDOM_SMARTY_AS_TEXT', env('HDOM_SMARTY_AS_TEXT',1));

    return [];