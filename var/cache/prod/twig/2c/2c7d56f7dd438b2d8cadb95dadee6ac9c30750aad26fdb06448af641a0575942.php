<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Order/Order/preview.html.twig */
class __TwigTemplate_cec3fd01086be805e9b54a0ed9817911d52d98339c349d80ebc7e0278c15869d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'order_preview' => [$this, 'block_order_preview'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('order_preview', $context, $blocks);
    }

    public function block_order_preview($context, array $blocks = [])
    {
        // line 27
        echo "  <div class=\"row order-preview-content mt-2\">
    <div class=\"col-5\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">local_shipping</i>
              </p>
            </div>
            <div class=\"col\">
              <p class=\"mb-0\">
                <strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier", [], "Admin.Global"), "html", null, true);
        echo ":</strong>
                ";
        // line 40
        if ( !$this->getAttribute(($context["orderPreview"] ?? null), "isVirtual", [])) {
            // line 41
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "carrierName", []), "html", null, true);
            echo "
                ";
        } else {
            // line 43
            echo "                  -
                ";
        }
        // line 45
        echo "              </p>

              <p class=\"mb-0\">
                <strong>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tracking number", [], "Admin.Shipping.Feature"), "html", null, true);
        echo ":</strong>
                ";
        // line 49
        if (( !$this->getAttribute(($context["orderPreview"] ?? null), "isVirtual", []) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "trackingNumber", [])))) {
            // line 50
            echo "                  ";
            if ($this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "trackingUrl", [])) {
                // line 51
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "trackingUrl", []), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "trackingNumber", []), "html", null, true);
                echo "</a>
                  ";
            } else {
                // line 53
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "shippingDetails", []), "trackingNumber", []), "html", null, true);
                echo "
                  ";
            }
            // line 55
            echo "                ";
        } else {
            // line 56
            echo "                  -
                ";
        }
        // line 58
        echo "              </p>

              <p class=\"mb-2\">
                <strong>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo ":</strong>
                ";
        // line 62
        if ($this->getAttribute(($context["orderPreview"] ?? null), "virtual", [])) {
            // line 63
            echo "                  -
                ";
        }
        // line 65
        echo "              </p>

              ";
        // line 67
        if ( !$this->getAttribute(($context["orderPreview"] ?? null), "virtual", [])) {
            // line 68
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["orderPreview"] ?? null), "shippingAddressFormatted", []), "
"));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 69
                echo "                  <p";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo " class=\"mb-0\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                echo "</p>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "              ";
        }
        // line 72
        echo "            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">email</i>
              </p>
            </div>
            <div class=\"col\">
              <p class=\"mb-1\">
                <strong>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email:", [], "Admin.Global"), "html", null, true);
        echo "</strong>
              </p>

              <p class=\"mb-0\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderPreview"] ?? null), "invoiceDetails", []), "email", []), "html", null, true);
        echo "</p>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">receipt</i>
              </p>
            </div>
            <div class=\"col\">
              <p class=\"mb-1\">
                <strong>";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo ":</strong>
              </p>


              ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["orderPreview"] ?? null), "invoiceAddressFormatted", []), "
