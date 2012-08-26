<?php

/* AcmeTestBundle:Test:index.html.twig */
class __TwigTemplate_fff5fcad4594d3ad44898f7f11a479d8 extends Twig_Template
{
    protected $parent;

    public function getParent(array $context)
    {
        $parent = "AcmeTestBundle::layout.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
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
