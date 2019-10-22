<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/form/bootstrap_4.html.twig */
class __TwigTemplate_55075f9bf1fc96530717f14acac14d8da2f970df1f2102b90954c627d125369b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@EasyAdmin/form/bootstrap_4.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'collection_row' => [$this, 'block_collection_row'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'easyadmin_rest' => [$this, 'block_easyadmin_rest'],
                'item_actions' => [$this, 'block_item_actions'],
                'easyadmin_widget' => [$this, 'block_easyadmin_widget'],
                'easyadmin_widget_groups' => [$this, 'block_easyadmin_widget_groups'],
                'easyadmin_autocomplete_widget' => [$this, 'block_easyadmin_autocomplete_widget'],
                'easyadmin_autocomplete_inner_label' => [$this, 'block_easyadmin_autocomplete_inner_label'],
                'easyadmin_code_editor_widget' => [$this, 'block_easyadmin_code_editor_widget'],
                'easyadmin_text_editor_widget' => [$this, 'block_easyadmin_text_editor_widget'],
                'easyadmin_section_row' => [$this, 'block_easyadmin_section_row'],
                'easyadmin_batch_widget' => [$this, 'block_easyadmin_batch_widget'],
                'easyadmin_filters_widget' => [$this, 'block_easyadmin_filters_widget'],
                'easyadmin_numeric_filter_widget' => [$this, 'block_easyadmin_numeric_filter_widget'],
                'easyadmin_datetime_filter_widget' => [$this, 'block_easyadmin_datetime_filter_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_4.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_4.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 21
        echo "
";
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('form_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('file_widget', $context, $blocks);
        // line 123
        echo "
";
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('form_row', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('collection_row', $context, $blocks);
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('button_row', $context, $blocks);
        // line 194
        echo "
";
        // line 196
        echo "
";
        // line 197
        $this->displayBlock('form_label', $context, $blocks);
        // line 221
        echo "
";
        // line 224
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 240
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 290
        echo "
";
        // line 291
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 295
        echo "
";
        // line 296
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 337
        echo "
";
        // line 338
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 347
        echo "
";
        // line 348
        $this->displayBlock('item_actions', $context, $blocks);
        // line 377
        echo "
";
        // line 379
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 424
        echo "
";
        // line 425
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 461
        echo "
";
        // line 463
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 473
        echo "
";
        // line 474
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 478
        echo "
";
        // line 480
        $this->displayBlock('easyadmin_code_editor_widget', $context, $blocks);
        // line 489
        echo "
";
        // line 491
        $this->displayBlock('easyadmin_text_editor_widget', $context, $blocks);
        // line 497
        echo "
";
        // line 499
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        // line 512
        echo "
";
        // line 514
        $this->displayBlock('easyadmin_batch_widget', $context, $blocks);
        // line 529
        echo "
";
        // line 531
        $this->displayBlock('easyadmin_filters_widget', $context, $blocks);
        // line 581
        echo "
";
        // line 582
        $this->displayBlock('easyadmin_numeric_filter_widget', $context, $blocks);
        // line 598
        echo "
";
        // line 599
        $this->displayBlock('easyadmin_datetime_filter_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 4, $this->source); })()),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 5, $this->source); })()), ["class" => twig_join_filter([0 => ((twig_get_attribute($this->env, $this->source,             // line 6
($context["attr"] ?? null), "class", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 6), "")) : ("")), 1 => (twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 6, $this->source); })()), "view", [], "any", false, false, false, 6) . "-form")], " "), "data-view" => twig_get_attribute($this->env, $this->source,             // line 7
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 7, $this->source); })()), "view", [], "any", false, false, false, 7), "data-entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 8, $this->source); })()), "entity", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "data-entity-id" => (((twig_get_attribute($this->env, $this->source,             // line 9
($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 9, $this->source); })()), "entity", [], "any", false, false, false, 9), "primary_key_field_name", [], "any", false, false, false, 9), [], "any", true, true, false, 9) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 9, $this->source); })()), "entity", [], "any", false, false, false, 9), "primary_key_field_name", [], "any", false, false, false, 9), [], "any", false, false, false, 9)))) ? (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 9, $this->source); })()), "entity", [], "any", false, false, false, 9), "primary_key_field_name", [], "any", false, false, false, 9), [], "any", false, false, false, 9)) : (""))]);
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13)) > 0)) {
            // line 14
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'errors');
            echo "
    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 19
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "query", [], "any", false, false, false, 19), "get", [0 => "referer", 1 => ""], "method", false, false, false, 19), "html", null, true);
        echo "\"/>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget"));

        // line 25
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 25), "vars", [], "any", false, true, false, 25), "allow_delete", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 25), "vars", [], "any", false, true, false, 25), "allow_delete", [], "any", false, false, false, 25), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "        \$(function() {
            event.preventDefault();

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            var hasCountAttr = parentDiv.data('count');

            if (hasCountAttr === undefined) {
                var numItems = parentDiv.children('div.form-group').length;
                parentDiv.data('count', ++numItems)
            }

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
        });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 47
            echo "
        <div class=\"field-collection-item-row\">
            <div class=\"field-collection-item-action\">
                <a id=\"easyadmin-remove-collection-item-";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "vars", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\" href=\"#\" onclick=\"";
            echo (isset($context["remove_item_javascript"]) || array_key_exists("remove_item_javascript", $context) ? $context["remove_item_javascript"] : (function () { throw new RuntimeError('Variable "remove_item_javascript" does not exist.', 50, $this->source); })());
            echo "; return false;\" class=\"text-danger\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "\">
                    <i class=\"fa fa-fw fa-window-close\"></i>
                </a>
            </div>
            <div class=\"field-collection-item-widget\">
                ";
            // line 55
            $this->displayParentBlock("form_widget", $context, $blocks);
            echo "
            </div>
        </div>
    ";
        } else {
            // line 59
            echo "        ";
            $this->displayParentBlock("form_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 64
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 64, $this->source); })()), [0 => "file", 1 => "hidden"]))) {
            // line 65
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 65, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 65)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 65), "")) : ("")))]);
        }
        // line 67
        if (((isset($context["type"]) || array_key_exists("type", $context)) && (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 67, $this->source); })()) == "range") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 67, $this->source); })()) == "color")))) {
            // line 68
            echo "        ";
            // line 69
            $context["required"] = false;
        }
        // line 71
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 75
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 76
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 77
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 82
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 83
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 87
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 87, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 87)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 87), "")) : ("")))]);
        // line 88
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 90
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 90), "vars", [], "any", false, true, false, 90), "allow_delete", [], "any", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 90), "vars", [], "any", false, true, false, 90), "allow_delete", [], "any", false, false, false, 90), false)) : (false))) {
            // line 91
            echo "        ";
            ob_start();
            // line 92
            echo "            \$(function() {
                event.preventDefault();

                var containerDiv = \$('#";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 95, $this->source); })()), "html", null, true);
            echo "').parents('.form-group:first');
                var parentDiv = containerDiv.parents('[data-prototype]:first');
                containerDiv.remove();
                parentDiv.trigger('easyadmin.collection.item-deleted');

                if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                    \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
                }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 105
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a id=\"easyadmin-remove-collection-item-";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "vars", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107), "html", null, true);
            echo "\" href=\"#\" onclick=\"";
            echo (isset($context["remove_item_javascript"]) || array_key_exists("remove_item_javascript", $context) ? $context["remove_item_javascript"] : (function () { throw new RuntimeError('Variable "remove_item_javascript" does not exist.', 107, $this->source); })());
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-fw fa-remove\"></i>
                ";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        // line 116
        if ((((isset($context["vich"]) || array_key_exists("vich", $context))) ? (_twig_default_filter((isset($context["vich"]) || array_key_exists("vich", $context) ? $context["vich"] : (function () { throw new RuntimeError('Variable "vich" does not exist.', 116, $this->source); })()), false)) : (false))) {
            // line 117
            $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 117, $this->source); })()), "file")) : ("file"));
            // line 118
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 120
            $this->displayParentBlock("file_widget", $context, $blocks);
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 127
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 127), "fieldType", [], "any", true, true, false, 127)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 127), "fieldType", [], "any", false, false, false, 127), "default")) : ("default"));
        // line 128
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 128, $this->source); })()) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 128, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 128, $this->source); })()))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 128, $this->source); })()),  -2)), "html", null, true);
        echo "\">";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), 'label');
        // line 130
        echo "<div class=\"form-widget\">";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), 'widget');
        // line 133
        if ((twig_in_filter((isset($context["_field_type"]) || array_key_exists("_field_type", $context) ? $context["_field_type"] : (function () { throw new RuntimeError('Variable "_field_type" does not exist.', 133, $this->source); })()), [0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "dateinterval", 5 => "time", 6 => "time_immutable", 7 => "birthday"]) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 133), "nullable", [], "any", true, true, false, 133)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 133), "nullable", [], "any", false, false, false, 133), false)) : (false)))) {
            // line 134
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 136
            if ((null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 136, $this->source); })()))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 137
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 141
        echo "
            ";
        // line 142
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 142), "help", [], "any", true, true, false, 142)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 142), "help", [], "any", false, false, false, 142), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "vars", [], "any", false, false, false, 142), "help", [], "any", false, false, false, 142))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "vars", [], "any", false, false, false, 142), "help", [], "any", false, false, false, 142))) != "")) {
            // line 143
            echo "                <small class=\"form-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 143), "help", [], "any", true, true, false, 143)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 143), "help", [], "any", false, false, false, 143), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "vars", [], "any", false, false, false, 143), "help", [], "any", false, false, false, 143))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "vars", [], "any", false, false, false, 143), "help", [], "any", false, false, false, 143))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "vars", [], "any", false, false, false, 143), "translation_domain", [], "any", false, false, false, 143));
            echo "</small>
            ";
        }
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), 'errors');
        // line 147
        echo "</div>
    </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        // line 152
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 154
        if ((((isset($context["allow_add"]) || array_key_exists("allow_add", $context))) ? (_twig_default_filter((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 154, $this->source); })()), false)) : (false))) {
            // line 155
            echo "        ";
            ob_start();
            // line 156
            echo "            \$(function() {
                event.preventDefault();

                var collection = \$('#";
            // line 159
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 159, $this->source); })()), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 166, $this->source); })()), "vars", [], "any", false, false, false, 166), "name", [], "any", false, false, false, 166), "html", null, true);
            echo "label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 167
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 167, $this->source); })()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 167, $this->source); })()), "vars", [], "any", false, false, false, 167), "name", [], "any", false, false, false, 167), "html", null, true);
            echo "/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 167, $this->source); })()), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 168
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 168, $this->source); })()), "html", null, true);
            echo "\\]\\[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 168, $this->source); })()), "vars", [], "any", false, false, false, 168), "name", [], "any", false, false, false, 168), "html", null, true);
            echo "\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 168, $this->source); })()), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 177
            echo "
        <div class=\"form-group field-collection-action\">
            <div class=\"form-widget\">
                <a id=\"easyadmin-add-collection-item-";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "vars", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180), "html", null, true);
            echo "\" href=\"#\" onclick=\"";
            echo (isset($context["js_add_item"]) || array_key_exists("js_add_item", $context) ? $context["js_add_item"] : (function () { throw new RuntimeError('Variable "js_add_item" does not exist.', 180, $this->source); })());
            echo "; return false;\" class=\"btn btn-secondary btn-sm\">
                    <i class=\"fa fa-fw fa-plus\"></i>
                    <span class=\"btn-label\">";
            // line 182
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })())) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                </a>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 189
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 190
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 190, $this->source); })()),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 190), "css_class", [], "any", true, true, false, 190)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 190), "css_class", [], "any", false, false, false, 190), "")) : ("")), "html", null, true);
        echo "\">";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), 'widget');
        // line 192
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 197
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 198
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 198, $this->source); })()) === false)) {
            // line 199
            if (((isset($context["compound"]) || array_key_exists("compound", $context)) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 199, $this->source); })()))) {
                // line 200
                $context["element"] = "legend";
                // line 201
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 201, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 201)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 201), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 203
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 203, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 203, $this->source); })()), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 203)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 203), "")) : ("")) . " form-control-label"))]);
            }
            // line 205
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 205, $this->source); })())) {
                // line 206
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 206, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 206)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 206), "")) : ("")) . " required"))]);
            }
            // line 208
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 208, $this->source); })()))) {
                // line 209
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 209, $this->source); })()))) {
                    // line 210
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 210, $this->source); })()), ["%name%" =>                     // line 211
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 211, $this->source); })()), "%id%" =>                     // line 212
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 212, $this->source); })())]);
                } else {
                    // line 215
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 215, $this->source); })()));
                }
            }
            // line 218
            echo "<";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 218, $this->source); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 218, $this->source); })())) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ["attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 218, $this->source); })())];
                if (!twig_test_iterable($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 218, $this->getSourceContext());
                }
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_to_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4);
                $context['_parent'] = $context;
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 218, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 218, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 218, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 218, $this->source); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 218, $this->source); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 224
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 225
        echo "<div class=\"form-widget-compound\">
        ";
        // line 228
        echo "        ";
        $context["isEmptyCollection"] = (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 228, $this->source); })())) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 228, $this->source); })())));
        // line 229
        echo "        ";
        if ((isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 229, $this->source); })())) {
            // line 230
            echo "            ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
        ";
        }
        // line 232
        echo "        ";
        if (((isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 232, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 232), "prototype", [], "any", true, true, false, 232))) {
            // line 233
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 233, $this->source); })()), ["data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)]);
            // line 234
            echo "        ";
        }
        // line 235
        echo "
        ";
        // line 236
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 240
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 241
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 242
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 242, $this->source); })()), "entity", [], "any", false, false, false, 242), "templates", [], "any", false, false, false, 242), "label_empty", [], "any", false, false, false, 242));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 246
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 247
        echo "    ";
        $context["force_error"] = true;
        // line 248
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 251
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 252
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 253
        if ( !twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 253, $this->source); })()), "")) : ("")))) {
            // line 254
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 254, $this->source); })()), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 254, $this->source); })()), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle")));
            // line 255
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 255, $this->source); })()), "."));
            // line 256
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 263
            echo "            <a class=\"easyadmin-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 263, $this->source); })())), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 264
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new RuntimeError('Variable "file_extension" does not exist.', 264, $this->source); })()), [], "array", true, true, false, 264) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new RuntimeError('Variable "file_extension" does not exist.', 264, $this->source); })()), [], "array", false, false, false, 264)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new RuntimeError('Variable "file_extension" does not exist.', 264, $this->source); })()), [], "array", false, false, false, 264), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>
                ";
            // line 265
            echo twig_escape_filter($this->env, (isset($context["download_title"]) || array_key_exists("download_title", $context) ? $context["download_title"] : (function () { throw new RuntimeError('Variable "download_title" does not exist.', 265, $this->source); })()), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 268
        echo "
        ";
        // line 269
        ob_start();
        // line 270
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "file", [], "any", false, false, false, 270), "vars", [], "any", false, false, false, 270), "id", [], "any", false, false, false, 270), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), "file", [], "any", false, false, false, 273), "vars", [], "any", false, false, false, 273), "id", [], "any", false, false, false, 273), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 275
        echo "
        <div class=\"easyadmin-vich-file-actions\">
            ";
        // line 278
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "file", [], "any", false, false, false, 280), 'widget', ["attr" => ["onchange" => (isset($context["file_upload_js"]) || array_key_exists("file_upload_js", $context) ? $context["file_upload_js"] : (function () { throw new RuntimeError('Variable "file_upload_js" does not exist.', 280, $this->source); })())], "vich" => true]);
        echo "
            </div>

            ";
        // line 283
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 283)) {
            // line 284
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "delete", [], "any", false, false, false, 284), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 286
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 287
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), "file", [], "any", false, false, false, 287), "vars", [], "any", false, false, false, 287), "id", [], "any", false, false, false, 287), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 291
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 292
        echo "    ";
        $context["force_error"] = true;
        // line 293
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 296
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 297
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 298
        if ( !twig_test_empty((((isset($context["image_uri"]) || array_key_exists("image_uri", $context))) ? (_twig_default_filter((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 298, $this->source); })()), "")) : ("")))) {
            // line 299
            echo "            ";
            if (twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 299, $this->source); })()), "")) : ("")))) {
                // line 300
                echo "                <div class=\"easyadmin-thumbnail\">
                    <img style=\"cursor: initial\" src=\"";
                // line 301
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 301, $this->source); })())), "html", null, true);
                echo "\">
                </div>
            ";
            } else {
                // line 304
                echo "                ";
                $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 304, $this->source); })()));
                // line 305
                echo "
                <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
                // line 306
                echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new RuntimeError('Variable "_lightbox_id" does not exist.', 306, $this->source); })()), "html", null, true);
                echo "\" data-featherlight-close-on-click=\"anywhere\">
                    <img src=\"";
                // line 307
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 307, $this->source); })())), "html", null, true);
                echo "\">
                </a>

                <div id=\"";
                // line 310
                echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new RuntimeError('Variable "_lightbox_id" does not exist.', 310, $this->source); })()), "html", null, true);
                echo "\" class=\"easyadmin-lightbox\">
                    <img src=\"";
                // line 311
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 311, $this->source); })())), "html", null, true);
                echo "\">
                </div>
            ";
            }
            // line 314
            echo "        ";
        }
        // line 315
        echo "
        ";
        // line 316
        ob_start();
        // line 317
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 317, $this->source); })()), "file", [], "any", false, false, false, 317), "vars", [], "any", false, false, false, 317), "id", [], "any", false, false, false, 317), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 320
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "file", [], "any", false, false, false, 320), "vars", [], "any", false, false, false, 320), "id", [], "any", false, false, false, 320), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 322
        echo "
        <div class=\"easyadmin-vich-image-actions\">
            ";
        // line 325
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 327
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), "file", [], "any", false, false, false, 327), 'widget', ["attr" => ["onchange" => (isset($context["file_upload_js"]) || array_key_exists("file_upload_js", $context) ? $context["file_upload_js"] : (function () { throw new RuntimeError('Variable "file_upload_js" does not exist.', 327, $this->source); })())], "vich" => true]);
        echo "
            </div>

            ";
        // line 330
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 330)) {
            // line 331
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()), "delete", [], "any", false, false, false, 331), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 333
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 334
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "file", [], "any", false, false, false, 334), "vars", [], "any", false, false, false, 334), "id", [], "any", false, false, false, 334), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 338
    public function block_easyadmin_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        // line 339
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), 'rest');
        // line 341
        echo "<section class=\"content-footer\">
        <div class=\"form-actions\">";
        // line 343
        $this->displayBlock("item_actions", $context, $blocks);
        // line 344
        echo "</div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 348
    public function block_item_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_actions"));

        // line 349
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 349, $this->source); })()), "entity", [], "any", false, false, false, 349), "translation_domain", [], "any", false, false, false, 349);
        // line 350
        echo "    ";
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 350, $this->source); })()), "entity", [], "any", false, false, false, 350), "name", [], "any", false, false, false, 350)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 350, $this->source); })()), "entity", [], "any", false, false, false, 350), "label", [], "any", false, false, false, 350))];
        // line 351
        echo "
    ";
        // line 353
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <span class=\"btn-label\">";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 354, $this->source); })()), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new RuntimeError('Variable "_translation_domain" does not exist.', 354, $this->source); })())), "html", null, true);
        echo "</span>
    </button>

    ";
        // line 357
        $context["_entity_actions"] = (((twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 357, $this->source); })()), "view", [], "any", false, false, false, 357) == "new")) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("new", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 358
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 358, $this->source); })()), "entity", [], "any", false, false, false, 358), "name", [], "any", false, false, false, 358))) : ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("edit", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 359
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 359, $this->source); })()), "entity", [], "any", false, false, false, 359), "name", [], "any", false, false, false, 359))));
        // line 360
        echo "
    ";
        // line 361
        $context["_entity_id"] = (((twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 361, $this->source); })()), "view", [], "any", false, false, false, 361) == "new")) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 363
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 363, $this->source); })()), "item", [], "any", false, false, false, 363), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 363, $this->source); })()), "entity", [], "any", false, false, false, 363), "primary_key_field_name", [], "any", false, false, false, 363), [], "any", false, false, false, 363)));
        // line 364
        echo "
    ";
        // line 365
        $context["_request_parameters"] = ["entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 365, $this->source); })()), "entity", [], "any", false, false, false, 365), "name", [], "any", false, false, false, 365), "referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 365, $this->source); })()), "request", [], "any", false, false, false, 365), "query", [], "any", false, false, false, 365), "get", [0 => "referer"], "method", false, false, false, 365)];
        // line 366
        echo "
    ";
        // line 367
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", ["actions" =>         // line 368
(isset($context["_entity_actions"]) || array_key_exists("_entity_actions", $context) ? $context["_entity_actions"] : (function () { throw new RuntimeError('Variable "_entity_actions" does not exist.', 368, $this->source); })()), "entity_config" => twig_get_attribute($this->env, $this->source,         // line 369
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 369, $this->source); })()), "entity", [], "any", false, false, false, 369), "request_parameters" =>         // line 370
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 370, $this->source); })()), "translation_domain" =>         // line 371
(isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new RuntimeError('Variable "_translation_domain" does not exist.', 371, $this->source); })()), "trans_parameters" =>         // line 372
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 372, $this->source); })()), "item_id" =>         // line 373
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new RuntimeError('Variable "_entity_id" does not exist.', 373, $this->source); })()), "item" => twig_get_attribute($this->env, $this->source,         // line 374
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 374, $this->source); })()), "item", [], "any", false, false, false, 374)], false);
        // line 375
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 379
    public function block_easyadmin_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 380
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 380, $this->source); })()), "entity", [], "any", false, false, false, 380), "translation_domain", [], "any", false, false, false, 380);
        // line 381
        echo "    <div class=\"row\">
        ";
        // line 382
        if ((twig_length_filter($this->env, (isset($context["easyadmin_form_tabs"]) || array_key_exists("easyadmin_form_tabs", $context) ? $context["easyadmin_form_tabs"] : (function () { throw new RuntimeError('Variable "easyadmin_form_tabs" does not exist.', 382, $this->source); })())) > 0)) {
            // line 383
            echo "            <div class=\"col-12\">
                <div class=\"nav-tabs-custom form-tabs\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 386
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_tabs"]) || array_key_exists("easyadmin_form_tabs", $context) ? $context["easyadmin_form_tabs"] : (function () { throw new RuntimeError('Variable "easyadmin_form_tabs" does not exist.', 386, $this->source); })()));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 387
                echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link ";
                // line 388
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 388)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", [], "array", false, false, false, 388), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", [], "array", false, false, false, 388), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">";
                // line 389
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", true, true, false, 389)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 389), false)) : (false))) {
                    // line 390
                    echo "<i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 390), "html", null, true);
                    echo "\"></i>";
                }
                // line 392
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab_config"], "label", [], "array", false, false, false, 392), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new RuntimeError('Variable "_translation_domain" does not exist.', 392, $this->source); })())), "html", null, true);
                // line 393
                if ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 393) > 0)) {
                    // line 394
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("form.tab.error_badge_title", twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 394), [], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 395
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 395), "html", null, true);
                    // line 396
                    echo "</span>";
                }
                // line 398
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 401
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 403
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_tabs"]) || array_key_exists("easyadmin_form_tabs", $context) ? $context["easyadmin_form_tabs"] : (function () { throw new RuntimeError('Variable "easyadmin_form_tabs" does not exist.', 403, $this->source); })()));
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
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 404
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", [], "array", false, false, false, 404), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 404)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", true, true, false, 404)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", false, false, false, 404), "")) : ("")), "html", null, true);
                echo "\">
                                ";
                // line 405
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", true, true, false, 405)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", false, false, false, 405), false)) : (false))) {
                    // line 406
                    echo "                                    <div class=\"content-header-help tab-help\">
                                        ";
                    // line 407
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", false, false, false, 407), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new RuntimeError('Variable "_translation_domain" does not exist.', 407, $this->source); })()));
                    echo "
                                    </div>
                                ";
                }
                // line 410
                echo "
                                <div class=\"row\">
                                    ";
                // line 412
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 416
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 420
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 422
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 425
    public function block_easyadmin_widget_groups($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        // line 426
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["easyadmin_form_groups"]) || array_key_exists("easyadmin_form_groups", $context) ? $context["easyadmin_form_groups"] : (function () { throw new RuntimeError('Variable "easyadmin_form_groups" does not exist.', 426, $this->source); })()), function ($__group_config__) use ($context) { $context["group_config"] = $__group_config__; return ( !twig_get_attribute($this->env, $this->source, $context["group_config"], "form_tab", [], "any", false, false, false, 426) || (twig_get_attribute($this->env, $this->source, $context["group_config"], "form_tab", [], "any", false, false, false, 426) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 426, $this->source); })()))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 427
            echo "        <div class=\"field-group col-";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["group_config"], "columns", [], "any", true, true, false, 427)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "columns", [], "any", false, false, false, 427), "12")) : ("12")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["group_config"], "css_class", [], "any", true, true, false, 427)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "css_class", [], "any", false, false, false, 427), "")) : ("")), "html", null, true);
            echo "\">
            <fieldset>
                ";
            // line 429
            if (((((twig_get_attribute($this->env, $this->source, $context["group_config"], "label", [], "any", true, true, false, 429)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "label", [], "any", false, false, false, 429), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", true, true, false, 429)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", false, false, false, 429), false)) : (false))) || ((twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", [], "any", true, true, false, 429)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", [], "any", false, false, false, 429), false)) : (false)))) {
                // line 430
                echo "                    <legend class=\"";
                echo ((((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", true, true, false, 430)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", false, false, false, 430), false)) : (false))) ? ("with-icon") : (""));
                echo "\">
                        ";
                // line 431
                if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", true, true, false, 431)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", false, false, false, 431), false)) : (false))) {
                    // line 432
                    echo "                            <i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", false, false, false, 432), "html", null, true);
                    echo "\"></i>
                        ";
                }
                // line 434
                echo "                        ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group_config"], "label", [], "any", false, false, false, 434), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new RuntimeError('Variable "_translation_domain" does not exist.', 434, $this->source); })()));
                echo "
                    </legend>

                    ";
                // line 437
                if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "help", [], "any", true, true, false, 437)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "help", [], "any", false, false, false, 437), false)) : (false))) {
                    // line 438
                    echo "                        <div class=\"legend-help\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group_config"], "help", [], "any", false, false, false, 438), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new RuntimeError('Variable "_translation_domain" does not exist.', 438, $this->source); })()));
                    echo "</div>
                    ";
                }
                // line 440
                echo "                ";
            }
            // line 441
            echo "
                <div class=\"row\">
                    ";
            // line 443
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 443, $this->source); })()), function ($__field__) use ($context) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 443), "block_prefixes", [], "any", false, false, false, 443)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 443), "easyadmin", [], "any", false, false, false, 443), "form_group", [], "any", false, false, false, 443) == $context["group_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 444
                echo "                        ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 444), "easyadmin", [], "any", false, false, false, 444), "form_tab", [], "any", false, false, false, 444) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 444), "easyadmin", [], "any", false, false, false, 444), "form_tab", [], "any", false, false, false, 444) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 444, $this->source); })())))) {
                    // line 445
                    echo "                            <div class=\"col-";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 445), "easyadmin", [], "any", false, true, false, 445), "field", [], "any", false, true, false, 445), "columns", [], "any", true, true, false, 445)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 445), "easyadmin", [], "any", false, true, false, 445), "field", [], "any", false, true, false, 445), "columns", [], "any", false, false, false, 445), "12")) : ("12")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 445), "easyadmin", [], "any", false, true, false, 445), "field", [], "any", false, true, false, 445), "css_class", [], "any", true, true, false, 445)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 445), "easyadmin", [], "any", false, true, false, 445), "field", [], "any", false, true, false, 445), "css_class", [], "any", false, false, false, 445), "")) : ("")), "html", null, true);
                    echo "\">
                                ";
                    // line 446
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                            </div>
                        ";
                }
                // line 449
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 450
            echo "                </div>
            </fieldset>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 454
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 454, $this->source); })()), function ($__field__) use ($context) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 454), "block_prefixes", [], "any", false, false, false, 454)) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 454), "easyadmin", [], "any", false, false, false, 454), "form_tab", [], "any", false, false, false, 454) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 454), "easyadmin", [], "any", false, false, false, 454), "form_tab", [], "any", false, false, false, 454) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 454, $this->source); })())))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 455
                echo "            <div class=\"col-";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 455), "easyadmin", [], "any", false, true, false, 455), "field", [], "any", false, true, false, 455), "columns", [], "any", true, true, false, 455)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 455), "easyadmin", [], "any", false, true, false, 455), "field", [], "any", false, true, false, 455), "columns", [], "any", false, false, false, 455), "12")) : ("12")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 455), "easyadmin", [], "any", false, true, false, 455), "field", [], "any", false, true, false, 455), "css_class", [], "any", true, true, false, 455)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 455), "easyadmin", [], "any", false, true, false, 455), "field", [], "any", false, true, false, 455), "css_class", [], "any", false, false, false, 455), "")) : ("")), "html", null, true);
                echo "\">
                ";
                // line 456
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 459
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 463
    public function block_easyadmin_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 464
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 464, $this->source); })()), "autocomplete", [], "any", false, false, false, 464), 'widget', ["attr" => twig_array_merge(        // line 465
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 465, $this->source); })()), ["data-easyadmin-autocomplete-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ["action" => "autocomplete", "entity" =>         // line 468
(isset($context["autocomplete_entity_name"]) || array_key_exists("autocomplete_entity_name", $context) ? $context["autocomplete_entity_name"] : (function () { throw new RuntimeError('Variable "autocomplete_entity_name" does not exist.', 468, $this->source); })())])])]);
        // line 471
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 474
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 475
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 475, $this->source); })()), "parent", [], "any", false, false, false, 475), "vars", [], "any", false, false, false, 475), "name", [], "any", false, false, false, 475);
        // line 476
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 480
    public function block_easyadmin_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_code_editor_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_code_editor_widget"));

        // line 481
        echo "    <textarea id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 481, $this->source); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 481, $this->source); })()), "html", null, true);
        echo "\" data-easyadmin-code-editor data-language=\"";
        echo twig_escape_filter($this->env, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 481, $this->source); })()), "html", null, true);
        echo "\" data-tab-size=\"";
        echo twig_escape_filter($this->env, (isset($context["tabSize"]) || array_key_exists("tabSize", $context) ? $context["tabSize"] : (function () { throw new RuntimeError('Variable "tabSize" does not exist.', 481, $this->source); })()), "html", null, true);
        echo "\" data-indent-with-tabs=\"";
        echo (((isset($context["indentWithTabs"]) || array_key_exists("indentWithTabs", $context) ? $context["indentWithTabs"] : (function () { throw new RuntimeError('Variable "indentWithTabs" does not exist.', 481, $this->source); })())) ? ("true") : ("false"));
        echo "\" data-js-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/form-type-code-editor.js"), "html", null, true);
        echo "\" data-css-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/form-type-code-editor.css"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 481, $this->source); })()), "html", null, true);
        echo "</textarea>

    ";
        // line 483
        if ( !(null === (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 483, $this->source); })()))) {
            // line 484
            echo "        <style type=\"text/css\">
            #";
            // line 485
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 485, $this->source); })()), "html", null, true);
            echo " + .CodeMirror { height: ";
            echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 485, $this->source); })()), "html", null, true);
            echo "px !important; max-height: none; }
        </style>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 491
    public function block_easyadmin_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_text_editor_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_text_editor_widget"));

        // line 492
        echo "    <input id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 492, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 492, $this->source); })()), "html", null, true);
        echo "\" type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 492, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"easyadmin-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 494
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 494, $this->source); })()), "html", null, true);
        echo "\" data-js-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/form-type-text-editor.js"), "html", null, true);
        echo "\" data-css-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/form-type-text-editor.css"), "html", null, true);
        echo "\"></trix-editor>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 499
    public function block_easyadmin_section_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 500
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 500, $this->source); })()), "entity", [], "any", false, false, false, 500), "translation_domain", [], "any", false, false, false, 500);
        // line 501
        echo "    <div class=\"form-section ";
        echo ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 501), "icon", [], "any", true, true, false, 501)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 501), "icon", [], "any", false, false, false, 501), false)) : (false)) == false) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 501), "label", [], "any", true, true, false, 501)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 501), "label", [], "any", false, false, false, 501), false)) : (false)) == false))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 501), "css_class", [], "any", true, true, false, 501)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 501), "css_class", [], "any", false, false, false, 501), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 503
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 503), "icon", [], "any", true, true, false, 503)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 503), "icon", [], "any", false, false, false, 503), false)) : (false))) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 503, $this->source); })()), "field", [], "any", false, false, false, 503), "icon", [], "any", false, false, false, 503), "html", null, true);
            echo "\"></i>";
        }
        // line 504
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 504), "label", [], "any", true, true, false, 504)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 504), "label", [], "any", false, false, false, 504), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 504), "label", [], "any", true, true, false, 504)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 504), "label", [], "any", false, false, false, 504), "")) : ("")), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new RuntimeError('Variable "_translation_domain" does not exist.', 504, $this->source); })()));
        }
        echo "</span>
        </h2>

        ";
        // line 507
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 507), "help", [], "any", true, true, false, 507)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 507), "help", [], "any", false, false, false, 507), false)) : (false))) {
            // line 508
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 508, $this->source); })()), "field", [], "any", false, false, false, 508), "help", [], "any", false, false, false, 508), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new RuntimeError('Variable "_translation_domain" does not exist.', 508, $this->source); })()));
            echo "</p>
        ";
        }
        // line 510
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 514
    public function block_easyadmin_batch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_batch_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_batch_widget"));

        // line 515
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 515, $this->source); })()), "entity", [], "any", false, false, false, 515), "translation_domain", [], "any", false, false, false, 515);
        // line 516
        echo "    ";
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 516, $this->source); })()), "entity", [], "any", false, false, false, 516), "name", [], "any", false, false, false, 516)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 516, $this->source); })()), "entity", [], "any", false, false, false, 516), "label", [], "any", false, false, false, 516))];
        // line 517
        echo "
    ";
        // line 518
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 518, $this->source); })()), "ids", [], "any", false, false, false, 518), 'widget');
        echo "
    <button type=\"button\" class=\"btn btn-link deselect-batch-button\">";
        // line 519
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.deselect", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 519, $this->source); })()), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new RuntimeError('Variable "_translation_domain" does not exist.', 519, $this->source); })())), "html", null, true);
        echo "</button>
    ";
        // line 520
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batch_actions"]) || array_key_exists("batch_actions", $context) ? $context["batch_actions"] : (function () { throw new RuntimeError('Variable "batch_actions" does not exist.', 520, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 521
            echo "        <button type=\"submit\" class=\"btn ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "css_class", [], "any", true, true, false, 521)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "css_class", [], "any", false, false, false, 521), "btn-secondary")) : ("btn-secondary")), "html", null, true);
            echo "\" title=\"";
            ((twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", true, true, false, 521)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 521), "")) : ("")))) ? (print ("")) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 521), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 521, $this->source); })())), "html", null, true))));
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 521, $this->source); })()), "name", [], "any", false, false, false, 521), "vars", [], "any", false, false, false, 521), "full_name", [], "any", false, false, false, 521), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 521), "html", null, true);
            echo "\">";
            // line 522
            if (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 522)) {
                echo "<i class=\"fa fa-fw fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 522), "html", null, true);
                echo "\"></i> ";
            }
            // line 523
            if ((twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", true, true, false, 523) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 523)))) {
                // line 524
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 524)), "html", null, true);
            }
            // line 526
            echo "</button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 531
    public function block_easyadmin_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_filters_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_filters_widget"));

        // line 532
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new RuntimeError('Variable "easyadmin" does not exist.', 532, $this->source); })()), "entity", [], "any", false, false, false, 532), "translation_domain", [], "any", false, false, false, 532);
        // line 533
        echo "    ";
        $context["applied_filters"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "filters", [], "any", false, true, false, 533), "applied", [], "any", true, true, false, 533)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "filters", [], "any", false, true, false, 533), "applied", [], "any", false, false, false, 533), [])) : ([]));
        // line 534
        echo "
    ";
        // line 535
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 535, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 536
            echo "        <div class=\"filter-field ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 536)) {
                echo "border-bottom";
            }
            echo " py-1 px-3 ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 536)) {
                echo "pb-2";
            }
            echo "\">
            <div class=\"filter-heading\" id=\"filter-heading-";
            // line 537
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 537), "html", null, true);
            echo "\">
                <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 538
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 538), "name", [], "any", false, false, false, 538), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 538, $this->source); })()))) {
                echo "checked";
            }
            echo ">
                <a data-toggle=\"collapse\" href=\"#filter-content-";
            // line 539
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 539), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 539), "name", [], "any", false, false, false, 539), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 539, $this->source); })()))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 539), "html", null, true);
            echo "\">
                    ";
            // line 540
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 540), "label", [], "any", true, true, false, 540)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 540), "label", [], "any", false, false, false, 540), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 540), "name", [], "any", false, false, false, 540)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 540), "name", [], "any", false, false, false, 540)))), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new RuntimeError('Variable "_translation_domain" does not exist.', 540, $this->source); })())), "html", null, true);
            echo "
                </a>
            </div>
            <div id=\"filter-content-";
            // line 543
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 543), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 543), "name", [], "any", false, false, false, 543), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 543, $this->source); })()))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 543), "html", null, true);
            echo "\">
                <div class=\"form-widget my-2\">
                    ";
            // line 545
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                </div>
            </div>
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 550
        echo "
    <script>
        document.querySelectorAll('.filter-checkbox').forEach(filterCheckbox => {
            filterCheckbox.addEventListener('change', function () {
                const filterToggleLink = filterCheckbox.nextElementSibling;
                const filterExpandedAttribute = filterCheckbox.nextElementSibling.getAttribute('aria-expanded');

                if ((filterCheckbox.checked && 'false' === filterExpandedAttribute) || (!filterCheckbox.checked && 'true' === filterExpandedAttribute)) {
                    filterToggleLink.click();
                }
            });
        });

        // we can't use -> \"document.querySelector('form#filters').addEventListener('change', ...);\"
        // because it doesn't work with Select2 elements changes
        // TODO: when using the native datepicker, 'change' isn't fired (either in plain JavaScript
        // or jQuery) unless you input the entire date + time information
        \$(document).on('change', 'form#";
        // line 567
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 567, $this->source); })()), "vars", [], "any", false, false, false, 567), "id", [], "any", false, false, false, 567), "html", null, true);
        echo "', function (event) {
            if (event.target.classList.contains('filter-checkbox')) {
                return;
            }

            let filterCheckbox = event.target.closest('.filter-field').querySelector('.filter-checkbox');
            if (!filterCheckbox.checked) {
                filterCheckbox.checked = true;
            }
        });
    </script>

    ";
        // line 579
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 582
    public function block_easyadmin_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_numeric_filter_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_numeric_filter_widget"));

        // line 583
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 584
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 584, $this->source); })()), "comparison", [], "any", false, false, false, 584), 'row');
        echo "
        ";
        // line 585
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 585, $this->source); })()), "value", [], "any", false, false, false, 585), 'row');
        echo "
        <div id=\"wrapper_";
        // line 586
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 586, $this->source); })()), "value2", [], "any", false, false, false, 586), "vars", [], "any", false, false, false, 586), "id", [], "any", false, false, false, 586), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 586, $this->source); })()), "comparison", [], "any", false, false, false, 586), "vars", [], "any", false, false, false, 586), "value", [], "any", false, false, false, 586) != "between")) {
            echo "style=\"display: none\"";
        }
        echo ">
            ";
        // line 587
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 587, $this->source); })()), "value2", [], "any", false, false, false, 587), 'row');
        echo "
        </div>
        <script>
            document.querySelector('#";
        // line 590
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 590, $this->source); })()), "comparison", [], "any", false, false, false, 590), "vars", [], "any", false, false, false, 590), "id", [], "any", false, false, false, 590), "html", null, true);
        echo "').addEventListener('change', function(event) {
                const input = document.querySelector('#wrapper_";
        // line 591
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 591, $this->source); })()), "value2", [], "any", false, false, false, 591), "vars", [], "any", false, false, false, 591), "id", [], "any", false, false, false, 591), "html", null, true);
        echo "');
                input.style.display = event.currentTarget.value === 'between' ? '' : 'none';
            });
        </script>
    </div>";
        // line 596
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 596, $this->source); })()), 'errors');
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 599
    public function block_easyadmin_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_datetime_filter_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_datetime_filter_widget"));

        // line 600
        echo "    ";
        $this->displayBlock("easyadmin_numeric_filter_widget", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_4.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1993 => 600,  1983 => 599,  1973 => 596,  1966 => 591,  1962 => 590,  1956 => 587,  1948 => 586,  1944 => 585,  1940 => 584,  1937 => 583,  1927 => 582,  1915 => 579,  1900 => 567,  1881 => 550,  1862 => 545,  1851 => 543,  1845 => 540,  1837 => 539,  1831 => 538,  1827 => 537,  1816 => 536,  1799 => 535,  1796 => 534,  1793 => 533,  1790 => 532,  1780 => 531,  1765 => 526,  1762 => 524,  1760 => 523,  1754 => 522,  1744 => 521,  1740 => 520,  1736 => 519,  1732 => 518,  1729 => 517,  1726 => 516,  1723 => 515,  1713 => 514,  1702 => 510,  1696 => 508,  1694 => 507,  1685 => 504,  1679 => 503,  1671 => 501,  1668 => 500,  1658 => 499,  1641 => 494,  1631 => 492,  1621 => 491,  1605 => 485,  1602 => 484,  1600 => 483,  1580 => 481,  1570 => 480,  1560 => 476,  1557 => 475,  1547 => 474,  1536 => 471,  1534 => 468,  1533 => 465,  1531 => 464,  1521 => 463,  1507 => 459,  1498 => 456,  1491 => 455,  1486 => 454,  1478 => 450,  1472 => 449,  1466 => 446,  1459 => 445,  1456 => 444,  1452 => 443,  1448 => 441,  1445 => 440,  1439 => 438,  1437 => 437,  1430 => 434,  1424 => 432,  1422 => 431,  1417 => 430,  1415 => 429,  1407 => 427,  1401 => 426,  1391 => 425,  1380 => 422,  1374 => 420,  1368 => 416,  1350 => 412,  1346 => 410,  1340 => 407,  1337 => 406,  1335 => 405,  1324 => 404,  1307 => 403,  1303 => 401,  1295 => 398,  1292 => 396,  1290 => 395,  1286 => 394,  1284 => 393,  1282 => 392,  1277 => 390,  1275 => 389,  1266 => 388,  1263 => 387,  1259 => 386,  1254 => 383,  1252 => 382,  1249 => 381,  1246 => 380,  1236 => 379,  1225 => 375,  1223 => 374,  1222 => 373,  1221 => 372,  1220 => 371,  1219 => 370,  1218 => 369,  1217 => 368,  1216 => 367,  1213 => 366,  1211 => 365,  1208 => 364,  1206 => 363,  1205 => 361,  1202 => 360,  1200 => 359,  1199 => 358,  1198 => 357,  1192 => 354,  1189 => 353,  1186 => 351,  1183 => 350,  1180 => 349,  1170 => 348,  1158 => 344,  1156 => 343,  1153 => 341,  1151 => 339,  1141 => 338,  1128 => 334,  1125 => 333,  1119 => 331,  1117 => 330,  1111 => 327,  1107 => 326,  1104 => 325,  1100 => 322,  1095 => 320,  1088 => 317,  1086 => 316,  1083 => 315,  1080 => 314,  1074 => 311,  1070 => 310,  1064 => 307,  1060 => 306,  1057 => 305,  1054 => 304,  1048 => 301,  1045 => 300,  1042 => 299,  1040 => 298,  1037 => 297,  1027 => 296,  1014 => 293,  1011 => 292,  1001 => 291,  988 => 287,  985 => 286,  979 => 284,  977 => 283,  971 => 280,  967 => 279,  964 => 278,  960 => 275,  955 => 273,  948 => 270,  946 => 269,  943 => 268,  937 => 265,  933 => 264,  928 => 263,  925 => 256,  922 => 255,  919 => 254,  917 => 253,  914 => 252,  904 => 251,  891 => 248,  888 => 247,  878 => 246,  865 => 242,  862 => 241,  852 => 240,  840 => 236,  837 => 235,  834 => 234,  831 => 233,  828 => 232,  822 => 230,  819 => 229,  816 => 228,  813 => 225,  803 => 224,  775 => 218,  771 => 215,  768 => 212,  767 => 211,  766 => 210,  764 => 209,  762 => 208,  759 => 206,  757 => 205,  754 => 203,  751 => 201,  749 => 200,  747 => 199,  745 => 198,  735 => 197,  725 => 192,  723 => 191,  717 => 190,  707 => 189,  691 => 182,  684 => 180,  679 => 177,  663 => 168,  655 => 167,  651 => 166,  641 => 159,  636 => 156,  633 => 155,  631 => 154,  625 => 152,  615 => 151,  604 => 147,  602 => 146,  596 => 143,  594 => 142,  591 => 141,  584 => 137,  578 => 136,  574 => 134,  572 => 133,  570 => 131,  568 => 130,  566 => 129,  558 => 128,  556 => 127,  546 => 126,  535 => 120,  532 => 118,  530 => 117,  528 => 116,  518 => 115,  503 => 109,  496 => 107,  492 => 105,  479 => 95,  474 => 92,  471 => 91,  469 => 90,  467 => 88,  465 => 87,  455 => 86,  445 => 83,  443 => 82,  441 => 81,  431 => 80,  421 => 77,  419 => 76,  417 => 75,  407 => 74,  397 => 71,  394 => 69,  392 => 68,  390 => 67,  387 => 65,  385 => 64,  375 => 63,  361 => 59,  354 => 55,  342 => 50,  337 => 47,  317 => 30,  312 => 27,  309 => 26,  306 => 25,  296 => 24,  284 => 19,  282 => 17,  276 => 14,  274 => 13,  271 => 12,  268 => 11,  266 => 9,  265 => 8,  264 => 7,  263 => 6,  261 => 5,  259 => 4,  249 => 3,  239 => 599,  236 => 598,  234 => 582,  231 => 581,  229 => 531,  226 => 529,  224 => 514,  221 => 512,  219 => 499,  216 => 497,  214 => 491,  211 => 489,  209 => 480,  206 => 478,  204 => 474,  201 => 473,  199 => 463,  196 => 461,  194 => 425,  191 => 424,  189 => 379,  186 => 377,  184 => 348,  181 => 347,  179 => 338,  176 => 337,  174 => 296,  171 => 295,  169 => 291,  166 => 290,  164 => 251,  161 => 250,  159 => 246,  156 => 245,  154 => 240,  152 => 224,  149 => 221,  147 => 197,  144 => 196,  141 => 194,  139 => 189,  136 => 188,  134 => 151,  131 => 150,  129 => 126,  126 => 125,  123 => 123,  121 => 115,  118 => 114,  116 => 86,  113 => 85,  111 => 80,  108 => 79,  106 => 74,  103 => 73,  101 => 63,  98 => 62,  96 => 24,  93 => 23,  90 => 21,  88 => 3,  85 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% use 'bootstrap_4_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [attr.class|default(''), easyadmin.view ~ '-form']|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name) ?? '',
        }) %}
    {% endif %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    {{- parent() -}}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
        \$(function() {
            event.preventDefault();

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            var hasCountAttr = parentDiv.data('count');

            if (hasCountAttr === undefined) {
                var numItems = parentDiv.children('div.form-group').length;
                parentDiv.data('count', ++numItems)
            }

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
        });
        {% endset %}

        <div class=\"field-collection-item-row\">
            <div class=\"field-collection-item-action\">
                <a id=\"easyadmin-remove-collection-item-{{ form.vars.id }}\" href=\"#\" onclick=\"{{ remove_item_javascript|raw }}; return false;\" class=\"text-danger\" title=\"{{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}\">
                    <i class=\"fa fa-fw fa-window-close\"></i>
                </a>
            </div>
            <div class=\"field-collection-item-widget\">
                {{ parent() }}
            </div>
        </div>
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default(''))|trim}) -%}
    {% endif %}
    {%- if type is defined and (type == 'range' or type == 'color') %}
        {# Attribute \"required\" is not supported #}
        {%- set required = false -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block date_widget -%}
    <div class=\"datetime-widget datetime-widget-date\">
        {{- parent() -}}
    </div>
{%- endblock date_widget %}

{% block time_widget -%}
    <div class=\"datetime-widget datetime-widget-time\">
        {{- parent() -}}
    </div>
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default(''))|trim}) -%}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
                event.preventDefault();

                var containerDiv = \$('#{{ id }}').parents('.form-group:first');
                var parentDiv = containerDiv.parents('[data-prototype]:first');
                containerDiv.remove();
                parentDiv.trigger('easyadmin.collection.item-deleted');

                if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                    \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
                }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a id=\"easyadmin-remove-collection-item-{{ form.vars.id }}\" href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-fw fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block file_widget -%}
    {% if vich|default(false) %}
        {%- set type = type|default('file') -%}
        {{- block('form_widget_simple') -}}
    {% else %}
        {{- parent() -}}
    {% endif %}
{%- endblock %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_label(form) -}}
        <div class=\"form-widget\">
            {{- form_widget(form) -}}

            {% if _field_type in ['datetime', 'datetime_immutable', 'date', 'date_immutable', 'dateinterval', 'time', 'time_immutable', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {% if easyadmin.field.help|default(form.vars.help) != '' %}
                <small class=\"form-help\">{{ easyadmin.field.help|default(form.vars.help)|trans(domain = form.vars.translation_domain)|raw }}</small>
            {% endif %}

            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                event.preventDefault();

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>{{ prototype.vars.name }}label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}_{{ prototype.vars.name }}/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[{{ prototype.vars.name }}\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"form-group field-collection-action\">
            <div class=\"form-widget\">
                <a id=\"easyadmin-add-collection-item-{{ form.vars.id }}\" href=\"#\" onclick=\"{{ js_add_item|raw }}; return false;\" class=\"btn btn-secondary btn-sm\">
                    <i class=\"fa fa-fw fa-plus\"></i>
                    <span class=\"btn-label\">{{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}</span>
                </a>
            </div>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{# Labels #}

{% block form_label -%}
    {% if label is not same as(false) -%}
        {%- if compound is defined and compound -%}
            {%- set element = 'legend' -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- else -%}
            {%- set label_attr = label_attr|merge({for: id, class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label %}

{# Errors #}

{%- block form_widget_compound -%}
    <div class=\"form-widget-compound\">
        {# the \"is iterable\" check is needed because if an object implements __toString() and
           returns an empty string, \"is empty\" returns true even if it's not a collection #}
        {% set isEmptyCollection = value is iterable and value is empty %}
        {% if isEmptyCollection %}
            {{ block('empty_collection') }}
        {% endif %}
        {% if isEmptyCollection or form.vars.prototype is defined %}
            {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
        {% endif %}

        {{ parent() }}
    </div>
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            {% set file_extension = download_uri|split('.')|last %}
            {% set extension_icons = {
                'gif': 'fa-file-image-o',
                'jpg': 'fa-file-image-o',
                'pdf': 'fa-file-pdf-o',
                'png': 'fa-file-image-o',
                'zip': 'fa-file-archive-o'
            } %}
            <a class=\"easyadmin-vich-file-name\" href=\"{{ asset(download_uri) }}\">
                <i class=\"fa fa-fw {{ extension_icons[file_extension] ?? 'fa-file-o' }}\"></i>
                {{ download_title }}
            </a>
        {% endif %}

        {% set file_upload_js %}
            var newFile = document.getElementById('{{ form.file.vars.id }}').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('{{ form.file.vars.id }}_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        {% endset %}

        <div class=\"easyadmin-vich-file-actions\">
            {# the container element is needed to allow customizing the <input type=\"file\" /> #}
            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> {{ 'action.choose_file'|trans({}, 'EasyAdminBundle') }}
                {{ form_widget(form.file, { 'attr': { 'onchange': file_upload_js }, vich: true}) }}
            </div>

            {% if form.delete is defined %}
                {{ form_row(form.delete, { label: 'form.label.delete'|trans({}, 'VichUploaderBundle') }) }}
            {% endif %}
        </div>
        <div class=\"small\" id=\"{{ form.file.vars.id }}_new_file_name\"></div>
    </div>
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
    <div class=\"easyadmin-vich-image\">
        {% if image_uri|default('') is not empty %}
            {% if download_uri|default('') is empty %}
                <div class=\"easyadmin-thumbnail\">
                    <img style=\"cursor: initial\" src=\"{{ asset(image_uri) }}\">
                </div>
            {% else %}
                {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

                <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                    <img src=\"{{ asset(download_uri) }}\">
                </a>

                <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                    <img src=\"{{ asset(download_uri) }}\">
                </div>
            {% endif %}
        {% endif %}

        {% set file_upload_js %}
            var newFile = document.getElementById('{{ form.file.vars.id }}').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('{{ form.file.vars.id }}_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        {% endset %}

        <div class=\"easyadmin-vich-image-actions\">
            {# the container element is needed to allow customizing the <input type=\"file\" /> #}
            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> {{ 'action.choose_file'|trans({}, 'EasyAdminBundle') }}
                {{ form_widget(form.file, { 'attr': { 'onchange': file_upload_js }, vich: true}) }}
            </div>

            {% if form.delete is defined %}
                {{ form_row(form.delete, { label: 'form.label.delete'|trans({}, 'VichUploaderBundle') }) }}
            {% endif %}
        </div>
        <div class=\"small\" id=\"{{ form.file.vars.id }}_new_file_name\"></div>
    </div>
{% endblock %}

{% block easyadmin_rest %}
    {{- form_rest(form) -}}

    <section class=\"content-footer\">
        <div class=\"form-actions\">
            {{- block('item_actions') -}}
        </div>
    </section>
{% endblock easyadmin_rest %}

{% block item_actions %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <span class=\"btn-label\">{{ 'action.save'|trans(_trans_parameters, _translation_domain) }}</span>
    </button>

    {% set _entity_actions = (easyadmin.view == 'new')
        ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
        : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

    {% set _entity_id = (easyadmin.view == 'new')
        ? null
        : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

    {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

    {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
        actions: _entity_actions,
        entity_config: easyadmin.entity,
        request_parameters: _request_parameters,
        translation_domain: _translation_domain,
        trans_parameters: _trans_parameters,
        item_id: _entity_id,
        item: easyadmin.item
    }, with_context = false) }}
{% endblock item_actions %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"row\">
        {% if easyadmin_form_tabs | length > 0 %}
            <div class=\"col-12\">
                <div class=\"nav-tabs-custom form-tabs\">
                    <ul class=\"nav nav-tabs\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link {% if tab_config.active %}active{% endif %}\" href=\"#{{ tab_config['id'] }}\" id=\"{{ tab_config['id'] }}-tab\" data-toggle=\"tab\">
                                    {%- if tab_config.icon|default(false) -%}
                                        <i class=\"fa fa-fw fa-{{ tab_config.icon }}\"></i>
                                    {%- endif -%}
                                    {{ tab_config['label']|trans(domain = _translation_domain) }}
                                    {%- if tab_config.errors > 0 -%}
                                        <span class=\"badge badge-danger\" title=\"{{ 'form.tab.error_badge_title'|transchoice(tab_config.errors, {}, 'EasyAdminBundle') }}\">
                                            {{- tab_config.errors -}}
                                        </span>
                                    {%- endif -%}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                    <div class=\"tab-content\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <div id=\"{{ tab_config['id'] }}\" class=\"tab-pane {% if tab_config.active %}active{% endif %} {{ tab_config['css_class']|default('') }}\">
                                {% if tab_config['help']|default(false) %}
                                    <div class=\"content-header-help tab-help\">
                                        {{ tab_config['help']|trans(domain = _translation_domain)|raw }}
                                    </div>
                                {% endif %}

                                <div class=\"row\">
                                    {{ block('easyadmin_widget_groups') }}
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        {% else %}
            {{ block('easyadmin_widget_groups') }}
        {% endif %}
    </div>
{% endblock easyadmin_widget %}

{% block easyadmin_widget_groups %}
    {% for group_name, group_config in easyadmin_form_groups|filter(group_config => not group_config.form_tab or group_config.form_tab == tab_name) %}
        <div class=\"field-group col-{{ group_config.columns|default('12') }} {{ group_config.css_class|default('') }}\">
            <fieldset>
                {% if group_config.label|default(false) or group_config.icon|default(false) or group_config.collapsible|default(false) %}
                    <legend class=\"{{ group_config.icon|default(false) ? 'with-icon' }}\">
                        {% if group_config.icon|default(false) %}
                            <i class=\"fa fa-fw fa-{{ group_config.icon }}\"></i>
                        {% endif %}
                        {{ group_config.label|trans(domain = _translation_domain)|raw }}
                    </legend>

                    {% if group_config.help|default(false) %}
                        <div class=\"legend-help\">{{ group_config.help|trans(domain = _translation_domain)|raw }}</div>
                    {% endif %}
                {% endif %}

                <div class=\"row\">
                    {% for field in form|filter(field => 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name) %}
                        {% if not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name %}
                            <div class=\"col-{{ field.vars.easyadmin.field.columns|default('12') }} {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                {{ form_row(field) }}
                            </div>
                        {% endif %}
                    {% endfor %}
                </div>
            </fieldset>
        </div>
    {% else %}
        {% for field in form|filter(field => 'hidden' not in field.vars.block_prefixes and (not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name)) %}
            <div class=\"col-{{ field.vars.easyadmin.field.columns|default('12') }} {{ field.vars.easyadmin.field.css_class|default('') }}\">
                {{ form_row(field) }}
            </div>
        {% endfor %}
    {% endfor %}
{% endblock easyadmin_widget_groups %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdmin's CodeEditor form type #}
{% block easyadmin_code_editor_widget %}
    <textarea id=\"{{ id }}\" name=\"{{ full_name }}\" data-easyadmin-code-editor data-language=\"{{ language }}\" data-tab-size=\"{{ tabSize }}\" data-indent-with-tabs=\"{{ indentWithTabs ? 'true' : 'false' }}\" data-js-url=\"{{ asset(\"bundles/easyadmin/form-type-code-editor.js\") }}\" data-css-url=\"{{ asset(\"bundles/easyadmin/form-type-code-editor.css\") }}\">{{ data }}</textarea>

    {% if height is not null %}
        <style type=\"text/css\">
            #{{ id }} + .CodeMirror { height: {{ height }}px !important; max-height: none; }
        </style>
    {% endif %}
{% endblock easyadmin_code_editor_widget %}

{# EasyAdmin's TextEditor form type #}
{% block easyadmin_text_editor_widget %}
    <input id=\"{{ id }}\" value=\"{{ data }}\" type=\"hidden\" name=\"{{ full_name }}\">
    <div class=\"easyadmin-text-editor-wrapper\">
        <trix-editor input=\"{{ id }}\" data-js-url=\"{{ asset(\"bundles/easyadmin/form-type-text-editor.js\") }}\" data-css-url=\"{{ asset(\"bundles/easyadmin/form-type-text-editor.css\") }}\"></trix-editor>
    </div>
{% endblock easyadmin_text_editor_widget %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"form-section {{ easyadmin.field.icon|default(false) == false and easyadmin.field.label|default(false) == false ? 'form-section-empty' }} {{ easyadmin.field.css_class|default('') }}\">
        <h2>
            {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-fw fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
            <span>{% if easyadmin.field.label|default(false) %}{{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}{% endif %}</span>
        </h2>

        {% if easyadmin.field.help|default(false) %}
            <p class=\"form-section-help\">{{ easyadmin.field.help|trans(domain = _translation_domain)|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}

{# EasyAdminBatch form type #}
{% block easyadmin_batch_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {{ form_widget(form.ids) }}
    <button type=\"button\" class=\"btn btn-link deselect-batch-button\">{{ 'action.deselect'|trans(_trans_parameters, _translation_domain) }}</button>
    {% for action in batch_actions %}
        <button type=\"submit\" class=\"btn {{ action.css_class|default('btn-secondary') }}\" title=\"{{ action.title|default('') is empty ? '' : action.title|trans(_trans_parameters) }}\" name=\"{{ form.name.vars.full_name }}\" value=\"{{ action.name }}\">
            {%- if action.icon %}<i class=\"fa fa-fw fa-{{ action.icon }}\"></i> {% endif -%}
            {%- if action.label is defined and not action.label is empty -%}
                {{ action.label|trans }}
            {%- endif -%}
        </button>
    {% endfor %}
{% endblock easyadmin_batch_widget %}

{# EasyAdminFilters form type #}
{% block easyadmin_filters_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set applied_filters = easyadmin.filters.applied|default([]) %}

    {% for field in form %}
        <div class=\"filter-field {% if not loop.last %}border-bottom{% endif %} py-1 px-3 {% if loop.last %}pb-2{% endif %}\">
            <div class=\"filter-heading\" id=\"filter-heading-{{ loop.index }}\">
                <input type=\"checkbox\" class=\"filter-checkbox\" {% if field.vars.name in applied_filters %}checked{% endif %}>
                <a data-toggle=\"collapse\" href=\"#filter-content-{{ loop.index }}\" aria-expanded=\"{{ field.vars.name in applied_filters ? 'true' : 'false' }}\" aria-controls=\"filter-content-{{ loop.index }}\">
                    {{ field.vars.label|default(field.vars.name|humanize)|trans(domain = _translation_domain) }}
                </a>
            </div>
            <div id=\"filter-content-{{ loop.index }}\" class=\"filter-content collapse {% if field.vars.name in applied_filters %}show{% endif %}\" aria-labelledby=\"filter-heading-{{ loop.index }}\">
                <div class=\"form-widget my-2\">
                    {{ form_widget(field) }}
                </div>
            </div>
        </div>
    {% endfor %}

    <script>
        document.querySelectorAll('.filter-checkbox').forEach(filterCheckbox => {
            filterCheckbox.addEventListener('change', function () {
                const filterToggleLink = filterCheckbox.nextElementSibling;
                const filterExpandedAttribute = filterCheckbox.nextElementSibling.getAttribute('aria-expanded');

                if ((filterCheckbox.checked && 'false' === filterExpandedAttribute) || (!filterCheckbox.checked && 'true' === filterExpandedAttribute)) {
                    filterToggleLink.click();
                }
            });
        });

        // we can't use -> \"document.querySelector('form#filters').addEventListener('change', ...);\"
        // because it doesn't work with Select2 elements changes
        // TODO: when using the native datepicker, 'change' isn't fired (either in plain JavaScript
        // or jQuery) unless you input the entire date + time information
        \$(document).on('change', 'form#{{ form.vars.id }}', function (event) {
            if (event.target.classList.contains('filter-checkbox')) {
                return;
            }

            let filterCheckbox = event.target.closest('.filter-field').querySelector('.filter-checkbox');
            if (!filterCheckbox.checked) {
                filterCheckbox.checked = true;
            }
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock easyadmin_filters_widget %}

{% block easyadmin_numeric_filter_widget %}
    <div class=\"form-widget-compound\">
        {{ form_row(form.comparison) }}
        {{ form_row(form.value) }}
        <div id=\"wrapper_{{ form.value2.vars.id }}\" {% if form.comparison.vars.value != 'between' %}style=\"display: none\"{% endif %}>
            {{ form_row(form.value2) }}
        </div>
        <script>
            document.querySelector('#{{ form.comparison.vars.id }}').addEventListener('change', function(event) {
                const input = document.querySelector('#wrapper_{{ form.value2.vars.id }}');
                input.style.display = event.currentTarget.value === 'between' ? '' : 'none';
            });
        </script>
    </div>
    {{- form_errors(form) -}}
{% endblock  easyadmin_numeric_filter_widget %}

{% block easyadmin_datetime_filter_widget %}
    {{ block('easyadmin_numeric_filter_widget') }}
{% endblock  easyadmin_datetime_filter_widget %}
", "@EasyAdmin/form/bootstrap_4.html.twig", "/home/diene/Téléchargements/Telegram Desktop/ApiSymfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_4.html.twig");
    }
}