"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 103
            echo "                <p";
            if ( !$this->getAttribute($context["loop"], "last", [])) {
                echo " class=\"mb-0\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["line"], "html", null, true);
            echo "</p>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-7\">
      <div class=\"table-responsive\">
        <table class=\"table product table-borderless border-bottom-0\">
          <thead>
          <tr>
            ";
        // line 115
        if ($this->getAttribute(($context["orderPreview"] ?? null), "taxIncluded", [])) {
            // line 116
            echo "              ";
            $context["taxInclusion"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax included", [], "Admin.Global");
            // line 117
            echo "            ";
        } else {
            // line 118
            echo "              ";
            $context["taxInclusion"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax excluded", [], "Admin.Global");
            // line 119
            echo "            ";
        }
        // line 120
        echo "
            <th>
              ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "
              (";
        // line 123
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["orderPreview"] ?? null), "productDetails", [])), "html", null, true);
        echo ")
            </th>
            <th>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"js-cell-product-stock-location\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock location", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
            ";
        // line 127
        if (($this->getAttribute(($context["orderPreview"] ?? null), "taxIncluded", []) == false)) {
            // line 128
            echo "              <th class=\"text-center\">
                ";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax", [], "Admin.Global"), "html", null, true);
            echo "
              </th>
            ";
        }
        // line 132
        echo "            <th class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"text-center\">
              ";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "
              <small>";
        // line 135
        echo twig_escape_filter($this->env, ($context["taxInclusion"] ?? null), "html", null, true);
        echo "</small>
            </th>
          </tr>
          </thead>
          <tbody>
          ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["orderPreview"] ?? null), "productDetails", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["productDetail"]) {
            // line 141
            echo "            <tr class=\"";
            if (($this->getAttribute($context["loop"], "index", []) > ($context["productsPreviewLimit"] ?? null))) {
                echo "js-product-preview-more d-none";
            }
            echo "\">
              <td class=\"p-1\">";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "name", []), "html", null, true);
            echo "</td>
              <td class=\"p-1\">";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "reference", []), "html", null, true);
            echo "</td>
              <td class=\"p-1 js-cell-product-stock-location\">
                ";
            // line 145
            if ( !twig_test_empty($this->getAttribute($context["productDetail"], "location", []))) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "location", []), "html", null, true);
            }
            // line 146
            echo "              </td>
              ";
            // line 147
            if (($this->getAttribute(($context["orderPreview"] ?? null), "taxIncluded", []) == false)) {
                // line 148
                echo "                <td class=\"p-1 text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "totalTax", []), "html", null, true);
                echo "</td>
              ";
            }
            // line 150
            echo "              <td class=\"p-1 text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "quantity", []), "html", null, true);
            echo "</td>
              <td class=\"p-1 text-center\">";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["productDetail"], "totalPrice", []), "html", null, true);
            echo "</td>
            </tr>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "
          ";
        // line 155
        if ((twig_length_filter($this->env, $this->getAttribute(($context["orderPreview"] ?? null), "productDetails", [])) > ($context["productsPreviewLimit"] ?? null))) {
            // line 156
            echo "            <tr>
              <td colspan=\"6\">
                <a href=\"#\" class=\"js-preview-more-products-btn text-dark\">
                  <i class=\"material-icons\">more_horiz</i>
                  ";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(%count% more)", ["%count%" => (twig_length_filter($this->env, $this->getAttribute(            // line 161
($context["orderPreview"] ?? null), "productDetails", [])) - ($context["productsPreviewLimit"] ?? null))], "Admin.Global"), "html", null, true);
            // line 162
            echo "
                </a>
              </td>
            </tr>
          ";
        }
        // line 167
        echo "          </tbody>
        </table>
      </div>

      <div class=\"text-right\">
        <a href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => ($context["orderId"] ?? null)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm mb-3\">
          ";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Open details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          <i class=\"material-icons\">arrow_right_alt</i>
        </a>
      </div>
    </div>
  </div>
  ";
        // line 179
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayOrderPreview", ["order_id" => ($context["orderId"] ?? null)]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  436 => 179,  427 => 173,  423 => 172,  416 => 167,  409 => 162,  407 => 161,  406 => 160,  400 => 156,  398 => 155,  395 => 154,  378 => 151,  373 => 150,  367 => 148,  365 => 147,  362 => 146,  358 => 145,  353 => 143,  349 => 142,  342 => 141,  325 => 140,  317 => 135,  313 => 134,  307 => 132,  301 => 129,  298 => 128,  296 => 127,  292 => 126,  288 => 125,  283 => 123,  279 => 122,  275 => 120,  272 => 119,  269 => 118,  266 => 117,  263 => 116,  261 => 115,  249 => 105,  228 => 103,  210 => 102,  203 => 98,  189 => 87,  183 => 84,  169 => 72,  166 => 71,  145 => 69,  126 => 68,  124 => 67,  120 => 65,  116 => 63,  114 => 62,  110 => 61,  105 => 58,  101 => 56,  98 => 55,  92 => 53,  84 => 51,  81 => 50,  79 => 49,  75 => 48,  70 => 45,  66 => 43,  60 => 41,  58 => 40,  54 => 39,  40 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig", "/var/www/html/prestashop/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/preview.html.twig");
    }
}
