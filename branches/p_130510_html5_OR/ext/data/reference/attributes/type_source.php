<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>type 속성 (source) : <?php echo TITLE_REFERENCE; ?></title>
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
		<p>codecs=를 사용 하여 type 속성에서 사용할 수 있는 몇가지 코덱 마임 매개변수입니다.</p>
		<pre class="brush:html">
			<!-- @H.264 Constrained baseline profile video (main and extended video compatible) level 3 and Low-Complexity AAC audio in MP4 container -->
			&lt;source src="video.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'&gt;

			<!-- @H.264 Extended profile video (baseline-compatible) level 3 and Low-Complexity AAC audio in MP4 container -->
			&lt;source src="video.mp4" type='video/mp4; codecs="avc1.58A01E, mp4a.40.2"'&gt;

			<!-- @H.264 Main profile video level 3 and Low-Complexity AAC audio in MP4 container -->
			&lt;source src="video.mp4" type='video/mp4; codecs="avc1.4D401E, mp4a.40.2"'&gt;

			<!-- @H.264 'High' profile video (incompatible with main, baseline, or extended profiles) level 3 and Low-Complexity AAC audio in MP4 container -->
			&lt;source src="video.mp4" type='video/mp4; codecs="avc1.64001E, mp4a.40.2"'&gt;

			<!-- @MPEG-4 Visual Simple Profile Level 0 video and Low-Complexity AAC audio in MP4 container -->
			&lt;source src="video.mp4" type='video/mp4; codecs="mp4v.20.8, mp4a.40.2"'&gt;

			<!-- @MPEG-4 Advanced Simple Profile Level 0 video and Low-Complexity AAC audio in MP4 container -->
			&lt;source src="video.mp4" type='video/mp4; codecs="mp4v.20.240, mp4a.40.2"'&gt;

			<!-- @MPEG-4 Visual Simple Profile Level 0 video and AMR audio in 3GPP container -->
			&lt;source src="video.3gp" type='video/3gpp; codecs="mp4v.20.8, samr"'&gt;

			<!-- @Theora video and Vorbis audio in Ogg container -->
			&lt;source src="video.ogv" type='video/ogg; codecs="theora, vorbis"'&gt;

			<!-- @Theora video and Speex audio in Ogg container -->
			&lt;source src="video.ogv" type='video/ogg; codecs="theora, speex"'&gt;

			<!-- @Vorbis audio alone in Ogg container -->
			&lt;source src="audio.ogg" type='audio/ogg; codecs=vorbis'&gt;

			<!-- @Speex audio alone in Ogg container -->
			&lt;source src="audio.spx" type='audio/ogg; codecs=speex'&gt;

			<!-- @FLAC audio alone in Ogg container -->
			&lt;source src="audio.oga" type='audio/ogg; codecs=flac'&gt;

			<!-- @Dirac video and Vorbis audio in Ogg container -->
			&lt;source src="video.ogv" type='video/ogg; codecs="dirac, vorbis"'&gt;

			<!-- @Theora video andVorbis audio in Matroska container -->
			&lt;source src="video.mkv" type='video/x-matroska; codecs="theora, vorbis"'&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/video.html#attr-source-type" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'type',
		meaning: 'source',
		item: [{
			desc:'type 속성은 사용자 에이전트가 미디어 자원을 가져오기 전에 재생할 수 있는 지를 판단하는데 필요한 타입 정보를 제공합니다.'
		}],
		txt: '속성 값은 유효한 MIME 타입이어야 하며, 정확히 어떤 자원이 인코드되었는지 명시하기 위해 codecs 매개변수를 함께 쓸 수도 있습니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>