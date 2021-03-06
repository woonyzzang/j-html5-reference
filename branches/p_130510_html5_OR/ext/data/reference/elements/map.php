<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>map 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;img src="@이미지 파일 경로" alt="Planets" usemap="#planetmap"&gt;

			&lt;map name="planetmap"&gt;
			&lt;area shape="rect" coords="0,0,82,126" href="sun.htm" alt="Sun"&gt;
			&lt;area shape="circle" coords="90,58,3" href="mercur.htm" alt="Mercury"&gt;
			&lt;area shape="circle" coords="124,58,8" href="venus.htm" alt="Venus"&gt;
			&lt;/map&gt;
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
		elem: 'map',
		meaning: 'image-map definition',
		item: [{
			desc:'map 요소는 자손 요소인 area 요소와 함께 이미지 맵을 정의합니다. 이미지 맵이란 클릭(또는 링크) 가능한 영역을 가진 이미지를 뜻 합니다.'
		}],
		level: 'Block-Level',
		category: 'Image \& Media'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'name', desc:'요소를 참조할 식별자입니다. img 요소의 usemap 속성에서 map 요소의 name 속성을 써서 요소를 찾습니다.', href:'http://naver.com'}
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