{if !isset($params.width)}{$params.width = config::get(imgBigWidth)}{/if}
{if !isset($params.height)}{$params.height = config::get(imgBigHeight)}{/if}
{if !isset($params.fit)}{$params.fit = config::get(sliderImageFit)}{/if}
{if !isset($params.filter)}{$params.filter = config::get(sliderImageFilter)}{/if}
{if !isset($params.contentLenght)}{$params.contentLenght = config::get(sliderContentLength)}{/if}
{if !isset($params.count)}{$params.count = config::get(sliderCount)}{/if}
{if !isset($params.showContent)}{$params.showContent = true}{/if}

{if $params.imagesBucket!=''}
	{assign images $data.imagesDB->getByBucket($params.imagesBucket,'position ASC','*',$params.count)}
	{assign descriptionColName 'description'}
{elseif $params.pagesBucket!=''}
	{assign images $data.pagesDB->getPagesByParentMulti($params.pagesBucket,'hasImage = 1 and status = 1','date DESC,createTime DESC','*',$params.count)}
	{assign descriptionColName 'content'}
{elseif $params.tagsBucket!=''}
	{assign images $data.pagesDB->getPagesByTag($params.tagsBucket,'hasImage = 1 and status = 1','createTime ASC','*',$params.count)}	
	{assign descriptionColName 'content'}	
{elseif $params.images!=''}
	{assign images $params.images}
	{assign descriptionColName 'description'}
{/if}

<div class="slider-wrapper theme-default"> 
	<div id="sliderNivo" class="nivoSlider">
	{foreach $images as $img}
		{if $params.pagesBucket!='' or $params.tagsBucket!=''}
			<a href="{$HOME}{$img->urlKey}">
				<img src="{$HOME}image/{pagesDB::getMainImageEkey($img->id)}/{$params.width}/{$params.height}/{$params.fit}/{$params.filter}/" {if $params.showContent==true}title='<h3>{$img->name|strip_tags|truncate:60}</h3>{$img->descriptionColName|strip_tags|truncate:$params.contentLenght}'{/if}>
			</a>
		{else}
			<img src="{$HOME}image/{$img->ekey}/{$params.width}/{$params.height}/{$params.fit}/{$params.filter}/" {if $params.showContent==true}title='{$img->$descriptionColName|strip_tags|truncate:$params.contentLenght}'{/if}>
		{/if}
	{/foreach}
	</div>
</div>