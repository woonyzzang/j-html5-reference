<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>method 속성 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;form action="form_action.asp" method="get"&gt;
			First name: &lt;input type="text" name="fname"&gt;&lt;br&gt;
			Last name: &lt;input type="text" name="lname"&gt;&lt;br&gt;
			&lt;input type="submit" value="Submit"&gt;
			&lt;/form&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/association-of-controls-and-forms.html#attr-fs-method" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'method',
		item: [{
			desc:'method 속성은 action 을 전송할 방식을 지정합니다.'
		}],
		grid: true
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','desc'],
		data: {'items':[
			{keyword:'GET', desc:'(기본값)폼의 전송되는 데이터가 이름과 값으로 URL에 명시되어 전송됩니다.이 방식은 전송할 수 있는 데이터량에 한계가 있으며 값이 공개되기 때문에 보안에 취약할 수 있습니다.'},
			{keyword:'POST', desc:'폼에서 전송되는 데이터를 이름과 값으로 전송합니다. 이 방식은 GET방식과 다르게 이름과 값이 URL에 명시되지 않으며 전송할 수 있는 데이터량에 한계가 없다는 장점이 있습니다.'}
		]},
		proxy : {
			type: 'memory',
			reader: {
				type: 'json',
				root: 'items'
			}
		}
	});

	var grid = Ext.create('Ext.grid.Panel', {
		renderTo: Ext.get('gridAttr'),
		title: '속성 정의 목록',
		store: storeData,
		columns: [
			{header:'키워드', dataIndex:'keyword'},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	});
});
</script>
</body>
</html>