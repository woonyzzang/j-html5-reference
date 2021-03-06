<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>label 속성 (option) : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;video src="opening.mp4"&gt;
			&lt;track kind="subtitles" src="caption_kr01.srt" srclang="ko" label="한글 자막 (Korean)"&gt;
			&lt;track kind="captions" src="caption_kr02.srt" srclang="ko" label="자세한 한글 자막 (Korean for the Hard of Hearing)"&gt;
			&lt;track kind="subtitles" src="caption_en.srt" srclang="en" label="영어 자막 (English)"&gt;
			&lt;/video>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/video.html#attr-track-label" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'label',
		meaning: 'track',
		item: [{
			desc:'사용자가 읽을 수 있는 트랙 제목을 제공합니다.'
		},{
			desc:'사용자 에이전트에서는 이 속성에 사용된 값으로 kind 속성에 사용되는 Subtitles 상태, Captions 상태, Descriptions 상태를 트랙 인터페이스에 표현합니다. 단, 동일한 미디어 요소에서 kind 속성, srclang 속성, label 속성의 값이 모두 같은 track 요소를 사용할 수는 없습니다. 이러한 비교는 속성이 양쪽 모두 생략되었을 경우에는 같은 값을 갖는 것으로 간주합니다.'
		}],
		txt: 'label 속성을 사용했다면 빈 문자열을 값으로 사용할 수 없습니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>