<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Simplified_Plugin
 * @author    Jacek Dobrowolski <jack@simplified.co>
 * @copyright 2022 Simplified
 * @license   GPL 2.0+
 * @link      https://simplified.com
 */
?>

<div class="wrap">

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<div id="tabs" class="settings-tab">
			<div id="tabs-1" class="metabox-holder">
			<div class="postbox">
				<div class="inside">
					<a href="https://simplified.com">
						<svg width="150" height="35" viewBox="0 0 213 40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="cursor: pointer; display: inline-block;"><title>B9095F28-9712-401E-97BB-0153B2A452F6</title><g id="Dashboard-Rev.-3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="[APR-FS]Dashboard" transform="translate(-33.000000, -16.000000)" fill="#FFAD00"><g id="logo/smp-full" transform="translate(33.000000, 16.000000)"><path d="M30.8180645,14.3205161 L30.8180645,27.296 L30.0071685,28.1068961 L23.518853,34.5963584 L19.4643728,38.6508387 C17.6716846,40.4423799 14.7675986,40.4423799 12.9760573,38.6508387 C11.1845161,36.8592975 11.1845161,33.9540645 12.9760573,32.1625233 L12.9760573,32.1625233 L17.0305376,28.1068961 L23.518853,21.6197276 L24.3297491,20.8088315 L30.8180645,14.3205161 Z M117.109907,13.2060215 C119.411842,13.2060215 121.218294,13.9228674 122.534996,15.358853 C123.852846,16.7925448 124.555928,18.8387097 124.651125,21.4939068 C124.675211,21.8035842 124.685534,22.2417204 124.685534,22.8106093 C124.685534,23.3794982 124.675211,23.8302509 124.651125,24.1617204 C124.555928,26.7251613 123.84367,28.7403584 122.517792,30.2107527 C121.188473,31.681147 119.384315,32.4163441 117.109907,32.4163441 C114.807971,32.4163441 113.087541,31.6329749 111.95091,30.0685305 L111.95091,37.9297491 C111.95091,38.1912545 111.867183,38.4045878 111.700875,38.5697491 C111.535713,38.7372043 111.32238,38.8197849 111.060875,38.8197849 L106.471914,38.8197849 C106.212703,38.8197849 105.991341,38.7372043 105.81471,38.5697491 C105.635785,38.4045878 105.546323,38.1912545 105.546323,37.9297491 L105.546323,14.4504659 C105.546323,14.1901075 105.635785,13.9756272 105.81471,13.8116129 C105.991341,13.6441577 106.212703,13.5604301 106.471914,13.5604301 L110.705319,13.5604301 C110.965677,13.5604301 111.180158,13.6441577 111.344172,13.8116129 C111.512774,13.9756272 111.594208,14.1901075 111.594208,14.4504659 L111.594208,15.7316129 C112.876502,14.0467384 114.712774,13.2060215 117.109907,13.2060215 Z M48.4500645,6.80223656 C50.5386667,6.80223656 52.3451183,7.16352688 53.8763011,7.88725448 C55.40519,8.61098208 56.5808172,9.5113405 57.3963011,10.5894767 C58.2163728,11.6699068 58.6476272,12.7308387 58.6969462,13.7745663 C58.6969462,13.9878996 58.6235412,14.1714122 58.4824659,14.3262509 C58.3402437,14.4810896 58.1636129,14.5579355 57.9502796,14.5579355 L52.967914,14.5579355 C52.4471971,14.5579355 52.0434695,14.3434552 51.760172,13.9167885 C51.6179498,13.4190108 51.2474839,12.9980789 50.6568029,12.6539928 C50.063828,12.3099068 49.3286308,12.1378638 48.4500645,12.1378638 C47.454509,12.1378638 46.6849032,12.3156416 46.1378065,12.6711971 C45.5930036,13.0278996 45.3211756,13.5486165 45.3211756,14.2367885 C45.3211756,14.9261075 45.6744373,15.4640287 46.3878423,15.8562867 C47.0989534,16.2473978 48.4282724,16.6453907 50.3700645,17.0479713 C52.5997419,17.4516989 54.3740789,17.9552115 55.6884875,18.5596559 C57.0063369,19.1641004 57.9789534,19.9474695 58.6074839,20.9074695 C59.2360143,21.8686165 59.5514265,23.0832401 59.5514265,24.5536344 C59.5514265,26.1673978 59.0880573,27.566681 58.1636129,28.7514839 C57.2380215,29.9385806 55.9580215,30.8458208 54.320172,31.4732043 C52.6834695,32.1017348 50.8104946,32.416 48.7001004,32.416 C46.3981649,32.416 44.4414624,32.0833835 42.8288459,31.4204444 C41.2162294,30.7563584 39.9935771,29.8789391 39.1666237,28.7870394 C38.3350824,27.6974337 37.8946523,26.5103369 37.8487742,25.2303369 C37.8487742,25.0170036 37.927914,24.8392258 38.0804588,24.6970036 C38.2341505,24.5536344 38.41881,24.4825233 38.6309964,24.4825233 L43.3644731,24.4825233 C43.6477706,24.4825233 43.8794552,24.5295484 44.056086,24.6258925 C44.2361577,24.7199427 44.4299928,24.8862509 44.6433262,25.1236703 C44.9507097,25.6925591 45.4324301,26.1616631 46.0861935,26.5275412 C46.7365161,26.8980072 47.6082007,27.0792258 48.7001004,27.0792258 C49.9789534,27.0792258 50.9641864,26.8842437 51.6523584,26.4931326 C52.3393835,26.1020215 52.6834695,25.5629534 52.6834695,24.8747814 C52.6834695,24.3758566 52.5068387,23.9675412 52.1512832,23.6475412 C51.7945806,23.3263943 51.2245448,23.0419498 50.4434695,22.7942079 C49.6612473,22.544172 48.5326452,22.2666093 47.0633978,21.9569319 C44.1914265,21.388043 42.0466237,20.5220932 40.6255484,19.3590824 C39.2010323,18.1983656 38.4887742,16.5375771 38.4887742,14.3801577 C38.4887742,12.9086165 38.8993835,11.5987957 39.7160143,10.4484014 C40.536086,9.29915412 41.6968029,8.40338351 43.2016057,7.76338351 C44.7109964,7.12108961 46.4589534,6.80223656 48.4500645,6.80223656 Z M181.857147,13.2060215 C183.897577,13.2060215 185.623742,13.6143369 187.033348,14.4332616 C188.446394,15.2510394 189.500444,16.3773477 190.200086,17.8121864 C190.897434,19.248172 191.248401,20.8779928 191.248401,22.7050896 L191.248401,23.5928315 C191.248401,23.8543369 191.161233,24.073405 190.982308,24.2523297 C190.805677,24.4289606 190.585462,24.5184229 190.323957,24.5184229 L179.048258,24.5184229 L179.048258,24.7317563 C179.071197,25.7995699 179.321233,26.6597849 179.796072,27.3112545 C180.26747,27.963871 180.945319,28.2896057 181.821591,28.2896057 C182.391627,28.2896057 182.846968,28.1772043 183.192201,27.9501075 C183.53514,27.7264516 183.863168,27.4351254 184.169405,27.0784229 C184.383885,26.8432975 184.554781,26.6953405 184.684387,26.6356989 C184.816287,26.5760573 185.023885,26.5473835 185.307183,26.5473835 L189.969548,26.5473835 C190.182882,26.5473835 190.365247,26.6116129 190.521233,26.7423656 C190.674925,26.8731183 190.749477,27.0325448 190.749477,27.2217921 C190.749477,27.84 190.400803,28.5614337 189.702308,29.3929749 C189.00152,30.2222222 187.981878,30.9344803 186.642237,31.5263082 C185.301448,32.1192832 183.718652,32.4163441 181.894996,32.4163441 C178.998939,32.4163441 176.723384,31.6387097 175.061448,30.0868817 C173.401806,28.5327599 172.548473,26.2744086 172.502595,23.3083871 L172.502595,22.2050179 C172.594351,19.3846595 173.471771,17.1779211 175.133706,15.5882437 C176.793348,14.0008602 179.034495,13.2060215 181.857147,13.2060215 Z M212.023168,6.80235125 C212.284674,6.80235125 212.504889,6.88607885 212.680373,7.05124014 C212.858151,7.21754839 212.947613,7.42973477 212.947613,7.69009319 L212.947613,31.1716703 C212.947613,31.4331756 212.858151,31.646509 212.680373,31.8116703 C212.504889,31.9779785 212.284674,32.0605591 212.023168,32.0605591 L207.788616,32.0605591 C207.551197,32.0605591 207.344746,31.9722437 207.165821,31.7944659 C206.990337,31.6166882 206.898581,31.4090896 206.898581,31.1716703 L206.898581,30.0683011 C205.619728,31.6327455 203.782308,32.4161147 201.38747,32.4161147 C199.085534,32.4161147 197.276789,31.6923871 195.961233,30.2460789 C194.64453,28.7997706 193.938007,26.7364014 193.846251,24.0559713 L193.807254,22.8103799 L193.846251,21.5315269 C193.938007,18.945147 194.650265,16.9115986 195.979584,15.4297348 C197.304315,13.947871 199.108473,13.2057921 201.38747,13.2057921 C203.520803,13.2057921 205.240086,13.8939642 206.543025,15.2680143 L206.543025,7.69009319 C206.543025,7.42973477 206.633634,7.21754839 206.809118,7.05124014 C206.990337,6.88607885 207.197935,6.80235125 207.435355,6.80235125 L212.023168,6.80235125 Z M133.476014,6.80200717 C133.736373,6.80200717 133.949706,6.88573477 134.116014,7.05089606 C134.280029,7.2172043 134.364903,7.43053763 134.364903,7.69089606 L134.364903,31.1713262 C134.364903,31.4087455 134.280029,31.6163441 134.116014,31.7941219 C133.949706,31.9730466 133.736373,32.0602151 133.476014,32.0602151 L129.028129,32.0602151 C128.768918,32.0602151 128.547556,31.9787814 128.372072,31.8113262 C128.192,31.6461649 128.102538,31.4328315 128.102538,31.1713262 L128.102538,7.69089606 C128.102538,7.43053763 128.192,7.2172043 128.372072,7.05089606 C128.547556,6.88573477 128.768918,6.80200717 129.028129,6.80200717 L133.476014,6.80200717 Z M168.270681,5.7353405 C168.529892,5.7353405 168.742079,5.81677419 168.909534,5.98422939 C169.074695,6.15053763 169.158423,6.36387097 169.158423,6.62422939 L169.158423,9.68430108 C169.158423,9.92172043 169.074695,10.128172 168.909534,10.3059498 C168.742079,10.4848746 168.529892,10.572043 168.270681,10.572043 L159.127168,10.572043 C158.365591,10.572043 157.826523,10.745233 157.505376,11.088172 C157.186523,11.4322581 157.028244,11.9610036 157.028244,12.6721147 L157.028244,13.5598566 L168.270681,13.5598566 C168.529892,13.5598566 168.742079,13.6447312 168.909534,13.8110394 C169.074695,13.9762007 169.158423,14.190681 169.158423,14.4510394 L169.158423,31.1713262 C169.158423,31.4087455 169.074695,31.6163441 168.909534,31.7941219 C168.742079,31.9730466 168.529892,32.0602151 168.270681,32.0602151 L163.926022,32.0602151 C163.66681,32.0602151 163.448889,31.9787814 163.269964,31.8113262 C163.093333,31.6461649 163.003871,31.4328315 163.003871,31.1713262 L163.003871,18.4 L157.028244,18.4 L157.028244,31.1713262 C157.028244,31.4087455 156.944516,31.6163441 156.779355,31.7941219 C156.610753,31.9730466 156.396272,32.0602151 156.135914,32.0602151 L151.795842,32.0602151 C151.535484,32.0602151 151.315269,31.9787814 151.138638,31.8113262 C150.959713,31.6461649 150.873692,31.4328315 150.873692,31.1713262 L150.873692,18.4 L148.202437,18.4 C147.943226,18.4 147.721864,18.3174194 147.54638,18.1511111 C147.366308,17.9836559 147.280287,17.7714695 147.280287,17.5099642 L147.280287,14.4510394 C147.280287,14.190681 147.366308,13.9762007 147.54638,13.8110394 C147.721864,13.6447312 147.943226,13.5598566 148.202437,13.5598566 L150.873692,13.5598566 L150.873692,12.49319 C150.873692,10.1224373 151.558423,8.40315412 152.93362,7.33648746 C154.309964,6.26752688 156.276989,5.7353405 158.84043,5.7353405 L168.270681,5.7353405 Z M67.9117993,13.5602007 C68.1721577,13.5602007 68.3935197,13.6439283 68.5690036,13.8113835 C68.7456344,13.9753978 68.8362437,14.1898781 68.8362437,14.4502366 L68.8362437,31.1716703 C68.8362437,31.4331756 68.7456344,31.646509 68.5690036,31.8116703 C68.3935197,31.9779785 68.1721577,32.0594122 67.9117993,32.0594122 L63.4650609,32.0594122 C63.2276416,32.0594122 63.0188961,31.9722437 62.8422652,31.7944659 C62.6633405,31.6166882 62.5738781,31.4090896 62.5738781,31.1716703 L62.5738781,14.4502366 C62.5738781,14.1898781 62.6633405,13.9753978 62.8422652,13.8113835 C63.0188961,13.6439283 63.2276416,13.5602007 63.4650609,13.5602007 L67.9117993,13.5602007 Z M95.0890896,13.2057921 C97.0343226,13.2057921 98.6182652,13.8629964 99.8397706,15.1808459 C101.058982,16.4964014 101.669161,18.4588387 101.669161,21.0670108 L101.669161,31.1716703 C101.669161,31.4090896 101.588875,31.6166882 101.421419,31.7944659 C101.255111,31.9722437 101.041778,32.0594122 100.781419,32.0594122 L96.4069391,32.0594122 C96.1454337,32.0594122 95.9263656,31.9779785 95.7462939,31.8116703 C95.5696631,31.646509 95.4802007,31.4331756 95.4802007,31.1716703 L95.4802007,21.3158996 C95.4802007,20.2262939 95.2485161,19.4257204 94.7874409,18.9153262 C94.3240717,18.4060789 93.7024229,18.1503082 92.9202007,18.1503082 C92.1850036,18.1503082 91.585147,18.4060789 91.1229247,18.9153262 C90.6595556,19.4257204 90.427871,20.2262939 90.427871,21.3158996 L90.427871,31.1716703 C90.427871,31.4090896 90.3464373,31.6166882 90.1789821,31.7944659 C90.0138208,31.9722437 89.7993405,32.0594122 89.5389821,32.0594122 L85.1645018,32.0594122 C84.9041434,32.0594122 84.6839283,31.9779785 84.5050036,31.8116703 C84.3272258,31.646509 84.2377634,31.4331756 84.2377634,31.1716703 L84.2377634,21.3158996 C84.2377634,20.2262939 84.0003441,19.4257204 83.5289462,18.9153262 C83.0541075,18.4060789 82.4370466,18.1503082 81.6789104,18.1503082 C80.9437133,18.1503082 80.3381219,18.4060789 79.8632832,18.9153262 C79.3895914,19.4257204 79.152172,20.2136774 79.152172,21.2803441 L79.152172,31.1716703 C79.152172,31.4090896 79.0672975,31.6166882 78.9021362,31.7944659 C78.7369749,31.9722437 78.5236416,32.0594122 78.2621362,32.0594122 L73.7809892,32.0594122 C73.5435699,32.0594122 73.3348244,31.9722437 73.1581935,31.7944659 C72.9792688,31.6166882 72.8898065,31.4090896 72.8898065,31.1716703 L72.8898065,14.4502366 C72.8898065,14.1898781 72.9792688,13.9753978 73.1581935,13.8113835 C73.3348244,13.6439283 73.5435699,13.5602007 73.7809892,13.5602007 L77.9065806,13.5602007 C78.1669391,13.5602007 78.3814194,13.6439283 78.5454337,13.8113835 C78.7117419,13.9753978 78.7954695,14.1898781 78.7954695,14.4502366 L78.7954695,15.6591254 C79.3655054,14.9721004 80.1007025,14.3917419 81.0010609,13.9169032 C81.9014194,13.4432115 82.9245018,13.2057921 84.0611326,13.2057921 C86.6693047,13.2057921 88.4596989,14.2254337 89.4311685,16.2647168 C90.0023513,15.3643584 90.796043,14.6291613 91.8179785,14.0602724 C92.8364731,13.4902366 93.9272258,13.2057921 95.0890896,13.2057921 Z M143.756387,13.5602007 C144.016746,13.5602007 144.236961,13.6439283 144.413591,13.8113835 C144.590222,13.9753978 144.680832,14.1898781 144.680832,14.4502366 L144.680832,31.1716703 C144.680832,31.4331756 144.590222,31.646509 144.413591,31.8116703 C144.236961,31.9779785 144.016746,32.0594122 143.756387,32.0594122 L139.309649,32.0594122 C139.072229,32.0594122 138.863484,31.9722437 138.686853,31.7944659 C138.507928,31.6166882 138.418466,31.4090896 138.418466,31.1716703 L138.418466,14.4502366 C138.418466,14.1898781 138.507928,13.9753978 138.686853,13.8113835 C138.863484,13.6439283 139.072229,13.5602007 139.309649,13.5602007 L143.756387,13.5602007 Z M203.448545,18.1514552 C202.383025,18.1514552 201.615713,18.4645735 201.155785,19.0931039 C200.692416,19.7216344 200.426323,20.592172 200.352918,21.7070108 L200.318509,22.8103799 L200.352918,23.9137491 C200.426323,25.0285878 200.692416,25.9002724 201.155785,26.5276559 C201.615713,27.1573333 202.383025,27.4727455 203.448545,27.4727455 C204.467039,27.4727455 205.228616,27.1458638 205.727541,26.4932473 C206.225319,25.8406308 206.497147,25.0171183 206.543025,24.0215627 C206.592344,23.3563297 206.615283,22.9055771 206.615283,22.6681577 C206.615283,22.4077993 206.592344,21.9696631 206.543025,21.3537491 C206.497147,20.4281577 206.219584,19.6619928 205.70919,19.0575484 C205.197649,18.4531039 204.4441,18.1514552 203.448545,18.1514552 Z M115.045391,18.1505376 C114.025749,18.1505376 113.267613,18.4762724 112.769835,19.1288889 C112.272057,19.7803584 112.000229,20.6061649 111.95091,21.6017204 C111.930265,21.8661751 111.919732,22.2342769 111.917144,22.7081927 L111.916502,22.9539785 C111.916502,23.5228674 111.926824,23.9621505 111.95091,24.2695341 C112.000229,25.1951254 112.277792,25.9589964 112.787039,26.5634409 C113.297434,27.1690323 114.049835,27.471828 115.045391,27.471828 C116.114351,27.471828 116.878222,27.1575627 117.341591,26.5278853 C117.803814,25.9005018 118.071054,25.0276703 118.139871,23.9139785 C118.163957,23.6777061 118.17772,23.3083871 118.17772,22.8106093 C118.17772,22.3116846 118.163957,21.9446595 118.139871,21.7072401 C118.071054,20.5924014 117.803814,19.7207168 117.341591,19.0933333 C116.878222,18.4648029 116.114351,18.1505376 115.045391,18.1505376 Z M29.1965018,12.6983799 L21.8972903,19.9975914 L15.4089749,26.4859068 L14.5980789,27.2968029 L1.62144803,27.2968029 L16.219871,12.6983799 L29.1965018,12.6983799 Z M11.3536918,1.34365591 C13.145233,-0.447885305 16.0504659,-0.447885305 17.8420072,1.34365591 C19.6335484,3.13519713 19.6335484,6.04043011 17.8420072,7.83197133 L17.8420072,7.83197133 L2.44105811e-14,25.6739785 L2.44105811e-14,12.6984946 L0.810896057,11.8864516 L7.29806452,5.39928315 Z M181.857147,17.2260932 C180.955642,17.2260932 180.261735,17.5403584 179.77772,18.1677419 C179.291412,18.7962724 179.048258,19.6805735 179.048258,20.8183513 L179.048258,20.8894624 L184.702738,20.8894624 L184.702738,20.8183513 C184.702738,19.6805735 184.453849,18.7962724 183.956072,18.1677419 C183.457147,17.5403584 182.759799,17.2260932 181.857147,17.2260932 Z M67.9117993,5.8412043 C68.1721577,5.8412043 68.3935197,5.93066667 68.5690036,6.10844444 C68.7456344,6.28622222 68.8362437,6.50529032 68.8362437,6.76564875 L68.8362437,10.0746093 C68.8362437,10.3372616 68.7456344,10.5551828 68.5690036,10.7329606 C68.3935197,10.9107384 68.1721577,11.0002007 67.9117993,11.0002007 L63.4650609,11.0002007 C63.2012616,11.0002007 62.9902222,10.9107384 62.8216201,10.7329606 C62.6576057,10.5551828 62.5738781,10.3372616 62.5738781,10.0746093 L62.5738781,6.76564875 C62.5738781,6.50529032 62.6633405,6.28622222 62.8422652,6.10844444 C63.0188961,5.93066667 63.2276416,5.8412043 63.4650609,5.8412043 L67.9117993,5.8412043 Z M143.756387,5.8412043 C144.016746,5.8412043 144.236961,5.93066667 144.413591,6.10844444 C144.590222,6.28622222 144.680832,6.50529032 144.680832,6.76564875 L144.680832,10.0746093 C144.680832,10.3372616 144.590222,10.5551828 144.413591,10.7329606 C144.236961,10.9107384 144.016746,11.0002007 143.756387,11.0002007 L139.309649,11.0002007 C139.045849,11.0002007 138.83481,10.9107384 138.666208,10.7329606 C138.502194,10.5551828 138.418466,10.3372616 138.418466,10.0746093 L138.418466,6.76564875 C138.418466,6.50529032 138.507928,6.28622222 138.686853,6.10844444 C138.863484,5.93066667 139.072229,5.8412043 139.309649,5.8412043 L143.756387,5.8412043 Z" id="logo"></path></g></g></g></svg></a>
				</div>
				<h3 class="hndle"><span><?php esc_html_e( 'Settings', 'simplifiedplugin' ); ?></span></h3>
				<div class="inside">
					<p><?php esc_html_e( 'Setup your Simplified plugin', 'simplifiedplugin' ); ?></p>
					<form method="post" >
						<p>
							<label for="sp_api_token">API Token</label> <input id="sp_api_token" value="<?php echo \esc_attr(\get_option( SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '-api-token' ));?>" type="text" name="sp_api_token"/>
						</p>
						<?php $users = get_users();?>
						<p>
							<label for="sp_user_id">User for documents</label> <select id="sp_user_id" type="text" name="sp_user_id">
								<?php foreach($users as $user):?>
									<option value="<?php echo \esc_attr($user->ID); ?>" <?php if (\get_option( SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '-user-id' ) == $user->ID):?>selected<?php endif;?>
><?php \esc_html_e($user->user_login, 'simplifiedplugin');?></option>
								<?php
								endforeach;
								?>
							</select>
						</p>
						<p>
							<label for="sp_post_status">Post status</label> <select id="sp_post_status" type="text" name="sp_post_status">
								<?php $post_statuses = get_post_statuses();
								foreach($post_statuses as $status => $name):?>
									<option value="<?php echo \esc_attr($status);?>" <?php if (\get_option( SIMPLONEAPP_PLUGIN_TEXTDOMAIN . '-post-status' ) == $status):?>selected<?php endif;?>
									><?php \esc_html_e($name, 'simplifiedplugin');?></option>
								<?php
								endforeach;
								?>
							</select>
						</p>
						<p>
							<input type="hidden" name="sp_action" value="simplified_settings_save" />
							<?php wp_nonce_field( 'simplified_settings_save_nonce', 'simplified_settings_save_nonce' ); ?>
							<?php submit_button( __( 'Save', 'simplifiedplugin' ), 'secondary', 'submit', false ); ?>
						</p>
					</form>
				</div>
			</div>
		</div>
		<?php
		?>
	</div>


</div>
