<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>aside 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;div id="content">
				&lt;article class="hentry"&gt;...&lt;/article&gt;
				&lt;article class="hentry"&gt;...&lt;/article&gt;
				&lt;article class="hentry"&gt;...&lt;/article&gt;
				&lt;aside&gt;
					&lt;p&gt;aside 섹션은 부가적인 정보를 제공하는 영역으로 사용됩니다.&lt;/p&gt;
				&lt;/aside&gt;
			&lt;/div&gt;
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
		elem: 'aside',
		meaning: 'aside',
		item: [{
			desc:'article 요소는 주위 요소의 내용과 접점을 이루는 섹션으로, 주 콘텐츠와 어느정도 연관성이 있는 부수적인 콘텐츠를 표시할 때 사용되며, 주로 article 요소나 section 요소 같은 중심 콘텐츠의 사이드바(side bar) 형태로 표현됩니다.﻿'
		}],
		level: 'Block-Level',
		category: 'Structural Elements'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'}
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