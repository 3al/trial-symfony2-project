<?php

/* AcmeTestBundle::layout.html.twig */
class __TwigTemplate_61c12ff6382319ebfa7125790af62801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/css/style.css"), "html");
        echo "\" />

\t<!--[if IE 6]>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/css/iecss.css"), "html");
        echo "\" />
\t<![endif]-->
\t
\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/js/boxOver.js"), "html");
        echo "\"></script>
\t
</head>

<body>

\t<div id=\"main_container\">
\t
\t  <div class=\"top_bar\">
\t\t<div class=\"top_search\">
\t\t  <div class=\"search_text\"><a href=\"#\">Расширенный поиск</a></div>
\t\t  <input type=\"text\" class=\"search_input\" name=\"search\" />
\t\t  <input type=\"image\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/search.gif"), "html");
        echo "\" class=\"search_bt\"/>
\t\t</div>
\t\t<div class=\"languages\">
\t\t  <div class=\"lang_text\">Языки:</div>
\t\t  <a href=\"#\" class=\"lang\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/en.gif"), "html");
        echo "\" alt=\"\" border=\"0\" /></a> <a href=\"\" class=\"lang\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/de.gif"), "html");
        echo "\" alt=\"\" border=\"0\" /></a> 
\t\t</div>
\t  </div>
\t  
\t  <div id=\"header\">
\t  
\t\t<div id=\"logo\"> <a href=\"#\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/logo.png"), "html");
        echo "\" alt=\"\" border=\"0\" width=\"237\" height=\"140\" /></a> </div>
\t\t<div class=\"oferte_content\">
\t\t  <div class=\"top_divider\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/header_divider.png"), "html");
        echo "\" alt=\"\" width=\"1\" height=\"164\" /></div>
\t\t  <div class=\"oferta\">
\t\t\t<div class=\"oferta_content\"> <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/laptop.png"), "html");
        echo "\" width=\"94\" height=\"92\" alt=\"\" border=\"0\" class=\"oferta_img\" />
\t\t\t  <div class=\"oferta_details\">
\t\t\t\t<div class=\"oferta_title\">Samsung GX 2004 LM</div>
\t\t\t\t<div class=\"oferta_text\"> Это просто супер-пупер нубук... Фрешка блюпуп... Полный улет, не пожалеете! </div>
\t\t\t\t<a href=\"/product/details/12345\" class=\"details\">Детали</a> </div>
\t\t\t</div>
\t\t\t<div class=\"oferta_pagination\"> <span class=\"current\">1</span> <a href=\"#\">2</a> <a href=\"#\">3</a> <a href=\"#\">4</a> <a href=\"#\">5</a> </div>
\t\t  </div>
\t\t  <div class=\"top_divider\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/header_divider.png"), "html");
        echo "\" alt=\"\" width=\"1\" height=\"164\" /></div>
\t\t</div>
\t\t<!-- end of oferte_content-->
\t  </div>
  
\t  <div id=\"main_content\">
\t  
\t\t<div id=\"menu_tab\">
\t\t  <div class=\"left_menu_corner\"></div>
\t\t  <ul class=\"menu\">
\t\t\t<li><a href=\"#\" class=\"nav1\"> Главная</a></li>
\t\t\t<li class=\"divider\"></li>
\t\t\t<li><a href=\"#\" class=\"nav2\">Товары</a></li>
\t\t\t<li class=\"divider\"></li>
\t\t\t<li><a href=\"#\" class=\"nav3\">Акции</a></li>
\t\t\t<li class=\"divider\"></li>
\t\t\t<li><a href=\"#\" class=\"nav4\">Мой профиль</a></li>
\t\t\t<li class=\"divider\"></li>
\t\t\t<li><a href=\"#\" class=\"nav4\">Войти</a></li>
\t\t\t<li class=\"divider\"></li>
\t\t\t<li><a href=\"#\" class=\"nav5\">Доставка</a></li>
\t\t\t<li class=\"divider\"></li>
\t\t\t<li><a href=\"/client/contact\" class=\"nav6\">Контакты</a></li>
\t\t\t<li class=\"divider\"></li>
\t\t\t<li class=\"currencies\">Валюты
\t\t\t  <select>
\t\t\t\t<option>Баксы</option>
\t\t\t\t<option>Еноты</option>
\t\t\t  </select>
\t\t\t</li>
\t\t  </ul>
\t\t  <div class=\"right_menu_corner\"></div>
\t\t</div>
\t\t<!-- end of menu tab -->
\t\t<div class=\"crumb_navigation\"> Навигация: <span class=\"current\">Главная</span> </div>
\t\t<div class=\"left_content\">
\t\t  <div class=\"title_box\">Категории</div>
\t\t  <ul class=\"left_menu\">
\t\t\t<li class=\"odd\"><a href=\"#\">Процессоры</a></li>
\t\t\t<li class=\"even\"><a href=\"#\">Материнки</a></li>
\t\t\t<li class=\"odd\"><a href=\"#\">PC</a></li>
\t\t\t<li class=\"even\"><a href=\"#\">Лэптопы &amp; Ноутбуки</a></li>
\t\t  </ul>
\t\t  <div class=\"title_box\">Обратите внимание</div>
\t\t  <div class=\"border_box\">
\t\t\t<div class=\"product_title\"><a href=\"/product/details/232323\">Motorola 156 MX-VL</a></div>
\t\t\t<div class=\"product_img\"><a href=\"/product/details/232323\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/laptop.png"), "html");
        echo "\" alt=\"\" border=\"0\" /></a></div>
