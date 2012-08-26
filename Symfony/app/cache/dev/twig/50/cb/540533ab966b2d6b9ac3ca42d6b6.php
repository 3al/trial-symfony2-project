<?php

/* AcmeTestBundle::header.html.twig */
class __TwigTemplate_50cb540533ab966b2d6b9ac3ca42d6b6 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo twig_escape_filter($this->env, $this->getContext($context, 'testvar'), "html");
    }

    public function getTemplateName()
    {
        return "AcmeTestBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
