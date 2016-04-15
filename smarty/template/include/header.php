<header class="row header">
	<div class="col-md-3 col-md-offset-1 icon fl"><img src="images/logo.png" height="32" width="275" alt=""></div>
	<div class="col-md-7 navbar">
		<form action="#" class="navbar-form navbar-right">
			<div class="form-group">
				<input type="text" class="form-control searchInput" placeholder="Search">
				<button type="submit" class="searchBtn">
					<span class="glyphicon glyphicon-search"></span>
				</button>
				<div class="cb"></div>
			</div>
		</form>
		<div class="cb"></div>
		<ul class="nav navbar-nav navbar-right">
			{{foreach $nav as $key=>$val}}
			<li><a href="{{$val['href']}}?id={{$val['id']}}" {{if $val['href']==$url}}class="active"{{/if}}>{{$val['title']}}</a></li>
			{{/foreach}}
		</ul>
	</div>
</header>