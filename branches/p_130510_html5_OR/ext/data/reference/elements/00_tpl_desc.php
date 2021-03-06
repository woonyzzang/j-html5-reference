<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>a 요소 상세설명 : HTML5 Open Reference Guide</title>
<link rel="stylesheet" href="../../resources/css/base.css">
</head>
<body>
<article>
	<!-- 스펙 명세 -->
	<section id="refer">
		<h3 class="blind">스펙 명세</h3>
		<!-- <p><a href="http://www.w3.org/TR/html5/text-level-semantics.html#the-a-element" target="_blank">최신 명세 바로가기</a></p> -->
		<dl>
		<dt class="first">[요소가 속하는 범주]</dt>
		<dd>
			<ul>
			<li>플로우 컨텐츠</li>
			<li>요소가 구문 컨텐츠만 포함한다면 구문 컨텐츠</li>
			</ul>
		</dd>
		<dt>[이 요소가 사용될 수 있는 문맥]</dt>
		<dd>요소가 구문 컨텐츠만 포함한다면 구문 컨텐츠가 올 수 있는 곳, 아니라면 플로우 컨텐츠가 올 수 있는 곳</dd>
		<dt>[이 요소가 포함할 수 있는 것]</dt>
		<dd>투명한 요소, 하지만 대화형 컨텐츠를 포함할 수는 없습니다.</dd>
		<dt>[요소에 사용할 수 있는 속성]</dt>
		<dd>
			<ul>
			<li>Global attributes</li>
			<li>href</li>
			<li>target</li>
			<li>rel</li>
			<li>media</li>
			<li>hreflang</li>
			<li>type</li>
			</ul>
		</dd>
		<dt>[DOM 인터페이스]</dt>
		<dd>
			<pre>
interface HTMLAnchorElement : HTMLElement {
  stringifier attribute DOMString href;
           attribute DOMString target;
           attribute DOMString rel;
  readonly attribute DOMTokenList relList;
           attribute DOMString media;
           attribute DOMString hreflang;
           attribute DOMString type;

           attribute DOMString text;

  // URL decomposition IDL attributes
           attribute DOMString protocol;
           attribute DOMString host;
           attribute DOMString hostname;
           attribute DOMString port;
           attribute DOMString pathname;
           attribute DOMString search;
           attribute DOMString hash;
};
			</pre>
		</dd>
		</dl>
	</section>
	<!--//스펙 명세 -->
	<!-- 콘텐츠 분류 타입 -->
	<section id="flow">
		<h3 class="blind">콘텐츠 분류 타입</h3>
		<svg width="300" height="200" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svg">
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#flow-content-0" target="_blank"><ellipse cx="150" cy="100" rx="130" ry="80" class="cate_flow on"></ellipse><text x="140" y="40">Flow</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#interactive-content-0" target="_blank"><ellipse cx="85" cy="80" rx="50" ry="30" class="cate_interactive on"></ellipse><text x="55" y="80">Interactive</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#metadata-content-0" target="_blank"><ellipse cx="80" cy="150" rx="60" ry="30" class="cate_metadata"></ellipse><text x="55" y="155">Metadata</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#phrasing-content-0" target="_blank"><ellipse cx="120" cy="100" rx="50" ry="50" class="cate_phrasing"></ellipse><text x="100" y="75">Phrasing</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#embedded-content-0" target="_blank"><ellipse cx="120" cy="100" rx="40" ry="20" class="cate_embedded"></ellipse><text x="97" y="102">Embedded</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#heading-content-0" target="_blank"><ellipse cx="220" cy="75" rx="40" ry="20" class="cate_heading"></ellipse><text x="203" y="78">Heading</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#sectioning-content-0" target="_blank"><ellipse cx="220" cy="125" rx="40" ry="20" class="cate_sectioning"></ellipse><text x="195" y="127">Sectioning</text></a>
		</svg>

		<ul>
		<li>플로우 컨텐츠이자 대화형 컨텐츠입니다. 그리고, 자손 요소로 구문 컨텐츠만 있다면 구문 컨텐츠에 속합니다.</li>
		<li>a 요소는 두 군데에 위치할 수 있습니다.
			<ul>
			<li>자식 요소에 구문 컨텐츠만 있으면 구문 컨텐츠의 위치에 올 수 있습니다.</li>
			<li>자식 요소에 구문 컨텐츠를 포함하지 않으면 플로우 컨텐츠의 위치에 올 수 있습니다.</li>
			</ul>
		</li>
		<li>자식 요소에 투명한 요소가 있으면 대화형 컨텐츠는 포함할 수 없습니다.</li>
		</ul>
	</section>
	<!-- //콘텐츠 분류 타입 -->
	<!-- 참조 -->
	<section id="memo">
		<h3 class="blind">참조</h3>
		<ul>
		<li>방문하지 않은 링크는 파란색 밑줄(underline)<br>방문한 링크는 보라색 밑줄(underline)<br>활성화된 링크는 빨간색 밑줄(underline)</li>
		<li><a href="#" title="html5:attribute:media_hyperlink">media 속성</a>, <a href="#" title="html5:attribute:type_hyperlink">type 속성</a>은 HTML5에서 추가된 속성입니다.</li>
		<li>charset 속성, coords 속성, name 속성, rev 속성, shape 속성은 폐기된 속성입니다.</li>
		<li>HTML5에서는 <a href="#" title="html5:attribute:href_hyperlink">href 속성</a>을 생략된 형태로 사용할 수 있습니다.</li>
		</ul>
	</section>
	<!--//참조 -->
	<!-- 관련 요소 레벨 -->
	<section id="related">
		<h3 class="blind">관련 요소 레벨</h3>
		<a href="#">a 요소</a>,
		<a href="#">button 요소</a>,
		<a href="#">details 요소</a>,
		<a href="#">input 요소</a>,
		<a href="#">keygen 요소</a>,
		<a href="#">label 요소</a>,
		<a href="#">menu 요소</a>,
		<a href="#">select 요소</a>,
		<a href="#">textarea 요소</a>
	</section>
	<!--//관련 요소 레벨 -->
	<!-- 지원 브라우저 -->
	<section id="browser">
		<h3 class="blind">지원 브라우저</h3>
		<p>
			<img src="ext/resources/css/images/custom/ico_support_ie6.png" width="25" height="25" alt="IE6 지원">
			<img src="ext/resources/css/images/custom/ico_support_ie7.png" width="25" height="25" alt="IE7 지원">
			<img src="ext/resources/css/images/custom/ico_support_ie8.png" width="25" height="25" alt="IE8 지원">
			<img src="ext/resources/css/images/custom/ico_support_ie9.png" width="25" height="25" alt="IE9 지원">
			<img src="ext/resources/css/images/custom/ico_support_ie10.png" width="25" height="25" alt="IE10 지원">
			<img src="ext/resources/css/images/custom/ico_support_chrome.png" width="25" height="25" alt="Chrome 지원">
			<img src="ext/resources/css/images/custom/ico_support_firefox.png" width="25" height="25" alt="Firefox 지원">
			<img src="ext/resources/css/images/custom/ico_support_opera.png" width="25" height="25" alt="Opera 지원">
			<img src="ext/resources/css/images/custom/ico_support_safari.png" width="25" height="25" alt="Safari 지원">
		</p>
		<em>모든 주요 브라우저에서 지원 합니다.</em>
	</section>
	<!-- //지원 브라우저 -->
</article>
</body>
</html>