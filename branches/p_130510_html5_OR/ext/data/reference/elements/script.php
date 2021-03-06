<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>script 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;script&gt;
			function handler(){
				alert('Hello World!');
			}
			&lt;/script&gt;
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
		elem: 'script',
		meaning: 'embedded script',
		item: [{
			desc:'script 요소는 동적인 스크립트와 데이터 블럭을 문서에 포함합니다.'
		}],
		level: 'Block-Level',
		category: 'Meta Info'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'src', desc:'외부 스크립트 자원의 경로를 제공합니다.', href:'http://naver.com'},
			{tit:'async', desc:'가능한 즉시 비동기적으로 실행합니다.', href:'http://naver.com'},
			{tit:'defer', desc:'페이지 파싱 이후에 스크립트를 실행합니다.', href:'http://naver.com'},
			{tit:'type', desc:'스크립트 언어나 데이터 포맷을 표시합니다.', href:'http://naver.com'},
			{tit:'charset', desc:'외부 스크립트 자원의 문자 인코딩을 지정합니다.', href:'http://naver.com'}
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