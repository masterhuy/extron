<?php

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig */
class __TwigTemplate_bed4a7e52c25abee8ff23a918f59ff4d0b395d755859354baa2b1ef6f5bf045e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_showcase_card' => array($this, 'block_meta_showcase_card'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('meta_showcase_card', $context, $blocks);
    }

    public function block_meta_showcase_card($context, array $blocks = array())
    {
        // line 29
        echo "  <div id=\"seo-urls-showcase-card\" class=\"showcase-card card\">
    <div class=\"showcase-card__left shape-one helper-card__meta-background\">
      <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/scss/img/helper-card/seo@3x.png"), "html", null, true);
        echo "\" class=\"img-fluid\">
    </div>
    <div class=\"showcase-card__right\">
      <h2>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Improve your SEO", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</h2>
      <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit information about your pages to gain visibility and therefore reach more visitors. We advise you to start with the index page, it stands for your homepage.", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</p>
      <a class=\"btn btn-outline-secondary\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["helperDocLink"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Learn more", array(), "Admin.Actions"), "html", null, true);
        echo "</a>
      ";
        // line 37
        if ((($context["indexPageId"] ?? null) && ($context["isGridDisplayed"] ?? null))) {
            // line 38
            echo "        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_metas_edit", array("metaId" => ($context["indexPageId"] ?? null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure index page", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</a>
      ";
        }
        // line 40
        echo "    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\">close</i>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 40,  58 => 38,  56 => 37,  50 => 36,  46 => 35,  42 => 34,  36 => 31,  32 => 29,  26 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig", "D:\\xamppp\\htdocs\\jms_extron\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\Blocks\\meta_showcase_card.html.twig");
    }
}
