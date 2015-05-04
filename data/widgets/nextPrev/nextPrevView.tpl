<ul class="pager">

  {{foreach $data.pagesDB->getPages({{$data.page->parentId}},"position = {{$data.page->position}}-1",'createTime DESC','*') as $prev}}
    {{if $prev->name!=''}}
      <li class="previous">
          <a href="{{$prev->urlKey}}" class="prev" title="{{$prev->name}}">← {{L key="front.widget.prev"}}</a>
      </li>
    {{/if}}
  {{/foreach}}
  
  
  {{foreach $data.pagesDB->getPages({{$data.page->parentId}},"position = {{$data.page->position}}+1",'createTime DESC','*') as $prev}}
    {{if $prev->name!=''}}
      <li class="next">
          <a href="{{$prev->urlKey}}" class="next" title="{{$prev->name}}">{{L key="front.widget.next"}} →</a>
      </li>
    {{/if}}
  {{/foreach}}
</ul>