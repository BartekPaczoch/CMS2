{{include file='../tpl_common/top.tpl'}}
<div class="subslide">
{{W name=sliderBootstrap imagesBucket=737 count=7 width=1170 height=300 fit=smart}}
</div>
<div class="container">	
	<div class="row">
		<div class="span4">
			{{include file='../tpl_common/left_column.tpl'}}
		</div>			
		<div class="span4">
			<div class="box pad margin-top">
				<h4>{{L key="editable.front.welcome"}}</h4>
				{{eval var=$page->content}}
			</div>
		</div>
		<div class="span4">
			<div class="box pad margin-top">
				<h4>{{L key="editable.front.news"}}</h4>
				{{W name=newsNormal newsGroup=745 count=2 length=100 width=300 showAuthor=false}}
			</div>
		</div>
		
	</div>
</div>

{{include file='../tpl_common/footer.tpl'}}
