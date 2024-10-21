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

/* modules/contrib/commerce/modules/checkout/templates/commerce-checkout-order-summary.html.twig */
class __TwigTemplate_972ce85a7aa707c79e6a730ee6ef4901 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'order_items' => [$this, 'block_order_items'],
            'totals' => [$this, 'block_totals'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["checkout-order-summary"], "method", false, false, true, 23), 23, $this->source), "html", null, true);
        yield ">
  ";
        // line 24
        yield from $this->unwrap()->yieldBlock('order_items', $context, $blocks);
        // line 41
        yield "  ";
        yield from $this->unwrap()->yieldBlock('totals', $context, $blocks);
        // line 44
        yield "</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "order_entity", "rendered_totals"]);        return; yield '';
    }

    // line 24
    public function block_order_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        yield "    <table>
      <tbody>
      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order_entity"] ?? null), "getItems", [], "any", false, false, true, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["order_item"]) {
            // line 28
            yield "        <tr>
          <td>";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatNumber($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["order_item"], "getQuantity", [], "any", false, false, true, 29), 29, $this->source)), "html", null, true);
            yield "&nbsp;x</td>
          ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, $context["order_item"], "hasPurchasedEntity", [], "any", false, false, true, 30)) {
                // line 31
                yield "            <td>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce\TwigExtension\CommerceTwigExtension']->renderEntity($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["order_item"], "getPurchasedEntity", [], "any", false, false, true, 31), 31, $this->source), "summary"), "html", null, true);
                yield "</td>
          ";
            } else {
                // line 33
                yield "            <td>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["order_item"], "label", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                yield "</td>
          ";
            }
            // line 35
            yield "          <td>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["order_item"], "getTotalPrice", [], "any", false, false, true, 35), 35, $this->source)), "html", null, true);
            yield "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "      </tbody>
    </table>
  ";
        return; yield '';
    }

    // line 41
    public function block_totals($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_totals"] ?? null), 42, $this->source), "html", null, true);
        yield "
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/checkout/templates/commerce-checkout-order-summary.html.twig";
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
        return array (  112 => 42,  108 => 41,  101 => 38,  91 => 35,  85 => 33,  79 => 31,  77 => 30,  73 => 29,  70 => 28,  66 => 27,  62 => 25,  58 => 24,  52 => 44,  49 => 41,  47 => 24,  42 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce/modules/checkout/templates/commerce-checkout-order-summary.html.twig", "C:\\xampp\\htdocs\\drupalwebsite\\modules\\contrib\\commerce\\modules\\checkout\\templates\\commerce-checkout-order-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 24, "for" => 27, "if" => 30);
        static $filters = array("escape" => 23, "number_format" => 29, "commerce_entity_render" => 31, "commerce_price_format" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'if'],
                ['escape', 'number_format', 'commerce_entity_render', 'commerce_price_format'],
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
