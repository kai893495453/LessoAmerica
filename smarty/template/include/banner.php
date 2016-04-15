<div class="row banner">
	<div class="col-md-12">
		<div id="carousel-generic" class="slide" data-ride="carousel">
	      <ol class="carousel-indicators">
      		{{foreach $banner as $key=>$val}}
	        <li data-target="#carousel-generic" data-slide-to="0" class="{{if $key==0}}active{{/if}}"></li>
	        {{/foreach}}
	      </ol>
	      <div class="carousel-inner" role="listbox">
	      	{{foreach $banner as $key=>$val}}
	        <div class="item {{if $key==0}}active{{/if}}">
	          <img src="{{$val['imgSrc']}}">
	        </div>
	        {{/foreach}}
	      </div>
	    </div>
	</div>
</div>