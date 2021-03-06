<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>video 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;video width="715" height="525" poster="@파일명.png" controls autoplay&gt;
				&lt;source src="@파일명.ogv" type="video/ogg"&gt;&lt;/source&gt;
				&lt;source src="@파일명.mp4" type="video/mp4"&gt;&lt;/source&gt;
			&lt;/video&gt;
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
		elem: 'video',
		meaning: 'video',
		item: [{
			desc:'video 요소는 비디오나 영화를 재생하는데 사용됩니다.'
		}],
		level: 'Block-Level',
		category: 'Image \& media'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'src', desc:'미디어 자원의 주소를 제공합니다.', href:'http://naver.com'},
			{tit:'poster', desc:'비디오를 사용할 수 없을때 보여줄 이미지입니다.', href:'http://naver.com'},
			{tit:'preload', desc:'none, metadata, auto 키워드를 지정하여 미디어의 다운로드 상태를 결정합니다.', href:'http://naver.com'},
			{tit:'autoplay', desc:'미디어를 자동 재생합니다.', href:'http://naver.com'},
			{tit:'loop', desc:'미디어를 반복 재생합니다.', href:'http://naver.com'},
			{tit:'audio', desc:'오디오 채널을 제어합니다', href:'http://naver.com'},
			{tit:'controls', desc:'사용자 에이전트가 제공하는 기본 콘트롤러를 사용합니다.', href:'http://naver.com'},
			{tit:'width', desc:'미디어의 가로 크기를 정의합니다.', href:'http://naver.com'},
			{tit:'height', desc:'미디어의 세로 크기를 정의합니다.', href:'http://naver.com'}
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