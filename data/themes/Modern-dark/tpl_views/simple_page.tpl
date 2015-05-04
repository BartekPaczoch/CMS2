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
			<div class="box pad margin-top newspimg">
				<h4>{{$page->name}}</h4>
           		{{W name=navigation page=$page}}
				{{eval var=$page->content}}
			</div>
		</div>
	</div>
</div>	
{{include file='../tpl_common/footer.tpl'}}
