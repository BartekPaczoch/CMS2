<div class="box" style="text-align:center; padding:30px; margin-bottom:-30px; margin-top:30px;">	
	{{foreach $imagesDB->getByBucket(759) as $image}}
		<a href="{{$image->description}}"><img src="{{$HOME}}image/{{$image->ekey}}/200/200/original/" alr="strony www"></a>
	{{/foreach}}
</div>	
<footer>
	<div class="container">	
	{{L key="editable.front.footer.terms"}}<br>
	{{L key="editable.front.footer.designed"}} <a href="http://www.wysoko.org">wysoko.org</a> | {{L key="front.footer.engine"}} <a href="http://www.windu.org" style="display:inline!important;">windu.org</a>
	</div>
</footer>