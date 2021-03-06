<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>srclang 속성 (track) : <?php echo TITLE_REFERENCE; ?></title>
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
				&lt;track src="caption_kr.srt" srclang="ko"&gt;
				&lt;track src="caption_en.srt" srclang="en"&gt;
			&lt;/video&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>동일한 미디어 요소에서 kind 속성, srclang 속성, label 속성의 값이 모두 같은 track 요소를 사용할 수는 없습니다. 이러한 비교는 속성이 양쪽 모두 생략되었을 경우에는 같은 값을 갖는 것으로 간주합니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/video.html#attr-track-srclang" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'srclang',
		meaning: 'track',
		item: [{
			desc:'srclang 속성은 텍스트 트랙 데이터의 언어를 정의합니다.'
		},{
			desc:'track 요소의 kind 속성이 Subtitles 상태일 때 생략할 수 없습니다.'
		}],
		txt: '유효한 BCP 47 언어 태그여야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>