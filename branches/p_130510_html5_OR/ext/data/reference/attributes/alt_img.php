<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>alt 속성 (img) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @이미지가 아예 없을 때의 마크업:
				졸업 앨범을 스캔해서 graduation.jpg라고 저장했습니다. 이 사진 이미지에서 전달받을 수 있는 의미는 “졸업 사진이구나” 입니다. 따라서 이렇게 마크업할 수 있습니다. -->
			&lt;p&gt;필자의 졸업 사진입니다. 필자는 앞에서 두번째 줄, 왼쪽에서 네번째에 있습니다. 필자가 서 있는 자리에서 오른쪽 두번째 자리에 있는 친구는 졸업한지 20년이 넘게 흐른 지금도 가장 절친한 친구입니다. ...&lt;/p&gt;

			<!-- @주변 문맥이 이미지를 설명하는 경우 -->
			&lt;p&gt;
				&lt;img src="graduation.jpg" alt=""&gt;
				필자의 졸업 사진입니다. 필자는 앞에서 두번째 줄, 왼쪽에서 네번째에 있습니다. 필자가 서 있는 자리에서 오른쪽 두번째 자리에 있는 친구는 졸업한지 20년이 넘게 흐른 지금도 가장 절친한 친구입니다.
				...
			&lt;/p&gt;

			<!-- @일반적인 사용 방법 -->
			&lt;p&gt;
				&lt;img src="graduation.jpg" alt="필자의 졸업 사진입니다."&gt;
				필자는 앞에서 두번째 줄, 왼쪽에서 네번째에 있습니다. 필자가 서 있는 자리에서 오른쪽 두번째 자리에 있는 친구는 졸업한지 20년이 넘게 흐른 지금도 가장 절친한 친구입니다.
				 ...
			&lt;/p&gt;

			<!-- @좀 더 자세한 의미를 전달하는 이미지:
				포토샵에서 이미지를 조금 수정해서, 필자의 얼굴 주위에 동그라미를 그리고 “저에요!” 라는 글씨를 이미지에 직접 저장했습니다.
				이제 이 이미지는 필자가 앞에서 두번째 줄, 왼쪽에서 네번째에 있다는 의미도 함께 전달합니다. 따라서 마크업을 이렇게 바꿀 수 있습니다.-->
			&lt;p&gt;
				&lt;img src="graduation.jpg" alt="필자의 졸업 사진입니다. 필자는 앞에서 두번째 줄, 왼쪽에서 네번째에 있습니다."&gt;
				필자가 서 있는 자리에서 오른쪽 두번째 자리에 있는 친구는 졸업한지 20년이 넘게 흐른 지금도 가장 절친한 친구입니다.
				...
			&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 분류 -->
	<section>
		<h3 class="s_tit">분류</h3>
		<dl class="category">
		<dt>alt 속성을 써야 하고 그 안에 의미있는 텍스트를 써야 하는 경우</dt>
		<dd>
			<ul>
			<li>이미지만을 포함하는 링크 혹은 버튼
				<ul>
				<li>alt 속성의 값은 링크나 버튼의 목적을 설명하는 것</li>
				</ul>
			</li>
			<li>대체적인 그래픽 표현 - 차트, 다이어그램, 그래프, 지도, 일러스트레이션 - 을 갖는 구문이나 문단
				<ul>
				<li>alt 속성의 값은 src 속성에서 명시한 이미지와 동일한 메시지를 전달할 수 있는 것</li>
				</ul>
			</li>
			<li>글자 표현 효과를 위해 그래픽으로 렌더링된 텍스트
				<ul>
				<li>alt 속성의 값은 이미지에 사용된 텍스트 그 자체여야 함</li>
				</ul>
			</li>
			<li>기타 아래에 해당하지 않는 모든 이미지
				<ul>
				<li>alt 속성의 값은 경우에 따라 다름</li>
				</ul>
			</li>
			</ul>
		</dd>
		<dt>속성을 쓰되 내용을 비워 두어야 하는 경우</dt>
		<dd>
			<ul>
			<li>대체적인 그래픽 표현 - 아이콘, 로고 - 을 갖는 짧은 구문이나 라벨</li>
			<li>주위 텍스트 일부를 그래픽으로 표현한 것</li>
			<li>아무런 정보도 전달하지 않는 순수한 장식적 이미지</li>
			<li>링크를 형성하지 않는, 더 큰 하나의 이미지를 형성하는 이미지 그룹 (그러나 그룹 중 적어도 하나의 이미지는 올바른 대체텍스트를 써야 합니다.)</li>
			<li>링크를 형성하는, 더 큰 하나의 이미지를 형성하는 이미지 그룹 (그러나 그룹 중 적어도 하나의 이미지에는 링크의 목적지를 설명하는 대체텍스트를 써야 합니다.)</li>
			<li>사용자에게 보일 의도가 없는 이미지</li>
			</ul>
		</dd>
		<dt>alt 속성을 생략해도 되는 경우</dt>
		<dd>
			<ul>
			<li>이미지의 내용을 알 수 없는 경우</li>
			<li>이미지를 볼 수 있음을 알고 있는 특정한 사람이 볼 것으로 의도된 이메일, 또는 사적인 문서에 포함된 이미지</li>
			</ul>
		</dd>
		</dl>
	</section>
	<!-- //분류 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>alt 속성은 이미지 대신 쓸 수 있는 텍스트입니다. alt 속성으로 이미지를 설명하는 것이 아닙니다. 주변 문맥에서 이미 설명된 단어나 문장을 alt 속성에 중복해서 사용하면 사용자의 정보 습득을 방해할 수 있습니다.</p>
		<p>이미지 대신 alt 속성에 지정된텍스트를 읽었을 때 자연스럽게 문장이 이어져야 합니다. 즉, 단어를 대체하는 이미지의대체 텍스트는 단어여야 하며 문장을 대체하는 이미지의대체 텍스트는 완전한 문장이어야 합니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/embedded-content-1.html#attr-img-alt" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/html5/embedded-content-1.html#general-guidelines" target="_blank">alt 속성 사용 가이드 최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'alt',
		meaning: 'img',
		item: [{
			desc:'alt 속성은 \"이미지 대신\" 쓸 수 있는 텍스트를 포함해야 합니다. 페이지의 모든 이미지를 alt 속성값으로 지정된 대체텍스트로 교체해도 페이지의 의미가 달라지지 않아야 합니다.'
		}],
		txt: 'alt 속성의 값은 평범한 텍스트를 사용합니다. 이 속성은 비어 있을 수 있습니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>