<?php 
/**
*Header Navigation template
*
*@package IndustrialPark
*/

$menu_class = \INDUSTRIALPARK_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'industrialpark-header-menus' );
$header_menus = wp_get_nav_menu_items( $header_menu_id );
// echo "<pre>";
// print_r($header_menus);
// wp_die();
?>
<html data-wf-page="604f4c4c5860d416ac0d270b" data-wf-site="604f4c4c5860d44c6c0d270a">
<div class="rahman-ip-nav">
    <div class="nav-container">
      <?php
     if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
  }  ?>
      <div data-w-id="d2fbf153-d504-9ebc-7f22-4f786af66613" class="hamburger-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="16" viewbox="0 0 40 23">
          <g id="Group_74" data-name="Group 74" transform="translate(-1764.001 -5175.386)">
            <line id="Line_11" data-name="Line 11" x1="40" transform="translate(1764.001 5176.886)" fill="none" stroke="#06172e" stroke-width="3"></line>
            <line id="Line_12" data-name="Line 12" x1="40" transform="translate(1764.001 5186.886)" fill="none" stroke="#06172e" stroke-width="3"></line>
            <line id="Line_13" data-name="Line 13" x1="25" transform="translate(1779.001 5196.886)" fill="none" stroke="#06172e" stroke-width="3"></line>
          </g>
        </svg></div>
    </div>
  </div>
  <div style="display:none;opacity:0.4;-webkit-transform:translate3d(null, -100vh, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, -100vh, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, -100vh, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, -100vh, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="full-screen-hamburger-content">
    <div class="nav-links-container">
      <div data-w-id="e9258cf4-1f65-16e1-f3ee-1aca19f13aff" class="nav-left-blue-div"></div>
      <div class="nav-links-wrapper">
        <div data-w-id="e90033c8-1d26-64c3-41b4-cd95a753b5e6" class="search-close-wrapper">
          <div class="html-embed dropdown-logo w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="71.4128" height="78" viewbox="0 0 89.263 100">
              <g id="Group_103" data-name="Group 103" transform="translate(-140.001 -5136.89)">
                <g id="Group_100" data-name="Group 100">
                  <path id="Path_104" data-name="Path 104" d="M214.266,5227.157l-7.1-12.084-7.107,12.081Z" fill="#001223"></path>
                  <path id="Path_105" data-name="Path 105" d="M192.419,5215.071l-3.554,6.041-3.551-6.042-7.107,12.081H199.52Z" fill="#001223"></path>
                  <path id="Path_106" data-name="Path 106" d="M158.612,5215.062l-7.107,12.081h14.209Z" fill="#001223"></path>
                  <path id="Path_107" data-name="Path 107" d="M228.076,5215.065H214.8v12.086h4.82v-7.266h4.82v7.266h4.82v-12.086Z" fill="#001223"></path>
                  <g id="Group_98" data-name="Group 98">
                    <rect id="Rectangle_79" data-name="Rectangle 79" width="4.82" height="12.085" transform="translate(166.251 5215.065)" fill="#001223"></rect>
                    <rect id="Rectangle_80" data-name="Rectangle 80" width="4.681" height="12.085" transform="translate(172.989 5215.065)" fill="#001223"></rect>
                  </g>
                  <g id="Group_99" data-name="Group 99">
                    <rect id="Rectangle_81" data-name="Rectangle 81" width="7.714" height="12.582" transform="translate(140.001 5214.57)" fill="#001223"></rect>
                    <circle id="Ellipse_7" data-name="Ellipse 7" cx="3.025" cy="3.025" r="3.025" transform="translate(148.199 5214.57)" fill="#001223"></circle>
                  </g>
                </g>
                <g id="Group_101" data-name="Group 101">
                  <path id="Path_108" data-name="Path 108" d="M155.15,5230.137h.732v6.608h-.732Z" fill="#001223"></path>
                  <path id="Path_109" data-name="Path 109" d="M157.182,5231.942h.625c0,.267,0,.535-.009.857a1.8,1.8,0,0,1,1.785-.991,1.935,1.935,0,0,1,2.018,2.206v2.731h-.651v-2.6c0-1.036-.464-1.742-1.544-1.724a1.457,1.457,0,0,0-1.566,1.342,1.48,1.48,0,0,0,0,.266v2.713h-.66Z" fill="#001223"></path>
                  <path id="Path_110" data-name="Path 110" d="M167.638,5236.745H167v-.991a2.119,2.119,0,0,1-1.982,1.126,2.536,2.536,0,0,1-.008-5.072,2.111,2.111,0,0,1,1.963,1.107v-2.778h.661Zm-4.447-2.4a1.873,1.873,0,0,0,1.824,1.919h.1a1.876,1.876,0,0,0,1.9-1.855c0-.03,0-.061,0-.091a1.839,1.839,0,0,0-.558-1.348,1.926,1.926,0,0,0-3.276,1.366Z" fill="#001223"></path>
                  <path id="Path_111" data-name="Path 111" d="M173.308,5236.745h-.625v-.853a1.788,1.788,0,0,1-1.776.99,1.95,1.95,0,0,1-2.042-1.854,1.884,1.884,0,0,1,.016-.36v-2.723h.651v2.6c0,1.035.465,1.731,1.545,1.722a1.46,1.46,0,0,0,1.574-1.337,1.509,1.509,0,0,0,0-.269v-2.717h.66Z" fill="#001223"></path>
                  <path id="Path_112" data-name="Path 112" d="M176.731,5233.146a.827.827,0,0,0-1.651-.018c.018.455.366.642.946.812.687.187,1.451.384,1.491,1.41a1.494,1.494,0,0,1-1.458,1.529c-.044,0-.088,0-.131,0a1.542,1.542,0,0,1-1.64-1.438c0-.021,0-.042,0-.063h.651a.953.953,0,0,0,.947.957l.057,0a.892.892,0,0,0,.928-.856c0-.015,0-.03,0-.045-.018-.545-.375-.768-1.205-1.005-.688-.2-1.228-.482-1.241-1.24a1.384,1.384,0,0,1,1.39-1.38c.037,0,.073,0,.11,0a1.361,1.361,0,0,1,1.46,1.255c0,.028,0,.056,0,.084Z" fill="#001223"></path>
                  <path id="Path_113" data-name="Path 113" d="M178.9,5232.467h-.946v-.526h.946v-1.8h.652v1.8h1.053v.526h-1.053v4.277H178.9Z" fill="#001223"></path>
                  <path id="Path_114" data-name="Path 114" d="M181.294,5231.941h.625v.781a1.635,1.635,0,0,1,1.536-.92v.652h-.062c-.929,0-1.451.58-1.451,1.674v2.615h-.651Z" fill="#001223"></path>
                  <path id="Path_115" data-name="Path 115" d="M184.132,5230.137h.661v.92h-.661Zm0,1.8h.661v4.8h-.661Z" fill="#001223"></path>
                  <path id="Path_116" data-name="Path 116" d="M190.883,5236.744h-.661v-.991a2.128,2.128,0,0,1-1.963,1.126,2.536,2.536,0,0,1,0-5.072,2.106,2.106,0,0,1,1.963,1.142v-1h.661Zm-4.463-2.392a1.875,1.875,0,0,0,1.84,1.91h.088a1.945,1.945,0,0,0,1.892-1.928,1.722,1.722,0,0,0-.152-.768,1.852,1.852,0,0,0-1.759-1.151,1.884,1.884,0,0,0-1.911,1.856c0,.024,0,.048,0,.072Z" fill="#001223"></path>
                  <path id="Path_117" data-name="Path 117" d="M192.132,5230.137h.661v6.608h-.661Z" fill="#001223"></path>
                  <path id="Path_118" data-name="Path 118" d="M198.337,5230.137a2.624,2.624,0,0,1,1.777.42,2.022,2.022,0,0,1,.706,1.571,2.072,2.072,0,0,1-.679,1.571,2.533,2.533,0,0,1-1.741.446h-1.062v2.6H196.6v-6.608Zm-1,3.358h1.053a2.058,2.058,0,0,0,1.228-.277,1.415,1.415,0,0,0,.146-2,1.306,1.306,0,0,0-.155-.154,2.075,2.075,0,0,0-1.227-.277h-1.037Z" fill="#001223"></path>
                  <path id="Path_119" data-name="Path 119" d="M206.274,5236.744h-.661v-.991a2.131,2.131,0,0,1-1.964,1.126,2.536,2.536,0,0,1,0-5.072,2.107,2.107,0,0,1,1.964,1.142v-1h.661Zm-4.463-2.392a1.875,1.875,0,0,0,1.84,1.91h.088a1.8,1.8,0,0,0,1.733-1.169,1.854,1.854,0,0,0,.16-.759,1.708,1.708,0,0,0-.151-.768,1.854,1.854,0,0,0-1.759-1.151,1.883,1.883,0,0,0-1.91,1.856q0,.036,0,.072Z" fill="#001223"></path>
                  <path id="Path_120" data-name="Path 120" d="M207.525,5231.941h.625v.781a1.637,1.637,0,0,1,1.535-.92v.652h-.063c-.928,0-1.45.58-1.45,1.674v2.615h-.652Z" fill="#001223"></path>
                  <path id="Path_121" data-name="Path 121" d="M210.373,5230.137h.661v3.777l2.161-1.972h.812l-2.313,2.106,2.421,2.7h-.782l-2.3-2.553v2.553h-.66Z" fill="#001223"></path>
                </g>
                <g id="Group_102" data-name="Group 102">
                  <path id="Path_122" data-name="Path 122" d="M140,5136.89V5209.1h89.263V5136.89Zm9.6,9.6h50.21v30.587H149.6Zm0,53.034v-16.238h51.928l14.505,16.233Zm70.082-5.23L206.022,5179v-32.522h13.646Z" fill="#db0019"></path>
                  <rect id="Rectangle_82" data-name="Rectangle 82" width="25.11" height="15.298" transform="translate(162.146 5154.129)" fill="#db0019"></rect>
                </g>
              </g>
            </svg></div>
          <div data-w-id="9e7c60f0-4c09-8616-f60d-3680eb33105c" class="cross-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="22.121" height="22.121" viewbox="0 0 22.121 22.121">
              <g id="Group_91" data-name="Group 91" transform="translate(-1802.939 -3916.937)">
                <g id="Group_90" data-name="Group 90">
                  <line id="Line_15" data-name="Line 15" y1="20" x2="20" transform="translate(1804 3917.998)" fill="none" stroke="#06172e" stroke-width="3"></line>
                  <line id="Line_16" data-name="Line 16" x2="20" y2="20" transform="translate(1804 3917.998)" fill="none" stroke="#06172e" stroke-width="3"></line>
                </g>
              </g>
            </svg></div>
          <div class="html-embed dropdown-logo small w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="55" height="60" viewbox="0 0 89.263 100">
              <g id="Group_103" data-name="Group 103" transform="translate(-140.001 -5136.89)">
                <g id="Group_100" data-name="Group 100">
                  <path id="Path_104" data-name="Path 104" d="M214.266,5227.157l-7.1-12.084-7.107,12.081Z" fill="#001223"></path>
                  <path id="Path_105" data-name="Path 105" d="M192.419,5215.071l-3.554,6.041-3.551-6.042-7.107,12.081H199.52Z" fill="#001223"></path>
                  <path id="Path_106" data-name="Path 106" d="M158.612,5215.062l-7.107,12.081h14.209Z" fill="#001223"></path>
                  <path id="Path_107" data-name="Path 107" d="M228.076,5215.065H214.8v12.086h4.82v-7.266h4.82v7.266h4.82v-12.086Z" fill="#001223"></path>
                  <g id="Group_98" data-name="Group 98">
                    <rect id="Rectangle_79" data-name="Rectangle 79" width="4.82" height="12.085" transform="translate(166.251 5215.065)" fill="#001223"></rect>
                    <rect id="Rectangle_80" data-name="Rectangle 80" width="4.681" height="12.085" transform="translate(172.989 5215.065)" fill="#001223"></rect>
                  </g>
                  <g id="Group_99" data-name="Group 99">
                    <rect id="Rectangle_81" data-name="Rectangle 81" width="7.714" height="12.582" transform="translate(140.001 5214.57)" fill="#001223"></rect>
                    <circle id="Ellipse_7" data-name="Ellipse 7" cx="3.025" cy="3.025" r="3.025" transform="translate(148.199 5214.57)" fill="#001223"></circle>
                  </g>
                </g>
                <g id="Group_101" data-name="Group 101">
                  <path id="Path_108" data-name="Path 108" d="M155.15,5230.137h.732v6.608h-.732Z" fill="#001223"></path>
                  <path id="Path_109" data-name="Path 109" d="M157.182,5231.942h.625c0,.267,0,.535-.009.857a1.8,1.8,0,0,1,1.785-.991,1.935,1.935,0,0,1,2.018,2.206v2.731h-.651v-2.6c0-1.036-.464-1.742-1.544-1.724a1.457,1.457,0,0,0-1.566,1.342,1.48,1.48,0,0,0,0,.266v2.713h-.66Z" fill="#001223"></path>
                  <path id="Path_110" data-name="Path 110" d="M167.638,5236.745H167v-.991a2.119,2.119,0,0,1-1.982,1.126,2.536,2.536,0,0,1-.008-5.072,2.111,2.111,0,0,1,1.963,1.107v-2.778h.661Zm-4.447-2.4a1.873,1.873,0,0,0,1.824,1.919h.1a1.876,1.876,0,0,0,1.9-1.855c0-.03,0-.061,0-.091a1.839,1.839,0,0,0-.558-1.348,1.926,1.926,0,0,0-3.276,1.366Z" fill="#001223"></path>
                  <path id="Path_111" data-name="Path 111" d="M173.308,5236.745h-.625v-.853a1.788,1.788,0,0,1-1.776.99,1.95,1.95,0,0,1-2.042-1.854,1.884,1.884,0,0,1,.016-.36v-2.723h.651v2.6c0,1.035.465,1.731,1.545,1.722a1.46,1.46,0,0,0,1.574-1.337,1.509,1.509,0,0,0,0-.269v-2.717h.66Z" fill="#001223"></path>
                  <path id="Path_112" data-name="Path 112" d="M176.731,5233.146a.827.827,0,0,0-1.651-.018c.018.455.366.642.946.812.687.187,1.451.384,1.491,1.41a1.494,1.494,0,0,1-1.458,1.529c-.044,0-.088,0-.131,0a1.542,1.542,0,0,1-1.64-1.438c0-.021,0-.042,0-.063h.651a.953.953,0,0,0,.947.957l.057,0a.892.892,0,0,0,.928-.856c0-.015,0-.03,0-.045-.018-.545-.375-.768-1.205-1.005-.688-.2-1.228-.482-1.241-1.24a1.384,1.384,0,0,1,1.39-1.38c.037,0,.073,0,.11,0a1.361,1.361,0,0,1,1.46,1.255c0,.028,0,.056,0,.084Z" fill="#001223"></path>
                  <path id="Path_113" data-name="Path 113" d="M178.9,5232.467h-.946v-.526h.946v-1.8h.652v1.8h1.053v.526h-1.053v4.277H178.9Z" fill="#001223"></path>
                  <path id="Path_114" data-name="Path 114" d="M181.294,5231.941h.625v.781a1.635,1.635,0,0,1,1.536-.92v.652h-.062c-.929,0-1.451.58-1.451,1.674v2.615h-.651Z" fill="#001223"></path>
                  <path id="Path_115" data-name="Path 115" d="M184.132,5230.137h.661v.92h-.661Zm0,1.8h.661v4.8h-.661Z" fill="#001223"></path>
                  <path id="Path_116" data-name="Path 116" d="M190.883,5236.744h-.661v-.991a2.128,2.128,0,0,1-1.963,1.126,2.536,2.536,0,0,1,0-5.072,2.106,2.106,0,0,1,1.963,1.142v-1h.661Zm-4.463-2.392a1.875,1.875,0,0,0,1.84,1.91h.088a1.945,1.945,0,0,0,1.892-1.928,1.722,1.722,0,0,0-.152-.768,1.852,1.852,0,0,0-1.759-1.151,1.884,1.884,0,0,0-1.911,1.856c0,.024,0,.048,0,.072Z" fill="#001223"></path>
                  <path id="Path_117" data-name="Path 117" d="M192.132,5230.137h.661v6.608h-.661Z" fill="#001223"></path>
                  <path id="Path_118" data-name="Path 118" d="M198.337,5230.137a2.624,2.624,0,0,1,1.777.42,2.022,2.022,0,0,1,.706,1.571,2.072,2.072,0,0,1-.679,1.571,2.533,2.533,0,0,1-1.741.446h-1.062v2.6H196.6v-6.608Zm-1,3.358h1.053a2.058,2.058,0,0,0,1.228-.277,1.415,1.415,0,0,0,.146-2,1.306,1.306,0,0,0-.155-.154,2.075,2.075,0,0,0-1.227-.277h-1.037Z" fill="#001223"></path>
                  <path id="Path_119" data-name="Path 119" d="M206.274,5236.744h-.661v-.991a2.131,2.131,0,0,1-1.964,1.126,2.536,2.536,0,0,1,0-5.072,2.107,2.107,0,0,1,1.964,1.142v-1h.661Zm-4.463-2.392a1.875,1.875,0,0,0,1.84,1.91h.088a1.8,1.8,0,0,0,1.733-1.169,1.854,1.854,0,0,0,.16-.759,1.708,1.708,0,0,0-.151-.768,1.854,1.854,0,0,0-1.759-1.151,1.883,1.883,0,0,0-1.91,1.856q0,.036,0,.072Z" fill="#001223"></path>
                  <path id="Path_120" data-name="Path 120" d="M207.525,5231.941h.625v.781a1.637,1.637,0,0,1,1.535-.92v.652h-.063c-.928,0-1.45.58-1.45,1.674v2.615h-.652Z" fill="#001223"></path>
                  <path id="Path_121" data-name="Path 121" d="M210.373,5230.137h.661v3.777l2.161-1.972h.812l-2.313,2.106,2.421,2.7h-.782l-2.3-2.553v2.553h-.66Z" fill="#001223"></path>
                </g>
                <g id="Group_102" data-name="Group 102">
                  <path id="Path_122" data-name="Path 122" d="M140,5136.89V5209.1h89.263V5136.89Zm9.6,9.6h50.21v30.587H149.6Zm0,53.034v-16.238h51.928l14.505,16.233Zm70.082-5.23L206.022,5179v-32.522h13.646Z" fill="#db0019"></path>
                  <rect id="Rectangle_82" data-name="Rectangle 82" width="25.11" height="15.298" transform="translate(162.146 5154.129)" fill="#db0019"></rect>
                </g>
              </g>
            </svg></div>
        </div>
        <div class="links-wrapper">
          <div class="main-links-wrapper">
          <?php if( !empty($header_menus[0]) ){ ?>
            <div id="home-nav-link-wrap" data-w-id="62fee7c0-564a-6eb2-f01f-86ad4566fdc5" class="div-block-5">        
              <div class="nav-link-flex-wrapper">
                <a data-w-id="a51e0329-30fd-902d-e01d-5a54e0732f6e" href="<?php echo $header_menus[0]->url;  ?>" aria-current="page" class="navigation-link w--current"><?php echo $header_menus[0]->title;  ?></a>
              </div>
              <div data-w-id="0a68566b-d231-5d27-5878-158c482d5c32" class="arrow w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="81.889" height="18" viewbox="0 0 81.889 20.581">
                  <g id="Group_4-2" data-name="Group 4-2" transform="translate(-720 -4082.075)">
                    <line id="Line_1-2" data-name="Line 1-2" x2="80" transform="translate(720 4092.366)" fill="none" stroke="#06172e" stroke-miterlimit="10" stroke-width="3"></line>
                    <path id="Path_22-2" data-name="Path 22-2" d="M790.538,4083.136l9.23,9.23-9.23,9.23" fill="none" stroke="#06172e" stroke-miterlimit="10" stroke-width="3"></path>
                  </g>
                </svg></div>
            </div>
            <?php } ?>
            <?php if( !empty($header_menus[5]) ){ ?>
            <div id="about-nav-link-wrap" data-w-id="916aa9a4-f15d-e5c4-d20d-9602b82e16b1" class="div-block-5">
              <div class="nav-link-flex-wrapper">
                <a data-w-id="916aa9a4-f15d-e5c4-d20d-9602b82e16b2" href="<?php echo $header_menus[5]->url;  ?>" class="navigation-link"><?php echo $header_menus[5]->title ?></a>
              </div>
              <div data-w-id="916aa9a4-f15d-e5c4-d20d-9602b82e16b4" class="arrow w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="81.889" height="18" viewbox="0 0 81.889 20.581">
                  <g id="Group_4-2" data-name="Group 4-2" transform="translate(-720 -4082.075)">
                    <line id="Line_1-2" data-name="Line 1-2" x2="80" transform="translate(720 4092.366)" fill="none" stroke="#06172e" stroke-miterlimit="10" stroke-width="3"></line>
                    <path id="Path_22-2" data-name="Path 22-2" d="M790.538,4083.136l9.23,9.23-9.23,9.23" fill="none" stroke="#06172e" stroke-miterlimit="10" stroke-width="3"></path>
                  </g>
                </svg></div>
            </div>
            <?php } ?>
            <?php if( !empty($header_menus[14]) ){ ?>
            <div id="features-nav-link-wrap" data-w-id="c8cd7fd5-41bb-f905-bf61-af0b2e67b91a" class="div-block-5">
              <div class="nav-link-flex-wrapper">
                <a data-w-id="c8cd7fd5-41bb-f905-bf61-af0b2e67b91b" href="<?php echo $header_menus[14]->url;  ?>" class="navigation-link"><?php echo $header_menus[14]->title ?></a>
              </div>
              <div data-w-id="c8cd7fd5-41bb-f905-bf61-af0b2e67b91d" class="arrow w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="81.889" height="18" viewbox="0 0 81.889 20.581">
                  <g id="Group_4-2" data-name="Group 4-2" transform="translate(-720 -4082.075)">
                    <line id="Line_1-2" data-name="Line 1-2" x2="80" transform="translate(720 4092.366)" fill="none" stroke="#06172e" stroke-miterlimit="10" stroke-width="3"></line>
                    <path id="Path_22-2" data-name="Path 22-2" d="M790.538,4083.136l9.23,9.23-9.23,9.23" fill="none" stroke="#06172e" stroke-miterlimit="10" stroke-width="3"></path>
                  </g>
                </svg></div>
            </div>
            <?php } ?>
            <?php if( !empty($header_menus[19]) ){ ?>
            <div id="premises-nav-link-wrap" data-w-id="cdc89c98-eb92-57e6-e7e5-ab1b5bacbaa7" class="div-block-5">
              <div class="nav-link-flex-wrapper">
                <a data-w-id="cdc89c98-eb92-57e6-e7e5-ab1b5bacbaa8" href="<?php echo $header_menus[19]->url;  ?>" class="navigation-link"><?php echo $header_menus[19]->title ?></a>
              </div>
              <div data-w-id="cdc89c98-eb92-57e6-e7e5-ab1b5bacbaaa" class="arrow w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="81.889" height="18" viewbox="0 0 81.889 20.581">
                  <g id="Group_4-2" data-name="Group 4-2" transform="translate(-720 -4082.075)">
                    <line id="Line_1-2" data-name="Line 1-2" x2="80" transform="translate(720 4092.366)" fill="none" stroke="#06172e" stroke-miterlimit="10" stroke-width="3"></line>
                    <path id="Path_22-2" data-name="Path 22-2" d="M790.538,4083.136l9.23,9.23-9.23,9.23" fill="none" stroke="#06172e" stroke-miterlimit="10" stroke-width="3"></path>
                  </g>
                </svg></div>
            </div>
            <?php } ?>
            <?php if( !empty($header_menus[22]) ){ ?>
            <div id="casestudies-nav-link-wrap" data-w-id="8171a21a-11f1-a42e-6913-2282f74c4b1b" class="div-block-5">
              <div class="nav-link-flex-wrapper">
                <a data-w-id="8171a21a-11f1-a42e-6913-2282f74c4b1c" href="<?php echo $header_menus[22]->url;  ?>" class="navigation-link"><?php echo $header_menus[22]->title ?></a>
              </div>
              <div data-w-id="8171a21a-11f1-a42e-6913-2282f74c4b1e" class="arrow w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="81.889" height="18" viewbox="0 0 81.889 20.581">
                  <g id="Group_4-2" data-name="Group 4-2" transform="translate(-720 -4082.075)">
                    <line id="Line_1-2" data-name="Line 1-2" x2="80" transform="translate(720 4092.366)" fill="none" stroke="#06172e" stroke-miterlimit="10" stroke-width="3"></line>
                    <path id="Path_22-2" data-name="Path 22-2" d="M790.538,4083.136l9.23,9.23-9.23,9.23" fill="none" stroke="#06172e" stroke-miterlimit="10" stroke-width="3"></path>
                  </g>
                </svg></div>
            </div>
            <?php } ?>
            <?php if( !empty($header_menus[23]) ){ ?>
            <div id="resources-nav-link-wrap" data-w-id="e0f271aa-f15a-6b13-1f80-d700efb7826b" class="div-block-5">
              <div class="nav-link-flex-wrapper">
                <a data-w-id="e0f271aa-f15a-6b13-1f80-d700efb7826c" href="<?php echo $header_menus[23]->url;  ?>" class="navigation-link"><?php echo $header_menus[23]->title ?></a>
              </div>
              <div data-w-id="e0f271aa-f15a-6b13-1f80-d700efb7826e" class="arrow w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="81.889" height="18" viewbox="0 0 81.889 20.581">
                  <g id="Group_4-2" data-name="Group 4-2" transform="translate(-720 -4082.075)">
                    <line id="Line_1-2" data-name="Line 1-2" x2="80" transform="translate(720 4092.366)" fill="none" stroke="#06172e" stroke-miterlimit="10" stroke-width="3"></line>
                    <path id="Path_22-2" data-name="Path 22-2" d="M790.538,4083.136l9.23,9.23-9.23,9.23" fill="none" stroke="#06172e" stroke-miterlimit="10" stroke-width="3"></path>
                  </g>
                </svg></div>
            </div>
            <?php } ?>
            <?php if( !empty($header_menus[24]) ){ ?>
            <div id="contact-nav-link-wrap" data-w-id="cc139e89-11b1-9847-9456-de62a027ea65" class="div-block-5">
              <div class="nav-link-flex-wrapper">
                <a data-w-id="cc139e89-11b1-9847-9456-de62a027ea66" href="<?php echo $header_menus[24]->url;  ?>" class="navigation-link"><?php echo $header_menus[24]->title ?></a>
              </div>
              <div data-w-id="cc139e89-11b1-9847-9456-de62a027ea68" class="arrow w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="81.889" height="18" viewbox="0 0 81.889 20.581">
                  <g id="Group_4-2" data-name="Group 4-2" transform="translate(-720 -4082.075)">
                    <line id="Line_1-2" data-name="Line 1-2" x2="80" transform="translate(720 4092.366)" fill="none" stroke="#06172e" stroke-miterlimit="10" stroke-width="3"></line>
                    <path id="Path_22-2" data-name="Path 22-2" d="M790.538,4083.136l9.23,9.23-9.23,9.23" fill="none" stroke="#06172e" stroke-miterlimit="10" stroke-width="3"></path>
                  </g>
                </svg></div>
            </div>
            <?php } ?>
          </div>
          <div class="sub-links-wrapper">
          
            <div data-w-id="f2cfa169-18db-80f4-c603-d2d06eef5424" class="home-sublinks-wrapper home">  
            <?php for( $i=1;$i<5;$i++){ ?>
              <a href="<?php echo $header_menus[$i]->url;?>" class="sublink-text"><?php echo $header_menus[$i]->title ?></a>
              <?php } ?>
            </div>
            
           
            <div data-w-id="d732864c-d765-efb8-f4a5-33468c97f012" class="home-sublinks-wrapper about">
            <?php for( $i=6;$i<14;$i++){ ?>
              <a href="<?php echo $header_menus[$i]->url;?>" class="sublink-text"><?php echo $header_menus[$i]->title ?></a>
              <?php } ?>
            </div>
            <div data-w-id="14bc5af7-e301-ee16-7317-e05d6fa3ae98" class="home-sublinks-wrapper features">
            <?php for( $i=15;$i<19;$i++){ ?>
              <a href="<?php echo $header_menus[$i]->url;?>" class="sublink-text"><?php echo $header_menus[$i]->title ?></a>
              <?php } ?>
            </div>
            <div data-w-id="d7855c83-c162-2627-6152-f0d37daaec2d" class="home-sublinks-wrapper premesis">
            <?php for( $i=20;$i<22;$i++){ ?>
              <a href="<?php echo $header_menus[$i]->url;?>" class="sublink-text"><?php echo $header_menus[$i]->title ?></a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div data-w-id="df31764c-cf54-5316-95b4-fc80ce00ee58" class="nav-bottom-blue-div"></div>
  </div>