\t\t\t<div class=\"prod_price\"><span class=\"reduce\">350\$</span> <span class=\"price\">270\$</span></div>
\t\t  </div>
\t\t  <div class=\"title_box\">Рассылка новостей</div>
\t\t  <div class=\"border_box\">
\t\t\t<input type=\"text\" name=\"newsletter\" class=\"newsletter_input\" value=\"Ваш email\"/>
\t\t\t<a href=\"#\" class=\"join\">Подписаться!</a> </div>
\t\t  <div class=\"banner_adds\"> <a href=\"#\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/bann2.jpg"), "html");
        echo "\" alt=\"\" border=\"0\" /></a> </div>
\t\t</div>
\t\t<!-- end of left content -->
\t\t<div class=\"center_content\">
\t\t  <div class=\"center_title_bar\">Свежие поступления</div>
\t\t  <div class=\"prod_box\">
\t\t\t<div class=\"top_prod_box\"></div>
\t\t\t<div class=\"center_prod_box\">
\t\t\t  <div class=\"product_title\"><a href=\"/product/details/23232\">Motorola 156 MX-VL</a></div>
\t\t\t  <div class=\"product_img\"><a href=\"/product/details/2323\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/laptop.gif"), "html");
        echo "\" alt=\"\" border=\"0\" /></a></div>
\t\t\t  <div class=\"prod_price\"><span class=\"reduce\">350\$</span> <span class=\"price\">270\$</span></div>
\t\t\t</div>
\t\t\t<div class=\"bottom_prod_box\"></div>
\t\t\t<div class=\"prod_details_tab\"> <a href=\"#\" title=\"header=[Add to cart] body=[&nbsp;] fade=[on]\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/cart.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Specials] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favs.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Gifts] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favorites.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"/product/details/3434\" class=\"prod_details\">Детали</a> </div>
\t\t  </div>
\t\t   <div class=\"prod_box\">
\t\t\t<div class=\"top_prod_box\"></div>
\t\t\t<div class=\"center_prod_box\">
\t\t\t  <div class=\"product_title\"><a href=\"/product/details/23232\">Motorola 156 MX-VL</a></div>
\t\t\t  <div class=\"product_img\"><a href=\"/product/details/2323\"><img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/laptop.gif"), "html");
        echo "\" alt=\"\" border=\"0\" /></a></div>
\t\t\t  <div class=\"prod_price\"><span class=\"reduce\">350\$</span> <span class=\"price\">270\$</span></div>
\t\t\t</div>
\t\t\t<div class=\"bottom_prod_box\"></div>
\t\t\t<div class=\"prod_details_tab\"> <a href=\"#\" title=\"header=[Add to cart] body=[&nbsp;] fade=[on]\"><img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/cart.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Specials] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favs.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Gifts] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favorites.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"/product/details/3434\" class=\"prod_details\">Детали</a> </div>
\t\t  </div>
\t\t   <div class=\"prod_box\">
\t\t\t<div class=\"top_prod_box\"></div>
\t\t\t<div class=\"center_prod_box\">
\t\t\t  <div class=\"product_title\"><a href=\"/product/details/23232\">Motorola 156 MX-VL</a></div>
\t\t\t  <div class=\"product_img\"><a href=\"/product/details/2323\"><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/laptop.gif"), "html");
        echo "\" alt=\"\" border=\"0\" /></a></div>
\t\t\t  <div class=\"prod_price\"><span class=\"reduce\">350\$</span> <span class=\"price\">270\$</span></div>
\t\t\t</div>
\t\t\t<div class=\"bottom_prod_box\"></div>
\t\t\t<div class=\"prod_details_tab\"> <a href=\"#\" title=\"header=[Add to cart] body=[&nbsp;] fade=[on]\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/cart.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Specials] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favs.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Gifts] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favorites.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"/product/details/3434\" class=\"prod_details\">Детали</a> </div>
\t\t  </div>
\t\t  <div class=\"prod_box\">
\t\t\t<div class=\"top_prod_box\"></div>
\t\t\t<div class=\"center_prod_box\">
\t\t\t  <div class=\"product_title\"><a href=\"/product/details/23232\">Motorola 156 MX-VL</a></div>
\t\t\t  <div class=\"product_img\"><a href=\"/product/details/2323\"><img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/laptop.gif"), "html");
        echo "\" alt=\"\" border=\"0\" /></a></div>
