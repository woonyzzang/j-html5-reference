<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>colgroup 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;table&gt;
			&lt;caption&gt;월별지출내역&lt;/caption&gt;
			&lt;colgroup&gt;
			&lt;col span="2"&gt;
			&lt;col&gt;
			&lt;/colgroup&gt;
			&lt;thead&gt;
			&lt;tr&gt;
			&lt;th scope="col"&gt;날짜&lt;/th&gt;
			&lt;th scope="col"&gt;지출내역&lt;/th&gt;
			&lt;th scope="col"&gt;금액&lt;/th&gt;
			&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tbody&gt;
			&lt;tr&gt;
			&lt;td&gt;09-20&lt;/td&gt;
			&lt;td&gt;점심&lt;/td&gt;
			&lt;td&gt;5,000원&lt;/td&gt;
			&lt;/tr&gt;
			&lt;/tbody&gt;
			&lt;/table&gt;
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
		elem: 'colgroup',
		meaning: 'table column group',
		item: [{
			desc:'colgroup 요소는 표 안에서 셀(열)하나 이상의 행의 그룹을 나타냅니다.'
		}],
		level: 'Table-Column-Group-Level',
		category: 'Table'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'span', desc:'연관된 열의 개수를 정의합니다.', href:'http://naver.com'}
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