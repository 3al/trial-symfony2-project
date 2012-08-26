<?php

/* AcmeTestBundle::admin-layout.html.twig */
class __TwigTemplate_179afd70155774cc0cc31ef6348fb073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
\t
\t<head>
\t\t
\t\t<meta charset=\"utf-8\" />
\t\t
\t\t<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/css/admin-style.css"), "html");
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("helloext/extjs/resources/css/ext-all.css"), "html");
        echo "\" />
         
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("helloext/extjs/ext-debug.js"), "html");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("helloext/app.js"), "html");
        echo "\"></script>
\t\t
\t</head>
\t
     


\t<body>

        <!--
\t\tА пока потренеруемся с canvas: <br />
\t\t<canvas id=\"my-first-canvas\" width=\"360\" height=\"240\">
\t\t\t<p>No canvas support? Have an old-fashioned image instead:</p>
\t\t</canvas>
\t\t
\t\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetest/js/canvas.js"), "html");
        echo "\" /></script>
\t\t-->
        
        
       
        <div id=\"header\">
        Шапка
        </div>

        <div class=\"logout\">
            <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_logout"), "html");
        echo "\">Выход</a>
        </div>
        
        <!--
        
        <ul class=\"left-menu\">
                    
            <li class=\"first-level-item order-first active\"> <a href=\"/admin/simple-pages\">Простые страницы </li>
            <li class=\"first-level-item\"> <a href=\"/admin/product-groups\">Группы товаров </a> </li>
            <li class=\"first-level-item order-last\"> <a href=\"/admin/users\"> Пользователи </a> </li>
                    
        </ul>
        
        -->
        
        
        <div id=\"content\">
            ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "        </div>
        
        
        <div  id=\"pusher\"></div> 

        <div  id=\"footer\"> 
        (c) VictorinoxStore.ru
        </div>

        
        
\t</body>
\t
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo " Здравствуйте, Администратор! ";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        echo " Содержимое будет здесь ";
    }

    public function getTemplateName()
    {
        return "AcmeTestBundle::admin-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
