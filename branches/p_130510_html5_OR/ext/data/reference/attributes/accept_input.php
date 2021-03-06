<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>aaccept 속성 (input) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @모든 이미지 형태의 파일을 힌트로 보여줍니다. -->
			&lt;p&gt;&lt;label&gt;프로필 사진: &lt;input type="file" name="profile" accept="image/*"&gt;&lt;/label&gt;&lt;/p&gt;

			<!-- @'mp4' 형식의 동영상 파일을 힌트로 보여줍니다. -->
			&lt;p&gt;&lt;label&gt;동영상: &lt;input type="file" name="profile" accept="video/mp4"&gt;&lt;/label&gt;&lt;/p&gt;

			<!-- @MS Word 파일을 매개변수 없는 유효한 마임 타입(valid MIME type with no parameters) 지정함으로 해당 파일을 힌트로 보여줍니다. -->
			&lt;p&gt;&lt;label&gt;지원서: &lt;input type="file" name="profile" accept="application/msword"&gt;&lt;/label&gt;&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/number-state.html#attr-input-accept" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/html5/infrastructure.html#valid-mime-type-with-no-parameters" target="_blank">valid MIME type with no parameters 최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'aaccept',
		meaning: 'input',
		item: [{
			desc:'type 속성이 File Upload state일 경우 accept 속성을 활용하여 서버에서 수용하는 파일의 타입에 대해 사용자 에이전트가힌트를 주도록 할 수 있습니다.'
		}],
		txt: '콤마로 구분된 예약어 목록입니다. 각각의 예약어들은 다음 중 하나와 매칭되어야 합니다.(대소문자는 구분하지 않습니다.)',
		lst: [
			{item:'audio\/* : 사운드 파일을 허용함을 나타냅니다.'},
			{item:'video\/* : 비디오 파일을 허용함을 나타냅니다.'},
			{item:'image\/* : 이미지 파일을 허용함을 나타냅니다.'},
			{item:'매개변수 없는 유효한 마임 타입(valid MIME type with no parameters)'}
		],
		txt2: '예약어들은 중복될 수 없습니다. 이 중복을 체크할때는 대소문자를 구분하지 않습니다. (audio\/* 와 Audio\/* 는 중복입니다.)'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>