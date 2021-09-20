/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-heart': '&#xe909;',
		'icon-heart-fill': '&#xe90a;',
		'icon-heart-1': '&#xf08a;',
		'icon-grid-view': '&#xe927;',
		'icon-row-view': '&#xe928;',
		'icon-view-1': '&#xe92d;',
		'icon-view-2': '&#xe92e;',
		'icon-view-4': '&#xe916;',
		'icon-view-3': '&#xe926;',
		'icon-menu2': '&#xe120;',
		'icon-menu': '&#xe5d2;',
		'icon-search2': '&#xe036;',
		'icon-zoomin': '&#xe91f;',
		'icon-play': '&#xe920;',
		'icon-pause': '&#xe92f;',
		'icon-repeat': '&#xe91a;',
		'icon-check-box': '&#xe905;',
		'icon-gift': '&#xe99f;',
		'icon-pencil': '&#xe91e;',
		'icon-search': '&#xf002;',
		'icon-lock': '&#xf023;',
		'icon-eye': '&#xf06e;',
		'icon-menu-angle-down': '&#xe900;',
		'icon-menu-angle-down-1': '&#xe901;',
		'icon-angle-down': '&#xe921;',
		'icon-angle-left': '&#xe922;',
		'icon-angle-right': '&#xe919;',
		'icon-angle-up': '&#xe923;',
		'icon-next': '&#xe409;',
		'icon-prev': '&#xe40a;',
		'icon-arrow-up': '&#xe92c;',
		'icon-arrow-down': '&#xe92b;',
		'icon-arrow-right': '&#xe929;',
		'icon-arrow-left': '&#xe92a;',
		'icon-arrow-left-circle': '&#xe908;',
		'icon-return': '&#xe91b;',
		'icon-person2': '&#xe930;',
		'icon-person': '&#xe93c;',
		'icon-person-fill': '&#xe7fd;',
		'icon-person-fill-add': '&#xe7fe;',
		'icon-box2': '&#xe079;',
		'icon-box3': '&#xe90d;',
		'icon-gift2': '&#xe91c;',
		'icon-box': '&#xe906;',
		'icon-call': '&#xe90b;',
		'icon-phone': '&#xe907;',
		'icon-mobile': '&#xe958;',
		'icon-error': '&#xe914;',
		'icon-circle-dollar': '&#xe91d;',
		'icon-tag': '&#xe912;',
		'icon-badge': '&#xe915;',
		'icon-chat': '&#xe904;',
		'icon-globe': '&#xe911;',
		'icon-global': '&#xe052;',
		'icon-share': '&#xe80d;',
		'icon-chat3': '&#xe90e;',
		'icon-cross': '&#xe117;',
		'icon-cross-1': '&#xe941;',
		'icon-star': '&#xe924;',
		'icon-star-border': '&#xe925;',
		'icon-fancy': '&#xe943;',
		'icon-facebook': '&#xe931;',
		'icon-skype': '&#xe932;',
		'icon-tumblr': '&#xe957;',
		'icon-vk': '&#xe956;',
		'icon-twitter': '&#xe933;',
		'icon-vimeo': '&#xe934;',
		'icon-youtube': '&#xe935;',
		'icon-snapchat': '&#xe962;',
		'icon-linkedin': '&#xe938;',
		'icon-google': '&#xe93a;',
		'icon-pinterest': '&#xe939;',
		'icon-instagram': '&#xe955;',
		'icon-location': '&#xe902;',
		'icon-location1': '&#xe93f;',
		'icon-sad-face': '&#xe93b;',
		'icon-clock': '&#xe937;',
		'icon-clock3': '&#xe93d;',
		'icon-clock2': '&#xe903;',
		'icon-clock4': '&#xe93e;',
		'icon-search3': '&#xe90c;',
		'icon-mail-envelope1': '&#xe940;',
		'icon-mail-envelope': '&#xe918;',
		'icon-mail': '&#xe936;',
		'icon-leather-derby-shoe': '&#xe90f;',
		'icon-t-shirt': '&#xe917;',
		'icon-handbag': '&#xe913;',
		'icon-business-tie': '&#xe910;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
