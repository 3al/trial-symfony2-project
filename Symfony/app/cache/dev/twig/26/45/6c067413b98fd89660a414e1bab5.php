<?php

/* AcmeTestBundle:Admin:index.html.twig */
class __TwigTemplate_26456c067413b98fd89660a414e1bab5 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "AcmeTestBundle::admin-layout.html.twig";
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Страница админки по умолчанию ";
    }

    public function getTemplateName()
    {
        return "AcmeTestBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
