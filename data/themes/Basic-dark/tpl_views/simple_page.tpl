{{include file='../tpl_common/top.tpl'}}
  <div class="container-narrow">
    <div class="box pad">       
      <h4>{{$page->name}}</h4>
          
      <div class="pad">      
           {{eval var=$page->content}}          
      </div>
   </div>   
  </div> <!-- /container -->
<div class="container-narrow shadow logos">
  <div  style="text-align:center;"> 
    {{foreach $imagesDB->getByBucket(759) as $image}}
    <a href="{{$image->description}}"><img src="{{$HOME}}image/{{$image->ekey}}/140/200/fit/" alr="strony www"></a>
    {{/foreach}}
  </div> 
</div>    
{{include file='../tpl_common/footer.tpl'}}