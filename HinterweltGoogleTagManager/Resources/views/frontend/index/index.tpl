{extends file='parent:frontend/index/index.tpl'}

{block name='frontend_index_after_body'}
    {include file='frontend/hinterwelt/google_tag_manager/body.tpl'}
    {$smarty.block.parent}
{/block}