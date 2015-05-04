{{include file='../tpl_common/top.tpl'}}
<div class="container-narrow shadow">
  <div class="box pad">
      <div class="jumbotron">
        <h1>{{L key="editable.front.welcome"}}</h1><br><br>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      </div>

      <hr>
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