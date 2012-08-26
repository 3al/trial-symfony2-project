<?php

/* AcmeSecurityBundle:Security:login.html.twig */
class __TwigTemplate_1fce8089eff4e8526542786c65337bd1 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'notice' => array($this, 'block_notice'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "AcmeSecurityBundle::admin-login-layout.html.twig";
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
    public function block_notice($context, array $blocks = array())
    {
        // line 4
        echo "Авторизуйтесь, пожалуйста!
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if ($this->getContext($context, 'error')) {
            // line 10
            echo "    <div id=\"error_div\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'error'), "message", array(), "any", false), "html");
            echo "
     </div>
";
        }
        // line 14
        echo "
<form id=\"admin_auth_form\" name=\"_admin_auth_form\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_login_check"), "html");
        echo "\" method=\"post\">
    
    <table id=\"admin_auth_table\">
        <tr>
            <td>
                <label for=\"username\">Логин:</label>
            </td>
            <td>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, 'last_username'), "html");
        echo "\" />
            </td>
        </tr>
        <tr>
            <td>
                 <label for=\"password\">Пароль:</label>
            </td>
            <td>
                 <input type=\"password\" id=\"password\" name=\"_password\" />
            </td>
        </tr>
        <tr>
            <td colspan=\"2\" id=\"submit_td\">
                 <button type=\"submit\">Войти</button>
            </td>
        </tr>
    </table>
    

    ";
        // line 46
        echo "
    
</form>

";
    }

    public function getTemplateName()
    {
        return "AcmeSecurityBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
