<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>HTML Convention : <?php echo TITLE_CONVENTION_HTML; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- HTML 가이드 -->
	<section>
		<h1 class="s_tit">HTML Convention</h1>
		<div id="docSummary" class="idx_summary">
			<div class="inner" style="display:none">
				<h2 class="blind">마크업 컨벤션 색인</h2>
				<ul>
				<li><a href="#summary1" rel="bookmark">마크업 코드 기본 규칙</a></li>
				<li><a href="#summary2" rel="bookmark">들여쓰기</a></li>
				<li><a href="#summary3" rel="bookmark">빈 줄</a></li>
				<li><a href="#summary4" rel="bookmark">DTD 및 인코딩</a></li>
				<li><a href="#summary5" rel="bookmark">Attribute 우선순위</a></li>
				<li><a href="#summary6" rel="bookmark">HTML 요소</a></li>
				<li><a href="#summary7" rel="bookmark">HEAD 요소</a></li>
				<li><a href="#summary8" rel="bookmark">META 요소</a></li>
				<li><a href="#summary9" rel="bookmark">TITLE 요소</a></li>
				<li><a href="#summary10" rel="bookmark">LINK 요소</a></li>
				<li><a href="#summary11" rel="bookmark">SCRIPT 요소</a></li>
				<li><a href="#summary12" rel="bookmark">STYLE 요소</a></li>
				<li><a href="#summary13" rel="bookmark">BODY 요소</a></li>
				<li><a href="#summary14" rel="bookmark">H1~H6 요소</a></li>
				<li><a href="#summary15" rel="bookmark">FORM 요소</a></li>
				<li><a href="#summary16" rel="bookmark">FIELDSET 요소</a></li>
				<li><a href="#summary17" rel="bookmark">LEGEND 요소</a></li>
				<li><a href="#summary18" rel="bookmark">INPUT 요소</a></li>
				<li><a href="#summary19" rel="bookmark">SELECT 요소</a></li>
				<li><a href="#summary20" rel="bookmark">LABEL 요소</a></li>
				<li><a href="#summary21" rel="bookmark">TEXTAREA 요소</a></li>
				<li><a href="#summary22" rel="bookmark">BUTTON 요소</a></li>
				<li><a href="#summary23" rel="bookmark">TABLE 요소</a></li>
				<li><a href="#summary24" rel="bookmark">CAPTION 요소</a></li>
				<li><a href="#summary25" rel="bookmark">COLGROUP 요소</a></li>
				<li><a href="#summary26" rel="bookmark">COL 요소</a></li>
				<li><a href="#summary27" rel="bookmark">THEAD 요소</a></li>
				<li><a href="#summary28" rel="bookmark">TFOOT 요소</a></li>
				<li><a href="#summary29" rel="bookmark">TH 요소</a></li>
				<li><a href="#summary30" rel="bookmark">TBODY 요소</a></li>
				<li><a href="#summary31" rel="bookmark">A 요소</a></li>
				<li><a href="#summary32" rel="bookmark">IFRAME 요소</a></li>
				<li><a href="#summary33" rel="bookmark">IMG 요소</a></li>
				<li><a href="#summary34" rel="bookmark">MAP 요소</a></li>
				<li><a href="#summary35" rel="bookmark">AREA 요소</a></li>
				<li><a href="#summary36" rel="bookmark">주석 표기</a></li>
				<li><a href="#summary37" rel="bookmark">레이아웃 가이드</a></li>
				<li><a href="#summary38" rel="bookmark">기타 참고사항</a></li>
				</ul>
				<a href="#none" data-btn="smr" class="btn_lst clse">목차닫기</a>
			</div>
			<a href="#none" data-btn="smr" class="btn_lst open">목차보기</a>
		</div>

		<dl class="definition">
		<dt>HTML 코드 작성 규칙</dt>
		<dd>HTML 코드의 기본 작성 규칙과 들여쓰기, 빈 줄 사용, DTD 및 인코딩 선언 방법, HTML 요소 작성 방법, 주석 작성 방법을 설명한다.</dd>
		</dl>
	</section>
	<!-- //HTML 가이드 -->
	<!-- 마크업 기본 규칙 -->
	<section id="summary1">
		<h3 class="s_tit">마크업 코드 기본 규칙</h3>
		<p class="panel info">HTML 코드를 작성할 때 다음과 같은 기본 규칙을 준수한다.</p>

		<h4 class="tit_cont">W3C Validation</h4>
		<p>HTML은 해당 DTD의 명세에 맞게 작성하며, W3C Validation을 통과해야 한다. 단, HTML5 DTD 선언 시 다음 오류 내용은 허용한다.</p>
		<ul class="lst_type">
		<li>&lt;iframe&gt; 의 frameborder 속성</li>
		<li>&lt;iframe&gt;의 이슈의 관한 자세한 사항은 <a href="<?php echo BLOG_PATH; ?>archives/829" target="_blank">참조 문서</a>에서 확인할 수 있다.</li>
		</ul>

		<h4 class="tit_cont">영문 소문자 사용</h4>
		<p>DTD를 제외한 모든 요소와 속성은 소문자로 작성한다.</p>
		<table class="tb_grid">
		<caption>[ 소문자 작성 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>&lt;SPAN Class="desc"&gt;간단한 설명&lt;/SPAN&gt;</td>
		<td>&lt;span class="desc"&gt;간단한 설명&lt;/span&gt;</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">속성값 표기</h4>
		<p>속성값은 큰 따움표(&#34; &#34;)로 묶는다.</p>
		<table class="tb_grid">
		<caption>[ 속성값 표기 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>&lt;img src='test.gif' width='100' height='100' alt='테스트'&gt;</td>
		<td>&lt;img src="test.gif" width="100" height="100" alt="테스트"&gt;</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">엔티티 코드 사용</h4>
		<p>특수 기호는 엔티티 이름(entity name)을 사용해서 엔티티 코드(entity code)로 변환한다. 엔티티 번호(entity number)는 사용하지 않는다. 단, 아포스트로피(&#39;)는 엔티티 번호인 &#39;로 선언한다.</p>
		<ul class="lst_type">
		<li>엔티티 코드는 ISO-8859-1을 기준으로 하며, 특수기호 엔티티 코드 종류는 <a href="<?php echo BLOG_PATH; ?>archives/703" target="_blank">참조 문서</a>에서 확인할 수 있다.</li>
		</ul>
		<table class="tb_grid">
		<caption>[ 엔티티 코드 사용 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>&lt;a href="...&nid=2"&gt;</td>
		<td>&lt;a href="...&amp;amp;nid=2"&gt;</td>
		</tr>
		</tbody>
		</table>
		<p class="panel alert">
			<strong>참고:</strong>
			&lt;, &gt;, &#39;, &#34;, &amp; 등의 특수기호를 엔티티 코드로 변환하지 않으면 브라우저가 이를 시작 &fral;종료 태그나 속성으로 잘못 해석할 수 있다. 자동으로 생성되는 링크의 경로나 이미지의 alt값에도 엔티티 코드가 바르게 적용되게 한다.
		</p>
	</section>
	<!-- //마크업 기본 규칙 -->
	<!-- 들여쓰기 -->
	<section id="summary2">
		<h3 class="s_tit">들여쓰기</h3>
		<p class="panel info">코드의 가독성을 높이고 HTML 구조를 쉽게 파악하기 위하여 마크업 중첩이 깊어질때 마다 들여쓰기를 사용하며 탭 1개의 크기는 공백 4칸으로 설정한다.</p>
		<p class="panel alert">마크업의 깊이가 깊어질 때마다 탭 1개만큼 들여쓰지만 다음의 경우 들여쓰지 않는다.</p>
		<ul class="lst_type">
		<li>&lt;html&gt; 엘리먼트 의 자식 요소인 &lt;head&gt; 엘리먼트, &lt;body&gt; 엘리먼트</li>
		<li>&lt;head&gt; 엘리먼트의 자식 요소</li>
		<li>&lt;body&gt; 엘리먼트의 자식 요소</li>
		<li>&lt;table&gt; 엘리먼트의 자식 요소인 &lt;caption&gt;, &lt;colgroup&gt;, &lt;col&gt;, &lt;thead&gt;, &lt;tbody&gt;, &lt;tfoot&gt;, &lt;tr&gt;, &lt;th&gt;, &lt;td&gt; 엘리먼트</li>
		<li>&lt;ul&gt;, &lt;ol&gt;, &lt;dl&gt; 엘리먼트 자식 요소인 &lt;li&gt;, &lt;dt&gt;, &lt;dd&gt; 엘리먼트</li>
		</ul>
		<table class="tb_grid">
		<caption>[ 들여쓰기 사용 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>
			&lt;table&gt;<br>
			&lt;caption&gt;...&lt;/caption&gt;<br>
			&lt;colgroup&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;col&gt;<br>
			&lt;/colgroup&gt;<br>
			&lt;thead&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt...&lt;/th&gt<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt<br>
			&lt;/thead&gt;<br>
			&lt;tbody&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt...&lt;/td&gt<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt<br>
			&lt;/tbody&gt;<br>
			&lt;/table&gt;
		</td>
		<td>
			&lt;table&gt;<br>
			&lt;caption&gt;...&lt;/caption&gt;<br>
			&lt;colgroup&gt;<br>
			&lt;col&gt;<br>
			&lt;/colgroup&gt;<br>
			&lt;thead&gt;<br>
			&lt;tr&gt<br>
			&lt;th&gt...&lt;/th&gt<br>
			&lt;/tr&gt<br>
			&lt;/thead&gt;<br>
			&lt;tbody&gt;<br>
			&lt;tr&gt<br>
			&lt;td&gt...&lt;/td&gt<br>
			&lt;/tr&gt<br>
			&lt;/tbody&gt;<br>
			&lt;/table&gt;
		</td>
		</tr>
		<tr>
		<td>
			&lt;ol&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt...&lt;/li&gt<br>
			&lt;/ol&gt;
		</td>
		<td>
			&lt;ol&gt;<br>
			&lt;li&gt...&lt;/li&gt<br>
			&lt;/ol&gt;
		</td>
		</tr>
		<tr>
		<td>
			&lt;ul&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt...&lt;/li&gt<br>
			&lt;/ul&gt;
		</td>
		<td>
			&lt;ul&gt;<br>
			&lt;li&gt...&lt;/li&gt<br>
			&lt;/ul&gt;
		</td>
		</tr>
		<tr>
		<td>
			&lt;dl&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;dt&gt...&lt;/dt&gt<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;dd&gt...&lt;/dd&gt<br>
			&lt;/dl&gt;
		</td>
		<td>
			&lt;dl&gt;<br>
			&lt;dt&gt...&lt;/dt&gt<br>
			&lt;dd&gt...&lt;/dd&gt<br>
			&lt;/dl&gt;
		</td>
		</tr>
		<tr>
		<td colspan="2">
			<strong>[참고] 드림위버와 에디터플러스에서 탭 간격 설정하는 방법</strong>
			<dl class="category v2">
			<dt>드림위버:</dt>
			<dd>Preference &gt Category &gt Code Format &gt Indent &amp; Tab Size &gt Indent width 1 Tabs, Tab size 4</dd>
			<dt>에디터플러스:</dt>
			<dd>Tools &gt Preference &gt Categories &gt Files &gt Settings and syntax &amp; Tab&frasl;Indent</dd>
			</dl>
		</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //들여쓰기 -->
	<!-- //빈 줄 -->
	<section id="summary3">
		<h3 class="s_tit">빈 줄</h3>
		<p class="panel info">의미 있는 객체를 구분하기 위해 코드 그룹 사이에 1줄씩 빈 줄을 만드는 것은 허용한다. 단, 빈 줄 사용 시 간격은 1줄을 넘기지 않는다.</p>
		<table class="tb_grid">
		<caption>[ 빈 줄 사용 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>
			&lt;head&gt;<br>
			내용...<br>
			&lt;/head&gt;<br>
			빈 줄<br>
			빈 줄<br>
			&lt;body&gt;<br>
			내용...<br>
			&lt;/body&gt;
		</td>
		<td>
			&lt;head&gt;<br>
			내용...<br>
			&lt;/head&gt;<br>
			빈 줄<br>
			&lt;body&gt;<br>
			내용...<br>
			&lt;/body&gt;
		</td>
		</tr>
		<tr>
		<td colspan="2">빈 줄을 사용하는 것은 필수 사항이 아닌 선택 사항이다.</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //빈 줄 -->
	<!-- DTD 및 인코딩 -->
	<section id="summary4">
		<h3 class="s_tit">DTD 및 인코딩</h3>
		<dl class="definition">
		<dt>DOCTYPE</dt>
		<dd>문서타입에 (X)HTML의 버전과 문서형을 지정하는데, 신규 HTML 문서를 작성할 때는 기본 DTD로 HTML 4.01, 하위 브라우져 호환성을 위해 Transitional 모드를 사용 한다.(Transition 모드를 사용하더라도, 웹표준 준수율의 향상을 위해 가급적 Strict 모드의 문법을 사용하는 것을 권장함.) HTML4.01 Transitional DTD를 사용하는 이유는 다음과 같다.</dd>
		<dd>
			<ul>
			<li>XHTML만큼 표현 규칙에 맞는(well-formed) 언어다.</li>
			<li>XHTML을 사용하면 HTML 기준으로 작성된 PC 환경의 자바스크립트 라이브러리와 호환되지 않는다.</li>
			<li>XHTML에서 <abbr title="Vector Markup Language">VML</abbr>이 바르세 표현되지 않는다.</li>
			<li>XHTML의 이슈의 관한 자세한 사항은 <a href="<?php echo BLOG_PATH; ?>archives/1352" target="_blank">참조 문서</a>에서 확인할 수 있다.</li>
			</ul>
		</dd>
		</dl>

		<h4 class="tit_cont">DTD 선언</h4>
		<p class="panel info">HTML 문서는 반드시 DTD를 선언한다.</p>

		<h4 class="tit_cont">기본 DTD</h4>
		<dl class="category">
		<dt>HTML (권장)</dt>
		<dd><pre class="brush:html">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"&gt;</pre></dd>
		<dt>XHTML</dt>
		<dd><pre class="brush:html">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;</pre></dd>
		<dt>HTML5</dt>
		<dd><pre class="brush:html">&lt;!DOCTYPE html&gt;</pre></dd>
		</dl>

		<h4 class="tit_cont">DTD 종류</h4>
		<dl class="category">
		<dt>HTML Strict</dt>
		<dd><pre class="brush:html">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"&gt;</pre></dd>
		<dt>HTML Transitional</dt>
		<dd><pre class="brush:html">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"&gt;</pre></dd>
		<dt>HTML Frameset</dt>
		<dd><pre class="brush:html">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"&gt;</pre></dd>
		<dt>XHTML Strict</dt>
		<dd><pre class="brush:html">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;</pre></dd>
		<dt>XHTML Transitional</dt>
		<dd><pre class="brush:html">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;</pre></dd>
		<dt>XHTML Frameset</dt>
		<dd><pre class="brush:html">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd"&gt;</pre></dd>
		<dt>HTML5</dt>
		<dd><pre class="brush:html">&lt;!DOCTYPE html&gt;</pre></dd>
		</dl>

		<table class="tb_grid">
		<caption>[ DTD 형식 ]</caption>
		<thead>
		<tr>
		<th scope="col">DTD</th>
		<th scope="col">설명</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>&lt;!DOCTYPE</td>
		<td>현재문서는</td>
		</tr>
		<tr>
		<td>html</td>
		<td>일반적으로 html이나 xhtml으로, 최상위 엘리먼트는 html이므로 html로 작성</td>
		</tr>
		<tr>
		<td>PUBLIC</td>
		<td>PUBLIC 또는 SYSTEM 을 설정, PUBLIC(국제적 공용문서) &frasl; SYSTEM(내부적, 제한적 문서)</td>
		</tr>
		<tr>
		<td>&#34;-//W3C//DTD XHTML 1.0 Transitional//EN&#34;</td>
		<td>비공인 인증인 W3C기관에 의해 XHTML1.0을 transitional 방식의 영어 공용어를 출력하며</td>
		</tr>
		<tr>
		<td>&#34;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&#34;&gt;</td>
		<td>참조할 DTD문서는 http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd 이다.</td>
		</tr>
		<tr>
		<td colspan="2">
			<dl class="category v2">
			<dt>Strict</dt>
			<dd>선언된 (x)HTML 버전의 문법과 구조를 정확하게 사용한다. 지원하지 않는 엘리먼트를 사용해서는 안된다.</dd>
			<dt>Transitional</dt>
			<dd>과도기적으로 사용하기 위한 선언으로, strict보다 유연하다. 선언된 버전 이외의 문법과 구조를 허용한다.</dd>
			<dt>Frameset</dt>
			<dd>Transitional 속성과 더불어, frameset(iframe, frame)을 지원한다.</dd>
			<dd><strong>※ frameset은 문서의 구조에 관한 엘리먼트이기 떄문에, transitional에서 frameset을 사용해도 화면표시가 일어난다. 따라서, 사실상 frameset은 transitional과 동일하게 취급된다.</strong></dd>
			</dl>
		</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">Strict DTD 사라진 엘리먼트</h4>
		<p class="panel info">center, font, iframe, strike, u와 같은 엘리먼트의 사용이 엄격형에서 사용하지 말아야할 것이다.</p>
		<table class="tb_grid">
		<caption>[ Strict DTD 금기 사항 ]</caption>
		<thead>
		<tr>
		<th scope="col">엘리먼트</th>
		<th scope="col">금기사항</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>a</td>
		<td>다른 a 엘리먼트들을 포함 할 수 없다.</td>
		</tr>
		<tr>
		<td>pre</td>
		<td>img, object, big, small, sub 또는 sup 엘리먼트들을 포함 할 수 없다.</td>
		</tr>
		<tr>
		<td>button</td>
		<td>input, select, textarea, label, button, form, fieldset, iframe 또는 isindex 엘리먼트들을 포함 할 수 없다.</td>
		</tr>
		<tr>
		<td>label</td>
		<td>다른 label 엘리먼트들을 포함 할 수 없다.</td>
		</tr>
		<tr>
		<td>form</td>
		<td>다른 form엘리먼트들을 포함 할 수 없고, input 엘리먼트를 직접 사용할 수 없고, 반드시 div,p 엘리먼트와 같은 블록 레벨 요소로 감싸주어야 한다.</td>
		</tr>
		<tr>
		<td>body</td>
		<td>text&frasl;img를 직접 사용할 수 없고, 반드시 div,p 엘리먼트와 같은 블록 레벨 요소로 감싸주어야 한다.</td>
		</tr>
		<tr>
		<td>blockquote</td>
		<td>text는 div,p 엘리먼트와 같은 블록 레벨 요소로 감싸주어야 한다.</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">Strict DTD 사라진 속성</h4>
		<pre class="brush:html">
			align : tabel 관련 태그에서만 허용됨(col, colgroup, tbody, td, tfoot, th, thead, tr).
			language
			background
			bgcolor
			border : table 태그에서만 허용됨.
			height : img, object 태그에서만 허용됨.
			hspace
			name : HTML 4.01 Strict에서는 허용되고, XHTML 1.0 Strict에서는 form, image 태그를 제외하고 허용됨.
			noshade
			nowrap
			target
			text, link, vlink, alink
			vspace
			width : img, object, table, col, colgroup 태그에서만 허용됨.
		</pre>

		<h4 class="tit_cont">Strict DTD 필수 속성</h4>
		<pre class="brush:html">
			&lt;map name="CDATA"&gt;
			&lt;area alt="%Text;"&gt;
			&lt;img src="%URI;" alt="%Text;"&gt;
			&lt;param name="CDATA"&gt;
			&lt;form action="%URI;"&gt;
			&lt;optgroup label="%Text;"&gt;
			&lt;textarea rows="NUMBER" cols="NUMBER"&gt;
			&lt;base href="%URI;"&gt;
			&lt;meta contect="CDATA"&gt;
			&lt;style type="%ContentType;"&gt;
			&lt;script type="%ContentType;"&gt;
			&lt;applet width="%Length;" height="%Length;"&gt;
		</pre>

		<div class="panel alert">
			<strong>주의</strong>
			<p>다음과 같은 경우 DTD 설정별 표준 문법으로 작성하더라도 브라우저에서 쿼크 모드로 인식해서 바르게 해석되지 않으므로 주의한다.</p>
			<dl class="category">
			<dt>DTD가 선언되지 않은 경우(html 태그로 문서 시작)</dt>
			<dd><pre class="brush:html">&lt;html&gt;</pre></dd>
			<dt>선언한 DTD 앞에 다른 문자가 오는 경우</dt>
			<dd>
				<pre class="brush:html">
					<!-- //html 문서 시작 -->
					&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"&gt;
				</pre>
			</dd>
			</dl>
		</div>

		<h4 class="tit_cont">DTD 적용시 예외</h4>
		<p class="panel info">모든 HTML문서는 반드시 DTD를 선언하여야 하지만 아래의 경우 예외 사항으로 Quirks Mode 를 사용한다.</p>
		<dl class="category">
		<dt>DTD가 없는 서비스에 들어가는 문서인 경우</dt>
		<dd><pre class="brush:html">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"&gt;</pre></dd>
		</dl>
		<p class="panel alert">
			<strong>Quirks Mode 사용시 문제점:</strong>
			CSS Box model상에서 브라우저간 맞지 않는 문제가 있다.
		</p>

		<h4 class="tit_cont">인코딩 선언</h4>
		<p class="panel info">HTML 문서는 반드시 인코딩 정보를 선언한다. 인코딩 설정은 <abbr title="Data Base">DB</abbr>의 인코딩 방식과도 관련이 있으므로 반드시 담당 개발자와 협의해서 정해야 한다.</p>

		<h4 class="tit_cont">기본 인코딩</h4>
		<p>신규 HTML 문서를 작성할 때 기본 인코딩으로 UTF-8을 사용한다. UTF-8은 다국어 지원이 가능하며, EUC-KR보다 표현 가능한 한글(고어, 음절 등)이 더 많다.</p>
		<dl class="category">
		<dt>(X)HTML 인코딩 선언</dt>
		<dd><pre class="brush:html">&lt;meta http-equiv="Content-Type" content="text/html;charset=utf-8"&gt;</pre></dd>
		<dt>HTML5 인코딩 선언</dt>
		<dd><pre class="brush:html">&lt;meta charset="utf-8"&gt;</pre></dd>
		</dl>
		<div class="panel alert">
			<strong>참고:</strong>
			UTF-8은 다음과 같은 특징이 있다.
			<ul class="lst_type">
			<li>한글은 UTF-8에서 3바이트, EUC-KR에서 2바이트를 차지하므로 인코딩을 UTF-8로 지정하면 DB 저장 용량이나 트래픽이 커진다.</li>
			<li>인터넷 익스플로러7 이상의 버전에서는 링크의 밑줄이 글자와 붙어 보이는 현상이 있다.</li>
			</ul>
		</div>

		<h4 class="tit_cont">기타 인코딩</h4>
		<p>UTF-8 인코딩을 사용할 수 없으면 EUC-KR을 사용한다.</p>
		<pre class="brush:html">&lt;meta http-equiv="Content-Type" content="text/html;charset=euc-kr"&gt;</pre>
		<p class="panel alert">HTML, CSS 파일을 저장할 때 반드시 설정한 인코딩을 선택해서 저장한다.</p>
	</section>
	<!-- //DTD 및 인코딩 -->
	<!-- ATTRIBUTE 우선순위 -->
	<section id="summary5">
		<h3 class="s_tit">Attribute 우선순위</h3>
		<p class="panel info">일관성있는 코드를 작성하기 위해 속성 선언시 정해진 우선순위의 규칙을 준수한다.</p>

		<h4 class="tit_cont">Attribute 작성</h4>
		<p>Attribute 값은 큰따옴표(&#34; &#34;)로 묶는다.</p>

		<h4 class="tit_cont">Attribute 우선순위</h4>
		<p>Attribute의 우선 순위는 다음 순위를 따른다.</p>
		<table class="tb_grid">
		<caption>[ 요소 속성 우선순위 목록 ]</caption>
		<thead>
		<tr>
		<th scope="col">우선순위</th>
		<th scope="col">속성</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>1</td>
		<td>rel</td>
		</tr>
		<tr>
		<td>2</td>
		<td>type</td>
		</tr>
		<tr>
		<td>3</td>
		<td>href, src</td>
		</tr>
		<tr>
		<td>4</td>
		<td>width, height</td>
		</tr>
		<tr>
		<td>5</td>
		<td>name</td>
		</tr>
		<tr>
		<td>6</td>
		<td>id</td>
		</tr>
		<tr>
		<td>7</td>
		<td>target</td>
		</tr>
		<tr>
		<td>8</td>
		<td>title, alt, value</td>
		</tr>
		<tr>
		<td>9</td>
		<td>기타 속성</td>
		</tr>
		<tr>
		<td>10</td>
		<td>class</td>
		</tr>
		<tr>
		<td>11</td>
		<td>style</td>
		</tr>
		</tbody>
		</table>

		<p>특정 요소에 class와 style을 선언할 때는 선언 순서를 제일 뒷부분에 선언한다.</p>
		<pre class="brush:html">
			&lt;a href="#" id="linkId" target="_blank" title="링크가기" class="link" style="display:block"&gt;링크&lt;/a&gt;
			&lt;img src="@이미지파일" width="100" height="100" id="imgId" title="이미지툴팁" alt="이미지내용" class="img" style="display:block"&gt;
			&lt;input type="text" name="tfname" id="tfId" title="입력창" size="10" maxlength="5" class="tf" style="width:100px"&gt;
		</pre>
	</section>
	<!-- //ATTRIBUTE 우선순위 -->
	<!-- HTML 요소 -->
	<section id="summary6">
		<h3 class="s_tit">html</h3>
		<p class="panel info">lang 속성은 휴먼랭귀지로 User Agent가 언어를 올바로 해석할 수 있게 도와주며, 검색과 음성장치(speech synthesizers)에 활용된다. 언어 코드는 모든 요소에 사용할 수 있지만 HTML 요소에 해당 문서의 주 언어 코드만 선언한다.</p>
		<p>다음과 같이 lang 속성을 선언한다. class 속성은 선언하지 않는다.</p>
		<dl class="category">
		<dt>HTML 경우</dt>
		<dd><pre class="brush:html">&lt;html lang="ko"&gt;</pre></dd>
		<dt>XHTML 경우</dt>
		<dd><pre class="brush:html">&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko"&gt;</pre></dd>
		</dl>
		<p>자주 사용하는 국가코드는 ko(한국어), en(영어), ja(일본어), zh-cn(중국어)이다.</p>
	</section>
	<!-- //HTML 요소 -->
	<!-- HEAD 요소 -->
	<section id="summary7">
		<h3 class="s_tit">head</h3>
		<p class="panel info">meta, title, link, script, style 순서로 요소를 선언한다.</p>
		<dl class="category">
		<dt>HTML 경우</dt>
		<dd>
			<pre class="brush:html">
				&lt;head&gt;
				&lt;meta http-equiv="Content-Type" content="text/html;charset=utf-8"&gt;
				&lt;title&gt;타이틀&lt;/title&gt;
				&lt;link rel="stylesheet" type="text/css" href="@CSS파일 문서경로"&gt;
				&lt;script type="text/javascript" src="@JS파일 문서경로"&gt;&lt;/script&gt;
				&lt;/style type="text/css"&gt;
				[stuff]
				&lt;/style&gt;
				&lt;/head&gt;
			</pre>
		</dd>
		<dt>HTML5 경우</dt>
		<dd>
			<pre class="brush:html">
				&lt;head&gt;
				&lt;meta charset="utf-8"&gt;
				&lt;title&gt;타이틀&lt;/title&gt;
				&lt;link rel="stylesheet" href="@CSS파일 문서경로"&gt;
				&lt;script src="@JS파일 문서경로"&gt;&lt;/script&gt;
				&lt;/style&gt;
				[stuff]
				&lt;/style&gt;
				&lt;/head&gt;
			</pre>
		</dd>
		</dl>
	</section>
	<!-- //HEAD 요소 -->
	<!-- META 요소 -->
	<section id="summary8">
		<h3 class="s_tit">meta</h3>
		<p class="panel info">문서의 기본 인코딩, 뷰포트, 스크립트 형식, 스타일 형식 순으로 요소를 선언한다. 뷰포트는 모바일 브라우저에 대응하는 HTML의 경우에만 선언한다.</p>
		<ul class="lst_type">
		<li>검색 엔진 최적화를 위하여 meta 요소를 이용하여 문서 제목을 추가 명시한다.</li>
		<li>컨텐츠 상세 페이지에서는 컨텐츠 제목 만을 표기한다.</li>
		<li>서비스홈에서는 서비스명 만을 표기, 서브 섹션홈에서는 하위섹션명 : 서비스명 을 표기한다.</li>
		<li>컨텐츠 제목의 특수기호가 들어갈시 엔티티코드로 변환가능한 기호는 반드시 escape 되어야 한다.</li>
		</ul>
		<pre class="brush:html">
			&lt;meta http-equiv="Content-Type" content="text/html;charset=utf-8"&gt; (필수 사항)
			&lt;meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,target-densitydpi=medium-dpi"&gt; (모바일 대응)
			&lt;meta http-equiv="Content-Script-Type" content="text/javascript"&gt; (선택 사항)
			&lt;meta http-equiv="Content-Style-Type" content="text/css"&gt; (선택 사항)
			&lt;meta name="title" content="Bluewaves"&gt; (선택 사항)
			&lt;meta name="title" content="Web&frasl;Mobile Integration : Bluewaves"&gt; (선택 사항)
			&lt;meta name="title" content="Overview"&gt; (선택 사항)
		</pre>
	</section>
	<!-- //META 요소 -->
	<!-- TITLE 요소 -->
	<section id="summary9">
		<h3 class="s_tit">title</h3>
		<p class="panel info">각 페이지마다 서로 다른 규칙으로 사용중인 문서 제목 (title 요소) 규칙을 일관성 있게 일원화함으로써, 서비스 통일성을 및 검색 엔진에 대한 최적화를 높인다. 또한 문서 제목에 컨텐츠 제목을 포함시킴으로써, 외부 검색서비스에서 해당 컨텐츠의 노출이 더 용이해진다.</p>

		<h4 class="tit_cont">기본 규칙</h4>
		<pre class="brush:html">&lt;title&gt;@컨텐츠 제목 &gt; @하위섹션명 : @서비스명&lt;/title&gt;</pre>

		<h4 class="tit_cont">문서제목 기본 요소</h4>
		<p>문서 제목에 포함되는 기본 요소를 정의한다.</p>

		<dl class="category">
		<dt>@서비스명</dt>
		<dd>
			<ul class="lst_type">
			<li>브랜드 서비스명</li>
			</ul>
		</dd>
		<dt>@컨텐츠 제목</dt>
		<dd>
			<ul class="lst_type">
			<li>서비스에서 제공하는 컨텐츠의 제목</li>
			</ul>
		</dd>
		<dt>@하위 섹션명</dt>
		<dd>
			<ul class="lst_type">
			<li>하나의 서비스내 하위 섹션명 (보통 서비스별 GNB에서 TAB으로 표현되는 구분)</li>
			</ul>
		</dd>
		</dl>

		<h4 class="tit_cont">각 요소별 상세규칙</h4>
		<dl class="category">
		<dt>서비스 명</dt>
		<dd>
			<ul class="lst_type">
			<li>모든 서비스는 문서 제목에 서비스명을 표기하는 것을 원칙으로 한다.</li>
			<li>서비스명은 문서 제목에서 가장 뒷부분에 위치한다.</li>
			</ul>
		</dd>
		<dd>
			<pre class="brush:html">&lt;title&gt;Bluewaves&lt;/title&gt;</pre>
		</dd>
		<dt>컨텐츠 제목</dt>
		<dd>
			<ul class="lst_type">
			<li>하나의 컨텐츠를 대표하는 페이지의 경우, 반드시 해당 컨텐츠 제목을 문서 제목에 표기한다.</li>
			<li>컨텐츠 제목은 문서 제목에서 가장 앞부분에 위치한다.</li>
			<li>컨텐츠 제목과 서비스명 간의 구분자는 반드시 &#39; : &#39; 기호를 사용한다.</li>
			<li>컨텐츠 제목의 특수기호가 들어갈시 엔티티코드로 변환가능한 기호는 반드시 escape 되어야 한다.</li>
			</ul>
		</dd>
		<dd>
			<pre class="brush:html">&lt;title&gt;Web&frasl;Mobile Integration : Bluewaves&lt;/title&gt;</pre>
		</dd>
		<dt>하위 섹션명</dt>
		<dd>
			<ul class="lst_type">
			<li>하위섹션명은 서비스명 앞에 표기한다.</li>
			<li>하위섹션명의 구분자는 &#39; &gt; &#39; (&amp;gt;) 를 사용한다.</li>
			<li>하위섹션명은 필수 요소는 아니다.</li>
			</ul>
		</dd>
		<dd>
			<pre class="brush:html">
				&lt;title&gt;Web&frasl;Mobile Integration &gt; Overview : Bluewaves&lt;/title&gt;
				&lt;title&gt;Web&frasl;Mobile Integration &gt; Web : Bluewaves&lt;/title&gt;
				&lt;title&gt;Web&frasl;Mobile Integration &gt; Mobile : Bluewaves&lt;/title&gt;
			</pre>
		</dd>
		</dl>
	</section>
	<!-- //TITLE 요소 -->
	<!-- LINK 요소 -->
	<section id="summary10">
		<h3 class="s_tit">link</h3>
		<p class="panel info">rel, type, href 순서로 속성을 선언한다.</p>
		<pre class="brush:html">&lt;link rel="stylesheet" type="text/css" href="@CSS파일 문서경로"&gt;</pre>
	</section>
	<!-- //LINK 요소 -->
	<!-- SCRIPT 요소 -->
	<section id="summary11">
		<h3 class="s_tit">script</h3>
		<p class="panel info">type, src 순서로 속성을 선언한다.</p>
		<pre class="brush:html">&lt;script type="text/javascript" src="@JS파일 문서경로"&gt;&lt;/script&gt;</pre>
		<p>script는 &lt;head&gt; 요소 내에 선언하는 것을 원칙으로 한다. 단, 성능 이슈가 있을 시 개발 부서와 협의해서 선언 위치를 변경할 수 있다.</p>
		<p class="panel alert">
			<strong>참고:</strong>
			language 속성은 HTML4 이전 버전의 하위 호환성을 위해 사용하는 비표준 속성이므로 사용하지 않는다.
		</p>
	</section>
	<!-- //SCRIPT 요소 -->
	<!-- STYLE 요소 -->
	<section id="summary12">
		<h3 class="s_tit">style</h3>
		<p class="panel info">type 속성을 선언한다.</p>
		<pre class="brush:html">
			&lt;style type="text/javascript"&gt;
			[stuff]
			&lt;/style&gt;
		</pre>
	</section>
	<!-- //STYLE 요소 -->
	<!-- BODY 요소 -->
	<section id="summary13">
		<h3 class="s_tit">body</h3>
		<p class="panel info">class 속성은 웹 페이지의 스킨셋을 변경해야 할 때 선택적으로 사용한다.</p>
		<pre class="brush:html">&lt;body class="s"&gt;</pre>
	</section>
	<!-- //BODY 요소 -->
	<!-- H1~H6 요소 -->
	<section id="summary14">
		<h3 class="s_tit">H1~H6</h3>
		<p class="panel info">일반 문서를 HTML로 다음과 같은 규칙에 맞게 색인화 한다.</p>
		<ul class="lst_type">
		<li>H1 : 서비스명</li>
		<li>H2 : 메인메뉴, 본문, 이용약관 등</li>
		<li>H3 : 세부 컨텐츠, 핵심 컨텐츠 등</li>
		<li>H4 : 서브 컨텐츠</li>
		<li>H5, H6 : 헤딩요소의 파편화를 불러일으킬 여지가 있으므로 가급적 사용하지 않는다.</li>
		</ul>
		<img src="<?php echo PATH; ?>resources/img/html_guide_index.png" width="270" height="360" alt="색인화 예시 화면">
	</section>
	<!-- //H1~H6 요소 -->
	<!-- FORM 요소 -->
	<section id="summary15">
		<h3 class="s_tit">form</h3>
		<p class="panel info">폼 컨트롤 요소를 작성할 떄 form, fieldset, legend 요소를 다음과 같이 선언한다. 단, 필요에 따라 개별적으로 사용할 수 있다.</p>
		<pre class="brush:html">
			&lt;form action=""&gt;
			&lt;fieldset&gt;
			&lt;legend&gt;@타이틀&lt;/legend&gt;
				[form control element here]
			&lt;/fieldset&gt;
			&lt;/form&gt;
		</pre>
		<p class="panel alert">
			<strong>참고:</strong>
			form 요소는 마크업시 기본적으로 사용 하지 않는다. 만약 form 요소를 넣어야 할 경우 action 속성은 서버 쪽 폼 핸들러이나 필수 선언 속성이므로 마크업 단계에서 선언 한다.
		</p>
	</section>
	<!-- //FORM 요소 -->
	<!-- FIELDSET 요소 -->
	<section id="summary16">
		<h3 class="s_tit">fieldset</h3>
		<p class="panel info">form 요소의 자식 노드로 선언해서 폼 제어 요소를 그룹으로 나눈다.</p>
		<pre class="brush:html">
			&lt;fieldset&gt;
			&lt;legend&gt;@타이틀&lt;/legend&gt;
				[form control element here]
			&lt;/fieldset&gt;
		</pre>
	</section>
	<!-- //FIELDSET 요소 -->
	<!-- LEGEND 요소 -->
	<section id="summary17">
		<h3 class="s_tit">legend</h3>
		<p class="panel info">폼 제어 그룹인 fieldset의 자식 요소로서 폼 컨트롤 요소의 그룹 이름을 표현하기 위해 선언한다.</p>
		<pre class="brush:html">
			&lt;fieldset&gt;
			&lt;legend&gt;@타이틀&lt;/legend&gt;
				[form control element here]
			&lt;/fieldset&gt;
		</pre>
	</section>
	<!-- //LEGEND 요소 -->
	<!-- INPUT 요소 -->
	<section id="summary18">
		<h3 class="s_tit">input</h3>
		<p class="panel info">label 요소, title 속성, alt 속성을 통해 스크린리더 사용자는 주변 맥락에 대한 이해 없이 각 요소에 독립적으로 접근해도 폼을 이해할수 있다.</p>
		<pre class="brush:html">
			&lt;label for="uid"&gt;아이디&lt;/label&gt; &lt;input type="text" id="uid" name="id"&gt;

			&lt;input type="image" src="@이미지경로" alt="확인"&gt;

			&lt;label for="tel"&gt;유선전화&lt;/label&gt; &lt;input type="text" id="tel" name="tel" title="지역번호"&gt;
		</pre>

		<p>다음과 같이 type 값에 따라 속성을 선언한다.</p>
		<dl class="category">
		<dt>type이 text인 경우: type, id, title, value, accesskey 순서로 속성을 선언한다.</dt>
		<dd><pre class="brush:html">&lt;input type="text" id="uid" title="사용자 ID" value="아이디를 입력하세요." accesskey="l"&gt;</pre>
			<ul>
			<li>동일한 스타일의 텍스트 필드나 너비값이 다르면 style 속성을 이용해 width 값을 제어한다.</li>
			<li>텍스트 필드에 가이드를 위한 내용이 들어가면 value 속성을 선택적으로 사용할 수 있다.</li>
			<li>label 요소 또는 title 속성을 반드시 선언한다.</li>
			</ul>
		</dd>
		<dt>type이 raido, checkbox 경우: type, name, id, checked 순서로 속성을 선언한다.</dt>
		<dd>
			<pre class="brush:html">
				&lt;input type="raido" name="vt_align" id="alignLft" checked="checked"&gt; &lt;label for="alignLft"&gt;왼쪽정렬&lt;/label&gt;
				&lt;input type="raido" name="vt_align" id="alignCnt"&gt;&lt;label for="alignCnt"&gt;가운데정렬&lt;/label&gt;
				&lt;input type="raido" name="vt_align" id="alignRgt"&gt;&lt;label for="alignRgt"&gt;오른쪽정렬&lt;/label&gt;

				&lt;input type="checkbox" name="sports" id="soccer" checked="checked"&gt; &lt;label for="soccer"&gt;축구&lt;/label&gt;
				&lt;input type="checkbox" name="sports" id="basketBall"&gt;&lt;label for="basketBall"&gt;농구&lt;/label&gt;
				&lt;input type="checkbox" name="sports" id="tennis"&gt;&lt;label for="tennis"&gt;테니스&lt;/label&gt;
			</pre>
			<ul>
			<li>필요하면 선택적으로 name 속성을 이용해 항목을 그룹으로 나눈다.</li>
			<li>기본적으로 선택된 값임을 표시하려면 checked=&#34;checked&#34;라고 표기한다.</li>
			<li>label 요소와 반드시 함께 사용하며 title 속성은 선언하지 않는다.</li>
			</ul>
		</dd>
		<dt>type이 image 경우: type, src, alt 순서로 속성을 선언한다. alt 속성은 반드시 선언한다.</dt>
		<dd><pre class="brush:html">&lt;input type="image" src="@이미지경로" alt="확인"&gt;</pre></dd>
		<dt>type이 submit, button, reset인 경우: type 속성을 선언한다. label 요소 또는 title 속성을 선언하지 않는다.</dt>
		<dd><pre class="brush:html">&lt;input type="button"&gt;</pre></dd>
		</dl>
	</section>
	<!-- //INPUT 요소 -->
	<!-- SELECT 요소 -->
	<section id="summary19">
		<h3 class="s_tit">select</h3>
		<p class="panel info">동일한 스타일의 선택 목록이나 너비값이 다르면 선택적으로 style 속성을 이용해 width 값을 제어한다.</p>
		<pre class="brush:html">
			&lt;select style="width:100px"&gt;
			&lt;option&gt;등급&lt;/option&gt;
			&lt;/select&gt;
		</pre>
	</section>
	<!-- //SELECT 요소 -->
	<!-- LABEL 요소 -->
	<section id="summary20">
		<h3 class="s_tit">label</h3>
		<p class="panel info">라디오 버튼, 체크 박스는 for 속성을 부여해 해당 요소의 id 값과 동일한 이름으로(coupling)한다.</p>
		<pre class="brush:html">
			&lt;input type="raido" name="vt_align" id="alignLft"&gt; &lt;label for="alignLft"&gt;왼쪽정렬&lt;/label&gt;
			&lt;input type="checkbox" name="sports" id="soccer"&gt; &lt;label for="soccer"&gt;축구&lt;/label&gt;
		</pre>
		<p></p>
	</section>
	<!-- //LABEL 요소 -->
	<!-- TEXTAREA 요소 -->
	<section id="summary21">
		<h3 class="s_tit">textarea</h3>
		<p class="panel info">cols, rows 순으로 속성을 선언한다. CSS를 정상적으로 불러오지 못한 상황에서도 사용하는데 문제가 없도록 cols 속성값은 최소 30, rows 속성값은 최소 5로 선언한다.</p>
		<pre class="brush:html">&lt;textarea cols="30" rows="5"&gt;&lt;/textarea&gt;</pre>
	</section>
	<!-- //TEXTAREA 요소 -->
	<!-- BUTTON 요소 -->
	<section id="summary22">
		<h3 class="s_tit">button</h3>
		<p class="panel info">type 속성을 선언한다.</p>
		<ul class="lst_type">
		<li>type 속성을 button으로 선언해서 열기&frasl;닫기, 접기&frasl;펼치기 등의 UI를 제어한다.</li>
		<li>폼 전송 역활을 하는 버튼은 submit 타입을 사용한다.</li>
		</ul>
		<pre class="brush:html">
			&lt;button type="button"&gt;열기&lt;/button&gt;
			&lt;button type="submit"&gt;전송&lt;/button&gt;
		</pre>
	</section>
	<!-- //BUTTON 요소 -->
	<!-- TABLE 요소 -->
	<section id="summary23">
		<h3 class="s_tit">table</h3>
		<p class="panel info">일반적으로 레이아웃을 표현하는데 사용하지 않고, 2차원의 격자형 데이터를 표현하는데 사용한다. 표의 요약 내용을 표기해야할 때 summary 속성을 선택적으로 사용할 수 있다.</p>
		<pre class="brush:html">
			&lt;table summary="표 요약 정보 제공"&gt;
		</pre>
		<p class="panel alert">HTML5 DTD 선언시 summary 속성은 사용하지 않는다.(HTML5에서 이 속성은 폐기 되었다.)</p>

		<p>표는 다음과 같이 배치한다.</p>
		<dl class="category">
		<dt>HTML 경우</dt>
		<dd>
			<pre class="brush:html">
				&lt;table summary="짬뽕은 자장면보다 500원 비까고 열량이 50kcal 높다"&gt;
				&lt;caption&gt;자장면과 짬뽕의 가격과 열량 비교&lt;/caption&gt;
				&lt;colgroup&gt;
				&lt;col width="30%"&gt;
				&lt;col width="70%"&gt;
				&lt;/colgroup&gt;
				&lt;thead&gt;
				&lt;tr&gt;
				&lt;th scope="col" abbr="가격"&gt;가격(won)&lt;/th&gt;
				&lt;th scope="col" abbr="열량"&gt;열량(kcal)&lt;/th&gt;
				&lt;/tr&gt;
				&lt;/thead&gt;
				&lt;tfoot&gt;
				&lt;tr&gt;
				&lt;th&gt;계&lt;/th&gt;
				&lt;td&gt;6,500&lt;/td&gt;
				&lt;td&gt;650&lt;/td&gt;
				&lt;/tr&gt;
				&lt;/tfoot&gt;
				&lt;tbody&gt;
				&lt;tr&gt;
				&lt;th scope="row"&gt;자장면&lt;/th&gt;
				&lt;td&gt;3,000&lt;/td&gt;
				&lt;td&gt;300&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
				&lt;th scope="row"&gt;짬뽕&lt;/th&gt;
				&lt;td&gt;3,500&lt;/td&gt;
				&lt;td&gt;350&lt;/td&gt;
				&lt;/tr&gt;
				&lt;/tbody&gt;
				&lt;/table&gt;
			</pre>
		</dd>
		<dt>HTML5 경우</dt>
		<dd>
			<pre class="brush:html">
				&lt;table&gt;
				&lt;caption&gt;자장면과 짬뽕의 가격과 열량 비교&lt;/caption&gt;
				&lt;colgroup&gt;
				&lt;col style="width:30%"&gt;
				&lt;col style="width:70%"&gt;
				&lt;/colgroup&gt;
				&lt;thead&gt;
				&lt;tr&gt;
				&lt;th scope="col" abbr="가격"&gt;가격(won)&lt;/th&gt;
				&lt;th scope="col" abbr="열량"&gt;열량(kcal)&lt;/th&gt;
				&lt;/tr&gt;
				&lt;/thead&gt;
				&lt;tfoot&gt;
				&lt;tr&gt;
				&lt;th&gt;계&lt;/th&gt;
				&lt;td&gt;6,500&lt;/td&gt;
				&lt;td&gt;650&lt;/td&gt;
				&lt;/tr&gt;
				&lt;/tfoot&gt;
				&lt;tbody&gt;
				&lt;tr&gt;
				&lt;th scope="row"&gt;자장면&lt;/th&gt;
				&lt;td&gt;3,000&lt;/td&gt;
				&lt;td&gt;300&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
				&lt;th scope="row"&gt;짬뽕&lt;/th&gt;
				&lt;td&gt;3,500&lt;/td&gt;
				&lt;td&gt;350&lt;/td&gt;
				&lt;/tr&gt;
				&lt;/tbody&gt;
				&lt;/table&gt;
			</pre>
		</dd>
		</dl>
	</section>
	<!-- //TABLE 요소 -->
	<!-- CAPTION 요소 -->
	<section id="summary24">
		<h3 class="s_tit">caption</h3>
		<p class="panel info">표 제목을 표현하는데 사용한다. &lt;caption&gt; 요소는 반드시 선언한다.</p>
		<pre class="brush:html">&lt;caption&gt;자장면과 짬뽕의 가격과 열량 비교&lt;/caption&gt;</pre>
		<p class="panel alert">표 윗부분의 헤딩 요서가 표 제목 역활을 할 때는 생략할 수 있다.</p>
	</section>
	<!-- //CAPTION 요소 -->
	<!-- COLGROUP 요소 -->
	<section id="summary25">
		<h3 class="s_tit">colgroup</h3>
		<p class="panel info">col 요소를 그룹으로 나누고 세로열 전체를 그룹화 할때 선언한다. 이 요소는 선택적으로 할 수 있지만 되도록 사용하는것을 권장한다.</p>
		<dl class="category">
		<dt>HTML 경우</dt>
		<dd>
			<pre class="brush:html">
				&lt;colgroup&gt;
				&lt;col width="100"&gt;
				&lt;/colgroup&gt;

				&lt;colgroup&gt;
				&lt;col width="100" span="2"&gt;
				&lt;/colgroup&gt;
			</pre>
		</dd>
		<dt>HTML5 경우</dt>
		<dd>
			<pre class="brush:html">
				&lt;colgroup&gt;
				&lt;col style="width:100px"&gt;
				&lt;/colgroup&gt;

				&lt;colgroup&gt;
				&lt;col stype="width:100px" span="2"&gt;
				&lt;/colgroup&gt;
			</pre>
		</dd>
		</dl>
	</section>
	<!-- //COLGROUP 요소 -->
	<!-- COL 요소 -->
	<section id="summary26">
		<h3 class="s_tit">col</h3>
		<p class="panel info">표 각 열의 너비를 지정하기 위해 선언한다. width, span 속성을 다음과 같은 순서로 선언한다.</p>
		<ul class="lst_type">
		<li>표 각 열의 너비를 지정하기 위해 선언한다. width, span 속성이 있으며 이 속성은 필요에 따라 선택적으로 사용한다.</li>
		<li>테이블에 border가 없는 경우에는 &lt;col width=&#34;&#34;&gt; 사용을 한다. border가 있는 경우에 크로스브라우징시 1px 밀리는 이슈가 발생할 수 있는데 이럴경우 &lt;col class=""&gt; 를 사용하여 CSS에서 width를 핸들링 한다.</li>
		<li>단, HTML5 DTD 선언 시 &lt;col&gt; width 속성은 전부 class 속성을 줘서 CSS로 핸들링 하거나 &lt;col style=width:&#34;&#34;&gt; 인라인 style로 핸들링 한다.</li>
		</ul>
		<dl class="category">
		<dt>HTML 경우</dt>
		<dd>
			<pre class="brush:html">
				&lt;col width="100" span="2"&gt;
				&lt;col width="100"&gt;&lt;col width="100"&gt;
				&lt;col width="100"&gt;&lt;col width="*"&gt;
				&lt;col width="50%"&gt;&lt;col width="50%"&gt;
			</pre>
		</dd>
		<dt>HTML5 경우</dt>
		<dd>
			<pre class="brush:html">
				&lt;col style="width:100px" span="2"&gt;
				&lt;col style="width:100px"&gt;&lt;col style="width:100px"&gt;
				&lt;col style="width:100px"&gt;&lt;col&gt;
				&lt;col style="width:50%"&gt;&lt;col style="width:50%"&gt;
			</pre>
		</dd>
		</dl>
	</section>
	<!-- //COL 요소 -->
	<!-- THEAD 요소 -->
	<section id="summary27">
		<h3 class="s_tit">thead</h3>
		<p class="panel info">표 머리글을 그룹으로 나눌 때 선언한다. 이 요소는 th 요소만으로 그룹을 나눌 수 없으면 선언하지 않는다.</p>
		<pre class="brush:html">
			&lt;thead&gt;
			&lt;tr&gt;
			&lt;th&gt;구분&lt;/th&gt;
			&lt;th scope="col" abbr="가격"&gt;가격(won)&lt;/th&gt;
			&lt;th scope="col" abbr="열량"&gt;열량(kcal)&lt;/th&gt;
			&lt;/tr&gt;
		</pre>
	</section>
	<!-- //THEAD 요소 -->
	<!-- TFOOT 요소 -->
	<section id="summary28">
		<h3 class="s_tit">tfoot</h3>
		<p class="panel info">표 바닥글을 그룹으로 나눌 때 선언한다. 이 요소는 선택적으로 사용한다.</p>
		<pre class="brush:html">
			&lt;thead&gt;
			...
			&lt;/thead&gt;
			&lt;tfoot&gt;
			&lt;tr&gt;
			&lt;th&gt;계&lt;/th&gt;
			&lt;td&gt;6,500&lt;/td&gt;
			&lt;td&gt;650&lt;/td&gt;
			&lt;/tr&gt;
			&lt;/tfoot&gt;
			&lt;tbody&gt;
			...
			&lt;/tbody&gt;
		</pre>
		<p class="panel alert">tfoot 요소 사용 시 반드시 thead 와 tbody 요소 사이에 위치해야 한다.</p>
	</section>
	<!-- //TFOOT 요소 -->
	<!-- TH 요소 -->
	<section id="summary29">
		<h3 class="s_tit">th</h3>
		<p class="panel info">scope, abbr, id 순서로 속성을 선언한다.</p>
		<ul class="lst_type">
		<li>표에 셀 제목이 명시되지 않은 경우에도 th 요소를 필수로 선언해서 의미에 맞는 제목을 명시한다.(화면에 표시되지 않도록 CSS로 숨김 처리)</li>
		<li>scope 속성은 반드시 선언해야 한다.(scope=&#34;col&#34;의 뜻은 세로(column), scope=&#34;row&#34;는 가로(row) 이다.)</li>
		<li>abbr과 id 속성은 선택적으로 사용한다.</li>
		</ul>
		<pre class="brush:html">&lt;th scope="col" abbr="가격"&gt;음식의 가격(won)&lt;/th&gt;</pre>
	</section>
	<!-- //TH 요소 -->
	<!-- TBODY 요소 -->
	<section id="summary30">
		<h3 class="s_tit">tbody</h3>
		<p class="panel info">표 본문을 그룹으로 나누기 위해 선언한다. 테이블의 본문(body)이 하나이고 thead 나 tfoot 요소가 없으면 생략할 수 있다.</p>
		<pre class="brush:html">
			&lt;tbody&gt;
			&lt;tr&gt;
			&lt;th scope="row"&gt;자장면&lt;/th&gt;
			&lt;td&gt;3,000&lt;/td&gt;
			&lt;td&gt;300&lt;/td&gt;
			&lt;/tr&gt;
			&lt;/tbody&gt;
		</pre>
	</section>
	<!-- //TBODY 요소 -->
	<!-- A 요소 -->
	<section id="summary31">
		<h3 class="s_tit">a</h3>
		<p class="panel info">href, target, title 순서로 속성을 선언한다.</p>
		<ul class="lst_type">
		<li>새 창으로 페이지를 표시해야 할 때 target 속성을 선택적으로 사용한다.</li>
		<li>title 속성은 예고 없이 새 창을 표시해야 하거나 이동 경로를 정확히 알 수 없을때 또는 브라우저에 독립적으로 툴팁을 표시할때 사용한다.</li>
		</ul>
		<pre class="brush:html">&lt;a href="#" target="_blank" title="새창"&gt;인쇄하기&lt;/a&gt;</pre>
		<div class="panel alert">
			<strong>HTML5에서는 다음과 같이 사용할 수 있다.</strong>
			<ul class="lst_type">
			<li>a 요소 안에 블록 속성의 요소를 포함할 수 있다.</li>
			<li>href 속성 없이 단독으로 a 요소를 사용할 수 있다.</li>
			</ul>
		</div>
	</section>
	<!-- //A 요소 -->
	<!-- IFRAME 요소 -->
	<section id="summary32">
		<h3 class="s_tit">iframe</h3>
		<p class="panel info">iframe 요소를 사용하면 다음과 같은 문제점이 있다.</p>
		<ul class="lst_type">
		<li>iframe 요소를 포함하는 페이지의 도메인과 iframe 요소에서 불러오는 페이지의 도메인이 다르면 크로스 도메인 설정을 위해 별도의 소스 코드가 추가되어 성능에 영향을 줄 수 있다.</li>
		<li>iframe 요소의 높이값을 콘텐츠에 따라 유동적으로 지정해야 한다면 별도의 자바스크립트 코드가 추가되어 성능에 영향을 줄 수 있다.</li>
		<li>검색 엔진에서 iframe 요소의 내용만 추출해서  표시하면 전체 페이지의 레이아웃이 비정상적으로 보일 수 있으며, 주변 맥락(머리글, 바닥글, 메뉴)이 노출되지 않아 검색 엔진 최적화(SEO) 관점에서도 적합하지 않다.</li>
		<li>iframe 요소는 마지막에 로드되지 때문에 페이지 로딩 초기에는 화면이 비어 보일 수 있다.</li>
		<li>모바일에서는 iframe 요소의 스크롤에 대한 렌더링이 브라우저별로 다르며, CSS 말 줄임이 동작하지 않는 브라우저가 있다.</li>
		</ul>

		<p class="panel info">이와 같은 이유로 아이프에임은 가급적 사용하지 않도록 권장한다. 부득이하게 사용해야 할 때는 다음 규칙을 준수한다.</p>
		<ul class="lst_type">
		<li>src, width, height, title, frameborder, marginwidth, marginheight, scrolling 순서로 속성을 선언한다.</li>
		<li>스크린리더 사용자를 위해 title 속성에 제목을 표기한다. 단 iframe 요소 윗부분의 헤딩 요소가 아이프레임의 제목 역활을 할 때는 title 속성을 생략할 수 있다.</li>
		</ul>
		<pre class="brush:html">&lt;iframe src="@문서경로" width="400" height="600" title="공지사항 게시판" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"&gt;&lt;/a&gt;</pre>
		<div class="panel alert">
			HTML5 DTD 선언할 때 frameborder, marginwidth, marginheight, scrolling 속성은 사용할 수 없다. 단, frmaeborder 속성은 CSS 속성으로 제어 할 수 없으므로 허용하는 경우가 있다.
			<pre class="brush:html">&lt;iframe src="@문서경로" width="400" height="600" title="공지사항 게시판" frameborder="0"&gt;&lt;/a&gt;</pre>
		</div>
	</section>
	<!-- //IFRAME 요소 -->
	<!-- IMG 요소 -->
	<section id="summary33">
		<h3 class="s_tit">img</h3>
		<p class="panel info">src, width, height, title, alt, usemap 순서로 속성을 선언한다.</p>
		<ul class="lst_type">
		<li>이미지 내용과 동일한 값을 alt 속성에 표기해서 이미지를 볼 수 없는 환경(스크린리더, 이미지, 서버장애, 이미지 표시 하지 않음 설정)에서도 내용을 확인할 수 있게 한다.</li>
		<li>title 속성을 선언한 경우에도 alt 속성을 함께 선언한다.</li>
		<li>title 속성은 alt 속성값을 축약하거나 브라우저에 독립적으로 툴팁을 표현하는데 사용한다.</li>
		</ul>
		<pre class="brush:html">&lt;img src="@이미지경로" width="25" height="25" title="고객센터" alt="고객센터, 모든 궁금증이 해결되는 곳" usemap="#help"&gt;</pre>
	</section>
	<!-- //IMG 요소 -->
	<!-- MAP 요소 -->
	<section id="summary34">
		<h3 class="s_tit">map</h3>
		<p class="panel info">map 요소의 name 속성을 선언해서 img 요소의 usemap 속성과 같은 이름으로 연결(coupling)한다.</p>
		<pre class="brush:html">
			&lt;img src="@이미지경로" width="650" height="200" title="한글날 이벤트" alt="한글날 이벤트, 한글을 글꼴로 나눕니다." usemap="#evt"&gt;
			&lt;map name="evt"&gt;
			&lt;area shape="rect" coords="506,48,608,139" href="#" target="_blank" title="고객센터" alt="고객센터, 모든 궁금증이 해결되는 곳"&gt;
			&lt;/map&gt;
		</pre>
	</section>
	<!-- //MAP 요소 -->
	<!-- AREA 요소 -->
	<section id="summary35">
		<h3 class="s_tit">area</h3>
		<p class="panel info">shape, coords, href, target, title, alt 순서로 속성을 선언한다.</p>
		<ul class="lst_type">
		<li>title 속성을 선언한 경우에도 alt 속성을 함께 선언한다.</li>
		<li>target 속성은 새 창으로 페이지를 표시해야 할 때 사용한다.</li>
		<li>title 속성은 예고 없이 새 창을 표시해야 하거나 이동 경로를 정확히 알수 없을 때, alt 속성값을 축약하거나, 브라우저에 독립적으로 툴팁을 표현할 때 사용한다.</li>
		</ul>
		<pre class="brush:html">&lt;area shape="rect" coords="506,48,608,139" href="#" target="_blank" title="고객센터" alt="고객센터, 모든 궁금증이 해결되는 곳"&gt;</pre>
	</section>
	<!-- //AREA 요소 -->
	<!-- 주석표기 -->
	<section id="summary36">
		<h3 class="s_tit">주석 표기</h3>
		<p class="panel info">HTML 주석의 시작과 종료는 다음과 같이 표기하며, 기본 형식에 맞게 작성한다.</p>
		<pre class="brush:html">
			@기본 형식
			시작 주석: <!-- 주석 내용-->
			종료 주석: <!-- //주석 내용 -->
		</pre>
		<ul class="lst_type">
		<li>주석기호와 주석 내용 사이에는 반드시 공백이 한 칸 있어야 한다.</li>
		<li>주석 기호와 주석 내용 사이의 줄 바꿈은 허용하지 않는다. 단, 주석 내용 사이의 줄바꿈은 허용한다.</li>
		<li>시작과 종료 주석의 주석 내용은 동일해야 한다.</li>
		</ul>
		<table class="tb_grid">
		<caption>[ 주석 기본 형식 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>&lt;!--GNB--&gt;</td>
		<td rowspan="4">&lt;!-- GNB --&gt;<br>···<br>&lt;!-- //GNB --&gt;</td>
		</tr>
		<tr>
		<td>&lt;!--* GNB *--&gt;</td>
		</tr>
		<tr>
		<td>&lt;!-- GNB<br>--&gt;</td>
		</tr>
		<tr>
		<td>&lt;!-- GNB 시작 --&gt;<br>···<br>&lt;!-- //GNB 끝 --&gt;</td>
		</tr>
		<tr>
		<td colspan="2"><strong>마크업과 개발의 편위를 위해 작성한 주석은 실제 서비스를 적용할 때 반드시 삭제한다.</strong></td>
		</tr>
		</tbody>
		</table>
		<div class="panel alert">
			 <strong>주의사항</strong>
			 <ul class="lst_type">
			 <li>공통 : 너무 많은 주석은 유령문자버그를 생성하므로 되도록 자제 한다.</li>
			 <li>HTML : 시작하는 구분자(&#34;&lt;!&#34;)와 주석을 시작하는 구분자(&#34;--&#34;) 사이에는 공백 문자(white space)가 올 수 없다.</li>
			 <li>XHTML : 주석으로 감싼 내용 안에 "--"가 오거나, 파라미터 엔터티 참조가 인식되서는 안된다.</li>
			 </ul>
		</div>

		<h4 class="tit_cont">레이아웃 및 콘텐츠 영역의 주석 표기</h4>
		<p>&#34;wrap&#34;을 제외한 레이아웃과 독립된 컨텐츠 영역의 시작과 끝에 주석을 표기하며, 레이아웃은 id 값과 동일하게 주석을 넣는다. 독립된 콘텐츠 영역의 주석 표기는 선택 사항이다. HTML 코드와 주석은 줄을 바꿔서 작성한다.</p>
		<pre class="brush:html">
			<!-- content -->
			&lt;div id="content"&gt;
				<!-- 네임카드 -->
				&lt;div class="namecard"&gt;...&lt;/div&gt;
				<!-- //네임카드 -->
			&lt;/div&gt;
			<!-- //content -->
		</pre>

		<h4 class="tit_cont">개발 적용과 관련된 주석 표기</h4>
		<p>개발 적용과 관련된 주석은 해당되는 영역 위에 표기하며, 종료 주석은 표기하지 않는다. 주석 앞에는 [D]라는 말머리를 사용해서 담당 개발자가 반드시 확인할 수 있게 한다. 주석이 두줄 이상이 되더라도 주석 기호는 한 번만 표기한다.</p>
		<table class="tb_grid">
		<caption>[ 개발 적용 관련 주석 표기 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>&lt;!-- 케이스별 클래스 변화 --&gt;<br>&lt;!-- 활성화 클래스: on<br>비활성화 클래스: off --&gt;</td>
		<td>&lt;!-- [D] 케이스별 클래스 변화<br>활성화 클래스: on<br>비활성화 클래스: off --&gt;</td>
		</tr>
		<tr>
		<td>
			&lt;img src="@tmp_btn.gif" width="25" height="25" alt="버튼"&gt;<br>
			&lt;!-- 숨김처리<br>
			&lt;img src="@tmp_btn_on.gif" width="25" height="25" alt="버튼"&gt;<br>
			//숨김처리 --&gt;
		</td>
		<td>
			&lt;img src="@tmp_btn.gif" width="25" height="25" alt="버튼"&gt;<br>
			&lt;!-- [D] 활성화된 버튼은 파일명에 _on추가 요망<br>
			&lt;img src="@tmp_btn_on.gif" width="25" height="25" alt="버튼"&gt;<br>
			--&gt;
		</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">Script 엘리먼트 주석 표기</h4>
		<p>HTML</p>
		<pre class="brush:html">
			&lt;script type="text/javascript"&gt;
				alert('확인');
			&lt;/script&gt;
		</pre>
		<p>XHTML</p>
		<pre class="brush:html">
			&lt;script type="text/javascript"&gt;
			<![CDATA[
				alert('확인');
			]]>
			&lt;/script&gt;
		</pre>
	</section>
	<!-- //주석표기 -->
	<!-- 레이아웃 가이드 -->
	<section id="summary37">
		<h3 class="s_tit">Layout Guide</h3>
		<h4 class="tit_cont">HTML4.01&frasl;XHTML 1.0 기본 레이아웃</h4>
		<p>신규 HTML문서를 작성할 때는 다음과 같은 기본 HTML문서 구조를 따른다.</p>
		<pre class="brush:html">
			&lt;body&gt;
			<!-- skip -->
			&lt;div id="skip"&gt;
				&lt;a href="#"&gt;본문 바로가기&lt;/a&gt;
				&lt;a href="#"&gt;메뉴 바로가기&lt;/a&gt;
			&lt;/div&gt;
			<!-- //skip -->
			&lt;div id="wrap"&gt;
				<!-- header -->
				&lt;div id="header"&gt;헤더 영역&lt;/div&gt;
				<!-- //header -->
				<!-- container -->
				&lt;div id="container"&gt;
					<!-- content -->
					&lt;div id="content"&gt;콘텐츠 영역&lt;/div&gt;
					<!-- //content -->
				&lt;/div&gt;
				<!-- //container -->
				<!-- footer -->
				&lt;div id="footer"&gt;푸터 영역&lt;/div&gt;
				<!-- //footer -->
			&lt;/div&gt;
			&lt;/body&gt;
		</pre>
		<ul class="lst_type">
		<li>스킵네비게이션 바로가기(목차) 위치는 가장 상단에 위치시킨다.</li>
		<li>레이아웃은 전체를 &#34;wrap&#34;으로 감싸고 &#34;header&#34;, &#34;container&#34;, &#34;footer&#34; 로 나눈다.</li>
		<li>h1(서비스명), h2(메인메뉴,본문,이용약관...), h3(세부컨텐츠, 핵심컨텐츠), h4(서브컨텐츠) , h5~h6(될 수 있으면 안쓴다.)</li>
		</ul>

		<h4 class="tit_cont">HTML5 기본 레이아웃</h4>
		<p>HTML5 DTD를 선언할시에는 다음과 같은 구조를 따른다.</p>
		<pre class="brush:html">
			&lt;body&gt;
			<!-- skip -->
			&lt;div id="skip"&gt;
				&lt;a href="#"&gt;본문 바로가기&lt;/a&gt;
				&lt;a href="#"&gt;메뉴 바로가기&lt;/a&gt;
			&lt;/div&gt;
			<!-- //skip -->
			&lt;div id="wrap"&gt;
				<!-- header -->
				&lt;header&gt;헤더 영역&lt;/header&gt;
				<!-- //header -->
				<!-- container -->
				&lt;div id="container"&gt;
					<!-- content -->
					&lt;article id="content"&gt;콘텐츠 영역&lt;/article&gt;
					<!-- //content -->
				&lt;/div&gt;
				<!-- //container -->
				<!-- footer -->
				&lt;footer&gt;푸터 영역&lt;/footer&gt;
				<!-- //footer -->
			&lt;/div&gt;
			&lt;/body&gt;
		</pre>
		<ul class="lst_type">
		<li>article : 태그 자체로 완전한 하나의 개별 컨텐츠 article은 그 안에 section을 가질 수 있음</li>
		<li>section : 제목 태그(Heading Tag)를 지닌 영역 구분</li>
		</ul>
	</section>
	<!-- //레이아웃 가이드 -->
	<!-- //기타 참고사항 -->
	<section id="summary38">
		<h3 class="s_tit">기타 참고사항</h3>
		<h4 class="tit_cont">중첩 리스트 적용 지양</h4>
		<p>단, GNB 및 서브메뉴 등에서는 키보드 사용성 확보를 위해 2depth까지는 제한적 허용함</p>

		<h4 class="tit_cont">dl 요소 안에는 여러개의 dt,dd 구조 적용 가능</h4>
		<pre class="brush:html">
			&lt;dl&gt;
			&lt;dt&gt;제목1&lt;dt&gt;
			&lt;dd&gt;정의내용1&lt;dd&gt;
			&lt;dt&gt;제목2&lt;dt&gt;
			&lt;dd&gt;정의내용2&lt;dd&gt;
			&lt;dl&gt;
		</pre>

		<h4 class="tit_cont">title 속성 적용 범위</h4>
		<p>IR기법을 사용한 링크에서는 title 미적용 : 내용이 중복 제공되는 현상 방지(단, 중요한 내용인 경우에는 사용 가능)</p>
		<p>단, GNB 및 서브메뉴 등에서는 키보드 사용성 확보를 위해 2depth까지는 제한적 허용함 label로 적용하기 어려운 input 요소에 적용 가능</p>

		<h4 class="tit_cont">layer 페이지 제목요소</h4>
		<p>페이지내 레이어는 STRONG 요소로 제목 구현함 (단, 레이어가 아닌 별도의 팝업 페이지는 제목을 헤딩으로 구조화 한다.)</p>

		<h4 class="tit_cont">a &amp; strong의 중첩관계</h4>
		<pre class="brush:html">
			// 권장사항 (단일 중첨관계일 경우)
			&lt;strong&gt;&lt;a href="#"&gt;썸네일 타이틀&lt;/a&gt;&lt;/strong&gt;

			// 예외처리 (앵커 안에 많은 요소들을 포함할 때)
			&lt;a href="#"&gt;
				&lt;strong&gt;썸네일 타이틀&lt;/strong&gt;
			&lt;/a&gt;
		</pre>

		<h4 class="tit_cont">role 속성 적용</h4>
		<p>HTML5 DTD 적용 시 User Add Custom 속성은 role 속성을 사용해야 한다.</p>
		<p>이 속성은 HTML5 문서타입 외에서는 적용하지 않는다.(사용시 validation 문법 오류 발생)</p>
	</section>
	<!-- //기타 참고사항 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>