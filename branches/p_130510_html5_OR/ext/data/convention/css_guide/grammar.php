<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>CSS Grammar : <?php echo TITLE_CONVENTION_HTML; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- CSS Grammar 가이드 -->
	<section>
		<h1 class="s_tit">CSS Grammar</h1>
		<div id="docSummary" class="idx_summary">
			<div class="inner" style="display:none">
				<h2 class="blind">CSS 규칙 색인</h2>
				<ul>
				<li><a href="#summary1" rel="bookmark">CSS 선언 방식</a></li>
				<li><a href="#summary2" rel="bookmark">단위</a></li>
				<li><a href="#summary3" rel="bookmark">CSS 선택자</a></li>
				<li><a href="#summary4" rel="bookmark">CSS 캐스케이딩</a></li>
				<li><a href="#summary5" rel="bookmark">CSS 선택자 사용 방식</a></li>
				</ul>
				<a href="#none" data-btn="smr" class="btn_lst clse">목차닫기</a>
			</div>
			<a href="#none" data-btn="smr" class="btn_lst open">목차보기</a>
		</div>

		<dl class="definition">
		<dt>CSS 일반 규칙</dt>
		<dd>CSS 코드를 작성할 때 일반적인 기본 문법, 규칙, 사용을 설명한다.</dd>
		</dl>
	</section>
	<!-- //CSS Grammar 가이드 -->
	<!-- CSS 선언 방식 -->
	<section id="summary1">
		<h3 class="s_tit">CSS 선언 방식</h3>
		<p class="panel info">CSS 선언 타입은 크게 네 가지로 분류하며, 용도에 맞게 사용한다.</p>
		<dl class="category">
		<dt>External Type 방식</dt>
		<dd>
			CSS를 선언하는 가장 기본적인 방식으로, CSS 파일을 별도로 외부파일로 저장하여 페이지에 linking 시키는 방법을 말한다.(link 요소를 통해 HTML과 CSS 파일을 연결한다.)
			<pre class="brush:html">
				&lt;head&gt;
				&lt;link rel="stylesheet" type="text/css" href="@파일경로"&gt;
				&lt;/head&gt;
			</pre>
		</dd>
		<dt>Internal(embedded) Type 방식</dt>
		<dd>
			HTML 파일의 head 요소 안에 style을 선언하는 방식으로, head 요소 안에 style 요소로 선언하여 선택자에 따라 일괄적으로 선언하는 방법을 말한다. 단발성 페이지의 CSS 분량이 적을 때 사용한다.
			<pre class="brush:html">
				&lt;head&gt;
				...
				&lt;style type="text/css"&gt;
				...
				&lt;/style&gt;
				&lt;/head&gt;
			</pre>
		</dd>
		<dt>Inline Type 방식</dt>
		<dd>
			HTML의 개별 요소에 직접 style 속성을 이용해 style 속성 값을 지정하는 방법을 말한다. 속성값이 동적으로 변경되어야 할 때 사용한며, 속성값에 사용되는 %와 같은 특수기호는 엔티티 코드로 변환하지 않는다.
			<pre class="brush:html">
				&lt;div style="top:0;left:50%"&gt;
				...
				&lt;/div&gt;
			</pre>
		</dd>
		<dt>import Type 방식</dt>
		<dd>
			External 방식으로 링크된 CSS 안에 또 다른 CSS를 불러오는 방식을 말한다. 페이지가 다 로딩되고 이미지가 로딩되는 이슈 등으로 인하여 권장되는 방식은 아니다.
			<pre class="brush:html">
				@import url('layout.css');
			</pre>
		</dd>
		<dd>CSS 파일의 이슈에 관한 자세한 사항는 <a href="<?php echo BLOG_PATH; ?>archives/1242" target="_blank">참조 문서</a>에서 확인할 수 있다.</dd>
		</dl>
	</section>
	<!-- //CSS 선언 방식 -->
	<!-- 단위 -->
	<section id="summary2">
		<h3 class="s_tit">단위</h3>
		<h4 class="tit_cont">상대단위와 절대단위</h4>
		<table class="tb_grid" style="width:760px">
		<caption>[ 상대단위와 절대단위 비교 ]</caption>
		<colgroup>
		<col style="50%">
		<col style="50%">
		</colgroup>
		<thead>
		<tr>
		<th scope="col">상대단위 (px, ex, %, rem)</th>
		<th scope="col">절대단위 (in, cm, mm, pt, pc)</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>
			<ul class="lst_type">
			<li><strong>px</strong>
				<ul>
				<li>pixel을 기준으로 브라우저에는 고정적이지만 표시장치(기기의 해상도)에 따라서 상대적인 크기를 갖는다.</li>
				<li>1px = 1dot</li>
				</ul>
			</li>
			<li><strong>em</strong>
				<ul>
				<li>해당폰트의 대문자 M의 너비를 기준으로 값을 가진다.</li>
				</ul>
			</li>
			<li><strong>ex</strong>
				<ul>
				<li>x-height</li>
				<li>해당폰트의 소문자 x의 높이를 기준으로 값을 가진다.</li>
				</ul>
			</li>
			<li><strong>%</strong>
				<ul>
				<li>percent</li>
				<li>기본글꼴의 크기에 대해 상대적으로 값을 가진다.</li>
				</ul>
			</li>
			<li><strong>rem</strong>
				<ul>
				<li>root em</li>
				<li>최상위 요소의 크기에 대해 상대적으로 값을 가진다.</li>
				</ul>
			</li>
			</ul>
		</td>
		<td>
			<ul class="lst_type">
			<li><strong>in</strong>
				<ul>
				<li>inch 단위로 계산</li>
				<li>1inch = 2.54cm</li>
				</ul>
			</li>
			<li><strong>cm</strong>
				<ul>
				<li>centimeter 단위로 계산</li>
				<li>1cm = 10mm</li>
				</ul>
			</li>
			<li><strong>mm</strong>
				<ul>
				<li>단위로 계산</li>
				<li>10mm = 1cm</li>
				</ul>
			</li>
			<li><strong>pt</strong>
				<ul>
				<li>point 단위로 계산</li>
				<li>1pt = 1&frasl;72inch</li>
				</ul>
			</li>
			<li><strong>pc</strong>
				<ul>
				<li>pica단위로 계산</li>
				<li>1pc = 12pt</li>
				</ul>
			</li>
			</ul>
		</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">단위 변환</h4>
		<p>브라우저의 pt 단위와 포토샵의 pt 단위는 다르며, 포토샵에서 텍스트를 pt 단위로 사용 시 해당 폰트의 높이가 px 단위가 된다.</p>
		<table class="tb_grid">
		<caption>[ 단위 변환 비교 ]</caption>
		<colgroup>
		<col style="50%">
		<col style="50%">
		</colgroup>
		<thead>
		<tr>
		<th scope="col">px</th>
		<th scope="col">em</th>
		<th scope="col">percent</th>
		<th scope="col">point</th>
		<th scope="col">Point (Photoshop) &frasl; Dotum</th>
		<th scope="col">Point (Photoshop) &frasl; Gulim</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>8px</td>
		<td>0.5em</td>
		<td>50%</td>
		<td>6pt</td>
		<td>8pt, 9pt</td>
		<td>8pt</td>
		</tr>
		<tr>
		<td>9px</td>
		<td>0.55em</td>
		<td>55%</td>
		<td>7pt</td>
		<td>10pt</td>
		<td>9pt, 10pt</td>
		</tr>
		<tr>
		<td>10px</td>
		<td>0.625em</td>
		<td>62.5%</td>
		<td>7.5pt</td>
		<td>11pt</td>
		<td>11pt</td>
		</tr>
		<tr>
		<td>11px</td>
		<td>0.7em</td>
		<td>70%</td>
		<td>8pt</td>
		<td>12pt, 13pt</td>
		<td>12pt</td>
		</tr>
		<tr>
		<td>12px</td>
		<td>0.75em</td>
		<td>75%</td>
		<td>9pt</td>
		<td>14pt</td>
		<td>x</td>
		</tr>
		<tr>
		<td>13px</td>
		<td>0.8em</td>
		<td>80%</td>
		<td>10pt</td>
		<td>15pt</td>
		<td>13pt</td>
		</tr>
		<tr>
		<td>14px</td>
		<td>0.875em</td>
		<td>87.5%</td>
		<td>10.5pt</td>
		<td>16pt, 17pt</td>
		<td>14pt, 15pt</td>
		</tr>
		<tr>
		<td>15px</td>
		<td>0.95em</td>
		<td>95%</td>
		<td>11pt</td>
		<td>18pt</td>
		<td>16pt</td>
		</tr>
		<tr>
		<td>16px</td>
		<td>1em</td>
		<td>100%</td>
		<td>12pt</td>
		<td>19pt</td>
		<td>17pt</td>
		</tr>
		<tr>
		<td>17px</td>
		<td>1.05em</td>
		<td>105%</td>
		<td>13pt</td>
		<td>20pt, 21pt</td>
		<td>18pt, 19pt</td>
		</tr>
		<tr>
		<td>18px</td>
		<td>13.5pt</td>
		<td>1.125em</td>
		<td>112.5%</td>
		<td>x</td>
		<td>20pt</td>
		</tr>
		<tr>
		<td>19px</td>
		<td>1.2em</td>
		<td>120%</td>
		<td>14pt</td>
		<td>22pt</td>
		<td>21pt</td>
		</tr>
		<tr>
		<td>20px</td>
		<td>1.25em</td>
		<td>125%</td>
		<td>14.5pt</td>
		<td>23pt</td>
		<td>22pt</td>
		</tr>
		<tr>
		<td>21px</td>
		<td>1.3em</td>
		<td>130%</td>
		<td>15pt</td>
		<td>24pt</td>
		<td>x</td>
		</tr>
		<tr>
		<td>22px</td>
		<td>1.4em</td>
		<td>140%</td>
		<td>16pt</td>
		<td>25pt, 26pt</td>
		<td>23pt, 24pt</td>
		</tr>
		<tr>
		<td>23px</td>
		<td>1.45em</td>
		<td>145%</td>
		<td>17pt</td>
		<td>27pt</td>
		<td>x</td>
		</tr>
		<tr>
		<td>24px</td>
		<td>1.5em</td>
		<td>150%</td>
		<td>18pt</td>
		<td>28pt</td>
		<td>25pt</td>
		</tr>
		</tbody>
		</table>
		<div class="panel alert">
			<strong>권장 단위:</strong>
			상대적인 단위인 em을 사용시 보다 유동적인 환경으로 접근성을 구현할 수 있지만, 브라우저 간의 디자인 요소(간격의 오차)를 고려하는 경우에는 제약이 많다. 이에 다른 단위보다는 PC에서는 브라우저 호환성을 위해 px 단위의 사용을 권장한다. 단, 모바일과 같이 유동적인 레이아웃을 구현하기 위해서는 상대단위(em,%)를 권장하고 있는데, 아이폰4(IOS 4)의 보이스오버 기능과 관련하여 다음과 같은 IR 기법 이슈가 있으니 주의 하여야 한다. (IOS 5 제외)
			<ul class="lst_type">
			<li>iOS 4에서는 IR(park method) 기법 사용 시 text-indent의 단위에 따라 보이스오버 기능과 관련된 퍼포먼스 이슈가 발생한다.</li>
			<li>iOS 4에서 em 단위는 px 단위에 비해 6배~10배까지 성능이 하락하며, in 단위는 15배~24배까지 성능이 하락한다. (px 단위의 지연시간을 0.1이라고 설정했을 때)</li>
			</ul>
		</div>
	</section>
	<!-- //단위 -->
	<!-- CSS 선택자 -->
	<section id="summary3">
		<h3 class="s_tit">CSS 선택자</h3>
		<p class="panel info">HTML에 스타일을 적용할 부분을 선택하게끔 해주는 역할</p>

		<h4 class="tit_cont">선택자의 대표적인 종류</h4>
		<ul class="lst_type">
		<li>타입 선택자</li>
		<li>하위 선택자</li>
		<li>ID, CLASS 선택자</li>
		<li>유사클래스 선택자</li>
		<li>전체 선택자</li>
		</ul>
		<div class="panel alert">
			이외에도 자식, 인접, 속성 선택자가 더 있으나 IE6에서 지원을 하지 않는 관계로 현재 사용되고 있지는 않다. 동일한 속성을 갖는 선택자 간 ,(콤마) 로 구분하여 선언이 가능하다.
			<pre class="brush:html">
				h1,h2{color:blue}
				.link,.txt_desc{font-size:11px}
				#wrap,.list_cont{overflow:hidden}
			</pre>
		</div>

		<dl class="category">
		<dt>타입 선택자</dt>
		<dd>
			<ul>
			<li>HTML Tag 를 지정하여 선언</li>
			</ul>
			<pre class="brush:html">
				/* =타입 선택자 */
				h1{font-size:20px}
				ul{overflow:hidden}
				a{color:red}
				p{text-decoration:underline}
			</pre>
		</dd>
		<dt>하위 선택자</dt>
		<dd>
			<ul>
			<li>특정 엘리먼트 하위의 엘리먼트를 지정할 때 사용</li>
			<li>공백(space)으로 구분함</li>
			<li>타입, ID, CLASS 선택자와도 함께 사용 가능</li>
			</ul>
			<pre class="brush:html">
				/* =하위 선택자 */
				ul li{height:30px}
				ul li a{color:red}
				table tr td{text-align:left}
			</pre>
		</dd>
		<dt>ID, CLASS 선택자</dt>
		<dd>
			<ul>
			<li>엘리먼트에 직접 id, class 선택자 명을 지정</li>
			<li>id는 #으로 구분, class는 .(점)으로 구분</li>
			</ul>
			<pre class="brush:html">
				/* =ID, CLASS 선택자 */
				#bodyContent{width:100%}
				.clr{clear:both}
				.datetime{font-size:10px}
				#divNews .tab1{width:50px;height:50px}
				#divNews ul{background-color:red}
			</pre>
		</dd>
		<dt>유사클래스 선택자</dt>
		<dd>
			<ul>
			<li>해당 엘리먼트의 상태에 따라 구분짓는 선택자</li>
			<li>HTML 문서 상에는 없으나 CSS에서는 존재하는 것처럼 작성</li>
			<li>IE6에선 a태그에만 지정이 가능하고 그 외 브라우저는 지원여부가 조금씩 다름</li>
			</ul>
			<pre class="brush:html">
				/* =유사클래스 선택자 */
				a:link{color:blue;text-decoration:none} /* =방문하지 않은 링크 */
				a:visited{color:red;text-decoration:none} /* =방문했던 링크 */
				a:hover,a:active{color:black;text-decoration:underline} /* =마우스 오버시와 클릭시 */
			</pre>
		</dd>
		<dt>전체 선택자</dt>
		<dd>
			<ul>
			<li>모든 태그에 대한 속성을 지정 할 수 있으나, 사용빈도가 매우 낮음</li>
			<li>선언은 *(별표) 로 선언</li>
			</ul>
			<pre class="brush:html">
				/* =전체 선택자 */
				*{color:red}
				div *{font-size:10px}
			</pre>
		</dd>
		<dt>자식 선택자</dt>
		<dd>
			<pre class="brush:html">
				/* =자식 선택자 */
				div>a{font-size:20px}
			</pre>
		</dd>
		<dt>인접 선택자</dt>
		<dd>
			<pre class="brush:html">
				/* =인접 선택자 */
				h1+div{background-color:blue}
			</pre>
		</dd>
		<dt>속성 선택자</dt>
		<dd>
			<pre class="brush:html">
				/* =속성 선택자 */
				[class=box]{background-color:red}
			</pre>
		</dd>
		</dl>
	</section>
	<!-- //CSS 선택자 -->
	<!-- CSS 캐스케이딩 -->
	<section id="summary4">
		<h3 class="s_tit">CSS 캐스케이딩</h3>
		<p class="panel info">두개 이상의 규칙이 동일한 엘리먼트에 적용될 때 각 규칙의 우선순위에 따라 동작을 부여하는 방식으로 각 선택자에 따른 환산값은 아래 표와 같으며 높은 환산 값을 가진 규칙이 적용된다.</p>
		<table class="tb_grid">
		<caption>[ CSS 우선순위 ]</caption>
		<thead>
		<tr>
		<th scope="col">선택자</th>
		<th scope="col">10진수 환산값</th>
		<th scope="col">예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>inline style</td>
		<td>1000</td>
		<td>style=&#34;margin-left:10px&#34;</td>
		</tr>
		<tr>
		<td>id</td>
		<td>100</td>
		<td>#Header{width:100%}</td>
		</tr>
		<tr>
		<td>class</td>
		<td>10</td>
		<td>.info{width:100%}</td>
		</tr>
		<tr>
		<td>element</td>
		<td>1</td>
		<td>ul{margin:0}</td>
		</tr>
		</tbody>
		</table>
		<p class="panel alert">
			<strong>참고:</strong>
			속성 선언뒤 !important 를 선언하면 우선순위에 상관없이 우선 적용된다.
			<pre class="brush:html">
				.info{width:100% !important}
			</pre>
		</p>
	</section>
	<!-- //CSS 캐스케이딩 -->
	<!-- CSS 선택자 사용 방식 -->
	<section id="summary5">
		<h3 class="s_tit">CSS 선택자 사용 방식</h3>
		<p class="panel info">보다 빠른 웹페이지 성능개선을 위해 많은 개발자들이 노력하고 있는데, CSS의 선택자 사용방식을 통해 성능을 개선시킬 수 있는 다양한 방식이 연구되고 있으며, 그 중 알려진 몇 가지 방식을 소개 한다.</p>
		<dl class="category v2">
		<dt>OOCSS(권장)</dt>
		<dd>공통 클래스를 불러다 놓고 각 엘리먼트에 세부적인 클래스를 추가하는 방식
			<ul>
			<li><strong>CSS</strong>
				<pre class="brush:html">
					.bg_comm{float:left;height:15px;background:url(comm.png) no-repeat;text-indent:-9999px}
					.link1{width:50px;background-position:0 0}
					.link2{width:25px;background-position:0 -25px}
				</pre>
			</li>
			<li><strong>HTML</strong>
				<pre class="brush:html">
					&lt;a href="#" class="bg_comm link1"&gt;링크1&lt;/a&gt;
					&lt;a href="#" class="bg_comm link2"&gt;링크2&lt;/a&gt;
				</pre>
			</li>
			</ul>
		</dd>
		<dt>Sass @extend</dt>
		<dd>공통 클래스를 따로 만들지 않고 각 엘리먼트의 여러 클래스를 콤마로 구분하여 공통 스타일을 정의 한 후, 아래에서 세부적인 스타일을 추가하는 방식
			<ul>
			<li><strong>CSS</strong>
				<pre class="brush:html">
					.link1,.link2,.link3{float:left;height:15px;background:url(comm.png) no-repeat;text-indent:-9999px}
					.link1{width:50px;background-position:0 0}
					.link2{width:25px;background-position:0 -25px}
					.link3{width:20px;background-position:0 -50px}
				</pre>
			</li>
			<li><strong>HTML</strong>
				<pre class="brush:html">
					&lt;a href="#" class="link1"&gt;링크1&lt;/a&gt;
					&lt;a href="#" class="link2"&gt;링크2&lt;/a&gt;
					&lt;a href="#" class="link3"&gt;링크3&lt;/a&gt;
				</pre>
			</li>
			</ul>
		</dd>
		<dt>Long &frasl; Bloated</dt>
		<dd>클래스에 각각의 스타일을 정의하는 방식
			<ul>
			<li><strong>CSS</strong>
				<pre class="brush:html">
					.link1{float:left;width:50px;height:15px;background:url(comm.png) no-repeat 0 0;text-indent:-9999px}
					.link2{float:left;width:25px;height:15px;background:url(comm.png) no-repeat 0 -25px;text-indent:-9999px}
					.link3{float:left;width:20px;height:15px;background:url(comm.png) no-repeat 0 -50px;text-indent:-9999px}
				</pre>
			</li>
			<li><strong>HTML</strong>
				<pre class="brush:html">
					&lt;a href="#" class="link1"&gt;링크1&lt;/a&gt;
					&lt;a href="#" class="link2"&gt;링크2&lt;/a&gt;
					&lt;a href="#" class="link3"&gt;링크3&lt;/a&gt;
				</pre>
			</li>
			</ul>
		</dd>
		</dl>

		<h4 class="tit_cont">CSS 선택자 사용 방식과 성능과의 관계</h4>
		<p class="panel info">CSS 선택자 사용 방식에 따라 그에 따른 성능이 브라우저별로 다르게 나타나며, 도식화하면 아래 그림과 같다.아래 그림에서 보듯이 막대그래프가 높을수록 그만큼 렌더링 되는 시간이 오래 걸리며 막대그래프가 낮을수록 해당 CSS 선택자 사용 방식의 효율성이 더 좋음을 알 수 있다.</p>
		<img src="<?php echo PATH; ?>resources/img/css_performance.png" width="685" height="489" alt="CSS 셀렉터 브라우저별 퍼포먼스 성능 그래프">
	</section>
	<!-- //CSS 선택자 사용 방식 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>