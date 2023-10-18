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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig */
class __TwigTemplate_7e397590e01ead4cffd2125eaa4411078c1b3d6ff49d16f52e6a186ff1865fe7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 45);
        // line 45
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 45, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["radio_widget"])) {
            throw new RuntimeError(sprintf('Block "radio_widget" is not defined in trait "bootstrap_base_layout.html.twig".'), 45, $this->getSourceContext());
        }

        $_trait_0_blocks["base_radio_widget"] = $_trait_0_blocks["radio_widget"]; unset($_trait_0_blocks["radio_widget"]);

        if (!isset($_trait_0_blocks["checkbox_widget"])) {
            throw new RuntimeError(sprintf('Block "checkbox_widget" is not defined in trait "bootstrap_base_layout.html.twig".'), 45, $this->getSourceContext());
        }

        $_trait_0_blocks["base_checkbox_widget"] = $_trait_0_blocks["checkbox_widget"]; unset($_trait_0_blocks["checkbox_widget"]);

        $_trait_1 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 48);
        // line 48
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 48, $this->getSourceContext());
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 49);
        // line 49
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.', 49, $this->getSourceContext());
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $_trait_3 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 50);
        // line 50
        if (!$_trait_3->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 50, $this->getSourceContext());
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'text_with_unit_widget' => [$this, 'block_text_with_unit_widget'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'form_row' => [$this, 'block_form_row'],
                'widget_type_class' => [$this, 'block_widget_type_class'],
                'form_label' => [$this, 'block_form_label'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'url_widget' => [$this, 'block_url_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'email_widget' => [$this, 'block_email_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'icon_button_widget' => [$this, 'block_icon_button_widget'],
                'choice_widget' => [$this, 'block_choice_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_errors_field' => [$this, 'block_form_errors_field'],
                'form_errors_other' => [$this, 'block_form_errors_other'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_fields_with_tabs' => [$this, 'block_translatable_fields_with_tabs'],
                'translatable_fields_with_dropdown' => [$this, 'block_translatable_fields_with_dropdown'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'form_help' => [$this, 'block_form_help'],
                'form_external_link' => [$this, 'block_form_external_link'],
                'form_external_link_attributes' => [$this, 'block_form_external_link_attributes'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
                'form_prepend_alert' => [$this, 'block_form_prepend_alert'],
                'form_append_alert' => [$this, 'block_form_append_alert'],
                'form_alert' => [$this, 'block_form_alert'],
                'unavailable_widget' => [$this, 'block_unavailable_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 34
        echo "
";
        // line 46
        echo "
";
        // line 51
        echo "
";
        // line 53
        echo "
";
        // line 56
        $this->displayBlock('form_widget', $context, $blocks);
        // line 64
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 69
        $this->displayBlock('text_with_unit_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('ip_address_text_widget', $context, $blocks);
        // line 90
        echo "
";
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('form_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('widget_type_class', $context, $blocks);
        // line 129
        echo "
";
        // line 132
        $this->displayBlock('form_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('money_widget', $context, $blocks);
        // line 202
        echo "
";
        // line 203
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 226
        $this->displayBlock('url_widget', $context, $blocks);
        // line 232
        $this->displayBlock('date_widget', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_widget', $context, $blocks);
        // line 266
        $this->displayBlock('email_widget', $context, $blocks);
        // line 272
        $this->displayBlock('button_widget', $context, $blocks);
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('icon_button_widget', $context, $blocks);
        // line 295
        echo "
";
        // line 296
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 300
        echo "
";
        // line 301
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 305
        echo "
";
        // line 306
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 340
        echo "
";
        // line 341
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 379
        echo "
";
        // line 380
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 405
        echo "
";
        // line 406
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 412
        echo "
";
        // line 413
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 449
        echo "
";
        // line 450
        $this->displayBlock('translate_textarea_widget', $context, $blocks);
        // line 491
        echo "
";
        // line 492
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 506
        echo "
";
        // line 507
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 513
        echo "
";
        // line 514
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 540
        echo "
";
        // line 541
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 556
        echo "
";
        // line 557
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 586
        echo "
";
        // line 588
        echo "
";
        // line 589
        $this->displayBlock('choice_label', $context, $blocks);
        // line 594
        echo "
";
        // line 595
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 598
        echo "
";
        // line 599
        $this->displayBlock('radio_label', $context, $blocks);
        // line 602
        echo "
";
        // line 603
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 635
        echo "
";
        // line 636
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 650
        echo "
";
        // line 651
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 658
        echo "
";
        // line 660
        echo "
";
        // line 661
        $this->displayBlock('form_errors', $context, $blocks);
        // line 668
        echo "
";
        // line 669
        $this->displayBlock('form_errors_field', $context, $blocks);
        // line 735
        echo "
";
        // line 736
        $this->displayBlock('form_errors_other', $context, $blocks);
        // line 755
        echo "
";
        // line 757
        echo "
";
        // line 758
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 788
        echo "
";
        // line 789
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 841
        echo "
";
        // line 843
        $this->displayBlock('translatable_fields_with_tabs', $context, $blocks);
        // line 866
        echo "
";
        // line 867
        $this->displayBlock('translatable_fields_with_dropdown', $context, $blocks);
        // line 903
        echo "
";
        // line 904
        $this->displayBlock('translatable_widget', $context, $blocks);
        // line 912
        echo "
";
        // line 913
        $this->displayBlock('birthday_widget', $context, $blocks);
        // line 937
        echo "
";
        // line 938
        $this->displayBlock('file_widget', $context, $blocks);
        // line 970
        echo "
";
        // line 971
        $this->displayBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 987
        echo "
";
        // line 988
        $this->displayBlock('generatable_text_widget', $context, $blocks);
        // line 1007
        echo "
";
        // line 1008
        $this->displayBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 1033
        echo "
";
        // line 1034
        $this->displayBlock('text_with_length_counter_widget', $context, $blocks);
        // line 1062
        echo "
";
        // line 1063
        $this->displayBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 1067
        echo "
";
        // line 1068
        $this->displayBlock('number_min_max_filter_widget', $context, $blocks);
        // line 1073
        $this->displayBlock('number_widget', $context, $blocks);
        // line 1079
        $this->displayBlock('form_help', $context, $blocks);
        // line 1087
        echo "
";
        // line 1088
        $this->displayBlock('form_external_link', $context, $blocks);
        // line 1101
        $this->displayBlock('form_external_link_attributes', $context, $blocks);
        // line 1115
        $this->displayBlock('custom_content_widget', $context, $blocks);
        // line 1118
        echo "
";
        // line 1119
        $this->displayBlock('text_widget', $context, $blocks);
        // line 1136
        $this->displayBlock('form_prepend_alert', $context, $blocks);
        // line 1142
        $this->displayBlock('form_append_alert', $context, $blocks);
        // line 1148
        $this->displayBlock('form_alert', $context, $blocks);
        // line 1181
        $this->displayBlock('unavailable_widget', $context, $blocks);
    }

    // line 56
    public function block_form_widget($context, array $blocks = [])
    {
        // line 57
        if (array_key_exists("columns_number", $context)) {
            // line 58
            echo "    ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-columns-") . ($context["columns_number"] ?? null)))]);
            // line 59
            echo "  ";
        }
        // line 60
        echo "  ";
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 61
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 64
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 65
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 66
        $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 66)->display(twig_array_merge($context, ["attr" => ($context["attr"] ?? null)]));
    }

    // line 69
    public function block_text_with_unit_widget($context, array $blocks = [])
    {
        // line 70
        echo "  <div class=\"input-group\">";
        // line 71
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 72
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "unit", [], "any", true, true)) {
            // line 73
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "unit", []), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 77
        echo "  </div>
  ";
        // line 78
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 81
    public function block_ip_address_text_widget($context, array $blocks = [])
    {
        // line 82
        echo "  <div class=\"input-group\">";
        // line 83
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 84
        echo "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        echo twig_escape_filter($this->env, ($context["currentIp"] ?? null), "html", null, true);
        echo "\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
  ";
        // line 88
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 93
    public function block_form_row($context, array $blocks = [])
    {
        // line 94
        echo "<div class=\"form-group";
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        if ($this->getAttribute(($context["row_attr"] ?? null), "class", [], "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["row_attr"] ?? null), "class", []), "html", null, true);
        }
        echo "\">";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 96
        $this->displayBlock("form_prepend_alert", $context, $blocks);
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 101
        $this->displayBlock("form_external_link", $context, $blocks);
        // line 102
        $this->displayBlock("form_append_alert", $context, $blocks);
        // line 103
        echo "</div>

  ";
        // line 105
        if (($context["column_breaker"] ?? null)) {
            // line 106
            echo "  <div class=\"form-group form-column-breaker\"></div>
  ";
        }
    }

    // line 110
    public function block_widget_type_class($context, array $blocks = [])
    {
        // line 111
        if (( !($context["compound"] ?? null) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "block_prefixes", [])) > 2))) {
            // line 112
            echo " ";
            ob_start(function () { return ''; });
            // line 113
            echo "
    ";
            // line 114
            $context["index"] = (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "block_prefixes", [])) - 2);
            // line 115
            echo "    ";
            $context["widgetType"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "block_prefixes", []), ($context["index"] ?? null), [], "array");
            // line 116
            echo "    ";
            if ((($context["widgetType"] ?? null) == "choice")) {
                // line 117
                echo "      ";
                if ( !($context["expanded"] ?? null)) {
                    // line 118
                    echo "        ";
                    $context["widgetType"] = "select";
                    // line 119
                    echo "      ";
                } elseif (($context["multiple"] ?? null)) {
                    // line 120
                    echo "        ";
                    $context["widgetType"] = "checboxes";
                    // line 121
                    echo "      ";
                } else {
                    // line 122
                    echo "        ";
                    $context["widgetType"] = "radio";
                    // line 123
                    echo "      ";
                }
                // line 124
                echo "    ";
            }
            // line 125
            echo "    ";
            echo twig_escape_filter($this->env, ($context["widgetType"] ?? null), "html", null, true);
            echo "-widget
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    // line 132
    public function block_form_label($context, array $blocks = [])
    {
        // line 133
        if ( !(($context["label"] ?? null) === false)) {
            // line 134
            if ( !($context["compound"] ?? null)) {
                // line 135
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 137
            echo "    ";
            if (($context["required"] ?? null)) {
                // line 138
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
            }
            // line 140
            echo "    ";
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 141
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 142
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 143
($context["name"] ?? null), "%id%" =>                     // line 144
($context["id"] ?? null)]);
                } else {
                    // line 147
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 151
            $context["labelTag"] = ((array_key_exists("label_tag_name", $context)) ? (_twig_default_filter(($context["label_tag_name"] ?? null), "label")) : ("label"));
            // line 152
            echo "    <";
            echo twig_escape_filter($this->env, ($context["labelTag"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 153
            if (($context["required"] ?? null)) {
                // line 154
                echo "      <span class=\"text-danger\">*</span>
    ";
            }
            // line 156
            echo "    ";
            echo (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)));
            echo "
    ";
            // line 157
            if ($this->getAttribute(($context["label_attr"] ?? null), "tooltip", [], "array", true, true)) {
                // line 158
                echo "      ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? null), "tooltip_placement", [], "array")) : ("top"));
                // line 159
                echo "      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? null), "html", null, true);
                echo "\"
         title=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute(($context["label_attr"] ?? null), "tooltip", [], "array"), "html", null, true);
                echo "\"></i>
    ";
            }
            // line 162
            echo "
    ";
            // line 163
            if ((array_key_exists("label_help_box", $context) || $this->getAttribute(($context["label_attr"] ?? null), "popover", [], "array", true, true))) {
                // line 164
                echo "      ";
                $context["content"] = ((array_key_exists("label_help_box", $context)) ? (($context["label_help_box"] ?? null)) : ($this->getAttribute(($context["label_attr"] ?? null), "popover", [], "array")));
                // line 165
                echo "      ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "popover_placement", [], "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? null), "popover_placement", [], "array")) : ("top"));
                // line 166
                echo "      ";
                $this->loadTemplate("@Common/HelpBox/helpbox.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 166)->display(twig_array_merge($context, ["placement" => ($context["placement"] ?? null), "content" => ($context["content"] ?? null)]));
                // line 167
                echo "    ";
            }
            // line 168
            echo "    </";
            echo twig_escape_filter($this->env, ($context["labelTag"] ?? null), "html", null, true);
            echo ">
    ";
            // line 169
            if (array_key_exists("label_subtitle", $context)) {
                // line 170
                echo "      <p class=\"subtitle\">";
                echo twig_escape_filter($this->env, ($context["label_subtitle"] ?? null), "html", null, true);
                echo "</p>
    ";
            }
        }
    }

    // line 177
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 178
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        // line 179
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        // line 180
        $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 180)->display(twig_array_merge($context, ["attr" => ($context["attr"] ?? null)]));
        // line 181
        echo "  ";
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 184
    public function block_money_widget($context, array $blocks = [])
    {
        // line 185
        echo "<div class=\"input-group money-type\">
    ";
        // line 186
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 187
        echo "    ";
        if ( !($context["prepend"] ?? null)) {
            // line 188
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">";
            // line 189
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 192
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 193
        if (($context["prepend"] ?? null)) {
            // line 194
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 195
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 198
        echo "  </div>

  ";
        // line 200
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 203
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 204
        echo "<div class=\"input-group\">";
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 206
        echo "<div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>";
    }

    // line 212
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 213
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 214
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 216
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 217
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 218
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'errors');
            // line 219
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'errors');
            // line 220
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'widget', ["datetime" => true]);
            // line 221
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'widget', ["datetime" => true]);
            // line 222
            echo "</div>";
        }
    }

    // line 226
    public function block_url_widget($context, array $blocks = [])
    {
        // line 227
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "url")) : ("url"));
        // line 228
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 229
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 232
    public function block_date_widget($context, array $blocks = [])
    {
        // line 233
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 234
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 236
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 237
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 238
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 240
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 241
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget'), "{{ month }}" =>             // line 242
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget'), "{{ day }}" =>             // line 243
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')]);
            // line 245
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 246
                echo "</div>";
            }
        }
    }

    // line 251
    public function block_time_widget($context, array $blocks = [])
    {
        // line 252
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 253
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 255
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 256
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 257
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 259
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", []), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", []), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", []), 'widget');
            }
            // line 260
            echo "    ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 261
                echo "</div>";
            }
        }
    }

    // line 266
    public function block_email_widget($context, array $blocks = [])
    {
        // line 267
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "email")) : ("email"));
        // line 268
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 269
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 272
    public function block_button_widget($context, array $blocks = [])
    {
        // line 273
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 274
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 277
    public function block_icon_button_widget($context, array $blocks = [])
    {
        // line 278
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 279
        echo "  ";
        if ((($context["button_type"] ?? null) == "link")) {
            // line 280
            echo "    ";
            $context["buttonTag"] = "a";
            // line 281
            echo "    ";
            // line 282
            echo "    ";
            if ((($this->getAttribute(($context["attr"] ?? null), "disabled", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "disabled", []), false)) : (false))) {
                // line 283
                echo "      ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(($this->getAttribute(($context["attr"] ?? null), "class", []) . " disabled"))]);
                // line 284
                echo "    ";
            }
            // line 285
            echo "  ";
        } else {
            // line 286
            echo "    ";
            $context["buttonTag"] = "button";
            // line 287
            echo "    ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["type" => "button"]);
            // line 288
            echo "  ";
        }
        // line 289
        echo "
  <";
        // line 290
        echo twig_escape_filter($this->env, ($context["buttonTag"] ?? null), "html", null, true);
        echo " ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    <i class=\"material-icons\">";
        // line 291
        echo twig_escape_filter($this->env, ($context["button_icon"] ?? null), "html", null, true);
        echo "</i>
    ";
        // line 292
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "
  </";
        // line 293
        echo twig_escape_filter($this->env, ($context["buttonTag"] ?? null), "html", null, true);
        echo ">";
    }

    // line 296
    public function block_choice_widget($context, array $blocks = [])
    {
        // line 297
        $this->displayParentBlock("choice_widget", $context, $blocks);
        // line 298
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 301
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 302
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-select"))]);
        // line 303
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 306
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 307
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")))) {
            // line 308
            echo "<div class=\"control-group\">";
            // line 309
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 310
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 311
($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), "translation_domain" =>                 // line 312
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 313
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "</div>";
        } else {
            // line 318
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 319
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 320
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 321
($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), "translation_domain" =>                 // line 322
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 323
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            echo "</div>";
        }
    }

    // line 330
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        // line 331
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 335
            echo "        ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "</ul>
  </div>";
    }

    // line 341
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        // line 342
        echo "<li>
    ";
        // line 343
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "submitted_values", [], "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? null), "id_category", []), [], "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 344
        echo "    ";
        if (($context["multiple"] ?? null)) {
            // line 345
            echo "<div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"";
            // line 347
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo ">
          ";
            // line 348
            if (($this->getAttribute(($context["child"] ?? null), "active", [], "any", true, true) && ($this->getAttribute(($context["child"] ?? null), "active", []) == 0))) {
                // line 349
                echo "            <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
                echo "</i>";
            } else {
                // line 351
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
                echo "
          ";
            }
            // line 353
            echo "          ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 354
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 356
            echo "        </label>
      </div>";
        } else {
            // line 359
            echo "<div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[";
            // line 361
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo " class=\"category\">
          ";
            // line 362
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
            echo "
          ";
            // line 363
            if (array_key_exists("defaultCategory", $context)) {
                // line 364
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 366
            echo "        </label>
      </div>";
        }
        // line 369
        echo "    ";
        if ($this->getAttribute(($context["child"] ?? null), "children", [], "any", true, true)) {
            // line 370
            echo "      <ul>
        ";
            // line 371
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? null), "children", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 372
                echo "          ";
                $context["child"] = $context["item"];
                // line 373
                echo "          ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 375
            echo "</ul>
    ";
        }
        // line 377
        echo "  </li>";
    }

    // line 380
    public function block_translatefields_widget($context, array $blocks = [])
    {
        // line 381
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"translations tabbable\" id=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
    ";
        // line 383
        if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 384
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 386
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 387
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
                echo "\" class=\"";
                if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
                echo "\">
              ";
                // line 388
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", [])), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            echo "      </ul>
    ";
        }
        // line 394
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 396
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 397
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                echo "show active";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "valid", [])) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
            echo "\">
          ";
            // line 398
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
          ";
            // line 399
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "    </div>
  </div>
