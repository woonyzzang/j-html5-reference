<?php require '../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>Check List : <?php echo TITLE_CONVENTION_HTML; ?></title>
<?php include RELATIEV_PATH_V1.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- Image 가이드 설명 -->
	<section>
		<h1 class="s_tit">PC&frasl;모바일 웹 접근성 체크리스트</h1>

		<dl class="definition">
		<dt>체크리스트</dt>
		<dd>웹표준 개발자가 업무간 체크해야하는 확인 사항들로 내부체크리스트와 외주 대행업무 전달시 지켜져야 하는 가이드가 통합적으로 정리되어 있습니다.</dd>
		</dl>
	</section>
	<!-- //Image 가이드 설명 -->
	<!-- 체크리스트 항목 -->
	<section id="summary1">
		<h3 class="s_tit">체크 리스트 항목</h3>
		<table class="tb_grid">
		<caption>[ 체크 리스트 항목 표 ]</caption>
		<thead>
		<tr>
		<th colspan="2" rowspan="2" scope="col">항목</th>
		<th scope="col">&nbsp;</th>
		<th scope="col">&nbsp;</th>
		<th scope="col">체크리스트별 책임</th>
		</tr>
		<tr>
		<th scope="col">&nbsp;</th>
		<th scope="col">&nbsp;</th>
		<th scope="col">마크업</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td rowspan="2">웹표준</td>
		<td><a href="#">(필수) W3C HTML validator 통과했는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>O</td>
		</tr>
		<tr>
		<td><a href="#">(필수) W3C CSS validator 통과했는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>O</td>
		</tr>
		<tr>
		<td rowspan="16">마크업 컨벤션</td>
		<td rowspan="7"><a href="#">(필수) Cross Browsing 되는가?</a></td>
		<td rowspan="4">PC(Window)</td>
		<td>IE7</td>
		<td>O</td>
		</tr>
		<tr>
		<td>IE8(주)</td>
		<td>O</td>
		</tr>
		<tr>
		<td>IE9</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>FF, Chrome, Safari, Opera (최신)</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>PC(Mac)</td>
		<td>FF, Chrome, Safari, Opera (최신)</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td rowspan="2">Mobile</td>
		<td>Android 4.0 (주0S)</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>iOS 6.1</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">DOCTYPE 가이드를 따르고 있는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">레이아웃 가이드를 따르고 있는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">heading룰이 지켜졌는가? (권장사항)</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">Link 가이드룰이 지켜졌는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">image 가이드룰이 지켜졌는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">image가 가이드맞게 Sprite 되었는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">image의 src경로가 로컬이 아닌 서버경로로 바꿨는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">링크영역이 올바른지 체크해보았는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">CSS 가이드룰이 지켜졌는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td rowspan="7">웹접근성</td>
		<td><a href="#">(필수) 본문바로가기 및 스킵내비게이션을 제공하는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">(필수) 텍스트가 아닌 콘텐츠에 적절한 대체 콘텐츠가 제공이 되어 있는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">(필수) 새창링크에 target="_blank" 속성이 있는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">(필수) 링크 및 마우스이벤트요소가 키보드컨트롤로 모두 접근이 가능한가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">온라인 서식요소(form, input...)가 접근성인 구조로 마크업 되어 있는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">table요소가 데이터테이블로서 사용되며 접근성에 맞게 마크업되어 있는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td><a href="#">(필수) frame, iframe에 title제공을 해주는가?</a></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>2</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //체크리스트 항목 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>