\t\t\t  <div class=\"prod_price\"><span class=\"reduce\">350\$</span> <span class=\"price\">270\$</span></div>
\t\t\t</div>
\t\t\t<div class=\"bottom_prod_box\"></div>
\t\t\t<div class=\"prod_details_tab\"> <a href=\"#\" title=\"header=[Add to cart] body=[&nbsp;] fade=[on]\"><img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/cart.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Specials] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favs.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Gifts] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favorites.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"/product/details/3434\" class=\"prod_details\">Детали</a> </div>
\t\t  </div>
\t\t   <div class=\"prod_box\">
\t\t\t<div class=\"top_prod_box\"></div>
\t\t\t<div class=\"center_prod_box\">
\t\t\t  <div class=\"product_title\"><a href=\"/product/details/23232\">Motorola 156 MX-VL</a></div>
\t\t\t  <div class=\"product_img\"><a href=\"/product/details/2323\"><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/laptop.gif"), "html");
        echo "\" alt=\"\" border=\"0\" /></a></div>
\t\t\t  <div class=\"prod_price\"><span class=\"reduce\">350\$</span> <span class=\"price\">270\$</span></div>
\t\t\t</div>
\t\t\t<div class=\"bottom_prod_box\"></div>
\t\t\t<div class=\"prod_details_tab\"> <a href=\"#\" title=\"header=[Add to cart] body=[&nbsp;] fade=[on]\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/cart.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Specials] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favs.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Gifts] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favorites.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"/product/details/3434\" class=\"prod_details\">Детали</a> </div>
\t\t  </div>
\t\t   <div class=\"prod_box\">
\t\t\t<div class=\"top_prod_box\"></div>
\t\t\t<div class=\"center_prod_box\">
\t\t\t  <div class=\"product_title\"><a href=\"/product/details/23232\">Motorola 156 MX-VL</a></div>
\t\t\t  <div class=\"product_img\"><a href=\"/product/details/2323\"><img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/laptop.gif"), "html");
        echo "\" alt=\"\" border=\"0\" /></a></div>
\t\t\t  <div class=\"prod_price\"><span class=\"reduce\">350\$</span> <span class=\"price\">270\$</span></div>
\t\t\t</div>
\t\t\t<div class=\"bottom_prod_box\"></div>
\t\t\t<div class=\"prod_details_tab\"> <a href=\"#\" title=\"header=[Add to cart] body=[&nbsp;] fade=[on]\"><img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/cart.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Specials] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favs.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Gifts] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favorites.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"/product/details/3434\" class=\"prod_details\">Детали</a> </div>
\t\t  </div>
\t\t  <div class=\"center_title_bar\">Рекомендуемые товары</div>
\t\t  <div class=\"prod_box\">
\t\t\t<div class=\"top_prod_box\"></div>
\t\t\t<div class=\"center_prod_box\">
\t\t\t  <div class=\"product_title\"><a href=\"/product/details/23232\">Motorola 156 MX-VL</a></div>
\t\t\t  <div class=\"product_img\"><a href=\"/product/details/2323\"><img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/laptop.gif"), "html");
        echo "\" alt=\"\" border=\"0\" /></a></div>
\t\t\t  <div class=\"prod_price\"><span class=\"reduce\">350\$</span> <span class=\"price\">270\$</span></div>
\t\t\t</div>
\t\t\t<div class=\"bottom_prod_box\"></div>
\t\t\t<div class=\"prod_details_tab\"> <a href=\"#\" title=\"header=[Add to cart] body=[&nbsp;] fade=[on]\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/cart.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Specials] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favs.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Gifts] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favorites.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"/product/details/3434\" class=\"prod_details\">Детали</a> </div>
\t\t  </div>
\t\t  <div class=\"prod_box\">
\t\t\t<div class=\"top_prod_box\"></div>
\t\t\t<div class=\"center_prod_box\">
\t\t\t  <div class=\"product_title\"><a href=\"/product/details/23232\">Motorola 156 MX-VL</a></div>
\t\t\t  <div class=\"product_img\"><a href=\"/product/details/2323\"><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/laptop.gif"), "html");
        echo "\" alt=\"\" border=\"0\" /></a></div>
