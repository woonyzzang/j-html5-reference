<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>blockquote 요소 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;blockquote cite="@인용문 소스 가져온 링크 주소" title="웹표준의 미래"&gt;
				&lt;p&gt;웹표준은 미래에 공통의 기초가 될 것입니다, 월드와이드웹(WWW: World Wide Web)의 기반이 될 것이며, 브라우저와 소프트웨어가 기본적인 같은 구문 사용으로 웹을 해석하게 될 것입니다.&lt;/p&gt;
			&lt;/blockquote&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 속성 설명 -->
	<section>
		<h3 class="s_tit">속성</h3>
		<div id="gridAttr"></div>
	</section>
	<!-- //속성 설명 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		elem: 'blockquote',
		meaning: 'block quotation',
		item: [{
			desc:'blockquote 요소는 긴 인용구를 나타낼 때 사용합니다. 이 요소의 내용은 반드시 다른 소스로부터 가져온 것이어야 하며, 주소를 나타낼 수 있다면 cite 속성으로 주소를 나타내야 합니다.﻿'
		}],
		level: 'Block-Level',
		category: 'Text formatting'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'cite', desc:'인용한 원본의 주소입니다.', href:'http://naver.com'}
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
		title: '요소 속성 목록',
		store: storeData,
		columns: [
			{header:'속성명', xtype:'templatecolumn', tpl:'<a href="{href}">{tit}</a>'},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	});
});
</script>
</body>
</html>