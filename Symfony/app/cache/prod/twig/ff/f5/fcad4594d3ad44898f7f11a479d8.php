<?php

/* AcmeTestBundle:Test:index.html.twig */
class __TwigTemplate_fff5fcad4594d3ad44898f7f11a479d8 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Содержимое, выводимое действием <strong>AcmeTestBundle:Test:index</strong>

";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, 'testvar'), "html");
    }

    public function getTemplateName()
    {
        return "AcmeTestBundle:Test:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
