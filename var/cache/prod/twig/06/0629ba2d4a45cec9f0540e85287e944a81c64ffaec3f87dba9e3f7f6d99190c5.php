<?php

/* @PrestaShop/Admin/Module/common.html.twig */
class __TwigTemplate_2054975a3133fdd1cbfc011a131d6b2b7a26bdb00db82cacc200cf6c04b5d798 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Module/common.html.twig", 25);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
    var moduleURLs = {
      'catalogRefresh': '";
        // line 31
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_catalog_refresh"), "js"), "html", null, true);
        echo "',
      'configurationPage': '";
        // line 32
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_configure_action", array("module_name" => ":number:")), "js"), "html", null, true);
        echo "',
      'moduleImport': '";
        // line 33
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_import"), "js"), "html", null, true);
        echo "',
      'notificationsCount': '";
        // line 34
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_notification_count"), "js"), "html", null, true);
        echo "',
    };
  </script>
  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/plugins/jquery.pstagger.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/module.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 38,  56 => 37,  50 => 34,  46 => 33,  42 => 32,  38 => 31,  31 => 28,  28 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Module/common.html.twig", "D:\\xamppp\\htdocs\\jms_extron\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\common.html.twig");
    }
}
