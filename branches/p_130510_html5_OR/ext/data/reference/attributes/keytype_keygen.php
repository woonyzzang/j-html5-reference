<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>keytype 속성 (keygen) : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-keygen-keytype" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'keytype',
		meaning: 'keygen',
		item: [{
			desc:'keytype 속성은 키 유형(보안 알고리즘)을 정의합니다.'
		}],
		txt: '나열 속성이며, 키워드와 상태를 나열합니다. 키워드가 \'RSA\'인 경우 상태는 RSA가 됩니다. 유효하지 않은 키워드의 상태 값은 \"unknown\"입니다. 사용자 에이전트는 자신이 지원하는 알고리즘에 해당하는 키워드를 유효한 것으로 인식합니다. 속성을 지원한다면 기본값은 RSA이고, 지원하지 않는다면 \"unknown\" 상태가 됩니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>