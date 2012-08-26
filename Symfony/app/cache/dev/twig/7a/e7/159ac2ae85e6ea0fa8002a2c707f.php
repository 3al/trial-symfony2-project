<?php

/* AcmeSecurityBundle::admin-login-layout.html.twig */
class __TwigTemplate_7ae7159ac2ae85e6ea0fa8002a2c707f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'notice' => array($this, 'block_notice'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>

<html>
    
    <head>
        <title>
            Введите данные доступа к администраторской части сайта
        </title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesecurity/css/style.css"), "html");
        echo "\" />
    </head>
    
    <body>
        
        <div id=\"notice-panel\">
            ";
        // line 15
        $this->displayBlock('notice', $context, $blocks);
        // line 18
        echo "        </div>
        
        ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "        
    </body>
    
</html>";
    }

    // line 15
    public function block_notice($context, array $blocks = array())
    {
        // line 16
        echo "                Введите данные доступа к администраторской части сайта
            ";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "        ";
    }

    public function getTemplateName()
    {
        return "AcmeSecurityBundle::admin-login-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
