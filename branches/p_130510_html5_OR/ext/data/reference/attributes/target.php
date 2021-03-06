<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>target 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @현재의 브라우징 문맥에 링크된 대상을 나타나게 하는 경우 -->
			&lt;a href="http://w3c.org" target="_self"&gt;W3C.org&lt;/a&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/links.html#attr-hyperlink-target" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'target',
		item: [{
			desc:'문서나 프레임같은 유효한 콘텍스트 이름이나 다음 키워드를 지정하여 링크된 대상을 의도된 콘텍스트로 열 수 있습니다.'
		}],
		txt: '유효한 브라우징 문맥 이름 또는 키워드',
		grid: true,
		txt2: 'target 속성을 사용했다면 값은 반드시 유효한 브라우징 문맥 이름 또는 키워드를 제공해야 됩니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','desc'],
		data: {'items':[
			{keyword:'_self', desc:'현재의 브라우징 문맥를 나타냅니다.'},
			{keyword:'_parent', desc:'현재의 브라우징 문맥에 부모 창이 있다면 그 부모 브라우징 문맥에서 링크가 열립니다.'},
			{keyword:'_top', desc:'최상위 브라우징 문맥에서 링크가 열립니다.'},
			{keyword:'_blank', desc:'새로운 브라우징 문맥에서 링크가 열립니다.'},
			{keyword:'사용자 정의', desc:'설정 값이 브라우징 문맥의 이름이 되는 텍스트라면 해당 브라우징 문맥에서 링크가 열립니다.'}
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