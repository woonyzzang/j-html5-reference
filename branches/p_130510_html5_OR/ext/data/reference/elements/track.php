<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>track 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;video src="@파일명.mp4"&gt;
				&lt;track src="caption_kr.srt" srclang="ko" label="한글 자막 (Korean)"&gt;
				&lt;track src="caption_en.srt" srclang="en" label="영어 자막 (English)"&gt;
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
		elem: 'track',
		meaning: 'supplementary media track',
		item: [{
			desc:'track 요소는미디어 요소에 사용하여 명시적으로 자막과 같은 외부 텍스트 트랙을 지정합니다.'
		}],
		level: 'Block-Level',
		category: 'Media'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'kind', desc:'텍스트 트랙의 종류를 정의합니다.', href:'http://naver.com'},
			{tit:'src', desc:'텍스트 트랙 데이터의 주소를 정의합니다.', href:'http://naver.com'},
			{tit:'srclang', desc:'텍스트 트랙 데이터의 언어를 정의합니다.', href:'http://naver.com'},
			{tit:'label', desc:'사용자가 읽을 수 있는 트랙 제목을 정의합니다.', href:'http://naver.com'},
			{tit:'default', desc:'기본 트랙을 정의합니다.', href:'http://naver.com'}
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