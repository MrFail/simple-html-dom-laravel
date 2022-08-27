<?php

use MrFail\HtmlParser\SimpleHtmlDom;

function fileGetHtml(
    $url,
    $use_include_path = false,
    $context = null,
    $offset = 0,
    $maxLen = -1,
    $lowercase = true,
    $forceTagsClosed = true,
    $target_charset = DEFAULT_TARGET_CHARSET,
    $stripRN = true,
    $defaultBRText = DEFAULT_BR_TEXT,
    $defaultSpanText = DEFAULT_SPAN_TEXT)
{
    if($maxLen <= 0) { $maxLen = MAX_FILE_SIZE; }

    $dom = new SimpleHtmlDom(
        null,
        $lowercase,
        $forceTagsClosed,
        $target_charset,
        $stripRN,
        $defaultBRText,
        $defaultSpanText
    );

    /**
     * For sourceforge users: uncomment the next line and comment the
     * retrieve_url_contents line 2 lines down if it is not already done.
     */
    $contents = file_get_contents(
        $url,
        $use_include_path,
        $context,
        $offset,
        $maxLen
    );
    // $contents = retrieve_url_contents($url);

    if (empty($contents) || strlen($contents) > $maxLen) {
        $dom->clear();
        return false;
    }

    return $dom->load($contents, $lowercase, $stripRN);
}

function strGetHtml(
    $str,
    $lowercase = true,
    $forceTagsClosed = true,
    $target_charset = DEFAULT_TARGET_CHARSET,
    $stripRN = true,
    $defaultBRText = DEFAULT_BR_TEXT,
    $defaultSpanText = DEFAULT_SPAN_TEXT)
{
    $dom = new SimpleHtmlDom(
        null,
        $lowercase,
        $forceTagsClosed,
        $target_charset,
        $stripRN,
        $defaultBRText,
        $defaultSpanText
    );

    if (empty($str) || strlen($str) > MAX_FILE_SIZE) {
        $dom->clear();
        return false;
    }

    return $dom->load($str, $lowercase, $stripRN);
}

function dumpHtmlTree($node, $show_attr = true, $deep = 0)
{
    $node->dump($node);
}