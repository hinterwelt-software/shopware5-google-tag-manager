{extends file='parent:frontend/index/header.tpl'}

{block name='frontend_index_header_javascript_tracking'}
    {include file='frontend/hinterwelt/google_tag_manager/head.tpl'}
    {$smarty.block.parent}
{/block}