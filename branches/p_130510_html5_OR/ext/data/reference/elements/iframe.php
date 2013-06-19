<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>iframe 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- 기본 -->
			&lt;iframe src="@문서파일 경로"&gt;&lt;/iframe&gt;

			<!-- 지원하지 않는 브라우저 고려시 -->
			&lt;iframe src="@문서파일 경로"&gt;
				&lt;p&gt;Your browser does not support iframes.&lt;/p&gt;
			&lt;/iframe&gt;
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

<script src="<?php echo PATH ; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		elem: 'iframe',
		meaning: 'inline frame',
		item: [{
			desc:'iframe 요소는 html 안에 다른 페이지의 문서를 불러오는데 사용됩니다. src과 srcdoc으로 중첩된 문맥이 포함된 페이지 주소나, 내용을 나타냅니다.'
		}],
		level: 'Inline-Level',
		category: 'Frame \& Window'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'src', desc:'중첩된 문맥이 포함된 페이지 주소를 정의합니다.', href:'http://naver.com'},
			{tit:'srcdoc', desc:'중첩된 문맥이 포함된 내용을 정의합니다.', href:'http://naver.com'},
			{tit:'name', desc:'중첩된 문맥의 이름을 정의합니다.', href:'http://naver.com'},
			{tit:'sandbox', desc:'iframe 요소에 위치한 내용의 제한을 설정합니다.', href:'http://naver.com'},
			{tit:'seamless', desc:'iframe 요소의 문맥이 문서의 일부분인것처럼 렌더링합니다.', href:'http://naver.com'},
			{tit:'width', desc:'요소의 너비를 정의합니다.', href:'http://naver.com'},
			{tit:'height', desc:'요소의 높이를 정의합니다.', href:'http://naver.com'}
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