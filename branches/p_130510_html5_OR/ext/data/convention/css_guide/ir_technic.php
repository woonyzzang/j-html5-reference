<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>IR Technic : <?php echo TITLE_CONVENTION_HTML; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- IR 기법 가이드 -->
	<section>
		<h1 class="s_tit">IR 기법</h1>
		<div id="docSummary" class="idx_summary">
			<div class="inner" style="display:none">
				<h2 class="blind">IR 기법 색인</h2>
				<ul>
				<li><a href="#summary1" rel="bookmark">Phark Method (권장)</a></li>
				<li><a href="#summary2" rel="bookmark">WA IR (권장)</a></li>
				<li><a href="#summary3" rel="bookmark">Farhner Image Replacement</a></li>
				<li><a href="#summary4" rel="bookmark">Dwyer Method</a></li>
				<li><a href="#summary5" rel="bookmark">Gilder&frasl;Levin Method</a></li>
				<li><a href="#summary6" rel="bookmark">Leahy&frasl;Langridge Method</a></li>
				<li><a href="#summary7" rel="bookmark">span padding : applied Method</a></li>
				<li><a href="#summary8" rel="bookmark">script replace Method</a></li>
				</ul>
				<a href="#none" data-btn="smr" class="btn_lst clse">목차닫기</a>
			</div>
			<a href="#none" data-btn="smr" class="btn_lst open">목차보기</a>
		</div>

		<dl class="definition">
		<dt>IR 기법</dt>
		<dd>IR 기법은 이미지 대체텍스트 제공을 위한 CSS 기법으로 다양한 CSS 기법을 사용하여 이미지 대체텍스트를 제공할 수가 있으며, 이 중에 널리 알려진 기법들을 소개하고자 한다. 여러 가지 기법 중에서 Phark Method와 WA IR 기법을 주로 사용하여 대체텍스트를 제공 해주는 걸 권장한다.</dd>
		</dl>
	</section>
	<!-- //IR 기법 가이드 -->
	<!-- //Phark Method -->
	<section id="summary1">
		<h3 class="s_tit">Phark Method (권장)</h3>
		<p class="panel info">이미지로 대체할 엘리먼트에 배경이미지를 설정하고 글자는 text-indent를 이용하여 화면 바깥으로(-9999px만큼 내어 쓰기) 빼내어 보이지 않게 하는 방법이다.</p>
		<dl class="category">
		<dt>CSS</dt>
		<dd>
			<pre class="brush:html">
				button{display:block;width:49px;height:36px;margin:0;padding:0;border:none;background:url(btn_search.gif) no-repeat;text-indent:-9999px}
				a{display:block;overflow:hidden;float:left;width:49px;height:36px;background:url(btn_search.gif) no-repeat;text-indent:-9999px}
			</pre>
		</dd>
		<dt>HTML</dt>
		<dd>
			<pre class="brush:html">
				&lt;button type="submit"&gt;검색&lt;/button&gt;
				&lt;a href="#"&gt;검색&lt;/a&gt;
			</pre>
		</dd>
		</dl>
		<table class="tb_grid">
		<caption>[ Phark Method 방식의 각 항목의 장단점 ]</caption>
		<thead>
		<tr>
		<th scope="col">항목</th>
		<th scope="col">장점</th>
		<th scope="col">단점</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>스크린 리더기 읽어줌</td>
		<td>○</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>추가적인 태그 사용 안 함</td>
		<td>○</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>CSS on &frasl; Image off 시 텍스트 안보임</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //CPhark Method -->
	<!-- WA IR -->
	<section id="summary2">
		<h3 class="s_tit">WA IR (권장)</h3>
		<p class="panel info">이미지로 대체할 엘리먼트에 배경이미지를 설정하고 글자는 span 태그로 감싼 후 z-index:-1을 이용하여 화면에 안보이게 처리하는 방법이다.</p>
		<dl class="category">
		<dt>CSS</dt>
		<dd>
			<pre class="brush:html">
				body{position:relative;z-index:0;margin:15px;padding:0;background-color:#fafafa}
				button{width:49px;height:36px;margin:0;padding:0;border:none;background:url(btn_search.gif) no-repeat}
				a{display:block;width:49px;height:36px;font-weight:bold;font-size:13px;background:url(btn_search.gif) no-repeat;color:#4b5bc9;text-decoration:none}
				span{display:block;position:relative;z-index:-1;padding:8px 0;border:1px solid #bcc1ec;background-color:#F1F3FF;text-align:center}
			</pre>
		</dd>
		<dt>HTML</dt>
		<dd>
			<pre class="brush:html">
				&lt;button type="submit"&gt;&lt;span&gt;검색&lt;/span&gt;&lt;/button&gt;
				&lt;a href="#"&gt;&lt;span&gt;검색&lt;/span&gt;&lt;/a&gt;
			</pre>
		</dd>
		</dl>
		<table class="tb_grid">
		<caption>[ WA IR 방식의 각 항목의 장단점 ]</caption>
		<thead>
		<tr>
		<th scope="col">항목</th>
		<th scope="col">장점</th>
		<th scope="col">단점</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>스크린 리더기 읽어줌</td>
		<td>○</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>CSS on &frasl; Image off 시 텍스트 보임</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		<tr>
		<td>추가적인 태그 사용함</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		<tr>
		<td>position 속성 사용(성능 관련 이슈)</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //WA IR -->
	<!-- Farhner Image Replacement -->
	<section id="summary3">
		<h3 class="s_tit">Farhner Image Replacement</h3>
		<p class="panel info">이미지로 대체할 엘리먼트에 배경이미지를 설정하고 글자는 span태그로 감싼 후 display:none 을 이용하여 화면에 안보이게 처리하는 방법이다.</p>
		<dl class="category">
		<dt>CSS</dt>
		<dd>
			<pre class="brush:html">
				button{width:49px;height:36px;margin:0;padding:0;border:none;background:url(btn_search.gif) no-repeat}
				a{display:block;width:49px;height:36px;background:url(btn_search.gif) no-repeat}
				span{display:none}
			</pre>
		</dd>
		<dt>HTML</dt>
		<dd>
			<pre class="brush:html">
				&lt;button type="submit"&gt;&lt;span&gt;검색&lt;/span&gt;&lt;/button&gt;
				&lt;a href="#"&gt;&lt;span&gt;검색&lt;/span&gt;&lt;/a&gt;
			</pre>
		</dd>
		</dl>
		<table class="tb_grid">
		<caption>[ Farhner Image Replacement 방식의 각 항목의 장단점 ]</caption>
		<thead>
		<tr>
		<th scope="col">항목</th>
		<th scope="col">장점</th>
		<th scope="col">단점</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>스크린 리더기 안읽어줌</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		<tr>
		<td>CSS on &frasl; Image off 시 텍스트 안보임</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		<tr>
		<td>추가적인 태그 사용함</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //Farhner Image Replacement -->
	<!-- Dwyer Method -->
	<section id="summary4">
		<h3 class="s_tit">Dwyer Method</h3>
		<p class="panel info">이미지로 대체할 엘리먼트에 배경이미지를 설정하고 글자는 span태그로 감싼 후 width와 height를 각각 0으로 하여 글자를 숨기는 방법이다.</p>
		<dl class="category">
		<dt>CSS</dt>
		<dd>
			<pre class="brush:html">
				button{width:49px;height:36px;margin:0;padding:0;border:none;background:url(btn_search.gif) no-repeat}
				a{display:block;width:49px;height:36px;background:url(btn_search.gif) no-repeat}
				span{display:block;overflow:hidden;width:0;height:0}
			</pre>
		</dd>
		<dt>HTML</dt>
		<dd>
			<pre class="brush:html">
				&lt;button type="submit"&gt;&lt;span&gt;검색&lt;/span&gt;&lt;/button&gt;
				&lt;a href="#"&gt;&lt;span&gt;검색&lt;/span&gt;&lt;/a&gt;
			</pre>
		</dd>
		</dl>
		<table class="tb_grid">
		<caption>[ Dwyer Method 방식의 각 항목의 장단점 ]</caption>
		<thead>
		<tr>
		<th scope="col">항목</th>
		<th scope="col">장점</th>
		<th scope="col">단점</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>스크린 리더기 읽어줌</td>
		<td>○</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>추가적인 태그 사용함</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		<tr>
		<td>CSS on &frasl; Image off 시 텍스트 안보임</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //Dwyer Method -->
	<!-- Gilder/Levin Method -->
	<section id="summary5">
		<h3 class="s_tit">Gilder&frasl;Levin Method</h3>
		<p class="panel info">이미지로 대체할 엘리먼트 내에 빈 span태그를 추가하여 배경이미지를 설정하고 &#39;position:absolute&#39; 스타일을 이용하여 글자를 덮는 방법이다.</p>
		<dl class="category">
		<dt>CSS</dt>
		<dd>
			<pre class="brush:html">
				button{width:49px;height:36px;margin:0;padding:0;border:none;background:url(btn_search.gif) no-repeat}
				a{display:block;width:49px;height:36px;background:url(btn_search.gif) no-repeat}
				span{display:block;overflow:hidden;width:0;height:0}
			</pre>
		</dd>
		<dt>HTML</dt>
		<dd>
			<pre class="brush:html">
				&lt;button type="submit"&gt;&lt;span&gt;검색&lt;/span&gt;&lt;/button&gt;
				&lt;a href="#"&gt;&lt;span&gt;검색&lt;/span&gt;&lt;/a&gt;
			</pre>
		</dd>
		</dl>
		<table class="tb_grid">
		<caption>[ Gilder&frasl;Levin 방식의 각 항목의 장단점 ]</caption>
		<thead>
		<tr>
		<th scope="col">항목</th>
		<th scope="col">장점</th>
		<th scope="col">단점</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>스크린 리더기 읽어줌</td>
		<td>○</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>CSS on &frasl; Image off 시 텍스트 보임</td>
		<td>○</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>추가적인 태그 사용함</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		<tr>
		<td>투명한 이미지인 경우 텍스트가 비칠 수 있음</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		<tr>
		<td>파폭2.0&frasl;크롬&frasl;IE5.0에서 button 요소, span 요소의 위치가 약간 밀림</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //Gilder/Levin Method -->
	<!-- Leahy/Langridge Method -->
	<section id="summary6">
		<h3 class="s_tit">Leahy&frasl;Langridge Method</h3>
		<p class="panel info">이미지로 대체할 엘리먼트에 배경이미지를 설정하고 padding-top의 값을 이미지의 높이만큼 주어 글자를 밑으로 밀어내어 숨기는 방법이다.</p>
		<dl class="category">
		<dt>CSS</dt>
		<dd>
			<pre class="brush:html">
				button{display:block;overflow:hidden;width:49px;height:36px;padding:36px 0 0 0;border:0 none;background:url(btn_search.gif) no-repeat}
				a{display:block;overflow:hidden;width:49px;height:0px !important;height:36px;padding:36px 0 0 0;background:url(btn_search.gif) no-repeat}
			</pre>
		</dd>
		<dt>HTML</dt>
		<dd>
			<pre class="brush:html">
				&lt;button type="submit"&gt;검색&lt;/button&gt;
				&lt;a href="#"&gt;검색&lt;/a&gt;
			</pre>
		</dd>
		</dl>
		<table class="tb_grid">
		<caption>[ Leahy&frasl;Langridge Method 방식의 각 항목의 장단점 ]</caption>
		<thead>
		<tr>
		<th scope="col">항목</th>
		<th scope="col">장점</th>
		<th scope="col">단점</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>스크린 리더기 읽어줌</td>
		<td>○</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>추가적인 태그 사용 안함</td>
		<td>○</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>CSS on &frasl; Image off 시 텍스트 안보임</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		<tr>
		<td>IE 5에서 제대로 출력하기 위해 button 요소를 제외한 다른 요소에서는 Box model heck을 사용해야함</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //Leahy/Langridge Method -->
	<!-- span padding : applied Method -->
	<section id="summary7">
		<h3 class="s_tit">span padding : applied Method</h3>
		<p class="panel info">이미지로 대체할 엘리먼트에 배경이미지를 설정하고 글자는 span으로 감싼 후 블럭화하여 padding-top의 값을 이미지의 높이만큼 주어 글자를 밑으로 밀어내어 숨기는 방법이다.</p>
		<dl class="category">
		<dt>CSS</dt>
		<dd>
			<pre class="brush:html">
				button{display:block;overflow:hidden;width:49px;height:36px;margin:0;padding:0;border:none;background:url(btn_search.gif) no-repeat}
				a{display:block;overflow:hidden;width:49px;height:36px;background:url(btn_search.gif) no-repeat}
				span{display:block;padding-top:40px}
			</pre>
		</dd>
		<dt>HTML</dt>
		<dd>
			<pre class="brush:html">
				&lt;button type="submit"&gt;&lt;span&gt;검색&lt;/span&gt;&lt;/button&gt;
				&lt;a href="#"&gt;&lt;span&gt;검색&lt;/span&gt;&lt;/a&gt;
			</pre>
		</dd>
		</dl>
		<table class="tb_grid">
		<caption>[ span padding : applied Method 방식의 각 항목의 장단점 ]</caption>
		<thead>
		<tr>
		<th scope="col">항목</th>
		<th scope="col">장점</th>
		<th scope="col">단점</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>스크린 리더기 읽어줌</td>
		<td>○</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>추가적인 태그 사용함</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		<tr>
		<td>CSS on &frasl; Image off 시 텍스트 안보임</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //span padding : applied Method -->
	<!-- script replace Method -->
	<section id="summary8">
		<h3 class="s_tit">script replace Method</h3>
		<p class="panel info">자바스크립트를 이용하여 이미지로 대체할 엘리먼트의 텍스트를 img태그로 교체하는 방법이다.</p>
		<dl class="category">
		<dt>JavaScript</dt>
		<dd>
			<pre class="brush:html">
				function replaceImg(){
					replaceImgBtn = document.getElementById("btn");
					replaceImgBtn.innerHTML = "&lt;img src=\"" + replaceImgBtn.className + ".gif\" alt=\"" + replaceImgBtn.innerHTML + "\" /&gt;";
					replaceImgA = document.getElementById("btnA");
					replaceImgA.innerHTML = "&lt;img src=\"" + replaceImgA.className + ".gif\" alt=\"" + replaceImgA.innerHTML + "\" /&gt;";
				}

				window.onload = replaceImg;
			</pre>
		</dd>
		<dt>CSS</dt>
		<dd>
			<pre class="brush:html">
				button width:49px;height:36px;margin:0;padding:0;border:0 none;background-image:none;background-color:transparent}
				button img{display:block}
				a img{border:0 none}
			</pre>
		</dd>
		<dt>HTML</dt>
		<dd>
			<pre class="brush:html">
				&lt;button type="submit" id="btn" class="btn_search"&gt;검색&lt;/button&gt;
				&lt;a href="#" id="btnA" class="btn_search"&gt;검색&lt;/a&gt;
			</pre>
		</dd>
		</dl>
		<table class="tb_grid">
		<caption>[ script replace Method 방식의 각 항목의 장단점 ]</caption>
		<thead>
		<tr>
		<th scope="col">항목</th>
		<th scope="col">장점</th>
		<th scope="col">단점</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>스크린 리더기 읽어줌</td>
		<td>○</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>CSS on &frasl; Image off 시 텍스트 보임</td>
		<td>○</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>추가적인 태그 사용함</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		<tr>
		<td>이미지 절대경로를 포함한 class명과 별도의 script를 필요로함</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		<tr>
		<td>파폭2.0&frasl;크롬&frasl;IE5.0에서 button 요소, span 요소의 위치가 약간 밀림</td>
		<td>&nbsp;</td>
		<td>○</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //script replace Method -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>