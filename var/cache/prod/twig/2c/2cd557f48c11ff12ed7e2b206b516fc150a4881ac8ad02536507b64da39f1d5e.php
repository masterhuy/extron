<?php

/* @PrestaShop/Admin/Common/_partials/_sidebar.html.twig */
class __TwigTemplate_2ce7956b54a207f77aa9b726c917ec34280bbfb58e2e9d4f4b26f861690ba46b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<div id=\"ps-quicknav-sidebar\"  class=\"_fullspace\">
    <div class=\"quicknav-header\">
        <div class=\"float-left\"><a href=\"#\" data-toggle=\"sidebar\" data-target=\".sidebar\">×</a></div>
        <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null), array(), "AdminCommon"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"quicknav-scroller _fullspace\">
        <object class=\"_fullspace\" data=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\"></object>
    </div>
    <div class=\"quicknav-fixed-bottom navbar-form-footer\">
        ";
        // line 34
        echo ($context["footer"] ?? null);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/_partials/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 34,  30 => 31,  24 => 28,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Common/_partials/_sidebar.html.twig", "D:\\xamppp\\htdocs\\jms_extron\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\_partials\\_sidebar.html.twig");
    }
}
