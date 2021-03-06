<?php require '../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>Naming : <?php echo TITLE_CONVENTION_HTML; ?></title>
<?php include RELATIEV_PATH_V1.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- Naming 가이드 설명 -->
	<section>
		<h1 class="s_tit">Naming Guide</h1>
		<div id="docSummary" class="idx_summary">
			<div class="inner" style="display:none">
				<h2 class="blind">네이밍 색인</h2>
				<ul>
				<li><a href="#summary1" rel="bookmark">Naming 규칙</a></li>
				<li><a href="#summary2" rel="bookmark">prefix &frasl; subfix &frasl; suffix 정의</a></li>
				</ul>
				<a href="#none" data-btn="smr" class="btn_lst clse">목차닫기</a>
			</div>
			<a href="#none" data-btn="smr" class="btn_lst open">목차보기</a>
		</div>

		<dl class="definition">
		<dt>네이밍 규칙</dt>
		<dd>개발에 사용되는 구성요소의 이름을 짓는 방법을 정해 놓은 것이다. 다양하고 여러 사람들이 개발에 참여하거나 유지보수를 하려면 작업의 효율화를 위해 네이밍 규칙이 꼭 필요하다. 각 섹션별로 나누어 아이디와 클래스, 이미지, 파일 폴더의 네이밍 규칙을 설명한다.</dd>
		</dl>
	</section>
	<!-- //Naming 가이드 설명 -->
	<!-- Naming 기본 규칙 -->
	<section id="summary1">
		<h3 class="s_tit">Nnaming 기본 규칙</h3>
		<p class="panel info">다음과 같은 기본 네이밍 규칙을 준수한다.</p>

		<h4 class="tit_cont">공통 규칙</h4>
		<ul class="lst_type">
		<li>이름은 영문 소문자, 숫자, 언더스코어(_)로 작성한다.</li>
		<li>이름은 특수문자, 영문 대문자, 숫자로 시작하지 않는다.</li>
		</ul>
		<table class="tb_grid">
		<caption>[ 공통 네이밍 규칙 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>Btn</td>
		<td>btn</td>
		</tr>
		<tr>
		<td>2btn</td>
		<td>btn2</td>
		</tr>
		<tr>
		<td>2list_notice</td>
		<td>list_notice2 </td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">예약어</h4>
		<ul class="lst_type">
		<li>예약어가 있으면 예약어를 사용한다.</li>
		<li>예약어는 <a href="#">공통 네이밍 예약어 문서</a>를 참조해서 작성한다.</li>
		<li>예약어가 없으면 종류와 특성을 나타내도록 이름을 붙인다.</li>
		</ul>

		<h4 class="tit_cont">영문 소문자, 숫자, 언더스코어 조합</h4>
		<ul class="lst_type">
		<li>영문 소문자, 숫자, 언더스코어(_)만 사용할 수 있다.</li>
		<li>언더스코어(_)는 2개 이상 단어를 조합할 때만 사용한다.</li>
		<li>단어와 숫자를 조합할 때는 언더스코어(_)를 생략한다.</li>
		<li>언더스코어(_)가 포함된 예약어는 숫자, 영문 소문자와 조합해 사용할 수 있다.</li>
		<li>언더스코어(_)를 이용해 3단계를 초과하여 조합할 수 없다.</li>
		<li>숫자가 없으면 &#39;1&#39;이라는 숫자는 생략된 것으로 간주한다. 단, 숫자 정보면 &#39;1&#39;을 표기한다.</li>
		</ul>
		<table class="tb_grid">
		<caption>[ 네이밍 조합 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">기본형</th>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td rowspan="3">section</td>
		<td>sectionLst</td>
		<td>section_list_style_type</td>
		</tr>
		<tr>
		<td>section_lst</td>
		<td>section_lst_type</td>
		</tr>
		<tr>
		<td>section, section1, section2</td>
		<td>section, section2, section3</td>
		</tr>
		<tr>
		<td>no</td>
		<td>-</td>
		<td>no1, no2, no3, ···, no10</td>
		</tr>
		</tbody>
		</table>

		<h3 class="s_tit">id&frasl;class 규칙</h3>
		<h4 class="tit_cont">공통 규칙</h4>
		<ul class="lst_type">
		<li>아이디(id)는 문서 전체의 고유 식별자이므로 한 문서에서 같은 아이디를 여러 번 사용하지 않는다.</li>
		<li>레이아웃을 제외한 아이디(id)는 스타일을 지정하지 않는다.</li>
		<li>클래스(class)는 문서에서 여러 번 사용할 수 있다.</li>
		</ul>

		<h4 class="tit_cont">아이디, 클래스</h4>
		<ul class="lst_type">
		<li>아이디(id)는 카멜표기법(camelcase)방식으로 하며, 클래스(class)는 언더스코어(_)방식으로 사용한다.
			<pre class="brush:html">ex) id="boardView" class="link_view"</pre>
		</li>
		<li>아이디(id)는 화면에서의 고유 기능을 명시하도록 naming 한다.
			<pre class="brush:html">
				ex) id="btnSearch" (x)
				id="btnGnbSearch" (o)
			</pre>
		</li>
		<li>class는 요소 기능을 표현하도록 사용한다.</li>
		<li>id, class naming은 가급적 같지 않게 사용한다.</li>
		</ul>

		<h4 class="tit_cont">레이아웃 예약어</h4>
		<p>레이아웃에는 다음 표에 예약된 아이디만 사용한다.</p>
		<table class="tb_grid">
		<caption>[ 레이아웃 예약어 범위 ]</caption>
		<thead>
		<tr>
		<th scope="col">예약어</th>
		<th scope="col">범위</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>#wrap</td>
		<td>페이지 전체 영역</td>
		</tr>
		<tr>
		<td>#header</td>
		<td>머리글 영역</td>
		</tr>
		<tr>
		<td>#container</td>
		<td>본문 영역</td>
		</tr>
		<tr>
		<td>#content</td>
		<td>주요 콘텐츠 영역</td>
		</tr>
		<tr>
		<td>#footer</td>
		<td>바닥글 영역</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">팝업 레이아웃 예약어</h4>
		<ul>
		<li>팝업 문서의 레이아웃 지정 범위는 동일하다.</li>
		<li>레이아웃 예약어 앞에 &#39;pop_&#39;를 조합해서 사용한다.</li>
		</ul>
		<table class="tb_grid">
		<caption>[ 팝업 레이아웃 예약어 범위 ]</caption>
		<thead>
		<tr>
		<th scope="col">예약어</th>
		<th scope="col">범위</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>#pop_wrap</td>
		<td>페이지 전체 영역</td>
		</tr>
		<tr>
		<td>#pop_header</td>
		<td>머리글 영역</td>
		</tr>
		<tr>
		<td>#pop_container</td>
		<td>본문 영역</td>
		</tr>
		<tr>
		<td>#pop_content</td>
		<td>주요 콘텐츠 영역</td>
		</tr>
		<tr>
		<td>#pop_footer</td>
		<td>바닥글 영역</td>
		</tr>
		</tbody>
		</table>

		<h3 class="s_tit">folder&frasl;file 규칙</h3>
		<h4 class="tit_cont">HTML</h4>
		<dl class="category">
		<dt>대, 중 프로젝트 경우</dt>
		<dd>
			<ul class="lst_type">
			<li>서비스의 대분류에 따라 폴더를 생성하고 대분류의 폴더 안에 HTML 파일을 생성한다.</li>
			<li>생성되는 HTML의 파일명은 &#39;의미_상태&#39;의 순서로 네이밍한다.(상태는 필요에 따라 사용)
				<pre class="brush:html">
					ex) /대분류명/notice.html
					/대분류명/notice_view.html
				</pre>
			</li>
			</ul>
		</dd>
		<dt>소 프로젝트 경우</dt>
		<dd>
			<ul>
			<li>따로 폴더를 생성하지 않고 HTML 파일 한곳에 생성한다.</li>
			<li>생성되는 HTML의 파일명은 &#39;serviceName_의미_상태&#39;의 순서로 네이밍한다.
				<pre class="brush:html">
					ex) /serviceName_intro.html
					/serviceName_intro_write.html
				</pre>
			</li>
			</ul>
		</dd>
		</dl>

		<h4 class="tit_cont">CSS</h4>
		<dl class="category">
		<dt>대, 중 프로젝트 경우</dt>
		<dd>
			<ul>
			<li>공통요소 모음인 common.css 가 서비스별로 생성되며, 서비스의 대분류에 따라 서비스명_대분류 명으로 CSS의 name을 만들어 사용한다.
				<pre class="brush:html">ex) common.css, serviceName_intro.css</pre>
			</li>
			<li>각 서비스페이지에 import 되는 css는 common.css, serviceName_대분류명.css가 되며 2개 이하로 import 되도록 한다.</li>
			</ul>
		</dd>
		<dt>소 프로젝트 경우</dt>
		<dd>
			<ul>
			<li>공통요소모음인 common.css 하나만 생성하여 사용한다.</li>
			</ul>
		</dd>
		<dt>프로모션프로젝트의 경우</dt>
		<dd>
			<ul>
			<li>페이지 내 head 사이에 internal 방식으로 style을 추가한다.</li>
			</ul>
		</dd>
		</dl>

		<h4 class="tit_cont">images</h4>
		<dl class="category">
		<dt>대, 중 프로젝트 경우</dt>
		<dd>
			<ul>
			<li>images 폴더를 생성하고 common폴더 및 대분류별 폴더가 생성되며 그 하위에 관련 image들이 저장된다.
				<pre class="brush:html">
					ex) images/common/btn_comm.gif
					images/대분류명/intro_music.gif
				</pre>
			</li>
			</ul>
		</dd>
		<dt>소 프로젝트 경우</dt>
		<dd>
			<ul>
			<li>images 폴더에 모두 생성하며, 임시 image 사용 시 temp 폴더만 생성한다.</li>
			<li>사용되는 image 중 운영성 image 또는 임시 image는 temp 폴더를 생성하여 그 안에 위치시킨다. image 서버에 올라간 image를 수정 시 덮어쓰기는 하지 않고, 다른 이름으로 image 파일을 만드는데, image 수정네이밍은 &#39;기존네이밍_수정날짜&#39;로 네이밍하며, 같은 날짜에 한 image 파일을 두 번 수정하게 되는 경우는 '기본네이밍_수정날짜_v2'로 네이밍하며 숫자로 카운팅한다.
				<pre class="brush:html">
					ex) btn_apply (기존)
					btn_apply_110922 (수정)
					btn_apply_110922_v2 (재수정)
				</pre>
			</li>
			</ul>
		</dd>
		</dl>
	</section>
	<!-- //Naming 기본 규칙 -->
	<!-- prefix/subfix/suffix 정의 -->
	<section id="summary2">
		<h3 class="s_tit">prefix&frasl;subfix&frasl;suffix 정의</h3>
		<h4 class="tit_cont">prefix</h4>
		<ul class="lst_type">
		<li>접두사를 의미하는 것으로, 앞부분에 사용하며, 주로 형태를 나타내는 데 사용된다.
			<pre class="brush:html">ex) tab_notice, tbl_product 등</pre>
		</li>
		<li>기본 프리픽스는 형태별로 통일한다.</li>
		<li>서브 프리픽스가 필요한 부분은 언더스코어(_)로 구분하여 표기한다 (line &frasl; line_dot)</li>
		<li>프리픽스 리스트에 한해 subfix, suffix에서 축약형 네이밍 사용한다 (이외 네이밍은 의미전달 가능하도록 기재)</li>
		</ul>
		<div class="panel alert">
			<ul class="lst_type">
			<li>prefix 2개 이상 중복 시 기능적인 prefix가 맨 앞부분에 위치할 수 있도록 한다.</li>
			<li>단독사용 클래스는 지양하며 prefix를 조합한 형태로 작성한다. 예외:fst, lst, hide, on</li>
			<li>on 클래스인 경우, 단일 특정요소에 상태변화 클래스를 적용한다면 suffix로서 적용한다.</li>
			</ul>
		</div>
		<table class="tb_grid">
		<caption>[ 분류별 Prefix 부가설명 ]</caption>
		<thead>
		<tr>
		<th scope="col">분류</th>
		<th scope="col">prefix</th>
		<th scope="col">부가설명</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>타이틀</td>
		<td>tit</td>
		<td>일반적인 타이틀</td>
		</tr>
		<tr>
		<td rowspan="3">영역</td>
		<td>section</td>
		<td>제목 태그(Heading Tag)를 지닌 영역 구분 (선택적 사용, 중첩사용 지양)</td>
		</tr>
		<tr>
		<td>wrap</td>
		<td>일반 영역의 묶음 (선택적 사용, 중첩사용 지양)</td>
		</tr>
		<tr>
		<td>inner</td>
		<td>부모 wrapper가 존재하며 자식 묶음이 단독으로 필요한 경우</td>
		</tr>
		<tr>
		<td rowspan="3">내비게이션</td>
		<td>gnb</td>
		<td>서비스 전체 내비게이션</td>
		</tr>
		<tr>
		<td>lnb</td>
		<td>지역 내비게이션(gnb 영역)</td>
		</tr>
		<tr>
		<td>snb</td>
		<td>사이드 내비게이션(좌측메뉴)</td>
		</tr>
		<tr>
		<td>탭</td>
		<td>tab</td>
		<td>-</td>
		</tr>
		<tr>
		<td>테이블</td>
		<td>tbl</td>
		<td>-</td>
		</tr>
		<tr>
		<td>목록</td>
		<td>lst</td>
		<td>일반 목록(ul, ol, 리스트 형식의 dl)</td>
		</tr>
		<tr>
		<td rowspan="5">폼</td>
		<td>tf</td>
		<td>textfield (input 타입 text &frasl; textarea)</td>
		</tr>
		<tr>
		<td>inp</td>
		<td>input 타입 radio, checkbox, file 등</td>
		</tr>
		<tr>
		<td>opt</td>
		<td>selectbox</td>
		</tr>
		<tr>
		<td>lab	label</td>
		<td>-</td>
		</tr>
		<tr>
		<td>fld</td>
		<td>fieldset</td>
		</tr>
		<tr>
		<td>버튼</td>
		<td>btn</td>
		<td>-</td>
		</tr>
		<tr>
		<td>박스</td>
		<td>box</td>
		<td>-</td>
		</tr>
		<tr>
		<td>아이콘</td>
		<td>ico</td>
		<td>-</td>
		</tr>
		<tr>
		<td rowspan="2">선</td>
		<td>line_방향</td>
		<td>일반 실선</td>
		</tr>
		<tr>
		<td>line_dot_방향</td>
		<td>점선</td>
		</tr>
		<tr>
		<td>배경</td>
		<td>bg</td>
		<td>-</td>
		</tr>
		<tr>
		<td>섬네일 이미지</td>
		<td>thumb</td>
		<td>-</td>
		</tr>
		<tr>
		<td>페이징</td>
		<td>paging</td>
		<td>-</td>
		</tr>
		<tr>
		<td>배너</td>
		<td>bnr</td>
		<td>-</td>
		</tr>
		<tr>
		<td rowspan="5">텍스트</td>
		<td>txt</td>
		<td>일반 텍스트</td>
		</tr>
		<tr>
		<td>txt_bar</td>
		<td>구분선 텍스트</td>
		</tr>
		<tr>
		<td>num</td>
		<td>ex) num1, num2, ... - 숫자 사용 시 언더스코어(_)사용 X</td>
		</tr>
		<tr>
		<td>copyright</td>
		<td>-</td>
		</tr>
		<tr>
		<td>time</td>
		<td>날짜 및 시간</td>
		</tr>
		<tr>
		<td>강조</td>
		<td>emph</td>
		<td>-</td>
		</tr>
		<tr>
		<td rowspan="2">링크</td>
		<td>link</td>
		<td>일반 링크</td>
		</tr>
		<tr>
		<td>more</td>
		<td>더 보기 링크</td>
		</tr>
		<tr>
		<td>팝업</td>
		<td>popup</td>
		<td>-</td>
		</tr>
		<tr>
		<td>레이어</td>
		<td>layer</td>
		<td>-</td>
		</tr>
		<tr>
		<td>광고</td>
		<td>ad</td>
		<td>-</td>
		</tr>
		<tr>
		<td>스페셜</td>
		<td>spe</td>
		<td>검색 스페셜 용도</td>
		</tr>
		<tr>
		<td>위젯</td>
		<td>widget_소재명</td>
		<td>-</td>
		</tr>
		<tr>
		<td>상세내용</td>
		<td>desc</td>
		<td>-</td>
		</tr>
		<tr>
		<td>댓글</td>
		<td>cmt</td>
		<td>-</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">subfix</h4>
		<ul class="lst_type">
		<li>하부 기호로서 subfix는 prefix와 함께 부가설명 용도로 사용한다.
			<pre class="brush:html">ex) ico_arr_news.gif</pre>
		</li>
		</ul>
		<table class="tb_grid">
		<caption>[ 분류별 subfix 부가설명 ]</caption>
		<thead>
		<tr>
		<th scope="col">분류</th>
		<th scope="col">subfix</th>
		<th scope="col">부가설명</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>공용</td>
		<td>comm</td>
		<td>전역으로만 사용</td>
		</tr>
		<tr>
		<td>위치변화</td>
		<td>top&frasl;mid&frasl;btm&frasl;lft&frasl;rgt</td>
		<td>-</td>
		</tr>
		<tr>
		<td>순서변화</td>
		<td>fst&frasl;lst</td>
		<td>-</td>
		</tr>
		<tr>
		<td>그림자</td>
		<td>shadow</td>
		<td>-</td>
		</tr>
		<tr>
		<td>화살표</td>
		<td>arr</td>
		<td>-</td>
		</tr>
		<tr>
		<td>버튼상태변화</td>
		<td>nor</td>
		<td>-</td>
		</tr>
		<tr>
		<td>방향</td>
		<td>hori&frasl;vert</td>
		<td>-</td>
		</tr>
		<tr>
		<td>카테고리</td>
		<td>cate</td>
		<td>-</td>
		</tr>
		<tr>
		<td>순위</td>
		<td>rank</td>
		<td>-</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">suffix</h4>
		<ul class="lst_type">
		<li>접미사를 의미하는 것으로, prefix와 함께 부가설명 용도로 사용하며 주로 상태를 나타내는 데 사용된다.
			<pre class="brush:html">ex) btn_confirm_on, btn_prev 등</pre>
		</li>
		</ul>
		<table class="tb_grid">
		<caption>[ 분류별 suffix 부가설명 ]</caption>
		<thead>
		<tr>
		<th scope="col">분류</th>
		<th scope="col">suffix</th>
		<th scope="col">부가설명</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>상태변화</td>
		<td>_on&frasl;_off&frasl;_over&frasl;_hit&frasl;_focus</td>
		<td>-</td>
		</tr>
		<tr>
		<td>위치변화</td>
		<td>_top&frasl;_mid &frasl;_btm&frasl;_lft&frasl;_rgt</td>
		<td>-</td>
		</tr>
		<tr>
		<td>순서변화</td>
		<td>_fst&frasl;_lst</td>
		<td>-</td>
		</tr>
		<tr>
		<td>이전&frasl;다음</td>
		<td>_prev&frasl;_next</td>
		<td>-</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">대체 텍스트 &frasl; 예약어</h4>
		<ul>
			<li>대체텍스트 제공을 위한 여러 기법별 공용 클래스명 정의</li>
			<li>예약어는 미리 정의된 네임을 사용하는 것으로 레이아웃 같은 경우에 주로 사용된다.</li>
		</ul>
		<table class="tb_grid">
		<caption>[ 분류별 대체 텍스트 &frasl; 예약어 부가설명 ]</caption>
		<thead>
		<tr>
		<th scope="col">분류</th>
		<th scope="col">클래스명</th>
		<th scope="col">부가설명</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td rowspan="4">대체 텍스트</td>
		<td>ir_pm</td>
		<td>image 대체텍스트 용도(text-indent)</td>
		</tr>
		<tr>
		<td>ir_wa</td>
		<td>image 대체텍스트 용도(z-index)</td>
		</tr>
		<tr>
		<td>screen_out</td>
		<td>숨김 텍스트 용도(absolute)</td>
		</tr>
		<tr>
		<td>screen_hide</td>
		<td>숨김 텍스트 용도(visibility)</td>
		</tr>
		<tr>
		<td rowspan="5">예약어</td>
		<td>skipnav</td>
		<td>웹접근성용바로가기 영역</td>
		</tr>
		<tr>
		<td>wrap</td>
		<td>페이지를 감싸는 전체영역</td>
		</tr>
		<tr>
		<td>header</td>
		<td>머리글 영역</td>
		</tr>
		<tr>
		<td>content</td>
		<td>본문 영역</td>
		</tr>
		<tr>
		<td>footer</td>
		<td>바닥글 영역</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //prefix/subfix/suffix 정의 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>