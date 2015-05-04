{if $params.sort==''}{$params.sort='position ASC'}{/if}
{if $params.where==''}{$params.where="type != {pagesDB::TYPE_NEWS}"}{/if}
{assign activePagesId $data.pagesDB->hasActivePagesIdArray($request->getVariable(urlKey))}

{function name=menuMobileTree}
	{foreach $pages as $page}
    	{if $params.hasContent!=true or $page->content|count_characters>3}
          {if $data.pagesDB->hasChild($page->parentId)}
              <li>
                  <a href="{$HOME}{$page->urlKey}" class="{if in_array($page->id,$activePagesId)}menuOpen{/if} {$page->menuCssClass}">
                    {$page->name}
                  </a>
                
                  {if ($data.pagesDB->hasChild($page->id) and $page->type==pagesDB::TYPE_CATALOG)}
                    <div class="openBtn" onclick="$('#mobileSubMenu{$page->id}').slideToggle();">
                      <img src="./data/widgets/menuMobile/img/mobilebtn.png">
                    </div>
                  {/if}
                
                  <ul style="display:none" id="mobileSubMenu{$page->id}">
                      {menuMobileTree pages=$data.pagesDB->getPagesByParent($page->id,$params.where,$params.sort,'*',null,null,true)}
                  </ul>
              </li>
          {else}
              <li><a href="{$HOME}{$page->urlKey}" {if in_array($page->id,$activePagesId)}class="menuOpen"{/if}>{$page->name}</a></li>
          {/if}
        {else}
        	<li>{$page->name}</li>
        {/if} 
	{/foreach}
{/function}

<a href="#" onclick="$( '.menuMobile' ).slideToggle();" class="mobileMainBtn hidden-tablet hidden-desktop" style="padding:15px;"><img src="./data/widgets/menuMobile/img/mobilebtn.png"> Menu</a>

<div class="menuMobile" style="display:none;">
  <ul class="{$params.class}">
  	{menuMobileTree pages=$data.pagesDB->getPages($params.parent,$params.where,$params.sort,'*',null,null,true)}
  </ul>
</div>