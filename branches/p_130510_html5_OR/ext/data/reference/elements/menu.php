<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>menu 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;menu label="마실것"&gt;
			&lt;li&gt;&lt;input type="radio" name="drinks"&gt;아메리카노&lt;/li&gt;
			&lt;li&gt;&lt;input type="radio" name="drinks"&gt;카페 라떼&lt;/li&gt;
			&lt;li&gt;&lt;input type="radio" name="drinks"&gt;카페 모카&lt;/li&gt;
			&lt;li&gt;&lt;input type="radio" name="drinks"&gt;콜라&lt;/li&gt;
			&lt;li&gt;&lt;input type="radio" name="drinks"&gt;녹차&lt;/li&gt;
			&lt;li&gt;&lt;input type="radio" name="drinks"&gt;우유&lt;/li&gt;
			&lt;/menu&gt;

			&lt;menu type="toolbar"&gt;
			&lt;li&gt;
				&lt;menu label="File"&gt;
				&lt;button type="button" onclick="file_new()"&gt;New...&lt;/button&gt;
				&lt;button type="button" onclick="file_open()"&gt;Open...&lt;/button&gt;
				&lt;button type="button" onclick="file_save()"&gt;Save&lt;/button&gt;
				&lt;/menu&gt;
			&lt;/li&gt;
			&lt;li&gt;
				&lt;menu label="Edit"&gt;
				&lt;button type="button" onclick="edit_cut()"&gt;Cut&lt;/button&gt;
				&lt;button type="button" onclick="edit_copy()"&gt;Copy&lt;/button&gt;
				&lt;button type="button" onclick="edit_paste()"&gt;Paste&lt;/button&gt;
				&lt;/menu&gt;
			&lt;/li&gt;
			&lt;/menu&gt;
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
		elem: 'menu',
		meaning: 'list of commands',
		item: [{
			desc:'menu 요소는 컨텍스트 메뉴와 툴바를 정의하는 것으로 command 요소, button 요소등을 이용한 커맨드 목록을 나타냅니다.'
		}],
		level: 'Block-Level',
		category: 'List'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'type', desc:'선언되는 메뉴의 종류이며, 기본값은 list 입니다.', href:'http://naver.com'},
			{tit:'label', desc:'메뉴에 레이블을 부여합니다.', href:'http://naver.com'}
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