";
    }

    // line 406
    public function block_translate_fields_widget($context, array $blocks = [])
    {
        // line 407
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 408
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        }
        // line 410
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
    }

    // line 413
    public function block_translate_text_widget($context, array $blocks = [])
    {
        // line 414
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 416
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 417
            echo "      ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 418
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "label", []));
            // line 419
            echo "
      ";
            // line 420
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "name", []))) {
                // line 421
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 422
                echo "      ";
            }
            // line 424
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(($context["classes"] ?? null))]);
            // line 425
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 427
        echo "
    ";
        // line 428
        if ( !($context["hide_locales"] ?? null)) {
            // line 429
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 435
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
        >
          ";
            // line 437
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
          ";
            // line 441
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 442
                echo "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 444
            echo "        </div>
      </div>
    ";
        }
        // line 447
        echo "  </div>";
    }

    // line 450
    public function block_translate_textarea_widget($context, array $blocks = [])
    {
        // line 451
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 453
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 454
            echo "      ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["textarea"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["textarea"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 455
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["textarea"], "vars", []), "label", []));
            // line 456
            echo "
      ";
            // line 457
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["textarea"], "vars", []), "name", []))) {
                // line 458
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 459
                echo "      ";
            }
            // line 460
            echo "
      <div class=\"";
            // line 461
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 462
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 465
        echo "
    ";
        // line 466
        if (($context["show_locale_select"] ?? null)) {
            // line 467
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 473
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
        >
          ";
            // line 475
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"";
            // line 478
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
          ";
            // line 479
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 480
                echo "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 481
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\"
            >
              ";
                // line 483
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 486
            echo "        </div>
      </div>
    ";
        }
        // line 489
        echo "  </div>";
    }

    // line 492
    public function block_date_picker_widget($context, array $blocks = [])
    {
        // line 493
        echo "  ";
        ob_start(function () { return ''; });
        // line 494
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " datepicker"))]);
        // line 495
        echo "    <div class=\"input-group datepicker\">
      <input type=\"text\" class=\"form-control\" data-format=\"";
        // line 496
        echo twig_escape_filter($this->env, ($context["date_format"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
    ";
        // line 503
        $this->displayBlock("form_help", $context, $blocks);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 507
    public function block_date_range_widget($context, array $blocks = [])
    {
        // line 508
        echo "  ";
        ob_start(function () { return ''; });
        // line 509
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "from", []), 'widget');
        echo "
    ";
        // line 510
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "to", []), 'widget');
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 514
    public function block_search_and_reset_widget($context, array $blocks = [])
    {
        // line 515
        echo "  ";
        ob_start(function () { return ''; });
        // line 516
        echo "    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button d-block float-right\"
            title=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
            name=\"";
        // line 519
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "[search]\"
    >
      <i class=\"material-icons\">search</i>
      ";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
    ";
        // line 524
        if (($context["show_reset_button"] ?? null)) {
            // line 525
            echo "      <div class=\"js-grid-reset-button\">
        <div class=\"clearfix\"></div>
        <button type=\"reset\"
                name=\"";
            // line 528
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button float-right\"
                data-url=\"";
            // line 530
            echo twig_escape_filter($this->env, ($context["reset_url"] ?? null), "html", null, true);
            echo "\"
                data-redirect=\"";
            // line 531
            echo twig_escape_filter($this->env, ($context["redirect_url"] ?? null), "html", null, true);
            echo "\"
        >
          <i class=\"material-icons\">clear</i>
          ";
            // line 534
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "Admin.Actions"), "html", null, true);
            echo "
        </button>
      </div>
    ";
        }
        // line 538
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 541
    public function block_switch_widget($context, array $blocks = [])
    {
        // line 542
        echo "  ";
        ob_start(function () { return ''; });
        // line 543
        echo "  <div class=\"input-group\">
    <span class=\"ps-switch\">
        ";
        // line 545
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 546
            echo "          ";
            $context["inputId"] = ((($context["id"] ?? null) . "_") . $this->getAttribute($context["choice"], "value", []));
            // line 547
            echo "          <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\" ";
            $this->displayBlock("attributes", $context, $blocks);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", []), "html", null, true);
            echo "\"";
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                echo "checked=\"\"";
            }
            if (($context["disabled"] ?? null)) {
                echo "disabled=\"\"";
            }
            echo "type=\"radio\">
          <label for=\"";
            // line 548
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", []), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
            echo "</label>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 550
        echo "        <span class=\"slide-button\"></span>
    </span>
  </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 554
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 557
    public function block__form_step6_attachments_widget($context, array $blocks = [])
    {
        // line 558
        echo "  <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        echo "\">
    <small>";
        // line 559
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments ";
        // line 562
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        echo "\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">";
        // line 567
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-6\">";
        // line 568
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-2\">";
        // line 569
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
          </tr>
          </thead>
          <tbody>";
        // line 573
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 574
            echo "            <tr>
              <td class=\"col-md-3\">";
            // line 575
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
              <td class=\"col-md-6 file-name\"><span>";
            // line 576
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "data", []), $this->getAttribute($context["loop"], "index0", []), [], "array"), "file_name", [], "array"), "html", null, true);
            echo "</span></td>
              <td class=\"col-md-2\">";
            // line 577
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "data", []), $this->getAttribute($context["loop"], "index0", []), [], "array"), "mime", [], "array"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        echo "</tbody>
        </table>
      </div>
    </div>
  </div>
