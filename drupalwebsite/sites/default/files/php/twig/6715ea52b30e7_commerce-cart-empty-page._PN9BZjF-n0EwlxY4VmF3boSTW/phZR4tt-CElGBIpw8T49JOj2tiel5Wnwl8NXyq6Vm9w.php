<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/commerce/modules/cart/templates/commerce-cart-empty-page.html.twig */
class __TwigTemplate_bc19a7e72a4da50a0de65afe7c87bbc0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        yield "<div class=\"cart-empty-page\">
  ";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Your shopping cart is empty."));
        yield "
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/cart/templates/commerce-cart-empty-page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 11,  40 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce/modules/cart/templates/commerce-cart-empty-page.html.twig", "C:\\xampp\\htdocs\\drupalwebsite\\modules\\contrib\\commerce\\modules\\cart\\templates\\commerce-cart-empty-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("t" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
