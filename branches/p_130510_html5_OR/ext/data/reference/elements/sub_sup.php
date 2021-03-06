<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>sub&frasl;sup 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @sub: 아래첨자 -->
			H&lt;sub&gt;2&lt;/sub&gt;O

			<!-- @sup: 위첨자 -->
			2의 3제곱 : 2&lt;sup&gt;3&lt;/sup&gt;
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
		elem: 'sub\/sup 요소',
		meaning: 'subscript \/ superscript',
		item: [{
			desc:'sub 요소는 아래첨자를 나타내며, sup 요소는 위첨자를 나타냅니다. 이 두 요소는 특정한 의미를 가진 것에 대해 표현적인 관습을 나타내기 위한 목적으로만 사용하여야 합니다. 즉 표현을 위한 표현의 목적으로 사용하는 것이 아닙니다. 예를 들어, sup 요소와 sub 요소를 전문적인 수식 표현 시스템에 사용하는 것은 적합하지 않습니다. 수식을 마크업하는 용도로는 MathML의 사용을 권장합니다만, 정밀한 수학적 마크업이 요구되지 않는 경우 sub 요소와 sup 요소로 대체할 수 있습니다.'
		}],
		level: 'Inline-Level',
		category: 'Text formatting'
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