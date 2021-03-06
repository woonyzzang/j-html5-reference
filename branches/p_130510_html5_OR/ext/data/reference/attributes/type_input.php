<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>type 속성 (input) : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-input-element.html#attr-input-type" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'type',
		meaning: 'input',
		item: [{
			desc:'input 요소의 type 속성은 데이터 타입과 연관된 컨트롤들을 조절합니다.'
		}],
		txt: '키워드와 속성 상태',
		grid: true,
		txt2: '키워드와 속성 상태입니다. 아래 표는 type 속성 별 키워드와 속성의 상태를 열거합니다. 데이터 타입은 type 속성값의 형태를 열거합니다. 컨트롤 타입은 데이터 타입에 대응하는 type 속성의 형태를 나타내며, 키워드가 정의되지 않았다면 기본 Text state입니다.',
		ctgr: [
			{tit:'Hidden state', lst2:[
				{item:'사용자에 의해 시험되거나 조작되지 않게끔 의도된 값을 나타냅니다.'},
				{item:'name 속성이 존재하고, 그 값이 charset 문자열과 대소문자 구분한 아스키 값과 일치한다면, 요소의 value 속성은 반드시 생략되어야 합니다.'}
			]},
			{tit:'Text state and Search state', lst2:[
				{item:'값을 편집할 수 있는 한줄의 평범한 텍스트입니다.'},
				{item:'value 속성을 사용했다면 값은 줄바꿈 문자를 포함할 수 없습니다.'},
				{item:'(Text state와 Search state의 차이는 일차적으로는 스타일 문제입니다: 검색 필드가 일반적인 텍스트 필드들과 구분되는 플랫폼이라면 Search state는 일반적인 텍스트 필드와는 외관상의 차이를 가지게 될 것입니다.)'}
			]},
			{tit:'Telephone state', lst2:[
				{item:'편집 가능한 전화번호를 포함하는 요소입니다.'},
				{item:'value 속성을 사용했다면 그 값은 줄바꿈 문자를 포함할 수 없습니다.'},
				{item:'(URL state와 E-mail state와는 다르게 Telephone state는 특정한 문법을 강제하지 않습니다. 이것은 의도된 것입니다 - 사실, 전화번호에는 수없이 많은 형태가 있기에, 이 필드는 정형화 될 수 없습니다. 필드의 값을 정형화할 필요가 있다면, pattern 속성을 사용하거나 setCustomValidity() 메소드를 사용해서 클라이언트 사이드 유효성 검사 메커니즘을 사용하지 않도록 하는 것이 좋습니다.)'}
			]},
			{tit:'URL state', lst2:[
				{item:'편집가능한, 하나의 절대 URL을 나타냅니다.'},
				{item:'value 속성을 사용했다면 값은 올바른 절대 URL 이어야 합니다. 단, URL을 둘러싼 공백은 허용됩니다.'}
			]},
			{tit:'E-mail state', lst2:[
				{item:'이 상태의 동작은 multiple 속성의 여부에 따라 다릅니다.'},
				{item:'multiple 속성이 없을 때, 요소는 하나의 이메일 주소를 편집할 수 있는 컨트롤을 나타냅니다. 또한 value 속성을 사용했다면 값은 반드시 하나의 유효한 이메일 주소여야 합니다.'},
				{item:'multiple 속성이 있다면, 요소 값으로 주어진 이메일 주소들을 추가하고, 제거하고, 편집할 수 있는 컨트롤을 표시합니다. 또한 value 속성을 사용했다면 값은 반드시 하나의 유효한 이메일 주소여야 합니다.'},
				{item:'[유효한 이메일 주소란 ABNF 표현식, 1*( atext ⁄ "." ) "@" ldh-str 1*( "." ldh-str )에 해당하는 것입니다. 여기서 atext는 RFC5322 3.2.3 절의 내용을 말하며, ldh-str이란 RFC1034 3.5절에 해당하는 것입니다. 유효한 이메일 주소 목록은 콤마로 구분된 유효한 이메일 주소들의 목록입니다.]'},
				{item:'(이러한 요구 사항은 RFC5322에 대한 의도된 위반입니다. RFC5322는 이메일 주소에 대한 문법을 정의하는데, 이것은 @ 앞의 문자열에 대해 지나치게 완고하고 @ 뒤의 문자열에 대해서는 지나치게 모호하며, 여기에서 실제적인 의미를 가지기에는 너무 느슨합니다. 느슨함이란 주석, 공백문자, 대부분의 사용자에게 친숙하지 않은 따옴표 사용법의 허용 등을 말합니다.)'}
			]},
			{tit:'Password state', lst2:[
				{item:'한줄의 평범한 텍스트를 나타냅니다. 사용자 에이전트는 다른 사람이 이 값을 볼 수 없도록 숨겨야 합니다.'},
				{item:'값은 줄바꿈 문자를 포함할 수 없습니다.'}
			]},
			{tit:'Date and Time state', lst2:[
				{item:'특정한 국제적인 날짜와 시간을 나타내는 문자열을 요소 값으로 설정함을 나타냅니다.'},
				{item:'value 속성을 사용했다면 값은 유효한 국제적 날짜와 시간 문자열이어야 합니다.'},
				{item:'min 속성이나 max 속성을 사용했다면 값은 유효한 국제적 날짜와 시간 문자열이어야 합니다.'},
				{item:'step 속성은 초 단위로 표현됩니다. 기본 값은 60초입니다.'}
			]},
			{tit:'Date state', lst2:[
				{item:'특정한 날짜를 설정하는 컨트롤을 나타냅니다.'},
				{item:'value 속성을 사용했다면 그 값은 유효한 날짜 문자열이어야 합니다.'},
				{item:'min 속성이나 max 속성을 사용했다면 그 값은 유효한 날짜 문자열이어야 합니다.'},
				{item:'step 속성은 일 단위로 표현됩니다. 기본 값은 1일입니다.'}
			]},
			{tit:'Month state', lst2:[
				{item:'특정 월을 나타내는 설정하는 컨트롤을 나타냅니다.'},
				{item:'value 속성을 사용했다면 그 값은 유효한 월 문자열이어야 합니다.'},
				{item:'min 속성이나 max 속성을 사용했다면 그 값은 유효한 국제적 월 문자열이어야 합니다.'},
				{item:'step 속성은 월 단위로 표현됩니다. 기본 값은 1개월입니다.'}
			]},
			{tit:'Week state', lst2:[
				{item:'특정한 주(week) 를 설정하는 컨트롤을 나타냅니다.'},
				{item:'value 속성을 사용했다면 그 값은 유효한 주 문자열이어야 합니다.'},
				{item:'min 속성이나 max 속성을 사용했다면 그 값은 그 값은 유효한 주 문자열이어야 합니다.'},
				{item:'step 속성의 주 단위로 표현됩니다. 기본 값은 1주일입니다.'}
			]},
			{tit:'Time state', lst2:[
				{item:'특정한 시간을 표현하는 문자열을 수정할 수 있는 컨트롤을 나타냅니다.'},
				{item:'value 속성을 사용했다면 그 값은 유효한 시간 문자열이어야 합니다.'},
				{item:'min 속성이나 max 속성을 사용했다면 그 값은 그 값은 유효한 시간 문자열이어야 합니다.'},
				{item:'step 속성은 초 단위로 표현됩니다. 기본 값은 60초입니다.'}
			]},
			{tit:'Local Date and Time state', lst2:[
				{item:'타임존 옵셋 정보가 없는, 지역적 날짜와 시간을 설정하는 컨트롤을 나타냅니다.'},
				{item:'value 속성을 사용했다면 그 값은 유효한 날짜와 시간 문자열이어야 합니다.'},
				{item:'min 속성이나 max 속성을 사용했다면 그 값은 그 값은 유효한 날짜와 시간 문자열이어야 합니다.'},
				{item:'step 속성은 초 단위로 표현됩니다. 기본 값은 60초입니다.'}
			]},
			{tit:'Number state', lst2:[
				{item:'숫자를 나타내는 문자열을 설정할 수 있는 컨트롤을 나타냅니다.'},
				{item:'value 속성을 사용했다면 그 값은 유효한 부동소수점 숫자여야 합니다.'},
				{item:'min 속성이나 max 속성을 사용했다면 그 값은 유효한 부동소수점 숫자이어야 합니다.'},
				{item:'step 속성의 기본 값은 1입니다(이 값으로는 정수만을 허용합니다. min 속성이 정수가 아닌 값을 갖고 있다면 예외가 될 수 있습니다).'}
			]},
			{tit:'Range state', lst2:[
				{item:'숫자를 나타내는 문자열을 설정할 수 있는 컨트롤을 나타냅니다. 하지만 그 정확한 값이 중요하지 않다는 의미를 내포하고 있으며, 사용자 에이전트는 number state에서보다는 좀 더 간단한 인터페이스를 제공해도 됩니다.'},
				{item:'value 속성을 사용했다면 그 값은 유효한 부동소수점 숫자이어야 합니다.'},
				{item:'min 속성이나 max 속성을 사용했다면 그 값은 유유효한 부동소수점 숫자이어야 합니다.'},
				{item:'min 속성의 기본 최소값은 0 입니다.'},
				{item:'max 속성의 기본 최대값은 100 입니다.'},
				{item:'기본 값은 최소값에다가, 최대값과 최소값의 차이의 절반을 더한 값입니다.( 최소값+{(최대값-최소값)/2} ) 최대값이 최소값보다 작은 경우는 기본 값은 최소값과 같게 됩니다.'},
				{item:'step 속성의 기본 값은 1입니다. (전수만을 허용하며, min 속성이 정수가 아닌 경우에는 예외입니다.)'}
			]},
			{tit:'Color state', lst2:[
				{item:'간단한 색상을 나타내는 문자열을 설정할 수 있는 컨트롤을 나타냅니다.'},
				{item:'value 속성을 사용했다면 그 값은 유효한 간단한 색상이어야 합니다.'}
			]},
			{tit:'Checkbox state', lst2:[
				{item:'checked 상태를 나타내는 두가지 상태 컨트롤을 나타냅니다. checked 상태가 참(ture)이면 긍정적 선택을 거짓(false)이라면 부정적 선택을 나타냅니다. IDL 속성 중 indeterminate가 참(ture)이면 컨트롤의 선택은 마치 제 3의 상태, 모호한 상태인 것 처럼 감추어져야 합니다.'},
				{item:'(컨트롤 자체는 세가지 상태 컨트롤이 아닙니다. 설령 IDL 속성 중 indeterminate가 참(ture)로 설정되어 있다 해도 그렇습니다. 해당 IDL 속성은 단지 외관상으로만 제 3의 상태를 부여할 뿐입니다.)'}
			]},
			{tit:'Radio Button state', lst2:[
				{item:'다른 input 요소들과 함께 그룹을 이루며, 그 중 하나만이 checked 상태를 가질 수 있는 라디오 버튼 그룹을 형성하는 컨트롤을 나타냅니다. checked 상태가 참(ture)인 요소는 해당 그룹의 선택된 컨트롤을 나타냅니다. 아리라면(거짓(false)), 선택되지 않은 컨트롤을 나타냅니다.'},
				{item:'a라는 input 요소를 포함하는 라디오 버튼그룹은 다음 조건을 만족하는 input 요소들 b 역시 포함하게 됩니다.', lst3:[
					{item:'input 요소 b의 type 속성은 Radio Button state여야 합니다.'},
					{item:'a와 b는 같은 폼 소유자를 가져야 합니다. 혹은, 둘 다 폼 소유자가 없어야 합니다.'},
					{item:'a와 b는 모두 name 속성을 가져야 하며, a의 name 속성의 값은 b의 name 속성의 값과 같아야 합니다. 대소문자는 구분하지 않습니다.'}
				]},
				{item:'하나의 input 요소만을 포함하는 라디오 버튼 그룹을 형성해서는 안됩니다.'},
				{item:'(라디오 버튼 그룹에 포함된 라디오 버튼들 중 어느 하나도 문서에 삽입되는 시점에서 체크되어 있지 않았다면, 그것들은 그중 하나가 체크(사용자에 의해서든, 스크립트에 의해서든)될 때 까지 인터페이스에서 체크되지 않은 상태입니다.)'}
			]},
			{tit:'File Upload state', lst2:[
				{item:'선택된 파일들의 목록을 나타냅니다. 각각의 파일들은 파일 이름, 파일 타입, 그리고 파일 몸체(파일 내용)으로 구성됩니다.'},
				{item:'accept 속성을 사용하여, 서버에서 수용하는 파일의 타입에 대해 사용자 에이전트가 힌트를 주게 할 수 있습니다. 명시 하였다면 이 속성은 콤마로 구분된 예약어의 목록입니다. 각각의 예약어들은 다음 중 하나와 매치되어야 합니다. (대소문자는 구분하지 않습니다.)'},
				{item:'예약어들은 중복될 수 없습니다. 이 중복을 체크할때는 대소문자를 구분하지 않습니다. (audio\/x-audio 와 Audio\/x-audio 는 중복입니다)'}
			]},
			{tit:'Submit Button state', lst2:[
				{item:'input 요소가 활성화 되었을 때 폼을 제출하는 버튼을 나타냅니다. 요소는 버튼이며, 특히 제출 버튼입니다.'},
				{item:'formaction 속성, formenctype 속성, formmethod 속성, formnovalidate 속성, 그리고 formtarget 속성은 폼 제출을 위한 속성입니다.'},
				{item:'(formnovalidate 속성을 사용해서 제출 버튼이 유효성 검사를 활성화시키지 않도록 할 수 있습니다.)'}
			]},
			{tit:'Image Button state', lst2:[
				{item:'사용자가 어느 한 좌표를 선택해서 폼을 제출할 수 있는 이미지, 혹은 폼을 제출할 수 있는 버튼을 나타냅니다. 요소는 버튼이며, 특히 제출 버튼입니다.'},
				{item:'이미지는 src 속성을 이용해 주어집니다. src 속성은 반드시 사용되어야 하며, 그 값은 유효한, 앞뒤로 공백을 허용하는 URL이어야 합니다. URL이 참조하는 이미지는 상호작용성을 가질 수 없고, 애니메이션은 관계 없으며, 페이지되지 않고 스크립트되지 않은 이미지여야 합니다.'},
				{item:'alt 속성은 이미지를 사용할 수 없는 사용자와 사용자 에이전트에게 대신 사용할 버튼에 대한 텍스트 레이블을 제공합니다. alt 속성은 반드시 있어야 하며, 비어있지 않은 문자열을 포함해야 합니다.'},
				{item:'input 요소는 dimension 속성을 지원합니다.'},
				{item:'formaction 속성, formenctype 속성, formmethod 속성, formnovalidate 속성, 그리고 formtarget 속성은 폼 제출을 위한 속성입니다.'},
				{item:'(이 상태는 많은 면에서 img 요소의 그것과 흡사합니다. 해당 섹션을 읽길 권합니다. 같은 요구사항들이 좀 더 자세하게 기록되어 있습니다.)'}
			]},
			{tit:'Reset Button state', lst2:[
				{item:'input 요소가 활성화 되었을 때 리셋하는 버튼을 나타냅니다. 요소는 버튼입니다.'}
			]},
			{tit:'Reset Button state', lst2:[
				{item:'아무런 기본 행동을 갖지 않는 버튼을 나타냅니다. 버튼의 레이블은 value 속성으로 제공되어야 합니다. 요소는 버튼입니다.'},
				{item:'(콘트롤은 사용자에게 보이는 형태는 제출시에 사용되는 형태와는 무관합니다. 브라우저 제작자들은 사용자가 선호하는 지역의 관습에 맞게 날짜와 시간을 표현하는 인터페이스를 사용할 것을 권장합니다.)'}
			]}
		],
		txt2 :'키워드별 내용속성',
		grid2: true,
		txt3 :'키워드별 IDL 속성과 메서드',
		grid3: true,
		txt4 :'키워드별 이벤트',
		grid4: true,
		stxt: '+ 기호는 해당 기능이 multiple 속성이 사용된 경우에만 적용됨을 나타냅니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','status', 'data', 'control'],
		data: {'items':[
			{keyword:'hidden', status:'Hidden', data:'임의의 문자열', control:'n&frasl;a'},
			{keyword:'text', status:'Text', data:'줄바꿈 없는 텍스트', control:'Text field'},
			{keyword:'search', status:'Search', data:'줄바꿈 없는 텍스트', control:'Search field'},
			{keyword:'tel', status:'Telephone', data:'줄바꿈 없는 텍스트', control:'A text field'},
			{keyword:'url', status:'URL', data:'IRI 절대경로', control:'A text field'},
			{keyword:'email', status:'E-mail', data:'이메일주소, 혹은 그것의 목록', control:'A text field'},
			{keyword:'password', status:'Password', data:'줄바꿈없는 텍스트(민감한 정보)', control:'Text field that obscures data entry (입력된 데이터를 감추는 텍스트 필드)'},
			{keyword:'datetime', status:'Date and Time', data:'타임존이 국제표준시(UTC)로 설정된 날짜와 시간(년, 월, 일, 시, 분, 초, 분할된 초)', control:'A date and time control'},
			{keyword:'date', status:'Date', data:'타임존 없는 날짜(년, 월, 일)', control:'A date control'},
			{keyword:'month', status:'Month', data:'년월을 구성하는 타임존 없는 날짜', control:'A month control'},
			{keyword:'week', status:'Week', data:'주 를 나타내는 타임존 없는 주-년 및 주 번호', control:'A week control'},
			{keyword:'time', status:'Time', data:'타임존 없는 시간(시, 분, 초, 분할된 초)', control:'A time control'},
			{keyword:'datetime-local', status:'Local Date and Time', data:'타임존 없는 날짜와 시간(년, 월, 일, 시, 분, 초, 분할된 초)', control:'A date and time control'},
			{keyword:'number', status:'Number', data:'숫자', control:'A text field or spinner control'},
			{keyword:'range', status:'Range', data:'숫자이면서, 정확한 값이 큰 의미가 없다는 의미를 내포함', control:'A slider control or similar'},
			{keyword:'color', status:'Color', data:'8비트 RGB로 구성된 sRGB 색상', control:'A color well'},
			{keyword:'checkbox', status:'Checkbox', data:'미리 정의된 목록에서 가져온 0개 이상의 값', control:'A checkbox'},
			{keyword:'radio', status:'Radio Button', data:'열거된 값', control:'A radio button'},
			{keyword:'file', status:'File Upload', data:'MIME 타입과, (선택적으로)파일명을 갖는 파일들', control:'A label and a button'},
			{keyword:'submit', status:'Submit Button', data:'열거된 값. 폼 제출을 시작하므로, 이것을 선택한 후에는 다른 값을 선택할 수 없음을 암시합니다.', control:'A button'},
			{keyword:'image', status:'Image Button', data:'특정 이미지의 크기와 관련된 좌표. 폼 제출을 시작하므로, 이것을 선택한 후에는 다른 값을 선택할 수 없음을 암시합니다.', control:'Either a clickable image, or a button'},
			{keyword:'reset', status:'Reset Button', data:'n&frasl;a', control:'A button'},
			{keyword:'button', status:'Button', data:'n&frasl;a', control:'A button'}
		]},
		proxy : {
			type: 'memory',
			reader: {
				type: 'json',
				root: 'items'
			}
		}
	}),
		storeData2 = Ext.create('Ext.data.Store',{
		fields: ['attr', 'hidden','txt_srch', 'url_tel', 'email', 'pw', 'datetime', 'localtime', 'range', 'color', 'chk_radio', 'file', 'submit', 'img', 'reset_btn'],
		data: {'items':[
			{attr:'accept', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'Yes', submit:'-', img:'-', reset_btn:'-'},
			{attr:'alt', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'Yes', reset_btn:'-'},
			{attr:'autocomplete', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'Yes', pw:'Yes', datetime:'Yes', localtime:'Yes', range:'Yes', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{attr:'checked', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'Yes', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{attr:'dirname', hidden:'-', txt_srch:'Yes', url_tel:'-', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{attr:'formaction', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'Yes', img:'Yes', reset_btn:'-'},
			{attr:'formenctype', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'Yes', img:'Yes', reset_btn:'-'},
			{attr:'formmethod', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'Yes', img:'Yes', reset_btn:'-'},
			{attr:'formnovalidate', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'Yes', img:'Yes', reset_btn:'-'},
			{attr:'formtarget', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'Yes', img:'Yes', reset_btn:'-'},
			{attr:'height', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'Yes', reset_btn:'-'},
			{attr:'list', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'Yes', pw:'-', datetime:'Yes', localtime:'Yes', range:'Yes', color:'Yes', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{attr:'max', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'Yes', localtime:'Yes', range:'Yes', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{attr:'maxlength', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'Yes', pw:'Yes', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{attr:'min', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'Yes', localtime:'Yes', range:'Yes', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{attr:'multiple', hidden:'-', txt_srch:'-', url_tel:'-', email:'Yes', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'Yes', submit:'-', img:'-', reset_btn:'-'},
			{attr:'pattern', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'Yes', pw:'Yes', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{attr:'placeholder', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'Yes', pw:'Yes', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{attr:'readonly', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'Yes', pw:'Yes', datetime:'Yes', localtime:'Yes', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{attr:'required', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'Yes', pw:'Yes', datetime:'Yes', localtime:'Yes', range:'-', color:'-', chk_radio:'Yes', file:'Yes', submit:'-', img:'-', reset_btn:'-'},
			{attr:'size', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'Yes', pw:'Yes', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{attr:'src', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'Yes', reset_btn:'-'},
			{attr:'step', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'Yes', localtime:'Yes', range:'Yes', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{attr:'width', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'Yes', reset_btn:'-'}
		]},
		proxy : {
			type: 'memory',
			reader: {
				type: 'json',
				root: 'items'
			}
		}
	}),
		storeData3 = Ext.create('Ext.data.Store',{
		fields: ['idl', 'hidden','txt_srch', 'url_tel', 'email', 'pw', 'datetime', 'localtime', 'range', 'color', 'chk_radio', 'file', 'submit', 'img', 'reset_btn'],
		data: {'items':[
			{idl:'checked', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'Yes', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{idl:'files', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'Yes', submit:'-', img:'-', reset_btn:'-'},
			{idl:'value', hidden:'default', txt_srch:'value', url_tel:'value', email:'value', pw:'value', datetime:'value', localtime:'value', range:'value', color:'value', chk_radio:'default&frasl;on', file:'filename', submit:'default', img:'default', reset_btn:'default'},
			{idl:'valueAsDate', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'Yes', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{idl:'valueAsNumber', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'Yes', localtime:'Yes', range:'Yes', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{idl:'list', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'Yes', pw:'-', datetime:'Yes', localtime:'Yes', range:'Yes', color:'Yes', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{idl:'selectedOption', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'Yes+', pw:'-', datetime:'Yes', localtime:'Yes', range:'Yes', color:'Yes', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{idl:'select()', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'-', pw:'Yes', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{idl:'selectionStart', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'-', pw:'Yes', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{idl:'selectionEnd', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'-', pw:'Yes', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{idl:'setSelectionRange()', hidden:'Yes', txt_srch:'Yes', url_tel:'Yes', email:'-', pw:'-', datetime:'-', localtime:'-', range:'-', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{idl:'stepDown()', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'Yes', localtime:'Yes', range:'Yes', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{idl:'stepUp()', hidden:'-', txt_srch:'-', url_tel:'-', email:'-', pw:'-', datetime:'Yes', localtime:'Yes', range:'Yes', color:'-', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'}
		]},
		proxy : {
			type: 'memory',
			reader: {
				type: 'json',
				root: 'items'
			}
		}
	}),
		storeData4 = Ext.create('Ext.data.Store',{
		fields: ['evt', 'hidden','txt_srch', 'url_tel', 'email', 'pw', 'datetime', 'localtime', 'range', 'color', 'chk_radio', 'file', 'submit', 'img', 'reset_btn'],
		data: {'items':[
			{evt:'input event', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'Yes', pw:'Yes', datetime:'Yes', localtime:'Yes', range:'Yes', color:'Yes', chk_radio:'-', file:'-', submit:'-', img:'-', reset_btn:'-'},
			{evt:'change event', hidden:'-', txt_srch:'Yes', url_tel:'Yes', email:'Yes', pw:'Yes', datetime:'Yes', localtime:'Yes', range:'Yes', color:'Yes', chk_radio:'Yes', file:'Yes', submit:'-', img:'-', reset_btn:'-'}
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
			{header:'상태', dataIndex:'status', width:120},
			{header:'데이터 타입', dataIndex:'data', flex:1},
			{header:'컨트롤 타입', dataIndex:'control', flex:1}
		]
	}),
		grid2 = Ext.create('Ext.grid.Panel', {
		renderTo: Ext.get('gridAttr2'),
		title: '속성 정의 목록',
		store: storeData2,
		columns: [
			{header:'Attribute', dataIndex:'attr', flex:1},
			{header:'Hidden', dataIndex:'hidden', align:'center'},
			{header:'Text, Search', dataIndex:'txt_srch', align:'center'},
			{header:'URL, Telephone', dataIndex:'url_tel', align:'center'},
			{header:'E-maill', dataIndex:'email', align:'center'},
			{header:'Password', dataIndex:'pw', align:'center'},
			{header:'Date and Time,datelDate,<br>Month, Week, Time', dataIndex:'datetime', width:160, align:'center'},
			{header:'Local Date and Time,<br>Number', dataIndex:'localtime', width:130, align:'center'},
			{header:'Range', dataIndex:'range',align:'center'},
			{header:'Color', dataIndex:'color', align:'center'},
			{header:'Checkbox,<br>Radio Button', dataIndex:'chk_radio', align:'center'},
			{header:'File Upload', dataIndex:'file', align:'center'},
			{header:'Submit Button', dataIndex:'submit', align:'center'},
			{header:'Image Button', dataIndex:'img', align:'center'},
			{header:'Reset Button,<br>Button', dataIndex:'reset_btn', align:'center'}
		]
	}),
		grid3 = Ext.create('Ext.grid.Panel', {
		renderTo: Ext.get('gridAttr3'),
		title: '속성 정의 목록',
		store: storeData3,
		columns: [
			{header:'IDL Attribute, Method', dataIndex:'idl', flex:1},
			{header:'Hidden', dataIndex:'hidden', align:'center'},
			{header:'Text, Search', dataIndex:'txt_srch', align:'center'},
			{header:'URL, Telephone', dataIndex:'url_tel', align:'center'},
			{header:'E-maill', dataIndex:'email', align:'center'},
			{header:'Password', dataIndex:'pw', align:'center'},
			{header:'Date and Time,datelDate,<br>Month, Week, Time', dataIndex:'datetime', width:160, align:'center'},
			{header:'Local Date and Time,<br>Number', dataIndex:'localtime', width:130, align:'center'},
			{header:'Range', dataIndex:'range',align:'center'},
			{header:'Color', dataIndex:'color', align:'center'},
			{header:'Checkbox,<br>Radio Button', dataIndex:'chk_radio', align:'center'},
			{header:'File Upload', dataIndex:'file', align:'center'},
			{header:'Submit Button', dataIndex:'submit', align:'center'},
			{header:'Image Button', dataIndex:'img', align:'center'},
			{header:'Reset Button,<br>Button', dataIndex:'reset_btn', align:'center'}
		]
	}),
		grid4 = Ext.create('Ext.grid.Panel', {
		renderTo: Ext.get('gridAttr4'),
		title: '속성 정의 목록',
		store: storeData4,
		columns: [
			{header:'Event', dataIndex:'evt', flex:1},
			{header:'Hidden', dataIndex:'hidden', align:'center'},
			{header:'Text, Search', dataIndex:'txt_srch', align:'center'},
			{header:'URL, Telephone', dataIndex:'url_tel', align:'center'},
			{header:'E-maill', dataIndex:'email', align:'center'},
			{header:'Password', dataIndex:'pw', align:'center'},
			{header:'Date and Time,datelDate,<br>Month, Week, Time', dataIndex:'datetime', width:160, align:'center'},
			{header:'Local Date and Time,<br>Number', dataIndex:'localtime', width:130, align:'center'},
			{header:'Range', dataIndex:'range',align:'center'},
			{header:'Color', dataIndex:'color', align:'center'},
			{header:'Checkbox,<br>Radio Button', dataIndex:'chk_radio', align:'center'},
			{header:'File Upload', dataIndex:'file', align:'center'},
			{header:'Submit Button', dataIndex:'submit', align:'center'},
			{header:'Image Button', dataIndex:'img', align:'center'},
			{header:'Reset Button,<br>Button', dataIndex:'reset_btn', align:'center'}
		]
	});
});
</script>
</body>
</html>