\t\t\t  <div class=\"prod_price\"><span class=\"reduce\">350\$</span> <span class=\"price\">270\$</span></div>
\t\t\t</div>
\t\t\t<div class=\"bottom_prod_box\"></div>
\t\t\t<div class=\"prod_details_tab\"> <a href=\"#\" title=\"header=[Add to cart] body=[&nbsp;] fade=[on]\"><img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/cart.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Specials] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favs.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Gifts] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favorites.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"/product/details/3434\" class=\"prod_details\">Детали</a> </div>
\t\t  </div>
\t\t  <div class=\"prod_box\">
\t\t\t<div class=\"top_prod_box\"></div>
\t\t\t<div class=\"center_prod_box\">
\t\t\t  <div class=\"product_title\"><a href=\"/product/details/23232\">Motorola 156 MX-VL</a></div>
\t\t\t  <div class=\"product_img\"><a href=\"/product/details/2323\"><img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/laptop.gif"), "html");
        echo "\" alt=\"\" border=\"0\" /></a></div>
\t\t\t  <div class=\"prod_price\"><span class=\"reduce\">350\$</span> <span class=\"price\">270\$</span></div>
\t\t\t</div>
\t\t\t<div class=\"bottom_prod_box\"></div>
\t\t\t<div class=\"prod_details_tab\"> <a href=\"#\" title=\"header=[Add to cart] body=[&nbsp;] fade=[on]\"><img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/cart.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Specials] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favs.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"#\" title=\"header=[Gifts] body=[&nbsp;] fade=[on]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/favorites.gif"), "html");
        echo "\" alt=\"\" border=\"0\" class=\"left_bt\" /></a> <a href=\"/product/details/3434\" class=\"prod_details\">Детали</a> </div>
\t\t  </div>
\t\t</div>
\t\t<!-- end of center content -->
\t\t<div class=\"right_content\">
\t\t  <div class=\"shopping_cart\">
\t\t\t<div class=\"cart_title\">Корзина</div>
\t\t\t<div class=\"cart_details\"> 3 товара <br />
\t\t\t  <span class=\"border_cart\"></span> Всего: <span class=\"price\">350\$</span> </div>
\t\t\t<div class=\"cart_icon\"><a href=\"#\" title=\"header=[Checkout] body=[&nbsp;] fade=[on]\"><img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/shoppingcart.png"), "html");
        echo "\" alt=\"\" width=\"48\" height=\"48\" border=\"0\" /></a></div>
\t\t  </div>
\t\t  <div class=\"title_box\">Новости</div>
\t\t  <div class=\"border_box\">
\t\t\t<div class=\"product_title\"><a href=\"/product/details/3434\">Motorola 156 MX-VL</a></div>
\t\t\t<div class=\"product_img\"><a href=\"/product/details/3434\"><img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/p2.gif"), "html");
        echo "\" alt=\"\" border=\"0\" /></a></div>
\t\t\t<div class=\"prod_price\"><span class=\"reduce\">350\$</span> <span class=\"price\">270\$</span></div>
\t\t  </div>
\t\t  <div class=\"title_box\">Производители</div>
\t\t  <ul class=\"left_menu\">
\t\t\t<li class=\"odd\"><a href=\"#\">Sony</a></li>
\t\t\t<li class=\"even\"><a href=\"#\">Samsung</a></li>
\t\t\t<li class=\"odd\"><a href=\"#\">Daewoo</a></li>
\t\t\t<li class=\"even\"><a href=\"#\">LG</a></li>
\t\t\t<li class=\"odd\"><a href=\"#\">Fujitsu Siemens</a></li>
\t\t\t<li class=\"even\"><a href=\"#\">Motorola</a></li>
\t\t\t<li class=\"odd\"><a href=\"#\">Phillips</a></li>
\t\t\t<li class=\"even\"><a href=\"#\">Beko</a></li>
\t\t  </ul>
\t\t  <div class=\"banner_adds\"> <a href=\"#\"><img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/bann1.jpg"), "html");
        echo "\" alt=\"\" border=\"0\" /></a> </div>
\t\t</div>
\t\t<!-- end of right content -->
\t  </div>
\t  <!-- end of main content -->
  
  <div class=\"footer\">
    <div class=\"left_footer\"> <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/footer_logo.png"), "html");
        echo "\" alt=\"\" width=\"170\" height=\"49\"/> </div>
    <div class=\"center_footer\"> VictorinoxStore. Все права защищены 2012<br />
      <br />
      <img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/images/payment.gif"), "html");
        echo "\" alt=\"\" /> </div>
    <div class=\"right_footer\"> <a href=\"#\">Главная</a> <a href=\"#\">О нас</a> <a href=\"#\">Карта сайта</a> <a href=\"#\">RSS</a> <a href=\"/user/contact\">Контакты</a> </div>
  </div>
</div>
<!-- end of main_container -->
</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Магазин швейцарских ножей VictorinoxStore";
    }

    public function getTemplateName()
    {
        return "AcmeTestBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
