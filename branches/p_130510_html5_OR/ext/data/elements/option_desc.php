<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>option 요소 상세설명 : HTML5 Open Reference Guide</title>
<link rel="stylesheet" href="../../resources/css/base.css">
</head>
<body>
<article>
	<!-- 스펙 명세 -->
	<section id="refer">
		<h3 class="blind">스펙 명세</h3>
		<dl>
		<dt class="first">[요소가 속하는 범주]</dt>
		<dd>
			<ul>
			<li>없음</li>
			</ul>
		</dd>
		<dt>[이 사용될 수 있는요소가 문맥]</dt>
		<dd>select 요소의 자식 요소</dd>
		<dd>datalist 요소의 자식 요소</dd>
		<dd>optgroup 요소의 자식 요소</dd>
		<dt>[이 요소가 포함할 수 있는 것]</dt>
		<dd>텍스트</dd>
		<dt>[요소에 사용할 수 있는 속성]</dt>
		<dd>
			<ul>
			<li>Global attributes</li>
			<li>disabled</li>
			<li>label</li>
			<li>selected</li>
			<li>value</li>
			</ul>
		</dd>
		<dt>[DOM 인터페이스]</dt>
		<dd>
			<pre>
[NamedConstructor=Option(),
 NamedConstructor=Option(in DOMString text),
 NamedConstructor=Option(in DOMString text, in DOMString value),
 NamedConstructor=Option(in DOMString text, in DOMString value, in boolean defaultSelected),
 NamedConstructor=Option(in DOMString text, in DOMString value, in boolean defaultSelected, in boolean selected)]
interface HTMLOptionElement : HTMLElement {
           attribute boolean disabled;
  readonly attribute HTMLFormElement form;
           attribute DOMString label;
           attribute boolean defaultSelected;
           attribute boolean selected;
           attribute DOMString value;

           attribute DOMString text;
  readonly attribute long index;
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
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#flow-content-0" target="_blank"><ellipse cx="150" cy="100" rx="130" ry="80" class="cate_flow on" title="Flow"></ellipse><text x="140" y="40">Flow</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#interactive-content-0" target="_blank"><ellipse cx="85" cy="80" rx="50" ry="30" class="cate_interactive" title="Interactive"></ellipse><text x="55" y="80">Interactive</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#metadata-content-0" target="_blank"><ellipse cx="80" cy="150" rx="60" ry="30" class="cate_metadata" title="Metadata"></ellipse><text x="55" y="155">Metadata</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#phrasing-content-0" target="_blank"><ellipse cx="120" cy="100" rx="50" ry="50" class="cate_phrasing" title="Phrasing"></ellipse><text x="100" y="75">Phrasing</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#embedded-content-0" target="_blank"><ellipse cx="120" cy="100" rx="40" ry="20" class="cate_embedded" title="Embedded"></ellipse><text x="97" y="102">Embedded</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#heading-content-0" target="_blank"><ellipse cx="220" cy="75" rx="40" ry="20" class="cate_heading" title="Heading"></ellipse><text x="203" y="78">Heading</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#sectioning-content-0" target="_blank"><ellipse cx="220" cy="125" rx="40" ry="20" class="cate_sectioning" title="Sectioning"></ellipse><text x="195" y="127">Sectioning</text></a>
		</svg>

		<ul>
		<li>select 요소, datalist 요소, optgroup 요소의 자식 요소로 사용되며 텍스트를 포함할 수 있습니다.</li>
		</ul>
	</section>
	<!-- //콘텐츠 분류 타입 -->
	<!-- 참조 -->
	<section id="memo">
		<h3 class="blind">참조</h3>
		<ul>
		<li>HTML5에서 추가된 요소입니다.</li>
		</ul>
	</section>
	<!--//참조 -->
	<!-- 관련 요소 레벨 -->
	<section id="related">
		<h3 class="blind">관련 요소 레벨</h3>
		<a href="#">form 요소</a>,
		<a href="#">fieldset 요소</a>,
		<a href="#">legend 요소</a>,
		<a href="#">datalist 요소</a>,
		<a href="#">optgroup 요소</a>,
		<a href="#">option 요소</a>,
		<a href="#">output 요소</a>,
		<a href="#">progress 요소</a>,
		<a href="#">meter 요소</a>
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