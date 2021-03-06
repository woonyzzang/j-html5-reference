<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>link 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @스타일 시트 선언 -->
			&lt;link rel="stylesheet" href="@파일명" title="@파일 부가 설명"&gt;
			&lt;link rel="alternate stylesheet" href="@파일명" title="@파일 부가 설명"&gt;

			<!-- @외부 자원 링크 연동 -->
			&lt;link rel="alternate" type="text/html" href="@파일명" hreflang="en" title="English HTML"&gt;
			&lt;link rel="alternate" type="text/html" href="@파일명" hreflang="fr" title="French HTML"&gt;
			&lt;link rel="alternate" type="text/html" href="@파일명" hreflang="en" media="print" title="English HTML (for printing)"&gt;
			&lt;link rel="alternate" type="text/html" href="@파일명" hreflang="fr" media="print" title="French HTML (for printing)"&gt;
			&lt;link rel="alternate" type="application/pdf" href="@파일명" hreflang="en" title="English PDF"&gt;
			&lt;link rel="alternate" type="application/pdf" href="@파일명" hreflang="fr" title="French PDF"&gt;

			&lt;link rel="alternate"&gt;
			&lt;link rel="archives"&gt;
			&lt;link rel="author"&gt;
			&lt;link rel="feed"&gt;
			&lt;link rel="first"&gt;
			&lt;link rel="help"&gt;
			&lt;link rel="icon"&gt;
			&lt;link rel="index"&gt;
			&lt;link rel="last"&gt;
			&lt;link rel="license"&gt;
			&lt;link rel="next"&gt;
			&lt;link rel="pingback"&gt;
			&lt;link rel="prefetch"&gt;
			&lt;link rel="prev"&gt;
			&lt;link rel="search"&gt;
			&lt;link rel="stylesheet"&gt;
			&lt;link rel="sidebar"&gt;
			&lt;link rel="tag"&gt;
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
		elem: 'link',
		meaning: 'inter-document relationship metadata',
		item: [{
			desc:'link 요소는 문서를 다른 자원과 연결하기 위해 사용합니다. 이 요소는 현재 대부분 스타일시트(style sheet) 파일 링크에 사용되며 body 요소가 아닌 head 요소 내부에 사용해야 합니다.'
		}],
		level: 'Inline-Level',
		category: 'Meta Info'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'href', desc:'링크의 목적지를 지정합니다. 유효한, 앞뒤 공백은 허용하지만 비어 있지 않은 URL을 사용하여야 합니다. href 속성이 없거나 명세상의 정의에 따라 허용된 값이 아니라면 링크가 만들어지지 않습니다.', href:'http://naver.com'},
			{tit:'rel', desc:'링크가 형성하는 관계를 지정합니다. rel 속성이 없거나 명세상의 정의에 따라 허용된 값이 아닌 경우 rel 요소를 정의하지 않아야 합니다.', href:'http://naver.com'},
			{tit:'media', desc:'어떤 매체에 적용되는지 나타냅니다. 값은 반드시 유효한 미디어 쿼리여야 합니다.', href:'http://naver.com'},
			{tit:'hreflang', desc:'대상 URL의 언어를 명시합니다. 이 속성은 a 요소 및 area 요소의 hreflang 속성과 같은 의미입니다.', href:'http://naver.com'},
			{tit:'type', desc:'MIME 타입을 지정합니다. 반드시 유효한 MIME 타입 값이어야 합니다.', href:'http://naver.com'},
			{tit:'sizes', desc:'사이트의 icon을 제공 시 이미지의 사이즈를 지정합니다. 이 속성은 icon 키워드를 갖지 않는 rel 속성과 함께 사용될 수 없습니다. 값은 11×11 형태여야 하며 두 숫자는 모두 양의 정수여야 하고 0으로 시작할 수 없습니다.', href:'http://naver.com'},
			{tit:'title', desc:'링크에 제목을 부여합니다. 단, 스타일시트 링크의 경우 대체 스타일시트 목록을 설정할 수 있습니다.', href:'http://naver.com'}
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