<dl class="menu">
	<dt>
		{{$menuTitle['title']}}
		<div class="divider"></div>
	</dt>
	{{foreach $menu as $v}}
	<dd class="aLink {{if $v['href']==$url}}active{{/if}}"><a href="index.php?c={{$v['href']}}&id={{$v['fid']}}&currentId={{$v['id']}}">{{$v['title']}}<span>&lt;</span></a></dd>
	{{/foreach}}
	<dd class="lastItem">
		<div class="f16">Contact Us</div>
		<div class="f12">For more infomation call</div>
		<div class="f24">(888) 988-8839</div>
		<div class="f12">Or Fax to</div>
		<div class="f16">(951) 547-6886</div>
	</dd>
</dl>