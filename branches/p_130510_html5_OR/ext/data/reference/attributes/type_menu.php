<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>type 속성 (menu) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @context 상태 -->
			&lt;menu type="context"&gt;
			&lt;command label="실행 취소" disabled onclick="exeCancel()"&gt;
			&lt;command label="잘라내기" disabled onclick="objCut()"&gt;
			&lt;command label="복사" disabled onclick="objCopy()"&gt;
			&lt;command label="붙여넣기" onclick="objPaste()"&gt;
			&lt;command label="삭제" disabled onclick="objDelte()"&gt;
			&lt;command label="모두 선택" onclick="allSelect()"&gt;
			&lt;command label="사전 추가" onclick="addDic()"&gt;
			&lt;command label="요소 검사" onclick="elFind()"&gt;
			&lt;/menu&gt;

			<!-- @toolbar 상태 -->
			&lt;menu type="toolbar"&gt;
			&lt;li&gt;
				&lt;menu label="마이미투"&gt;
				&lt;a href="myme2.html"&gt;마이미투&lt;/a&gt;
				&lt;a href="settings.html"&gt;환경설정&lt;/a&gt;
				&lt;a href="mobile_setting.html"&gt;휴대폰설정&lt;/a&gt;
				&lt;button type="button" onclick="logout()"&gt;로그아웃&lt;/button&gt;
				&lt;/menu&gt;
			&lt;/li&gt;
			&lt;li&gt;
				&lt;menu label="내친구들"&gt;
				&lt;a href="myfriends.html"&gt;내친구들&lt;/a&gt;
				&lt;a href="fri_request.html"&gt;친구신청&lt;/a&gt;
				&lt;a href="fri_find.html"&gt;친구찾기&lt;/a&gt;
				&lt;a href="fri_recommend.html"&gt;친구추천&lt;/a&gt;
				&lt;/menu&gt;
			&lt;/li&gt;
			&lt;li&gt;&lt;a href="mailet.html"&gt;쪽지&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="noti.html"&gt;알림&lt;/a&gt;&lt;/li&gt;
			&lt;/menu&gt;

			<!-- @list 상태 -->
			&lt;h3&gt;미투하기&lt;/h3&gt;
			&lt;menu&gt;
			&lt;li&gt;&lt;input type="checkbox" name="limit_me2" id="limit_opt_recive"&gt;&lt;label for="limit_opt_not_delivery"&gt;내가 쓴 글은 미투를 받더라도 다른 회원에게 배달되지 않도록 제한합니다.&lt;/label&gt;&lt;/li&gt;
			&lt;li&gt;&lt;input type="checkbox" name="limit_me2" id="limit_opt_me2"&gt;&lt;label for="limit_opt_me2"&gt;내가 미투한 글이 내 친구들에게 배달되지 않도록 제한합니다.&lt;/label&gt;&lt;/li&gt;
			&lt;/menu&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/interactive-elements.html#attr-menu-typed" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'type',
		meaning: 'menu',
		item: [{
			desc:'type 속성은 선언되는 메뉴의 종류를 나타냅니다.'
		}],
		txt: '속성은 context, toolbar, list 3개의 상태를 가집니다. 각각의 상태는 동일한 이름의 키워드에 연결됩니다. 이것은 단순히 커맨드의 목록일 뿐이며, 콘텍스트 메뉴를 선언하거나 툴바를 정의하는 것이 아닙니다.',
		grid: true
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','status','content'],
		data: {'items':[
			{keyword:'context', status:'context', content:'콘텍스트 메뉴를 나타내며, 활성화되어 있을때 상호작용합니다.'},
			{keyword:'toolbar', status:'toolbar', content:'툴바 메뉴를 나타냅니다.'},
			{keyword:'toolbar', status:'list', content:'순서 없는 목록을 나타내는 경우 각각의 커맨드는 li 요소로 표현되며, 각각의 아이템은 사용자가 수행하거나 활성화시킬 수 있는 커맨드를 나타냅니다.<br>자식 요소로 li 요소를 갖지 않는다면 순서 없는 목록이 아닌 경우가 되는데, 이 경우 요소는 사용 가능한 커맨드들을 설명하는 플로우 컨텐츠를 나타냅니다.'}
		]},
		proxy : {
			type: 'memory',
			reader: {
				type: 'json',
				root: 'items'
			}
		}
	});

	var grid = Ext.create('Ext.grid.Panel', {
		renderTo: Ext.get('gridAttr'),
		title: '속성 정의 목록',
		store: storeData,
		columns: [
			{header:'키워드', dataIndex:'keyword'},
			{header:'설명', dataIndex:'status'},
			{header:'설명', dataIndex:'content', flex:1}
		]
	});
});
</script>
</body>
</html>