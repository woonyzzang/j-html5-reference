<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>title 속성 : HTML5 Open Reference Guide</title>
<link rel="stylesheet" href="../../resources/css/ext-all.css">
<link rel="stylesheet" href="../../resources/css/base.css">
<link rel="stylesheet" href="../../syntaxhighlighter_3.0.83/styles/shCore.css">
<link rel="stylesheet" href="../../syntaxhighlighter_3.0.83/styles/shThemeFadeToGrey.css">
<script src="../../syntaxhighlighter_3.0.83/scripts/shCore.js"></script>
<script src="../../syntaxhighlighter_3.0.83/scripts/shAutoloader.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script src="../../ext-all-debug.js"></script>
<script src="../../locale/ext-lang-ko.js"></script>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section>
		<h2 class="s_tit">title 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>title 속성은 요소의 조언 정보를 나타냅니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>속성 값은 텍스트입니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @링크에 title 속성이 사용된다면 자원의 설명이나 제목이 될 수 있습니다. -->
			<a href="http://www.w3c.org" title="웹표준: World Wide Web Consortium">W3C</a>

			<!-- @이미지에 사용한다면, 크레딧이나 설명이 될 수 있습니다.
				그 밖에 문단에 사용한 경우, 텍스트의 각주나 논평이 될 수 있습니다.
				인용에 사용한다면, 원본에 대한 좀 더 많은 정보를 포함할 수 있습니다. -->
			&lt;img src="@파일명" alt="@대체 텍스트" title="@타이틀 제공"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<ul class="category">
		<li>title 속성의 값은 툴팁으로 표시되기 적당합니다. (IE에서 alt 속성을 툴팁으로 표시하는 것은 명세에서 요구된 사항이 아닙니다.)</li>
		<li>요소에서 title 속성을 생략한다면, 가장 가까운 부모 요소의 title 속성이 암시적으로 적용될 수 있습니다.
			<ul>
			<li>이 경우 명시적으로 title 속성을 제공하여, 부모 요소와 무관함을 밝힐 수 있습니다.</li>
			</ul>
		</li>
		<li>빈 문자열을 설정한다면, 이 요소가 조언 정보를 갖지 않음을 의미합니다.</li>
		<li>title 속성은 개행문자를 처리합니다. 따라서, 줄바꿈에 유의해야 합니다.</li>
		<li>title 속성은 link 요소, abbr 요소, input 요소 요소들에서 별도의 의미를 갖기도 합니다.</li>
		</ul>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/elements.html#the-title-attribute" target="_blank">title 속성의 최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>