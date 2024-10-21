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

/* modules/contrib/commerce/modules/order/templates/commerce-order-total-summary.html.twig */
class __TwigTemplate_1ed4fa91e7062c3703b3aac99ec47dc7 extends Template
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
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("commerce_order/total_summary"), "html", null, true);
        yield "
<div";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 22, $this->source), "html", null, true);
        yield ">
  ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "subtotal", [], "any", false, false, true, 23)) {
            // line 24
            yield "    <div class=\"order-total-line order-total-line__subtotal\">
      <span class=\"order-total-line-label\">";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Subtotal"));
            yield " </span><span class=\"order-total-line-value\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "subtotal", [], "any", false, false, true, 25), 25, $this->source)), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        // line 28
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "adjustments", [], "any", false, false, true, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
            // line 29
            yield "    <div class=\"order-total-line order-total-line__adjustment order-total-line__adjustment--";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "type", [], "any", false, false, true, 29), 29, $this->source)), "html", null, true);
            yield "\">
      <span class=\"order-total-line-label\">";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "label", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            yield " </span><span class=\"order-total-line-value\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "amount", [], "any", false, false, true, 30), 30, $this->source)), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, true, 33)) {
            // line 34
            yield "    <div class=\"order-total-line order-total-line__total\">
      <span class=\"order-total-line-label\">";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Total"));
            yield " </span><span class=\"order-total-line-value\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, true, 35), 35, $this->source)), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        // line 38
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "totals"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/order/templates/commerce-order-total-summary.html.twig";
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
        return array (  96 => 38,  88 => 35,  85 => 34,  82 => 33,  71 => 30,  66 => 29,  61 => 28,  53 => 25,  50 => 24,  48 => 23,  44 => 22,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce/modules/order/templates/commerce-order-total-summary.html.twig", "C:\\xampp\\htdocs\\drupalwebsite\\modules\\contrib\\commerce\\modules\\order\\templates\\commerce-order-total-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23, "for" => 28);
        static $filters = array("escape" => 21, "t" => 25, "commerce_price_format" => 25, "clean_class" => 29);
        static $functions = array("attach_library" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't', 'commerce_price_format', 'clean_class'],
                ['attach_library'],
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
