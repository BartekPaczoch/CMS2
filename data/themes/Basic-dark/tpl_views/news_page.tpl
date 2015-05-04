{{include file='../tpl_common/top.tpl'}}   
<div class="container-narrow">
  <div class="box pad">
    <h4>{{$page->name}}</h4>
        <div class="pad">
        
		{{eval var=$page->content}}
		</div>
		<div class="box-footer">
			Opublikował: <span class="label">{{$usersDB->get($page->authorId,'username')}}</span> <span class="date">{{$page->createTime}}</span>
			<div class="pull-right">
				{{W name=rate ekey=$page->ekey bucket=pagesDB nocache}}
			</div>
		</div>
 </div>    {{W name=commentsNormal nocache}}
</div> <!-- /container -->
{{include file='../tpl_common/footer.tpl'}}