";
    }

    // line 589
    public function block_choice_label($context, array $blocks = [])
    {
        // line 591
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 592
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 595
    public function block_checkbox_label($context, array $blocks = [])
    {
        // line 596
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 599
    public function block_radio_label($context, array $blocks = [])
    {
        // line 600
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 603
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        // line 604
        echo "  ";
        // line 605
        echo "  ";
        if (array_key_exists("widget", $context)) {
            // line 606
            echo "    ";
            if (($context["required"] ?? null)) {
                // line 607
                echo "      ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
                // line 608
                echo "    ";
            }
            // line 609
            echo "    ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 610
                echo "      ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 611
                echo "    ";
            }
            // line 612
            echo "    ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 613
                echo "      ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 614
                echo "    ";
            }
            // line 615
            echo "
    ";
            // line 616
            if (($this->getAttribute(($context["block_prefixes"] ?? null), 2, [], "array") == "radio")) {
                // line 617
                echo "      <label class=\"form-check-label\"";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 618
                echo ($context["widget"] ?? null);
                // line 620
                echo "<i class=\"form-check-round\"></i>";
                // line 622
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 623
                echo "</label>
    ";
            } else {
                // line 625
                echo "      <div class=\"md-checkbox md-checkbox-inline\">
        <label";
                // line 626
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 627
                echo ($context["widget"] ?? null);
                // line 628
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 629
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 630
                echo "</label>
      </div>
    ";
            }
            // line 633
            echo "  ";
        }
    }

    // line 636
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 637
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : (""))));
        // line 638
        if (twig_in_filter("radio-custom", ($context["parent_label_class"] ?? null))) {
            // line 639
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-control-input"))]);
            // line 640
            echo "<div class=\"custom-control custom-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 641
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 642
            echo "</div>";
        } else {
            // line 644
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-check-input"))]);
            // line 645
            echo "<div class=\"form-check form-check-radio form-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 646
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 647
            echo "</div>";
        }
    }

    // line 651
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 652
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : (""))));
        // line 653
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-check-input"))]);
        // line 654
        echo "<div class=\"form-check form-check-radio form-checkbox\">";
        // line 655
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>         $this->renderBlock("base_checkbox_widget", $context, $blocks)]);
        // line 656
        echo "</div>";
    }

    // line 661
    public function block_form_errors($context, array $blocks = [])
    {
        // line 662
        if (($this->getAttribute(($context["attr"] ?? null), "fieldError", [], "array", true, true) && ($this->getAttribute(($context["attr"] ?? null), "fieldError", [], "array") == true))) {
            // line 663
            echo "    ";
            $this->displayBlock("form_errors_field", $context, $blocks);
            echo "
  ";
        } else {
            // line 665
            echo "    ";
            $this->displayBlock("form_errors_other", $context, $blocks);
            echo "
  ";
        }
    }

    // line 669
    public function block_form_errors_field($context, array $blocks = [])
    {
        // line 670
        echo "  ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 672
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                // line 674
                $context["popoverContainer"] = ("popover-error-container-" . $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []));
                // line 675
                echo "      <div class=\"";
                echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? null), "html", null, true);
                echo "\"></div>

      ";
                // line 677
                ob_start(function () { return ''; });
                // line 678
                echo "        <div class=\"popover-error-list\">
          <ul>";
                // line 680
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 681
                    echo "<li class=\"text-danger\"> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 682
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 683
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 684
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error"))), "html", null, true);
                    // line 685
                    echo "
              </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 688
                echo "          </ul>
        </div>
      ";
                $context["popoverErrorContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 691
                echo "
      <template class=\"js-popover-error-content\" data-id=\"";
                // line 692
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                echo "\">
        ";
                // line 693
                echo twig_escape_filter($this->env, ($context["popoverErrorContent"] ?? null), "html", null, true);
                echo "
      </template>

      ";
                // line 696
                ob_start(function () { return ''; });
                // line 697
                echo "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                // line 699
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                echo "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                // line 703
                echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? null), "html", null, true);
                echo "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> ";
                // line 705
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("%count% errors", twig_length_filter($this->env, ($context["errors"] ?? null)), [], "Admin.Global"), "html", null, true);
                echo "</u>
        </span>
      ";
                $context["errorPopover"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 708
                echo "
      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          ";
                // line 711
                echo twig_escape_filter($this->env, ($context["errorPopover"] ?? null), "html", null, true);
                echo "
        </div>
      </div>

      ";
            } else {
                // line 717
                echo "<div class=\"d-inline-block text-danger align-top\">
        <i class=\"material-icons form-error-icon\">error_outline</i>
      </div>
      <div class=\"d-inline-block\">
        ";
                // line 721
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 722
                    echo "          <div class=\"text-danger\">
            <p> ";
                    // line 723
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 724
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 725
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 726
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error"))), "html", null, true);
                    // line 727
                    echo "
            </p>
          </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 731
                echo "</div>";
            }
        }
    }

    // line 736
    public function block_form_errors_other($context, array $blocks = [])
    {
        // line 737
        echo "  ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 738
            echo "<div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        ";
            // line 743
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 744
                echo "            <p> ";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute(                // line 745
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                // line 746
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                // line 747
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error"))), "html", null, true);
                // line 748
                echo "
            </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 751
            echo "</div>
    </div>
  ";
        }
    }

    // line 758
    public function block_material_choice_table_widget($context, array $blocks = [])
    {
        // line 759
        echo "  ";
        ob_start(function () { return ''; });
        // line 760
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
        <tr>
          <th class=\"checkbox\">
            <div class=\"md-checkbox\">
              <label>
                <input type=\"checkbox\" class=\"js-choice-table-select-all\">
                <i class=\"md-checkbox-control\"></i>
                ";
        // line 769
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo "
              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 776
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 777
            echo "          <tr>
            <td>
              ";
            // line 779
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 783
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 789
    public function block_material_multiple_choice_table_widget($context, array $blocks = [])
    {
        // line 790
        echo "  ";
        ob_start(function () { return ''; });
        // line 791
        echo "    <div class=\"choice-table";
        if (($context["headers_fixed"] ?? null)) {
            echo "-headers-fixed";
        }
        echo " table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
        // line 795
        echo twig_escape_filter($this->env, ($context["table_label"] ?? null), "html", null, true);
        echo "</th>
          ";
        // line 796
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 797
            echo "            <th class=\"text-center\">
              ";
            // line 798
            if (($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "multiple", []) && !twig_in_filter($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "name", []), ($context["headers_to_disable"] ?? null)))) {
                // line 799
                echo "                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"";
                // line 801
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", []) + 1), "html", null, true);
                echo "\"
                   data-column-checked=\"false\"
                >
                  ";
                // line 804
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "label", []), "html", null, true);
                echo "
                </a>
              ";
            } else {
                // line 807
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "label", []), "html", null, true);
                echo "
              ";
            }
            // line 809
            echo "            </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 811
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 814
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 815
            echo "          <tr>
            <td>
              ";
            // line 817
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 819
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 820
                echo "              <td class=\"text-center\">
                ";
                // line 821
                if ($this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true), $context["child_choice_name"], [], "array", true, true)) {
                    // line 822
                    echo "                  ";
                    $context["entry_index"] = $this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array"), $context["child_choice_name"], [], "array");
                    // line 823
                    echo "
                  ";
                    // line 824
                    if ($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "multiple", [])) {
                        // line 825
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), [], "array"), 'widget', ["material_design" => true]);
                        echo "
                  ";
                    } else {
                        // line 827
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), [], "array"), 'widget');
                        echo "
                  ";
                    }
                    // line 829
                    echo "                ";
                } else {
                    // line 830
                    echo "                  --
                ";
                }
                // line 832
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 834
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 836
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 843
    public function block_translatable_fields_with_tabs($context, array $blocks = [])
    {
        // line 844
        echo "  <div class=\"translations tabbable\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
    ";
        // line 845
        if (((($context["hide_locales"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 846
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 847
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 848
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 849
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
                echo "\" class=\"";
                if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
                echo "\">
              ";
                // line 850
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", [])), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 854
            echo "      </ul>
    ";
        }
        // line 856
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 858
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 859
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hide_locales"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                echo "show active";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "valid", [])) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
            echo "\">
          ";
            // line 860
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 863
        echo "    </div>
  </div>
";
    }

    // line 867
    public function block_translatable_fields_with_dropdown($context, array $blocks = [])
    {
        // line 868
        $context["formClass"] = twig_trim_filter(((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " input-group locale-input-group js-locale-input-group d-flex"));
        // line 869
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["formClass"] ?? null), "html", null, true);
        echo "\">
      ";
        // line 870
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 871
            echo "        ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 872
            echo "        ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "label", []));
            // line 873
            echo "        ";
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "name", []))) {
                // line 874
                echo "          ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 875
                echo "        ";
            }
            // line 876
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\" style=\"flex-grow: 1;\">
          ";
            // line 877
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 880
        echo "      ";
        if ( !($context["hide_locales"] ?? null)) {
            // line 881
            echo "        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            ";
            // line 885
            if (array_key_exists("change_form_language_url", $context)) {
                // line 886
                echo "              data-change-language-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "change_form_language_url", []), "html", null, true);
                echo "\"
            ";
            }
            // line 888
            echo "                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"";
            // line 890
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
          >
            ";
            // line 892
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
          </button>
          <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"";
            // line 894
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
            ";
            // line 895
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 896
                echo "              <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 898
            echo "          </div>
        </div>
      ";
        }
        // line 901
        echo "    </div>";
    }

    // line 904
    public function block_translatable_widget($context, array $blocks = [])
    {
        // line 905
        if (($context["use_tabs"] ?? null)) {
            // line 906
            echo "    ";
            $this->displayBlock("translatable_fields_with_tabs", $context, $blocks);
            echo "
  ";
        } else {
            // line 908
            echo "    ";
            $this->displayBlock("translatable_fields_with_dropdown", $context, $blocks);
            echo "
  ";
        }
        // line 910
        echo "  ";
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 913
    public function block_birthday_widget($context, array $blocks = [])
    {
        // line 914
        echo "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 915
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 917
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 918
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 919
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 921
            echo "
    ";
            // line 922
            $context["yearWidget"] = (("<div class=\"col pl-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget')) . "</div>");
            // line 923
            echo "    ";
            $context["monthWidget"] = (("<div class=\"col birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget')) . "</div>");
            // line 924
            echo "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')) . "</div>");
            // line 926
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 927
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 928
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 929
($context["dayWidget"] ?? null)]);
            // line 932
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 933
                echo "</div>";
            }
        }
    }

    // line 938
    public function block_file_widget($context, array $blocks = [])
    {
        // line 939
        echo "  <style>
    .custom-file-label:after {
      content: \"";
        // line 941
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Browse", [], "Admin.Actions"), "html", null, true);
        echo "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 945
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(        // line 946
($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->env->getExtension('PrestaShopBundle\Twig\ContextIsoCodeProviderExtension')->getIsoCode()]);
        // line 951
        if (($this->getAttribute(($context["attr"] ?? null), "disabled", [], "any", true, true) && $this->getAttribute(($context["attr"] ?? null), "disabled", []))) {
            // line 952
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ($this->getAttribute(            // line 953
($context["attr"] ?? null), "class", []) . " disabled")]);
            // line 955
            echo "    ";
        }
        // line 956
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 958
        echo "<label class=\"custom-file-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
      ";
        // line 959
        $context["attributes"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []);
        // line 960
        echo "      ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["attributes"] ?? null), "placeholder", [], "any", true, true)) ? ($this->getAttribute(($context["attributes"] ?? null), "placeholder", [])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose file(s)", [], "Admin.Actions"))), "html", null, true);
        echo "
    </label>
  </div>";
        // line 963
        $this->displayBlock("form_help", $context, $blocks);
        // line 964
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "download_url", [])) {
            // line 965
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "download_url", []), "html", null, true);
            echo "\">
      ";
            // line 966
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download file", [], "Admin.Actions"), "html", null, true);
            echo "
    </a>
  ";
        }
    }

    // line 971
    public function block_shop_restriction_checkbox_widget($context, array $blocks = [])
    {
        // line 972
        echo "  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "is_allowed_to_display", [])) {
            // line 973
            echo "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 975
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 976
            echo "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 978
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"
          ";
            // line 979
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "
          value=\"";
            // line 980
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
    }

    // line 988
    public function block_generatable_text_widget($context, array $blocks = [])
    {
        // line 989
        echo "  <div class=\"input-group\">
    ";
        // line 990
        if (($context["compound"] ?? null)) {
            // line 991
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 993
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 995
        echo "    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 998
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
              data-generated-value-length=\"";
        // line 999
        echo twig_escape_filter($this->env, ($context["generated_value_length"] ?? null), "html", null, true);
        echo "\"
      >
        ";
        // line 1001
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
   </span>
  </div>
  ";
        // line 1005
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 1008
    public function block_text_with_recommended_length_widget($context, array $blocks = [])
    {
        // line 1009
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 1010
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 1014
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 1015
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1017
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 1019
        echo "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 1021
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_recommended_length_counter\"
  >
    <em>
      ";
        // line 1024
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . twig_length_filter($this->env,         // line 1025
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 1027
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]);
        // line 1029
        echo "
    </em>
  </small>
";
    }

    // line 1034
    public function block_text_with_length_counter_widget($context, array $blocks = [])
    {
        // line 1035
        echo "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 1036
        $context["current_length"] = ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []) - twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "value", [])));
        // line 1037
        echo "
    ";
        // line 1038
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "position", []) == "before")) {
            // line 1039
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1040
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 1043
        echo "
    ";
        // line 1044
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-max-length" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []), "maxlength" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []), "class" => "js-countable-input"]);
        // line 1045
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ($context["input_attr"] ?? null));
        // line 1047
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "input", []) == "input")) {
            // line 1048
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } elseif (($this->getAttribute($this->getAttribute(        // line 1049
($context["form"] ?? null), "vars", []), "input", []) == "textarea")) {
            // line 1050
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1052
            $this->displayBlock("form_widget", $context, $blocks);
        }
        // line 1054
        echo "
    ";
        // line 1055
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "position", []) == "after")) {
            // line 1056
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1057
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 1060
        echo "  </div>
";
    }

    // line 1063
    public function block_integer_min_max_filter_widget($context, array $blocks = [])
    {
        // line 1064
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "min_field", [], "array"), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 1065
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "max_field", [], "array"), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 1068
    public function block_number_min_max_filter_widget($context, array $blocks = [])
    {
        // line 1069
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "min_field", [], "array"), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 1070
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "max_field", [], "array"), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 1073
    public function block_number_widget($context, array $blocks = [])
    {
        // line 1074
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 1075
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1076
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 1079
    public function block_form_help($context, array $blocks = [])
    {
        // line 1080
        echo "  ";
        if (($context["help"] ?? null)) {
            // line 1081
            echo "    <small class=\"form-text\">";
            echo ($context["help"] ?? null);
            echo "</small>
  ";
        }
        // line 1083
        echo "  ";
        if (array_key_exists("warning", $context)) {
            // line 1084
            echo "    ";
            echo twig_escape_filter($this->env, ($context["warning"] ?? null), "html", null, true);
            echo "
  ";
        }
    }

    // line 1088
    public function block_form_external_link($context, array $blocks = [])
    {
        // line 1089
        echo "  ";
        if (array_key_exists("external_link", $context)) {
            // line 1090
            ob_start(function () { return ''; });
            // line 1091
            echo "<a ";
            $this->displayBlock("form_external_link_attributes", $context, $blocks);
            echo ">
        <i class=\"material-icons\">open_in_new</i>";
            $context["openingTag"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1095
            echo "<div class=\"small font-secondary";
            if (($this->getAttribute(($context["external_link"] ?? null), "align", []) === "right")) {
                echo " text-right";
            }
            echo "\">
      ";
            // line 1096
            echo twig_replace_filter($this->getAttribute(($context["external_link"] ?? null), "text", []), ["[1]" => ($context["openingTag"] ?? null), "[/1]" => "</a>"]);
            echo "
    </div>
  ";
        }
    }

    // line 1101
    public function block_form_external_link_attributes($context, array $blocks = [])
    {
        // line 1102
        $context["external_link_attr"] = twig_array_merge($this->getAttribute(($context["external_link"] ?? null), "attr", []), ["class" => twig_trim_filter(((($this->getAttribute($this->getAttribute(($context["external_link"] ?? null), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["external_link"] ?? null), "attr", [], "any", false, true), "class", []), "")) : ("")) . " btn btn-link px-0 align-right"))]);
        // line 1103
        echo "
  ";
        // line 1104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["external_link_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 1105
            echo "    ";
            if (!twig_in_filter($context["attrname"], [0 => "href", 1 => "class"])) {
                // line 1106
                echo "      ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"
    ";
            }
            // line 1108
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1109
        echo "
  target=\"_blank\"
  href=\"";
        // line 1111
        echo twig_escape_filter($this->env, $this->getAttribute(($context["external_link"] ?? null), "href", []), "html", null, true);
        echo "\"
  class=\"";
        // line 1112
        echo twig_escape_filter($this->env, $this->getAttribute(($context["external_link_attr"] ?? null), "class", []), "html", null, true);
        echo "\"";
    }

    // line 1115
    public function block_custom_content_widget($context, array $blocks = [])
    {
        // line 1116
        echo "  ";
        $this->loadTemplate(($context["template"] ?? null), "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 1116)->display(twig_array_merge($context, ($context["data"] ?? null)));
    }

    // line 1119
    public function block_text_widget($context, array $blocks = [])
    {
        // line 1120
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["aria-label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", [])], "Admin.Global")]);
        // line 1121
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 1122
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 1124
        echo "
  ";
        // line 1125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

  ";
        // line 1127
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 1128
            echo "    <datalist id=\"";
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . "_datalist"), "html", null, true);
            echo "\">
      ";
            // line 1129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1130
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1132
            echo "    </datalist>
  ";
        }
    }

    // line 1136
    public function block_form_prepend_alert($context, array $blocks = [])
    {
        // line 1137
        if ((array_key_exists("alert_position", $context) && (($context["alert_position"] ?? null) == "prepend"))) {
            // line 1138
            $this->displayBlock("form_alert", $context, $blocks);
        }
    }

    // line 1142
    public function block_form_append_alert($context, array $blocks = [])
    {
        // line 1143
        if ((array_key_exists("alert_position", $context) && (($context["alert_position"] ?? null) == "append"))) {
            // line 1144
            $this->displayBlock("form_alert", $context, $blocks);
        }
    }

    // line 1148
    public function block_form_alert($context, array $blocks = [])
    {
        // line 1149
        if (array_key_exists("alert_message", $context)) {
            // line 1150
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ($context["alert_type"] ?? null), "html", null, true);
            if (array_key_exists("alert_title", $context)) {
                echo " expandable-alert";
            }
            echo "\" role=\"alert\">
    ";
            // line 1151
            if (array_key_exists("alert_title", $context)) {
                // line 1152
                echo "      <p class=\"alert-text\">
        ";
                // line 1153
                echo ($context["alert_title"] ?? null);
                echo "
      </p>
    ";
            } else {
                // line 1156
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["alert_message"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1157
                    echo "        <p class=\"alert-text\">
          ";
                    // line 1158
                    echo $context["message"];
                    echo "
        </p>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1161
                echo "    ";
            }
            // line 1162
            echo "
    ";
            // line 1163
            if (array_key_exists("alert_title", $context)) {
                // line 1164
                echo "      <div class=\"alert-more collapse\" id=\"expandable_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                echo "\" style=\"\">
        ";
                // line 1165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["alert_message"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1166
                    echo "          <p>
            ";
                    // line 1167
                    echo $context["message"];
                    echo "
          </p>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1170
                echo "      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_";
                // line 1172
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            ";
                // line 1173
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more", [], "Admin.Actions"), "html", null, true);
                echo "
          </button>
       </div>
    ";
            }
            // line 1177
            echo "  </div>
  ";
        }
    }

    // line 1181
    public function block_unavailable_widget($context, array $blocks = [])
    {
        // line 1182
        echo "  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 1184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not available yet", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </p>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  3161 => 1184,  3157 => 1182,  3154 => 1181,  3148 => 1177,  3141 => 1173,  3137 => 1172,  3133 => 1170,  3124 => 1167,  3121 => 1166,  3117 => 1165,  3112 => 1164,  3110 => 1163,  3107 => 1162,  3104 => 1161,  3095 => 1158,  3092 => 1157,  3087 => 1156,  3081 => 1153,  3078 => 1152,  3076 => 1151,  3068 => 1150,  3066 => 1149,  3063 => 1148,  3058 => 1144,  3056 => 1143,  3053 => 1142,  3048 => 1138,  3046 => 1137,  3043 => 1136,  3037 => 1132,  3028 => 1130,  3024 => 1129,  3019 => 1128,  3017 => 1127,  3012 => 1125,  3009 => 1124,  3006 => 1122,  3004 => 1121,  3002 => 1120,  2999 => 1119,  2994 => 1116,  2991 => 1115,  2986 => 1112,  2982 => 1111,  2978 => 1109,  2972 => 1108,  2964 => 1106,  2961 => 1105,  2957 => 1104,  2954 => 1103,  2952 => 1102,  2949 => 1101,  2941 => 1096,  2934 => 1095,  2928 => 1091,  2926 => 1090,  2923 => 1089,  2920 => 1088,  2912 => 1084,  2909 => 1083,  2903 => 1081,  2900 => 1080,  2897 => 1079,  2893 => 1076,  2891 => 1075,  2889 => 1074,  2886 => 1073,  2880 => 1070,  2875 => 1069,  2872 => 1068,  2866 => 1065,  2861 => 1064,  2858 => 1063,  2853 => 1060,  2847 => 1057,  2844 => 1056,  2842 => 1055,  2839 => 1054,  2836 => 1052,  2833 => 1050,  2831 => 1049,  2829 => 1048,  2827 => 1047,  2825 => 1045,  2823 => 1044,  2820 => 1043,  2814 => 1040,  2811 => 1039,  2809 => 1038,  2806 => 1037,  2804 => 1036,  2801 => 1035,  2798 => 1034,  2791 => 1029,  2789 => 1027,  2788 => 1025,  2787 => 1024,  2781 => 1021,  2777 => 1019,  2774 => 1017,  2771 => 1015,  2769 => 1014,  2767 => 1010,  2765 => 1009,  2762 => 1008,  2756 => 1005,  2749 => 1001,  2744 => 999,  2740 => 998,  2735 => 995,  2732 => 993,  2729 => 991,  2727 => 990,  2724 => 989,  2721 => 988,  2710 => 980,  2706 => 979,  2702 => 978,  2698 => 976,  2696 => 975,  2692 => 973,  2689 => 972,  2686 => 971,  2678 => 966,  2673 => 965,  2671 => 964,  2669 => 963,  2663 => 960,  2661 => 959,  2656 => 958,  2654 => 956,  2651 => 955,  2649 => 953,  2647 => 952,  2645 => 951,  2643 => 946,  2642 => 945,  2635 => 941,  2631 => 939,  2628 => 938,  2622 => 933,  2620 => 932,  2618 => 929,  2617 => 928,  2616 => 927,  2615 => 926,  2612 => 924,  2609 => 923,  2607 => 922,  2604 => 921,  2599 => 919,  2597 => 918,  2595 => 917,  2592 => 915,  2589 => 914,  2586 => 913,  2581 => 910,  2575 => 908,  2569 => 906,  2567 => 905,  2564 => 904,  2560 => 901,  2555 => 898,  2544 => 896,  2540 => 895,  2536 => 894,  2531 => 892,  2526 => 890,  2522 => 888,  2516 => 886,  2514 => 885,  2508 => 881,  2505 => 880,  2496 => 877,  2491 => 876,  2488 => 875,  2485 => 874,  2482 => 873,  2479 => 872,  2476 => 871,  2472 => 870,  2467 => 869,  2465 => 868,  2462 => 867,  2456 => 863,  2447 => 860,  2426 => 859,  2422 => 858,  2418 => 856,  2414 => 854,  2404 => 850,  2394 => 849,  2391 => 848,  2387 => 847,  2384 => 846,  2382 => 845,  2377 => 844,  2374 => 843,  2366 => 836,  2359 => 834,  2352 => 832,  2348 => 830,  2345 => 829,  2339 => 827,  2333 => 825,  2331 => 824,  2328 => 823,  2325 => 822,  2323 => 821,  2320 => 820,  2316 => 819,  2311 => 817,  2307 => 815,  2303 => 814,  2298 => 811,  2283 => 809,  2277 => 807,  2271 => 804,  2265 => 801,  2261 => 799,  2259 => 798,  2256 => 797,  2239 => 796,  2235 => 795,  2225 => 791,  2222 => 790,  2219 => 789,  2211 => 783,  2201 => 779,  2197 => 777,  2193 => 776,  2183 => 769,  2172 => 760,  2169 => 759,  2166 => 758,  2159 => 751,  2152 => 748,  2150 => 747,  2149 => 746,  2148 => 745,  2146 => 744,  2142 => 743,  2135 => 738,  2132 => 737,  2129 => 736,  2123 => 731,  2115 => 727,  2113 => 726,  2112 => 725,  2111 => 724,  2110 => 723,  2107 => 722,  2103 => 721,  2097 => 717,  2089 => 711,  2084 => 708,  2078 => 705,  2073 => 703,  2066 => 699,  2062 => 697,  2060 => 696,  2054 => 693,  2050 => 692,  2047 => 691,  2042 => 688,  2034 => 685,  2032 => 684,  2031 => 683,  2030 => 682,  2028 => 681,  2024 => 680,  2021 => 678,  2019 => 677,  2013 => 675,  2011 => 674,  2009 => 672,  2006 => 670,  2003 => 669,  1995 => 665,  1989 => 663,  1987 => 662,  1984 => 661,  1980 => 656,  1978 => 655,  1976 => 654,  1974 => 653,  1972 => 652,  1969 => 651,  1964 => 647,  1962 => 646,  1958 => 645,  1956 => 644,  1953 => 642,  1951 => 641,  1947 => 640,  1945 => 639,  1943 => 638,  1941 => 637,  1938 => 636,  1933 => 633,  1928 => 630,  1926 => 629,  1924 => 628,  1922 => 627,  1908 => 626,  1905 => 625,  1901 => 623,  1899 => 622,  1897 => 620,  1895 => 618,  1880 => 617,  1878 => 616,  1875 => 615,  1872 => 614,  1869 => 613,  1866 => 612,  1863 => 611,  1860 => 610,  1857 => 609,  1854 => 608,  1851 => 607,  1848 => 606,  1845 => 605,  1843 => 604,  1840 => 603,  1836 => 600,  1833 => 599,  1829 => 596,  1826 => 595,  1822 => 592,  1820 => 591,  1817 => 589,  1808 => 580,  1791 => 577,  1787 => 576,  1783 => 575,  1780 => 574,  1763 => 573,  1757 => 569,  1753 => 568,  1749 => 567,  1741 => 562,  1735 => 559,  1730 => 558,  1727 => 557,  1723 => 554,  1717 => 550,  1699 => 548,  1681 => 547,  1678 => 546,  1661 => 545,  1657 => 543,  1654 => 542,  1651 => 541,  1646 => 538,  1639 => 534,  1633 => 531,  1629 => 530,  1624 => 528,  1619 => 525,  1617 => 524,  1612 => 522,  1606 => 519,  1602 => 518,  1598 => 516,  1595 => 515,  1592 => 514,  1585 => 510,  1580 => 509,  1577 => 508,  1574 => 507,  1567 => 503,  1549 => 496,  1546 => 495,  1543 => 494,  1540 => 493,  1537 => 492,  1533 => 489,  1528 => 486,  1519 => 483,  1514 => 481,  1511 => 480,  1507 => 479,  1503 => 478,  1497 => 475,  1492 => 473,  1484 => 467,  1482 => 466,  1479 => 465,  1470 => 462,  1466 => 461,  1463 => 460,  1460 => 459,  1457 => 458,  1455 => 457,  1452 => 456,  1449 => 455,  1446 => 454,  1442 => 453,  1437 => 451,  1434 => 450,  1430 => 447,  1425 => 444,  1414 => 442,  1410 => 441,  1406 => 440,  1400 => 437,  1395 => 435,  1387 => 429,  1385 => 428,  1382 => 427,  1366 => 425,  1364 => 424,  1361 => 422,  1358 => 421,  1356 => 420,  1353 => 419,  1350 => 418,  1347 => 417,  1330 => 416,  1325 => 414,  1322 => 413,  1318 => 410,  1315 => 408,  1313 => 407,  1310 => 406,  1304 => 402,  1295 => 399,  1291 => 398,  1270 => 397,  1266 => 396,  1262 => 394,  1258 => 392,  1248 => 388,  1238 => 387,  1235 => 386,  1231 => 385,  1228 => 384,  1226 => 383,  1222 => 382,  1217 => 381,  1214 => 380,  1210 => 377,  1206 => 375,  1189 => 373,  1186 => 372,  1169 => 371,  1166 => 370,  1163 => 369,  1159 => 366,  1153 => 364,  1151 => 363,  1147 => 362,  1139 => 361,  1135 => 359,  1131 => 356,  1125 => 354,  1122 => 353,  1117 => 351,  1112 => 349,  1110 => 348,  1102 => 347,  1098 => 345,  1095 => 344,  1093 => 343,  1090 => 342,  1087 => 341,  1082 => 337,  1065 => 335,  1048 => 334,  1045 => 333,  1039 => 331,  1036 => 330,  1031 => 326,  1025 => 323,  1024 => 322,  1023 => 321,  1022 => 320,  1018 => 319,  1014 => 318,  1011 => 316,  1005 => 313,  1004 => 312,  1003 => 311,  1002 => 310,  998 => 309,  996 => 308,  994 => 307,  991 => 306,  987 => 303,  985 => 302,  982 => 301,  976 => 298,  974 => 297,  971 => 296,  966 => 293,  962 => 292,  958 => 291,  952 => 290,  949 => 289,  946 => 288,  943 => 287,  940 => 286,  937 => 285,  934 => 284,  931 => 283,  928 => 282,  926 => 281,  923 => 280,  920 => 279,  918 => 278,  915 => 277,  911 => 274,  909 => 273,  906 => 272,  902 => 269,  898 => 268,  896 => 267,  893 => 266,  887 => 261,  884 => 260,  876 => 259,  871 => 257,  869 => 256,  867 => 255,  864 => 253,  862 => 252,  859 => 251,  853 => 246,  851 => 245,  849 => 243,  848 => 242,  847 => 241,  846 => 240,  841 => 238,  839 => 237,  837 => 236,  834 => 234,  832 => 233,  829 => 232,  825 => 229,  821 => 228,  819 => 227,  816 => 226,  811 => 222,  809 => 221,  807 => 220,  805 => 219,  803 => 218,  799 => 217,  797 => 216,  794 => 214,  792 => 213,  789 => 212,  782 => 206,  780 => 205,  778 => 204,  775 => 203,  771 => 200,  767 => 198,  761 => 195,  758 => 194,  756 => 193,  754 => 192,  748 => 189,  745 => 188,  742 => 187,  740 => 186,  737 => 185,  734 => 184,  729 => 181,  727 => 180,  725 => 179,  723 => 178,  720 => 177,  711 => 170,  709 => 169,  704 => 168,  701 => 167,  698 => 166,  695 => 165,  692 => 164,  690 => 163,  687 => 162,  682 => 160,  677 => 159,  674 => 158,  672 => 157,  667 => 156,  663 => 154,  661 => 153,  644 => 152,  642 => 151,  638 => 147,  635 => 144,  634 => 143,  633 => 142,  631 => 141,  628 => 140,  625 => 138,  622 => 137,  619 => 135,  617 => 134,  615 => 133,  612 => 132,  603 => 125,  600 => 124,  597 => 123,  594 => 122,  591 => 121,  588 => 120,  585 => 119,  582 => 118,  579 => 117,  576 => 116,  573 => 115,  571 => 114,  568 => 113,  565 => 112,  563 => 111,  560 => 110,  554 => 106,  552 => 105,  548 => 103,  546 => 102,  544 => 101,  542 => 99,  540 => 98,  538 => 96,  536 => 95,  525 => 94,  522 => 93,  516 => 88,  510 => 85,  505 => 84,  503 => 83,  501 => 82,  498 => 81,  492 => 78,  489 => 77,  483 => 74,  480 => 73,  478 => 72,  476 => 71,  474 => 70,  471 => 69,  467 => 66,  463 => 65,  460 => 64,  456 => 61,  453 => 60,  450 => 59,  447 => 58,  445 => 57,  442 => 56,  438 => 1181,  436 => 1148,  434 => 1142,  432 => 1136,  430 => 1119,  427 => 1118,  425 => 1115,  423 => 1101,  421 => 1088,  418 => 1087,  416 => 1079,  414 => 1073,  412 => 1068,  409 => 1067,  407 => 1063,  404 => 1062,  402 => 1034,  399 => 1033,  397 => 1008,  394 => 1007,  392 => 988,  389 => 987,  387 => 971,  384 => 970,  382 => 938,  379 => 937,  377 => 913,  374 => 912,  372 => 904,  369 => 903,  367 => 867,  364 => 866,  362 => 843,  359 => 841,  357 => 789,  354 => 788,  352 => 758,  349 => 757,  346 => 755,  344 => 736,  341 => 735,  339 => 669,  336 => 668,  334 => 661,  331 => 660,  328 => 658,  326 => 651,  323 => 650,  321 => 636,  318 => 635,  316 => 603,  313 => 602,  311 => 599,  308 => 598,  306 => 595,  303 => 594,  301 => 589,  298 => 588,  295 => 586,  293 => 557,  290 => 556,  288 => 541,  285 => 540,  283 => 514,  280 => 513,  278 => 507,  275 => 506,  273 => 492,  270 => 491,  268 => 450,  265 => 449,  263 => 413,  260 => 412,  258 => 406,  255 => 405,  253 => 380,  250 => 379,  248 => 341,  245 => 340,  243 => 330,  240 => 329,  238 => 306,  235 => 305,  233 => 301,  230 => 300,  228 => 296,  225 => 295,  223 => 277,  220 => 276,  218 => 272,  216 => 266,  214 => 251,  211 => 250,  209 => 232,  207 => 226,  205 => 212,  202 => 211,  200 => 203,  197 => 202,  195 => 184,  192 => 183,  190 => 177,  187 => 176,  185 => 132,  182 => 129,  180 => 110,  177 => 109,  175 => 93,  172 => 92,  169 => 90,  167 => 81,  164 => 80,  162 => 69,  160 => 64,  158 => 56,  155 => 53,  152 => 51,  149 => 46,  146 => 34,  143 => 25,  58 => 50,  51 => 49,  44 => 48,  25 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "/var/www/html/prestashop/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig");
    }
}
