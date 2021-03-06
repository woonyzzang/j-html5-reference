<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>body 요소 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;html&gt;
			&lt;head&gt;
			&lt;title&gt;문서의 제목&lt;/title&gt;
			&lt;/head&gt;
			&lt;body&gt;
				문서의 본문...
			&lt;/body&gt;
			&lt;/html&gt;
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
		elem: 'body',
		meaning: 'document body',
		item: [{
			desc:'body 요소는 문서 내 영역을 정의하는 요소로, 글자, 이동(하이퍼링크), 이미지, 테이블, 목록 등, 웹 브라우저에 표시할 HTML 문서의 주된 콘텐츠를 나타냅니다.'
		}],
		level: 'Block-Level',
		category: 'HTML Basic'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'onbeforeprint', desc:'브라우저에서 프린트를 시작할 때 발생하는 이벤트입니다. CSS 미디어 쿼리 만으로는 표현할 수 없는 것을 자바스크립트로 보조하려고 할 때 사용합니다.', href:'http://naver.com'},
			{tit:'onafterprint', desc:'브라우저에서 프린트를 끝냈을 때 발생하는 이벤트입니다. CSS 미디어 쿼리 만으로는 표현할 수 없는 것을 자바스크립트로 보조하려고 할 때 사용합니다.', href:'http://naver.com'},
			{tit:'onbeforeunload', desc:'브라우저에서 현재 창을 닫거나, 다른 페이지로 가는 링크를 누르거나, document.write() 를 실행했을 때 발생합니다.', href:'http://naver.com'},
			{tit:'onblur', desc:'브라우저에서 현재 창을 닫거나, 다른 페이지로 가는 링크를 누르거나, document.write() 를 실행했을 때 발생합니다.', href:'http://naver.com'},
			{tit:'onerror', desc:'런타임 스크립트 오류가 있거나 보안 기준을 위반하는 등 페이지에 오류가 있을 때 발생합니다.', href:'http://naver.com'},
			{tit:'onfocus', desc:'브라우저 창이 포커스를 받았을 때 발생합니다.', href:'http://naver.com'},
			{tit:'onhashchange', desc:'같은 페이지 안에서 해시(#)만 바뀌었을 때, 즉 페이지에서 id가 있는 요소로 이동했을 때 발생합니다.', href:'http://naver.com'},
			{tit:'onload', desc:'문서 로드를 끝냈을 때, 즉 DOM을 완전히 구성하고, 이미지 등의 부속 자원까지 전부 로드했을 때 발생합니다.', href:'http://naver.com'},
			{tit:'onmessage', desc:'message 이벤트는 문서 간 메시징, 도메인 간 메시징, 워커 통신에 사용합니다.', href:'http://naver.com'},
			{tit:'onoffline', desc:'body 요소, frameset 요소에서 지원해야 하는 이벤트 핸들러입니다. 해당 요소에 offline 이벤트가 발생했을 때 호출됩니다.', href:'http://naver.com'},
			{tit:'ononline', desc:'body 요소, frameset 요소에서 지원되어야 하는 이벤트 핸들러입니다. 해당 요소에 online 이벤트가 발생했을때 호출됩니다.', href:'http://naver.com'},
			{tit:'onresize', desc:'창 또는 프레임의 크기를 조절할 때 발생합니다.', href:'http://naver.com'},
			{tit:'onscroll', desc:'스크롤바가 있는 요소에서만 발생됩니다. 스크롤바가 있는 요소를 만드는 데는 overflow 스타일 속성을 사용합니다.', href:'http://naver.com'},
			{tit:'onstorage', desc:'웹 저장소 영역이 업데이트될 때 발생합니다.', href:'http://naver.com'},
			{tit:'onunload', desc:'사용자가 페이지를 나갈 때 발생합니다.', href:'http://naver.com'}
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