{{include file='../tpl_common/top.tpl'}}
<div class="subslide">
{{W name=sliderBootstrap imagesBucket=737 count=7 width=1170 height=200 fit=smart }}
</div>
<div class="container">	
	<div class="row">
		<div class="span4">
			{{include file='../tpl_common/left_column.tpl'}}
		</div>			
		<div class="span8">
			<div class="box pad margin-top">
				
				<h4>{{$page->name}}</h4>
            	{{W name=navigation page=$page}}				
				{{eval var=$page->content}}
				<div class="box-footer">
					Opublikował: <span class="label">{{$usersDB->get($page->authorId,'username')}}</span> <span class="date">{{$page->createTime}}</span>
					<div class="pull-right">
						{{W name=rate ekey=$page->ekey bucket=pagesDB nocache}}
					</div>
				</div>
			</div>
            {{W name=commentsNormal nocache}}
		</div>

	</div>
</div>
	
{{include file='../tpl_common/footer.tpl'}}
