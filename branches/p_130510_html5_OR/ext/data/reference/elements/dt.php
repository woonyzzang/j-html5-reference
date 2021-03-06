<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>dt 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @메타 정보의 의미로 마크업한 dt 요소입니다. -->
			&lt;dl&gt;
			&lt;dt&gt;Coffee:&lt;/dt&gt;
			&lt;dd&gt;Black hot drink&lt;/dd&gt;
			&lt;dt&gt;Milk:&lt;/dt&gt;
			&lt;dd&gt;White cold drink&lt;/dd&gt;
			&lt;/dl&gt;

			<!-- @dt 요소 자체는 정의를 나타내지 않습니다. 이를 정의하려면 dfn 요소를 사용해야 합니다. -->
			&lt;dl&gt;
			&lt;dt&gt;&lt;dfn&gt;good&lt;/dfn&gt;&lt;/dt&gt;
			&lt;dd class="pronunciation"&gt;[gʊd]&lt;/dd&gt;
			&lt;dd&gt;1. (질적으로) 좋은&lt;/dd&gt;
			&lt;dd&gt;2. 즐거운, 기쁜, 좋은, 다행스러운&lt;/dd&gt;
			&lt;dd&gt;3. (논의 등을 진행시키기에) 좋은&lt;/dd&gt;
			&lt;/dl&gt;
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
		elem: 'dt',
		meaning: 'definition term',
		item: [{
			desc:'dt 요소는 정의 목록(dl 요소)에서 정의 그룹의 단어나 항목이름을 나타냅니다.'
		}],
		level: 'Block-Level',
		category: 'List'
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